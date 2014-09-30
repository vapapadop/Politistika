<?php
require_once(getabspath("classes/cipherer.php"));
$tdataprosorines = array();
	$tdataprosorines[".NumberOfChars"] = 80; 
	$tdataprosorines[".ShortName"] = "prosorines";
	$tdataprosorines[".OwnerID"] = "";
	$tdataprosorines[".OriginalTable"] = "ft_form_4";

//	field labels
$fieldLabelsprosorines = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprosorines["English"] = array();
	$fieldToolTipsprosorines["English"] = array();
	$fieldLabelsprosorines["English"]["submission_id"] = "Αρ. Ηλ. Καταχώρησης";
	$fieldToolTipsprosorines["English"]["submission_id"] = "";
	$fieldLabelsprosorines["English"]["programa"] = "Τύπος Προγράματος";
	$fieldToolTipsprosorines["English"]["programa"] = "";
	$fieldLabelsprosorines["English"]["date"] = "Ημνια Πρωτλου Σχολείου";
	$fieldToolTipsprosorines["English"]["date"] = "";
	$fieldLabelsprosorines["English"]["ar_protocol"] = "Αρ. Πρωτλου Σχολείου";
	$fieldToolTipsprosorines["English"]["ar_protocol"] = "";
	$fieldLabelsprosorines["English"]["sxol_etos"] = "Σχολ. Ετος";
	$fieldToolTipsprosorines["English"]["sxol_etos"] = "";
	$fieldLabelsprosorines["English"]["dide_name"] = "ΔΔΕ Ονομα";
	$fieldToolTipsprosorines["English"]["dide_name"] = "";
	$fieldLabelsprosorines["English"]["sch_name"] = "Σχολείο";
	$fieldToolTipsprosorines["English"]["sch_name"] = "";
	$fieldLabelsprosorines["English"]["tel_ergasias"] = "Τηλ. Σχολείου";
	$fieldToolTipsprosorines["English"]["tel_ergasias"] = "";
	$fieldLabelsprosorines["English"]["dimos"] = "Δήμος Σχολείου";
	$fieldToolTipsprosorines["English"]["dimos"] = "";
	$fieldLabelsprosorines["English"]["fax"] = "Fax";
	$fieldToolTipsprosorines["English"]["fax"] = "";
	$fieldLabelsprosorines["English"]["e_mail"] = "E Mail";
	$fieldToolTipsprosorines["English"]["e_mail"] = "";
	$fieldLabelsprosorines["English"]["sch_teachers"] = "Αρ. Καθηγητών Σχολείου";
	$fieldToolTipsprosorines["English"]["sch_teachers"] = "";
	$fieldLabelsprosorines["English"]["sch_students"] = "Αρ. Μαθητών Σχολείου";
	$fieldToolTipsprosorines["English"]["sch_students"] = "";
	$fieldLabelsprosorines["English"]["dieythintis_name"] = "Ονομα Διευθυντή";
	$fieldToolTipsprosorines["English"]["dieythintis_name"] = "";
	$fieldLabelsprosorines["English"]["klados_dieythinti"] = "Κλάδος Διευθυντή";
	$fieldToolTipsprosorines["English"]["klados_dieythinti"] = "";
	$fieldLabelsprosorines["English"]["program_title"] = "Τίτλος Προγράμματος";
	$fieldToolTipsprosorines["English"]["program_title"] = "";
	$fieldLabelsprosorines["English"]["ar_praksis"] = "Αρ. Πράξης Συλλόγου";
	$fieldToolTipsprosorines["English"]["ar_praksis"] = "";
	$fieldLabelsprosorines["English"]["date_praksis"] = "Ημνια Πράξης Συλλόγου";
	$fieldToolTipsprosorines["English"]["date_praksis"] = "";
	$fieldLabelsprosorines["English"]["sch_orario"] = "Ωράριο Σχολείου";
	$fieldToolTipsprosorines["English"]["sch_orario"] = "";
	$fieldLabelsprosorines["English"]["ypeythinos_name"] = "Όνομα Υπευθύνου";
	$fieldToolTipsprosorines["English"]["ypeythinos_name"] = "";
	$fieldLabelsprosorines["English"]["ypeythinos_amm"] = "ΑΦΜ Υπευθύνου";
	$fieldToolTipsprosorines["English"]["ypeythinos_amm"] = "";
	$fieldLabelsprosorines["English"]["ypeythinos_klados"] = "Κλάδος Υπευθύνου";
	$fieldToolTipsprosorines["English"]["ypeythinos_klados"] = "";
	$fieldLabelsprosorines["English"]["ypeythinos_wres"] = "Ώρες Υπευθύνου";
	$fieldToolTipsprosorines["English"]["ypeythinos_wres"] = "";
	$fieldLabelsprosorines["English"]["ypeythinos_again"] = "Υπεύθυνος ξανά";
	$fieldToolTipsprosorines["English"]["ypeythinos_again"] = "";
	$fieldLabelsprosorines["English"]["ypeythinos_epimorfosi"] = "Επιμόρφωση Υπευθύνου";
	$fieldToolTipsprosorines["English"]["ypeythinos_epimorfosi"] = "";
	$fieldLabelsprosorines["English"]["symetexwn1_name"] = "Όνομα Συμμετέχων1";
	$fieldToolTipsprosorines["English"]["symetexwn1_name"] = "";
	$fieldLabelsprosorines["English"]["symetexwn1_amm"] = "ΑΦΜ Συμμετέχων1";
	$fieldToolTipsprosorines["English"]["symetexwn1_amm"] = "";
	$fieldLabelsprosorines["English"]["symetexwn1_klados"] = "Κλάδος Συμμετέχων1";
	$fieldToolTipsprosorines["English"]["symetexwn1_klados"] = "";
	$fieldLabelsprosorines["English"]["symetexwn1_wres"] = "Ώρες Συμμετέχων1";
	$fieldToolTipsprosorines["English"]["symetexwn1_wres"] = "";
	$fieldLabelsprosorines["English"]["symetexwn1_again"] = "Συμμετέχων1 ξανά";
	$fieldToolTipsprosorines["English"]["symetexwn1_again"] = "";
	$fieldLabelsprosorines["English"]["symetexwn1_epimorfosi"] = "Επιμόρφωση Συμμετέχων1";
	$fieldToolTipsprosorines["English"]["symetexwn1_epimorfosi"] = "";
	$fieldLabelsprosorines["English"]["symetexwn2_name"] = "Όνομα Συμμετέχων2";
	$fieldToolTipsprosorines["English"]["symetexwn2_name"] = "";
	$fieldLabelsprosorines["English"]["symetexwn2_amm"] = "ΑΦΜ Συμμετέχων2";
	$fieldToolTipsprosorines["English"]["symetexwn2_amm"] = "";
	$fieldLabelsprosorines["English"]["symetexwn2_klados"] = "Κλάδος Συμμετέχων2";
	$fieldToolTipsprosorines["English"]["symetexwn2_klados"] = "";
	$fieldLabelsprosorines["English"]["symetexwn2_wres"] = "Ώρες Συμμετέχων2";
	$fieldToolTipsprosorines["English"]["symetexwn2_wres"] = "";
	$fieldLabelsprosorines["English"]["symetexwn2_again"] = "Συμμετέχων2 ξανά";
	$fieldToolTipsprosorines["English"]["symetexwn2_again"] = "";
	$fieldLabelsprosorines["English"]["symetexwn2_epimorfosi"] = "Επιμόρφωση Συμμετέχων2";
	$fieldToolTipsprosorines["English"]["symetexwn2_epimorfosi"] = "";
	$fieldLabelsprosorines["English"]["symetexwn3_name"] = "Όνομα Συμμετέχων3";
	$fieldToolTipsprosorines["English"]["symetexwn3_name"] = "";
	$fieldLabelsprosorines["English"]["symetexwn3_amm"] = "ΑΦΜ Συμμετέχων3";
	$fieldToolTipsprosorines["English"]["symetexwn3_amm"] = "";
	$fieldLabelsprosorines["English"]["symetexwn3_klados"] = "Κλάδος Συμμετέχων3";
	$fieldToolTipsprosorines["English"]["symetexwn3_klados"] = "";
	$fieldLabelsprosorines["English"]["symetexwn3_wres"] = "Ώρες Συμμετέχων3";
	$fieldToolTipsprosorines["English"]["symetexwn3_wres"] = "";
	$fieldLabelsprosorines["English"]["symetexwn3_again"] = "Συμμετέχων3 ξανά";
	$fieldToolTipsprosorines["English"]["symetexwn3_again"] = "";
	$fieldLabelsprosorines["English"]["symetexwn3_epimorfosi"] = "Επιμόρφωση Συμμετέχων3";
	$fieldToolTipsprosorines["English"]["symetexwn3_epimorfosi"] = "";
	$fieldLabelsprosorines["English"]["mathites_synolo"] = "Σύνολο Μαθητές Ομάδας";
	$fieldToolTipsprosorines["English"]["mathites_synolo"] = "";
	$fieldLabelsprosorines["English"]["agoria"] = "Αγόρια";
	$fieldToolTipsprosorines["English"]["agoria"] = "";
	$fieldLabelsprosorines["English"]["koritsia"] = "Κορίτσια";
	$fieldToolTipsprosorines["English"]["koritsia"] = "";
	$fieldLabelsprosorines["English"]["amiges"] = "Σύνθεση Ομάδας";
	$fieldToolTipsprosorines["English"]["amiges"] = "";
	$fieldLabelsprosorines["English"]["meet_day"] = "Ημέρα/ες Συνάντησης";
	$fieldToolTipsprosorines["English"]["meet_day"] = "";
	$fieldLabelsprosorines["English"]["meet_hour"] = "Ώρα/ες Συνάντησης";
	$fieldToolTipsprosorines["English"]["meet_hour"] = "";
	$fieldLabelsprosorines["English"]["meet_place"] = "Τόπος Συνάντησης";
	$fieldToolTipsprosorines["English"]["meet_place"] = "";
	$fieldLabelsprosorines["English"]["arxeio"] = "Υπάρχει Αρχείο ";
	$fieldToolTipsprosorines["English"]["arxeio"] = "";
	$fieldLabelsprosorines["English"]["ypothemata"] = "Υποθέματα";
	$fieldToolTipsprosorines["English"]["ypothemata"] = "";
	$fieldLabelsprosorines["English"]["stoxoi"] = "Στόχοι";
	$fieldToolTipsprosorines["English"]["stoxoi"] = "";
	$fieldLabelsprosorines["English"]["methodologia"] = "Μεθοδολογία";
	$fieldToolTipsprosorines["English"]["methodologia"] = "";
	$fieldLabelsprosorines["English"]["syndeseis"] = "Συνδέσεις";
	$fieldToolTipsprosorines["English"]["syndeseis"] = "";
	$fieldLabelsprosorines["English"]["month1"] = "Μήνας 1";
	$fieldToolTipsprosorines["English"]["month1"] = "";
	$fieldLabelsprosorines["English"]["month2"] = "Μήνας 2";
	$fieldToolTipsprosorines["English"]["month2"] = "";
	$fieldLabelsprosorines["English"]["month3"] = "Μήνας 3";
	$fieldToolTipsprosorines["English"]["month3"] = "";
	$fieldLabelsprosorines["English"]["month4"] = "Μήνας 4";
	$fieldToolTipsprosorines["English"]["month4"] = "";
	$fieldLabelsprosorines["English"]["month5"] = "Μήνας 5";
	$fieldToolTipsprosorines["English"]["month5"] = "";
	$fieldLabelsprosorines["English"]["episkepseis"] = "Αρ. Επισκέψεων";
	$fieldToolTipsprosorines["English"]["episkepseis"] = "";
	$fieldLabelsprosorines["English"]["submission_date"] = "Ημερομηνία Υποβολής Αιτησης";
	$fieldToolTipsprosorines["English"]["submission_date"] = "";
	$fieldLabelsprosorines["English"]["last_modified_date"] = "Last Modified Date";
	$fieldToolTipsprosorines["English"]["last_modified_date"] = "";
	$fieldLabelsprosorines["English"]["ip_address"] = "Ip Address";
	$fieldToolTipsprosorines["English"]["ip_address"] = "";
	$fieldLabelsprosorines["English"]["is_finalized"] = "Διακοπή Προγράμματος";
	$fieldToolTipsprosorines["English"]["is_finalized"] = "";
	$fieldLabelsprosorines["English"]["sch_id"] = "sch_id";
	$fieldToolTipsprosorines["English"]["sch_id"] = "";
	$fieldLabelsprosorines["English"]["submited"] = "Submited";
	$fieldToolTipsprosorines["English"]["submited"] = "";
	$fieldLabelsprosorines["English"][""] = "";
	$fieldToolTipsprosorines["English"][""] = "";
	$fieldLabelsprosorines["English"][""] = "ΜΟΝΟ ΠΡΟΣΩΡΙΝΕΣ ΥΠΟΒΟΛΕΣ";
	$fieldToolTipsprosorines["English"][""] = "";
	if (count($fieldToolTipsprosorines["English"]))
		$tdataprosorines[".isUseToolTips"] = true;
}
	
	
	$tdataprosorines[".NCSearch"] = true;



$tdataprosorines[".shortTableName"] = "prosorines";
$tdataprosorines[".nSecOptions"] = 0;
$tdataprosorines[".recsPerRowList"] = 1;
$tdataprosorines[".mainTableOwnerID"] = "";
$tdataprosorines[".moveNext"] = 1;
$tdataprosorines[".nType"] = 1;

$tdataprosorines[".strOriginalTableName"] = "ft_form_4";




$tdataprosorines[".showAddInPopup"] = false;

$tdataprosorines[".showEditInPopup"] = false;

$tdataprosorines[".showViewInPopup"] = false;

$tdataprosorines[".fieldsForRegister"] = array();
	
$tdataprosorines[".listAjax"] = false;

	$tdataprosorines[".audit"] = false;

	$tdataprosorines[".locking"] = false;

