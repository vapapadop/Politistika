<?php 
include("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

add_nocache_headers();
include("include/ft_form_4_variables.php");
include('include/xtempl.php');
include('classes/addpage.php');

global $globalEvents;

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'A') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	
	header("Location: login.php?message=expired"); 
	return;
}

if ((sizeof($_POST)==0) && (postvalue('ferror'))){
	if (postvalue("inline")){
		$returnJSON['success'] = false;
		$returnJSON['message'] = "Error occurred";
		$returnJSON['fatalError'] = true;
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
	else if (postvalue("fly")){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_add"] = "<< "."Error occurred"." >>";
	}
}

$layout = new TLayout("add2","BoldOrange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["add"] = array();

$layout->containers["add"][] = array("name"=>"addheader","block"=>"","substyle"=>2);


$layout->containers["add"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["add"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"addfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"addbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["add"] = "1";
$layout->blocks["top"][] = "add";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["ft_form_4_add"] = $layout;



$filename = "";
$status = "";
$message = "";
$mesClass = "";
$usermessage = "";
$error_happened = false;
$readavalues = false;

$keys = array();
$showValues = array();
$showRawValues = array();
$showFields = array();
$showDetailKeys = array();
$IsSaved = false;
$HaveData = true;
$popUpSave = false;

$sessionPrefix = $strTableName;

$onFly = false;
if(postvalue("onFly"))
	$onFly = true;

if(@$_REQUEST["editType"]=="inline")
	$inlineadd = ADD_INLINE;
elseif(@$_REQUEST["editType"]==ADD_POPUP)
{
	$inlineadd = ADD_POPUP;
	if(@$_POST["a"]=="added" && postvalue("field")=="" && postvalue("category")=="")
		$popUpSave = true;	
}
elseif(@$_REQUEST["editType"]==ADD_MASTER)
	$inlineadd = ADD_MASTER;
elseif($onFly)
{
	$inlineadd = ADD_ONTHEFLY;
	$sessionPrefix = $strTableName."_add";
}
else
	$inlineadd = ADD_SIMPLE;

if($inlineadd == ADD_INLINE)
	$templatefile = "ft_form_4_inline_add.htm";
else
	$templatefile = "ft_form_4_add.htm";

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

//If undefined session value for mastet table, but exist post value master table, than take second
//It may be happen only when use dpInline mode on page add
if(!@$_SESSION[$sessionPrefix."_mastertable"] && postvalue("mastertable"))
	$_SESSION[$sessionPrefix."_mastertable"] = postvalue("mastertable");
	
$xt = new Xtempl();
	
// assign an id
$xt->assign("id",$id);
	
$auditObj = GetAuditObject($strTableName);

//array of params for classes
$params = array("pageType" => PAGE_ADD,"id" => $id,"mode" => $inlineadd);


$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['includes_js'] = $includes_js;
$params['locale_info'] = $locale_info;
$params['includes_css'] = $includes_css;
$params['useTabsOnAdd'] = $gSettings->useTabsOnAdd();
$params['templatefile'] = $templatefile;
$params['includes_jsreq'] = $includes_jsreq;
$params['pageAddLikeInline'] = ($inlineadd==ADD_INLINE);
$params['needSearchClauseObj'] = false;
$params['strOriginalTableName'] = $strOriginalTableName;

if($params['useTabsOnAdd'])
	$params['arrAddTabs'] = $gSettings->getAddTabs();
	
$pageObject = new AddPage($params);

if(isset($_REQUEST['afteradd'])){
		header('Location: ft_form_4_add.php');
	if($eventObj->exists("AfterAdd") && isset($_SESSION['after_add_data'][$_REQUEST['afteradd']])){
	
		$data = $_SESSION['after_add_data'][$_REQUEST['afteradd']];
		$eventObj->AfterAdd($data['avalues'], $data['keys'],$data['inlineadd'], $pageObject);
	
	}
	unset($_SESSION['after_add_data'][$_REQUEST['afteradd']]);
	
	foreach (is_array($_SESSION['after_add_data']) ? $_SESSION['after_add_data'] : array() as $k=>$v){
		if (!is_array($v) or !array_key_exists('time',$v)) {
			unset($_SESSION['after_add_data'][$k]);
			continue;
		}
		if ($v['time'] < time() - 3600){
			unset($_SESSION['after_add_data'][$k]);
		}
	}
		exit;
}

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;

//Array of fields, which appear on add page
$addFields = $pageObject->getFieldsByPageType();

// add button events if exist
if ($inlineadd==ADD_SIMPLE || $inlineadd == ADD_ONTHEFLY)
	$pageObject->addButtonHandlers();

$url_page=substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//For show detail tables on master page add
if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables  && !isMobile())
	{
		$ids = $id;
		$countDetailsIsShow = 0;
		$pageObject->jsSettings['tableSettings'][$strTableName]['isShowDetails'] = $countDetailsIsShow > 0 ? true : false;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}

//	Before Process event
if($eventObj->exists("BeforeProcessAdd"))
	$eventObj->BeforeProcessAdd($conn, $pageObject);

// proccess captcha
if ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();
	
// insert new record if we have to
if(@$_POST["a"]=="added")
{
	$afilename_values=array();
	$avalues=array();
	$blobfields=array();
//	processing programa - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_programa = $pageObject->getControl("programa", $id);
		$control_programa->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing programa - end
//	processing date - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_date = $pageObject->getControl("date", $id);
		$control_date->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing date - end
//	processing ar_protocol - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ar_protocol = $pageObject->getControl("ar_protocol", $id);
		$control_ar_protocol->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ar_protocol - end
//	processing sxol_etos - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_sxol_etos = $pageObject->getControl("sxol_etos", $id);
		$control_sxol_etos->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing sxol_etos - end
//	processing dide_name - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_dide_name = $pageObject->getControl("dide_name", $id);
		$control_dide_name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing dide_name - end
//	processing sch_name - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_sch_name = $pageObject->getControl("sch_name", $id);
		$control_sch_name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing sch_name - end
//	processing tel_ergasias - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_tel_ergasias = $pageObject->getControl("tel_ergasias", $id);
		$control_tel_ergasias->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing tel_ergasias - end
//	processing dimos - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_dimos = $pageObject->getControl("dimos", $id);
		$control_dimos->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing dimos - end
//	processing fax - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_fax = $pageObject->getControl("fax", $id);
		$control_fax->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing fax - end
//	processing e_mail - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_e_mail = $pageObject->getControl("e_mail", $id);
		$control_e_mail->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing e_mail - end
//	processing sch_teachers - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_sch_teachers = $pageObject->getControl("sch_teachers", $id);
		$control_sch_teachers->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing sch_teachers - end
//	processing sch_students - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_sch_students = $pageObject->getControl("sch_students", $id);
		$control_sch_students->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing sch_students - end
//	processing dieythintis_name - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_dieythintis_name = $pageObject->getControl("dieythintis_name", $id);
		$control_dieythintis_name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing dieythintis_name - end
//	processing klados_dieythinti - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_klados_dieythinti = $pageObject->getControl("klados_dieythinti", $id);
		$control_klados_dieythinti->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing klados_dieythinti - end
//	processing program_title - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_program_title = $pageObject->getControl("program_title", $id);
		$control_program_title->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing program_title - end
//	processing ar_praksis - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ar_praksis = $pageObject->getControl("ar_praksis", $id);
		$control_ar_praksis->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ar_praksis - end
//	processing date_praksis - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_date_praksis = $pageObject->getControl("date_praksis", $id);
		$control_date_praksis->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing date_praksis - end
//	processing sch_orario - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_sch_orario = $pageObject->getControl("sch_orario", $id);
		$control_sch_orario->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing sch_orario - end
//	processing ypeythinos_name - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ypeythinos_name = $pageObject->getControl("ypeythinos_name", $id);
		$control_ypeythinos_name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ypeythinos_name - end
//	processing ypeythinos_amm - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ypeythinos_amm = $pageObject->getControl("ypeythinos_amm", $id);
		$control_ypeythinos_amm->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ypeythinos_amm - end
//	processing ypeythinos_klados - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ypeythinos_klados = $pageObject->getControl("ypeythinos_klados", $id);
		$control_ypeythinos_klados->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ypeythinos_klados - end
//	processing ypeythinos_wres - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ypeythinos_wres = $pageObject->getControl("ypeythinos_wres", $id);
		$control_ypeythinos_wres->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ypeythinos_wres - end
//	processing ypeythinos_again - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ypeythinos_again = $pageObject->getControl("ypeythinos_again", $id);
		$control_ypeythinos_again->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ypeythinos_again - end
//	processing ypeythinos_epimorfosi - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ypeythinos_epimorfosi = $pageObject->getControl("ypeythinos_epimorfosi", $id);
		$control_ypeythinos_epimorfosi->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ypeythinos_epimorfosi - end
//	processing symetexwn1_name - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn1_name = $pageObject->getControl("symetexwn1_name", $id);
		$control_symetexwn1_name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn1_name - end
//	processing symetexwn1_amm - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn1_amm = $pageObject->getControl("symetexwn1_amm", $id);
		$control_symetexwn1_amm->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn1_amm - end
//	processing symetexwn1_klados - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn1_klados = $pageObject->getControl("symetexwn1_klados", $id);
		$control_symetexwn1_klados->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn1_klados - end
//	processing symetexwn1_wres - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn1_wres = $pageObject->getControl("symetexwn1_wres", $id);
		$control_symetexwn1_wres->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn1_wres - end
//	processing symetexwn1_again - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn1_again = $pageObject->getControl("symetexwn1_again", $id);
		$control_symetexwn1_again->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn1_again - end
//	processing symetexwn1_epimorfosi - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn1_epimorfosi = $pageObject->getControl("symetexwn1_epimorfosi", $id);
		$control_symetexwn1_epimorfosi->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn1_epimorfosi - end
//	processing symetexwn2_name - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn2_name = $pageObject->getControl("symetexwn2_name", $id);
		$control_symetexwn2_name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn2_name - end
//	processing symetexwn2_amm - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn2_amm = $pageObject->getControl("symetexwn2_amm", $id);
		$control_symetexwn2_amm->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn2_amm - end
//	processing symetexwn2_klados - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn2_klados = $pageObject->getControl("symetexwn2_klados", $id);
		$control_symetexwn2_klados->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn2_klados - end
//	processing symetexwn2_wres - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn2_wres = $pageObject->getControl("symetexwn2_wres", $id);
		$control_symetexwn2_wres->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn2_wres - end
//	processing symetexwn2_again - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn2_again = $pageObject->getControl("symetexwn2_again", $id);
		$control_symetexwn2_again->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn2_again - end
//	processing symetexwn2_epimorfosi - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn2_epimorfosi = $pageObject->getControl("symetexwn2_epimorfosi", $id);
		$control_symetexwn2_epimorfosi->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn2_epimorfosi - end
//	processing symetexwn3_name - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn3_name = $pageObject->getControl("symetexwn3_name", $id);
		$control_symetexwn3_name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn3_name - end
//	processing symetexwn3_amm - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn3_amm = $pageObject->getControl("symetexwn3_amm", $id);
		$control_symetexwn3_amm->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn3_amm - end
//	processing symetexwn3_klados - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn3_klados = $pageObject->getControl("symetexwn3_klados", $id);
		$control_symetexwn3_klados->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn3_klados - end
//	processing symetexwn3_wres - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn3_wres = $pageObject->getControl("symetexwn3_wres", $id);
		$control_symetexwn3_wres->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn3_wres - end
//	processing symetexwn3_again - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn3_again = $pageObject->getControl("symetexwn3_again", $id);
		$control_symetexwn3_again->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn3_again - end
//	processing symetexwn3_epimorfosi - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_symetexwn3_epimorfosi = $pageObject->getControl("symetexwn3_epimorfosi", $id);
		$control_symetexwn3_epimorfosi->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing symetexwn3_epimorfosi - end
//	processing mathites_synolo - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_mathites_synolo = $pageObject->getControl("mathites_synolo", $id);
		$control_mathites_synolo->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing mathites_synolo - end
//	processing agoria - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_agoria = $pageObject->getControl("agoria", $id);
		$control_agoria->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing agoria - end
//	processing koritsia - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_koritsia = $pageObject->getControl("koritsia", $id);
		$control_koritsia->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing koritsia - end
//	processing amiges - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_amiges = $pageObject->getControl("amiges", $id);
		$control_amiges->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing amiges - end
//	processing meet_day - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_meet_day = $pageObject->getControl("meet_day", $id);
		$control_meet_day->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing meet_day - end
//	processing meet_hour - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_meet_hour = $pageObject->getControl("meet_hour", $id);
		$control_meet_hour->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing meet_hour - end
//	processing meet_place - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_meet_place = $pageObject->getControl("meet_place", $id);
		$control_meet_place->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing meet_place - end
//	processing arxeio - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_arxeio = $pageObject->getControl("arxeio", $id);
		$control_arxeio->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing arxeio - end
//	processing ypothemata - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ypothemata = $pageObject->getControl("ypothemata", $id);
		$control_ypothemata->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ypothemata - end
//	processing stoxoi - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_stoxoi = $pageObject->getControl("stoxoi", $id);
		$control_stoxoi->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing stoxoi - end
//	processing methodologia - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_methodologia = $pageObject->getControl("methodologia", $id);
		$control_methodologia->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing methodologia - end
//	processing syndeseis - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_syndeseis = $pageObject->getControl("syndeseis", $id);
		$control_syndeseis->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing syndeseis - end
//	processing month1 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_month1 = $pageObject->getControl("month1", $id);
		$control_month1->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing month1 - end
//	processing month2 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_month2 = $pageObject->getControl("month2", $id);
		$control_month2->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing month2 - end
//	processing month3 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_month3 = $pageObject->getControl("month3", $id);
		$control_month3->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing month3 - end
//	processing month4 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_month4 = $pageObject->getControl("month4", $id);
		$control_month4->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing month4 - end
//	processing month5 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_month5 = $pageObject->getControl("month5", $id);
		$control_month5->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing month5 - end
//	processing episkepseis - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_episkepseis = $pageObject->getControl("episkepseis", $id);
		$control_episkepseis->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing episkepseis - end
//	processing submission_date - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_submission_date = $pageObject->getControl("submission_date", $id);
		$control_submission_date->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing submission_date - end
//	processing last_modified_date - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_last_modified_date = $pageObject->getControl("last_modified_date", $id);
		$control_last_modified_date->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing last_modified_date - end
//	processing ip_address - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ip_address = $pageObject->getControl("ip_address", $id);
		$control_ip_address->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ip_address - end
//	processing is_finalized - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_is_finalized = $pageObject->getControl("is_finalized", $id);
		$control_is_finalized->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing is_finalized - end




	$failed_inline_add=false;
//	add filenames to values
	foreach($afilename_values as $akey=>$value)
		$avalues[$akey]=$value;
	
//	before Add event
	$retval = true;
	if($eventObj->exists("BeforeAdd"))
		$retval = $eventObj->BeforeAdd($avalues,$usermessage,(bool)$inlineadd, $pageObject);
	if($retval && $pageObject->isCaptchaOk)
	{
		//add or set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked
		setUpdatedLatLng($avalues, $pageObject->cipherer->pSet);
		
		$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		if(DoInsertRecord($strOriginalTableName,$avalues,$blobfields,$id,$pageObject, $pageObject->cipherer))
		{
			$IsSaved=true;
//	after edit event
			if($auditObj || $eventObj->exists("AfterAdd"))
			{
				foreach($keys as $idx=>$val)
					$avalues[$idx]=$val;
			}
			
			if($auditObj)
				$auditObj->LogAdd($strTableName,$avalues,$keys);
				
// Give possibility to all edit controls to clean their data				
//	processing programa - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_programa->afterSuccessfulSave();
			}
//	processing programa - end
//	processing date - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_date->afterSuccessfulSave();
			}
//	processing date - end
//	processing ar_protocol - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ar_protocol->afterSuccessfulSave();
			}
//	processing ar_protocol - end
//	processing sxol_etos - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_sxol_etos->afterSuccessfulSave();
			}
//	processing sxol_etos - end
//	processing dide_name - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_dide_name->afterSuccessfulSave();
			}
//	processing dide_name - end
//	processing sch_name - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_sch_name->afterSuccessfulSave();
			}
