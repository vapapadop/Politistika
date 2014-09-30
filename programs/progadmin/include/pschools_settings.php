<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapschools = array();
	$tdatapschools[".NumberOfChars"] = 80; 
	$tdatapschools[".ShortName"] = "pschools";
	$tdatapschools[".OwnerID"] = "";
	$tdatapschools[".OriginalTable"] = "pschools";

//	field labels
$fieldLabelspschools = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspschools["English"] = array();
	$fieldToolTipspschools["English"] = array();
	$fieldLabelspschools["English"]["sch_id"] = "Sch Id";
	$fieldToolTipspschools["English"]["sch_id"] = "";
	$fieldLabelspschools["English"]["submited"] = "Submited";
	$fieldToolTipspschools["English"]["submited"] = "";
	$fieldLabelspschools["English"]["username"] = "Username";
	$fieldToolTipspschools["English"]["username"] = "";
	$fieldLabelspschools["English"]["password"] = "Password";
	$fieldToolTipspschools["English"]["password"] = "";
	$fieldLabelspschools["English"]["sch_code"] = "Sch Code";
	$fieldToolTipspschools["English"]["sch_code"] = "";
	$fieldLabelspschools["English"]["sch_perioxi"] = "Sch Perioxi";
	$fieldToolTipspschools["English"]["sch_perioxi"] = "";
	$fieldLabelspschools["English"]["sch_name"] = "Sch Name";
	$fieldToolTipspschools["English"]["sch_name"] = "";
	$fieldLabelspschools["English"]["sch_dimos"] = "Sch Dimos";
	$fieldToolTipspschools["English"]["sch_dimos"] = "";
	$fieldLabelspschools["English"]["sch_phone"] = "Sch Phone";
	$fieldToolTipspschools["English"]["sch_phone"] = "";
	$fieldLabelspschools["English"]["fax"] = "Fax";
	$fieldToolTipspschools["English"]["fax"] = "";
	$fieldLabelspschools["English"]["email"] = "Email";
	$fieldToolTipspschools["English"]["email"] = "";
	if (count($fieldToolTipspschools["English"]))
		$tdatapschools[".isUseToolTips"] = true;
}
	
	
	$tdatapschools[".NCSearch"] = true;



$tdatapschools[".shortTableName"] = "pschools";
$tdatapschools[".nSecOptions"] = 0;
$tdatapschools[".recsPerRowList"] = 1;
$tdatapschools[".mainTableOwnerID"] = "";
$tdatapschools[".moveNext"] = 1;
$tdatapschools[".nType"] = 0;

$tdatapschools[".strOriginalTableName"] = "pschools";




$tdatapschools[".showAddInPopup"] = false;

$tdatapschools[".showEditInPopup"] = false;

$tdatapschools[".showViewInPopup"] = false;

$tdatapschools[".fieldsForRegister"] = array();

$tdatapschools[".listAjax"] = false;

	$tdatapschools[".audit"] = false;

	$tdatapschools[".locking"] = false;

$tdatapschools[".listIcons"] = true;
$tdatapschools[".edit"] = true;
$tdatapschools[".inlineEdit"] = true;
$tdatapschools[".inlineAdd"] = true;
$tdatapschools[".view"] = true;

$tdatapschools[".exportTo"] = true;

$tdatapschools[".printFriendly"] = true;

$tdatapschools[".delete"] = true;

$tdatapschools[".showSimpleSearchOptions"] = false;

$tdatapschools[".showSearchPanel"] = true;

if (isMobile())
	$tdatapschools[".isUseAjaxSuggest"] = false;