$tdataprosorines[".listIcons"] = true;
$tdataprosorines[".view"] = true;

$tdataprosorines[".exportTo"] = true;

$tdataprosorines[".printFriendly"] = true;

$tdataprosorines[".delete"] = true;

$tdataprosorines[".showSimpleSearchOptions"] = false;

$tdataprosorines[".showSearchPanel"] = true;

if (isMobile())
	$tdataprosorines[".isUseAjaxSuggest"] = false;
else 
	$tdataprosorines[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataprosorines[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprosorines[".isUseTimeForSearch"] = false;




$tdataprosorines[".allSearchFields"] = array();

$tdataprosorines[".allSearchFields"][] = "submission_id";
$tdataprosorines[".allSearchFields"][] = "programa";
$tdataprosorines[".allSearchFields"][] = "date";
$tdataprosorines[".allSearchFields"][] = "ar_protocol";
$tdataprosorines[".allSearchFields"][] = "sxol_etos";
$tdataprosorines[".allSearchFields"][] = "dide_name";
$tdataprosorines[".allSearchFields"][] = "sch_name";
$tdataprosorines[".allSearchFields"][] = "tel_ergasias";
$tdataprosorines[".allSearchFields"][] = "dimos";
$tdataprosorines[".allSearchFields"][] = "fax";
$tdataprosorines[".allSearchFields"][] = "e_mail";
$tdataprosorines[".allSearchFields"][] = "sch_teachers";
$tdataprosorines[".allSearchFields"][] = "sch_students";
$tdataprosorines[".allSearchFields"][] = "dieythintis_name";
$tdataprosorines[".allSearchFields"][] = "klados_dieythinti";
$tdataprosorines[".allSearchFields"][] = "program_title";
$tdataprosorines[".allSearchFields"][] = "ar_praksis";
$tdataprosorines[".allSearchFields"][] = "date_praksis";
$tdataprosorines[".allSearchFields"][] = "sch_orario";
$tdataprosorines[".allSearchFields"][] = "ypeythinos_name";
$tdataprosorines[".allSearchFields"][] = "ypeythinos_amm";
$tdataprosorines[".allSearchFields"][] = "ypeythinos_klados";
$tdataprosorines[".allSearchFields"][] = "ypeythinos_wres";
$tdataprosorines[".allSearchFields"][] = "ypeythinos_again";
$tdataprosorines[".allSearchFields"][] = "ypeythinos_epimorfosi";
$tdataprosorines[".allSearchFields"][] = "symetexwn1_name";
$tdataprosorines[".allSearchFields"][] = "symetexwn1_amm";
$tdataprosorines[".allSearchFields"][] = "symetexwn1_klados";
$tdataprosorines[".allSearchFields"][] = "symetexwn1_wres";
$tdataprosorines[".allSearchFields"][] = "symetexwn1_again";
$tdataprosorines[".allSearchFields"][] = "symetexwn1_epimorfosi";
$tdataprosorines[".allSearchFields"][] = "symetexwn2_name";
$tdataprosorines[".allSearchFields"][] = "symetexwn2_amm";
$tdataprosorines[".allSearchFields"][] = "symetexwn2_klados";
$tdataprosorines[".allSearchFields"][] = "symetexwn2_wres";
$tdataprosorines[".allSearchFields"][] = "symetexwn2_again";
$tdataprosorines[".allSearchFields"][] = "symetexwn2_epimorfosi";
$tdataprosorines[".allSearchFields"][] = "symetexwn3_name";
$tdataprosorines[".allSearchFields"][] = "symetexwn3_amm";
$tdataprosorines[".allSearchFields"][] = "symetexwn3_klados";
$tdataprosorines[".allSearchFields"][] = "symetexwn3_wres";
$tdataprosorines[".allSearchFields"][] = "symetexwn3_again";
$tdataprosorines[".allSearchFields"][] = "symetexwn3_epimorfosi";
$tdataprosorines[".allSearchFields"][] = "mathites_synolo";
$tdataprosorines[".allSearchFields"][] = "agoria";
$tdataprosorines[".allSearchFields"][] = "koritsia";
$tdataprosorines[".allSearchFields"][] = "amiges";
$tdataprosorines[".allSearchFields"][] = "meet_day";
$tdataprosorines[".allSearchFields"][] = "meet_hour";
$tdataprosorines[".allSearchFields"][] = "meet_place";
$tdataprosorines[".allSearchFields"][] = "arxeio";
$tdataprosorines[".allSearchFields"][] = "ypothemata";
$tdataprosorines[".allSearchFields"][] = "stoxoi";
$tdataprosorines[".allSearchFields"][] = "methodologia";
$tdataprosorines[".allSearchFields"][] = "syndeseis";
$tdataprosorines[".allSearchFields"][] = "month1";
$tdataprosorines[".allSearchFields"][] = "month2";
$tdataprosorines[".allSearchFields"][] = "month3";
$tdataprosorines[".allSearchFields"][] = "month4";
$tdataprosorines[".allSearchFields"][] = "month5";
$tdataprosorines[".allSearchFields"][] = "episkepseis";
$tdataprosorines[".allSearchFields"][] = "submission_date";
$tdataprosorines[".allSearchFields"][] = "last_modified_date";
$tdataprosorines[".allSearchFields"][] = "ip_address";
$tdataprosorines[".allSearchFields"][] = "is_finalized";
$tdataprosorines[".allSearchFields"][] = "sch_id";
$tdataprosorines[".allSearchFields"][] = "submited";

$tdataprosorines[".googleLikeFields"][] = "submission_id";
$tdataprosorines[".googleLikeFields"][] = "programa";
$tdataprosorines[".googleLikeFields"][] = "date";
$tdataprosorines[".googleLikeFields"][] = "ar_protocol";
$tdataprosorines[".googleLikeFields"][] = "sxol_etos";
$tdataprosorines[".googleLikeFields"][] = "dide_name";
$tdataprosorines[".googleLikeFields"][] = "sch_name";
$tdataprosorines[".googleLikeFields"][] = "tel_ergasias";
$tdataprosorines[".googleLikeFields"][] = "dimos";
$tdataprosorines[".googleLikeFields"][] = "fax";
$tdataprosorines[".googleLikeFields"][] = "e_mail";
$tdataprosorines[".googleLikeFields"][] = "sch_teachers";
$tdataprosorines[".googleLikeFields"][] = "sch_students";
$tdataprosorines[".googleLikeFields"][] = "dieythintis_name";
$tdataprosorines[".googleLikeFields"][] = "klados_dieythinti";
$tdataprosorines[".googleLikeFields"][] = "program_title";
$tdataprosorines[".googleLikeFields"][] = "ar_praksis";
$tdataprosorines[".googleLikeFields"][] = "date_praksis";
$tdataprosorines[".googleLikeFields"][] = "sch_orario";
$tdataprosorines[".googleLikeFields"][] = "ypeythinos_name";
$tdataprosorines[".googleLikeFields"][] = "ypeythinos_amm";
$tdataprosorines[".googleLikeFields"][] = "ypeythinos_klados";
$tdataprosorines[".googleLikeFields"][] = "ypeythinos_wres";
$tdataprosorines[".googleLikeFields"][] = "ypeythinos_again";
$tdataprosorines[".googleLikeFields"][] = "ypeythinos_epimorfosi";
$tdataprosorines[".googleLikeFields"][] = "symetexwn1_name";
$tdataprosorines[".googleLikeFields"][] = "symetexwn1_amm";
$tdataprosorines[".googleLikeFields"][] = "symetexwn1_klados";
$tdataprosorines[".googleLikeFields"][] = "symetexwn1_wres";
$tdataprosorines[".googleLikeFields"][] = "symetexwn1_again";
$tdataprosorines[".googleLikeFields"][] = "symetexwn1_epimorfosi";
$tdataprosorines[".googleLikeFields"][] = "symetexwn2_name";
$tdataprosorines[".googleLikeFields"][] = "symetexwn2_amm";
$tdataprosorines[".googleLikeFields"][] = "symetexwn2_klados";
$tdataprosorines[".googleLikeFields"][] = "symetexwn2_wres";
$tdataprosorines[".googleLikeFields"][] = "symetexwn2_again";
$tdataprosorines[".googleLikeFields"][] = "symetexwn2_epimorfosi";
$tdataprosorines[".googleLikeFields"][] = "symetexwn3_name";
$tdataprosorines[".googleLikeFields"][] = "symetexwn3_amm";
$tdataprosorines[".googleLikeFields"][] = "symetexwn3_klados";
$tdataprosorines[".googleLikeFields"][] = "symetexwn3_wres";
$tdataprosorines[".googleLikeFields"][] = "symetexwn3_again";
$tdataprosorines[".googleLikeFields"][] = "symetexwn3_epimorfosi";
$tdataprosorines[".googleLikeFields"][] = "mathites_synolo";
$tdataprosorines[".googleLikeFields"][] = "agoria";
$tdataprosorines[".googleLikeFields"][] = "koritsia";
$tdataprosorines[".googleLikeFields"][] = "amiges";
$tdataprosorines[".googleLikeFields"][] = "meet_day";
$tdataprosorines[".googleLikeFields"][] = "meet_hour";
$tdataprosorines[".googleLikeFields"][] = "meet_place";
$tdataprosorines[".googleLikeFields"][] = "arxeio";
$tdataprosorines[".googleLikeFields"][] = "ypothemata";
$tdataprosorines[".googleLikeFields"][] = "stoxoi";
$tdataprosorines[".googleLikeFields"][] = "methodologia";
$tdataprosorines[".googleLikeFields"][] = "syndeseis";
$tdataprosorines[".googleLikeFields"][] = "month1";
$tdataprosorines[".googleLikeFields"][] = "month2";
$tdataprosorines[".googleLikeFields"][] = "month3";
$tdataprosorines[".googleLikeFields"][] = "month4";
$tdataprosorines[".googleLikeFields"][] = "month5";
$tdataprosorines[".googleLikeFields"][] = "episkepseis";
$tdataprosorines[".googleLikeFields"][] = "submission_date";
$tdataprosorines[".googleLikeFields"][] = "last_modified_date";
$tdataprosorines[".googleLikeFields"][] = "ip_address";
$tdataprosorines[".googleLikeFields"][] = "is_finalized";
$tdataprosorines[".googleLikeFields"][] = "sch_id";
$tdataprosorines[".googleLikeFields"][] = "submited";

$tdataprosorines[".panelSearchFields"][] = "submission_id";
$tdataprosorines[".panelSearchFields"][] = "programa";
$tdataprosorines[".panelSearchFields"][] = "date";
$tdataprosorines[".panelSearchFields"][] = "ar_protocol";
$tdataprosorines[".panelSearchFields"][] = "sxol_etos";
$tdataprosorines[".panelSearchFields"][] = "dide_name";
$tdataprosorines[".panelSearchFields"][] = "sch_name";
$tdataprosorines[".panelSearchFields"][] = "tel_ergasias";
$tdataprosorines[".panelSearchFields"][] = "dimos";
$tdataprosorines[".panelSearchFields"][] = "fax";
$tdataprosorines[".panelSearchFields"][] = "e_mail";
$tdataprosorines[".panelSearchFields"][] = "sch_teachers";
$tdataprosorines[".panelSearchFields"][] = "sch_students";
$tdataprosorines[".panelSearchFields"][] = "dieythintis_name";
$tdataprosorines[".panelSearchFields"][] = "klados_dieythinti";
$tdataprosorines[".panelSearchFields"][] = "program_title";
$tdataprosorines[".panelSearchFields"][] = "ar_praksis";
$tdataprosorines[".panelSearchFields"][] = "date_praksis";
$tdataprosorines[".panelSearchFields"][] = "sch_orario";
$tdataprosorines[".panelSearchFields"][] = "ypeythinos_name";
$tdataprosorines[".panelSearchFields"][] = "ypeythinos_amm";
$tdataprosorines[".panelSearchFields"][] = "ypeythinos_klados";
$tdataprosorines[".panelSearchFields"][] = "ypeythinos_wres";
$tdataprosorines[".panelSearchFields"][] = "ypeythinos_again";
$tdataprosorines[".panelSearchFields"][] = "ypeythinos_epimorfosi";
$tdataprosorines[".panelSearchFields"][] = "symetexwn1_name";
$tdataprosorines[".panelSearchFields"][] = "symetexwn1_amm";
$tdataprosorines[".panelSearchFields"][] = "symetexwn1_klados";
$tdataprosorines[".panelSearchFields"][] = "symetexwn1_wres";
$tdataprosorines[".panelSearchFields"][] = "symetexwn1_again";
$tdataprosorines[".panelSearchFields"][] = "symetexwn1_epimorfosi";
$tdataprosorines[".panelSearchFields"][] = "symetexwn2_name";
$tdataprosorines[".panelSearchFields"][] = "symetexwn2_amm";
$tdataprosorines[".panelSearchFields"][] = "symetexwn2_klados";
$tdataprosorines[".panelSearchFields"][] = "symetexwn2_wres";
$tdataprosorines[".panelSearchFields"][] = "symetexwn2_again";
$tdataprosorines[".panelSearchFields"][] = "symetexwn2_epimorfosi";
$tdataprosorines[".panelSearchFields"][] = "symetexwn3_name";
$tdataprosorines[".panelSearchFields"][] = "symetexwn3_amm";
$tdataprosorines[".panelSearchFields"][] = "symetexwn3_klados";
$tdataprosorines[".panelSearchFields"][] = "symetexwn3_wres";
$tdataprosorines[".panelSearchFields"][] = "symetexwn3_again";
$tdataprosorines[".panelSearchFields"][] = "symetexwn3_epimorfosi";
$tdataprosorines[".panelSearchFields"][] = "mathites_synolo";
$tdataprosorines[".panelSearchFields"][] = "agoria";
$tdataprosorines[".panelSearchFields"][] = "koritsia";
$tdataprosorines[".panelSearchFields"][] = "amiges";
$tdataprosorines[".panelSearchFields"][] = "meet_day";
$tdataprosorines[".panelSearchFields"][] = "meet_hour";
$tdataprosorines[".panelSearchFields"][] = "meet_place";
$tdataprosorines[".panelSearchFields"][] = "arxeio";
$tdataprosorines[".panelSearchFields"][] = "ypothemata";
$tdataprosorines[".panelSearchFields"][] = "stoxoi";
$tdataprosorines[".panelSearchFields"][] = "methodologia";
$tdataprosorines[".panelSearchFields"][] = "syndeseis";
$tdataprosorines[".panelSearchFields"][] = "month1";
$tdataprosorines[".panelSearchFields"][] = "month2";
$tdataprosorines[".panelSearchFields"][] = "month3";
$tdataprosorines[".panelSearchFields"][] = "month4";
$tdataprosorines[".panelSearchFields"][] = "month5";
$tdataprosorines[".panelSearchFields"][] = "episkepseis";
$tdataprosorines[".panelSearchFields"][] = "submission_date";
$tdataprosorines[".panelSearchFields"][] = "last_modified_date";
$tdataprosorines[".panelSearchFields"][] = "ip_address";
$tdataprosorines[".panelSearchFields"][] = "is_finalized";
$tdataprosorines[".panelSearchFields"][] = "sch_id";

$tdataprosorines[".advSearchFields"][] = "submission_id";
$tdataprosorines[".advSearchFields"][] = "programa";
$tdataprosorines[".advSearchFields"][] = "date";
$tdataprosorines[".advSearchFields"][] = "ar_protocol";
$tdataprosorines[".advSearchFields"][] = "sxol_etos";
$tdataprosorines[".advSearchFields"][] = "dide_name";
$tdataprosorines[".advSearchFields"][] = "sch_name";
$tdataprosorines[".advSearchFields"][] = "tel_ergasias";
$tdataprosorines[".advSearchFields"][] = "dimos";
$tdataprosorines[".advSearchFields"][] = "fax";
$tdataprosorines[".advSearchFields"][] = "e_mail";
$tdataprosorines[".advSearchFields"][] = "sch_teachers";
$tdataprosorines[".advSearchFields"][] = "sch_students";
$tdataprosorines[".advSearchFields"][] = "dieythintis_name";
$tdataprosorines[".advSearchFields"][] = "klados_dieythinti";
$tdataprosorines[".advSearchFields"][] = "program_title";
$tdataprosorines[".advSearchFields"][] = "ar_praksis";
$tdataprosorines[".advSearchFields"][] = "date_praksis";
$tdataprosorines[".advSearchFields"][] = "sch_orario";
$tdataprosorines[".advSearchFields"][] = "ypeythinos_name";
$tdataprosorines[".advSearchFields"][] = "ypeythinos_amm";
$tdataprosorines[".advSearchFields"][] = "ypeythinos_klados";
$tdataprosorines[".advSearchFields"][] = "ypeythinos_wres";
$tdataprosorines[".advSearchFields"][] = "ypeythinos_again";
$tdataprosorines[".advSearchFields"][] = "ypeythinos_epimorfosi";
$tdataprosorines[".advSearchFields"][] = "symetexwn1_name";
$tdataprosorines[".advSearchFields"][] = "symetexwn1_amm";
$tdataprosorines[".advSearchFields"][] = "symetexwn1_klados";
$tdataprosorines[".advSearchFields"][] = "symetexwn1_wres";
$tdataprosorines[".advSearchFields"][] = "symetexwn1_again";
$tdataprosorines[".advSearchFields"][] = "symetexwn1_epimorfosi";
$tdataprosorines[".advSearchFields"][] = "symetexwn2_name";
$tdataprosorines[".advSearchFields"][] = "symetexwn2_amm";
$tdataprosorines[".advSearchFields"][] = "symetexwn2_klados";
$tdataprosorines[".advSearchFields"][] = "symetexwn2_wres";
$tdataprosorines[".advSearchFields"][] = "symetexwn2_again";
$tdataprosorines[".advSearchFields"][] = "symetexwn2_epimorfosi";
$tdataprosorines[".advSearchFields"][] = "symetexwn3_name";
$tdataprosorines[".advSearchFields"][] = "symetexwn3_amm";
$tdataprosorines[".advSearchFields"][] = "symetexwn3_klados";
$tdataprosorines[".advSearchFields"][] = "symetexwn3_wres";
$tdataprosorines[".advSearchFields"][] = "symetexwn3_again";
$tdataprosorines[".advSearchFields"][] = "symetexwn3_epimorfosi";
$tdataprosorines[".advSearchFields"][] = "mathites_synolo";
$tdataprosorines[".advSearchFields"][] = "agoria";
$tdataprosorines[".advSearchFields"][] = "koritsia";
$tdataprosorines[".advSearchFields"][] = "amiges";
$tdataprosorines[".advSearchFields"][] = "meet_day";
$tdataprosorines[".advSearchFields"][] = "meet_hour";
$tdataprosorines[".advSearchFields"][] = "meet_place";
$tdataprosorines[".advSearchFields"][] = "arxeio";
$tdataprosorines[".advSearchFields"][] = "ypothemata";
$tdataprosorines[".advSearchFields"][] = "stoxoi";
$tdataprosorines[".advSearchFields"][] = "methodologia";
$tdataprosorines[".advSearchFields"][] = "syndeseis";
$tdataprosorines[".advSearchFields"][] = "month1";
$tdataprosorines[".advSearchFields"][] = "month2";
$tdataprosorines[".advSearchFields"][] = "month3";
$tdataprosorines[".advSearchFields"][] = "month4";
$tdataprosorines[".advSearchFields"][] = "month5";
$tdataprosorines[".advSearchFields"][] = "episkepseis";
$tdataprosorines[".advSearchFields"][] = "submission_date";
$tdataprosorines[".advSearchFields"][] = "last_modified_date";
$tdataprosorines[".advSearchFields"][] = "ip_address";
$tdataprosorines[".advSearchFields"][] = "is_finalized";
$tdataprosorines[".advSearchFields"][] = "sch_id";
$tdataprosorines[".advSearchFields"][] = "submited";

$tdataprosorines[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataprosorines[".pageSize"] = 300;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprosorines[".strOrderBy"] = $tstrOrderBy;

$tdataprosorines[".orderindexes"] = array();

$tdataprosorines[".sqlHead"] = "SELECT ft_form_4.submission_id,  ft_form_4.programa,  ft_form_4.`date`,  ft_form_4.ar_protocol,  ft_form_4.sxol_etos,  ft_form_4.dide_name,  ft_form_4.sch_name,  ft_form_4.tel_ergasias,  ft_form_4.dimos,  ft_form_4.fax,  ft_form_4.e_mail,  ft_form_4.sch_teachers,  ft_form_4.sch_students,  ft_form_4.dieythintis_name,  ft_form_4.klados_dieythinti,  ft_form_4.program_title,  ft_form_4.ar_praksis,  ft_form_4.date_praksis,  ft_form_4.sch_orario,  ft_form_4.ypeythinos_name,  ft_form_4.ypeythinos_amm,  ft_form_4.ypeythinos_klados,  ft_form_4.ypeythinos_wres,  ft_form_4.ypeythinos_again,  ft_form_4.ypeythinos_epimorfosi,  ft_form_4.symetexwn1_name,  ft_form_4.symetexwn1_amm,  ft_form_4.symetexwn1_klados,  ft_form_4.symetexwn1_wres,  ft_form_4.symetexwn1_again,  ft_form_4.symetexwn1_epimorfosi,  ft_form_4.symetexwn2_name,  ft_form_4.symetexwn2_amm,  ft_form_4.symetexwn2_klados,  ft_form_4.symetexwn2_wres,  ft_form_4.symetexwn2_again,  ft_form_4.symetexwn2_epimorfosi,  ft_form_4.symetexwn3_name,  ft_form_4.symetexwn3_amm,  ft_form_4.symetexwn3_klados,  ft_form_4.symetexwn3_wres,  ft_form_4.symetexwn3_again,  ft_form_4.symetexwn3_epimorfosi,  ft_form_4.mathites_synolo,  ft_form_4.agoria,  ft_form_4.koritsia,  ft_form_4.amiges,  ft_form_4.meet_day,  ft_form_4.meet_hour,  ft_form_4.meet_place,  ft_form_4.arxeio,  ft_form_4.ypothemata,  ft_form_4.stoxoi,  ft_form_4.methodologia,  ft_form_4.syndeseis,  ft_form_4.month1,  ft_form_4.month2,  ft_form_4.month3,  ft_form_4.month4,  ft_form_4.month5,  ft_form_4.episkepseis,  ft_form_4.submission_date,  ft_form_4.last_modified_date,  ft_form_4.ip_address,  ft_form_4.is_finalized,  ft_form_4.sch_id,  pschools.submited";
$tdataprosorines[".sqlFrom"] = "FROM ft_form_4  INNER JOIN pschools ON pschools.sch_id = ft_form_4.sch_id";
$tdataprosorines[".sqlWhereExpr"] = "(pschools.submited =0)";
$tdataprosorines[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprosorines[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprosorines[".arrGroupsPerPage"] = $arrGPP;

$tableKeysprosorines = array();
$tableKeysprosorines[] = "submission_id";
$tdataprosorines[".Keys"] = $tableKeysprosorines;

$tdataprosorines[".listFields"] = array();
$tdataprosorines[".listFields"][] = "submited";
$tdataprosorines[".listFields"][] = "submission_id";
$tdataprosorines[".listFields"][] = "programa";
$tdataprosorines[".listFields"][] = "date";
$tdataprosorines[".listFields"][] = "ar_protocol";
$tdataprosorines[".listFields"][] = "sxol_etos";
$tdataprosorines[".listFields"][] = "dide_name";
$tdataprosorines[".listFields"][] = "sch_name";
$tdataprosorines[".listFields"][] = "tel_ergasias";
$tdataprosorines[".listFields"][] = "dimos";
$tdataprosorines[".listFields"][] = "fax";
$tdataprosorines[".listFields"][] = "e_mail";
$tdataprosorines[".listFields"][] = "sch_teachers";
$tdataprosorines[".listFields"][] = "sch_students";
$tdataprosorines[".listFields"][] = "dieythintis_name";
$tdataprosorines[".listFields"][] = "klados_dieythinti";
$tdataprosorines[".listFields"][] = "program_title";
$tdataprosorines[".listFields"][] = "ar_praksis";
$tdataprosorines[".listFields"][] = "date_praksis";
$tdataprosorines[".listFields"][] = "sch_orario";
$tdataprosorines[".listFields"][] = "ypeythinos_name";
$tdataprosorines[".listFields"][] = "ypeythinos_amm";
$tdataprosorines[".listFields"][] = "ypeythinos_klados";
$tdataprosorines[".listFields"][] = "ypeythinos_wres";
$tdataprosorines[".listFields"][] = "ypeythinos_again";
$tdataprosorines[".listFields"][] = "ypeythinos_epimorfosi";
$tdataprosorines[".listFields"][] = "symetexwn1_name";
$tdataprosorines[".listFields"][] = "symetexwn1_amm";
$tdataprosorines[".listFields"][] = "symetexwn1_klados";
$tdataprosorines[".listFields"][] = "symetexwn1_wres";
$tdataprosorines[".listFields"][] = "symetexwn1_again";
$tdataprosorines[".listFields"][] = "symetexwn1_epimorfosi";
$tdataprosorines[".listFields"][] = "symetexwn2_name";
$tdataprosorines[".listFields"][] = "symetexwn2_amm";
$tdataprosorines[".listFields"][] = "symetexwn2_klados";
$tdataprosorines[".listFields"][] = "symetexwn2_wres";
$tdataprosorines[".listFields"][] = "symetexwn2_again";
$tdataprosorines[".listFields"][] = "symetexwn2_epimorfosi";
$tdataprosorines[".listFields"][] = "symetexwn3_name";
$tdataprosorines[".listFields"][] = "symetexwn3_amm";
$tdataprosorines[".listFields"][] = "symetexwn3_klados";
$tdataprosorines[".listFields"][] = "symetexwn3_wres";
$tdataprosorines[".listFields"][] = "symetexwn3_again";
$tdataprosorines[".listFields"][] = "symetexwn3_epimorfosi";
$tdataprosorines[".listFields"][] = "mathites_synolo";
$tdataprosorines[".listFields"][] = "agoria";
$tdataprosorines[".listFields"][] = "koritsia";
$tdataprosorines[".listFields"][] = "amiges";
$tdataprosorines[".listFields"][] = "meet_day";
$tdataprosorines[".listFields"][] = "meet_hour";
$tdataprosorines[".listFields"][] = "meet_place";
$tdataprosorines[".listFields"][] = "arxeio";
$tdataprosorines[".listFields"][] = "ypothemata";
$tdataprosorines[".listFields"][] = "stoxoi";
$tdataprosorines[".listFields"][] = "methodologia";
$tdataprosorines[".listFields"][] = "syndeseis";
$tdataprosorines[".listFields"][] = "month1";
$tdataprosorines[".listFields"][] = "month2";
$tdataprosorines[".listFields"][] = "month3";
$tdataprosorines[".listFields"][] = "month4";
$tdataprosorines[".listFields"][] = "month5";
$tdataprosorines[".listFields"][] = "episkepseis";
$tdataprosorines[".listFields"][] = "submission_date";
$tdataprosorines[".listFields"][] = "last_modified_date";
$tdataprosorines[".listFields"][] = "ip_address";
$tdataprosorines[".listFields"][] = "is_finalized";
$tdataprosorines[".listFields"][] = "sch_id";

$tdataprosorines[".viewFields"] = array();
$tdataprosorines[".viewFields"][] = "submission_id";
$tdataprosorines[".viewFields"][] = "programa";
$tdataprosorines[".viewFields"][] = "date";
$tdataprosorines[".viewFields"][] = "ar_protocol";
$tdataprosorines[".viewFields"][] = "sxol_etos";
$tdataprosorines[".viewFields"][] = "dide_name";
$tdataprosorines[".viewFields"][] = "sch_name";
$tdataprosorines[".viewFields"][] = "tel_ergasias";
$tdataprosorines[".viewFields"][] = "dimos";
$tdataprosorines[".viewFields"][] = "fax";
$tdataprosorines[".viewFields"][] = "e_mail";
$tdataprosorines[".viewFields"][] = "sch_teachers";
$tdataprosorines[".viewFields"][] = "sch_students";
$tdataprosorines[".viewFields"][] = "dieythintis_name";
$tdataprosorines[".viewFields"][] = "klados_dieythinti";
$tdataprosorines[".viewFields"][] = "program_title";
$tdataprosorines[".viewFields"][] = "ar_praksis";
$tdataprosorines[".viewFields"][] = "date_praksis";
$tdataprosorines[".viewFields"][] = "sch_orario";
$tdataprosorines[".viewFields"][] = "ypeythinos_name";
$tdataprosorines[".viewFields"][] = "ypeythinos_amm";
$tdataprosorines[".viewFields"][] = "ypeythinos_klados";
$tdataprosorines[".viewFields"][] = "ypeythinos_wres";
$tdataprosorines[".viewFields"][] = "ypeythinos_again";
$tdataprosorines[".viewFields"][] = "ypeythinos_epimorfosi";
$tdataprosorines[".viewFields"][] = "symetexwn1_name";
$tdataprosorines[".viewFields"][] = "symetexwn1_amm";
$tdataprosorines[".viewFields"][] = "symetexwn1_klados";
$tdataprosorines[".viewFields"][] = "symetexwn1_wres";
$tdataprosorines[".viewFields"][] = "symetexwn1_again";
$tdataprosorines[".viewFields"][] = "symetexwn1_epimorfosi";
$tdataprosorines[".viewFields"][] = "symetexwn2_name";
$tdataprosorines[".viewFields"][] = "symetexwn2_amm";
$tdataprosorines[".viewFields"][] = "symetexwn2_klados";
$tdataprosorines[".viewFields"][] = "symetexwn2_wres";
$tdataprosorines[".viewFields"][] = "symetexwn2_again";
$tdataprosorines[".viewFields"][] = "symetexwn2_epimorfosi";
$tdataprosorines[".viewFields"][] = "symetexwn3_name";
$tdataprosorines[".viewFields"][] = "symetexwn3_amm";
$tdataprosorines[".viewFields"][] = "symetexwn3_klados";
$tdataprosorines[".viewFields"][] = "symetexwn3_wres";
$tdataprosorines[".viewFields"][] = "symetexwn3_again";
$tdataprosorines[".viewFields"][] = "symetexwn3_epimorfosi";
$tdataprosorines[".viewFields"][] = "mathites_synolo";
$tdataprosorines[".viewFields"][] = "agoria";
$tdataprosorines[".viewFields"][] = "koritsia";
$tdataprosorines[".viewFields"][] = "amiges";
$tdataprosorines[".viewFields"][] = "meet_day";
$tdataprosorines[".viewFields"][] = "meet_hour";
$tdataprosorines[".viewFields"][] = "meet_place";
$tdataprosorines[".viewFields"][] = "arxeio";
$tdataprosorines[".viewFields"][] = "ypothemata";
$tdataprosorines[".viewFields"][] = "stoxoi";
$tdataprosorines[".viewFields"][] = "methodologia";
$tdataprosorines[".viewFields"][] = "syndeseis";
$tdataprosorines[".viewFields"][] = "month1";
$tdataprosorines[".viewFields"][] = "month2";
$tdataprosorines[".viewFields"][] = "month3";
$tdataprosorines[".viewFields"][] = "month4";
$tdataprosorines[".viewFields"][] = "month5";
$tdataprosorines[".viewFields"][] = "episkepseis";
$tdataprosorines[".viewFields"][] = "submission_date";
$tdataprosorines[".viewFields"][] = "last_modified_date";
$tdataprosorines[".viewFields"][] = "ip_address";
$tdataprosorines[".viewFields"][] = "is_finalized";
$tdataprosorines[".viewFields"][] = "sch_id";
$tdataprosorines[".viewFields"][] = "submited";

$tdataprosorines[".addFields"] = array();
$tdataprosorines[".addFields"][] = "submission_id";
$tdataprosorines[".addFields"][] = "programa";
$tdataprosorines[".addFields"][] = "date";
$tdataprosorines[".addFields"][] = "ar_protocol";
$tdataprosorines[".addFields"][] = "sxol_etos";
$tdataprosorines[".addFields"][] = "dide_name";
$tdataprosorines[".addFields"][] = "sch_name";
$tdataprosorines[".addFields"][] = "tel_ergasias";
$tdataprosorines[".addFields"][] = "dimos";
$tdataprosorines[".addFields"][] = "fax";
$tdataprosorines[".addFields"][] = "e_mail";
$tdataprosorines[".addFields"][] = "sch_teachers";
$tdataprosorines[".addFields"][] = "sch_students";
$tdataprosorines[".addFields"][] = "dieythintis_name";
$tdataprosorines[".addFields"][] = "klados_dieythinti";
$tdataprosorines[".addFields"][] = "program_title";
$tdataprosorines[".addFields"][] = "ar_praksis";
$tdataprosorines[".addFields"][] = "date_praksis";
$tdataprosorines[".addFields"][] = "sch_orario";
$tdataprosorines[".addFields"][] = "ypeythinos_name";
$tdataprosorines[".addFields"][] = "ypeythinos_amm";
$tdataprosorines[".addFields"][] = "ypeythinos_klados";
$tdataprosorines[".addFields"][] = "ypeythinos_wres";
$tdataprosorines[".addFields"][] = "ypeythinos_again";
$tdataprosorines[".addFields"][] = "ypeythinos_epimorfosi";
$tdataprosorines[".addFields"][] = "symetexwn1_name";
$tdataprosorines[".addFields"][] = "symetexwn1_amm";
$tdataprosorines[".addFields"][] = "symetexwn1_klados";
$tdataprosorines[".addFields"][] = "symetexwn1_wres";
$tdataprosorines[".addFields"][] = "symetexwn1_again";
$tdataprosorines[".addFields"][] = "symetexwn1_epimorfosi";
$tdataprosorines[".addFields"][] = "symetexwn2_name";
$tdataprosorines[".addFields"][] = "symetexwn2_amm";
$tdataprosorines[".addFields"][] = "symetexwn2_klados";
$tdataprosorines[".addFields"][] = "symetexwn2_wres";
$tdataprosorines[".addFields"][] = "symetexwn2_again";
$tdataprosorines[".addFields"][] = "symetexwn2_epimorfosi";
$tdataprosorines[".addFields"][] = "symetexwn3_name";
$tdataprosorines[".addFields"][] = "symetexwn3_amm";
$tdataprosorines[".addFields"][] = "symetexwn3_klados";
$tdataprosorines[".addFields"][] = "symetexwn3_wres";
$tdataprosorines[".addFields"][] = "symetexwn3_again";
$tdataprosorines[".addFields"][] = "symetexwn3_epimorfosi";
$tdataprosorines[".addFields"][] = "mathites_synolo";
$tdataprosorines[".addFields"][] = "agoria";
$tdataprosorines[".addFields"][] = "koritsia";
$tdataprosorines[".addFields"][] = "amiges";
$tdataprosorines[".addFields"][] = "meet_day";
$tdataprosorines[".addFields"][] = "meet_hour";
$tdataprosorines[".addFields"][] = "meet_place";
$tdataprosorines[".addFields"][] = "arxeio";
$tdataprosorines[".addFields"][] = "ypothemata";
$tdataprosorines[".addFields"][] = "stoxoi";
$tdataprosorines[".addFields"][] = "methodologia";
$tdataprosorines[".addFields"][] = "syndeseis";
$tdataprosorines[".addFields"][] = "month1";
$tdataprosorines[".addFields"][] = "month2";
$tdataprosorines[".addFields"][] = "month3";
$tdataprosorines[".addFields"][] = "month4";
$tdataprosorines[".addFields"][] = "month5";
$tdataprosorines[".addFields"][] = "episkepseis";
$tdataprosorines[".addFields"][] = "submission_date";
$tdataprosorines[".addFields"][] = "last_modified_date";
$tdataprosorines[".addFields"][] = "ip_address";
$tdataprosorines[".addFields"][] = "is_finalized";
$tdataprosorines[".addFields"][] = "sch_id";

$tdataprosorines[".inlineAddFields"] = array();
$tdataprosorines[".inlineAddFields"][] = "submited";
$tdataprosorines[".inlineAddFields"][] = "submission_id";
$tdataprosorines[".inlineAddFields"][] = "programa";
$tdataprosorines[".inlineAddFields"][] = "date";
$tdataprosorines[".inlineAddFields"][] = "ar_protocol";
$tdataprosorines[".inlineAddFields"][] = "sxol_etos";
$tdataprosorines[".inlineAddFields"][] = "dide_name";
$tdataprosorines[".inlineAddFields"][] = "sch_name";
$tdataprosorines[".inlineAddFields"][] = "tel_ergasias";
$tdataprosorines[".inlineAddFields"][] = "dimos";
$tdataprosorines[".inlineAddFields"][] = "fax";
$tdataprosorines[".inlineAddFields"][] = "e_mail";
$tdataprosorines[".inlineAddFields"][] = "sch_teachers";
$tdataprosorines[".inlineAddFields"][] = "sch_students";
$tdataprosorines[".inlineAddFields"][] = "dieythintis_name";
$tdataprosorines[".inlineAddFields"][] = "klados_dieythinti";
$tdataprosorines[".inlineAddFields"][] = "program_title";
$tdataprosorines[".inlineAddFields"][] = "ar_praksis";
$tdataprosorines[".inlineAddFields"][] = "date_praksis";
$tdataprosorines[".inlineAddFields"][] = "sch_orario";
$tdataprosorines[".inlineAddFields"][] = "ypeythinos_name";
$tdataprosorines[".inlineAddFields"][] = "ypeythinos_amm";
$tdataprosorines[".inlineAddFields"][] = "ypeythinos_klados";
$tdataprosorines[".inlineAddFields"][] = "ypeythinos_wres";
$tdataprosorines[".inlineAddFields"][] = "ypeythinos_again";
$tdataprosorines[".inlineAddFields"][] = "ypeythinos_epimorfosi";
$tdataprosorines[".inlineAddFields"][] = "symetexwn1_name";
$tdataprosorines[".inlineAddFields"][] = "symetexwn1_amm";
$tdataprosorines[".inlineAddFields"][] = "symetexwn1_klados";
$tdataprosorines[".inlineAddFields"][] = "symetexwn1_wres";
$tdataprosorines[".inlineAddFields"][] = "symetexwn1_again";
$tdataprosorines[".inlineAddFields"][] = "symetexwn1_epimorfosi";
$tdataprosorines[".inlineAddFields"][] = "symetexwn2_name";
$tdataprosorines[".inlineAddFields"][] = "symetexwn2_amm";
$tdataprosorines[".inlineAddFields"][] = "symetexwn2_klados";
$tdataprosorines[".inlineAddFields"][] = "symetexwn2_wres";
$tdataprosorines[".inlineAddFields"][] = "symetexwn2_again";
$tdataprosorines[".inlineAddFields"][] = "symetexwn2_epimorfosi";
$tdataprosorines[".inlineAddFields"][] = "symetexwn3_name";
$tdataprosorines[".inlineAddFields"][] = "symetexwn3_amm";
$tdataprosorines[".inlineAddFields"][] = "symetexwn3_klados";
$tdataprosorines[".inlineAddFields"][] = "symetexwn3_wres";
$tdataprosorines[".inlineAddFields"][] = "symetexwn3_again";
$tdataprosorines[".inlineAddFields"][] = "symetexwn3_epimorfosi";
$tdataprosorines[".inlineAddFields"][] = "mathites_synolo";
$tdataprosorines[".inlineAddFields"][] = "agoria";
$tdataprosorines[".inlineAddFields"][] = "koritsia";
$tdataprosorines[".inlineAddFields"][] = "amiges";
$tdataprosorines[".inlineAddFields"][] = "meet_day";
$tdataprosorines[".inlineAddFields"][] = "meet_hour";
$tdataprosorines[".inlineAddFields"][] = "meet_place";
$tdataprosorines[".inlineAddFields"][] = "arxeio";
$tdataprosorines[".inlineAddFields"][] = "ypothemata";
$tdataprosorines[".inlineAddFields"][] = "stoxoi";
$tdataprosorines[".inlineAddFields"][] = "methodologia";
$tdataprosorines[".inlineAddFields"][] = "syndeseis";
$tdataprosorines[".inlineAddFields"][] = "month1";
$tdataprosorines[".inlineAddFields"][] = "month2";
$tdataprosorines[".inlineAddFields"][] = "month3";
$tdataprosorines[".inlineAddFields"][] = "month4";
$tdataprosorines[".inlineAddFields"][] = "month5";
$tdataprosorines[".inlineAddFields"][] = "episkepseis";
$tdataprosorines[".inlineAddFields"][] = "submission_date";
$tdataprosorines[".inlineAddFields"][] = "last_modified_date";
$tdataprosorines[".inlineAddFields"][] = "ip_address";
$tdataprosorines[".inlineAddFields"][] = "is_finalized";
$tdataprosorines[".inlineAddFields"][] = "sch_id";

$tdataprosorines[".editFields"] = array();
$tdataprosorines[".editFields"][] = "programa";
$tdataprosorines[".editFields"][] = "date";
$tdataprosorines[".editFields"][] = "ar_protocol";
$tdataprosorines[".editFields"][] = "sxol_etos";
$tdataprosorines[".editFields"][] = "dide_name";
$tdataprosorines[".editFields"][] = "sch_name";
$tdataprosorines[".editFields"][] = "tel_ergasias";
$tdataprosorines[".editFields"][] = "dimos";
$tdataprosorines[".editFields"][] = "fax";
$tdataprosorines[".editFields"][] = "e_mail";
$tdataprosorines[".editFields"][] = "sch_teachers";
$tdataprosorines[".editFields"][] = "sch_students";
$tdataprosorines[".editFields"][] = "dieythintis_name";
$tdataprosorines[".editFields"][] = "klados_dieythinti";
$tdataprosorines[".editFields"][] = "program_title";
$tdataprosorines[".editFields"][] = "ar_praksis";
$tdataprosorines[".editFields"][] = "date_praksis";
$tdataprosorines[".editFields"][] = "sch_orario";
$tdataprosorines[".editFields"][] = "ypeythinos_name";
$tdataprosorines[".editFields"][] = "ypeythinos_amm";
$tdataprosorines[".editFields"][] = "ypeythinos_klados";
$tdataprosorines[".editFields"][] = "ypeythinos_wres";
$tdataprosorines[".editFields"][] = "ypeythinos_again";
$tdataprosorines[".editFields"][] = "ypeythinos_epimorfosi";
$tdataprosorines[".editFields"][] = "symetexwn1_name";
$tdataprosorines[".editFields"][] = "symetexwn1_amm";
$tdataprosorines[".editFields"][] = "symetexwn1_klados";
$tdataprosorines[".editFields"][] = "symetexwn1_wres";
$tdataprosorines[".editFields"][] = "symetexwn1_again";
$tdataprosorines[".editFields"][] = "symetexwn1_epimorfosi";
$tdataprosorines[".editFields"][] = "symetexwn2_name";
$tdataprosorines[".editFields"][] = "symetexwn2_amm";
$tdataprosorines[".editFields"][] = "symetexwn2_klados";
$tdataprosorines[".editFields"][] = "symetexwn2_wres";
$tdataprosorines[".editFields"][] = "symetexwn2_again";
$tdataprosorines[".editFields"][] = "symetexwn2_epimorfosi";
$tdataprosorines[".editFields"][] = "symetexwn3_name";
$tdataprosorines[".editFields"][] = "symetexwn3_amm";
$tdataprosorines[".editFields"][] = "symetexwn3_klados";
$tdataprosorines[".editFields"][] = "symetexwn3_wres";
$tdataprosorines[".editFields"][] = "symetexwn3_again";
$tdataprosorines[".editFields"][] = "symetexwn3_epimorfosi";
$tdataprosorines[".editFields"][] = "mathites_synolo";
$tdataprosorines[".editFields"][] = "agoria";
$tdataprosorines[".editFields"][] = "koritsia";
$tdataprosorines[".editFields"][] = "amiges";
$tdataprosorines[".editFields"][] = "meet_day";
$tdataprosorines[".editFields"][] = "meet_hour";
$tdataprosorines[".editFields"][] = "meet_place";
$tdataprosorines[".editFields"][] = "arxeio";
$tdataprosorines[".editFields"][] = "ypothemata";
$tdataprosorines[".editFields"][] = "stoxoi";
$tdataprosorines[".editFields"][] = "methodologia";
$tdataprosorines[".editFields"][] = "syndeseis";
$tdataprosorines[".editFields"][] = "month1";
$tdataprosorines[".editFields"][] = "month2";
$tdataprosorines[".editFields"][] = "month3";
$tdataprosorines[".editFields"][] = "month4";
$tdataprosorines[".editFields"][] = "month5";
$tdataprosorines[".editFields"][] = "episkepseis";
$tdataprosorines[".editFields"][] = "submission_date";
$tdataprosorines[".editFields"][] = "last_modified_date";
$tdataprosorines[".editFields"][] = "ip_address";
$tdataprosorines[".editFields"][] = "is_finalized";
$tdataprosorines[".editFields"][] = "sch_id";
$tdataprosorines[".editFields"][] = "submission_id";

$tdataprosorines[".inlineEditFields"] = array();
$tdataprosorines[".inlineEditFields"][] = "submited";
$tdataprosorines[".inlineEditFields"][] = "submission_id";
$tdataprosorines[".inlineEditFields"][] = "programa";
$tdataprosorines[".inlineEditFields"][] = "date";
$tdataprosorines[".inlineEditFields"][] = "ar_protocol";
$tdataprosorines[".inlineEditFields"][] = "sxol_etos";
$tdataprosorines[".inlineEditFields"][] = "dide_name";
$tdataprosorines[".inlineEditFields"][] = "sch_name";
$tdataprosorines[".inlineEditFields"][] = "tel_ergasias";
$tdataprosorines[".inlineEditFields"][] = "dimos";
$tdataprosorines[".inlineEditFields"][] = "fax";
$tdataprosorines[".inlineEditFields"][] = "e_mail";
$tdataprosorines[".inlineEditFields"][] = "sch_teachers";
$tdataprosorines[".inlineEditFields"][] = "sch_students";
$tdataprosorines[".inlineEditFields"][] = "dieythintis_name";
$tdataprosorines[".inlineEditFields"][] = "klados_dieythinti";
$tdataprosorines[".inlineEditFields"][] = "program_title";
$tdataprosorines[".inlineEditFields"][] = "ar_praksis";
$tdataprosorines[".inlineEditFields"][] = "date_praksis";
$tdataprosorines[".inlineEditFields"][] = "sch_orario";
$tdataprosorines[".inlineEditFields"][] = "ypeythinos_name";
$tdataprosorines[".inlineEditFields"][] = "ypeythinos_amm";
$tdataprosorines[".inlineEditFields"][] = "ypeythinos_klados";
$tdataprosorines[".inlineEditFields"][] = "ypeythinos_wres";
$tdataprosorines[".inlineEditFields"][] = "ypeythinos_again";
$tdataprosorines[".inlineEditFields"][] = "ypeythinos_epimorfosi";
$tdataprosorines[".inlineEditFields"][] = "symetexwn1_name";
$tdataprosorines[".inlineEditFields"][] = "symetexwn1_amm";
$tdataprosorines[".inlineEditFields"][] = "symetexwn1_klados";
$tdataprosorines[".inlineEditFields"][] = "symetexwn1_wres";
$tdataprosorines[".inlineEditFields"][] = "symetexwn1_again";
$tdataprosorines[".inlineEditFields"][] = "symetexwn1_epimorfosi";
$tdataprosorines[".inlineEditFields"][] = "symetexwn2_name";
$tdataprosorines[".inlineEditFields"][] = "symetexwn2_amm";
$tdataprosorines[".inlineEditFields"][] = "symetexwn2_klados";
$tdataprosorines[".inlineEditFields"][] = "symetexwn2_wres";
$tdataprosorines[".inlineEditFields"][] = "symetexwn2_again";
$tdataprosorines[".inlineEditFields"][] = "symetexwn2_epimorfosi";
$tdataprosorines[".inlineEditFields"][] = "symetexwn3_name";
$tdataprosorines[".inlineEditFields"][] = "symetexwn3_amm";
$tdataprosorines[".inlineEditFields"][] = "symetexwn3_klados";
$tdataprosorines[".inlineEditFields"][] = "symetexwn3_wres";
$tdataprosorines[".inlineEditFields"][] = "symetexwn3_again";
$tdataprosorines[".inlineEditFields"][] = "symetexwn3_epimorfosi";
$tdataprosorines[".inlineEditFields"][] = "mathites_synolo";
$tdataprosorines[".inlineEditFields"][] = "agoria";
$tdataprosorines[".inlineEditFields"][] = "koritsia";
$tdataprosorines[".inlineEditFields"][] = "amiges";
$tdataprosorines[".inlineEditFields"][] = "meet_day";
$tdataprosorines[".inlineEditFields"][] = "meet_hour";
$tdataprosorines[".inlineEditFields"][] = "meet_place";
$tdataprosorines[".inlineEditFields"][] = "arxeio";
$tdataprosorines[".inlineEditFields"][] = "ypothemata";
$tdataprosorines[".inlineEditFields"][] = "stoxoi";
$tdataprosorines[".inlineEditFields"][] = "methodologia";
$tdataprosorines[".inlineEditFields"][] = "syndeseis";
$tdataprosorines[".inlineEditFields"][] = "month1";
$tdataprosorines[".inlineEditFields"][] = "month2";
$tdataprosorines[".inlineEditFields"][] = "month3";
$tdataprosorines[".inlineEditFields"][] = "month4";
$tdataprosorines[".inlineEditFields"][] = "month5";
$tdataprosorines[".inlineEditFields"][] = "episkepseis";
$tdataprosorines[".inlineEditFields"][] = "submission_date";
$tdataprosorines[".inlineEditFields"][] = "last_modified_date";
$tdataprosorines[".inlineEditFields"][] = "ip_address";
$tdataprosorines[".inlineEditFields"][] = "is_finalized";
$tdataprosorines[".inlineEditFields"][] = "sch_id";

$tdataprosorines[".exportFields"] = array();
$tdataprosorines[".exportFields"][] = "submission_id";
$tdataprosorines[".exportFields"][] = "programa";
$tdataprosorines[".exportFields"][] = "date";
$tdataprosorines[".exportFields"][] = "ar_protocol";
$tdataprosorines[".exportFields"][] = "sxol_etos";
$tdataprosorines[".exportFields"][] = "dide_name";
$tdataprosorines[".exportFields"][] = "sch_name";
$tdataprosorines[".exportFields"][] = "tel_ergasias";
$tdataprosorines[".exportFields"][] = "dimos";
$tdataprosorines[".exportFields"][] = "fax";
$tdataprosorines[".exportFields"][] = "e_mail";
$tdataprosorines[".exportFields"][] = "sch_teachers";
$tdataprosorines[".exportFields"][] = "sch_students";
$tdataprosorines[".exportFields"][] = "dieythintis_name";
$tdataprosorines[".exportFields"][] = "klados_dieythinti";
$tdataprosorines[".exportFields"][] = "program_title";
$tdataprosorines[".exportFields"][] = "ar_praksis";
$tdataprosorines[".exportFields"][] = "date_praksis";
$tdataprosorines[".exportFields"][] = "sch_orario";
$tdataprosorines[".exportFields"][] = "ypeythinos_name";
$tdataprosorines[".exportFields"][] = "ypeythinos_amm";
$tdataprosorines[".exportFields"][] = "ypeythinos_klados";
$tdataprosorines[".exportFields"][] = "ypeythinos_wres";
$tdataprosorines[".exportFields"][] = "ypeythinos_again";
$tdataprosorines[".exportFields"][] = "ypeythinos_epimorfosi";
$tdataprosorines[".exportFields"][] = "symetexwn1_name";
$tdataprosorines[".exportFields"][] = "symetexwn1_amm";
$tdataprosorines[".exportFields"][] = "symetexwn1_klados";
$tdataprosorines[".exportFields"][] = "symetexwn1_wres";
$tdataprosorines[".exportFields"][] = "symetexwn1_again";
$tdataprosorines[".exportFields"][] = "symetexwn1_epimorfosi";
$tdataprosorines[".exportFields"][] = "symetexwn2_name";
$tdataprosorines[".exportFields"][] = "symetexwn2_amm";
$tdataprosorines[".exportFields"][] = "symetexwn2_klados";
$tdataprosorines[".exportFields"][] = "symetexwn2_wres";
$tdataprosorines[".exportFields"][] = "symetexwn2_again";
$tdataprosorines[".exportFields"][] = "symetexwn2_epimorfosi";
$tdataprosorines[".exportFields"][] = "symetexwn3_name";
$tdataprosorines[".exportFields"][] = "symetexwn3_amm";
$tdataprosorines[".exportFields"][] = "symetexwn3_klados";
$tdataprosorines[".exportFields"][] = "symetexwn3_wres";
$tdataprosorines[".exportFields"][] = "symetexwn3_again";
$tdataprosorines[".exportFields"][] = "symetexwn3_epimorfosi";
$tdataprosorines[".exportFields"][] = "mathites_synolo";
$tdataprosorines[".exportFields"][] = "agoria";
$tdataprosorines[".exportFields"][] = "koritsia";
$tdataprosorines[".exportFields"][] = "amiges";
$tdataprosorines[".exportFields"][] = "meet_day";
$tdataprosorines[".exportFields"][] = "meet_hour";
$tdataprosorines[".exportFields"][] = "meet_place";
$tdataprosorines[".exportFields"][] = "arxeio";
$tdataprosorines[".exportFields"][] = "ypothemata";
$tdataprosorines[".exportFields"][] = "stoxoi";
$tdataprosorines[".exportFields"][] = "methodologia";
$tdataprosorines[".exportFields"][] = "syndeseis";
$tdataprosorines[".exportFields"][] = "month1";
$tdataprosorines[".exportFields"][] = "month2";
$tdataprosorines[".exportFields"][] = "month3";
$tdataprosorines[".exportFields"][] = "month4";
$tdataprosorines[".exportFields"][] = "month5";
$tdataprosorines[".exportFields"][] = "episkepseis";
$tdataprosorines[".exportFields"][] = "submission_date";
$tdataprosorines[".exportFields"][] = "last_modified_date";
$tdataprosorines[".exportFields"][] = "ip_address";
$tdataprosorines[".exportFields"][] = "is_finalized";
$tdataprosorines[".exportFields"][] = "sch_id";
$tdataprosorines[".exportFields"][] = "submited";

$tdataprosorines[".printFields"] = array();
$tdataprosorines[".printFields"][] = "submited";
$tdataprosorines[".printFields"][] = "submission_id";
$tdataprosorines[".printFields"][] = "programa";
$tdataprosorines[".printFields"][] = "date";
$tdataprosorines[".printFields"][] = "ar_protocol";
$tdataprosorines[".printFields"][] = "sxol_etos";
$tdataprosorines[".printFields"][] = "dide_name";
$tdataprosorines[".printFields"][] = "sch_name";
$tdataprosorines[".printFields"][] = "tel_ergasias";
$tdataprosorines[".printFields"][] = "dimos";
$tdataprosorines[".printFields"][] = "fax";
$tdataprosorines[".printFields"][] = "e_mail";
$tdataprosorines[".printFields"][] = "sch_teachers";
$tdataprosorines[".printFields"][] = "sch_students";
$tdataprosorines[".printFields"][] = "dieythintis_name";
$tdataprosorines[".printFields"][] = "klados_dieythinti";
$tdataprosorines[".printFields"][] = "program_title";
$tdataprosorines[".printFields"][] = "ar_praksis";
$tdataprosorines[".printFields"][] = "date_praksis";
$tdataprosorines[".printFields"][] = "sch_orario";
$tdataprosorines[".printFields"][] = "ypeythinos_name";
$tdataprosorines[".printFields"][] = "ypeythinos_amm";
$tdataprosorines[".printFields"][] = "ypeythinos_klados";
$tdataprosorines[".printFields"][] = "ypeythinos_wres";
$tdataprosorines[".printFields"][] = "ypeythinos_again";
$tdataprosorines[".printFields"][] = "ypeythinos_epimorfosi";
$tdataprosorines[".printFields"][] = "symetexwn1_name";
$tdataprosorines[".printFields"][] = "symetexwn1_amm";
$tdataprosorines[".printFields"][] = "symetexwn1_klados";
$tdataprosorines[".printFields"][] = "symetexwn1_wres";
$tdataprosorines[".printFields"][] = "symetexwn1_again";
$tdataprosorines[".printFields"][] = "symetexwn1_epimorfosi";
$tdataprosorines[".printFields"][] = "symetexwn2_name";
$tdataprosorines[".printFields"][] = "symetexwn2_amm";
$tdataprosorines[".printFields"][] = "symetexwn2_klados";
$tdataprosorines[".printFields"][] = "symetexwn2_wres";
$tdataprosorines[".printFields"][] = "symetexwn2_again";
$tdataprosorines[".printFields"][] = "symetexwn2_epimorfosi";
$tdataprosorines[".printFields"][] = "symetexwn3_name";
$tdataprosorines[".printFields"][] = "symetexwn3_amm";
$tdataprosorines[".printFields"][] = "symetexwn3_klados";
$tdataprosorines[".printFields"][] = "symetexwn3_wres";
$tdataprosorines[".printFields"][] = "symetexwn3_again";
$tdataprosorines[".printFields"][] = "symetexwn3_epimorfosi";
$tdataprosorines[".printFields"][] = "mathites_synolo";
$tdataprosorines[".printFields"][] = "agoria";
$tdataprosorines[".printFields"][] = "koritsia";
$tdataprosorines[".printFields"][] = "amiges";
$tdataprosorines[".printFields"][] = "meet_day";
$tdataprosorines[".printFields"][] = "meet_hour";
$tdataprosorines[".printFields"][] = "meet_place";
$tdataprosorines[".printFields"][] = "arxeio";
$tdataprosorines[".printFields"][] = "ypothemata";
$tdataprosorines[".printFields"][] = "stoxoi";
$tdataprosorines[".printFields"][] = "methodologia";
$tdataprosorines[".printFields"][] = "syndeseis";
$tdataprosorines[".printFields"][] = "month1";
$tdataprosorines[".printFields"][] = "month2";
$tdataprosorines[".printFields"][] = "month3";
$tdataprosorines[".printFields"][] = "month4";
$tdataprosorines[".printFields"][] = "month5";
$tdataprosorines[".printFields"][] = "episkepseis";
$tdataprosorines[".printFields"][] = "submission_date";
$tdataprosorines[".printFields"][] = "last_modified_date";
$tdataprosorines[".printFields"][] = "ip_address";
$tdataprosorines[".printFields"][] = "is_finalized";
$tdataprosorines[".printFields"][] = "sch_id";

//	submission_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "submission_id";
	$fdata["GoodName"] = "submission_id";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Αρ. Ηλ. Καταχώρησης"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "submission_id"; 
		$fdata["FullName"] = "ft_form_4.submission_id";
	
		
		
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
	
		
		
	$tdataprosorines["submission_id"] = $fdata;
//	programa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "programa";
	$fdata["GoodName"] = "programa";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Τύπος Προγράματος"; 
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
	
		$fdata["strField"] = "programa"; 
		$fdata["FullName"] = "ft_form_4.programa";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["programa"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Ημνια Πρωτλου Σχολείου"; 
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
	
		$fdata["strField"] = "date"; 
		$fdata["FullName"] = "ft_form_4.`date`";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["date"] = $fdata;
//	ar_protocol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ar_protocol";
	$fdata["GoodName"] = "ar_protocol";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Αρ. Πρωτλου Σχολείου"; 
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
	
		$fdata["strField"] = "ar_protocol"; 
		$fdata["FullName"] = "ft_form_4.ar_protocol";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["ar_protocol"] = $fdata;
//	sxol_etos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sxol_etos";
	$fdata["GoodName"] = "sxol_etos";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Σχολ. Ετος"; 
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
	
		$fdata["strField"] = "sxol_etos"; 
		$fdata["FullName"] = "ft_form_4.sxol_etos";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["sxol_etos"] = $fdata;
//	dide_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dide_name";
	$fdata["GoodName"] = "dide_name";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "ΔΔΕ Ονομα"; 
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
	
		$fdata["strField"] = "dide_name"; 
		$fdata["FullName"] = "ft_form_4.dide_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["dide_name"] = $fdata;
//	sch_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sch_name";
	$fdata["GoodName"] = "sch_name";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Σχολείο"; 
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
		$fdata["FullName"] = "ft_form_4.sch_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["sch_name"] = $fdata;
//	tel_ergasias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tel_ergasias";
	$fdata["GoodName"] = "tel_ergasias";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Τηλ. Σχολείου"; 
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
	
		$fdata["strField"] = "tel_ergasias"; 
		$fdata["FullName"] = "ft_form_4.tel_ergasias";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["tel_ergasias"] = $fdata;
//	dimos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dimos";
	$fdata["GoodName"] = "dimos";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Δήμος Σχολείου"; 
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
	
		$fdata["strField"] = "dimos"; 
		$fdata["FullName"] = "ft_form_4.dimos";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["dimos"] = $fdata;
//	fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fax";
	$fdata["GoodName"] = "fax";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Fax"; 
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
	
		$fdata["strField"] = "fax"; 
		$fdata["FullName"] = "ft_form_4.fax";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["fax"] = $fdata;
//	e_mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "e_mail";
	$fdata["GoodName"] = "e_mail";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "E Mail"; 
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
	
		$fdata["strField"] = "e_mail"; 
		$fdata["FullName"] = "ft_form_4.e_mail";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["e_mail"] = $fdata;
//	sch_teachers
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sch_teachers";
	$fdata["GoodName"] = "sch_teachers";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Αρ. Καθηγητών Σχολείου"; 
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
	
		$fdata["strField"] = "sch_teachers"; 
		$fdata["FullName"] = "ft_form_4.sch_teachers";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["sch_teachers"] = $fdata;
//	sch_students
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sch_students";
	$fdata["GoodName"] = "sch_students";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Αρ. Μαθητών Σχολείου"; 
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
	
		$fdata["strField"] = "sch_students"; 
		$fdata["FullName"] = "ft_form_4.sch_students";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["sch_students"] = $fdata;
//	dieythintis_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "dieythintis_name";
	$fdata["GoodName"] = "dieythintis_name";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Ονομα Διευθυντή"; 
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
	
		$fdata["strField"] = "dieythintis_name"; 
		$fdata["FullName"] = "ft_form_4.dieythintis_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["dieythintis_name"] = $fdata;
//	klados_dieythinti
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "klados_dieythinti";
	$fdata["GoodName"] = "klados_dieythinti";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Κλάδος Διευθυντή"; 
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
	
		$fdata["strField"] = "klados_dieythinti"; 
		$fdata["FullName"] = "ft_form_4.klados_dieythinti";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["klados_dieythinti"] = $fdata;
//	program_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "program_title";
	$fdata["GoodName"] = "program_title";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Τίτλος Προγράμματος"; 
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
	
		$fdata["strField"] = "program_title"; 
		$fdata["FullName"] = "ft_form_4.program_title";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["program_title"] = $fdata;
//	ar_praksis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ar_praksis";
	$fdata["GoodName"] = "ar_praksis";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Αρ. Πράξης Συλλόγου"; 
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
	
		$fdata["strField"] = "ar_praksis"; 
		$fdata["FullName"] = "ft_form_4.ar_praksis";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["ar_praksis"] = $fdata;
//	date_praksis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "date_praksis";
	$fdata["GoodName"] = "date_praksis";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Ημνια Πράξης Συλλόγου"; 
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
	
		$fdata["strField"] = "date_praksis"; 
		$fdata["FullName"] = "ft_form_4.date_praksis";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["date_praksis"] = $fdata;
//	sch_orario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "sch_orario";
	$fdata["GoodName"] = "sch_orario";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Ωράριο Σχολείου"; 
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
	
		$fdata["strField"] = "sch_orario"; 
		$fdata["FullName"] = "ft_form_4.sch_orario";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["sch_orario"] = $fdata;
//	ypeythinos_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ypeythinos_name";
	$fdata["GoodName"] = "ypeythinos_name";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Όνομα Υπευθύνου"; 
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
	
		$fdata["strField"] = "ypeythinos_name"; 
		$fdata["FullName"] = "ft_form_4.ypeythinos_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["ypeythinos_name"] = $fdata;
//	ypeythinos_amm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "ypeythinos_amm";
	$fdata["GoodName"] = "ypeythinos_amm";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "ΑΦΜ Υπευθύνου"; 
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
	
		$fdata["strField"] = "ypeythinos_amm"; 
		$fdata["FullName"] = "ft_form_4.ypeythinos_amm";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["ypeythinos_amm"] = $fdata;
//	ypeythinos_klados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ypeythinos_klados";
	$fdata["GoodName"] = "ypeythinos_klados";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Κλάδος Υπευθύνου"; 
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
	
		$fdata["strField"] = "ypeythinos_klados"; 
		$fdata["FullName"] = "ft_form_4.ypeythinos_klados";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["ypeythinos_klados"] = $fdata;
//	ypeythinos_wres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "ypeythinos_wres";
	$fdata["GoodName"] = "ypeythinos_wres";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Ώρες Υπευθύνου"; 
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
	
		$fdata["strField"] = "ypeythinos_wres"; 
		$fdata["FullName"] = "ft_form_4.ypeythinos_wres";
	
		
		
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
	
		
		
	$tdataprosorines["ypeythinos_wres"] = $fdata;
//	ypeythinos_again
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "ypeythinos_again";
	$fdata["GoodName"] = "ypeythinos_again";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Υπεύθυνος ξανά"; 
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
	
		$fdata["strField"] = "ypeythinos_again"; 
		$fdata["FullName"] = "ft_form_4.ypeythinos_again";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["ypeythinos_again"] = $fdata;
//	ypeythinos_epimorfosi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ypeythinos_epimorfosi";
	$fdata["GoodName"] = "ypeythinos_epimorfosi";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Επιμόρφωση Υπευθύνου"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ypeythinos_epimorfosi"; 
		$fdata["FullName"] = "ft_form_4.ypeythinos_epimorfosi";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["ypeythinos_epimorfosi"] = $fdata;
//	symetexwn1_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "symetexwn1_name";
	$fdata["GoodName"] = "symetexwn1_name";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Όνομα Συμμετέχων1"; 
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
	
		$fdata["strField"] = "symetexwn1_name"; 
		$fdata["FullName"] = "ft_form_4.symetexwn1_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn1_name"] = $fdata;
//	symetexwn1_amm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "symetexwn1_amm";
	$fdata["GoodName"] = "symetexwn1_amm";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "ΑΦΜ Συμμετέχων1"; 
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
	
		$fdata["strField"] = "symetexwn1_amm"; 
		$fdata["FullName"] = "ft_form_4.symetexwn1_amm";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn1_amm"] = $fdata;
//	symetexwn1_klados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "symetexwn1_klados";
	$fdata["GoodName"] = "symetexwn1_klados";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Κλάδος Συμμετέχων1"; 
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
	
		$fdata["strField"] = "symetexwn1_klados"; 
		$fdata["FullName"] = "ft_form_4.symetexwn1_klados";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn1_klados"] = $fdata;
//	symetexwn1_wres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "symetexwn1_wres";
	$fdata["GoodName"] = "symetexwn1_wres";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Ώρες Συμμετέχων1"; 
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
	
		$fdata["strField"] = "symetexwn1_wres"; 
		$fdata["FullName"] = "ft_form_4.symetexwn1_wres";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn1_wres"] = $fdata;
//	symetexwn1_again
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "symetexwn1_again";
	$fdata["GoodName"] = "symetexwn1_again";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Συμμετέχων1 ξανά"; 
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
	
		$fdata["strField"] = "symetexwn1_again"; 
		$fdata["FullName"] = "ft_form_4.symetexwn1_again";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn1_again"] = $fdata;
//	symetexwn1_epimorfosi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "symetexwn1_epimorfosi";
	$fdata["GoodName"] = "symetexwn1_epimorfosi";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Επιμόρφωση Συμμετέχων1"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "symetexwn1_epimorfosi"; 
		$fdata["FullName"] = "ft_form_4.symetexwn1_epimorfosi";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn1_epimorfosi"] = $fdata;
//	symetexwn2_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "symetexwn2_name";
	$fdata["GoodName"] = "symetexwn2_name";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Όνομα Συμμετέχων2"; 
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
	
		$fdata["strField"] = "symetexwn2_name"; 
		$fdata["FullName"] = "ft_form_4.symetexwn2_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn2_name"] = $fdata;
//	symetexwn2_amm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "symetexwn2_amm";
	$fdata["GoodName"] = "symetexwn2_amm";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "ΑΦΜ Συμμετέχων2"; 
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
	
		$fdata["strField"] = "symetexwn2_amm"; 
		$fdata["FullName"] = "ft_form_4.symetexwn2_amm";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn2_amm"] = $fdata;
//	symetexwn2_klados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "symetexwn2_klados";
	$fdata["GoodName"] = "symetexwn2_klados";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Κλάδος Συμμετέχων2"; 
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
	
		$fdata["strField"] = "symetexwn2_klados"; 
		$fdata["FullName"] = "ft_form_4.symetexwn2_klados";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn2_klados"] = $fdata;
//	symetexwn2_wres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "symetexwn2_wres";
	$fdata["GoodName"] = "symetexwn2_wres";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Ώρες Συμμετέχων2"; 
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
	
		$fdata["strField"] = "symetexwn2_wres"; 
		$fdata["FullName"] = "ft_form_4.symetexwn2_wres";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn2_wres"] = $fdata;
//	symetexwn2_again
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "symetexwn2_again";
	$fdata["GoodName"] = "symetexwn2_again";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Συμμετέχων2 ξανά"; 
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
	
		$fdata["strField"] = "symetexwn2_again"; 
		$fdata["FullName"] = "ft_form_4.symetexwn2_again";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn2_again"] = $fdata;
//	symetexwn2_epimorfosi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "symetexwn2_epimorfosi";
	$fdata["GoodName"] = "symetexwn2_epimorfosi";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Επιμόρφωση Συμμετέχων2"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "symetexwn2_epimorfosi"; 
		$fdata["FullName"] = "ft_form_4.symetexwn2_epimorfosi";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn2_epimorfosi"] = $fdata;
//	symetexwn3_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "symetexwn3_name";
	$fdata["GoodName"] = "symetexwn3_name";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Όνομα Συμμετέχων3"; 
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
	
		$fdata["strField"] = "symetexwn3_name"; 
		$fdata["FullName"] = "ft_form_4.symetexwn3_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn3_name"] = $fdata;
//	symetexwn3_amm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "symetexwn3_amm";
	$fdata["GoodName"] = "symetexwn3_amm";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "ΑΦΜ Συμμετέχων3"; 
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
	
		$fdata["strField"] = "symetexwn3_amm"; 
		$fdata["FullName"] = "ft_form_4.symetexwn3_amm";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn3_amm"] = $fdata;
//	symetexwn3_klados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "symetexwn3_klados";
	$fdata["GoodName"] = "symetexwn3_klados";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Κλάδος Συμμετέχων3"; 
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
	
		$fdata["strField"] = "symetexwn3_klados"; 
		$fdata["FullName"] = "ft_form_4.symetexwn3_klados";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn3_klados"] = $fdata;
//	symetexwn3_wres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "symetexwn3_wres";
	$fdata["GoodName"] = "symetexwn3_wres";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Ώρες Συμμετέχων3"; 
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
	
		$fdata["strField"] = "symetexwn3_wres"; 
		$fdata["FullName"] = "ft_form_4.symetexwn3_wres";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn3_wres"] = $fdata;
//	symetexwn3_again
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "symetexwn3_again";
	$fdata["GoodName"] = "symetexwn3_again";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Συμμετέχων3 ξανά"; 
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
	
		$fdata["strField"] = "symetexwn3_again"; 
		$fdata["FullName"] = "ft_form_4.symetexwn3_again";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn3_again"] = $fdata;
//	symetexwn3_epimorfosi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "symetexwn3_epimorfosi";
	$fdata["GoodName"] = "symetexwn3_epimorfosi";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Επιμόρφωση Συμμετέχων3"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "symetexwn3_epimorfosi"; 
		$fdata["FullName"] = "ft_form_4.symetexwn3_epimorfosi";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["symetexwn3_epimorfosi"] = $fdata;
//	mathites_synolo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "mathites_synolo";
	$fdata["GoodName"] = "mathites_synolo";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Σύνολο Μαθητές Ομάδας"; 
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
	
		$fdata["strField"] = "mathites_synolo"; 
		$fdata["FullName"] = "ft_form_4.mathites_synolo";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		$edata["inputStyle"] = " width:132px;";
	$edata["controlWidth"] = 132;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["mathites_synolo"] = $fdata;
//	agoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "agoria";
	$fdata["GoodName"] = "agoria";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Αγόρια"; 
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
	
		$fdata["strField"] = "agoria"; 
		$fdata["FullName"] = "ft_form_4.agoria";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		$edata["inputStyle"] = " width:92px;";
	$edata["controlWidth"] = 92;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["agoria"] = $fdata;
//	koritsia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "koritsia";
	$fdata["GoodName"] = "koritsia";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Κορίτσια"; 
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
	
		$fdata["strField"] = "koritsia"; 
		$fdata["FullName"] = "ft_form_4.koritsia";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["koritsia"] = $fdata;
//	amiges
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "amiges";
	$fdata["GoodName"] = "amiges";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Σύνθεση Ομάδας"; 
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
	
		$fdata["strField"] = "amiges"; 
		$fdata["FullName"] = "ft_form_4.amiges";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["amiges"] = $fdata;
//	meet_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "meet_day";
	$fdata["GoodName"] = "meet_day";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Ημέρα/ες Συνάντησης"; 
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
	
		$fdata["strField"] = "meet_day"; 
		$fdata["FullName"] = "ft_form_4.meet_day";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["meet_day"] = $fdata;
//	meet_hour
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "meet_hour";
	$fdata["GoodName"] = "meet_hour";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Ώρα/ες Συνάντησης"; 
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
	
		$fdata["strField"] = "meet_hour"; 
		$fdata["FullName"] = "ft_form_4.meet_hour";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["meet_hour"] = $fdata;
//	meet_place
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "meet_place";
	$fdata["GoodName"] = "meet_place";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Τόπος Συνάντησης"; 
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
	
		$fdata["strField"] = "meet_place"; 
		$fdata["FullName"] = "ft_form_4.meet_place";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["meet_place"] = $fdata;
//	arxeio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "arxeio";
	$fdata["GoodName"] = "arxeio";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Υπάρχει Αρχείο "; 
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
	
		$fdata["strField"] = "arxeio"; 
		$fdata["FullName"] = "ft_form_4.arxeio";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["arxeio"] = $fdata;
//	ypothemata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "ypothemata";
	$fdata["GoodName"] = "ypothemata";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Υποθέματα"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ypothemata"; 
		$fdata["FullName"] = "ft_form_4.ypothemata";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["ypothemata"] = $fdata;
//	stoxoi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "stoxoi";
	$fdata["GoodName"] = "stoxoi";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Στόχοι"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "stoxoi"; 
		$fdata["FullName"] = "ft_form_4.stoxoi";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["stoxoi"] = $fdata;
//	methodologia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "methodologia";
	$fdata["GoodName"] = "methodologia";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Μεθοδολογία"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "methodologia"; 
		$fdata["FullName"] = "ft_form_4.methodologia";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["methodologia"] = $fdata;
//	syndeseis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "syndeseis";
	$fdata["GoodName"] = "syndeseis";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Συνδέσεις"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "syndeseis"; 
		$fdata["FullName"] = "ft_form_4.syndeseis";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["syndeseis"] = $fdata;
//	month1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "month1";
	$fdata["GoodName"] = "month1";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Μήνας 1"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "month1"; 
		$fdata["FullName"] = "ft_form_4.month1";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["month1"] = $fdata;
//	month2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "month2";
	$fdata["GoodName"] = "month2";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Μήνας 2"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "month2"; 
		$fdata["FullName"] = "ft_form_4.month2";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["month2"] = $fdata;
//	month3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "month3";
	$fdata["GoodName"] = "month3";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Μήνας 3"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "month3"; 
		$fdata["FullName"] = "ft_form_4.month3";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["month3"] = $fdata;
//	month4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "month4";
	$fdata["GoodName"] = "month4";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Μήνας 4"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "month4"; 
		$fdata["FullName"] = "ft_form_4.month4";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["month4"] = $fdata;
//	month5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "month5";
	$fdata["GoodName"] = "month5";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Μήνας 5"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "month5"; 
		$fdata["FullName"] = "ft_form_4.month5";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["month5"] = $fdata;
//	episkepseis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "episkepseis";
	$fdata["GoodName"] = "episkepseis";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Αρ. Επισκέψεων"; 
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
	
		$fdata["strField"] = "episkepseis"; 
		$fdata["FullName"] = "ft_form_4.episkepseis";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["episkepseis"] = $fdata;
//	submission_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "submission_date";
	$fdata["GoodName"] = "submission_date";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Ημερομηνία Υποβολής Αιτησης"; 
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
	
		$fdata["strField"] = "submission_date"; 
		$fdata["FullName"] = "ft_form_4.submission_date";
	
		
		
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
	
		
		
	$tdataprosorines["submission_date"] = $fdata;
//	last_modified_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "last_modified_date";
	$fdata["GoodName"] = "last_modified_date";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Last Modified Date"; 
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
	
		$fdata["strField"] = "last_modified_date"; 
		$fdata["FullName"] = "ft_form_4.last_modified_date";
	
		
		
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
	
		
		
	$tdataprosorines["last_modified_date"] = $fdata;
//	ip_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "ip_address";
	$fdata["GoodName"] = "ip_address";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Ip Address"; 
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
	
		$fdata["strField"] = "ip_address"; 
		$fdata["FullName"] = "ft_form_4.ip_address";
	
		
		
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
			$edata["EditParams"].= " maxlength=15";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["ip_address"] = $fdata;
//	is_finalized
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "is_finalized";
	$fdata["GoodName"] = "is_finalized";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "Διακοπή Προγράμματος"; 
	$fdata["FieldType"] = 129;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "is_finalized"; 
		$fdata["FullName"] = "ft_form_4.is_finalized";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "yes";
	$edata["LookupValues"][] = "no";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["is_finalized"] = $fdata;
//	sch_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "sch_id";
	$fdata["GoodName"] = "sch_id";
	$fdata["ownerTable"] = "ft_form_4";
	$fdata["Label"] = "sch_id"; 
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
	
		$fdata["strField"] = "sch_id"; 
		$fdata["FullName"] = "ft_form_4.sch_id";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprosorines["sch_id"] = $fdata;
//	submited
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "submited";
	$fdata["GoodName"] = "submited";
	$fdata["ownerTable"] = "pschools";
	$fdata["Label"] = "Submited"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "submited"; 
		$fdata["FullName"] = "pschools.submited";
	
		
		
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
	
		
		
	$tdataprosorines["submited"] = $fdata;

	
$tables_data["prosorines"]=&$tdataprosorines;
$field_labels["prosorines"] = &$fieldLabelsprosorines;
$fieldToolTips["prosorines"] = &$fieldToolTipsprosorines;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["prosorines"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["prosorines"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_prosorines()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ft_form_4.submission_id,  ft_form_4.programa,  ft_form_4.`date`,  ft_form_4.ar_protocol,  ft_form_4.sxol_etos,  ft_form_4.dide_name,  ft_form_4.sch_name,  ft_form_4.tel_ergasias,  ft_form_4.dimos,  ft_form_4.fax,  ft_form_4.e_mail,  ft_form_4.sch_teachers,  ft_form_4.sch_students,  ft_form_4.dieythintis_name,  ft_form_4.klados_dieythinti,  ft_form_4.program_title,  ft_form_4.ar_praksis,  ft_form_4.date_praksis,  ft_form_4.sch_orario,  ft_form_4.ypeythinos_name,  ft_form_4.ypeythinos_amm,  ft_form_4.ypeythinos_klados,  ft_form_4.ypeythinos_wres,  ft_form_4.ypeythinos_again,  ft_form_4.ypeythinos_epimorfosi,  ft_form_4.symetexwn1_name,  ft_form_4.symetexwn1_amm,  ft_form_4.symetexwn1_klados,  ft_form_4.symetexwn1_wres,  ft_form_4.symetexwn1_again,  ft_form_4.symetexwn1_epimorfosi,  ft_form_4.symetexwn2_name,  ft_form_4.symetexwn2_amm,  ft_form_4.symetexwn2_klados,  ft_form_4.symetexwn2_wres,  ft_form_4.symetexwn2_again,  ft_form_4.symetexwn2_epimorfosi,  ft_form_4.symetexwn3_name,  ft_form_4.symetexwn3_amm,  ft_form_4.symetexwn3_klados,  ft_form_4.symetexwn3_wres,  ft_form_4.symetexwn3_again,  ft_form_4.symetexwn3_epimorfosi,  ft_form_4.mathites_synolo,  ft_form_4.agoria,  ft_form_4.koritsia,  ft_form_4.amiges,  ft_form_4.meet_day,  ft_form_4.meet_hour,  ft_form_4.meet_place,  ft_form_4.arxeio,  ft_form_4.ypothemata,  ft_form_4.stoxoi,  ft_form_4.methodologia,  ft_form_4.syndeseis,  ft_form_4.month1,  ft_form_4.month2,  ft_form_4.month3,  ft_form_4.month4,  ft_form_4.month5,  ft_form_4.episkepseis,  ft_form_4.submission_date,  ft_form_4.last_modified_date,  ft_form_4.ip_address,  ft_form_4.is_finalized,  ft_form_4.sch_id,  pschools.submited";
$proto0["m_strFrom"] = "FROM ft_form_4  INNER JOIN pschools ON pschools.sch_id = ft_form_4.sch_id";
$proto0["m_strWhere"] = "(pschools.submited =0)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "pschools.submited =0";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "submited",
	"m_strTable" => "pschools"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=0";
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
	"m_strName" => "submission_id",
	"m_strTable" => "ft_form_4"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "programa",
	"m_strTable" => "ft_form_4"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "ft_form_4"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ar_protocol",
	"m_strTable" => "ft_form_4"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "sxol_etos",
	"m_strTable" => "ft_form_4"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "dide_name",
	"m_strTable" => "ft_form_4"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_name",
	"m_strTable" => "ft_form_4"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "tel_ergasias",
	"m_strTable" => "ft_form_4"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "dimos",
	"m_strTable" => "ft_form_4"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "ft_form_4"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "e_mail",
	"m_strTable" => "ft_form_4"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_teachers",
	"m_strTable" => "ft_form_4"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_students",
	"m_strTable" => "ft_form_4"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "dieythintis_name",
	"m_strTable" => "ft_form_4"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "klados_dieythinti",
	"m_strTable" => "ft_form_4"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "program_title",
	"m_strTable" => "ft_form_4"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "ar_praksis",
	"m_strTable" => "ft_form_4"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "date_praksis",
	"m_strTable" => "ft_form_4"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_orario",
	"m_strTable" => "ft_form_4"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "ypeythinos_name",
	"m_strTable" => "ft_form_4"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "ypeythinos_amm",
	"m_strTable" => "ft_form_4"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "ypeythinos_klados",
	"m_strTable" => "ft_form_4"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "ypeythinos_wres",
	"m_strTable" => "ft_form_4"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "ypeythinos_again",
	"m_strTable" => "ft_form_4"
));

$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "ypeythinos_epimorfosi",
	"m_strTable" => "ft_form_4"
));

$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn1_name",
	"m_strTable" => "ft_form_4"
));