//	processing sch_name - end
//	processing tel_ergasias - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_tel_ergasias->afterSuccessfulSave();
			}
//	processing tel_ergasias - end
//	processing dimos - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_dimos->afterSuccessfulSave();
			}
//	processing dimos - end
//	processing fax - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_fax->afterSuccessfulSave();
			}
//	processing fax - end
//	processing e_mail - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_e_mail->afterSuccessfulSave();
			}
//	processing e_mail - end
//	processing sch_teachers - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_sch_teachers->afterSuccessfulSave();
			}
//	processing sch_teachers - end
//	processing sch_students - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_sch_students->afterSuccessfulSave();
			}
//	processing sch_students - end
//	processing dieythintis_name - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_dieythintis_name->afterSuccessfulSave();
			}
//	processing dieythintis_name - end
//	processing klados_dieythinti - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_klados_dieythinti->afterSuccessfulSave();
			}
//	processing klados_dieythinti - end
//	processing program_title - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_program_title->afterSuccessfulSave();
			}
//	processing program_title - end
//	processing ar_praksis - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ar_praksis->afterSuccessfulSave();
			}
//	processing ar_praksis - end
//	processing date_praksis - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_date_praksis->afterSuccessfulSave();
			}
//	processing date_praksis - end
//	processing sch_orario - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_sch_orario->afterSuccessfulSave();
			}
//	processing sch_orario - end
//	processing ypeythinos_name - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ypeythinos_name->afterSuccessfulSave();
			}
//	processing ypeythinos_name - end
//	processing ypeythinos_amm - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ypeythinos_amm->afterSuccessfulSave();
			}
//	processing ypeythinos_amm - end
//	processing ypeythinos_klados - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ypeythinos_klados->afterSuccessfulSave();
			}
//	processing ypeythinos_klados - end
//	processing ypeythinos_wres - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ypeythinos_wres->afterSuccessfulSave();
			}
//	processing ypeythinos_wres - end
//	processing ypeythinos_again - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ypeythinos_again->afterSuccessfulSave();
			}
//	processing ypeythinos_again - end
//	processing ypeythinos_epimorfosi - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ypeythinos_epimorfosi->afterSuccessfulSave();
			}
//	processing ypeythinos_epimorfosi - end
//	processing symetexwn1_name - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn1_name->afterSuccessfulSave();
			}
//	processing symetexwn1_name - end
//	processing symetexwn1_amm - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn1_amm->afterSuccessfulSave();
			}
//	processing symetexwn1_amm - end
//	processing symetexwn1_klados - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn1_klados->afterSuccessfulSave();
			}
//	processing symetexwn1_klados - end
//	processing symetexwn1_wres - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn1_wres->afterSuccessfulSave();
			}
//	processing symetexwn1_wres - end
//	processing symetexwn1_again - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn1_again->afterSuccessfulSave();
			}
//	processing symetexwn1_again - end
//	processing symetexwn1_epimorfosi - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn1_epimorfosi->afterSuccessfulSave();
			}
//	processing symetexwn1_epimorfosi - end
//	processing symetexwn2_name - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn2_name->afterSuccessfulSave();
			}
//	processing symetexwn2_name - end
//	processing symetexwn2_amm - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn2_amm->afterSuccessfulSave();
			}
//	processing symetexwn2_amm - end
//	processing symetexwn2_klados - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn2_klados->afterSuccessfulSave();
			}
