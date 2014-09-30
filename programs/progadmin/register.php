<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/pschools_variables.php");
require_once(getabspath("classes/cipherer.php"));
include("classes/registerpage.php");


$cipherer = new RunnerCipherer($strTableName);

$registered=false;
//event for onsubmit

$strMessage = "";
$allow_registration = true;
$strUsername = "";
$strPassword = "";
$strEmail = "";
$sentMailResults = array();
$values = array();
$keys = array();
$id = 1;
include('include/xtempl.php');

$isNeedSettings = true;
$xt = new Xtempl();

$layout = new TLayout("register","BoldOrange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"regheader","block"=>"","substyle"=>2);


$layout->containers["fields"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"regfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"mesbackto","block"=>"","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"regbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";
$layout->blocks["top"][] = "fields";$page_layouts["register"] = $layout;


$layout = new TLayout("register_success","BoldOrange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"regheader","block"=>"","substyle"=>2);



$layout->containers["fields"][] = array("name"=>"registered","block"=>"registered_block","substyle"=>3);


$layout->skins["fields"] = "fields";
$layout->blocks["top"][] = "fields";$page_layouts["register_success"] = $layout;


$params = array("pageType" => PAGE_REGISTER,"id" => $id);
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params["templatefile"] = "register.htm";
$params["needSearchClauseObj"] = false;

//////////////////////

$pageObject = new RegisterPage($params);


$isUseCaptcha = $globalEvents->existsCAPTCHA(PAGE_REGISTER);


//	Before Process event
if($globalEvents->exists("BeforeProcessRegister"))
	$globalEvents->BeforeProcessRegister($conn, $pageObject);
//Send activation link to user's email

$includes = "";
$includes.= "<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";	
	

// proccess captcha
if($isUseCaptcha)
	$pageObject->doCaptchaCode();
	
if(!$pageObject->isCaptchaOk)
	$allow_registration = false;
	
if(@$_POST["btnSubmit"] == "Register")
{
	$filename_values = array();
	$blobfields = array();
	$inlineedit = ADD_SIMPLE;

	$pageObject->addConfirmFieldControl(GetPasswordField(), $id);

//	processing sch_name - start
	$control_sch_name = $pageObject->getControl("sch_name", $id);
	$control_sch_name->readWebValue($values, $blobfields, "", null, $filename_values);
//	processibng sch_name - end

//	processing password - start
	$control_password = $pageObject->getControl("password", $id);
	$control_password->readWebValue($values, $blobfields, "", null, $filename_values);
//	processibng password - end

//	processing username - start
	$control_username = $pageObject->getControl("username", $id);
	$control_username->readWebValue($values, $blobfields, "", null, $filename_values);
//	processibng username - end

//	processing email - start
	$control_email = $pageObject->getControl("email", $id);
	$control_email->readWebValue($values, $blobfields, "", null, $filename_values);
//	processibng email - end

	$strUsername = $values["username"];
	$strPassword = $values["password"];
	$strEmail = $values["email"];

	if($cipherer->isFieldEncrypted("username"))
		$sUsername = $cipherer->MakeDBValue("username",$strUsername,"","",true);	
	else 
		$sUsername = add_db_quotes("username",$strUsername);
	
	if($cipherer->isFieldEncrypted("email"))
		$sEmail = $cipherer->MakeDBValue("email",$strEmail,"","",true);	
	else 
		$sEmail = add_db_quotes("email",$strEmail);

//	add filenames to values
	foreach($filename_values as $key=>$value)
		$values[$key] = $value;

//	check if entered username already exists
	if(!strlen($strUsername))
	{
		$pageObject->jsSettings['tableSettings'][$strTableName]['regmsg_userError'] = "Username can not be empty.";
		$allow_registration = false;
	}	
	else
	{
		$strSQL = "select count(*) from `pschools` where ".GetFullFieldName("username",$strTableName,false)."=".$sUsername;
	   	$rs = db_query($strSQL,$conn);
		$data = db_fetch_numarray($rs);
		if($data[0]>0)
		{
			$pageObject->jsSettings['tableSettings'][$strTableName]['regmsg_userError'] = "Username"." <i>".$strUsername."</i> "."already exists. Choose another username.";
			$allow_registration=false;
		}
	}

	
	$retval = true;
	
	if($allow_registration)
	{
		if($globalEvents->exists("BeforeRegister"))
			$retval = $globalEvents->BeforeRegister($values,$strMessage, $pageObject);
	}
	else
		$retval = false;
	
	if($retval)
	{
		$message = "";
		$retval = DoInsertRecord("pschools",$values,$blobfields,$id,$pageObject, $cipherer);
		$strMessage = $message;
	}
	
	if($isUseCaptcha && $pageObject->isCaptchaOk)
		$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
	
	if($retval)
	{
		if($globalEvents->exists("AfterSuccessfulRegistration"))
			$globalEvents->AfterSuccessfulRegistration($values, $pageObject);
		$url = GetSiteUrl();
		$url.=$_SERVER["SCRIPT_NAME"];
//	send email to user
		$message = "You have registered as a user at"." ".$url."\r\n\r\n";
		$strLabel = "Sch Name";
		$message.= $strLabel.": ".$values["sch_name"]."\r\n";
		$strLabel = "Username";
		$message.= $strLabel.": ".$values["username"]."\r\n";
		$strLabel = "Email";
		$message.= $strLabel.": ".$values["email"]."\r\n";
		if(($pos = strpos($strEmail,"\r"))!==FALSE || ($pos=strpos($strEmail,"\n"))!==FALSE)
			$strEmail = substr($strEmail,0,$pos);
		$sentMailResults = runner_mail(array('to' => $strEmail, 'subject' => "Notification on registering", 'body' => $message));

		
		if(!count($sentMailResults) || $sentMailResults['mailed'])
		{
			//	show Registartion successful message
					$pageObject->addCommonJs();
			$pageObject->fillSetCntrlMaps();
			$pageObject->addButtonHandlers();

			$pageObject->body["begin"] .= $includes."<form method=\"POST\" action=\"login.php\" name=\"loginform\">
			<input type=\"Hidden\" name=username value=\"".htmlspecialchars($strUsername)."\">".
			"<input type=\"Hidden\" name=password value=\"".htmlspecialchars($strPassword)."\"></form>";
			
			$pageObject->body["end"] .= "<script>";
			$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
			$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
			$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
					$pageObject->body['end'] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
			$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";
			$xt->assign("registered_block",true);

			$xt->assign("body",$pageObject->body);
			$xt->assign("loginlink_attrs","onclick=\"document.forms.loginform.submit();return false;\"");
			$xt->display("register_success.htm");
			return;
		}
		elseif($sentMailResults['message'])
		{
			$xt->assign("message","<div class='message'>".$sentMailResults['message']."</div>");
			$xt->assign("message_block",true);
		}
	}
	else
	{
		if($globalEvents->exists("AfterUnsuccessfulRegistration"))
			$globalEvents->AfterUnsuccessfulRegistration($values,$strMessage, $pageObject);
	
		if($strMessage!="")
		{
			$xt->assign("message","<div class='message'>".$strMessage."</div>");
			$xt->assign("message_block",true);
		}
	}
}

//$includes.="<script language=\"JavaScript\" src=\"include/customlabels.js\"></script>\r\n";
if (!isMobile())
$includes.="<div id=\"search_suggest\"></div>\r\n";

//	assign values to the controls

if(!count($values))
{
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////
//	Begin Add validation params for Regester
$regex = '';
$regextype = '';
$regexmessage = '';

$regFields = $pageObject->getFieldsByPageType();
foreach($regFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());	
	$control[$gfName] = array();
	$control[$gfName]["func"] = "xt_buildeditcontrol";
	$control[$gfName]["params"] = array();
	$control[$gfName]["params"]["id"] = $id;
	$control[$gfName]["params"]["mode"] = "add";
	$control[$gfName]["params"]["field"] = $fName;
	$control[$gfName]["params"]["value"] = @$values[$fName];
	$control[$gfName]["params"]["pageObj"] = $pageObject;
	
	if($fName == GetPasswordField() or $fName == GetUserNameField() or $fName == GetEmailField())
		$control[$gfName]["params"]["suggest"] = true;
	else
		$control[$gfName]["params"]["suggest"] = false;
		
	if($pageObject->pSet->getEditFormat($fName) == 'Time')
		$pageObject->fillTimePickSettings($fName, @$values[$fName]);
	
	if($fName == GetPasswordField())
	{
		$pageObject->addConfirmFieldControl($fName, $id);
		$pageObject->jsSettings['tableSettings'][$strTableName]['passFieldName'] = $fName;
	}
	
	if($fName == GetUserNameField())
		$pageObject->jsSettings['tableSettings'][$strTableName]['userFieldName'] = $fName;
		
	if($fName == GetEmailField())
		$pageObject->jsSettings['tableSettings'][$strTableName]['emailFieldName'] = $fName;
		
	//	Begin Add validation
	if (($fName == GetUserNameField()) || ($fName == GetPasswordField()) || ($fName == GetEmailField()))
	{
		$control[$gfName]["params"]["validate"] = Array('basicValidate' => Array ( 'IsRequired' )); 
	}	
	else 
	{
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
	}
	//	End Add validation
	
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	$controls["controls"]['mode'] = "add";
	
	$controls["controls"]['suggest'] = $control[$gfName]["params"]["suggest"];
	
	$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	$xt->assign($gfName."_label",true);
	if(isEnableSection508())
		$xt->assign_section($gfName."_label","<label for=\"".GetInputElementId($fName, $id, PAGE_REGISTER)."\">","</label>");
	$xt->assign($gfName."_fieldblock",true);
	
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $regFields))
		$vals = array($fName => @$values[$fName],$strCategoryControl => @$values[$strCategoryControl]);
	else
		$vals = array($fName => @$values[$fName]);
	
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
		$controls["controls"]['preloadData'] = $preload;
	
	$pageObject->fillControlsMap($controls);
	
	if($pageObject->pSet->getEditFormat($fName) == 'Time')	
		$pageObject->fillTimePickSettings($fName, @$values[$fName]);
		
	if($fName==GetPasswordField() && GetPasswordField()!=GetUserNameField())
	{
		//Begin second field for re-enter password
		$xt->assign("confirm_label",true);
		if(isEnableSection508())
			$xt->assign_section("confirm_label","<label for=\"value_confirm_".$id."\">","</label>");
		
		$pageObject->addConfirmFieldControl("confirm", $id, true);
			
		$control1['confirm'] = array();
		$control1['confirm']["func"] = "xt_buildeditcontrol";
		$control1['confirm']["params"] = array();
		$control1['confirm']["params"]["field"] = "confirm";
		$control1['confirm']["params"]["format"] = "Password";
		$control1['confirm']["params"]["validate"]['basicValidate'] = array('IsRequired');
		$control1['confirm']["params"]["id"] = $id;
		$control1['confirm']["params"]["mode"] = "add";
		$control1['confirm']["params"]["suggest"] = true;
		$control1['confirm']["params"]["pageObj"] = $pageObject;
		
		$controls = array('controls'=>array());
		
		$controls["controls"]['ctrlInd'] = 0;
		$controls["controls"]['id'] = $id;
		$controls["controls"]['fieldName'] = "confirm";
		$controls["controls"]['mode'] = "add";
		$controls["controls"]['suggest'] = true;
		
		$xt->assignbyref("confirm_editcontrol1",$control1['confirm']);
		$xt->assign("confirm_block",true);
		
		$pageObject->fillControlsMap($controls);
	}
}

//////////////////////////////////
$xt->assign("buttons_block",true);

//	show readonly fields

$xt->assign("submit_attrs","id=\"saveButton".$id."\"");

$pageObject->body["begin"].= $includes;
$pageObject->addCommonJs();
$pageObject->fillSetCntrlMaps();
$pageObject->addButtonHandlers();

//For mobile version in apple device

$pageObject->body['end'] = array();
$pageObject->body['end']["method"] = "assignBodyEnd";
$pageObject->body['end']["object"] = &$pageObject;
$xt->assignbyref("body",$pageObject->body);

$pageObject->xt->assign("legend", true);

if($globalEvents->exists("BeforeShowRegister"))
{
	$globalEvents->BeforeShowRegister($xt, $pageObject->templatefile, $pageObject);
}
$xt->eventsObject = &$globalEvents;
$xt->display($pageObject->templatefile);

?>