$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn1_amm",
	"m_strTable" => "ft_form_4"
));

$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn1_klados",
	"m_strTable" => "ft_form_4"
));

$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn1_wres",
	"m_strTable" => "ft_form_4"
));

$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn1_again",
	"m_strTable" => "ft_form_4"
));

$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn1_epimorfosi",
	"m_strTable" => "ft_form_4"
));

$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn2_name",
	"m_strTable" => "ft_form_4"
));

$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn2_amm",
	"m_strTable" => "ft_form_4"
));

$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn2_klados",
	"m_strTable" => "ft_form_4"
));

$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn2_wres",
	"m_strTable" => "ft_form_4"
));

$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn2_again",
	"m_strTable" => "ft_form_4"
));

$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn2_epimorfosi",
	"m_strTable" => "ft_form_4"
));

$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn3_name",
	"m_strTable" => "ft_form_4"
));

$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn3_amm",
	"m_strTable" => "ft_form_4"
));

$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn3_klados",
	"m_strTable" => "ft_form_4"
));

$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn3_wres",
	"m_strTable" => "ft_form_4"
));

$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn3_again",
	"m_strTable" => "ft_form_4"
));

$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn3_epimorfosi",
	"m_strTable" => "ft_form_4"
));

$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "mathites_synolo",
	"m_strTable" => "ft_form_4"
));

