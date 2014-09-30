<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/ft_form_4_variables.php");
include('include/xtempl.php');
include('classes/editpage.php');
include("classes/searchclause.php");

add_nocache_headers();

global $globalEvents;

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'E') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired");
	return;
}

$layout = new TLayout("edit2","BoldOrange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["edit"] = array();

$layout->containers["edit"][] = array("name"=>"editheader","block"=>"","substyle"=>2);


$layout->containers["edit"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["edit"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"editfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"editbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["edit"] = "1";
$layout->blocks["top"][] = "edit";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["ft_form_4_edit"] = $layout;




if ((sizeof($_POST)==0) && (postvalue('ferror')) && (!postvalue("editid1"))){
	$returnJSON['success'] = false;
	$returnJSON['message'] = "Error occurred";
	$returnJSON['fatalError'] = true;
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}
else if ((sizeof($_POST)==0) && (postvalue('ferror')) && (postvalue("editid1"))){
	if (postvalue('fly')){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_edit"] = "<< "."Error occurred"." >>";
	}
}
/////////////////////////////////////////////////////////////
//init variables
/////////////////////////////////////////////////////////////
if(postvalue("editType")=="inline")
	$inlineedit = EDIT_INLINE;
elseif(postvalue("editType")==EDIT_POPUP)
	$inlineedit = EDIT_POPUP;
else
	$inlineedit = EDIT_SIMPLE;

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

$flyId = $id+1;
$xt = new Xtempl();

// assign an id
$xt->assign("id",$id);

$templatefile = ($inlineedit == EDIT_INLINE) ? "ft_form_4_inline_edit.htm" : "ft_form_4_edit.htm";

//array of params for classes
$params = array("pageType" => PAGE_EDIT,"id" => $id);


$params['tName'] = $strTableName;
$params['xt'] = &$xt;
$params['mode'] = $inlineedit;
$params['includes_js'] = $includes_js;
$params['includes_jsreq'] = $includes_jsreq;
$params['includes_css'] = $includes_css;
$params['locale_info'] = $locale_info;
$params['templatefile'] = $templatefile;
$params['pageEditLikeInline'] = ($inlineedit == EDIT_INLINE);
//Get array of tabs for edit page
$params['useTabsOnEdit'] = $gSettings->useTabsOnEdit();
if($params['useTabsOnEdit'])
	$params['arrEditTabs'] = $gSettings->getEditTabs();

$pageObject = new EditPage($params);

//	For ajax request 
if($_REQUEST["action"]!="")
{
	if($pageObject->lockingObj)
	{
		$arrkeys = explode("&",refine($_REQUEST["keys"]));
		foreach($arrkeys as $ind=>$val)
			$arrkeys[$ind]=urldecode($val);
		
		if($_REQUEST["action"]=="unlock")
		{
			$pageObject->lockingObj->UnlockRecord($strTableName,$arrkeys,$_REQUEST["sid"]);
			exit();	
		}
		else if($_REQUEST["action"]=="lockadmin" && (IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP))
		{
			$pageObject->lockingObj->UnlockAdmin($strTableName,$arrkeys,$_REQUEST["startEdit"]=="yes");
			if($_REQUEST["startEdit"]=="no")
				echo "unlock";
			else if($_REQUEST["startEdit"]=="yes")
				echo "lock";
			exit();	
		}
		else if($_REQUEST["action"]=="confirm")
		{
			if(!$pageObject->lockingObj->ConfirmLock($strTableName,$arrkeys,$message));
				echo $message;
			exit();	
		}
	}
	else
		exit();
}

$filename = $status = $message = $mesClass = $usermessage = $strWhereClause = $bodyonload = "";
$showValues = $showRawValues = $showFields = $showDetailKeys = $key = $next = $prev = array();
$HaveData = $enableCtrlsForEditing = true;
$error_happened = $readevalues = $IsSaved = false;

$auditObj = GetAuditObject($strTableName);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;


if($pageObject->lockingObj)
{
	$system_attrs = "style='display:none;'";
	$system_message = "";
}

if ($inlineedit!=EDIT_INLINE)
{
	// add button events if exist
	$pageObject->addButtonHandlers();
}

$url_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//	Before Process event
if($eventObj->exists("BeforeProcessEdit"))
	$eventObj->BeforeProcessEdit($conn, $pageObject);

$keys = array();
$skeys = "";
$savedKeys = array();
$keys["submission_id"] = urldecode(postvalue("editid1"));
$savedKeys["submission_id"] = urldecode(postvalue("editid1"));
$skeys.= rawurlencode(postvalue("editid1"))."&";

$pageObject->setKeys($keys);

if($skeys!="")
	$skeys = substr($skeys,0,-1);

//For show detail tables on master page edit
if($inlineedit!=EDIT_INLINE)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables && !isMobile())
	{
		$ids = $id;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}
/////////////////////////////////////////////////////////////
//	process entered data, read and save
/////////////////////////////////////////////////////////////

// proccess captcha
if ($inlineedit!=EDIT_INLINE)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();

if(@$_POST["a"] == "edited")
{
	$strWhereClause = whereAdd($strWhereClause,KeyWhere($keys));
		$oldValuesRead = false;	
	if($eventObj->exists("AfterEdit") || $eventObj->exists("BeforeEdit") || $auditObj || isTableGeoUpdatable($pageObject->cipherer->pSet)
		|| $globalEvents->exists("IsRecordEditable", $strTableName))
	{
		//	read old values
		$rsold = db_query($gQuery->gSQLWhere($strWhereClause), $conn);
		$dataold = $pageObject->cipherer->DecryptFetchedArray($rsold);
		$oldValuesRead = true;
	}
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($dataold, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
	$evalues = $efilename_values = $blobfields = array();
	

//	processing submission_id - begin
	$condition = 1;

	if($condition)
	{
		$control_submission_id = $pageObject->getControl("submission_id", $id);
		$control_submission_id->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		//	update key value
		if($control_submission_id->getWebValue()!==false)
			$keys["submission_id"] = $control_submission_id->getWebValue();
	}
//	processing submission_id - end
//	processing programa - begin
	$condition = 1;

	if($condition)
	{
		$control_programa = $pageObject->getControl("programa", $id);
		$control_programa->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing programa - end
//	processing date - begin
	$condition = 1;

	if($condition)
	{
		$control_date = $pageObject->getControl("date", $id);
		$control_date->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing date - end
//	processing ar_protocol - begin
	$condition = 1;

	if($condition)
	{
		$control_ar_protocol = $pageObject->getControl("ar_protocol", $id);
		$control_ar_protocol->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ar_protocol - end
//	processing sxol_etos - begin
	$condition = 1;

	if($condition)
	{
		$control_sxol_etos = $pageObject->getControl("sxol_etos", $id);
		$control_sxol_etos->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing sxol_etos - end
//	processing dide_name - begin
	$condition = 1;

	if($condition)
	{
		$control_dide_name = $pageObject->getControl("dide_name", $id);
		$control_dide_name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing dide_name - end
//	processing sch_name - begin
	$condition = 1;

	if($condition)
	{
		$control_sch_name = $pageObject->getControl("sch_name", $id);
		$control_sch_name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing sch_name - end
//	processing tel_ergasias - begin
	$condition = 1;

	if($condition)
	{
		$control_tel_ergasias = $pageObject->getControl("tel_ergasias", $id);
		$control_tel_ergasias->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing tel_ergasias - end
//	processing dimos - begin
	$condition = 1;

	if($condition)
	{
		$control_dimos = $pageObject->getControl("dimos", $id);
		$control_dimos->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing dimos - end
//	processing fax - begin
	$condition = 1;

	if($condition)
	{
		$control_fax = $pageObject->getControl("fax", $id);
		$control_fax->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing fax - end
//	processing e_mail - begin
	$condition = 1;

	if($condition)
	{
		$control_e_mail = $pageObject->getControl("e_mail", $id);
		$control_e_mail->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing e_mail - end
//	processing sch_teachers - begin
	$condition = 1;

	if($condition)
	{
		$control_sch_teachers = $pageObject->getControl("sch_teachers", $id);
		$control_sch_teachers->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing sch_teachers - end
//	processing sch_students - begin
	$condition = 1;

	if($condition)
	{
		$control_sch_students = $pageObject->getControl("sch_students", $id);
		$control_sch_students->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing sch_students - end
//	processing dieythintis_name - begin
	$condition = 1;

	if($condition)
	{
		$control_dieythintis_name = $pageObject->getControl("dieythintis_name", $id);
		$control_dieythintis_name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing dieythintis_name - end
//	processing klados_dieythinti - begin
	$condition = 1;

	if($condition)
	{
		$control_klados_dieythinti = $pageObject->getControl("klados_dieythinti", $id);
		$control_klados_dieythinti->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing klados_dieythinti - end
//	processing program_title - begin
	$condition = 1;

	if($condition)
	{
		$control_program_title = $pageObject->getControl("program_title", $id);
		$control_program_title->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing program_title - end
//	processing ar_praksis - begin
	$condition = 1;

	if($condition)
	{
		$control_ar_praksis = $pageObject->getControl("ar_praksis", $id);
		$control_ar_praksis->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ar_praksis - end
//	processing date_praksis - begin
	$condition = 1;

	if($condition)
	{
		$control_date_praksis = $pageObject->getControl("date_praksis", $id);
		$control_date_praksis->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing date_praksis - end
//	processing sch_orario - begin
	$condition = 1;

	if($condition)
	{
		$control_sch_orario = $pageObject->getControl("sch_orario", $id);
		$control_sch_orario->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing sch_orario - end
//	processing ypeythinos_name - begin
	$condition = 1;

	if($condition)
	{
		$control_ypeythinos_name = $pageObject->getControl("ypeythinos_name", $id);
		$control_ypeythinos_name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ypeythinos_name - end
//	processing ypeythinos_amm - begin
	$condition = 1;

	if($condition)
	{
		$control_ypeythinos_amm = $pageObject->getControl("ypeythinos_amm", $id);
		$control_ypeythinos_amm->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ypeythinos_amm - end
//	processing ypeythinos_klados - begin
	$condition = 1;

	if($condition)
	{
		$control_ypeythinos_klados = $pageObject->getControl("ypeythinos_klados", $id);
		$control_ypeythinos_klados->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ypeythinos_klados - end
//	processing ypeythinos_wres - begin
	$condition = 1;

	if($condition)
	{
		$control_ypeythinos_wres = $pageObject->getControl("ypeythinos_wres", $id);
		$control_ypeythinos_wres->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ypeythinos_wres - end
//	processing ypeythinos_again - begin
	$condition = 1;

	if($condition)
	{
		$control_ypeythinos_again = $pageObject->getControl("ypeythinos_again", $id);
		$control_ypeythinos_again->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ypeythinos_again - end
//	processing ypeythinos_epimorfosi - begin
	$condition = 1;

	if($condition)
	{
		$control_ypeythinos_epimorfosi = $pageObject->getControl("ypeythinos_epimorfosi", $id);
		$control_ypeythinos_epimorfosi->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ypeythinos_epimorfosi - end
//	processing symetexwn1_name - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn1_name = $pageObject->getControl("symetexwn1_name", $id);
		$control_symetexwn1_name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn1_name - end
//	processing symetexwn1_amm - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn1_amm = $pageObject->getControl("symetexwn1_amm", $id);
		$control_symetexwn1_amm->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn1_amm - end
//	processing symetexwn1_klados - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn1_klados = $pageObject->getControl("symetexwn1_klados", $id);
		$control_symetexwn1_klados->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn1_klados - end
//	processing symetexwn1_wres - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn1_wres = $pageObject->getControl("symetexwn1_wres", $id);
		$control_symetexwn1_wres->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn1_wres - end
//	processing symetexwn1_again - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn1_again = $pageObject->getControl("symetexwn1_again", $id);
		$control_symetexwn1_again->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn1_again - end
//	processing symetexwn1_epimorfosi - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn1_epimorfosi = $pageObject->getControl("symetexwn1_epimorfosi", $id);
		$control_symetexwn1_epimorfosi->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn1_epimorfosi - end
//	processing symetexwn2_name - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn2_name = $pageObject->getControl("symetexwn2_name", $id);
		$control_symetexwn2_name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn2_name - end
//	processing symetexwn2_amm - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn2_amm = $pageObject->getControl("symetexwn2_amm", $id);
		$control_symetexwn2_amm->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn2_amm - end
//	processing symetexwn2_klados - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn2_klados = $pageObject->getControl("symetexwn2_klados", $id);
		$control_symetexwn2_klados->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn2_klados - end
//	processing symetexwn2_wres - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn2_wres = $pageObject->getControl("symetexwn2_wres", $id);
		$control_symetexwn2_wres->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn2_wres - end
//	processing symetexwn2_again - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn2_again = $pageObject->getControl("symetexwn2_again", $id);
		$control_symetexwn2_again->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn2_again - end
//	processing symetexwn2_epimorfosi - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn2_epimorfosi = $pageObject->getControl("symetexwn2_epimorfosi", $id);
		$control_symetexwn2_epimorfosi->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn2_epimorfosi - end
//	processing symetexwn3_name - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn3_name = $pageObject->getControl("symetexwn3_name", $id);
		$control_symetexwn3_name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn3_name - end
//	processing symetexwn3_amm - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn3_amm = $pageObject->getControl("symetexwn3_amm", $id);
		$control_symetexwn3_amm->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn3_amm - end
//	processing symetexwn3_klados - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn3_klados = $pageObject->getControl("symetexwn3_klados", $id);
		$control_symetexwn3_klados->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn3_klados - end
//	processing symetexwn3_wres - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn3_wres = $pageObject->getControl("symetexwn3_wres", $id);
		$control_symetexwn3_wres->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn3_wres - end
//	processing symetexwn3_again - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn3_again = $pageObject->getControl("symetexwn3_again", $id);
		$control_symetexwn3_again->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn3_again - end
//	processing symetexwn3_epimorfosi - begin
	$condition = 1;

	if($condition)
	{
		$control_symetexwn3_epimorfosi = $pageObject->getControl("symetexwn3_epimorfosi", $id);
		$control_symetexwn3_epimorfosi->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing symetexwn3_epimorfosi - end
//	processing mathites_synolo - begin
	$condition = 1;

	if($condition)
	{
		$control_mathites_synolo = $pageObject->getControl("mathites_synolo", $id);
		$control_mathites_synolo->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing mathites_synolo - end
//	processing agoria - begin
	$condition = 1;

	if($condition)
	{
		$control_agoria = $pageObject->getControl("agoria", $id);
		$control_agoria->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing agoria - end
//	processing koritsia - begin
	$condition = 1;

	if($condition)
	{
		$control_koritsia = $pageObject->getControl("koritsia", $id);
		$control_koritsia->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing koritsia - end
//	processing amiges - begin
	$condition = 1;

	if($condition)
	{
		$control_amiges = $pageObject->getControl("amiges", $id);
		$control_amiges->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing amiges - end
//	processing meet_day - begin
	$condition = 1;

	if($condition)
	{
		$control_meet_day = $pageObject->getControl("meet_day", $id);
		$control_meet_day->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing meet_day - end
//	processing meet_hour - begin
	$condition = 1;

	if($condition)
	{
		$control_meet_hour = $pageObject->getControl("meet_hour", $id);
		$control_meet_hour->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing meet_hour - end
//	processing meet_place - begin
	$condition = 1;

	if($condition)
	{
		$control_meet_place = $pageObject->getControl("meet_place", $id);
		$control_meet_place->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing meet_place - end
//	processing arxeio - begin
	$condition = 1;

	if($condition)
	{
		$control_arxeio = $pageObject->getControl("arxeio", $id);
		$control_arxeio->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing arxeio - end
//	processing ypothemata - begin
	$condition = 1;

	if($condition)
	{
		$control_ypothemata = $pageObject->getControl("ypothemata", $id);
		$control_ypothemata->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ypothemata - end
//	processing stoxoi - begin
	$condition = 1;

	if($condition)
	{
		$control_stoxoi = $pageObject->getControl("stoxoi", $id);
		$control_stoxoi->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing stoxoi - end
//	processing methodologia - begin
	$condition = 1;

	if($condition)
	{
		$control_methodologia = $pageObject->getControl("methodologia", $id);
		$control_methodologia->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing methodologia - end
//	processing syndeseis - begin
	$condition = 1;

	if($condition)
	{
		$control_syndeseis = $pageObject->getControl("syndeseis", $id);
		$control_syndeseis->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing syndeseis - end
//	processing month1 - begin
	$condition = 1;

	if($condition)
	{
		$control_month1 = $pageObject->getControl("month1", $id);
		$control_month1->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing month1 - end
//	processing month2 - begin
	$condition = 1;

	if($condition)
	{
		$control_month2 = $pageObject->getControl("month2", $id);
		$control_month2->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing month2 - end
//	processing month3 - begin
	$condition = 1;

	if($condition)
	{
		$control_month3 = $pageObject->getControl("month3", $id);
		$control_month3->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing month3 - end
//	processing month4 - begin
	$condition = 1;

	if($condition)
	{
		$control_month4 = $pageObject->getControl("month4", $id);
		$control_month4->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing month4 - end
//	processing month5 - begin
	$condition = 1;

	if($condition)
	{
		$control_month5 = $pageObject->getControl("month5", $id);
		$control_month5->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing month5 - end
//	processing episkepseis - begin
	$condition = 1;

	if($condition)
	{
		$control_episkepseis = $pageObject->getControl("episkepseis", $id);
		$control_episkepseis->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing episkepseis - end
//	processing submission_date - begin
	$condition = 1;

	if($condition)
	{
		$control_submission_date = $pageObject->getControl("submission_date", $id);
		$control_submission_date->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing submission_date - end
//	processing last_modified_date - begin
	$condition = 1;

	if($condition)
	{
		$control_last_modified_date = $pageObject->getControl("last_modified_date", $id);
		$control_last_modified_date->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing last_modified_date - end
//	processing ip_address - begin
	$condition = 1;

	if($condition)
	{
		$control_ip_address = $pageObject->getControl("ip_address", $id);
		$control_ip_address->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ip_address - end
//	processing is_finalized - begin
	$condition = 1;

	if($condition)
	{
		$control_is_finalized = $pageObject->getControl("is_finalized", $id);
		$control_is_finalized->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing is_finalized - end
//	processing sch_id - begin
	$condition = 1;

	if($condition)
	{
		$control_sch_id = $pageObject->getControl("sch_id", $id);
		$control_sch_id->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing sch_id - end

	foreach($efilename_values as $ekey=>$value)
		$evalues[$ekey] = $value;
		
	if($pageObject->lockingObj)
	{
		$lockmessage = "";
		if(!$pageObject->lockingObj->ConfirmLock($strTableName,$savedKeys,$lockmessage))
		{
			$enableCtrlsForEditing = false;
			$system_attrs = "style='display:block;'";
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,false,$id);
				
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
				exit();
			}
			else
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$system_message = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,true,$id);
				else
					$system_message = $lockmessage;
			}
			$status = "DECLINED";
			$readevalues = true;
		}
	}
	
	if($readevalues==false)
	{
	//	do event
		$retval = true;
		if($eventObj->exists("BeforeEdit"))
			$retval=$eventObj->BeforeEdit($evalues,$strWhereClause,$dataold,$keys,$usermessage,(bool)$inlineedit, $pageObject);
	
		if($retval && $pageObject->isCaptchaOk)
		{		
			if($inlineedit!=EDIT_INLINE)
				$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		
			//set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked	
            if(isTableGeoUpdatable($pageObject->cipherer->pSet)) {			
				setUpdatedLatLng($evalues, $pageObject->cipherer->pSet, $dataold);
			}	
			
			if(DoUpdateRecord($strOriginalTableName,$evalues,$blobfields,$strWhereClause,$id,$pageObject, $pageObject->cipherer))
			{
				$IsSaved = true;

			// Give possibility to all edit controls to clean their data				
			//	processing submission_id - begin
							$condition = 1;
			
				if($condition)
				{
					$control_submission_id->afterSuccessfulSave();
				}
	//	processing submission_id - end
			//	processing programa - begin
							$condition = 1;
			
				if($condition)
				{
					$control_programa->afterSuccessfulSave();
				}
	//	processing programa - end
			//	processing date - begin
							$condition = 1;
			
				if($condition)
				{
					$control_date->afterSuccessfulSave();
				}
	//	processing date - end
			//	processing ar_protocol - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ar_protocol->afterSuccessfulSave();
				}
	//	processing ar_protocol - end
			//	processing sxol_etos - begin
							$condition = 1;
			
				if($condition)
				{
					$control_sxol_etos->afterSuccessfulSave();
				}
	//	processing sxol_etos - end
			//	processing dide_name - begin
							$condition = 1;
			
				if($condition)
				{
					$control_dide_name->afterSuccessfulSave();
				}
	//	processing dide_name - end
			//	processing sch_name - begin
							$condition = 1;
			
				if($condition)
				{
					$control_sch_name->afterSuccessfulSave();
				}
	//	processing sch_name - end
			//	processing tel_ergasias - begin
							$condition = 1;
			
				if($condition)
				{
					$control_tel_ergasias->afterSuccessfulSave();
				}
	//	processing tel_ergasias - end
			//	processing dimos - begin
							$condition = 1;
			
				if($condition)
				{
					$control_dimos->afterSuccessfulSave();
				}
	//	processing dimos - end
			//	processing fax - begin
							$condition = 1;
			
				if($condition)
				{
					$control_fax->afterSuccessfulSave();
				}
	//	processing fax - end
			//	processing e_mail - begin
							$condition = 1;
			
				if($condition)
				{
					$control_e_mail->afterSuccessfulSave();
				}
	//	processing e_mail - end
			//	processing sch_teachers - begin
							$condition = 1;
			
				if($condition)
				{
					$control_sch_teachers->afterSuccessfulSave();
				}
	//	processing sch_teachers - end
			//	processing sch_students - begin
							$condition = 1;
			
				if($condition)
				{
					$control_sch_students->afterSuccessfulSave();
				}
	//	processing sch_students - end
			//	processing dieythintis_name - begin
							$condition = 1;
			
				if($condition)
				{
					$control_dieythintis_name->afterSuccessfulSave();
				}
	//	processing dieythintis_name - end
			//	processing klados_dieythinti - begin
							$condition = 1;
			
				if($condition)
				{
					$control_klados_dieythinti->afterSuccessfulSave();
				}
	//	processing klados_dieythinti - end
			//	processing program_title - begin
							$condition = 1;
			
				if($condition)
				{
					$control_program_title->afterSuccessfulSave();
				}
	//	processing program_title - end
			//	processing ar_praksis - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ar_praksis->afterSuccessfulSave();
				}
	//	processing ar_praksis - end
			//	processing date_praksis - begin
							$condition = 1;
			
				if($condition)
				{
					$control_date_praksis->afterSuccessfulSave();
				}
	//	processing date_praksis - end
			//	processing sch_orario - begin
							$condition = 1;
			
				if($condition)
				{
					$control_sch_orario->afterSuccessfulSave();
				}
	//	processing sch_orario - end
			//	processing ypeythinos_name - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ypeythinos_name->afterSuccessfulSave();
				}
	//	processing ypeythinos_name - end
			//	processing ypeythinos_amm - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ypeythinos_amm->afterSuccessfulSave();
				}
	//	processing ypeythinos_amm - end
			//	processing ypeythinos_klados - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ypeythinos_klados->afterSuccessfulSave();
				}
	//	processing ypeythinos_klados - end
			//	processing ypeythinos_wres - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ypeythinos_wres->afterSuccessfulSave();
				}
	//	processing ypeythinos_wres - end
			//	processing ypeythinos_again - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ypeythinos_again->afterSuccessfulSave();
				}
	//	processing ypeythinos_again - end
			//	processing ypeythinos_epimorfosi - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ypeythinos_epimorfosi->afterSuccessfulSave();
				}
	//	processing ypeythinos_epimorfosi - end
			//	processing symetexwn1_name - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn1_name->afterSuccessfulSave();
				}
	//	processing symetexwn1_name - end
			//	processing symetexwn1_amm - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn1_amm->afterSuccessfulSave();
				}
	//	processing symetexwn1_amm - end
			//	processing symetexwn1_klados - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn1_klados->afterSuccessfulSave();
				}
	//	processing symetexwn1_klados - end
			//	processing symetexwn1_wres - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn1_wres->afterSuccessfulSave();
				}
	//	processing symetexwn1_wres - end
			//	processing symetexwn1_again - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn1_again->afterSuccessfulSave();
				}
	//	processing symetexwn1_again - end
			//	processing symetexwn1_epimorfosi - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn1_epimorfosi->afterSuccessfulSave();
				}
	//	processing symetexwn1_epimorfosi - end
			//	processing symetexwn2_name - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn2_name->afterSuccessfulSave();
				}
	//	processing symetexwn2_name - end
			//	processing symetexwn2_amm - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn2_amm->afterSuccessfulSave();
				}
	//	processing symetexwn2_amm - end
			//	processing symetexwn2_klados - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn2_klados->afterSuccessfulSave();
				}
	//	processing symetexwn2_klados - end
			//	processing symetexwn2_wres - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn2_wres->afterSuccessfulSave();
				}
	//	processing symetexwn2_wres - end
			//	processing symetexwn2_again - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn2_again->afterSuccessfulSave();
				}
	//	processing symetexwn2_again - end
			//	processing symetexwn2_epimorfosi - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn2_epimorfosi->afterSuccessfulSave();
				}
	//	processing symetexwn2_epimorfosi - end
			//	processing symetexwn3_name - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn3_name->afterSuccessfulSave();
				}
	//	processing symetexwn3_name - end
			//	processing symetexwn3_amm - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn3_amm->afterSuccessfulSave();
				}
	//	processing symetexwn3_amm - end
			//	processing symetexwn3_klados - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn3_klados->afterSuccessfulSave();
				}
	//	processing symetexwn3_klados - end
			//	processing symetexwn3_wres - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn3_wres->afterSuccessfulSave();
				}
	//	processing symetexwn3_wres - end
			//	processing symetexwn3_again - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn3_again->afterSuccessfulSave();
				}
	//	processing symetexwn3_again - end
			//	processing symetexwn3_epimorfosi - begin
							$condition = 1;
			
				if($condition)
				{
					$control_symetexwn3_epimorfosi->afterSuccessfulSave();
				}
	//	processing symetexwn3_epimorfosi - end
			//	processing mathites_synolo - begin
							$condition = 1;
			
				if($condition)
				{
					$control_mathites_synolo->afterSuccessfulSave();
				}
	//	processing mathites_synolo - end
			//	processing agoria - begin
							$condition = 1;
			
				if($condition)
				{
					$control_agoria->afterSuccessfulSave();
				}
	//	processing agoria - end
			//	processing koritsia - begin
							$condition = 1;
			
				if($condition)
				{
					$control_koritsia->afterSuccessfulSave();
				}
	//	processing koritsia - end
			//	processing amiges - begin
							$condition = 1;
			
				if($condition)
				{
					$control_amiges->afterSuccessfulSave();
				}
	//	processing amiges - end
			//	processing meet_day - begin
							$condition = 1;
			
				if($condition)
				{
					$control_meet_day->afterSuccessfulSave();
				}
	//	processing meet_day - end
			//	processing meet_hour - begin
							$condition = 1;
			
				if($condition)
				{
					$control_meet_hour->afterSuccessfulSave();
				}
	//	processing meet_hour - end
			//	processing meet_place - begin
							$condition = 1;
			
				if($condition)
				{
					$control_meet_place->afterSuccessfulSave();
				}
	//	processing meet_place - end
			//	processing arxeio - begin
							$condition = 1;
			
				if($condition)
				{
					$control_arxeio->afterSuccessfulSave();
				}
	//	processing arxeio - end
			//	processing ypothemata - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ypothemata->afterSuccessfulSave();
				}
	//	processing ypothemata - end
			//	processing stoxoi - begin
							$condition = 1;
			
				if($condition)
				{
					$control_stoxoi->afterSuccessfulSave();
				}
	//	processing stoxoi - end
			//	processing methodologia - begin
							$condition = 1;
			
				if($condition)
				{
					$control_methodologia->afterSuccessfulSave();
				}
	//	processing methodologia - end
			//	processing syndeseis - begin
							$condition = 1;
			
				if($condition)
				{
					$control_syndeseis->afterSuccessfulSave();
				}
	//	processing syndeseis - end
			//	processing month1 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_month1->afterSuccessfulSave();
				}
	//	processing month1 - end
			//	processing month2 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_month2->afterSuccessfulSave();
				}
	//	processing month2 - end
			//	processing month3 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_month3->afterSuccessfulSave();
				}
	//	processing month3 - end
			//	processing month4 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_month4->afterSuccessfulSave();
				}
	//	processing month4 - end
			//	processing month5 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_month5->afterSuccessfulSave();
				}
	//	processing month5 - end
			//	processing episkepseis - begin
							$condition = 1;
			
				if($condition)
				{
					$control_episkepseis->afterSuccessfulSave();
				}
	//	processing episkepseis - end
			//	processing submission_date - begin
							$condition = 1;
			
				if($condition)
				{
					$control_submission_date->afterSuccessfulSave();
				}
	//	processing submission_date - end
			//	processing last_modified_date - begin
							$condition = 1;
			
				if($condition)
				{
					$control_last_modified_date->afterSuccessfulSave();
				}
	//	processing last_modified_date - end
			//	processing ip_address - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ip_address->afterSuccessfulSave();
				}
	//	processing ip_address - end
			//	processing is_finalized - begin
							$condition = 1;
			
				if($condition)
				{
					$control_is_finalized->afterSuccessfulSave();
				}
	//	processing is_finalized - end
			//	processing sch_id - begin
							$condition = 1;
			
				if($condition)
				{
					$control_sch_id->afterSuccessfulSave();
				}
	//	processing sch_id - end
				
				//	after edit event
				if($pageObject->lockingObj && $inlineedit == EDIT_INLINE)
					$pageObject->lockingObj->UnlockRecord($strTableName,$savedKeys,"");
				if($auditObj || $eventObj->exists("AfterEdit"))
				{
					foreach($dataold as $idx=>$val)
					{
						if(!array_key_exists($idx,$evalues))
							$evalues[$idx] = $val;
					}
				}

				if($auditObj)
					$auditObj->LogEdit($strTableName,$evalues,$dataold,$keys);
				if($eventObj->exists("AfterEdit"))
					$eventObj->AfterEdit($evalues,KeyWhere($keys),$dataold,$keys,(bool)$inlineedit, $pageObject);
							
				$mesClass = "mes_ok";
			}
			elseif($inlineedit!=EDIT_INLINE)
				$mesClass = "mes_not";	
		}
		else
		{
			$message = $usermessage;
			$readevalues = true;
			$status = "DECLINED";
		}
	}
	if($readevalues)
		$keys = $savedKeys;
}
//else
{
	/////////////////////////
	//Locking recors
	/////////////////////////

	if($pageObject->lockingObj)
	{
		$enableCtrlsForEditing = $pageObject->lockingObj->LockRecord($strTableName,$keys);
		if(!$enableCtrlsForEditing)
		{
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,false,$id);
				else
					$lockmessage = $pageObject->lockingObj->LockUser;
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo my_json_encode($returnJSON);
				exit();
			}
			
			$system_attrs = "style='display:block;'";
			$system_message = $pageObject->lockingObj->LockUser;
			
			if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
			{
				$rb = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,true,$id);
				if($rb!="")
					$system_message = $rb;
			}
		}
	}
}

if($pageObject->lockingObj && $inlineedit!=EDIT_INLINE)
	$pageObject->body["begin"] .='<div class="runner-locking" '.$system_attrs.'>'.$system_message.'</div>';

if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if ($IsSaved && no_output_done() && $inlineedit == EDIT_SIMPLE)
{
	// saving message
	$_SESSION["message_edit"] = ($message ? $message : "");
	// key get query
	$keyGetQ = "";
		$keyGetQ.="editid1=".rawurldecode($keys["submission_id"])."&";
	// cut last &
	$keyGetQ = substr($keyGetQ, 0, strlen($keyGetQ)-1);	
	// redirect
	header("Location: ft_form_4_".$pageObject->getPageType().".php?".$keyGetQ);
	// turned on output buffering, so we need to stop script
	exit();
}
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if ($inlineedit == EDIT_SIMPLE && isset($_SESSION["message_edit"]))
{
	$message = $_SESSION["message_edit"];
	unset($_SESSION["message_edit"]);
}


$pageObject->setKeys($keys);
$pageObject->readEditValues = $readevalues;
if($readevalues)
	$pageObject->editValues = $evalues;

//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();
if(!$data)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		header("Location: ft_form_4_list.php?a=return");
		exit();
	}
	else
		$data = array();
}

if($globalEvents->exists("IsRecordEditable", $strTableName))
{
	if(!$globalEvents->IsRecordEditable($data, true, $strTableName) && $inlineedit != EDIT_INLINE)
	{
		return SecurityRedirect($inlineedit);
	}
}


//global variable use in BuildEditControl function
//	show readonly fields

if($readevalues)
{
	$data["submission_id"] = $evalues["submission_id"];
	$data["programa"] = $evalues["programa"];
	$data["date"] = $evalues["date"];
	$data["ar_protocol"] = $evalues["ar_protocol"];
	$data["sxol_etos"] = $evalues["sxol_etos"];
	$data["dide_name"] = $evalues["dide_name"];
	$data["sch_name"] = $evalues["sch_name"];
	$data["tel_ergasias"] = $evalues["tel_ergasias"];
	$data["dimos"] = $evalues["dimos"];
	$data["fax"] = $evalues["fax"];
	$data["e_mail"] = $evalues["e_mail"];
	$data["sch_teachers"] = $evalues["sch_teachers"];
	$data["sch_students"] = $evalues["sch_students"];
	$data["dieythintis_name"] = $evalues["dieythintis_name"];
	$data["klados_dieythinti"] = $evalues["klados_dieythinti"];
	$data["program_title"] = $evalues["program_title"];
	$data["ar_praksis"] = $evalues["ar_praksis"];
	$data["date_praksis"] = $evalues["date_praksis"];
	$data["sch_orario"] = $evalues["sch_orario"];
	$data["ypeythinos_name"] = $evalues["ypeythinos_name"];
	$data["ypeythinos_amm"] = $evalues["ypeythinos_amm"];
	$data["ypeythinos_klados"] = $evalues["ypeythinos_klados"];
	$data["ypeythinos_wres"] = $evalues["ypeythinos_wres"];
	$data["ypeythinos_again"] = $evalues["ypeythinos_again"];
	$data["ypeythinos_epimorfosi"] = $evalues["ypeythinos_epimorfosi"];
	$data["symetexwn1_name"] = $evalues["symetexwn1_name"];
	$data["symetexwn1_amm"] = $evalues["symetexwn1_amm"];
	$data["symetexwn1_klados"] = $evalues["symetexwn1_klados"];
	$data["symetexwn1_wres"] = $evalues["symetexwn1_wres"];
	$data["symetexwn1_again"] = $evalues["symetexwn1_again"];
	$data["symetexwn1_epimorfosi"] = $evalues["symetexwn1_epimorfosi"];
	$data["symetexwn2_name"] = $evalues["symetexwn2_name"];
	$data["symetexwn2_amm"] = $evalues["symetexwn2_amm"];
	$data["symetexwn2_klados"] = $evalues["symetexwn2_klados"];
	$data["symetexwn2_wres"] = $evalues["symetexwn2_wres"];
	$data["symetexwn2_again"] = $evalues["symetexwn2_again"];
	$data["symetexwn2_epimorfosi"] = $evalues["symetexwn2_epimorfosi"];
	$data["symetexwn3_name"] = $evalues["symetexwn3_name"];
	$data["symetexwn3_amm"] = $evalues["symetexwn3_amm"];
	$data["symetexwn3_klados"] = $evalues["symetexwn3_klados"];
	$data["symetexwn3_wres"] = $evalues["symetexwn3_wres"];
	$data["symetexwn3_again"] = $evalues["symetexwn3_again"];
	$data["symetexwn3_epimorfosi"] = $evalues["symetexwn3_epimorfosi"];
	$data["mathites_synolo"] = $evalues["mathites_synolo"];
	$data["agoria"] = $evalues["agoria"];
	$data["koritsia"] = $evalues["koritsia"];
	$data["amiges"] = $evalues["amiges"];
	$data["meet_day"] = $evalues["meet_day"];
	$data["meet_hour"] = $evalues["meet_hour"];
	$data["meet_place"] = $evalues["meet_place"];
	$data["arxeio"] = $evalues["arxeio"];
	$data["ypothemata"] = $evalues["ypothemata"];
	$data["stoxoi"] = $evalues["stoxoi"];
	$data["methodologia"] = $evalues["methodologia"];
	$data["syndeseis"] = $evalues["syndeseis"];
	$data["month1"] = $evalues["month1"];
	$data["month2"] = $evalues["month2"];
	$data["month3"] = $evalues["month3"];
	$data["month4"] = $evalues["month4"];
	$data["month5"] = $evalues["month5"];
	$data["episkepseis"] = $evalues["episkepseis"];
	$data["submission_date"] = $evalues["submission_date"];
	$data["last_modified_date"] = $evalues["last_modified_date"];
	$data["ip_address"] = $evalues["ip_address"];
	$data["is_finalized"] = $evalues["is_finalized"];
	$data["sch_id"] = $evalues["sch_id"];
}

/////////////////////////////////////////////////////////////
//	assign values to $xt class, prepare page for displaying
/////////////////////////////////////////////////////////////
//Basic includes js files
$includes = "";
//javascript code
	
if($inlineedit != EDIT_INLINE)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		$includes.= "<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		
		if (!isMobile())
			$includes.= "<div id=\"search_suggest".$id."\"></div>\r\n";
			
		$pageObject->body["begin"].= $includes;
	}	

	if(!$pageObject->isAppearOnTabs("submission_id"))
		$xt->assign("submission_id_fieldblock",true);
	else
		$xt->assign("submission_id_tabfieldblock",true);
	$xt->assign("submission_id_label",true);
	if(isEnableSection508())
		$xt->assign_section("submission_id_label","<label for=\"".GetInputElementId("submission_id", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("programa"))
		$xt->assign("programa_fieldblock",true);
	else
		$xt->assign("programa_tabfieldblock",true);
	$xt->assign("programa_label",true);
	if(isEnableSection508())
		$xt->assign_section("programa_label","<label for=\"".GetInputElementId("programa", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("date"))
		$xt->assign("date_fieldblock",true);
	else
		$xt->assign("date_tabfieldblock",true);
	$xt->assign("date_label",true);
	if(isEnableSection508())
		$xt->assign_section("date_label","<label for=\"".GetInputElementId("date", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ar_protocol"))
		$xt->assign("ar_protocol_fieldblock",true);
	else
		$xt->assign("ar_protocol_tabfieldblock",true);
	$xt->assign("ar_protocol_label",true);
	if(isEnableSection508())
		$xt->assign_section("ar_protocol_label","<label for=\"".GetInputElementId("ar_protocol", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("sxol_etos"))
		$xt->assign("sxol_etos_fieldblock",true);
	else
		$xt->assign("sxol_etos_tabfieldblock",true);
	$xt->assign("sxol_etos_label",true);
	if(isEnableSection508())
		$xt->assign_section("sxol_etos_label","<label for=\"".GetInputElementId("sxol_etos", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("dide_name"))
		$xt->assign("dide_name_fieldblock",true);
	else
		$xt->assign("dide_name_tabfieldblock",true);
	$xt->assign("dide_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("dide_name_label","<label for=\"".GetInputElementId("dide_name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("sch_name"))
		$xt->assign("sch_name_fieldblock",true);
	else
		$xt->assign("sch_name_tabfieldblock",true);
	$xt->assign("sch_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("sch_name_label","<label for=\"".GetInputElementId("sch_name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("tel_ergasias"))
		$xt->assign("tel_ergasias_fieldblock",true);
	else
		$xt->assign("tel_ergasias_tabfieldblock",true);
	$xt->assign("tel_ergasias_label",true);
	if(isEnableSection508())
		$xt->assign_section("tel_ergasias_label","<label for=\"".GetInputElementId("tel_ergasias", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("dimos"))
		$xt->assign("dimos_fieldblock",true);
	else
		$xt->assign("dimos_tabfieldblock",true);
	$xt->assign("dimos_label",true);
	if(isEnableSection508())
		$xt->assign_section("dimos_label","<label for=\"".GetInputElementId("dimos", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("fax"))
		$xt->assign("fax_fieldblock",true);
	else
		$xt->assign("fax_tabfieldblock",true);
	$xt->assign("fax_label",true);
	if(isEnableSection508())
		$xt->assign_section("fax_label","<label for=\"".GetInputElementId("fax", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("e_mail"))
		$xt->assign("e_mail_fieldblock",true);
	else
		$xt->assign("e_mail_tabfieldblock",true);
	$xt->assign("e_mail_label",true);
	if(isEnableSection508())
		$xt->assign_section("e_mail_label","<label for=\"".GetInputElementId("e_mail", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("sch_teachers"))
		$xt->assign("sch_teachers_fieldblock",true);
	else
		$xt->assign("sch_teachers_tabfieldblock",true);
	$xt->assign("sch_teachers_label",true);
	if(isEnableSection508())
		$xt->assign_section("sch_teachers_label","<label for=\"".GetInputElementId("sch_teachers", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("sch_students"))
		$xt->assign("sch_students_fieldblock",true);
	else
		$xt->assign("sch_students_tabfieldblock",true);
	$xt->assign("sch_students_label",true);
	if(isEnableSection508())
		$xt->assign_section("sch_students_label","<label for=\"".GetInputElementId("sch_students", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("dieythintis_name"))
		$xt->assign("dieythintis_name_fieldblock",true);
	else
		$xt->assign("dieythintis_name_tabfieldblock",true);
	$xt->assign("dieythintis_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("dieythintis_name_label","<label for=\"".GetInputElementId("dieythintis_name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("klados_dieythinti"))
		$xt->assign("klados_dieythinti_fieldblock",true);
	else
		$xt->assign("klados_dieythinti_tabfieldblock",true);
	$xt->assign("klados_dieythinti_label",true);
	if(isEnableSection508())
		$xt->assign_section("klados_dieythinti_label","<label for=\"".GetInputElementId("klados_dieythinti", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("program_title"))
		$xt->assign("program_title_fieldblock",true);
	else
		$xt->assign("program_title_tabfieldblock",true);
	$xt->assign("program_title_label",true);
	if(isEnableSection508())
		$xt->assign_section("program_title_label","<label for=\"".GetInputElementId("program_title", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ar_praksis"))
		$xt->assign("ar_praksis_fieldblock",true);
	else
		$xt->assign("ar_praksis_tabfieldblock",true);
	$xt->assign("ar_praksis_label",true);
	if(isEnableSection508())
		$xt->assign_section("ar_praksis_label","<label for=\"".GetInputElementId("ar_praksis", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("date_praksis"))
		$xt->assign("date_praksis_fieldblock",true);
	else
		$xt->assign("date_praksis_tabfieldblock",true);
	$xt->assign("date_praksis_label",true);
	if(isEnableSection508())
		$xt->assign_section("date_praksis_label","<label for=\"".GetInputElementId("date_praksis", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("sch_orario"))
		$xt->assign("sch_orario_fieldblock",true);
	else
		$xt->assign("sch_orario_tabfieldblock",true);
	$xt->assign("sch_orario_label",true);
	if(isEnableSection508())
		$xt->assign_section("sch_orario_label","<label for=\"".GetInputElementId("sch_orario", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ypeythinos_name"))
		$xt->assign("ypeythinos_name_fieldblock",true);
	else
		$xt->assign("ypeythinos_name_tabfieldblock",true);
	$xt->assign("ypeythinos_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_name_label","<label for=\"".GetInputElementId("ypeythinos_name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ypeythinos_amm"))
		$xt->assign("ypeythinos_amm_fieldblock",true);
	else
		$xt->assign("ypeythinos_amm_tabfieldblock",true);
	$xt->assign("ypeythinos_amm_label",true);
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_amm_label","<label for=\"".GetInputElementId("ypeythinos_amm", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ypeythinos_klados"))
		$xt->assign("ypeythinos_klados_fieldblock",true);
	else
		$xt->assign("ypeythinos_klados_tabfieldblock",true);
	$xt->assign("ypeythinos_klados_label",true);
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_klados_label","<label for=\"".GetInputElementId("ypeythinos_klados", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ypeythinos_wres"))
		$xt->assign("ypeythinos_wres_fieldblock",true);
	else
		$xt->assign("ypeythinos_wres_tabfieldblock",true);
	$xt->assign("ypeythinos_wres_label",true);
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_wres_label","<label for=\"".GetInputElementId("ypeythinos_wres", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ypeythinos_again"))
		$xt->assign("ypeythinos_again_fieldblock",true);
	else
		$xt->assign("ypeythinos_again_tabfieldblock",true);
	$xt->assign("ypeythinos_again_label",true);
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_again_label","<label for=\"".GetInputElementId("ypeythinos_again", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ypeythinos_epimorfosi"))
		$xt->assign("ypeythinos_epimorfosi_fieldblock",true);
	else
		$xt->assign("ypeythinos_epimorfosi_tabfieldblock",true);
	$xt->assign("ypeythinos_epimorfosi_label",true);
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_epimorfosi_label","<label for=\"".GetInputElementId("ypeythinos_epimorfosi", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn1_name"))
		$xt->assign("symetexwn1_name_fieldblock",true);
	else
		$xt->assign("symetexwn1_name_tabfieldblock",true);
	$xt->assign("symetexwn1_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_name_label","<label for=\"".GetInputElementId("symetexwn1_name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn1_amm"))
		$xt->assign("symetexwn1_amm_fieldblock",true);
	else
		$xt->assign("symetexwn1_amm_tabfieldblock",true);
	$xt->assign("symetexwn1_amm_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_amm_label","<label for=\"".GetInputElementId("symetexwn1_amm", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn1_klados"))
		$xt->assign("symetexwn1_klados_fieldblock",true);
	else
		$xt->assign("symetexwn1_klados_tabfieldblock",true);
	$xt->assign("symetexwn1_klados_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_klados_label","<label for=\"".GetInputElementId("symetexwn1_klados", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn1_wres"))
		$xt->assign("symetexwn1_wres_fieldblock",true);
	else
		$xt->assign("symetexwn1_wres_tabfieldblock",true);
	$xt->assign("symetexwn1_wres_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_wres_label","<label for=\"".GetInputElementId("symetexwn1_wres", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn1_again"))
		$xt->assign("symetexwn1_again_fieldblock",true);
	else
		$xt->assign("symetexwn1_again_tabfieldblock",true);
	$xt->assign("symetexwn1_again_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_again_label","<label for=\"".GetInputElementId("symetexwn1_again", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn1_epimorfosi"))
		$xt->assign("symetexwn1_epimorfosi_fieldblock",true);
	else
		$xt->assign("symetexwn1_epimorfosi_tabfieldblock",true);
	$xt->assign("symetexwn1_epimorfosi_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_epimorfosi_label","<label for=\"".GetInputElementId("symetexwn1_epimorfosi", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn2_name"))
		$xt->assign("symetexwn2_name_fieldblock",true);
	else
		$xt->assign("symetexwn2_name_tabfieldblock",true);
	$xt->assign("symetexwn2_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_name_label","<label for=\"".GetInputElementId("symetexwn2_name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn2_amm"))
		$xt->assign("symetexwn2_amm_fieldblock",true);
	else
		$xt->assign("symetexwn2_amm_tabfieldblock",true);
	$xt->assign("symetexwn2_amm_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_amm_label","<label for=\"".GetInputElementId("symetexwn2_amm", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn2_klados"))
		$xt->assign("symetexwn2_klados_fieldblock",true);
	else
		$xt->assign("symetexwn2_klados_tabfieldblock",true);
	$xt->assign("symetexwn2_klados_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_klados_label","<label for=\"".GetInputElementId("symetexwn2_klados", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn2_wres"))
		$xt->assign("symetexwn2_wres_fieldblock",true);
	else
		$xt->assign("symetexwn2_wres_tabfieldblock",true);
	$xt->assign("symetexwn2_wres_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_wres_label","<label for=\"".GetInputElementId("symetexwn2_wres", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn2_again"))
		$xt->assign("symetexwn2_again_fieldblock",true);
	else
		$xt->assign("symetexwn2_again_tabfieldblock",true);
	$xt->assign("symetexwn2_again_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_again_label","<label for=\"".GetInputElementId("symetexwn2_again", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn2_epimorfosi"))
		$xt->assign("symetexwn2_epimorfosi_fieldblock",true);
	else
		$xt->assign("symetexwn2_epimorfosi_tabfieldblock",true);
	$xt->assign("symetexwn2_epimorfosi_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_epimorfosi_label","<label for=\"".GetInputElementId("symetexwn2_epimorfosi", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn3_name"))
		$xt->assign("symetexwn3_name_fieldblock",true);
	else
		$xt->assign("symetexwn3_name_tabfieldblock",true);
	$xt->assign("symetexwn3_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_name_label","<label for=\"".GetInputElementId("symetexwn3_name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn3_amm"))
		$xt->assign("symetexwn3_amm_fieldblock",true);
	else
		$xt->assign("symetexwn3_amm_tabfieldblock",true);
	$xt->assign("symetexwn3_amm_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_amm_label","<label for=\"".GetInputElementId("symetexwn3_amm", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn3_klados"))
		$xt->assign("symetexwn3_klados_fieldblock",true);
	else
		$xt->assign("symetexwn3_klados_tabfieldblock",true);
	$xt->assign("symetexwn3_klados_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_klados_label","<label for=\"".GetInputElementId("symetexwn3_klados", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn3_wres"))
		$xt->assign("symetexwn3_wres_fieldblock",true);
	else
		$xt->assign("symetexwn3_wres_tabfieldblock",true);
	$xt->assign("symetexwn3_wres_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_wres_label","<label for=\"".GetInputElementId("symetexwn3_wres", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn3_again"))
		$xt->assign("symetexwn3_again_fieldblock",true);
	else
		$xt->assign("symetexwn3_again_tabfieldblock",true);
	$xt->assign("symetexwn3_again_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_again_label","<label for=\"".GetInputElementId("symetexwn3_again", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("symetexwn3_epimorfosi"))
		$xt->assign("symetexwn3_epimorfosi_fieldblock",true);
	else
		$xt->assign("symetexwn3_epimorfosi_tabfieldblock",true);
	$xt->assign("symetexwn3_epimorfosi_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_epimorfosi_label","<label for=\"".GetInputElementId("symetexwn3_epimorfosi", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("mathites_synolo"))
		$xt->assign("mathites_synolo_fieldblock",true);
	else
		$xt->assign("mathites_synolo_tabfieldblock",true);
	$xt->assign("mathites_synolo_label",true);
	if(isEnableSection508())
		$xt->assign_section("mathites_synolo_label","<label for=\"".GetInputElementId("mathites_synolo", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("agoria"))
		$xt->assign("agoria_fieldblock",true);
	else
		$xt->assign("agoria_tabfieldblock",true);
	$xt->assign("agoria_label",true);
	if(isEnableSection508())
		$xt->assign_section("agoria_label","<label for=\"".GetInputElementId("agoria", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("koritsia"))
		$xt->assign("koritsia_fieldblock",true);
	else
		$xt->assign("koritsia_tabfieldblock",true);
	$xt->assign("koritsia_label",true);
	if(isEnableSection508())
		$xt->assign_section("koritsia_label","<label for=\"".GetInputElementId("koritsia", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("amiges"))
		$xt->assign("amiges_fieldblock",true);
	else
		$xt->assign("amiges_tabfieldblock",true);
	$xt->assign("amiges_label",true);
	if(isEnableSection508())
		$xt->assign_section("amiges_label","<label for=\"".GetInputElementId("amiges", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("meet_day"))
		$xt->assign("meet_day_fieldblock",true);
	else
		$xt->assign("meet_day_tabfieldblock",true);
	$xt->assign("meet_day_label",true);
	if(isEnableSection508())
		$xt->assign_section("meet_day_label","<label for=\"".GetInputElementId("meet_day", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("meet_hour"))
		$xt->assign("meet_hour_fieldblock",true);
	else
		$xt->assign("meet_hour_tabfieldblock",true);
	$xt->assign("meet_hour_label",true);
	if(isEnableSection508())
		$xt->assign_section("meet_hour_label","<label for=\"".GetInputElementId("meet_hour", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("meet_place"))
		$xt->assign("meet_place_fieldblock",true);
	else
		$xt->assign("meet_place_tabfieldblock",true);
	$xt->assign("meet_place_label",true);
	if(isEnableSection508())
		$xt->assign_section("meet_place_label","<label for=\"".GetInputElementId("meet_place", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("arxeio"))
		$xt->assign("arxeio_fieldblock",true);
	else
		$xt->assign("arxeio_tabfieldblock",true);
	$xt->assign("arxeio_label",true);
	if(isEnableSection508())
		$xt->assign_section("arxeio_label","<label for=\"".GetInputElementId("arxeio", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ypothemata"))
		$xt->assign("ypothemata_fieldblock",true);
	else
		$xt->assign("ypothemata_tabfieldblock",true);
	$xt->assign("ypothemata_label",true);
	if(isEnableSection508())
		$xt->assign_section("ypothemata_label","<label for=\"".GetInputElementId("ypothemata", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("stoxoi"))
		$xt->assign("stoxoi_fieldblock",true);
	else
		$xt->assign("stoxoi_tabfieldblock",true);
	$xt->assign("stoxoi_label",true);
	if(isEnableSection508())
		$xt->assign_section("stoxoi_label","<label for=\"".GetInputElementId("stoxoi", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("methodologia"))
		$xt->assign("methodologia_fieldblock",true);
	else
		$xt->assign("methodologia_tabfieldblock",true);
	$xt->assign("methodologia_label",true);
	if(isEnableSection508())
		$xt->assign_section("methodologia_label","<label for=\"".GetInputElementId("methodologia", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("syndeseis"))
		$xt->assign("syndeseis_fieldblock",true);
	else
		$xt->assign("syndeseis_tabfieldblock",true);
	$xt->assign("syndeseis_label",true);
	if(isEnableSection508())
		$xt->assign_section("syndeseis_label","<label for=\"".GetInputElementId("syndeseis", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("month1"))
		$xt->assign("month1_fieldblock",true);
	else
		$xt->assign("month1_tabfieldblock",true);
	$xt->assign("month1_label",true);
	if(isEnableSection508())
		$xt->assign_section("month1_label","<label for=\"".GetInputElementId("month1", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("month2"))
		$xt->assign("month2_fieldblock",true);
	else
		$xt->assign("month2_tabfieldblock",true);
	$xt->assign("month2_label",true);
	if(isEnableSection508())
		$xt->assign_section("month2_label","<label for=\"".GetInputElementId("month2", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("month3"))
		$xt->assign("month3_fieldblock",true);
	else
		$xt->assign("month3_tabfieldblock",true);
	$xt->assign("month3_label",true);
	if(isEnableSection508())
		$xt->assign_section("month3_label","<label for=\"".GetInputElementId("month3", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("month4"))
		$xt->assign("month4_fieldblock",true);
	else
		$xt->assign("month4_tabfieldblock",true);
	$xt->assign("month4_label",true);
	if(isEnableSection508())
		$xt->assign_section("month4_label","<label for=\"".GetInputElementId("month4", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("month5"))
		$xt->assign("month5_fieldblock",true);
	else
		$xt->assign("month5_tabfieldblock",true);
	$xt->assign("month5_label",true);
	if(isEnableSection508())
		$xt->assign_section("month5_label","<label for=\"".GetInputElementId("month5", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("episkepseis"))
		$xt->assign("episkepseis_fieldblock",true);
	else
		$xt->assign("episkepseis_tabfieldblock",true);
	$xt->assign("episkepseis_label",true);
	if(isEnableSection508())
		$xt->assign_section("episkepseis_label","<label for=\"".GetInputElementId("episkepseis", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("submission_date"))
		$xt->assign("submission_date_fieldblock",true);
	else
		$xt->assign("submission_date_tabfieldblock",true);
	$xt->assign("submission_date_label",true);
	if(isEnableSection508())
		$xt->assign_section("submission_date_label","<label for=\"".GetInputElementId("submission_date", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("last_modified_date"))
		$xt->assign("last_modified_date_fieldblock",true);
	else
		$xt->assign("last_modified_date_tabfieldblock",true);
	$xt->assign("last_modified_date_label",true);
	if(isEnableSection508())
		$xt->assign_section("last_modified_date_label","<label for=\"".GetInputElementId("last_modified_date", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ip_address"))
		$xt->assign("ip_address_fieldblock",true);
	else
		$xt->assign("ip_address_tabfieldblock",true);
	$xt->assign("ip_address_label",true);
	if(isEnableSection508())
		$xt->assign_section("ip_address_label","<label for=\"".GetInputElementId("ip_address", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("is_finalized"))
		$xt->assign("is_finalized_fieldblock",true);
	else
		$xt->assign("is_finalized_tabfieldblock",true);
	$xt->assign("is_finalized_label",true);
	if(isEnableSection508())
		$xt->assign_section("is_finalized_label","<label for=\"".GetInputElementId("is_finalized", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("sch_id"))
		$xt->assign("sch_id_fieldblock",true);
	else
		$xt->assign("sch_id_tabfieldblock",true);
	$xt->assign("sch_id_label",true);
	if(isEnableSection508())
		$xt->assign_section("sch_id_label","<label for=\"".GetInputElementId("sch_id", $id, PAGE_EDIT)."\">","</label>");
		

	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("submission_id", $data)));
	//$xt->assign('editForm',true);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if(!@$_SESSION[$strTableName."_noNextPrev"] && $inlineedit == EDIT_SIMPLE)
	{
		$next = array();
		$prev = array();
		$pageObject->getNextPrevRecordKeys($data,"Edit",$next,$prev);
	}
	$nextlink = $prevlink = "";
	if(count($next))
	{
		$xt->assign("next_button",true);
				$nextlink.= "editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
				$prevlink.= "editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("prev_button",false);
	$xt->assign("resetbutton_attrs",'id="resetButton'.$id.'"');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//End Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if($inlineedit == EDIT_SIMPLE)
	{
		$xt->assign("back_button",true);
		$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
	}
	// onmouseover event, for changing focus. Needed to proper submit form
	//$onmouseover = "this.focus();";
	//$onmouseover = 'onmouseover="'.$onmouseover.'"';
	
	$xt->assign("save_button",true);
	if(!$enableCtrlsForEditing)
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\" type=\"disabled\" ");
	else
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\"");
		
	$xt->assign("reset_button",true);

}

$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}
/////////////////////////////////////////////////////////////
//process readonly and auto-update fields
/////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////
//	return new data to the List page or report an error
/////////////////////////////////////////////////////////////
if (postvalue("a")=="edited" && ($inlineedit == EDIT_INLINE || $inlineedit == EDIT_POPUP))
{
	if(!$data)
	{
		$data = $evalues;
		$HaveData = false;
	}
	//Preparation   view values

//	detail tables

	$keylink = "";
	$keylink.= "&key1=".htmlspecialchars(rawurlencode(@$data["submission_id"]));


//	submission_id - 
	$value = $pageObject->showDBValue("submission_id", $data, $keylink);
	$showValues["submission_id"] = $value;
	$showFields[] = "submission_id";
		$showRawValues["submission_id"] = substr($data["submission_id"],0,100);

//	programa - 
	$value = $pageObject->showDBValue("programa", $data, $keylink);
	$showValues["programa"] = $value;
	$showFields[] = "programa";
		$showRawValues["programa"] = substr($data["programa"],0,100);

//	date - 
	$value = $pageObject->showDBValue("date", $data, $keylink);
	$showValues["date"] = $value;
	$showFields[] = "date";
		$showRawValues["date"] = substr($data["date"],0,100);

//	ar_protocol - 
	$value = $pageObject->showDBValue("ar_protocol", $data, $keylink);
	$showValues["ar_protocol"] = $value;
	$showFields[] = "ar_protocol";
		$showRawValues["ar_protocol"] = substr($data["ar_protocol"],0,100);

//	sxol_etos - 
	$value = $pageObject->showDBValue("sxol_etos", $data, $keylink);
	$showValues["sxol_etos"] = $value;
	$showFields[] = "sxol_etos";
		$showRawValues["sxol_etos"] = substr($data["sxol_etos"],0,100);

//	dide_name - 
	$value = $pageObject->showDBValue("dide_name", $data, $keylink);
	$showValues["dide_name"] = $value;
	$showFields[] = "dide_name";
		$showRawValues["dide_name"] = substr($data["dide_name"],0,100);

//	sch_name - 
	$value = $pageObject->showDBValue("sch_name", $data, $keylink);
	$showValues["sch_name"] = $value;
	$showFields[] = "sch_name";
		$showRawValues["sch_name"] = substr($data["sch_name"],0,100);

//	tel_ergasias - 
	$value = $pageObject->showDBValue("tel_ergasias", $data, $keylink);
	$showValues["tel_ergasias"] = $value;
	$showFields[] = "tel_ergasias";
		$showRawValues["tel_ergasias"] = substr($data["tel_ergasias"],0,100);

//	dimos - 
	$value = $pageObject->showDBValue("dimos", $data, $keylink);
	$showValues["dimos"] = $value;
	$showFields[] = "dimos";
		$showRawValues["dimos"] = substr($data["dimos"],0,100);

//	fax - 
	$value = $pageObject->showDBValue("fax", $data, $keylink);
	$showValues["fax"] = $value;
	$showFields[] = "fax";
		$showRawValues["fax"] = substr($data["fax"],0,100);

//	e_mail - 
	$value = $pageObject->showDBValue("e_mail", $data, $keylink);
	$showValues["e_mail"] = $value;
	$showFields[] = "e_mail";
		$showRawValues["e_mail"] = substr($data["e_mail"],0,100);

//	sch_teachers - 
	$value = $pageObject->showDBValue("sch_teachers", $data, $keylink);
	$showValues["sch_teachers"] = $value;
	$showFields[] = "sch_teachers";
		$showRawValues["sch_teachers"] = substr($data["sch_teachers"],0,100);

//	sch_students - 
	$value = $pageObject->showDBValue("sch_students", $data, $keylink);
	$showValues["sch_students"] = $value;
	$showFields[] = "sch_students";
		$showRawValues["sch_students"] = substr($data["sch_students"],0,100);

//	dieythintis_name - 
	$value = $pageObject->showDBValue("dieythintis_name", $data, $keylink);
	$showValues["dieythintis_name"] = $value;
	$showFields[] = "dieythintis_name";
		$showRawValues["dieythintis_name"] = substr($data["dieythintis_name"],0,100);

//	klados_dieythinti - 
	$value = $pageObject->showDBValue("klados_dieythinti", $data, $keylink);
	$showValues["klados_dieythinti"] = $value;
	$showFields[] = "klados_dieythinti";
		$showRawValues["klados_dieythinti"] = substr($data["klados_dieythinti"],0,100);

//	program_title - 
	$value = $pageObject->showDBValue("program_title", $data, $keylink);
	$showValues["program_title"] = $value;
	$showFields[] = "program_title";
		$showRawValues["program_title"] = substr($data["program_title"],0,100);

//	ar_praksis - 
	$value = $pageObject->showDBValue("ar_praksis", $data, $keylink);
	$showValues["ar_praksis"] = $value;
	$showFields[] = "ar_praksis";
		$showRawValues["ar_praksis"] = substr($data["ar_praksis"],0,100);

//	date_praksis - 
	$value = $pageObject->showDBValue("date_praksis", $data, $keylink);
	$showValues["date_praksis"] = $value;
	$showFields[] = "date_praksis";
		$showRawValues["date_praksis"] = substr($data["date_praksis"],0,100);

//	sch_orario - 
	$value = $pageObject->showDBValue("sch_orario", $data, $keylink);
	$showValues["sch_orario"] = $value;
	$showFields[] = "sch_orario";
		$showRawValues["sch_orario"] = substr($data["sch_orario"],0,100);

//	ypeythinos_name - 
	$value = $pageObject->showDBValue("ypeythinos_name", $data, $keylink);
	$showValues["ypeythinos_name"] = $value;
	$showFields[] = "ypeythinos_name";
		$showRawValues["ypeythinos_name"] = substr($data["ypeythinos_name"],0,100);

//	ypeythinos_amm - 
	$value = $pageObject->showDBValue("ypeythinos_amm", $data, $keylink);
	$showValues["ypeythinos_amm"] = $value;
	$showFields[] = "ypeythinos_amm";
		$showRawValues["ypeythinos_amm"] = substr($data["ypeythinos_amm"],0,100);

//	ypeythinos_klados - 
	$value = $pageObject->showDBValue("ypeythinos_klados", $data, $keylink);
	$showValues["ypeythinos_klados"] = $value;
	$showFields[] = "ypeythinos_klados";
		$showRawValues["ypeythinos_klados"] = substr($data["ypeythinos_klados"],0,100);

//	ypeythinos_wres - 
	$value = $pageObject->showDBValue("ypeythinos_wres", $data, $keylink);
	$showValues["ypeythinos_wres"] = $value;
	$showFields[] = "ypeythinos_wres";
		$showRawValues["ypeythinos_wres"] = substr($data["ypeythinos_wres"],0,100);

//	ypeythinos_again - 
	$value = $pageObject->showDBValue("ypeythinos_again", $data, $keylink);
	$showValues["ypeythinos_again"] = $value;
	$showFields[] = "ypeythinos_again";
		$showRawValues["ypeythinos_again"] = substr($data["ypeythinos_again"],0,100);

//	ypeythinos_epimorfosi - 
	$value = $pageObject->showDBValue("ypeythinos_epimorfosi", $data, $keylink);
	$showValues["ypeythinos_epimorfosi"] = $value;
	$showFields[] = "ypeythinos_epimorfosi";
		$showRawValues["ypeythinos_epimorfosi"] = substr($data["ypeythinos_epimorfosi"],0,100);

//	symetexwn1_name - 
	$value = $pageObject->showDBValue("symetexwn1_name", $data, $keylink);
	$showValues["symetexwn1_name"] = $value;
	$showFields[] = "symetexwn1_name";
		$showRawValues["symetexwn1_name"] = substr($data["symetexwn1_name"],0,100);

//	symetexwn1_amm - 
	$value = $pageObject->showDBValue("symetexwn1_amm", $data, $keylink);
	$showValues["symetexwn1_amm"] = $value;
	$showFields[] = "symetexwn1_amm";
		$showRawValues["symetexwn1_amm"] = substr($data["symetexwn1_amm"],0,100);

//	symetexwn1_klados - 
	$value = $pageObject->showDBValue("symetexwn1_klados", $data, $keylink);
	$showValues["symetexwn1_klados"] = $value;
	$showFields[] = "symetexwn1_klados";
		$showRawValues["symetexwn1_klados"] = substr($data["symetexwn1_klados"],0,100);

//	symetexwn1_wres - 
	$value = $pageObject->showDBValue("symetexwn1_wres", $data, $keylink);
	$showValues["symetexwn1_wres"] = $value;
	$showFields[] = "symetexwn1_wres";
		$showRawValues["symetexwn1_wres"] = substr($data["symetexwn1_wres"],0,100);

//	symetexwn1_again - 
	$value = $pageObject->showDBValue("symetexwn1_again", $data, $keylink);
	$showValues["symetexwn1_again"] = $value;
	$showFields[] = "symetexwn1_again";
		$showRawValues["symetexwn1_again"] = substr($data["symetexwn1_again"],0,100);

//	symetexwn1_epimorfosi - 
	$value = $pageObject->showDBValue("symetexwn1_epimorfosi", $data, $keylink);
	$showValues["symetexwn1_epimorfosi"] = $value;
	$showFields[] = "symetexwn1_epimorfosi";
		$showRawValues["symetexwn1_epimorfosi"] = substr($data["symetexwn1_epimorfosi"],0,100);

//	symetexwn2_name - 
	$value = $pageObject->showDBValue("symetexwn2_name", $data, $keylink);
	$showValues["symetexwn2_name"] = $value;
	$showFields[] = "symetexwn2_name";
		$showRawValues["symetexwn2_name"] = substr($data["symetexwn2_name"],0,100);

//	symetexwn2_amm - 
	$value = $pageObject->showDBValue("symetexwn2_amm", $data, $keylink);
	$showValues["symetexwn2_amm"] = $value;
	$showFields[] = "symetexwn2_amm";
		$showRawValues["symetexwn2_amm"] = substr($data["symetexwn2_amm"],0,100);

//	symetexwn2_klados - 
	$value = $pageObject->showDBValue("symetexwn2_klados", $data, $keylink);
	$showValues["symetexwn2_klados"] = $value;
	$showFields[] = "symetexwn2_klados";
		$showRawValues["symetexwn2_klados"] = substr($data["symetexwn2_klados"],0,100);

//	symetexwn2_wres - 
	$value = $pageObject->showDBValue("symetexwn2_wres", $data, $keylink);
	$showValues["symetexwn2_wres"] = $value;
	$showFields[] = "symetexwn2_wres";
		$showRawValues["symetexwn2_wres"] = substr($data["symetexwn2_wres"],0,100);

//	symetexwn2_again - 
	$value = $pageObject->showDBValue("symetexwn2_again", $data, $keylink);
	$showValues["symetexwn2_again"] = $value;
	$showFields[] = "symetexwn2_again";
		$showRawValues["symetexwn2_again"] = substr($data["symetexwn2_again"],0,100);

//	symetexwn2_epimorfosi - 
	$value = $pageObject->showDBValue("symetexwn2_epimorfosi", $data, $keylink);
	$showValues["symetexwn2_epimorfosi"] = $value;
	$showFields[] = "symetexwn2_epimorfosi";
		$showRawValues["symetexwn2_epimorfosi"] = substr($data["symetexwn2_epimorfosi"],0,100);

//	symetexwn3_name - 
	$value = $pageObject->showDBValue("symetexwn3_name", $data, $keylink);
	$showValues["symetexwn3_name"] = $value;
	$showFields[] = "symetexwn3_name";
		$showRawValues["symetexwn3_name"] = substr($data["symetexwn3_name"],0,100);

//	symetexwn3_amm - 
	$value = $pageObject->showDBValue("symetexwn3_amm", $data, $keylink);
	$showValues["symetexwn3_amm"] = $value;
	$showFields[] = "symetexwn3_amm";
		$showRawValues["symetexwn3_amm"] = substr($data["symetexwn3_amm"],0,100);

//	symetexwn3_klados - 
	$value = $pageObject->showDBValue("symetexwn3_klados", $data, $keylink);
	$showValues["symetexwn3_klados"] = $value;
	$showFields[] = "symetexwn3_klados";
		$showRawValues["symetexwn3_klados"] = substr($data["symetexwn3_klados"],0,100);

//	symetexwn3_wres - 
	$value = $pageObject->showDBValue("symetexwn3_wres", $data, $keylink);
	$showValues["symetexwn3_wres"] = $value;
	$showFields[] = "symetexwn3_wres";
		$showRawValues["symetexwn3_wres"] = substr($data["symetexwn3_wres"],0,100);

//	symetexwn3_again - 
	$value = $pageObject->showDBValue("symetexwn3_again", $data, $keylink);
	$showValues["symetexwn3_again"] = $value;
	$showFields[] = "symetexwn3_again";
		$showRawValues["symetexwn3_again"] = substr($data["symetexwn3_again"],0,100);

//	symetexwn3_epimorfosi - 
	$value = $pageObject->showDBValue("symetexwn3_epimorfosi", $data, $keylink);
	$showValues["symetexwn3_epimorfosi"] = $value;
	$showFields[] = "symetexwn3_epimorfosi";
		$showRawValues["symetexwn3_epimorfosi"] = substr($data["symetexwn3_epimorfosi"],0,100);

//	mathites_synolo - 
	$value = $pageObject->showDBValue("mathites_synolo", $data, $keylink);
	$showValues["mathites_synolo"] = $value;
	$showFields[] = "mathites_synolo";
		$showRawValues["mathites_synolo"] = substr($data["mathites_synolo"],0,100);

//	agoria - 
	$value = $pageObject->showDBValue("agoria", $data, $keylink);
	$showValues["agoria"] = $value;
	$showFields[] = "agoria";
		$showRawValues["agoria"] = substr($data["agoria"],0,100);

//	koritsia - 
	$value = $pageObject->showDBValue("koritsia", $data, $keylink);
	$showValues["koritsia"] = $value;
	$showFields[] = "koritsia";
		$showRawValues["koritsia"] = substr($data["koritsia"],0,100);

//	amiges - 
	$value = $pageObject->showDBValue("amiges", $data, $keylink);
	$showValues["amiges"] = $value;
	$showFields[] = "amiges";
		$showRawValues["amiges"] = substr($data["amiges"],0,100);

//	meet_day - 
	$value = $pageObject->showDBValue("meet_day", $data, $keylink);
	$showValues["meet_day"] = $value;
	$showFields[] = "meet_day";
		$showRawValues["meet_day"] = substr($data["meet_day"],0,100);

//	meet_hour - 
	$value = $pageObject->showDBValue("meet_hour", $data, $keylink);
	$showValues["meet_hour"] = $value;
	$showFields[] = "meet_hour";
		$showRawValues["meet_hour"] = substr($data["meet_hour"],0,100);

//	meet_place - 
	$value = $pageObject->showDBValue("meet_place", $data, $keylink);
	$showValues["meet_place"] = $value;
	$showFields[] = "meet_place";
		$showRawValues["meet_place"] = substr($data["meet_place"],0,100);

//	arxeio - 
	$value = $pageObject->showDBValue("arxeio", $data, $keylink);
	$showValues["arxeio"] = $value;
	$showFields[] = "arxeio";
		$showRawValues["arxeio"] = substr($data["arxeio"],0,100);

//	ypothemata - 
	$value = $pageObject->showDBValue("ypothemata", $data, $keylink);
	$showValues["ypothemata"] = $value;
	$showFields[] = "ypothemata";
		$showRawValues["ypothemata"] = substr($data["ypothemata"],0,100);

//	stoxoi - 
	$value = $pageObject->showDBValue("stoxoi", $data, $keylink);
	$showValues["stoxoi"] = $value;
	$showFields[] = "stoxoi";
		$showRawValues["stoxoi"] = substr($data["stoxoi"],0,100);

//	methodologia - 
	$value = $pageObject->showDBValue("methodologia", $data, $keylink);
	$showValues["methodologia"] = $value;
	$showFields[] = "methodologia";
		$showRawValues["methodologia"] = substr($data["methodologia"],0,100);

//	syndeseis - 
	$value = $pageObject->showDBValue("syndeseis", $data, $keylink);
	$showValues["syndeseis"] = $value;
	$showFields[] = "syndeseis";
		$showRawValues["syndeseis"] = substr($data["syndeseis"],0,100);

//	month1 - 
	$value = $pageObject->showDBValue("month1", $data, $keylink);
	$showValues["month1"] = $value;
	$showFields[] = "month1";
		$showRawValues["month1"] = substr($data["month1"],0,100);

//	month2 - 
	$value = $pageObject->showDBValue("month2", $data, $keylink);
	$showValues["month2"] = $value;
	$showFields[] = "month2";
		$showRawValues["month2"] = substr($data["month2"],0,100);

//	month3 - 
	$value = $pageObject->showDBValue("month3", $data, $keylink);
	$showValues["month3"] = $value;
	$showFields[] = "month3";
		$showRawValues["month3"] = substr($data["month3"],0,100);

//	month4 - 
	$value = $pageObject->showDBValue("month4", $data, $keylink);
	$showValues["month4"] = $value;
	$showFields[] = "month4";
		$showRawValues["month4"] = substr($data["month4"],0,100);

//	month5 - 
	$value = $pageObject->showDBValue("month5", $data, $keylink);
	$showValues["month5"] = $value;
	$showFields[] = "month5";
		$showRawValues["month5"] = substr($data["month5"],0,100);

//	episkepseis - 
	$value = $pageObject->showDBValue("episkepseis", $data, $keylink);
	$showValues["episkepseis"] = $value;
	$showFields[] = "episkepseis";
		$showRawValues["episkepseis"] = substr($data["episkepseis"],0,100);

//	submission_date - 
	$value = $pageObject->showDBValue("submission_date", $data, $keylink);
	$showValues["submission_date"] = $value;
	$showFields[] = "submission_date";
		$showRawValues["submission_date"] = substr($data["submission_date"],0,100);

//	last_modified_date - 
	$value = $pageObject->showDBValue("last_modified_date", $data, $keylink);
	$showValues["last_modified_date"] = $value;
	$showFields[] = "last_modified_date";
		$showRawValues["last_modified_date"] = substr($data["last_modified_date"],0,100);

//	ip_address - 
	$value = $pageObject->showDBValue("ip_address", $data, $keylink);
	$showValues["ip_address"] = $value;
	$showFields[] = "ip_address";
		$showRawValues["ip_address"] = substr($data["ip_address"],0,100);

//	is_finalized - 
	$value = $pageObject->showDBValue("is_finalized", $data, $keylink);
	$showValues["is_finalized"] = $value;
	$showFields[] = "is_finalized";
		$showRawValues["is_finalized"] = substr($data["is_finalized"],0,100);

//	sch_id - 
	$value = $pageObject->showDBValue("sch_id", $data, $keylink);
	$showValues["sch_id"] = $value;
	$showFields[] = "sch_id";
		$showRawValues["sch_id"] = substr($data["sch_id"],0,100);
/////////////////////////////////////////////////////////////
//	start inline output
/////////////////////////////////////////////////////////////
	
	if($IsSaved)
	{
		if($pageObject->lockingObj)
			$pageObject->lockingObj->UnlockRecord($strTableName,$keys,"");
		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $pageObject->jsKeys;
		$returnJSON['keyFields'] = $pageObject->keyFields;
		$returnJSON['vals'] = $showValues;
		$returnJSON['fields'] = $showFields;
		$returnJSON['rawVals'] = $showRawValues;
		$returnJSON['detKeys'] = $showDetailKeys;
		$returnJSON['userMess'] = $usermessage;
		$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
		
		if($inlineedit==EDIT_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$returnJSON['hideCaptcha'] = true;
			
		if($globalEvents->exists("IsRecordEditable", $strTableName))
		{
			if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
				$returnJSON['nonEditable'] = true;
		}
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
		
		if($pageObject->lockingObj)
			$returnJSON['lockMessage'] = $system_message;
		
		if($inlineedit == EDIT_POPUP && !$pageObject->isCaptchaOk)
			$returnJSON['captcha'] = false;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
} 
/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////
//	validation stuff
$regex = '';
$regexmessage = '';
$regextype = '';
$control = array();

foreach($pageObject->editFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if (!$detailKeys || !in_array($fName, $detailKeys))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"]="xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_EDIT;
		$control[$gfName]["params"]["field"] = $fName;
		if(!IsNumberType($pageObject->pSet->getFieldType($fName)) || is_null(@$data[$fName]))
			$control[$gfName]["params"]["value"] = @$data[$fName];
		else
		{
			$control[$gfName]["params"]["value"] = str_replace(".",$locale_info["LOCALE_SDECIMAL"],@$data[$fName]);
		}
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation	
		$additionalCtrlParams = array();
		$additionalCtrlParams["disabled"] = !$enableCtrlsForEditing;
		$control[$gfName]["params"]["additionalCtrlParams"] = $additionalCtrlParams;
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	
	if($inlineedit == EDIT_INLINE)
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="inline_edit";
		$controls["controls"]['mode'] = "inline_edit";
	}
	else{
			if (!$detailKeys || !in_array($fName, $detailKeys))
				$control[$gfName]["params"]["mode"] = "edit";
			$controls["controls"]['mode'] = "edit";
		}
																																																																			
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$data[$fName];
		
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $pageObject->editFields))
		$vals = array($fName => @$data[$fName],$strCategoryControl => @$data[$strCategoryControl]);
	else
		$vals = array($fName => @$data[$fName]);
		
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
		$controls["controls"]['preloadData'] = $preload;
	
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')	
		$pageObject->fillTimePickSettings($fName, $data[$fName]);
	
	if($pageObject->pSet->getViewFormat($fName) == FORMAT_MAP)	
		$pageObject->googleMapCfg['isUseGoogleMap'] = true;
		
	if($detailKeys && in_array($fName, $detailKeys) && array_key_exists($fName, $data))
	{
		$value = $pageObject->showDBValue($fName, $data);
		
		$xt->assign($gfName."_editcontrol",$value);
	}
}
//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
if($pageObject->lockingObj)
{
	$pageObject->jsSettings['tableSettings'][$strTableName]["sKeys"] = $skeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]["enableCtrls"] = $enableCtrlsForEditing;
	$pageObject->jsSettings['tableSettings'][$strTableName]["confirmTime"] = $pageObject->lockingObj->ConfirmTime;
}

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && $inlineedit!=EDIT_INLINE && !isMobile())
{
	if(count($dpParams['ids']))
	{
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		$xt->assign("detail_tables",true);	
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	$flyId = $ids+1;
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_EDIT;
		$options["mainMasterPageType"] = PAGE_EDIT;
		$options['masterTable'] = "ft_form_4";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")){
			$strTableName = "ft_form_4";
			continue;
		}
		
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
			$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
				, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
			$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
		}	
		
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $flyId++;
		$masterKeys = array();
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk){
			$options['masterKeysReq'][$mkr] = $data[$mk];
			$masterKeys['masterKey'.$mkr] = $data[$mk];
			$mkr++;
		}
		
		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->isDispGrid())
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			
			foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
				$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
			}
			
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dControlsMap[$strTableName]['masterKeys'] = $masterKeys;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
			
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
			
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
		$flyId = $listPageObject->recId+1;
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "ft_form_4";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->flyId = $flyId;
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineedit == EDIT_SIMPLE)
{
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineedit == EDIT_POPUP){
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("body",$pageObject->body);
}

$xt->assign("style_block",true);

$pageObject->xt->assign("legend", true);

$viewlink = "";
$viewkeys = array();
	$viewkeys["editid1"] = postvalue("editid1");
foreach($viewkeys as $key => $val)
{
	if($viewlink)
		$viewlink.="&";
	$viewlink.=$key."=".$val;
}
$xt->assign("viewlink_attrs","id=\"viewButton".$id."\" name=\"viewButton".$id."\" onclick=\"window.location.href='ft_form_4_view.php?".$viewlink."'\"");
if(CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") && $inlineedit == EDIT_SIMPLE)
	$xt->assign("view_button",true);
else
	$xt->assign("view_button",false);

/////////////////////////////////////////////////////////////
//display the page
/////////////////////////////////////////////////////////////
if($eventObj->exists("BeforeShowEdit"))
	$eventObj->BeforeShowEdit($xt,$templatefile,$data, $pageObject);

if($inlineedit != EDIT_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}
	
if($inlineedit == EDIT_POPUP || $inlineedit == EDIT_INLINE)
{
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($data, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
}
if($inlineedit == EDIT_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $flyId + 1;
	echo (my_json_encode($returnJSON)); 
}
elseif($inlineedit == EDIT_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($pageObject->editFields as $fName)
	{
		if($detailKeys && in_array($fName, $detailKeys))
			continue;
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");
	}
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);
	
function SecurityRedirect($inlineedit)
{
	if($inlineedit == EDIT_INLINE)
	{
		echo my_json_encode(array("success" => false, "message" => "The record is not editable"));
		return;
	}
	
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: menu.php?message=expired");	
}
?>