//	processing symetexwn2_klados - end
//	processing symetexwn2_wres - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn2_wres->afterSuccessfulSave();
			}
//	processing symetexwn2_wres - end
//	processing symetexwn2_again - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn2_again->afterSuccessfulSave();
			}
//	processing symetexwn2_again - end
//	processing symetexwn2_epimorfosi - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn2_epimorfosi->afterSuccessfulSave();
			}
//	processing symetexwn2_epimorfosi - end
//	processing symetexwn3_name - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn3_name->afterSuccessfulSave();
			}
//	processing symetexwn3_name - end
//	processing symetexwn3_amm - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn3_amm->afterSuccessfulSave();
			}
//	processing symetexwn3_amm - end
//	processing symetexwn3_klados - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn3_klados->afterSuccessfulSave();
			}
//	processing symetexwn3_klados - end
//	processing symetexwn3_wres - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn3_wres->afterSuccessfulSave();
			}
//	processing symetexwn3_wres - end
//	processing symetexwn3_again - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn3_again->afterSuccessfulSave();
			}
//	processing symetexwn3_again - end
//	processing symetexwn3_epimorfosi - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_symetexwn3_epimorfosi->afterSuccessfulSave();
			}
//	processing symetexwn3_epimorfosi - end
//	processing mathites_synolo - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_mathites_synolo->afterSuccessfulSave();
			}
//	processing mathites_synolo - end
//	processing agoria - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_agoria->afterSuccessfulSave();
			}
//	processing agoria - end
//	processing koritsia - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_koritsia->afterSuccessfulSave();
			}
//	processing koritsia - end
//	processing amiges - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_amiges->afterSuccessfulSave();
			}
//	processing amiges - end
//	processing meet_day - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_meet_day->afterSuccessfulSave();
			}
//	processing meet_day - end
//	processing meet_hour - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_meet_hour->afterSuccessfulSave();
			}
//	processing meet_hour - end
//	processing meet_place - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_meet_place->afterSuccessfulSave();
			}
//	processing meet_place - end
//	processing arxeio - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_arxeio->afterSuccessfulSave();
			}
//	processing arxeio - end
//	processing ypothemata - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ypothemata->afterSuccessfulSave();
			}
//	processing ypothemata - end
//	processing stoxoi - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_stoxoi->afterSuccessfulSave();
			}
//	processing stoxoi - end
//	processing methodologia - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_methodologia->afterSuccessfulSave();
			}
//	processing methodologia - end
//	processing syndeseis - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_syndeseis->afterSuccessfulSave();
			}
//	processing syndeseis - end
//	processing month1 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_month1->afterSuccessfulSave();
			}
//	processing month1 - end
//	processing month2 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_month2->afterSuccessfulSave();
			}
//	processing month2 - end
//	processing month3 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_month3->afterSuccessfulSave();
			}
//	processing month3 - end
//	processing month4 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_month4->afterSuccessfulSave();
			}
//	processing month4 - end
//	processing month5 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_month5->afterSuccessfulSave();
			}
//	processing month5 - end
//	processing episkepseis - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_episkepseis->afterSuccessfulSave();
			}
//	processing episkepseis - end
//	processing submission_date - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_submission_date->afterSuccessfulSave();
			}
//	processing submission_date - end
//	processing last_modified_date - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_last_modified_date->afterSuccessfulSave();
			}
//	processing last_modified_date - end
//	processing ip_address - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ip_address->afterSuccessfulSave();
			}
//	processing ip_address - end
//	processing is_finalized - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_is_finalized->afterSuccessfulSave();
			}
//	processing is_finalized - end

			$afterAdd_id = '';	
			if($eventObj->exists("AfterAdd") && $inlineadd!=ADD_MASTER){
				$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
			} else if ($eventObj->exists("AfterAdd") && $inlineadd==ADD_MASTER){
				if($onFly)
					$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
				else{
					$afterAdd_id = generatePassword(20);	
				
					$_SESSION['after_add_data'][$afterAdd_id] = array(
						'avalues'=>$avalues,
						'keys'=>$keys,
						'inlineadd'=>(bool)$inlineadd,
						'time' => time()
					);	
				}
			}
				
			if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER)
			{
				$permis = array();
				$keylink = "";$k = 0;
				foreach($keys as $idx=>$val)
				{
					if($k!=0)
						$keylink .="&";
					$keylink .="editid".(++$k)."=".htmlspecialchars(rawurlencode(@$val));
				}
				$permis = $pageObject->getPermissions();				
				if (count($keys))
				{
					$message .="</br>";
					if($pageObject->pSet->hasEditPage() && $permis['edit'])
						$message .='&nbsp;<a href=\'ft_form_4_edit.php?'.$keylink.'\'>'."Edit".'</a>&nbsp;';
					if($pageObject->pSet->hasViewPage() && $permis['search'])
						$message .='&nbsp;<a href=\'ft_form_4_view.php?'.$keylink.'\'>'."View".'</a>&nbsp;';
				}
				$mesClass = "mes_ok";	
			}
		}
		elseif($inlineadd!=ADD_INLINE)
			$mesClass = "mes_not";	
	}
	else
	{
		$message = $usermessage;
		$status = "DECLINED";
		$readavalues = true;
	}
}
if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if (no_output_done() && $inlineadd==ADD_SIMPLE && $IsSaved)
{
	// saving message
	$_SESSION["message_add"] = ($message ? $message : "");
	// redirect
	header("Location: ft_form_4_".$pageObject->getPageType().".php");
	// turned on output buffering, so we need to stop script
	exit();
}

if($inlineadd==ADD_MASTER && $IsSaved)
	$_SESSION["message_add"] = ($message ? $message : "");
	
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if($inlineadd==ADD_SIMPLE && isset($_SESSION["message_add"]))
{
	$message = $_SESSION["message_add"];
	unset($_SESSION["message_add"]);
}

$defvalues=array();

//	copy record
if(array_key_exists("copyid1",$_REQUEST) || array_key_exists("editid1",$_REQUEST))
{
	$copykeys=array();
	if(array_key_exists("copyid1",$_REQUEST))
	{
		$copykeys["submission_id"]=postvalue("copyid1");
	}
	else
	{
		$copykeys["submission_id"]=postvalue("editid1");
	}
	$strWhere=KeyWhere($copykeys);
	$strSQL = $gQuery->gSQLWhere($strWhere);

	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$defvalues = $pageObject->cipherer->DecryptFetchedArray($rs);
	if(!$defvalues)
		$defvalues=array();
//	clear key fields
	$defvalues["submission_id"]="";
//call CopyOnLoad event
	if($eventObj->exists("CopyOnLoad"))
		$eventObj->CopyOnLoad($defvalues,$strWhere, $pageObject);
}
else
{
}



if($readavalues)
{
	$defvalues["programa"]=@$avalues["programa"];
	$defvalues["date"]=@$avalues["date"];
	$defvalues["ar_protocol"]=@$avalues["ar_protocol"];
	$defvalues["sxol_etos"]=@$avalues["sxol_etos"];
	$defvalues["dide_name"]=@$avalues["dide_name"];
	$defvalues["sch_name"]=@$avalues["sch_name"];
	$defvalues["tel_ergasias"]=@$avalues["tel_ergasias"];
	$defvalues["dimos"]=@$avalues["dimos"];
	$defvalues["fax"]=@$avalues["fax"];
	$defvalues["e_mail"]=@$avalues["e_mail"];
	$defvalues["sch_teachers"]=@$avalues["sch_teachers"];
	$defvalues["sch_students"]=@$avalues["sch_students"];
	$defvalues["dieythintis_name"]=@$avalues["dieythintis_name"];
	$defvalues["klados_dieythinti"]=@$avalues["klados_dieythinti"];
	$defvalues["program_title"]=@$avalues["program_title"];
	$defvalues["ar_praksis"]=@$avalues["ar_praksis"];
	$defvalues["date_praksis"]=@$avalues["date_praksis"];
	$defvalues["sch_orario"]=@$avalues["sch_orario"];
	$defvalues["ypeythinos_name"]=@$avalues["ypeythinos_name"];
	$defvalues["ypeythinos_amm"]=@$avalues["ypeythinos_amm"];
	$defvalues["ypeythinos_klados"]=@$avalues["ypeythinos_klados"];
	$defvalues["ypeythinos_wres"]=@$avalues["ypeythinos_wres"];
	$defvalues["ypeythinos_again"]=@$avalues["ypeythinos_again"];
	$defvalues["ypeythinos_epimorfosi"]=@$avalues["ypeythinos_epimorfosi"];
	$defvalues["symetexwn1_name"]=@$avalues["symetexwn1_name"];
	$defvalues["symetexwn1_amm"]=@$avalues["symetexwn1_amm"];
	$defvalues["symetexwn1_klados"]=@$avalues["symetexwn1_klados"];
	$defvalues["symetexwn1_wres"]=@$avalues["symetexwn1_wres"];
	$defvalues["symetexwn1_again"]=@$avalues["symetexwn1_again"];
	$defvalues["symetexwn1_epimorfosi"]=@$avalues["symetexwn1_epimorfosi"];
	$defvalues["symetexwn2_name"]=@$avalues["symetexwn2_name"];
	$defvalues["symetexwn2_amm"]=@$avalues["symetexwn2_amm"];
	$defvalues["symetexwn2_klados"]=@$avalues["symetexwn2_klados"];
	$defvalues["symetexwn2_wres"]=@$avalues["symetexwn2_wres"];
	$defvalues["symetexwn2_again"]=@$avalues["symetexwn2_again"];
	$defvalues["symetexwn2_epimorfosi"]=@$avalues["symetexwn2_epimorfosi"];
	$defvalues["symetexwn3_name"]=@$avalues["symetexwn3_name"];
	$defvalues["symetexwn3_amm"]=@$avalues["symetexwn3_amm"];
	$defvalues["symetexwn3_klados"]=@$avalues["symetexwn3_klados"];
	$defvalues["symetexwn3_wres"]=@$avalues["symetexwn3_wres"];
	$defvalues["symetexwn3_again"]=@$avalues["symetexwn3_again"];
	$defvalues["symetexwn3_epimorfosi"]=@$avalues["symetexwn3_epimorfosi"];
	$defvalues["mathites_synolo"]=@$avalues["mathites_synolo"];
	$defvalues["agoria"]=@$avalues["agoria"];
	$defvalues["koritsia"]=@$avalues["koritsia"];
	$defvalues["amiges"]=@$avalues["amiges"];
	$defvalues["meet_day"]=@$avalues["meet_day"];
	$defvalues["meet_hour"]=@$avalues["meet_hour"];
	$defvalues["meet_place"]=@$avalues["meet_place"];
	$defvalues["arxeio"]=@$avalues["arxeio"];
	$defvalues["ypothemata"]=@$avalues["ypothemata"];
	$defvalues["stoxoi"]=@$avalues["stoxoi"];
	$defvalues["methodologia"]=@$avalues["methodologia"];
	$defvalues["syndeseis"]=@$avalues["syndeseis"];
	$defvalues["month1"]=@$avalues["month1"];
	$defvalues["month2"]=@$avalues["month2"];
	$defvalues["month3"]=@$avalues["month3"];
	$defvalues["month4"]=@$avalues["month4"];
	$defvalues["month5"]=@$avalues["month5"];
	$defvalues["episkepseis"]=@$avalues["episkepseis"];
	$defvalues["submission_date"]=@$avalues["submission_date"];
	$defvalues["last_modified_date"]=@$avalues["last_modified_date"];
	$defvalues["ip_address"]=@$avalues["ip_address"];
	$defvalues["is_finalized"]=@$avalues["is_finalized"];
}