$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "agoria",
	"m_strTable" => "ft_form_4"
));

$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "koritsia",
	"m_strTable" => "ft_form_4"
));

$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "amiges",
	"m_strTable" => "ft_form_4"
));

$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "meet_day",
	"m_strTable" => "ft_form_4"
));

$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "meet_hour",
	"m_strTable" => "ft_form_4"
));

$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto0["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLField(array(
	"m_strName" => "meet_place",
	"m_strTable" => "ft_form_4"
));

$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "";
$obj = new SQLFieldListItem($proto103);

$proto0["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "arxeio",
	"m_strTable" => "ft_form_4"
));

$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto0["m_fieldlist"][]=$obj;
						$proto107=array();
			$obj = new SQLField(array(
	"m_strName" => "ypothemata",
	"m_strTable" => "ft_form_4"
));

$proto107["m_expr"]=$obj;
$proto107["m_alias"] = "";
$obj = new SQLFieldListItem($proto107);

$proto0["m_fieldlist"][]=$obj;
						$proto109=array();
			$obj = new SQLField(array(
	"m_strName" => "stoxoi",
	"m_strTable" => "ft_form_4"
));

$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "";
$obj = new SQLFieldListItem($proto109);

$proto0["m_fieldlist"][]=$obj;
						$proto111=array();
			$obj = new SQLField(array(
	"m_strName" => "methodologia",
	"m_strTable" => "ft_form_4"
));

