<?php
require_once(getabspath("classes/cipherer.php"));
$tdatasettings = array();
	$tdatasettings[".NumberOfChars"] = 80; 
	$tdatasettings[".ShortName"] = "settings";
	$tdatasettings[".OwnerID"] = "";
	$tdatasettings[".OriginalTable"] = "settings";

//	field labels
$fieldLabelssettings = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssettings["English"] = array();
	$fieldToolTipssettings["English"] = array();
	$fieldLabelssettings["English"]["active"] = "Active";
	$fieldToolTipssettings["English"]["active"] = "";
	$fieldLabelssettings["English"]["trexon_sxol_etos"] = "Trexon Sxol Etos";
	$fieldToolTipssettings["English"]["trexon_sxol_etos"] = "";
	$fieldLabelssettings["English"]["dide"] = "Dide";
	$fieldToolTipssettings["English"]["dide"] = "";
	$fieldLabelssettings["English"]["max_wres_ana_programma"] = "Max Wres Ana Programma";
	$fieldToolTipssettings["English"]["max_wres_ana_programma"] = "";
	$fieldLabelssettings["English"]["max_wres_ana_teacher"] = "Max Wres Ana Teacher";
	$fieldToolTipssettings["English"]["max_wres_ana_teacher"] = "";
	$fieldLabelssettings["English"]["max_programmata_ana_teacher"] = "Max Programmata Ana Teacher";
	$fieldToolTipssettings["English"]["max_programmata_ana_teacher"] = "";
	$fieldLabelssettings["English"]["max_ypeythinos"] = "Max Ypeythinos";
	$fieldToolTipssettings["English"]["max_ypeythinos"] = "";
	$fieldLabelssettings["English"]["deadline"] = "Deadline";
	$fieldToolTipssettings["English"]["deadline"] = "";
	$fieldLabelssettings["English"][""] = "";
	$fieldToolTipssettings["English"][""] = "";
	$fieldLabelssettings["English"][""] = "Settings";
	$fieldToolTipssettings["English"][""] = "";
	$fieldLabelssettings["English"][""] = "";
	$fieldToolTipssettings["English"][""] = "";
	$fieldLabelssettings["English"][""] = "Settings";
	$fieldToolTipssettings["English"][""] = "";
	$fieldLabelssettings["English"][""] = "";
	$fieldToolTipssettings["English"][""] = "";
	$fieldLabelssettings["English"][""] = "";
	$fieldToolTipssettings["English"][""] = "";
	if (count($fieldToolTipssettings["English"]))
		$tdatasettings[".isUseToolTips"] = true;
}
	
	
	$tdatasettings[".NCSearch"] = true;



$tdatasettings[".shortTableName"] = "settings";
$tdatasettings[".nSecOptions"] = 0;
$tdatasettings[".recsPerRowList"] = 1;
$tdatasettings[".mainTableOwnerID"] = "";
$tdatasettings[".moveNext"] = 1;
$tdatasettings[".nType"] = 0;

$tdatasettings[".strOriginalTableName"] = "settings";




$tdatasettings[".showAddInPopup"] = false;

$tdatasettings[".showEditInPopup"] = false;

$tdatasettings[".showViewInPopup"] = false;

$tdatasettings[".fieldsForRegister"] = array();
	
$tdatasettings[".listAjax"] = false;

	$tdatasettings[".audit"] = false;

	$tdatasettings[".locking"] = false;

$tdatasettings[".listIcons"] = true;
$tdatasettings[".edit"] = true;
$tdatasettings[".inlineEdit"] = true;
$tdatasettings[".view"] = true;

$tdatasettings[".exportTo"] = true;

$tdatasettings[".printFriendly"] = true;

$tdatasettings[".delete"] = true;

$tdatasettings[".showSimpleSearchOptions"] = false;

$tdatasettings[".showSearchPanel"] = true;

if (isMobile())
	$tdatasettings[".isUseAjaxSuggest"] = false;