if($eventObj->exists("ProcessValuesAdd"))
	$eventObj->ProcessValuesAdd($defvalues, $pageObject);


//for basic files
$includes="";

if($inlineadd!=ADD_INLINE)
{
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$includes .="<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		if (!isMobile())
			$includes.="<div id=\"search_suggest\"></div>\r\n";
	}
	
	if(!$pageObject->isAppearOnTabs("programa"))
		$xt->assign("programa_fieldblock",true);
	else
		$xt->assign("programa_tabfieldblock",true);
	$xt->assign("programa_label",true);
	if(isEnableSection508())
		$xt->assign_section("programa_label","<label for=\"".GetInputElementId("programa", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("date"))
		$xt->assign("date_fieldblock",true);
	else
		$xt->assign("date_tabfieldblock",true);
	$xt->assign("date_label",true);
	if(isEnableSection508())
		$xt->assign_section("date_label","<label for=\"".GetInputElementId("date", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ar_protocol"))
		$xt->assign("ar_protocol_fieldblock",true);
	else
		$xt->assign("ar_protocol_tabfieldblock",true);
	$xt->assign("ar_protocol_label",true);
	if(isEnableSection508())
		$xt->assign_section("ar_protocol_label","<label for=\"".GetInputElementId("ar_protocol", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("sxol_etos"))
		$xt->assign("sxol_etos_fieldblock",true);
	else
		$xt->assign("sxol_etos_tabfieldblock",true);
	$xt->assign("sxol_etos_label",true);
	if(isEnableSection508())
		$xt->assign_section("sxol_etos_label","<label for=\"".GetInputElementId("sxol_etos", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("dide_name"))
		$xt->assign("dide_name_fieldblock",true);
	else
		$xt->assign("dide_name_tabfieldblock",true);
	$xt->assign("dide_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("dide_name_label","<label for=\"".GetInputElementId("dide_name", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("sch_name"))
		$xt->assign("sch_name_fieldblock",true);
	else
		$xt->assign("sch_name_tabfieldblock",true);
	$xt->assign("sch_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("sch_name_label","<label for=\"".GetInputElementId("sch_name", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("tel_ergasias"))
		$xt->assign("tel_ergasias_fieldblock",true);
	else
		$xt->assign("tel_ergasias_tabfieldblock",true);
	$xt->assign("tel_ergasias_label",true);
	if(isEnableSection508())
		$xt->assign_section("tel_ergasias_label","<label for=\"".GetInputElementId("tel_ergasias", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("dimos"))
		$xt->assign("dimos_fieldblock",true);
	else
		$xt->assign("dimos_tabfieldblock",true);
	$xt->assign("dimos_label",true);
	if(isEnableSection508())
		$xt->assign_section("dimos_label","<label for=\"".GetInputElementId("dimos", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("fax"))
		$xt->assign("fax_fieldblock",true);
	else
		$xt->assign("fax_tabfieldblock",true);
	$xt->assign("fax_label",true);
	if(isEnableSection508())
		$xt->assign_section("fax_label","<label for=\"".GetInputElementId("fax", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("e_mail"))
		$xt->assign("e_mail_fieldblock",true);
	else
		$xt->assign("e_mail_tabfieldblock",true);
	$xt->assign("e_mail_label",true);
	if(isEnableSection508())
		$xt->assign_section("e_mail_label","<label for=\"".GetInputElementId("e_mail", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("sch_teachers"))
		$xt->assign("sch_teachers_fieldblock",true);
	else
		$xt->assign("sch_teachers_tabfieldblock",true);
	$xt->assign("sch_teachers_label",true);
	if(isEnableSection508())
		$xt->assign_section("sch_teachers_label","<label for=\"".GetInputElementId("sch_teachers", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("sch_students"))
		$xt->assign("sch_students_fieldblock",true);
	else
		$xt->assign("sch_students_tabfieldblock",true);
	$xt->assign("sch_students_label",true);
	if(isEnableSection508())
		$xt->assign_section("sch_students_label","<label for=\"".GetInputElementId("sch_students", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("dieythintis_name"))
		$xt->assign("dieythintis_name_fieldblock",true);
	else
		$xt->assign("dieythintis_name_tabfieldblock",true);
	$xt->assign("dieythintis_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("dieythintis_name_label","<label for=\"".GetInputElementId("dieythintis_name", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("klados_dieythinti"))
		$xt->assign("klados_dieythinti_fieldblock",true);
	else
		$xt->assign("klados_dieythinti_tabfieldblock",true);
	$xt->assign("klados_dieythinti_label",true);
	if(isEnableSection508())
		$xt->assign_section("klados_dieythinti_label","<label for=\"".GetInputElementId("klados_dieythinti", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("program_title"))
		$xt->assign("program_title_fieldblock",true);
	else
		$xt->assign("program_title_tabfieldblock",true);
	$xt->assign("program_title_label",true);
	if(isEnableSection508())
		$xt->assign_section("program_title_label","<label for=\"".GetInputElementId("program_title", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ar_praksis"))
		$xt->assign("ar_praksis_fieldblock",true);
	else
		$xt->assign("ar_praksis_tabfieldblock",true);
	$xt->assign("ar_praksis_label",true);
	if(isEnableSection508())
		$xt->assign_section("ar_praksis_label","<label for=\"".GetInputElementId("ar_praksis", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("date_praksis"))
		$xt->assign("date_praksis_fieldblock",true);
	else
		$xt->assign("date_praksis_tabfieldblock",true);
	$xt->assign("date_praksis_label",true);
	if(isEnableSection508())
		$xt->assign_section("date_praksis_label","<label for=\"".GetInputElementId("date_praksis", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("sch_orario"))
		$xt->assign("sch_orario_fieldblock",true);
	else
		$xt->assign("sch_orario_tabfieldblock",true);
	$xt->assign("sch_orario_label",true);
	if(isEnableSection508())
		$xt->assign_section("sch_orario_label","<label for=\"".GetInputElementId("sch_orario", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ypeythinos_name"))
		$xt->assign("ypeythinos_name_fieldblock",true);
	else
		$xt->assign("ypeythinos_name_tabfieldblock",true);
	$xt->assign("ypeythinos_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_name_label","<label for=\"".GetInputElementId("ypeythinos_name", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ypeythinos_amm"))
		$xt->assign("ypeythinos_amm_fieldblock",true);
	else
		$xt->assign("ypeythinos_amm_tabfieldblock",true);
	$xt->assign("ypeythinos_amm_label",true);
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_amm_label","<label for=\"".GetInputElementId("ypeythinos_amm", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ypeythinos_klados"))
		$xt->assign("ypeythinos_klados_fieldblock",true);
	else
		$xt->assign("ypeythinos_klados_tabfieldblock",true);
	$xt->assign("ypeythinos_klados_label",true);
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_klados_label","<label for=\"".GetInputElementId("ypeythinos_klados", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ypeythinos_wres"))
		$xt->assign("ypeythinos_wres_fieldblock",true);
	else
		$xt->assign("ypeythinos_wres_tabfieldblock",true);
	$xt->assign("ypeythinos_wres_label",true);
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_wres_label","<label for=\"".GetInputElementId("ypeythinos_wres", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ypeythinos_again"))
		$xt->assign("ypeythinos_again_fieldblock",true);
	else
		$xt->assign("ypeythinos_again_tabfieldblock",true);
	$xt->assign("ypeythinos_again_label",true);
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_again_label","<label for=\"".GetInputElementId("ypeythinos_again", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ypeythinos_epimorfosi"))
		$xt->assign("ypeythinos_epimorfosi_fieldblock",true);
	else
		$xt->assign("ypeythinos_epimorfosi_tabfieldblock",true);
	$xt->assign("ypeythinos_epimorfosi_label",true);
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_epimorfosi_label","<label for=\"".GetInputElementId("ypeythinos_epimorfosi", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn1_name"))
		$xt->assign("symetexwn1_name_fieldblock",true);
	else
		$xt->assign("symetexwn1_name_tabfieldblock",true);
	$xt->assign("symetexwn1_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_name_label","<label for=\"".GetInputElementId("symetexwn1_name", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn1_amm"))
		$xt->assign("symetexwn1_amm_fieldblock",true);
	else
		$xt->assign("symetexwn1_amm_tabfieldblock",true);
	$xt->assign("symetexwn1_amm_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_amm_label","<label for=\"".GetInputElementId("symetexwn1_amm", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn1_klados"))
		$xt->assign("symetexwn1_klados_fieldblock",true);
	else
		$xt->assign("symetexwn1_klados_tabfieldblock",true);
	$xt->assign("symetexwn1_klados_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_klados_label","<label for=\"".GetInputElementId("symetexwn1_klados", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn1_wres"))
		$xt->assign("symetexwn1_wres_fieldblock",true);
	else
		$xt->assign("symetexwn1_wres_tabfieldblock",true);
	$xt->assign("symetexwn1_wres_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_wres_label","<label for=\"".GetInputElementId("symetexwn1_wres", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn1_again"))
		$xt->assign("symetexwn1_again_fieldblock",true);
	else
		$xt->assign("symetexwn1_again_tabfieldblock",true);
	$xt->assign("symetexwn1_again_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_again_label","<label for=\"".GetInputElementId("symetexwn1_again", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn1_epimorfosi"))
		$xt->assign("symetexwn1_epimorfosi_fieldblock",true);
	else
		$xt->assign("symetexwn1_epimorfosi_tabfieldblock",true);
	$xt->assign("symetexwn1_epimorfosi_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_epimorfosi_label","<label for=\"".GetInputElementId("symetexwn1_epimorfosi", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn2_name"))
		$xt->assign("symetexwn2_name_fieldblock",true);
	else
		$xt->assign("symetexwn2_name_tabfieldblock",true);
	$xt->assign("symetexwn2_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_name_label","<label for=\"".GetInputElementId("symetexwn2_name", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn2_amm"))
		$xt->assign("symetexwn2_amm_fieldblock",true);
	else
		$xt->assign("symetexwn2_amm_tabfieldblock",true);
	$xt->assign("symetexwn2_amm_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_amm_label","<label for=\"".GetInputElementId("symetexwn2_amm", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn2_klados"))
		$xt->assign("symetexwn2_klados_fieldblock",true);
	else
		$xt->assign("symetexwn2_klados_tabfieldblock",true);
	$xt->assign("symetexwn2_klados_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_klados_label","<label for=\"".GetInputElementId("symetexwn2_klados", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn2_wres"))
		$xt->assign("symetexwn2_wres_fieldblock",true);
	else
		$xt->assign("symetexwn2_wres_tabfieldblock",true);
	$xt->assign("symetexwn2_wres_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_wres_label","<label for=\"".GetInputElementId("symetexwn2_wres", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn2_again"))
		$xt->assign("symetexwn2_again_fieldblock",true);
	else
		$xt->assign("symetexwn2_again_tabfieldblock",true);
	$xt->assign("symetexwn2_again_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_again_label","<label for=\"".GetInputElementId("symetexwn2_again", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn2_epimorfosi"))
		$xt->assign("symetexwn2_epimorfosi_fieldblock",true);
	else
		$xt->assign("symetexwn2_epimorfosi_tabfieldblock",true);
	$xt->assign("symetexwn2_epimorfosi_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_epimorfosi_label","<label for=\"".GetInputElementId("symetexwn2_epimorfosi", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn3_name"))
		$xt->assign("symetexwn3_name_fieldblock",true);
	else
		$xt->assign("symetexwn3_name_tabfieldblock",true);
	$xt->assign("symetexwn3_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_name_label","<label for=\"".GetInputElementId("symetexwn3_name", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn3_amm"))
		$xt->assign("symetexwn3_amm_fieldblock",true);
	else
		$xt->assign("symetexwn3_amm_tabfieldblock",true);
	$xt->assign("symetexwn3_amm_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_amm_label","<label for=\"".GetInputElementId("symetexwn3_amm", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn3_klados"))
		$xt->assign("symetexwn3_klados_fieldblock",true);
	else
		$xt->assign("symetexwn3_klados_tabfieldblock",true);
	$xt->assign("symetexwn3_klados_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_klados_label","<label for=\"".GetInputElementId("symetexwn3_klados", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn3_wres"))
		$xt->assign("symetexwn3_wres_fieldblock",true);
	else
		$xt->assign("symetexwn3_wres_tabfieldblock",true);
	$xt->assign("symetexwn3_wres_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_wres_label","<label for=\"".GetInputElementId("symetexwn3_wres", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn3_again"))
		$xt->assign("symetexwn3_again_fieldblock",true);
	else
		$xt->assign("symetexwn3_again_tabfieldblock",true);
	$xt->assign("symetexwn3_again_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_again_label","<label for=\"".GetInputElementId("symetexwn3_again", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("symetexwn3_epimorfosi"))
		$xt->assign("symetexwn3_epimorfosi_fieldblock",true);
	else
		$xt->assign("symetexwn3_epimorfosi_tabfieldblock",true);
	$xt->assign("symetexwn3_epimorfosi_label",true);
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_epimorfosi_label","<label for=\"".GetInputElementId("symetexwn3_epimorfosi", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("mathites_synolo"))
		$xt->assign("mathites_synolo_fieldblock",true);
	else
		$xt->assign("mathites_synolo_tabfieldblock",true);
	$xt->assign("mathites_synolo_label",true);
	if(isEnableSection508())
		$xt->assign_section("mathites_synolo_label","<label for=\"".GetInputElementId("mathites_synolo", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("agoria"))
		$xt->assign("agoria_fieldblock",true);
	else
		$xt->assign("agoria_tabfieldblock",true);
	$xt->assign("agoria_label",true);
	if(isEnableSection508())
		$xt->assign_section("agoria_label","<label for=\"".GetInputElementId("agoria", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("koritsia"))
		$xt->assign("koritsia_fieldblock",true);
	else
		$xt->assign("koritsia_tabfieldblock",true);
	$xt->assign("koritsia_label",true);
	if(isEnableSection508())
		$xt->assign_section("koritsia_label","<label for=\"".GetInputElementId("koritsia", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("amiges"))
		$xt->assign("amiges_fieldblock",true);
	else
		$xt->assign("amiges_tabfieldblock",true);
	$xt->assign("amiges_label",true);
	if(isEnableSection508())
		$xt->assign_section("amiges_label","<label for=\"".GetInputElementId("amiges", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("meet_day"))
		$xt->assign("meet_day_fieldblock",true);
	else
		$xt->assign("meet_day_tabfieldblock",true);
	$xt->assign("meet_day_label",true);
	if(isEnableSection508())
		$xt->assign_section("meet_day_label","<label for=\"".GetInputElementId("meet_day", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("meet_hour"))
		$xt->assign("meet_hour_fieldblock",true);
	else
		$xt->assign("meet_hour_tabfieldblock",true);
	$xt->assign("meet_hour_label",true);
	if(isEnableSection508())
		$xt->assign_section("meet_hour_label","<label for=\"".GetInputElementId("meet_hour", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("meet_place"))
		$xt->assign("meet_place_fieldblock",true);
	else
		$xt->assign("meet_place_tabfieldblock",true);
	$xt->assign("meet_place_label",true);
	if(isEnableSection508())
		$xt->assign_section("meet_place_label","<label for=\"".GetInputElementId("meet_place", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("arxeio"))
		$xt->assign("arxeio_fieldblock",true);
	else
		$xt->assign("arxeio_tabfieldblock",true);
	$xt->assign("arxeio_label",true);
	if(isEnableSection508())
		$xt->assign_section("arxeio_label","<label for=\"".GetInputElementId("arxeio", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ypothemata"))
		$xt->assign("ypothemata_fieldblock",true);
	else
		$xt->assign("ypothemata_tabfieldblock",true);
	$xt->assign("ypothemata_label",true);
	if(isEnableSection508())
		$xt->assign_section("ypothemata_label","<label for=\"".GetInputElementId("ypothemata", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("stoxoi"))
		$xt->assign("stoxoi_fieldblock",true);
	else
		$xt->assign("stoxoi_tabfieldblock",true);
	$xt->assign("stoxoi_label",true);
	if(isEnableSection508())
		$xt->assign_section("stoxoi_label","<label for=\"".GetInputElementId("stoxoi", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("methodologia"))
		$xt->assign("methodologia_fieldblock",true);
	else
		$xt->assign("methodologia_tabfieldblock",true);
	$xt->assign("methodologia_label",true);
	if(isEnableSection508())
		$xt->assign_section("methodologia_label","<label for=\"".GetInputElementId("methodologia", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("syndeseis"))
		$xt->assign("syndeseis_fieldblock",true);
	else
		$xt->assign("syndeseis_tabfieldblock",true);
	$xt->assign("syndeseis_label",true);
	if(isEnableSection508())
		$xt->assign_section("syndeseis_label","<label for=\"".GetInputElementId("syndeseis", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("month1"))
		$xt->assign("month1_fieldblock",true);
	else
		$xt->assign("month1_tabfieldblock",true);
	$xt->assign("month1_label",true);
	if(isEnableSection508())
		$xt->assign_section("month1_label","<label for=\"".GetInputElementId("month1", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("month2"))
		$xt->assign("month2_fieldblock",true);
	else
		$xt->assign("month2_tabfieldblock",true);
	$xt->assign("month2_label",true);
	if(isEnableSection508())
		$xt->assign_section("month2_label","<label for=\"".GetInputElementId("month2", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("month3"))
		$xt->assign("month3_fieldblock",true);
	else
		$xt->assign("month3_tabfieldblock",true);
	$xt->assign("month3_label",true);
	if(isEnableSection508())
		$xt->assign_section("month3_label","<label for=\"".GetInputElementId("month3", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("month4"))
		$xt->assign("month4_fieldblock",true);
	else
		$xt->assign("month4_tabfieldblock",true);
	$xt->assign("month4_label",true);
	if(isEnableSection508())
		$xt->assign_section("month4_label","<label for=\"".GetInputElementId("month4", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("month5"))
		$xt->assign("month5_fieldblock",true);
	else
		$xt->assign("month5_tabfieldblock",true);
	$xt->assign("month5_label",true);
	if(isEnableSection508())
		$xt->assign_section("month5_label","<label for=\"".GetInputElementId("month5", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("episkepseis"))
		$xt->assign("episkepseis_fieldblock",true);
	else
		$xt->assign("episkepseis_tabfieldblock",true);
	$xt->assign("episkepseis_label",true);
	if(isEnableSection508())
		$xt->assign_section("episkepseis_label","<label for=\"".GetInputElementId("episkepseis", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("submission_date"))
		$xt->assign("submission_date_fieldblock",true);
	else
		$xt->assign("submission_date_tabfieldblock",true);
	$xt->assign("submission_date_label",true);
	if(isEnableSection508())
		$xt->assign_section("submission_date_label","<label for=\"".GetInputElementId("submission_date", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("last_modified_date"))
		$xt->assign("last_modified_date_fieldblock",true);
	else
		$xt->assign("last_modified_date_tabfieldblock",true);
	$xt->assign("last_modified_date_label",true);
	if(isEnableSection508())
		$xt->assign_section("last_modified_date_label","<label for=\"".GetInputElementId("last_modified_date", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ip_address"))
		$xt->assign("ip_address_fieldblock",true);
	else
		$xt->assign("ip_address_tabfieldblock",true);
	$xt->assign("ip_address_label",true);
	if(isEnableSection508())
		$xt->assign_section("ip_address_label","<label for=\"".GetInputElementId("ip_address", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("is_finalized"))
		$xt->assign("is_finalized_fieldblock",true);
	else
		$xt->assign("is_finalized_tabfieldblock",true);
	$xt->assign("is_finalized_label",true);
	if(isEnableSection508())
		$xt->assign_section("is_finalized_label","<label for=\"".GetInputElementId("is_finalized", $id, PAGE_ADD)."\">","</label>");
	
	
	
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$pageObject->body["begin"] .= $includes;
				$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
		$xt->assign("back_button",true);
	}
	else
	{		
		$xt->assign("cancelbutton_attrs", "id=\"cancelButton".$id."\"");
		$xt->assign("cancel_button",true);
		$xt->assign("header","");
	}
	$xt->assign("save_button",true);
}
$xt->assign("savebutton_attrs","id=\"saveButton".$id."\"");
$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}

//	show readonly fields
$linkdata="";

$i = 0;
$jsKeys = array();
$keyFields = array();
foreach($keys as $field=>$value)
{
	$keyFields[$i] = $field;
	$jsKeys[$i++] = $value;
}

if(@$_POST["a"]=="added" && $inlineadd==ADD_ONTHEFLY)
{
	if( !$error_happened && $status!="DECLINED")
	{
		$addedData = GetAddedDataLookupQuery($pageObject, $keys, false);
		$data =& $addedData[0];	
		
		if($data)
		{
			$respData = array($addedData[1]["linkField"] => @$data[$addedData[1]["linkFieldIndex"]], $addedData[1]["displayField"] => @$data[$addedData[1]["displayFieldIndex"]]);
		}
		else
		{
			$respData = array($addedData[1]["linkField"] => @$avalues[$addedData[1]["linkField"]], $addedData[1]["displayField"] => @$avalues[$addedData[1]["displayField"]]);
		}		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $jsKeys;
		$returnJSON['keyFields'] = $keyFields;
		$returnJSON['vals'] = $respData;
		$returnJSON['fields'] = $showFields;
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}

if(@$_POST["a"]=="added" && ($inlineadd == ADD_INLINE || $inlineadd == ADD_MASTER || $inlineadd==ADD_POPUP)) 
{
	//Preparation   view values
	//	get current values and show edit controls
	$dispFieldAlias = "";
	$data=0;
	$linkAndDispVals = array();
	if(count($keys))
	{
		$where=KeyWhere($keys);
			
		$forLookup = postvalue('forLookup');
		if ($forLookup)
		{
			$addedData = GetAddedDataLookupQuery($pageObject, $keys, true);
			$data =& $addedData[0];
			$linkAndDispVals = array('linkField' => $addedData[0][$addedData[1]["linkField"]], 'displayField' => $addedData[0][$addedData[1]["displayField"]]);
		}
		else
		{
			$strSQL = $gQuery->gSQLWhere_having_fromQuery('', $where, '');		
		
			LogInfo($strSQL);
			$rs=db_query($strSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}
	}
	if(!$data)
	{
		$data=$avalues;
		$HaveData=false;
	}
	//check if correct values added

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["submission_id"]));
	
////////////////////////////////////////////
//	submission_id
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("submission_id", $data, $keylink);
		$showValues["submission_id"] = $value;
		$showFields[] = "submission_id";
	}	
//	programa
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("programa", $data, $keylink);
		$showValues["programa"] = $value;
		$showFields[] = "programa";
	}	
//	date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("date", $data, $keylink);
		$showValues["date"] = $value;
		$showFields[] = "date";
	}	
//	ar_protocol
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ar_protocol", $data, $keylink);
		$showValues["ar_protocol"] = $value;
		$showFields[] = "ar_protocol";
	}	
//	sxol_etos
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("sxol_etos", $data, $keylink);
		$showValues["sxol_etos"] = $value;
		$showFields[] = "sxol_etos";
	}	
//	dide_name
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("dide_name", $data, $keylink);
		$showValues["dide_name"] = $value;
		$showFields[] = "dide_name";
	}	
//	sch_name
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("sch_name", $data, $keylink);
		$showValues["sch_name"] = $value;
		$showFields[] = "sch_name";
	}	
//	tel_ergasias
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("tel_ergasias", $data, $keylink);
		$showValues["tel_ergasias"] = $value;
		$showFields[] = "tel_ergasias";
	}	
//	dimos
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("dimos", $data, $keylink);
		$showValues["dimos"] = $value;
		$showFields[] = "dimos";
	}	
//	fax
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("fax", $data, $keylink);
		$showValues["fax"] = $value;
		$showFields[] = "fax";
	}	
//	e_mail
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("e_mail", $data, $keylink);
		$showValues["e_mail"] = $value;
		$showFields[] = "e_mail";
	}	
//	sch_teachers
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("sch_teachers", $data, $keylink);
		$showValues["sch_teachers"] = $value;
		$showFields[] = "sch_teachers";
	}	
//	sch_students
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("sch_students", $data, $keylink);
		$showValues["sch_students"] = $value;
		$showFields[] = "sch_students";
	}	
//	dieythintis_name
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("dieythintis_name", $data, $keylink);
		$showValues["dieythintis_name"] = $value;
		$showFields[] = "dieythintis_name";
	}	
//	klados_dieythinti
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("klados_dieythinti", $data, $keylink);
		$showValues["klados_dieythinti"] = $value;
		$showFields[] = "klados_dieythinti";
	}	
//	program_title
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("program_title", $data, $keylink);
		$showValues["program_title"] = $value;
		$showFields[] = "program_title";
	}	
//	ar_praksis
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ar_praksis", $data, $keylink);
		$showValues["ar_praksis"] = $value;
		$showFields[] = "ar_praksis";
	}	
//	date_praksis
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("date_praksis", $data, $keylink);
		$showValues["date_praksis"] = $value;
		$showFields[] = "date_praksis";
	}	
//	sch_orario
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("sch_orario", $data, $keylink);
		$showValues["sch_orario"] = $value;
		$showFields[] = "sch_orario";
	}	
//	ypeythinos_name
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ypeythinos_name", $data, $keylink);
		$showValues["ypeythinos_name"] = $value;
		$showFields[] = "ypeythinos_name";
	}	
//	ypeythinos_amm
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ypeythinos_amm", $data, $keylink);
		$showValues["ypeythinos_amm"] = $value;
		$showFields[] = "ypeythinos_amm";
	}	
//	ypeythinos_klados
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ypeythinos_klados", $data, $keylink);
		$showValues["ypeythinos_klados"] = $value;
		$showFields[] = "ypeythinos_klados";
	}	
//	ypeythinos_wres
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ypeythinos_wres", $data, $keylink);
		$showValues["ypeythinos_wres"] = $value;
		$showFields[] = "ypeythinos_wres";
	}	
//	ypeythinos_again
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ypeythinos_again", $data, $keylink);
		$showValues["ypeythinos_again"] = $value;
		$showFields[] = "ypeythinos_again";
	}	
//	ypeythinos_epimorfosi
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ypeythinos_epimorfosi", $data, $keylink);
		$showValues["ypeythinos_epimorfosi"] = $value;
		$showFields[] = "ypeythinos_epimorfosi";
	}	
//	symetexwn1_name
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn1_name", $data, $keylink);
		$showValues["symetexwn1_name"] = $value;
		$showFields[] = "symetexwn1_name";
	}	
//	symetexwn1_amm
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn1_amm", $data, $keylink);
		$showValues["symetexwn1_amm"] = $value;
		$showFields[] = "symetexwn1_amm";
	}	
//	symetexwn1_klados
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn1_klados", $data, $keylink);
		$showValues["symetexwn1_klados"] = $value;
		$showFields[] = "symetexwn1_klados";
	}	
//	symetexwn1_wres
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn1_wres", $data, $keylink);
		$showValues["symetexwn1_wres"] = $value;
		$showFields[] = "symetexwn1_wres";
	}	
//	symetexwn1_again
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn1_again", $data, $keylink);
		$showValues["symetexwn1_again"] = $value;
		$showFields[] = "symetexwn1_again";
	}	
//	symetexwn1_epimorfosi
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn1_epimorfosi", $data, $keylink);
		$showValues["symetexwn1_epimorfosi"] = $value;
		$showFields[] = "symetexwn1_epimorfosi";
	}	
//	symetexwn2_name
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn2_name", $data, $keylink);
		$showValues["symetexwn2_name"] = $value;
		$showFields[] = "symetexwn2_name";
	}	
//	symetexwn2_amm
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn2_amm", $data, $keylink);
		$showValues["symetexwn2_amm"] = $value;
		$showFields[] = "symetexwn2_amm";
	}	
//	symetexwn2_klados
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn2_klados", $data, $keylink);
		$showValues["symetexwn2_klados"] = $value;
		$showFields[] = "symetexwn2_klados";
	}	
//	symetexwn2_wres
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn2_wres", $data, $keylink);
		$showValues["symetexwn2_wres"] = $value;
		$showFields[] = "symetexwn2_wres";
	}	
//	symetexwn2_again
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn2_again", $data, $keylink);
		$showValues["symetexwn2_again"] = $value;
		$showFields[] = "symetexwn2_again";
	}	
//	symetexwn2_epimorfosi
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn2_epimorfosi", $data, $keylink);
		$showValues["symetexwn2_epimorfosi"] = $value;
		$showFields[] = "symetexwn2_epimorfosi";
	}	
//	symetexwn3_name
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn3_name", $data, $keylink);
		$showValues["symetexwn3_name"] = $value;
		$showFields[] = "symetexwn3_name";
	}	
//	symetexwn3_amm
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn3_amm", $data, $keylink);
		$showValues["symetexwn3_amm"] = $value;
		$showFields[] = "symetexwn3_amm";
	}	
//	symetexwn3_klados
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn3_klados", $data, $keylink);
		$showValues["symetexwn3_klados"] = $value;
		$showFields[] = "symetexwn3_klados";
	}	
//	symetexwn3_wres
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn3_wres", $data, $keylink);
		$showValues["symetexwn3_wres"] = $value;
		$showFields[] = "symetexwn3_wres";
	}	
//	symetexwn3_again
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn3_again", $data, $keylink);
		$showValues["symetexwn3_again"] = $value;
		$showFields[] = "symetexwn3_again";
	}	
//	symetexwn3_epimorfosi
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("symetexwn3_epimorfosi", $data, $keylink);
		$showValues["symetexwn3_epimorfosi"] = $value;
		$showFields[] = "symetexwn3_epimorfosi";
	}	
//	mathites_synolo
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("mathites_synolo", $data, $keylink);
		$showValues["mathites_synolo"] = $value;
		$showFields[] = "mathites_synolo";
	}	
//	agoria
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("agoria", $data, $keylink);
		$showValues["agoria"] = $value;
		$showFields[] = "agoria";
	}	
//	koritsia
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("koritsia", $data, $keylink);
		$showValues["koritsia"] = $value;
		$showFields[] = "koritsia";
	}	
//	amiges
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("amiges", $data, $keylink);
		$showValues["amiges"] = $value;
		$showFields[] = "amiges";
	}	
//	meet_day
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("meet_day", $data, $keylink);
		$showValues["meet_day"] = $value;
		$showFields[] = "meet_day";
	}	
//	meet_hour
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("meet_hour", $data, $keylink);
		$showValues["meet_hour"] = $value;
		$showFields[] = "meet_hour";
	}	
//	meet_place
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("meet_place", $data, $keylink);
		$showValues["meet_place"] = $value;
		$showFields[] = "meet_place";
	}	
//	arxeio
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("arxeio", $data, $keylink);
		$showValues["arxeio"] = $value;
		$showFields[] = "arxeio";
	}	
//	ypothemata
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ypothemata", $data, $keylink);
		$showValues["ypothemata"] = $value;
		$showFields[] = "ypothemata";
	}	
//	stoxoi
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("stoxoi", $data, $keylink);
		$showValues["stoxoi"] = $value;
		$showFields[] = "stoxoi";
	}	
//	methodologia
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("methodologia", $data, $keylink);
		$showValues["methodologia"] = $value;
		$showFields[] = "methodologia";
	}	
//	syndeseis
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("syndeseis", $data, $keylink);
		$showValues["syndeseis"] = $value;
		$showFields[] = "syndeseis";
	}	
//	month1
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("month1", $data, $keylink);
		$showValues["month1"] = $value;
		$showFields[] = "month1";
	}	
//	month2
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("month2", $data, $keylink);
		$showValues["month2"] = $value;
		$showFields[] = "month2";
	}	
//	month3
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("month3", $data, $keylink);
		$showValues["month3"] = $value;
		$showFields[] = "month3";
	}	
//	month4
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("month4", $data, $keylink);
		$showValues["month4"] = $value;
		$showFields[] = "month4";
	}	
//	month5
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("month5", $data, $keylink);
		$showValues["month5"] = $value;
		$showFields[] = "month5";
	}	
//	episkepseis
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("episkepseis", $data, $keylink);
		$showValues["episkepseis"] = $value;
		$showFields[] = "episkepseis";
	}	
//	submission_date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("submission_date", $data, $keylink);
		$showValues["submission_date"] = $value;
		$showFields[] = "submission_date";
	}	
//	last_modified_date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("last_modified_date", $data, $keylink);
		$showValues["last_modified_date"] = $value;
		$showFields[] = "last_modified_date";
	}	
//	ip_address
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ip_address", $data, $keylink);
		$showValues["ip_address"] = $value;
		$showFields[] = "ip_address";
	}	
//	is_finalized
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("is_finalized", $data, $keylink);
		$showValues["is_finalized"] = $value;
		$showFields[] = "is_finalized";
	}	
//	sch_id
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("sch_id", $data, $keylink);
		$showValues["sch_id"] = $value;
		$showFields[] = "sch_id";
	}	
		$showRawValues["submission_id"] = substr($data["submission_id"],0,100);
		$showRawValues["programa"] = substr($data["programa"],0,100);
		$showRawValues["date"] = substr($data["date"],0,100);
		$showRawValues["ar_protocol"] = substr($data["ar_protocol"],0,100);
		$showRawValues["sxol_etos"] = substr($data["sxol_etos"],0,100);
		$showRawValues["dide_name"] = substr($data["dide_name"],0,100);
		$showRawValues["sch_name"] = substr($data["sch_name"],0,100);
		$showRawValues["tel_ergasias"] = substr($data["tel_ergasias"],0,100);
		$showRawValues["dimos"] = substr($data["dimos"],0,100);
		$showRawValues["fax"] = substr($data["fax"],0,100);
		$showRawValues["e_mail"] = substr($data["e_mail"],0,100);
		$showRawValues["sch_teachers"] = substr($data["sch_teachers"],0,100);
		$showRawValues["sch_students"] = substr($data["sch_students"],0,100);
		$showRawValues["dieythintis_name"] = substr($data["dieythintis_name"],0,100);
		$showRawValues["klados_dieythinti"] = substr($data["klados_dieythinti"],0,100);
		$showRawValues["program_title"] = substr($data["program_title"],0,100);
		$showRawValues["ar_praksis"] = substr($data["ar_praksis"],0,100);
		$showRawValues["date_praksis"] = substr($data["date_praksis"],0,100);
		$showRawValues["sch_orario"] = substr($data["sch_orario"],0,100);
		$showRawValues["ypeythinos_name"] = substr($data["ypeythinos_name"],0,100);
		$showRawValues["ypeythinos_amm"] = substr($data["ypeythinos_amm"],0,100);
		$showRawValues["ypeythinos_klados"] = substr($data["ypeythinos_klados"],0,100);
		$showRawValues["ypeythinos_wres"] = substr($data["ypeythinos_wres"],0,100);
		$showRawValues["ypeythinos_again"] = substr($data["ypeythinos_again"],0,100);
		$showRawValues["ypeythinos_epimorfosi"] = substr($data["ypeythinos_epimorfosi"],0,100);
		$showRawValues["symetexwn1_name"] = substr($data["symetexwn1_name"],0,100);
		$showRawValues["symetexwn1_amm"] = substr($data["symetexwn1_amm"],0,100);
		$showRawValues["symetexwn1_klados"] = substr($data["symetexwn1_klados"],0,100);
		$showRawValues["symetexwn1_wres"] = substr($data["symetexwn1_wres"],0,100);
		$showRawValues["symetexwn1_again"] = substr($data["symetexwn1_again"],0,100);
		$showRawValues["symetexwn1_epimorfosi"] = substr($data["symetexwn1_epimorfosi"],0,100);
		$showRawValues["symetexwn2_name"] = substr($data["symetexwn2_name"],0,100);
		$showRawValues["symetexwn2_amm"] = substr($data["symetexwn2_amm"],0,100);
		$showRawValues["symetexwn2_klados"] = substr($data["symetexwn2_klados"],0,100);
		$showRawValues["symetexwn2_wres"] = substr($data["symetexwn2_wres"],0,100);
		$showRawValues["symetexwn2_again"] = substr($data["symetexwn2_again"],0,100);
		$showRawValues["symetexwn2_epimorfosi"] = substr($data["symetexwn2_epimorfosi"],0,100);
		$showRawValues["symetexwn3_name"] = substr($data["symetexwn3_name"],0,100);
		$showRawValues["symetexwn3_amm"] = substr($data["symetexwn3_amm"],0,100);
		$showRawValues["symetexwn3_klados"] = substr($data["symetexwn3_klados"],0,100);
		$showRawValues["symetexwn3_wres"] = substr($data["symetexwn3_wres"],0,100);
		$showRawValues["symetexwn3_again"] = substr($data["symetexwn3_again"],0,100);
		$showRawValues["symetexwn3_epimorfosi"] = substr($data["symetexwn3_epimorfosi"],0,100);
		$showRawValues["mathites_synolo"] = substr($data["mathites_synolo"],0,100);
		$showRawValues["agoria"] = substr($data["agoria"],0,100);
		$showRawValues["koritsia"] = substr($data["koritsia"],0,100);
		$showRawValues["amiges"] = substr($data["amiges"],0,100);
		$showRawValues["meet_day"] = substr($data["meet_day"],0,100);
		$showRawValues["meet_hour"] = substr($data["meet_hour"],0,100);
		$showRawValues["meet_place"] = substr($data["meet_place"],0,100);
		$showRawValues["arxeio"] = substr($data["arxeio"],0,100);
		$showRawValues["ypothemata"] = substr($data["ypothemata"],0,100);
		$showRawValues["stoxoi"] = substr($data["stoxoi"],0,100);
		$showRawValues["methodologia"] = substr($data["methodologia"],0,100);
		$showRawValues["syndeseis"] = substr($data["syndeseis"],0,100);
		$showRawValues["month1"] = substr($data["month1"],0,100);
		$showRawValues["month2"] = substr($data["month2"],0,100);
		$showRawValues["month3"] = substr($data["month3"],0,100);
		$showRawValues["month4"] = substr($data["month4"],0,100);
		$showRawValues["month5"] = substr($data["month5"],0,100);
		$showRawValues["episkepseis"] = substr($data["episkepseis"],0,100);
		$showRawValues["submission_date"] = substr($data["submission_date"],0,100);
		$showRawValues["last_modified_date"] = substr($data["last_modified_date"],0,100);
		$showRawValues["ip_address"] = substr($data["ip_address"],0,100);
		$showRawValues["is_finalized"] = substr($data["is_finalized"],0,100);
		$showRawValues["sch_id"] = substr($data["sch_id"],0,100);
	
	// for custom expression for display field
	if ($dispFieldAlias)
	{
		$showValues[] = $data[$dispFieldAlias];	
		$showFields[] = $dispFieldAlias;
		$showRawValues[] = substr($data[$dispFieldAlias],0,100);
	}
	
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_POPUP)
	{	
		if($IsSaved && count($showValues))
		{
			$returnJSON['success'] = true;
			if($HaveData){
				$returnJSON['noKeys'] = false;
			}else{
				$returnJSON['noKeys'] = true;
			}
			
			$returnJSON['keys'] = $jsKeys;
			$returnJSON['keyFields'] = $keyFields;
			$returnJSON['vals'] = $showValues;
			$returnJSON['fields'] = $showFields;
			$returnJSON['rawVals'] = $showRawValues;
			$returnJSON['detKeys'] = $showDetailKeys;
			$returnJSON['userMess'] = $usermessage;
			$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			// add link and display value if list page is lookup with search
			if(array_key_exists('linkField', $linkAndDispVals))
			{
				$returnJSON['linkValue'] = $linkAndDispVals['linkField'];
				$returnJSON['displayValue'] = $linkAndDispVals['displayField'];
			}
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{ 
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$returnJSON['nonEditable'] = true;
			}
			
			if($inlineadd==ADD_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
				$returnJSON['hideCaptcha'] = true;
		}
		else
		{
			$returnJSON['success'] = false;
			$returnJSON['message'] = $message;
			if(!$pageObject->isCaptchaOk)
				$returnJSON['captcha'] = false;
		}
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
} 

/////////////////////////////////////////////////////////////
if($inlineadd==ADD_MASTER)
{
	$respJSON = array();
	if(($_POST["a"]=="added" && $IsSaved))
	{
		$respJSON['afterAddId'] = $afterAdd_id;
		$respJSON['success'] = true;
		$respJSON['fields'] = $showFields;
		$respJSON['vals'] = $showValues;
		if($onFly){
			if($HaveData)
				$respJSON['noKeys'] = false;
			else
				$respJSON['noKeys'] = true;
			$respJSON['keys'] = $jsKeys;
			$respJSON['keyFields'] = $keyFields;
			$respJSON['rawVals'] = $showRawValues;
			$respJSON['detKeys'] = $showDetailKeys;
			$respJSON['userMess'] = $usermessage;
			$respJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$respJSON['nonEditable'] = true;
			}
		}
		$respJSON['mKeys'] = array();
		for($i=0;$i<count($dpParams['ids']);$i++)
		{
			$data=0;
			if(count($keys))
			{
				$where=KeyWhere($keys);
							$strSQL = $gQuery->gSQLWhere($where);
				LogInfo($strSQL);
				$rs = db_query($strSQL,$conn);
				$data = $pageObject->cipherer->DecryptFetchedArray($rs);
			}
			if(!$data)
				$data=$avalues;
			
			$mKeyId = 1;
			foreach($mKeys[$dpParams['strTableNames'][$i]] as $mk)
			{
				if($data[$mk])
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = $data[$mk];
				else
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = '';
			}
		}
		if(isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$respJSON['hidecaptcha'] = true;
	}
	else{
			$respJSON['success'] = false;
			if(!$pageObject->isCaptchaOk)
				$respJSON['captcha'] = false;
			else
				$respJSON['error'] = $message;
			if($onFly)
				$respJSON['message'] = $message;
		}
	echo "<textarea>".htmlspecialchars(my_json_encode($respJSON))."</textarea>";
	exit();
}

/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////

//	validation stuff
$regex='';
$regexmessage='';
$regextype = '';
$control = array();

foreach($addFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"] = "xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_ADD;
		$control[$gfName]["params"]["field"] = $fName;
		$control[$gfName]["params"]["value"] = @$defvalues[$fName];
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		if($pageObject->pSet->isUseRTE($fName))
			$_SESSION[$strTableName."_".$fName."_rte"] = @$defvalues[$fName];
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	//if richEditor for field
	if($pageObject->pSet->isUseRTE($fName))
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="add";
		$controls["controls"]['mode'] = "add";
	}
	else
	{
		if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="inline_add";
			$controls["controls"]['mode'] = "inline_add";
		}
		else
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="add";
			$controls["controls"]['mode'] = "add";
		}
	}
	
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$defvalues[$fName];
	
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $addFields))
		$vals = array($fName => @$defvalues[$fName], $strCategoryControl => @$defvalues[$strCategoryControl]);
	else
		$vals = array($fName => @$defvalues[$fName]);
	
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
	{
		$controls["controls"]['preloadData'] = $preload;
		if(!@$defvalues[$fName] && count($preload["vals"])>0)
			$defvalues[$fName] = $preload["vals"][0];
	}
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')
		$pageObject->fillTimePickSettings($fName, @$defvalues[$fName]);
	
	if((($detailKeys && in_array($fName, $detailKeys)) || $fName == postvalue("category")) && array_key_exists($fName, $defvalues))
	{
		$value = $pageObject->showDBValue($fName, $defvalues);
		
		$xt->assign($gfName."_editcontrol", $value);
	}
}

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_POPUP) && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		include("classes/searchclause.php");
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
		$options["masterPageType"] = PAGE_ADD;
		$options["mainMasterPageType"] = PAGE_ADD;
		$options['masterTable'] = "ft_form_4";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
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
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk)
		{
			if($defvalues[$mk])
				$options['masterKeysReq'][$mkr++] = $defvalues[$mk];
			else
				$options['masterKeysReq'][$mkr++] = '';
		}
		$listPageObject = ListPage::createListPage($strTableName,$options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		$flyId = $listPageObject->recId+1;
		
		//set page events
		foreach($listPageObject->eventsObject->events as $event => $name)
			$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
		
		//add detail settings to master settings
		$listPageObject->addControlsJSAndCSS();
		$listPageObject->fillSetCntrlMaps();
		$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];

		$dControlsMap[$strTableName] = $listPageObject->controlsMap;
		$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
		
		foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
			$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
		}
		
		//Add detail's js files to master's files
		$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
		
		//Add detail's css files to master's files
		$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		
		$xtParams = array("method"=>'showPage', "params"=> false);
		$xtParams['object'] = $listPageObject;
		$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap;
	$strTableName = "ft_form_4";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineadd == ADD_SIMPLE)
{
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{ 
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody", $pageObject->body);
	$xt->assign("body",true);
}	

$xt->assign("style_block",true);

if($eventObj->exists("BeforeShowAdd"))
	$eventObj->BeforeShowAdd($xt, $templatefile, $pageObject);
	
if($inlineadd != ADD_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $id+1;	
	echo (my_json_encode($returnJSON)); 
}
elseif ($inlineadd == ADD_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($addFields as $fName)
	{
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");	
	}	
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);

function GetAddedDataLookupQuery($pageObject, $keys, $forLookup)
{
	global $conn, $strTableName, $strOriginalTableName;
	
	$LookupSQL = "";
	$linkfield = "";
	$dispfield = "";
	$noBlobReplace = false;
	$lookupFieldName = "";
	
	if($LookupSQL && $nLookupType != LT_QUERY)
		$LookupSQL.=" from ".AddTableWrappers($strOriginalTableName);
		
	$data = 0;
	$lookupIndexes = array("linkFieldIndex" => 0, "displayFieldIndex" => 0);
	if(count($keys))
	{
		$where = KeyWhere($keys);
		if($nLookupType == LT_QUERY){
			$LookupSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $where));
		}else 
			$LookupSQL.=" where ".$where;
		$lookupIndexes = GetLookupFieldsIndexes($lookupPSet, $lookupFieldName);
		LogInfo($LookupSQL);
		if($forLookup){
			$rs=db_query($LookupSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}else if($LookupSQL)
		{
			$rs = db_query($LookupSQL,$conn);
			$data = db_fetch_numarray($rs);
			$data[$lookupIndexes["linkFieldIndex"]] = $pageObject->cipherer->DecryptField($linkFieldName, $data[$lookupIndexes["linkFieldIndex"]]);
			if($nLookupType == LT_QUERY)
				$data[$lookupIndexes["displayFieldIndex"]] = $pageObject->cipherer->DecryptField($dispfield, $data[$lookupIndexes["displayFieldIndex"]]);		
		}
	}

	return array($data, array("linkField" => $linkFieldName, "displayField" => $dispfield
		, "linkFieldIndex" => $lookupIndexes["linkFieldIndex"], "displayFieldIndex" => $lookupIndexes["displayFieldIndex"]));
}	
	
?>