$proto111["m_expr"]=$obj;
$proto111["m_alias"] = "";
$obj = new SQLFieldListItem($proto111);

$proto0["m_fieldlist"][]=$obj;
						$proto113=array();
			$obj = new SQLField(array(
	"m_strName" => "syndeseis",
	"m_strTable" => "ft_form_4"
));

$proto113["m_expr"]=$obj;
$proto113["m_alias"] = "";
$obj = new SQLFieldListItem($proto113);

$proto0["m_fieldlist"][]=$obj;
						$proto115=array();
			$obj = new SQLField(array(
	"m_strName" => "month1",
	"m_strTable" => "ft_form_4"
));

$proto115["m_expr"]=$obj;
$proto115["m_alias"] = "";
$obj = new SQLFieldListItem($proto115);

$proto0["m_fieldlist"][]=$obj;
						$proto117=array();
			$obj = new SQLField(array(
	"m_strName" => "month2",
	"m_strTable" => "ft_form_4"
));

$proto117["m_expr"]=$obj;
$proto117["m_alias"] = "";
$obj = new SQLFieldListItem($proto117);

$proto0["m_fieldlist"][]=$obj;
						$proto119=array();
			$obj = new SQLField(array(
	"m_strName" => "month3",
	"m_strTable" => "ft_form_4"
));

