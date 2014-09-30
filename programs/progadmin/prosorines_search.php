<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
add_nocache_headers();

include("include/prosorines_variables.php");
include("classes/searchcontrol.php");
include("classes/advancedsearchcontrol.php");
include("classes/panelsearchcontrol.php");
include("classes/searchclause.php");

$sessionPrefix = $strTableName;

//Basic includes js files
$includes="";
// predefined fields num
$predefFieldNum = 0;

$chrt_array=array();
$rpt_array=array();

//	check if logged in
if( (!isLogged() || CheckPermissionsEvent($strTableName, 'S') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") && !@$chrt_array['status'] && !@$rpt_array['status'])
|| (@$rpt_array['status'] == "private" && @$rpt_array['owner'] != @$_SESSION["UserID"])
|| (@$chrt_array['status'] == "private" && @$chrt_array['owner'] != @$_SESSION["UserID"]) )
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("search2","BoldOrange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["search"] = array();

$layout->containers["search"][] = array("name"=>"srchheader","block"=>"","substyle"=>2);


$layout->containers["search"][] = array("name"=>"srchconditions","block"=>"conditions_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"srchfields","block"=>"","substyle"=>1);


$layout->skins["fields"] = "fields";

$layout->containers["search"][] = array("name"=>"srchbuttons","block"=>"","substyle"=>2);


$layout->skins["search"] = "1";
$layout->blocks["top"][] = "search";$page_layouts["prosorines_search"] = $layout;


include('include/xtempl.php');
include('classes/runnerpage.php');
$xt = new Xtempl();

// id that used to add to controls names
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;
	
// for usual page show proccess
$mode = SEARCH_SIMPLE;
$templatefile = "prosorines_search.htm";

// for ajax query, used when page buffers new control
if(postvalue("mode")=="inlineLoadCtrl"){
	$mode = SEARCH_LOAD_CONTROL;
}	

$timepicker = false;

$params = array();
$params["id"] = $id;
$params["mode"] = $mode;
$params["timepicker"] = $timepicker;
$params['xt'] = &$xt;
$params['templatefile'] = $templatefile;
$params['shortTableName'] = 'prosorines';
$params['origTName'] = $strOriginalTableName;
$params['sessionPrefix'] = $sessionPrefix;
$params['tName'] = $strTableName;
$params['includes_js'] = $includes_js;
$params['includes_jsreq'] = $includes_jsreq;
$params['includes_css'] = $includes_css;
$params['locale_info'] = $locale_info;
$params['pageType'] = PAGE_SEARCH;

$pageObject = new RunnerPage($params);

// create reusable searchControl builder instance
$searchControllerId = (postvalue('searchControllerId') ? postvalue('searchControllerId') : $pageObject->id);

//	Before Process event
if($eventObj->exists("BeforeProcessSearch"))
	$eventObj->BeforeProcessSearch($conn, $pageObject);

// add constants and files for simple view
if ($mode==SEARCH_SIMPLE)
{
	$searchControlBuilder = new AdvancedSearchControl($searchControllerId, $strTableName, $pageObject->searchClauseObj, $pageObject);

	// add button events if exist
	$pageObject->addButtonHandlers();

	$includes .="<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
	//$includes.="<script language=\"JavaScript\" src=\"include/customlabels.js\"></script>\r\n";
		$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";	

	// if not simple, this div already exist on page
	if (!isMobile())
		$includes.="<div id=\"search_suggest\" class=\"search_suggest\"></div>";

	// search panel radio button assign
	$searchRadio = $searchControlBuilder->getSearchRadio();
	$xt->assign_section("all_checkbox_label", $searchRadio['all_checkbox_label'][0], $searchRadio['all_checkbox_label'][1]);
	$xt->assign_section("any_checkbox_label", $searchRadio['any_checkbox_label'][0], $searchRadio['any_checkbox_label'][1]);
	$xt->assignbyref("all_checkbox",$searchRadio['all_checkbox']);
	$xt->assignbyref("any_checkbox",$searchRadio['any_checkbox']);
	
	// search fields data
	
	if($pageObject->pSet->getLookupTable("submission_id"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("submission_id")] = GetTableURL($pageObject->pSet->getLookupTable("submission_id"));
	
	$pageObject->fillFieldToolTips("submission_id");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("submission_id");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "submission_id";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("submission_id_label","<label for=\"".GetInputElementId("submission_id", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("submission_id_label", true);
	
	$xt->assign("submission_id_fieldblock", true);
	$xt->assignbyref("submission_id_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("submission_id_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("submission_id_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_submission_id", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("submission_id");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"submission_id", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"submission_id", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("programa"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("programa")] = GetTableURL($pageObject->pSet->getLookupTable("programa"));
	
	$pageObject->fillFieldToolTips("programa");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("programa");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "programa";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("programa_label","<label for=\"".GetInputElementId("programa", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("programa_label", true);
	
	$xt->assign("programa_fieldblock", true);
	$xt->assignbyref("programa_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("programa_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("programa_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_programa", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("programa");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"programa", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"programa", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("date"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("date")] = GetTableURL($pageObject->pSet->getLookupTable("date"));
	
	$pageObject->fillFieldToolTips("date");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("date");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "date";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("date_label","<label for=\"".GetInputElementId("date", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("date_label", true);
	
	$xt->assign("date_fieldblock", true);
	$xt->assignbyref("date_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("date_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("date_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_date", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("date");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"date", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"date", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("ar_protocol"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("ar_protocol")] = GetTableURL($pageObject->pSet->getLookupTable("ar_protocol"));
	
	$pageObject->fillFieldToolTips("ar_protocol");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("ar_protocol");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "ar_protocol";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("ar_protocol_label","<label for=\"".GetInputElementId("ar_protocol", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("ar_protocol_label", true);
	
	$xt->assign("ar_protocol_fieldblock", true);
	$xt->assignbyref("ar_protocol_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("ar_protocol_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("ar_protocol_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_ar_protocol", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("ar_protocol");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ar_protocol", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ar_protocol", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("sxol_etos"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("sxol_etos")] = GetTableURL($pageObject->pSet->getLookupTable("sxol_etos"));
	
	$pageObject->fillFieldToolTips("sxol_etos");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("sxol_etos");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "sxol_etos";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("sxol_etos_label","<label for=\"".GetInputElementId("sxol_etos", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("sxol_etos_label", true);
	
	$xt->assign("sxol_etos_fieldblock", true);
	$xt->assignbyref("sxol_etos_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("sxol_etos_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("sxol_etos_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_sxol_etos", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("sxol_etos");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sxol_etos", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sxol_etos", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("dide_name"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("dide_name")] = GetTableURL($pageObject->pSet->getLookupTable("dide_name"));
	
	$pageObject->fillFieldToolTips("dide_name");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("dide_name");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "dide_name";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("dide_name_label","<label for=\"".GetInputElementId("dide_name", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("dide_name_label", true);
	
	$xt->assign("dide_name_fieldblock", true);
	$xt->assignbyref("dide_name_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("dide_name_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("dide_name_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_dide_name", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("dide_name");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"dide_name", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"dide_name", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("sch_name"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("sch_name")] = GetTableURL($pageObject->pSet->getLookupTable("sch_name"));
	
	$pageObject->fillFieldToolTips("sch_name");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("sch_name");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "sch_name";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("sch_name_label","<label for=\"".GetInputElementId("sch_name", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("sch_name_label", true);
	
	$xt->assign("sch_name_fieldblock", true);
	$xt->assignbyref("sch_name_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("sch_name_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("sch_name_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_sch_name", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("sch_name");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sch_name", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sch_name", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("tel_ergasias"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("tel_ergasias")] = GetTableURL($pageObject->pSet->getLookupTable("tel_ergasias"));
	
	$pageObject->fillFieldToolTips("tel_ergasias");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("tel_ergasias");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "tel_ergasias";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("tel_ergasias_label","<label for=\"".GetInputElementId("tel_ergasias", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("tel_ergasias_label", true);
	
	$xt->assign("tel_ergasias_fieldblock", true);
	$xt->assignbyref("tel_ergasias_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("tel_ergasias_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("tel_ergasias_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_tel_ergasias", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("tel_ergasias");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"tel_ergasias", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"tel_ergasias", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("dimos"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("dimos")] = GetTableURL($pageObject->pSet->getLookupTable("dimos"));
	
	$pageObject->fillFieldToolTips("dimos");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("dimos");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "dimos";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("dimos_label","<label for=\"".GetInputElementId("dimos", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("dimos_label", true);
	
	$xt->assign("dimos_fieldblock", true);
	$xt->assignbyref("dimos_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("dimos_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("dimos_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_dimos", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("dimos");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"dimos", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"dimos", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("fax"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("fax")] = GetTableURL($pageObject->pSet->getLookupTable("fax"));
	
	$pageObject->fillFieldToolTips("fax");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("fax");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "fax";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("fax_label","<label for=\"".GetInputElementId("fax", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("fax_label", true);
	
	$xt->assign("fax_fieldblock", true);
	$xt->assignbyref("fax_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("fax_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("fax_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_fax", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("fax");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"fax", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"fax", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("e_mail"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("e_mail")] = GetTableURL($pageObject->pSet->getLookupTable("e_mail"));
	
	$pageObject->fillFieldToolTips("e_mail");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("e_mail");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "e_mail";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("e_mail_label","<label for=\"".GetInputElementId("e_mail", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("e_mail_label", true);
	
	$xt->assign("e_mail_fieldblock", true);
	$xt->assignbyref("e_mail_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("e_mail_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("e_mail_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_e_mail", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("e_mail");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"e_mail", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"e_mail", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("sch_teachers"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("sch_teachers")] = GetTableURL($pageObject->pSet->getLookupTable("sch_teachers"));
	
	$pageObject->fillFieldToolTips("sch_teachers");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("sch_teachers");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "sch_teachers";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("sch_teachers_label","<label for=\"".GetInputElementId("sch_teachers", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("sch_teachers_label", true);
	
	$xt->assign("sch_teachers_fieldblock", true);
	$xt->assignbyref("sch_teachers_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("sch_teachers_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("sch_teachers_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_sch_teachers", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("sch_teachers");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sch_teachers", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sch_teachers", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("sch_students"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("sch_students")] = GetTableURL($pageObject->pSet->getLookupTable("sch_students"));
	
	$pageObject->fillFieldToolTips("sch_students");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("sch_students");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "sch_students";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("sch_students_label","<label for=\"".GetInputElementId("sch_students", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("sch_students_label", true);
	
	$xt->assign("sch_students_fieldblock", true);
	$xt->assignbyref("sch_students_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("sch_students_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("sch_students_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_sch_students", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("sch_students");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sch_students", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sch_students", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("dieythintis_name"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("dieythintis_name")] = GetTableURL($pageObject->pSet->getLookupTable("dieythintis_name"));
	
	$pageObject->fillFieldToolTips("dieythintis_name");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("dieythintis_name");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "dieythintis_name";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("dieythintis_name_label","<label for=\"".GetInputElementId("dieythintis_name", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("dieythintis_name_label", true);
	
	$xt->assign("dieythintis_name_fieldblock", true);
	$xt->assignbyref("dieythintis_name_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("dieythintis_name_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("dieythintis_name_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_dieythintis_name", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("dieythintis_name");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"dieythintis_name", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"dieythintis_name", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("klados_dieythinti"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("klados_dieythinti")] = GetTableURL($pageObject->pSet->getLookupTable("klados_dieythinti"));
	
	$pageObject->fillFieldToolTips("klados_dieythinti");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("klados_dieythinti");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "klados_dieythinti";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("klados_dieythinti_label","<label for=\"".GetInputElementId("klados_dieythinti", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("klados_dieythinti_label", true);
	
	$xt->assign("klados_dieythinti_fieldblock", true);
	$xt->assignbyref("klados_dieythinti_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("klados_dieythinti_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("klados_dieythinti_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_klados_dieythinti", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("klados_dieythinti");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"klados_dieythinti", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"klados_dieythinti", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("program_title"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("program_title")] = GetTableURL($pageObject->pSet->getLookupTable("program_title"));
	
	$pageObject->fillFieldToolTips("program_title");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("program_title");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "program_title";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("program_title_label","<label for=\"".GetInputElementId("program_title", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("program_title_label", true);
	
	$xt->assign("program_title_fieldblock", true);
	$xt->assignbyref("program_title_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("program_title_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("program_title_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_program_title", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("program_title");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"program_title", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"program_title", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("ar_praksis"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("ar_praksis")] = GetTableURL($pageObject->pSet->getLookupTable("ar_praksis"));
	
	$pageObject->fillFieldToolTips("ar_praksis");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("ar_praksis");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "ar_praksis";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("ar_praksis_label","<label for=\"".GetInputElementId("ar_praksis", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("ar_praksis_label", true);
	
	$xt->assign("ar_praksis_fieldblock", true);
	$xt->assignbyref("ar_praksis_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("ar_praksis_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("ar_praksis_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_ar_praksis", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("ar_praksis");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ar_praksis", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ar_praksis", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("date_praksis"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("date_praksis")] = GetTableURL($pageObject->pSet->getLookupTable("date_praksis"));
	
	$pageObject->fillFieldToolTips("date_praksis");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("date_praksis");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "date_praksis";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("date_praksis_label","<label for=\"".GetInputElementId("date_praksis", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("date_praksis_label", true);
	
	$xt->assign("date_praksis_fieldblock", true);
	$xt->assignbyref("date_praksis_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("date_praksis_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("date_praksis_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_date_praksis", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("date_praksis");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"date_praksis", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"date_praksis", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("sch_orario"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("sch_orario")] = GetTableURL($pageObject->pSet->getLookupTable("sch_orario"));
	
	$pageObject->fillFieldToolTips("sch_orario");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("sch_orario");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "sch_orario";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("sch_orario_label","<label for=\"".GetInputElementId("sch_orario", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("sch_orario_label", true);
	
	$xt->assign("sch_orario_fieldblock", true);
	$xt->assignbyref("sch_orario_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("sch_orario_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("sch_orario_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_sch_orario", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("sch_orario");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sch_orario", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sch_orario", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("ypeythinos_name"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("ypeythinos_name")] = GetTableURL($pageObject->pSet->getLookupTable("ypeythinos_name"));
	
	$pageObject->fillFieldToolTips("ypeythinos_name");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("ypeythinos_name");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "ypeythinos_name";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_name_label","<label for=\"".GetInputElementId("ypeythinos_name", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("ypeythinos_name_label", true);
	
	$xt->assign("ypeythinos_name_fieldblock", true);
	$xt->assignbyref("ypeythinos_name_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("ypeythinos_name_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("ypeythinos_name_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_ypeythinos_name", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("ypeythinos_name");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ypeythinos_name", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ypeythinos_name", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("ypeythinos_amm"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("ypeythinos_amm")] = GetTableURL($pageObject->pSet->getLookupTable("ypeythinos_amm"));
	
	$pageObject->fillFieldToolTips("ypeythinos_amm");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("ypeythinos_amm");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "ypeythinos_amm";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_amm_label","<label for=\"".GetInputElementId("ypeythinos_amm", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("ypeythinos_amm_label", true);
	
	$xt->assign("ypeythinos_amm_fieldblock", true);
	$xt->assignbyref("ypeythinos_amm_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("ypeythinos_amm_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("ypeythinos_amm_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_ypeythinos_amm", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("ypeythinos_amm");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ypeythinos_amm", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ypeythinos_amm", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("ypeythinos_klados"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("ypeythinos_klados")] = GetTableURL($pageObject->pSet->getLookupTable("ypeythinos_klados"));
	
	$pageObject->fillFieldToolTips("ypeythinos_klados");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("ypeythinos_klados");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "ypeythinos_klados";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_klados_label","<label for=\"".GetInputElementId("ypeythinos_klados", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("ypeythinos_klados_label", true);
	
	$xt->assign("ypeythinos_klados_fieldblock", true);
	$xt->assignbyref("ypeythinos_klados_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("ypeythinos_klados_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("ypeythinos_klados_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_ypeythinos_klados", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("ypeythinos_klados");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ypeythinos_klados", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ypeythinos_klados", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("ypeythinos_wres"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("ypeythinos_wres")] = GetTableURL($pageObject->pSet->getLookupTable("ypeythinos_wres"));
	
	$pageObject->fillFieldToolTips("ypeythinos_wres");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("ypeythinos_wres");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "ypeythinos_wres";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_wres_label","<label for=\"".GetInputElementId("ypeythinos_wres", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("ypeythinos_wres_label", true);
	
	$xt->assign("ypeythinos_wres_fieldblock", true);
	$xt->assignbyref("ypeythinos_wres_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("ypeythinos_wres_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("ypeythinos_wres_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_ypeythinos_wres", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("ypeythinos_wres");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ypeythinos_wres", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ypeythinos_wres", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("ypeythinos_again"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("ypeythinos_again")] = GetTableURL($pageObject->pSet->getLookupTable("ypeythinos_again"));
	
	$pageObject->fillFieldToolTips("ypeythinos_again");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("ypeythinos_again");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "ypeythinos_again";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_again_label","<label for=\"".GetInputElementId("ypeythinos_again", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("ypeythinos_again_label", true);
	
	$xt->assign("ypeythinos_again_fieldblock", true);
	$xt->assignbyref("ypeythinos_again_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("ypeythinos_again_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("ypeythinos_again_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_ypeythinos_again", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("ypeythinos_again");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ypeythinos_again", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ypeythinos_again", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("ypeythinos_epimorfosi"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("ypeythinos_epimorfosi")] = GetTableURL($pageObject->pSet->getLookupTable("ypeythinos_epimorfosi"));
	
	$pageObject->fillFieldToolTips("ypeythinos_epimorfosi");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("ypeythinos_epimorfosi");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "ypeythinos_epimorfosi";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("ypeythinos_epimorfosi_label","<label for=\"".GetInputElementId("ypeythinos_epimorfosi", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("ypeythinos_epimorfosi_label", true);
	
	$xt->assign("ypeythinos_epimorfosi_fieldblock", true);
	$xt->assignbyref("ypeythinos_epimorfosi_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("ypeythinos_epimorfosi_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("ypeythinos_epimorfosi_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_ypeythinos_epimorfosi", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("ypeythinos_epimorfosi");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ypeythinos_epimorfosi", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ypeythinos_epimorfosi", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn1_name"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn1_name")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn1_name"));
	
	$pageObject->fillFieldToolTips("symetexwn1_name");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn1_name");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn1_name";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_name_label","<label for=\"".GetInputElementId("symetexwn1_name", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn1_name_label", true);
	
	$xt->assign("symetexwn1_name_fieldblock", true);
	$xt->assignbyref("symetexwn1_name_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn1_name_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn1_name_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn1_name", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn1_name");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn1_name", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn1_name", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn1_amm"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn1_amm")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn1_amm"));
	
	$pageObject->fillFieldToolTips("symetexwn1_amm");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn1_amm");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn1_amm";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_amm_label","<label for=\"".GetInputElementId("symetexwn1_amm", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn1_amm_label", true);
	
	$xt->assign("symetexwn1_amm_fieldblock", true);
	$xt->assignbyref("symetexwn1_amm_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn1_amm_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn1_amm_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn1_amm", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn1_amm");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn1_amm", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn1_amm", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn1_klados"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn1_klados")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn1_klados"));
	
	$pageObject->fillFieldToolTips("symetexwn1_klados");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn1_klados");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn1_klados";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_klados_label","<label for=\"".GetInputElementId("symetexwn1_klados", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn1_klados_label", true);
	
	$xt->assign("symetexwn1_klados_fieldblock", true);
	$xt->assignbyref("symetexwn1_klados_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn1_klados_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn1_klados_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn1_klados", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn1_klados");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn1_klados", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn1_klados", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn1_wres"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn1_wres")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn1_wres"));
	
	$pageObject->fillFieldToolTips("symetexwn1_wres");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn1_wres");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn1_wres";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_wres_label","<label for=\"".GetInputElementId("symetexwn1_wres", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn1_wres_label", true);
	
	$xt->assign("symetexwn1_wres_fieldblock", true);
	$xt->assignbyref("symetexwn1_wres_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn1_wres_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn1_wres_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn1_wres", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn1_wres");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn1_wres", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn1_wres", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn1_again"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn1_again")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn1_again"));
	
	$pageObject->fillFieldToolTips("symetexwn1_again");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn1_again");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn1_again";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_again_label","<label for=\"".GetInputElementId("symetexwn1_again", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn1_again_label", true);
	
	$xt->assign("symetexwn1_again_fieldblock", true);
	$xt->assignbyref("symetexwn1_again_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn1_again_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn1_again_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn1_again", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn1_again");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn1_again", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn1_again", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn1_epimorfosi"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn1_epimorfosi")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn1_epimorfosi"));
	
	$pageObject->fillFieldToolTips("symetexwn1_epimorfosi");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn1_epimorfosi");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn1_epimorfosi";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn1_epimorfosi_label","<label for=\"".GetInputElementId("symetexwn1_epimorfosi", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn1_epimorfosi_label", true);
	
	$xt->assign("symetexwn1_epimorfosi_fieldblock", true);
	$xt->assignbyref("symetexwn1_epimorfosi_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn1_epimorfosi_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn1_epimorfosi_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn1_epimorfosi", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn1_epimorfosi");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn1_epimorfosi", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn1_epimorfosi", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn2_name"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn2_name")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn2_name"));
	
	$pageObject->fillFieldToolTips("symetexwn2_name");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn2_name");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn2_name";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_name_label","<label for=\"".GetInputElementId("symetexwn2_name", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn2_name_label", true);
	
	$xt->assign("symetexwn2_name_fieldblock", true);
	$xt->assignbyref("symetexwn2_name_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn2_name_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn2_name_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn2_name", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn2_name");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn2_name", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn2_name", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn2_amm"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn2_amm")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn2_amm"));
	
	$pageObject->fillFieldToolTips("symetexwn2_amm");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn2_amm");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn2_amm";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_amm_label","<label for=\"".GetInputElementId("symetexwn2_amm", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn2_amm_label", true);
	
	$xt->assign("symetexwn2_amm_fieldblock", true);
	$xt->assignbyref("symetexwn2_amm_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn2_amm_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn2_amm_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn2_amm", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn2_amm");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn2_amm", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn2_amm", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn2_klados"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn2_klados")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn2_klados"));
	
	$pageObject->fillFieldToolTips("symetexwn2_klados");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn2_klados");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn2_klados";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_klados_label","<label for=\"".GetInputElementId("symetexwn2_klados", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn2_klados_label", true);
	
	$xt->assign("symetexwn2_klados_fieldblock", true);
	$xt->assignbyref("symetexwn2_klados_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn2_klados_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn2_klados_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn2_klados", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn2_klados");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn2_klados", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn2_klados", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn2_wres"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn2_wres")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn2_wres"));
	
	$pageObject->fillFieldToolTips("symetexwn2_wres");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn2_wres");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn2_wres";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_wres_label","<label for=\"".GetInputElementId("symetexwn2_wres", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn2_wres_label", true);
	
	$xt->assign("symetexwn2_wres_fieldblock", true);
	$xt->assignbyref("symetexwn2_wres_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn2_wres_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn2_wres_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn2_wres", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn2_wres");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn2_wres", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn2_wres", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn2_again"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn2_again")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn2_again"));
	
	$pageObject->fillFieldToolTips("symetexwn2_again");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn2_again");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn2_again";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_again_label","<label for=\"".GetInputElementId("symetexwn2_again", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn2_again_label", true);
	
	$xt->assign("symetexwn2_again_fieldblock", true);
	$xt->assignbyref("symetexwn2_again_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn2_again_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn2_again_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn2_again", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn2_again");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn2_again", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn2_again", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn2_epimorfosi"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn2_epimorfosi")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn2_epimorfosi"));
	
	$pageObject->fillFieldToolTips("symetexwn2_epimorfosi");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn2_epimorfosi");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn2_epimorfosi";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn2_epimorfosi_label","<label for=\"".GetInputElementId("symetexwn2_epimorfosi", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn2_epimorfosi_label", true);
	
	$xt->assign("symetexwn2_epimorfosi_fieldblock", true);
	$xt->assignbyref("symetexwn2_epimorfosi_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn2_epimorfosi_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn2_epimorfosi_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn2_epimorfosi", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn2_epimorfosi");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn2_epimorfosi", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn2_epimorfosi", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn3_name"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn3_name")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn3_name"));
	
	$pageObject->fillFieldToolTips("symetexwn3_name");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn3_name");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn3_name";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_name_label","<label for=\"".GetInputElementId("symetexwn3_name", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn3_name_label", true);
	
	$xt->assign("symetexwn3_name_fieldblock", true);
	$xt->assignbyref("symetexwn3_name_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn3_name_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn3_name_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn3_name", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn3_name");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn3_name", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn3_name", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn3_amm"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn3_amm")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn3_amm"));
	
	$pageObject->fillFieldToolTips("symetexwn3_amm");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn3_amm");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn3_amm";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_amm_label","<label for=\"".GetInputElementId("symetexwn3_amm", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn3_amm_label", true);
	
	$xt->assign("symetexwn3_amm_fieldblock", true);
	$xt->assignbyref("symetexwn3_amm_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn3_amm_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn3_amm_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn3_amm", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn3_amm");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn3_amm", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn3_amm", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn3_klados"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn3_klados")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn3_klados"));
	
	$pageObject->fillFieldToolTips("symetexwn3_klados");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn3_klados");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn3_klados";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_klados_label","<label for=\"".GetInputElementId("symetexwn3_klados", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn3_klados_label", true);
	
	$xt->assign("symetexwn3_klados_fieldblock", true);
	$xt->assignbyref("symetexwn3_klados_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn3_klados_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn3_klados_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn3_klados", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn3_klados");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn3_klados", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn3_klados", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn3_wres"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn3_wres")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn3_wres"));
	
	$pageObject->fillFieldToolTips("symetexwn3_wres");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn3_wres");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn3_wres";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_wres_label","<label for=\"".GetInputElementId("symetexwn3_wres", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn3_wres_label", true);
	
	$xt->assign("symetexwn3_wres_fieldblock", true);
	$xt->assignbyref("symetexwn3_wres_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn3_wres_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn3_wres_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn3_wres", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn3_wres");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn3_wres", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn3_wres", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn3_again"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn3_again")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn3_again"));
	
	$pageObject->fillFieldToolTips("symetexwn3_again");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn3_again");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn3_again";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_again_label","<label for=\"".GetInputElementId("symetexwn3_again", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn3_again_label", true);
	
	$xt->assign("symetexwn3_again_fieldblock", true);
	$xt->assignbyref("symetexwn3_again_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn3_again_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn3_again_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn3_again", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn3_again");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn3_again", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn3_again", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("symetexwn3_epimorfosi"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("symetexwn3_epimorfosi")] = GetTableURL($pageObject->pSet->getLookupTable("symetexwn3_epimorfosi"));
	
	$pageObject->fillFieldToolTips("symetexwn3_epimorfosi");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("symetexwn3_epimorfosi");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "symetexwn3_epimorfosi";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("symetexwn3_epimorfosi_label","<label for=\"".GetInputElementId("symetexwn3_epimorfosi", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("symetexwn3_epimorfosi_label", true);
	
	$xt->assign("symetexwn3_epimorfosi_fieldblock", true);
	$xt->assignbyref("symetexwn3_epimorfosi_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("symetexwn3_epimorfosi_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("symetexwn3_epimorfosi_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_symetexwn3_epimorfosi", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("symetexwn3_epimorfosi");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn3_epimorfosi", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"symetexwn3_epimorfosi", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("mathites_synolo"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("mathites_synolo")] = GetTableURL($pageObject->pSet->getLookupTable("mathites_synolo"));
	
	$pageObject->fillFieldToolTips("mathites_synolo");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("mathites_synolo");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "mathites_synolo";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("mathites_synolo_label","<label for=\"".GetInputElementId("mathites_synolo", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("mathites_synolo_label", true);
	
	$xt->assign("mathites_synolo_fieldblock", true);
	$xt->assignbyref("mathites_synolo_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("mathites_synolo_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("mathites_synolo_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_mathites_synolo", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("mathites_synolo");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"mathites_synolo", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"mathites_synolo", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("agoria"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("agoria")] = GetTableURL($pageObject->pSet->getLookupTable("agoria"));
	
	$pageObject->fillFieldToolTips("agoria");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("agoria");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "agoria";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("agoria_label","<label for=\"".GetInputElementId("agoria", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("agoria_label", true);
	
	$xt->assign("agoria_fieldblock", true);
	$xt->assignbyref("agoria_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("agoria_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("agoria_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_agoria", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("agoria");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"agoria", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"agoria", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("koritsia"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("koritsia")] = GetTableURL($pageObject->pSet->getLookupTable("koritsia"));
	
	$pageObject->fillFieldToolTips("koritsia");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("koritsia");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "koritsia";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("koritsia_label","<label for=\"".GetInputElementId("koritsia", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("koritsia_label", true);
	
	$xt->assign("koritsia_fieldblock", true);
	$xt->assignbyref("koritsia_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("koritsia_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("koritsia_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_koritsia", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("koritsia");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"koritsia", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"koritsia", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("amiges"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("amiges")] = GetTableURL($pageObject->pSet->getLookupTable("amiges"));
	
	$pageObject->fillFieldToolTips("amiges");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("amiges");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "amiges";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("amiges_label","<label for=\"".GetInputElementId("amiges", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("amiges_label", true);
	
	$xt->assign("amiges_fieldblock", true);
	$xt->assignbyref("amiges_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("amiges_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("amiges_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_amiges", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("amiges");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"amiges", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"amiges", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("meet_day"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("meet_day")] = GetTableURL($pageObject->pSet->getLookupTable("meet_day"));
	
	$pageObject->fillFieldToolTips("meet_day");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("meet_day");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "meet_day";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("meet_day_label","<label for=\"".GetInputElementId("meet_day", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("meet_day_label", true);
	
	$xt->assign("meet_day_fieldblock", true);
	$xt->assignbyref("meet_day_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("meet_day_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("meet_day_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_meet_day", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("meet_day");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"meet_day", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"meet_day", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("meet_hour"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("meet_hour")] = GetTableURL($pageObject->pSet->getLookupTable("meet_hour"));
	
	$pageObject->fillFieldToolTips("meet_hour");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("meet_hour");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "meet_hour";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("meet_hour_label","<label for=\"".GetInputElementId("meet_hour", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("meet_hour_label", true);
	
	$xt->assign("meet_hour_fieldblock", true);
	$xt->assignbyref("meet_hour_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("meet_hour_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("meet_hour_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_meet_hour", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("meet_hour");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"meet_hour", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"meet_hour", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("meet_place"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("meet_place")] = GetTableURL($pageObject->pSet->getLookupTable("meet_place"));
	
	$pageObject->fillFieldToolTips("meet_place");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("meet_place");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "meet_place";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("meet_place_label","<label for=\"".GetInputElementId("meet_place", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("meet_place_label", true);
	
	$xt->assign("meet_place_fieldblock", true);
	$xt->assignbyref("meet_place_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("meet_place_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("meet_place_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_meet_place", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("meet_place");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"meet_place", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"meet_place", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("arxeio"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("arxeio")] = GetTableURL($pageObject->pSet->getLookupTable("arxeio"));
	
	$pageObject->fillFieldToolTips("arxeio");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("arxeio");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "arxeio";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("arxeio_label","<label for=\"".GetInputElementId("arxeio", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("arxeio_label", true);
	
	$xt->assign("arxeio_fieldblock", true);
	$xt->assignbyref("arxeio_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("arxeio_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("arxeio_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_arxeio", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("arxeio");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"arxeio", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"arxeio", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("ypothemata"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("ypothemata")] = GetTableURL($pageObject->pSet->getLookupTable("ypothemata"));
	
	$pageObject->fillFieldToolTips("ypothemata");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("ypothemata");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "ypothemata";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("ypothemata_label","<label for=\"".GetInputElementId("ypothemata", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("ypothemata_label", true);
	
	$xt->assign("ypothemata_fieldblock", true);
	$xt->assignbyref("ypothemata_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("ypothemata_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("ypothemata_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_ypothemata", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("ypothemata");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ypothemata", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ypothemata", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("stoxoi"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("stoxoi")] = GetTableURL($pageObject->pSet->getLookupTable("stoxoi"));
	
	$pageObject->fillFieldToolTips("stoxoi");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("stoxoi");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "stoxoi";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("stoxoi_label","<label for=\"".GetInputElementId("stoxoi", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("stoxoi_label", true);
	
	$xt->assign("stoxoi_fieldblock", true);
	$xt->assignbyref("stoxoi_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("stoxoi_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("stoxoi_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_stoxoi", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("stoxoi");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"stoxoi", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"stoxoi", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("methodologia"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("methodologia")] = GetTableURL($pageObject->pSet->getLookupTable("methodologia"));
	
	$pageObject->fillFieldToolTips("methodologia");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("methodologia");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "methodologia";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("methodologia_label","<label for=\"".GetInputElementId("methodologia", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("methodologia_label", true);
	
	$xt->assign("methodologia_fieldblock", true);
	$xt->assignbyref("methodologia_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("methodologia_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("methodologia_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_methodologia", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("methodologia");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"methodologia", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"methodologia", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("syndeseis"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("syndeseis")] = GetTableURL($pageObject->pSet->getLookupTable("syndeseis"));
	
	$pageObject->fillFieldToolTips("syndeseis");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("syndeseis");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "syndeseis";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("syndeseis_label","<label for=\"".GetInputElementId("syndeseis", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("syndeseis_label", true);
	
	$xt->assign("syndeseis_fieldblock", true);
	$xt->assignbyref("syndeseis_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("syndeseis_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("syndeseis_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_syndeseis", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("syndeseis");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"syndeseis", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"syndeseis", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("month1"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("month1")] = GetTableURL($pageObject->pSet->getLookupTable("month1"));
	
	$pageObject->fillFieldToolTips("month1");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("month1");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "month1";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("month1_label","<label for=\"".GetInputElementId("month1", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("month1_label", true);
	
	$xt->assign("month1_fieldblock", true);
	$xt->assignbyref("month1_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("month1_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("month1_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_month1", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("month1");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"month1", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"month1", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("month2"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("month2")] = GetTableURL($pageObject->pSet->getLookupTable("month2"));
	
	$pageObject->fillFieldToolTips("month2");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("month2");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "month2";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("month2_label","<label for=\"".GetInputElementId("month2", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("month2_label", true);
	
	$xt->assign("month2_fieldblock", true);
	$xt->assignbyref("month2_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("month2_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("month2_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_month2", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("month2");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"month2", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"month2", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("month3"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("month3")] = GetTableURL($pageObject->pSet->getLookupTable("month3"));
	
	$pageObject->fillFieldToolTips("month3");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("month3");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "month3";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("month3_label","<label for=\"".GetInputElementId("month3", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("month3_label", true);
	
	$xt->assign("month3_fieldblock", true);
	$xt->assignbyref("month3_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("month3_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("month3_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_month3", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("month3");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"month3", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"month3", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("month4"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("month4")] = GetTableURL($pageObject->pSet->getLookupTable("month4"));
	
	$pageObject->fillFieldToolTips("month4");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("month4");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "month4";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("month4_label","<label for=\"".GetInputElementId("month4", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("month4_label", true);
	
	$xt->assign("month4_fieldblock", true);
	$xt->assignbyref("month4_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("month4_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("month4_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_month4", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("month4");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"month4", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"month4", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("month5"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("month5")] = GetTableURL($pageObject->pSet->getLookupTable("month5"));
	
	$pageObject->fillFieldToolTips("month5");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("month5");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "month5";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("month5_label","<label for=\"".GetInputElementId("month5", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("month5_label", true);
	
	$xt->assign("month5_fieldblock", true);
	$xt->assignbyref("month5_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("month5_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("month5_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_month5", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("month5");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"month5", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"month5", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("episkepseis"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("episkepseis")] = GetTableURL($pageObject->pSet->getLookupTable("episkepseis"));
	
	$pageObject->fillFieldToolTips("episkepseis");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("episkepseis");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "episkepseis";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("episkepseis_label","<label for=\"".GetInputElementId("episkepseis", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("episkepseis_label", true);
	
	$xt->assign("episkepseis_fieldblock", true);
	$xt->assignbyref("episkepseis_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("episkepseis_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("episkepseis_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_episkepseis", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("episkepseis");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"episkepseis", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"episkepseis", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("submission_date"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("submission_date")] = GetTableURL($pageObject->pSet->getLookupTable("submission_date"));
	
	$pageObject->fillFieldToolTips("submission_date");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("submission_date");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "submission_date";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("submission_date_label","<label for=\"".GetInputElementId("submission_date", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("submission_date_label", true);
	
	$xt->assign("submission_date_fieldblock", true);
	$xt->assignbyref("submission_date_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("submission_date_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("submission_date_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_submission_date", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("submission_date");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"submission_date", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"submission_date", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("last_modified_date"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("last_modified_date")] = GetTableURL($pageObject->pSet->getLookupTable("last_modified_date"));
	
	$pageObject->fillFieldToolTips("last_modified_date");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("last_modified_date");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "last_modified_date";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("last_modified_date_label","<label for=\"".GetInputElementId("last_modified_date", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("last_modified_date_label", true);
	
	$xt->assign("last_modified_date_fieldblock", true);
	$xt->assignbyref("last_modified_date_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("last_modified_date_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("last_modified_date_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_last_modified_date", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("last_modified_date");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"last_modified_date", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"last_modified_date", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("ip_address"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("ip_address")] = GetTableURL($pageObject->pSet->getLookupTable("ip_address"));
	
	$pageObject->fillFieldToolTips("ip_address");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("ip_address");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "ip_address";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("ip_address_label","<label for=\"".GetInputElementId("ip_address", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("ip_address_label", true);
	
	$xt->assign("ip_address_fieldblock", true);
	$xt->assignbyref("ip_address_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("ip_address_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("ip_address_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_ip_address", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("ip_address");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ip_address", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"ip_address", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("is_finalized"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("is_finalized")] = GetTableURL($pageObject->pSet->getLookupTable("is_finalized"));
	
	$pageObject->fillFieldToolTips("is_finalized");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("is_finalized");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "is_finalized";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("is_finalized_label","<label for=\"".GetInputElementId("is_finalized", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("is_finalized_label", true);
	
	$xt->assign("is_finalized_fieldblock", true);
	$xt->assignbyref("is_finalized_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("is_finalized_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("is_finalized_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_is_finalized", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("is_finalized");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"is_finalized", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"is_finalized", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("sch_id"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("sch_id")] = GetTableURL($pageObject->pSet->getLookupTable("sch_id"));
	
	$pageObject->fillFieldToolTips("sch_id");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("sch_id");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "sch_id";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("sch_id_label","<label for=\"".GetInputElementId("sch_id", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("sch_id_label", true);
	
	$xt->assign("sch_id_fieldblock", true);
	$xt->assignbyref("sch_id_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("sch_id_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("sch_id_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_sch_id", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("sch_id");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sch_id", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sch_id", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("submited"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("submited")] = GetTableURL($pageObject->pSet->getLookupTable("submited"));
	
	$pageObject->fillFieldToolTips("submited");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("submited");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "submited";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("submited_label","<label for=\"".GetInputElementId("submited", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("submited_label", true);
	
	$xt->assign("submited_fieldblock", true);
	$xt->assignbyref("submited_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("submited_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("submited_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_submited", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("submited");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"submited", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"submited", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	
	//--------------------------------------------------------
	
	$pageObject->body["begin"] .= $includes;
	
	$pageObject->addCommonJs();
	
	$xt->assignbyref("body",$pageObject->body);
	
	$xt->assign("contents_block", true);
	
	$xt->assign("conditions_block",true);
	$xt->assign("search_button",true);
	$xt->assign("reset_button",true);
	$xt->assign("back_button",true);
	
	
	$xt->assign("searchbutton_attrs","id=\"searchButton".$id."\"");
	$xt->assign("resetbutton_attrs","id=\"resetButton".$id."\"");
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
	

	// for crosse report 
	
	if (postvalue('axis_x')!=''){
		$xtCrosseElem = "<input type=\"hidden\" id=\"select_group_x\" value=\"".postvalue('axis_x')."\">
						<input type=\"hidden\" id=\"select_group_y\" value=\"".postvalue('axis_y')."\">
						<input type=\"hidden\" id=\"select_data\" value=\"".postvalue('field')."\">
						<input type=\"hidden\" id=\"group_func_hidden\" value=\"".postvalue('group_func')."\">
						";
		$xt->assign("CrossElem",$xtCrosseElem);
	}
	// for crosse report
	if($eventObj->exists("BeforeShowSearch"))
		$eventObj->BeforeShowSearch($xt,$templatefile, $pageObject);
	// load controls for first page loading	
	
	
	$pageObject->fillSetCntrlMaps();
	
	$pageObject->body['end'] .= '<script>';
	$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
	$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
	$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
	$pageObject->body['end'] .= '</script>';
		$pageObject->body['end'] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
	$pageObject->body["end"] .= "<script>".$pageObject->PrepareJs()."</script>";
	
	$xt->assignbyref("body",$pageObject->body);
	$xt->display($templatefile);
	exit();	
}
else if($mode==SEARCH_LOAD_CONTROL)
{

	$searchControlBuilder = new PanelSearchControl($searchControllerId, $strTableName, $pageObject->searchClauseObj, $pageObject);
	$ctrlField = postvalue('ctrlField');
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $ctrlField, 0, '', false, true, '', '');	
	
	// build array for encode
	$resArr = array();
	$resArr['control1'] = trim($xt->call_func($ctrlBlockArr['searchcontrol']));
	$resArr['control2'] = trim($xt->call_func($ctrlBlockArr['searchcontrol1']));
	$resArr['comboHtml'] = trim($ctrlBlockArr['searchtype']);
	$resArr['delButt'] = trim($ctrlBlockArr['delCtrlButt']);
	$resArr['delButtId'] =  trim($searchControlBuilder->getDelButtonId($ctrlField, $id));
	$resArr['divInd'] = trim($id);	
	$resArr['fLabel'] = GetFieldLabel(GoodFieldName($strTableName),GoodFieldName($ctrlField));
	$resArr['ctrlMap'] = $pageObject->controlsMap['controls'];
	
	if (postvalue('isNeedSettings') == 'true')
	{
		$pageObject->fillSettings();
		$resArr['settings'] = $pageObject->jsSettings;
	}
	
	// return JSON
	echo my_json_encode($resArr);
	exit();
}

?>