else 
	$tdatapschools[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdatapschools[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapschools[".isUseTimeForSearch"] = false;




$tdatapschools[".allSearchFields"] = array();

$tdatapschools[".allSearchFields"][] = "sch_id";
$tdatapschools[".allSearchFields"][] = "submited";
$tdatapschools[".allSearchFields"][] = "username";
$tdatapschools[".allSearchFields"][] = "password";
$tdatapschools[".allSearchFields"][] = "sch_code";
$tdatapschools[".allSearchFields"][] = "sch_perioxi";
$tdatapschools[".allSearchFields"][] = "sch_name";
$tdatapschools[".allSearchFields"][] = "sch_dimos";
$tdatapschools[".allSearchFields"][] = "sch_phone";
$tdatapschools[".allSearchFields"][] = "fax";
$tdatapschools[".allSearchFields"][] = "email";

$tdatapschools[".googleLikeFields"][] = "sch_id";
$tdatapschools[".googleLikeFields"][] = "submited";
$tdatapschools[".googleLikeFields"][] = "username";
$tdatapschools[".googleLikeFields"][] = "password";
$tdatapschools[".googleLikeFields"][] = "sch_code";
$tdatapschools[".googleLikeFields"][] = "sch_perioxi";
$tdatapschools[".googleLikeFields"][] = "sch_name";
$tdatapschools[".googleLikeFields"][] = "sch_dimos";
$tdatapschools[".googleLikeFields"][] = "sch_phone";
$tdatapschools[".googleLikeFields"][] = "fax";
$tdatapschools[".googleLikeFields"][] = "email";

$tdatapschools[".panelSearchFields"][] = "sch_id";
$tdatapschools[".panelSearchFields"][] = "submited";
$tdatapschools[".panelSearchFields"][] = "username";
$tdatapschools[".panelSearchFields"][] = "password";
$tdatapschools[".panelSearchFields"][] = "sch_code";
$tdatapschools[".panelSearchFields"][] = "sch_perioxi";
$tdatapschools[".panelSearchFields"][] = "sch_name";
$tdatapschools[".panelSearchFields"][] = "sch_dimos";
$tdatapschools[".panelSearchFields"][] = "sch_phone";
$tdatapschools[".panelSearchFields"][] = "fax";
$tdatapschools[".panelSearchFields"][] = "email";

$tdatapschools[".advSearchFields"][] = "sch_id";
$tdatapschools[".advSearchFields"][] = "submited";
$tdatapschools[".advSearchFields"][] = "username";
$tdatapschools[".advSearchFields"][] = "password";
$tdatapschools[".advSearchFields"][] = "sch_code";
$tdatapschools[".advSearchFields"][] = "sch_perioxi";
$tdatapschools[".advSearchFields"][] = "sch_name";
$tdatapschools[".advSearchFields"][] = "sch_dimos";
$tdatapschools[".advSearchFields"][] = "sch_phone";
$tdatapschools[".advSearchFields"][] = "fax";
$tdatapschools[".advSearchFields"][] = "email";

$tdatapschools[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatapschools[".pageSize"] = 300;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapschools[".strOrderBy"] = $tstrOrderBy;

$tdatapschools[".orderindexes"] = array();

$tdatapschools[".sqlHead"] = "SELECT sch_id,  submited,  username,  password,  sch_code,  sch_perioxi,  sch_name,  sch_dimos,  sch_phone,  fax,  email";
$tdatapschools[".sqlFrom"] = "FROM pschools";
$tdatapschools[".sqlWhereExpr"] = "";
$tdatapschools[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapschools[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapschools[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspschools = array();
$tableKeyspschools[] = "sch_id";
$tdatapschools[".Keys"] = $tableKeyspschools;

$tdatapschools[".listFields"] = array();
$tdatapschools[".listFields"][] = "sch_id";
$tdatapschools[".listFields"][] = "submited";
$tdatapschools[".listFields"][] = "username";
$tdatapschools[".listFields"][] = "password";
$tdatapschools[".listFields"][] = "sch_code";
$tdatapschools[".listFields"][] = "sch_perioxi";
$tdatapschools[".listFields"][] = "sch_name";
$tdatapschools[".listFields"][] = "sch_dimos";
$tdatapschools[".listFields"][] = "sch_phone";
$tdatapschools[".listFields"][] = "fax";
$tdatapschools[".listFields"][] = "email";

$tdatapschools[".viewFields"] = array();
$tdatapschools[".viewFields"][] = "sch_id";
$tdatapschools[".viewFields"][] = "submited";
$tdatapschools[".viewFields"][] = "username";
$tdatapschools[".viewFields"][] = "password";
$tdatapschools[".viewFields"][] = "sch_code";
$tdatapschools[".viewFields"][] = "sch_perioxi";
$tdatapschools[".viewFields"][] = "sch_name";
$tdatapschools[".viewFields"][] = "sch_dimos";
$tdatapschools[".viewFields"][] = "sch_phone";
$tdatapschools[".viewFields"][] = "fax";
$tdatapschools[".viewFields"][] = "email";

$tdatapschools[".addFields"] = array();
$tdatapschools[".addFields"][] = "sch_id";
$tdatapschools[".addFields"][] = "submited";
$tdatapschools[".addFields"][] = "username";
$tdatapschools[".addFields"][] = "password";
$tdatapschools[".addFields"][] = "sch_code";
$tdatapschools[".addFields"][] = "sch_perioxi";
$tdatapschools[".addFields"][] = "sch_name";
$tdatapschools[".addFields"][] = "sch_dimos";
$tdatapschools[".addFields"][] = "sch_phone";
$tdatapschools[".addFields"][] = "fax";
$tdatapschools[".addFields"][] = "email";

$tdatapschools[".inlineAddFields"] = array();
$tdatapschools[".inlineAddFields"][] = "sch_id";
$tdatapschools[".inlineAddFields"][] = "submited";
$tdatapschools[".inlineAddFields"][] = "username";
$tdatapschools[".inlineAddFields"][] = "password";
$tdatapschools[".inlineAddFields"][] = "sch_code";
$tdatapschools[".inlineAddFields"][] = "sch_perioxi";
$tdatapschools[".inlineAddFields"][] = "sch_name";
$tdatapschools[".inlineAddFields"][] = "sch_dimos";
$tdatapschools[".inlineAddFields"][] = "sch_phone";
$tdatapschools[".inlineAddFields"][] = "fax";
$tdatapschools[".inlineAddFields"][] = "email";

$tdatapschools[".editFields"] = array();
$tdatapschools[".editFields"][] = "sch_id";
$tdatapschools[".editFields"][] = "submited";
$tdatapschools[".editFields"][] = "username";
$tdatapschools[".editFields"][] = "password";
$tdatapschools[".editFields"][] = "sch_code";
$tdatapschools[".editFields"][] = "sch_perioxi";
$tdatapschools[".editFields"][] = "sch_name";
$tdatapschools[".editFields"][] = "sch_dimos";
$tdatapschools[".editFields"][] = "sch_phone";
$tdatapschools[".editFields"][] = "fax";
$tdatapschools[".editFields"][] = "email";

$tdatapschools[".inlineEditFields"] = array();
$tdatapschools[".inlineEditFields"][] = "sch_id";
$tdatapschools[".inlineEditFields"][] = "submited";
$tdatapschools[".inlineEditFields"][] = "username";
$tdatapschools[".inlineEditFields"][] = "password";
$tdatapschools[".inlineEditFields"][] = "sch_code";
$tdatapschools[".inlineEditFields"][] = "sch_perioxi";
$tdatapschools[".inlineEditFields"][] = "sch_name";
$tdatapschools[".inlineEditFields"][] = "sch_dimos";
$tdatapschools[".inlineEditFields"][] = "sch_phone";
$tdatapschools[".inlineEditFields"][] = "fax";
$tdatapschools[".inlineEditFields"][] = "email";

$tdatapschools[".exportFields"] = array();
$tdatapschools[".exportFields"][] = "sch_id";
$tdatapschools[".exportFields"][] = "submited";
$tdatapschools[".exportFields"][] = "username";
$tdatapschools[".exportFields"][] = "password";
$tdatapschools[".exportFields"][] = "sch_code";
$tdatapschools[".exportFields"][] = "sch_perioxi";
$tdatapschools[".exportFields"][] = "sch_name";
$tdatapschools[".exportFields"][] = "sch_dimos";
$tdatapschools[".exportFields"][] = "sch_phone";
$tdatapschools[".exportFields"][] = "fax";
$tdatapschools[".exportFields"][] = "email";

$tdatapschools[".printFields"] = array();
$tdatapschools[".printFields"][] = "sch_id";
$tdatapschools[".printFields"][] = "submited";
$tdatapschools[".printFields"][] = "username";
$tdatapschools[".printFields"][] = "password";
$tdatapschools[".printFields"][] = "sch_code";
$tdatapschools[".printFields"][] = "sch_perioxi";
$tdatapschools[".printFields"][] = "sch_name";
$tdatapschools[".printFields"][] = "sch_dimos";
$tdatapschools[".printFields"][] = "sch_phone";
$tdatapschools[".printFields"][] = "fax";
$tdatapschools[".printFields"][] = "email";

//	sch_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sch_id";
	$fdata["GoodName"] = "sch_id";
	$fdata["ownerTable"] = "pschools";
	$fdata["Label"] = "Sch Id"; 
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
	
		$fdata["strField"] = "sch_id"; 
		$fdata["FullName"] = "sch_id";
	
		
		
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
	
		
		
	$tdatapschools["sch_id"] = $fdata;
//	submited
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "submited";
	$fdata["GoodName"] = "submited";
	$fdata["ownerTable"] = "pschools";
	$fdata["Label"] = "Submited"; 
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
	
		$fdata["strField"] = "submited"; 
		$fdata["FullName"] = "submited";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapschools["submited"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "pschools";
	$fdata["Label"] = "Username"; 
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
	
		$fdata["strField"] = "username"; 
		$fdata["FullName"] = "username";
	
		
		
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
			$edata["EditParams"].= " maxlength=20";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapschools["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "pschools";
	$fdata["Label"] = "Password"; 
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
	
		$fdata["strField"] = "password"; 
		$fdata["FullName"] = "password";
	
		
		
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
			$edata["EditParams"].= " maxlength=8";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapschools["password"] = $fdata;
//	sch_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sch_code";
	$fdata["GoodName"] = "sch_code";
	$fdata["ownerTable"] = "pschools";
	$fdata["Label"] = "Sch Code"; 
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
	
		$fdata["strField"] = "sch_code"; 
		$fdata["FullName"] = "sch_code";
	
		
		
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
			$edata["EditParams"].= " maxlength=20";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapschools["sch_code"] = $fdata;
//	sch_perioxi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sch_perioxi";
	$fdata["GoodName"] = "sch_perioxi";
	$fdata["ownerTable"] = "pschools";
	$fdata["Label"] = "Sch Perioxi"; 
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
	
		$fdata["strField"] = "sch_perioxi"; 
		$fdata["FullName"] = "sch_perioxi";
	
		
		
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
			$edata["EditParams"].= " maxlength=45";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapschools["sch_perioxi"] = $fdata;
//	sch_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sch_name";
	$fdata["GoodName"] = "sch_name";
	$fdata["ownerTable"] = "pschools";
	$fdata["Label"] = "Sch Name"; 
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
	
		$fdata["strField"] = "sch_name"; 
		$fdata["FullName"] = "sch_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=98";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapschools["sch_name"] = $fdata;
//	sch_dimos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sch_dimos";
	$fdata["GoodName"] = "sch_dimos";
	$fdata["ownerTable"] = "pschools";
	$fdata["Label"] = "Sch Dimos"; 
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
	
		$fdata["strField"] = "sch_dimos"; 
		$fdata["FullName"] = "sch_dimos";
	
		
		
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
			$edata["EditParams"].= " maxlength=34";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapschools["sch_dimos"] = $fdata;
//	sch_phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sch_phone";
	$fdata["GoodName"] = "sch_phone";
	$fdata["ownerTable"] = "pschools";
	$fdata["Label"] = "Sch Phone"; 
	$fdata["FieldType"] = 20;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sch_phone"; 
		$fdata["FullName"] = "sch_phone";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapschools["sch_phone"] = $fdata;
//	fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fax";
	$fdata["GoodName"] = "fax";
	$fdata["ownerTable"] = "pschools";
	$fdata["Label"] = "Fax"; 
	$fdata["FieldType"] = 20;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fax"; 
		$fdata["FullName"] = "fax";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapschools["fax"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "pschools";
	$fdata["Label"] = "Email"; 
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
	
		$fdata["strField"] = "email"; 
		$fdata["FullName"] = "email";
	
		
		
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
			$edata["EditParams"].= " maxlength=34";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapschools["email"] = $fdata;

	
$tables_data["pschools"]=&$tdatapschools;
$field_labels["pschools"] = &$fieldLabelspschools;
$fieldToolTips["pschools"] = &$fieldToolTipspschools;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pschools"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["pschools"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pschools()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sch_id,  submited,  username,  password,  sch_code,  sch_perioxi,  sch_name,  sch_dimos,  sch_phone,  fax,  email";
$proto0["m_strFrom"] = "FROM pschools";
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
	"m_strName" => "sch_id",
	"m_strTable" => "pschools"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "submited",
	"m_strTable" => "pschools"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "pschools"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "pschools"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_code",
	"m_strTable" => "pschools"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_perioxi",
	"m_strTable" => "pschools"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_name",
	"m_strTable" => "pschools"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_dimos",
	"m_strTable" => "pschools"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_phone",
	"m_strTable" => "pschools"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "pschools"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "pschools"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "pschools";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "sch_id";
$proto28["m_columns"][] = "submited";
$proto28["m_columns"][] = "username";
$proto28["m_columns"][] = "password";
$proto28["m_columns"][] = "sch_code";
$proto28["m_columns"][] = "sch_perioxi";
$proto28["m_columns"][] = "sch_name";
$proto28["m_columns"][] = "sch_dimos";
$proto28["m_columns"][] = "sch_phone";
$proto28["m_columns"][] = "fax";
$proto28["m_columns"][] = "email";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_alias"] = "";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = "0";
$proto29["m_inBrackets"] = "0";
$proto29["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pschools = createSqlQuery_pschools();
											$tdatapschools[".sqlquery"] = $queryData_pschools;

$tableEvents["pschools"] = new eventsBase;
$tdatapschools[".hasEvents"] = false;

$cipherer = new RunnerCipherer("pschools");

?>