$proto119["m_expr"]=$obj;
$proto119["m_alias"] = "";
$obj = new SQLFieldListItem($proto119);

$proto0["m_fieldlist"][]=$obj;
						$proto121=array();
			$obj = new SQLField(array(
	"m_strName" => "month4",
	"m_strTable" => "ft_form_4"
));

$proto121["m_expr"]=$obj;
$proto121["m_alias"] = "";
$obj = new SQLFieldListItem($proto121);

$proto0["m_fieldlist"][]=$obj;
						$proto123=array();
			$obj = new SQLField(array(
	"m_strName" => "month5",
	"m_strTable" => "ft_form_4"
));

$proto123["m_expr"]=$obj;
$proto123["m_alias"] = "";
$obj = new SQLFieldListItem($proto123);

$proto0["m_fieldlist"][]=$obj;
						$proto125=array();
			$obj = new SQLField(array(
	"m_strName" => "episkepseis",
	"m_strTable" => "ft_form_4"
));

$proto125["m_expr"]=$obj;
$proto125["m_alias"] = "";
$obj = new SQLFieldListItem($proto125);

$proto0["m_fieldlist"][]=$obj;
						$proto127=array();
			$obj = new SQLField(array(
	"m_strName" => "submission_date",
	"m_strTable" => "ft_form_4"
));