else 
	$tdatasettings[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdatasettings[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasettings[".isUseTimeForSearch"] = false;




$tdatasettings[".allSearchFields"] = array();

$tdatasettings[".allSearchFields"][] = "active";
$tdatasettings[".allSearchFields"][] = "trexon_sxol_etos";
$tdatasettings[".allSearchFields"][] = "dide";
$tdatasettings[".allSearchFields"][] = "max_wres_ana_programma";
$tdatasettings[".allSearchFields"][] = "max_wres_ana_teacher";
$tdatasettings[".allSearchFields"][] = "max_programmata_ana_teacher";
$tdatasettings[".allSearchFields"][] = "max_ypeythinos";
$tdatasettings[".allSearchFields"][] = "deadline";

$tdatasettings[".googleLikeFields"][] = "active";
$tdatasettings[".googleLikeFields"][] = "trexon_sxol_etos";
$tdatasettings[".googleLikeFields"][] = "dide";
$tdatasettings[".googleLikeFields"][] = "max_wres_ana_programma";
$tdatasettings[".googleLikeFields"][] = "max_wres_ana_teacher";
$tdatasettings[".googleLikeFields"][] = "max_programmata_ana_teacher";
$tdatasettings[".googleLikeFields"][] = "max_ypeythinos";
$tdatasettings[".googleLikeFields"][] = "deadline";

$tdatasettings[".panelSearchFields"][] = "active";
$tdatasettings[".panelSearchFields"][] = "trexon_sxol_etos";
$tdatasettings[".panelSearchFields"][] = "dide";
$tdatasettings[".panelSearchFields"][] = "max_wres_ana_programma";
$tdatasettings[".panelSearchFields"][] = "max_wres_ana_teacher";
$tdatasettings[".panelSearchFields"][] = "max_programmata_ana_teacher";
$tdatasettings[".panelSearchFields"][] = "max_ypeythinos";
$tdatasettings[".panelSearchFields"][] = "deadline";

$tdatasettings[".advSearchFields"][] = "active";
$tdatasettings[".advSearchFields"][] = "trexon_sxol_etos";
$tdatasettings[".advSearchFields"][] = "dide";
$tdatasettings[".advSearchFields"][] = "max_wres_ana_programma";
$tdatasettings[".advSearchFields"][] = "max_wres_ana_teacher";
$tdatasettings[".advSearchFields"][] = "max_programmata_ana_teacher";
$tdatasettings[".advSearchFields"][] = "max_ypeythinos";
$tdatasettings[".advSearchFields"][] = "deadline";

$tdatasettings[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatasettings[".pageSize"] = 300;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasettings[".strOrderBy"] = $tstrOrderBy;

$tdatasettings[".orderindexes"] = array();

$tdatasettings[".sqlHead"] = "SELECT active,  trexon_sxol_etos,  dide,  max_wres_ana_programma,  max_wres_ana_teacher,  max_programmata_ana_teacher,  max_ypeythinos,  deadline";
$tdatasettings[".sqlFrom"] = "FROM settings";
$tdatasettings[".sqlWhereExpr"] = "";
$tdatasettings[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasettings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasettings[".arrGroupsPerPage"] = $arrGPP;

$tableKeyssettings = array();
$tableKeyssettings[] = "trexon_sxol_etos";
$tdatasettings[".Keys"] = $tableKeyssettings;

$tdatasettings[".listFields"] = array();
$tdatasettings[".listFields"][] = "active";
$tdatasettings[".listFields"][] = "trexon_sxol_etos";
$tdatasettings[".listFields"][] = "dide";
$tdatasettings[".listFields"][] = "max_wres_ana_programma";
$tdatasettings[".listFields"][] = "max_wres_ana_teacher";
$tdatasettings[".listFields"][] = "max_programmata_ana_teacher";
$tdatasettings[".listFields"][] = "max_ypeythinos";
$tdatasettings[".listFields"][] = "deadline";

$tdatasettings[".viewFields"] = array();
$tdatasettings[".viewFields"][] = "active";
$tdatasettings[".viewFields"][] = "trexon_sxol_etos";
$tdatasettings[".viewFields"][] = "dide";
$tdatasettings[".viewFields"][] = "max_wres_ana_programma";
$tdatasettings[".viewFields"][] = "max_wres_ana_teacher";
$tdatasettings[".viewFields"][] = "max_programmata_ana_teacher";
$tdatasettings[".viewFields"][] = "max_ypeythinos";
$tdatasettings[".viewFields"][] = "deadline";

$tdatasettings[".addFields"] = array();
$tdatasettings[".addFields"][] = "active";
$tdatasettings[".addFields"][] = "trexon_sxol_etos";
$tdatasettings[".addFields"][] = "dide";
$tdatasettings[".addFields"][] = "max_wres_ana_programma";
$tdatasettings[".addFields"][] = "max_wres_ana_teacher";
$tdatasettings[".addFields"][] = "max_programmata_ana_teacher";
$tdatasettings[".addFields"][] = "max_ypeythinos";
$tdatasettings[".addFields"][] = "deadline";

$tdatasettings[".inlineAddFields"] = array();
$tdatasettings[".inlineAddFields"][] = "active";
$tdatasettings[".inlineAddFields"][] = "trexon_sxol_etos";
$tdatasettings[".inlineAddFields"][] = "dide";
$tdatasettings[".inlineAddFields"][] = "max_wres_ana_programma";
$tdatasettings[".inlineAddFields"][] = "max_wres_ana_teacher";
$tdatasettings[".inlineAddFields"][] = "max_programmata_ana_teacher";
$tdatasettings[".inlineAddFields"][] = "max_ypeythinos";
$tdatasettings[".inlineAddFields"][] = "deadline";

$tdatasettings[".editFields"] = array();
$tdatasettings[".editFields"][] = "active";
$tdatasettings[".editFields"][] = "trexon_sxol_etos";
$tdatasettings[".editFields"][] = "dide";
$tdatasettings[".editFields"][] = "max_wres_ana_programma";
$tdatasettings[".editFields"][] = "max_wres_ana_teacher";
$tdatasettings[".editFields"][] = "max_programmata_ana_teacher";
$tdatasettings[".editFields"][] = "max_ypeythinos";
$tdatasettings[".editFields"][] = "deadline";

$tdatasettings[".inlineEditFields"] = array();
$tdatasettings[".inlineEditFields"][] = "active";
$tdatasettings[".inlineEditFields"][] = "trexon_sxol_etos";
$tdatasettings[".inlineEditFields"][] = "dide";
$tdatasettings[".inlineEditFields"][] = "max_wres_ana_programma";
$tdatasettings[".inlineEditFields"][] = "max_wres_ana_teacher";
$tdatasettings[".inlineEditFields"][] = "max_programmata_ana_teacher";
$tdatasettings[".inlineEditFields"][] = "max_ypeythinos";
$tdatasettings[".inlineEditFields"][] = "deadline";

$tdatasettings[".exportFields"] = array();
$tdatasettings[".exportFields"][] = "active";
$tdatasettings[".exportFields"][] = "trexon_sxol_etos";
$tdatasettings[".exportFields"][] = "dide";
$tdatasettings[".exportFields"][] = "max_wres_ana_programma";
$tdatasettings[".exportFields"][] = "max_wres_ana_teacher";
$tdatasettings[".exportFields"][] = "max_programmata_ana_teacher";
$tdatasettings[".exportFields"][] = "max_ypeythinos";
$tdatasettings[".exportFields"][] = "deadline";

$tdatasettings[".printFields"] = array();
$tdatasettings[".printFields"][] = "active";
$tdatasettings[".printFields"][] = "trexon_sxol_etos";
$tdatasettings[".printFields"][] = "dide";
$tdatasettings[".printFields"][] = "max_wres_ana_programma";
$tdatasettings[".printFields"][] = "max_wres_ana_teacher";
$tdatasettings[".printFields"][] = "max_programmata_ana_teacher";
$tdatasettings[".printFields"][] = "max_ypeythinos";
$tdatasettings[".printFields"][] = "deadline";

//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "settings";
	$fdata["Label"] = "Active"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "active"; 
		$fdata["FullName"] = "active";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasettings["active"] = $fdata;
//	trexon_sxol_etos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "trexon_sxol_etos";
	$fdata["GoodName"] = "trexon_sxol_etos";
	$fdata["ownerTable"] = "settings";
	$fdata["Label"] = "Trexon Sxol Etos"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "trexon_sxol_etos"; 
		$fdata["FullName"] = "trexon_sxol_etos";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasettings["trexon_sxol_etos"] = $fdata;
//	dide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dide";
	$fdata["GoodName"] = "dide";
	$fdata["ownerTable"] = "settings";
	$fdata["Label"] = "Dide"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "dide"; 
		$fdata["FullName"] = "dide";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasettings["dide"] = $fdata;
//	max_wres_ana_programma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "max_wres_ana_programma";
	$fdata["GoodName"] = "max_wres_ana_programma";
	$fdata["ownerTable"] = "settings";
	$fdata["Label"] = "Max Wres Ana Programma"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "max_wres_ana_programma"; 
		$fdata["FullName"] = "max_wres_ana_programma";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasettings["max_wres_ana_programma"] = $fdata;
//	max_wres_ana_teacher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "max_wres_ana_teacher";
	$fdata["GoodName"] = "max_wres_ana_teacher";
	$fdata["ownerTable"] = "settings";
	$fdata["Label"] = "Max Wres Ana Teacher"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "max_wres_ana_teacher"; 
		$fdata["FullName"] = "max_wres_ana_teacher";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasettings["max_wres_ana_teacher"] = $fdata;
//	max_programmata_ana_teacher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "max_programmata_ana_teacher";
	$fdata["GoodName"] = "max_programmata_ana_teacher";
	$fdata["ownerTable"] = "settings";
	$fdata["Label"] = "Max Programmata Ana Teacher"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "max_programmata_ana_teacher"; 
		$fdata["FullName"] = "max_programmata_ana_teacher";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasettings["max_programmata_ana_teacher"] = $fdata;
//	max_ypeythinos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "max_ypeythinos";
	$fdata["GoodName"] = "max_ypeythinos";
	$fdata["ownerTable"] = "settings";
	$fdata["Label"] = "Max Ypeythinos"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "max_ypeythinos"; 
		$fdata["FullName"] = "max_ypeythinos";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasettings["max_ypeythinos"] = $fdata;
//	deadline
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "deadline";
	$fdata["GoodName"] = "deadline";
	$fdata["ownerTable"] = "settings";
	$fdata["Label"] = "Deadline"; 
	$fdata["FieldType"] = 135;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "deadline"; 
		$fdata["FullName"] = "deadline";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasettings["deadline"] = $fdata;

	
$tables_data["settings"]=&$tdatasettings;
$field_labels["settings"] = &$fieldLabelssettings;
$fieldToolTips["settings"] = &$fieldToolTipssettings;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["settings"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["settings"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_settings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "active,  trexon_sxol_etos,  dide,  max_wres_ana_programma,  max_wres_ana_teacher,  max_programmata_ana_teacher,  max_ypeythinos,  deadline";
$proto0["m_strFrom"] = "FROM settings";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "settings"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "trexon_sxol_etos",
	"m_strTable" => "settings"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "dide",
	"m_strTable" => "settings"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "max_wres_ana_programma",
	"m_strTable" => "settings"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "max_wres_ana_teacher",
	"m_strTable" => "settings"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "max_programmata_ana_teacher",
	"m_strTable" => "settings"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "max_ypeythinos",
	"m_strTable" => "settings"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "deadline",
	"m_strTable" => "settings"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "settings";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "active";
$proto22["m_columns"][] = "trexon_sxol_etos";
$proto22["m_columns"][] = "dide";
$proto22["m_columns"][] = "max_wres_ana_programma";
$proto22["m_columns"][] = "max_wres_ana_teacher";
$proto22["m_columns"][] = "max_programmata_ana_teacher";
$proto22["m_columns"][] = "max_ypeythinos";
$proto22["m_columns"][] = "deadline";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_settings = createSqlQuery_settings();
								$tdatasettings[".sqlquery"] = $queryData_settings;

$tableEvents["settings"] = new eventsBase;
$tdatasettings[".hasEvents"] = false;

$cipherer = new RunnerCipherer("settings");

?>