$proto127["m_expr"]=$obj;
$proto127["m_alias"] = "";
$obj = new SQLFieldListItem($proto127);

$proto0["m_fieldlist"][]=$obj;
						$proto129=array();
			$obj = new SQLField(array(
	"m_strName" => "last_modified_date",
	"m_strTable" => "ft_form_4"
));

$proto129["m_expr"]=$obj;
$proto129["m_alias"] = "";
$obj = new SQLFieldListItem($proto129);

$proto0["m_fieldlist"][]=$obj;
						$proto131=array();
			$obj = new SQLField(array(
	"m_strName" => "ip_address",
	"m_strTable" => "ft_form_4"
));

$proto131["m_expr"]=$obj;
$proto131["m_alias"] = "";
$obj = new SQLFieldListItem($proto131);

$proto0["m_fieldlist"][]=$obj;
						$proto133=array();
			$obj = new SQLField(array(
	"m_strName" => "is_finalized",
	"m_strTable" => "ft_form_4"
));

$proto133["m_expr"]=$obj;
$proto133["m_alias"] = "";
$obj = new SQLFieldListItem($proto133);

$proto0["m_fieldlist"][]=$obj;
						$proto135=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_id",
	"m_strTable" => "ft_form_4"
));

$proto135["m_expr"]=$obj;
$proto135["m_alias"] = "";
$obj = new SQLFieldListItem($proto135);

$proto0["m_fieldlist"][]=$obj;
						$proto137=array();
			$obj = new SQLField(array(
	"m_strName" => "submited",
	"m_strTable" => "pschools"
));

$proto137["m_expr"]=$obj;
$proto137["m_alias"] = "";
$obj = new SQLFieldListItem($proto137);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto139=array();
$proto139["m_link"] = "SQLL_MAIN";
			$proto140=array();
$proto140["m_strName"] = "ft_form_4";
$proto140["m_columns"] = array();
$proto140["m_columns"][] = "submission_id";
$proto140["m_columns"][] = "programa";
$proto140["m_columns"][] = "date";
$proto140["m_columns"][] = "ar_protocol";
$proto140["m_columns"][] = "sxol_etos";
$proto140["m_columns"][] = "dide_name";
$proto140["m_columns"][] = "sch_name";
$proto140["m_columns"][] = "tel_ergasias";
$proto140["m_columns"][] = "dimos";
$proto140["m_columns"][] = "fax";
$proto140["m_columns"][] = "e_mail";
$proto140["m_columns"][] = "sch_teachers";
$proto140["m_columns"][] = "sch_students";
$proto140["m_columns"][] = "dieythintis_name";
$proto140["m_columns"][] = "klados_dieythinti";
$proto140["m_columns"][] = "program_title";
$proto140["m_columns"][] = "ar_praksis";
$proto140["m_columns"][] = "date_praksis";
$proto140["m_columns"][] = "sch_orario";
$proto140["m_columns"][] = "ypeythinos_name";
$proto140["m_columns"][] = "ypeythinos_amm";
$proto140["m_columns"][] = "ypeythinos_klados";
$proto140["m_columns"][] = "ypeythinos_wres";
$proto140["m_columns"][] = "ypeythinos_again";
$proto140["m_columns"][] = "ypeythinos_epimorfosi";
$proto140["m_columns"][] = "symetexwn1_name";
$proto140["m_columns"][] = "symetexwn1_amm";
$proto140["m_columns"][] = "symetexwn1_klados";
$proto140["m_columns"][] = "symetexwn1_wres";
$proto140["m_columns"][] = "symetexwn1_again";
$proto140["m_columns"][] = "symetexwn1_epimorfosi";
$proto140["m_columns"][] = "symetexwn2_name";
$proto140["m_columns"][] = "symetexwn2_amm";
$proto140["m_columns"][] = "symetexwn2_klados";
$proto140["m_columns"][] = "symetexwn2_wres";
$proto140["m_columns"][] = "symetexwn2_again";
$proto140["m_columns"][] = "symetexwn2_epimorfosi";
$proto140["m_columns"][] = "symetexwn3_name";
$proto140["m_columns"][] = "symetexwn3_amm";
$proto140["m_columns"][] = "symetexwn3_klados";
$proto140["m_columns"][] = "symetexwn3_wres";
$proto140["m_columns"][] = "symetexwn3_again";
$proto140["m_columns"][] = "symetexwn3_epimorfosi";
$proto140["m_columns"][] = "mathites_synolo";
$proto140["m_columns"][] = "agoria";
$proto140["m_columns"][] = "koritsia";
$proto140["m_columns"][] = "amiges";
$proto140["m_columns"][] = "meet_day";
$proto140["m_columns"][] = "meet_hour";
$proto140["m_columns"][] = "meet_place";
$proto140["m_columns"][] = "arxeio";
$proto140["m_columns"][] = "ypothemata";
$proto140["m_columns"][] = "stoxoi";
$proto140["m_columns"][] = "methodologia";
$proto140["m_columns"][] = "syndeseis";
$proto140["m_columns"][] = "month1";
$proto140["m_columns"][] = "month2";
$proto140["m_columns"][] = "month3";
$proto140["m_columns"][] = "month4";
$proto140["m_columns"][] = "month5";
$proto140["m_columns"][] = "episkepseis";
$proto140["m_columns"][] = "submission_date";
$proto140["m_columns"][] = "last_modified_date";
$proto140["m_columns"][] = "ip_address";
$proto140["m_columns"][] = "is_finalized";
$proto140["m_columns"][] = "sch_id";
$obj = new SQLTable($proto140);

$proto139["m_table"] = $obj;
$proto139["m_alias"] = "";
$proto141=array();
$proto141["m_sql"] = "";
$proto141["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto141["m_column"]=$obj;
$proto141["m_contained"] = array();
$proto141["m_strCase"] = "";
$proto141["m_havingmode"] = "0";
$proto141["m_inBrackets"] = "0";
$proto141["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto141);

$proto139["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto139);

$proto0["m_fromlist"][]=$obj;
												$proto143=array();
$proto143["m_link"] = "SQLL_INNERJOIN";
			$proto144=array();
$proto144["m_strName"] = "pschools";
$proto144["m_columns"] = array();
$proto144["m_columns"][] = "sch_id";
$proto144["m_columns"][] = "submited";
$proto144["m_columns"][] = "username";
$proto144["m_columns"][] = "password";
$proto144["m_columns"][] = "sch_code";
$proto144["m_columns"][] = "sch_perioxi";
$proto144["m_columns"][] = "sch_name";
$proto144["m_columns"][] = "sch_dimos";
$proto144["m_columns"][] = "sch_phone";
$proto144["m_columns"][] = "fax";
$proto144["m_columns"][] = "email";
$obj = new SQLTable($proto144);

$proto143["m_table"] = $obj;
$proto143["m_alias"] = "";
$proto145=array();
$proto145["m_sql"] = "pschools.sch_id = ft_form_4.sch_id";
$proto145["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sch_id",
	"m_strTable" => "pschools"
));

$proto145["m_column"]=$obj;
$proto145["m_contained"] = array();
$proto145["m_strCase"] = "= ft_form_4.sch_id";
$proto145["m_havingmode"] = "0";
$proto145["m_inBrackets"] = "0";
$proto145["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto145);

$proto143["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto143);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_prosorines = createSqlQuery_prosorines();
																																																																			$tdataprosorines[".sqlquery"] = $queryData_prosorines;

$tableEvents["prosorines"] = new eventsBase;
$tdataprosorines[".hasEvents"] = false;

$cipherer = new RunnerCipherer("prosorines");

?>