<?php
require_once(getabspath("classes/cipherer.php"));
$tdataFINAL_STOPED = array();
	$tdataFINAL_STOPED[".NumberOfChars"] = 80; 
	$tdataFINAL_STOPED[".ShortName"] = "FINAL_STOPED";
	$tdataFINAL_STOPED[".OwnerID"] = "";
	$tdataFINAL_STOPED[".OriginalTable"] = "ft_form_4";

//	field labels
$fieldLabelsFINAL_STOPED = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsFINAL_STOPED["English"] = array();
	$fieldToolTipsFINAL_STOPED["English"] = array();
	$fieldLabelsFINAL_STOPED["English"]["submission_id"] = "Αρ. Ηλ. Καταχώρησης";
	$fieldToolTipsFINAL_STOPED["English"]["submission_id"] = "";
	$fieldLabelsFINAL_STOPED["English"]["programa"] = "Τύπος Προγράματος";
	$fieldToolTipsFINAL_STOPED["English"]["programa"] = "";
	$fieldLabelsFINAL_STOPED["English"]["date"] = "Ημνια Πρωτλου Σχολείου";
	$fieldToolTipsFINAL_STOPED["English"]["date"] = "";
	$fieldLabelsFINAL_STOPED["English"]["ar_protocol"] = "Αρ. Πρωτλου Σχολείου";
	$fieldToolTipsFINAL_STOPED["English"]["ar_protocol"] = "";
	$fieldLabelsFINAL_STOPED["English"]["sxol_etos"] = "Σχολ. Ετος";
	$fieldToolTipsFINAL_STOPED["English"]["sxol_etos"] = "";
	$fieldLabelsFINAL_STOPED["English"]["dide_name"] = "ΔΔΕ Ονομα";
	$fieldToolTipsFINAL_STOPED["English"]["dide_name"] = "";
	$fieldLabelsFINAL_STOPED["English"]["sch_name"] = "Σχολείο";
	$fieldToolTipsFINAL_STOPED["English"]["sch_name"] = "";
	$fieldLabelsFINAL_STOPED["English"]["tel_ergasias"] = "Τηλ. Σχολείου";
	$fieldToolTipsFINAL_STOPED["English"]["tel_ergasias"] = "";
	$fieldLabelsFINAL_STOPED["English"]["dimos"] = "Δήμος Σχολείου";
	$fieldToolTipsFINAL_STOPED["English"]["dimos"] = "";
	$fieldLabelsFINAL_STOPED["English"]["fax"] = "Fax";
	$fieldToolTipsFINAL_STOPED["English"]["fax"] = "";
	$fieldLabelsFINAL_STOPED["English"]["e_mail"] = "E Mail";
	$fieldToolTipsFINAL_STOPED["English"]["e_mail"] = "";
	$fieldLabelsFINAL_STOPED["English"]["sch_teachers"] = "Αρ. Καθηγητών Σχολείου";
	$fieldToolTipsFINAL_STOPED["English"]["sch_teachers"] = "";
	$fieldLabelsFINAL_STOPED["English"]["sch_students"] = "Αρ. Μαθητών Σχολείου";
	$fieldToolTipsFINAL_STOPED["English"]["sch_students"] = "";
	$fieldLabelsFINAL_STOPED["English"]["dieythintis_name"] = "Ονομα Διευθυντή";
	$fieldToolTipsFINAL_STOPED["English"]["dieythintis_name"] = "";
	$fieldLabelsFINAL_STOPED["English"]["klados_dieythinti"] = "Κλάδος Διευθυντή";
	$fieldToolTipsFINAL_STOPED["English"]["klados_dieythinti"] = "";
	$fieldLabelsFINAL_STOPED["English"]["program_title"] = "Τίτλος Προγράμματος";
	$fieldToolTipsFINAL_STOPED["English"]["program_title"] = "";
	$fieldLabelsFINAL_STOPED["English"]["ar_praksis"] = "Αρ. Πράξης Συλλόγου";
	$fieldToolTipsFINAL_STOPED["English"]["ar_praksis"] = "";
	$fieldLabelsFINAL_STOPED["English"]["date_praksis"] = "Ημνια Πράξης Συλλόγου";
	$fieldToolTipsFINAL_STOPED["English"]["date_praksis"] = "";
	$fieldLabelsFINAL_STOPED["English"]["sch_orario"] = "Ωράριο Σχολείου";
	$fieldToolTipsFINAL_STOPED["English"]["sch_orario"] = "";
	$fieldLabelsFINAL_STOPED["English"]["ypeythinos_name"] = "Όνομα Υπευθύνου";
	$fieldToolTipsFINAL_STOPED["English"]["ypeythinos_name"] = "";
	$fieldLabelsFINAL_STOPED["English"]["ypeythinos_amm"] = "ΑΦΜ Υπευθύνου";
	$fieldToolTipsFINAL_STOPED["English"]["ypeythinos_amm"] = "";
	$fieldLabelsFINAL_STOPED["English"]["ypeythinos_klados"] = "Κλάδος Υπευθύνου";
	$fieldToolTipsFINAL_STOPED["English"]["ypeythinos_klados"] = "";
	$fieldLabelsFINAL_STOPED["English"]["ypeythinos_wres"] = "Ώρες Υπευθύνου";
	$fieldToolTipsFINAL_STOPED["English"]["ypeythinos_wres"] = "";
	$fieldLabelsFINAL_STOPED["English"]["ypeythinos_again"] = "Υπεύθυνος ξανά";
	$fieldToolTipsFINAL_STOPED["English"]["ypeythinos_again"] = "";
	$fieldLabelsFINAL_STOPED["English"]["ypeythinos_epimorfosi"] = "Επιμόρφωση Υπευθύνου";
	$fieldToolTipsFINAL_STOPED["English"]["ypeythinos_epimorfosi"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn1_name"] = "Όνομα Συμμετέχων1";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn1_name"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn1_amm"] = "ΑΦΜ Συμμετέχων1";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn1_amm"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn1_klados"] = "Κλάδος Συμμετέχων1";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn1_klados"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn1_wres"] = "Ώρες Συμμετέχων1";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn1_wres"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn1_again"] = "Συμμετέχων1 ξανά";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn1_again"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn1_epimorfosi"] = "Επιμόρφωση Συμμετέχων1";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn1_epimorfosi"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn2_name"] = "Όνομα Συμμετέχων2";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn2_name"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn2_amm"] = "ΑΦΜ Συμμετέχων2";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn2_amm"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn2_klados"] = "Κλάδος Συμμετέχων2";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn2_klados"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn2_wres"] = "Ώρες Συμμετέχων2";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn2_wres"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn2_again"] = "Συμμετέχων2 ξανά";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn2_again"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn2_epimorfosi"] = "Επιμόρφωση Συμμετέχων2";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn2_epimorfosi"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn3_name"] = "Όνομα Συμμετέχων3";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn3_name"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn3_amm"] = "ΑΦΜ Συμμετέχων3";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn3_amm"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn3_klados"] = "Κλάδος Συμμετέχων3";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn3_klados"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn3_wres"] = "Ώρες Συμμετέχων3";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn3_wres"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn3_again"] = "Συμμετέχων3 ξανά";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn3_again"] = "";
	$fieldLabelsFINAL_STOPED["English"]["symetexwn3_epimorfosi"] = "Επιμόρφωση Συμμετέχων3";
	$fieldToolTipsFINAL_STOPED["English"]["symetexwn3_epimorfosi"] = "";
	$fieldLabelsFINAL_STOPED["English"]["mathites_synolo"] = "Σύνολο Μαθητές Ομάδας";
	$fieldToolTipsFINAL_STOPED["English"]["mathites_synolo"] = "";
	$fieldLabelsFINAL_STOPED["English"]["agoria"] = "Αγόρια";
	$fieldToolTipsFINAL_STOPED["English"]["agoria"] = "";
	$fieldLabelsFINAL_STOPED["English"]["koritsia"] = "Κορίτσια";
	$fieldToolTipsFINAL_STOPED["English"]["koritsia"] = "";
	$fieldLabelsFINAL_STOPED["English"]["amiges"] = "Σύνθεση Ομάδας";
	$fieldToolTipsFINAL_STOPED["English"]["amiges"] = "";
	$fieldLabelsFINAL_STOPED["English"]["meet_day"] = "Ημέρα/ες Συνάντησης";
	$fieldToolTipsFINAL_STOPED["English"]["meet_day"] = "";
	$fieldLabelsFINAL_STOPED["English"]["meet_hour"] = "Ώρα/ες Συνάντησης";
	$fieldToolTipsFINAL_STOPED["English"]["meet_hour"] = "";
	$fieldLabelsFINAL_STOPED["English"]["meet_place"] = "Τόπος Συνάντησης";
	$fieldToolTipsFINAL_STOPED["English"]["meet_place"] = "";
	$fieldLabelsFINAL_STOPED["English"]["arxeio"] = "Υπάρχει Αρχείο ";
	$fieldToolTipsFINAL_STOPED["English"]["arxeio"] = "";
	$fieldLabelsFINAL_STOPED["English"]["ypothemata"] = "Υποθέματα";
	$fieldToolTipsFINAL_STOPED["English"]["ypothemata"] = "";
	$fieldLabelsFINAL_STOPED["English"]["stoxoi"] = "Στόχοι";
	$fieldToolTipsFINAL_STOPED["English"]["stoxoi"] = "";
	$fieldLabelsFINAL_STOPED["English"]["methodologia"] = "Μεθοδολογία";
	$fieldToolTipsFINAL_STOPED["English"]["methodologia"] = "";
	$fieldLabelsFINAL_STOPED["English"]["syndeseis"] = "Συνδέσεις";
	$fieldToolTipsFINAL_STOPED["English"]["syndeseis"] = "";
	$fieldLabelsFINAL_STOPED["English"]["month1"] = "Μήνας 1";
	$fieldToolTipsFINAL_STOPED["English"]["month1"] = "";
	$fieldLabelsFINAL_STOPED["English"]["month2"] = "Μήνας 2";
	$fieldToolTipsFINAL_STOPED["English"]["month2"] = "";
	$fieldLabelsFINAL_STOPED["English"]["month3"] = "Μήνας 3";
	$fieldToolTipsFINAL_STOPED["English"]["month3"] = "";
	$fieldLabelsFINAL_STOPED["English"]["month4"] = "Μήνας 4";
	$fieldToolTipsFINAL_STOPED["English"]["month4"] = "";
	$fieldLabelsFINAL_STOPED["English"]["month5"] = "Μήνας 5";
	$fieldToolTipsFINAL_STOPED["English"]["month5"] = "";
	$fieldLabelsFINAL_STOPED["English"]["episkepseis"] = "Αρ. Επισκέψεων";
	$fieldToolTipsFINAL_STOPED["English"]["episkepseis"] = "";
	$fieldLabelsFINAL_STOPED["English"]["submission_date"] = "Ημερομηνία Υποβολής Αιτησης";
	$fieldToolTipsFINAL_STOPED["English"]["submission_date"] = "";
	$fieldLabelsFINAL_STOPED["English"]["last_modified_date"] = "Last Modified Date";
	$fieldToolTipsFINAL_STOPED["English"]["last_modified_date"] = "";
	$fieldLabelsFINAL_STOPED["English"]["ip_address"] = "Ip Address";
	$fieldToolTipsFINAL_STOPED["English"]["ip_address"] = "";
	$fieldLabelsFINAL_STOPED["English"]["is_finalized"] = "Διακοπή Προγράμματος";
	$fieldToolTipsFINAL_STOPED["English"]["is_finalized"] = "";
	$fieldLabelsFINAL_STOPED["English"]["sch_id"] = "sch_id";
	$fieldToolTipsFINAL_STOPED["English"]["sch_id"] = "";
	$fieldLabelsFINAL_STOPED["English"]["submited"] = "Submited";
	$fieldToolTipsFINAL_STOPED["English"]["submited"] = "";
	if (count($fieldToolTipsFINAL_STOPED["English"]))
		$tdataFINAL_STOPED[".isUseToolTips"] = true;
}
	
	
	$tdataFINAL_STOPED[".NCSearch"] = true;



$tdataFINAL_STOPED[".shortTableName"] = "FINAL_STOPED";
$tdataFINAL_STOPED[".nSecOptions"] = 0;
$tdataFINAL_STOPED[".recsPerRowList"] = 1;
$tdataFINAL_STOPED[".mainTableOwnerID"] = "";
$tdataFINAL_STOPED[".moveNext"] = 1;
$tdataFINAL_STOPED[".nType"] = 1;

$tdataFINAL_STOPED[".strOriginalTableName"] = "ft_form_4";




$tdataFINAL_STOPED[".showAddInPopup"] = false;

$tdataFINAL_STOPED[".showEditInPopup"] = false;

$tdataFINAL_STOPED[".showViewInPopup"] = false;

$tdataFINAL_STOPED[".fieldsForRegister"] = array();
	
$tdataFINAL_STOPED[".listAjax"] = false;

	$tdataFINAL_STOPED[".audit"] = false;

	$tdataFINAL_STOPED[".locking"] = false;

$tdataFINAL_STOPED[".listIcons"] = true;
$tdataFINAL_STOPED[".view"] = true;

$tdataFINAL_STOPED[".exportTo"] = true;

$tdataFINAL_STOPED[".printFriendly"] = true;


$tdataFINAL_STOPED[".showSimpleSearchOptions"] = false;

$tdataFINAL_STOPED[".showSearchPanel"] = true;

if (isMobile())
	$tdataFINAL_STOPED[".isUseAjaxSuggest"] = false;
else 
	$tdataFINAL_STOPED[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataFINAL_STOPED[".addPageEvents"] = false;

// use timepicker for search panel
$tdataFINAL_STOPED[".isUseTimeForSearch"] = false;




$tdataFINAL_STOPED[".allSearchFields"] = array();

$tdataFINAL_STOPED[".allSearchFields"][] = "submission_id";
$tdataFINAL_STOPED[".allSearchFields"][] = "programa";
$tdataFINAL_STOPED[".allSearchFields"][] = "date";
$tdataFINAL_STOPED[".allSearchFields"][] = "ar_protocol";
$tdataFINAL_STOPED[".allSearchFields"][] = "sxol_etos";
$tdataFINAL_STOPED[".allSearchFields"][] = "dide_name";
$tdataFINAL_STOPED[".allSearchFields"][] = "sch_name";
$tdataFINAL_STOPED[".allSearchFields"][] = "tel_ergasias";
$tdataFINAL_STOPED[".allSearchFields"][] = "dimos";
$tdataFINAL_STOPED[".allSearchFields"][] = "fax";
$tdataFINAL_STOPED[".allSearchFields"][] = "e_mail";
$tdataFINAL_STOPED[".allSearchFields"][] = "sch_teachers";
$tdataFINAL_STOPED[".allSearchFields"][] = "sch_students";
$tdataFINAL_STOPED[".allSearchFields"][] = "dieythintis_name";
$tdataFINAL_STOPED[".allSearchFields"][] = "klados_dieythinti";
$tdataFINAL_STOPED[".allSearchFields"][] = "program_title";
$tdataFINAL_STOPED[".allSearchFields"][] = "ar_praksis";
$tdataFINAL_STOPED[".allSearchFields"][] = "date_praksis";
$tdataFINAL_STOPED[".allSearchFields"][] = "sch_orario";
$tdataFINAL_STOPED[".allSearchFields"][] = "ypeythinos_name";
$tdataFINAL_STOPED[".allSearchFields"][] = "ypeythinos_amm";
$tdataFINAL_STOPED[".allSearchFields"][] = "ypeythinos_klados";
$tdataFINAL_STOPED[".allSearchFields"][] = "ypeythinos_wres";
$tdataFINAL_STOPED[".allSearchFields"][] = "ypeythinos_again";
$tdataFINAL_STOPED[".allSearchFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn1_name";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn1_amm";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn1_klados";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn1_wres";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn1_again";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn2_name";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn2_amm";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn2_klados";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn2_wres";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn2_again";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn3_name";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn3_amm";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn3_klados";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn3_wres";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn3_again";
$tdataFINAL_STOPED[".allSearchFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_STOPED[".allSearchFields"][] = "mathites_synolo";
$tdataFINAL_STOPED[".allSearchFields"][] = "agoria";
$tdataFINAL_STOPED[".allSearchFields"][] = "koritsia";
$tdataFINAL_STOPED[".allSearchFields"][] = "amiges";
$tdataFINAL_STOPED[".allSearchFields"][] = "meet_day";
$tdataFINAL_STOPED[".allSearchFields"][] = "meet_hour";
$tdataFINAL_STOPED[".allSearchFields"][] = "meet_place";
$tdataFINAL_STOPED[".allSearchFields"][] = "arxeio";
$tdataFINAL_STOPED[".allSearchFields"][] = "ypothemata";
$tdataFINAL_STOPED[".allSearchFields"][] = "stoxoi";
$tdataFINAL_STOPED[".allSearchFields"][] = "methodologia";
$tdataFINAL_STOPED[".allSearchFields"][] = "syndeseis";
$tdataFINAL_STOPED[".allSearchFields"][] = "month1";
$tdataFINAL_STOPED[".allSearchFields"][] = "month2";
$tdataFINAL_STOPED[".allSearchFields"][] = "month3";
$tdataFINAL_STOPED[".allSearchFields"][] = "month4";
$tdataFINAL_STOPED[".allSearchFields"][] = "month5";
$tdataFINAL_STOPED[".allSearchFields"][] = "episkepseis";
$tdataFINAL_STOPED[".allSearchFields"][] = "submission_date";
$tdataFINAL_STOPED[".allSearchFields"][] = "last_modified_date";
$tdataFINAL_STOPED[".allSearchFields"][] = "ip_address";
$tdataFINAL_STOPED[".allSearchFields"][] = "is_finalized";
$tdataFINAL_STOPED[".allSearchFields"][] = "sch_id";
$tdataFINAL_STOPED[".allSearchFields"][] = "submited";

$tdataFINAL_STOPED[".googleLikeFields"][] = "submission_id";
$tdataFINAL_STOPED[".googleLikeFields"][] = "programa";
$tdataFINAL_STOPED[".googleLikeFields"][] = "date";
$tdataFINAL_STOPED[".googleLikeFields"][] = "ar_protocol";
$tdataFINAL_STOPED[".googleLikeFields"][] = "sxol_etos";
$tdataFINAL_STOPED[".googleLikeFields"][] = "dide_name";
$tdataFINAL_STOPED[".googleLikeFields"][] = "sch_name";
$tdataFINAL_STOPED[".googleLikeFields"][] = "tel_ergasias";
$tdataFINAL_STOPED[".googleLikeFields"][] = "dimos";
$tdataFINAL_STOPED[".googleLikeFields"][] = "fax";
$tdataFINAL_STOPED[".googleLikeFields"][] = "e_mail";
$tdataFINAL_STOPED[".googleLikeFields"][] = "sch_teachers";
$tdataFINAL_STOPED[".googleLikeFields"][] = "sch_students";
$tdataFINAL_STOPED[".googleLikeFields"][] = "dieythintis_name";
$tdataFINAL_STOPED[".googleLikeFields"][] = "klados_dieythinti";
$tdataFINAL_STOPED[".googleLikeFields"][] = "program_title";
$tdataFINAL_STOPED[".googleLikeFields"][] = "ar_praksis";
$tdataFINAL_STOPED[".googleLikeFields"][] = "date_praksis";
$tdataFINAL_STOPED[".googleLikeFields"][] = "sch_orario";
$tdataFINAL_STOPED[".googleLikeFields"][] = "ypeythinos_name";
$tdataFINAL_STOPED[".googleLikeFields"][] = "ypeythinos_amm";
$tdataFINAL_STOPED[".googleLikeFields"][] = "ypeythinos_klados";
$tdataFINAL_STOPED[".googleLikeFields"][] = "ypeythinos_wres";
$tdataFINAL_STOPED[".googleLikeFields"][] = "ypeythinos_again";
$tdataFINAL_STOPED[".googleLikeFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn1_name";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn1_amm";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn1_klados";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn1_wres";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn1_again";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn2_name";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn2_amm";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn2_klados";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn2_wres";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn2_again";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn3_name";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn3_amm";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn3_klados";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn3_wres";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn3_again";
$tdataFINAL_STOPED[".googleLikeFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_STOPED[".googleLikeFields"][] = "mathites_synolo";
$tdataFINAL_STOPED[".googleLikeFields"][] = "agoria";
$tdataFINAL_STOPED[".googleLikeFields"][] = "koritsia";
$tdataFINAL_STOPED[".googleLikeFields"][] = "amiges";
$tdataFINAL_STOPED[".googleLikeFields"][] = "meet_day";
$tdataFINAL_STOPED[".googleLikeFields"][] = "meet_hour";
$tdataFINAL_STOPED[".googleLikeFields"][] = "meet_place";
$tdataFINAL_STOPED[".googleLikeFields"][] = "arxeio";
$tdataFINAL_STOPED[".googleLikeFields"][] = "ypothemata";
$tdataFINAL_STOPED[".googleLikeFields"][] = "stoxoi";
$tdataFINAL_STOPED[".googleLikeFields"][] = "methodologia";
$tdataFINAL_STOPED[".googleLikeFields"][] = "syndeseis";
$tdataFINAL_STOPED[".googleLikeFields"][] = "month1";
$tdataFINAL_STOPED[".googleLikeFields"][] = "month2";
$tdataFINAL_STOPED[".googleLikeFields"][] = "month3";
$tdataFINAL_STOPED[".googleLikeFields"][] = "month4";
$tdataFINAL_STOPED[".googleLikeFields"][] = "month5";
$tdataFINAL_STOPED[".googleLikeFields"][] = "episkepseis";
$tdataFINAL_STOPED[".googleLikeFields"][] = "submission_date";
$tdataFINAL_STOPED[".googleLikeFields"][] = "last_modified_date";
$tdataFINAL_STOPED[".googleLikeFields"][] = "ip_address";
$tdataFINAL_STOPED[".googleLikeFields"][] = "is_finalized";
$tdataFINAL_STOPED[".googleLikeFields"][] = "sch_id";
$tdataFINAL_STOPED[".googleLikeFields"][] = "submited";

$tdataFINAL_STOPED[".panelSearchFields"][] = "submission_id";
$tdataFINAL_STOPED[".panelSearchFields"][] = "programa";
$tdataFINAL_STOPED[".panelSearchFields"][] = "date";
$tdataFINAL_STOPED[".panelSearchFields"][] = "ar_protocol";
$tdataFINAL_STOPED[".panelSearchFields"][] = "sxol_etos";
$tdataFINAL_STOPED[".panelSearchFields"][] = "dide_name";
$tdataFINAL_STOPED[".panelSearchFields"][] = "sch_name";
$tdataFINAL_STOPED[".panelSearchFields"][] = "tel_ergasias";
$tdataFINAL_STOPED[".panelSearchFields"][] = "dimos";
$tdataFINAL_STOPED[".panelSearchFields"][] = "fax";
$tdataFINAL_STOPED[".panelSearchFields"][] = "e_mail";
$tdataFINAL_STOPED[".panelSearchFields"][] = "sch_teachers";
$tdataFINAL_STOPED[".panelSearchFields"][] = "sch_students";
$tdataFINAL_STOPED[".panelSearchFields"][] = "dieythintis_name";
$tdataFINAL_STOPED[".panelSearchFields"][] = "klados_dieythinti";
$tdataFINAL_STOPED[".panelSearchFields"][] = "program_title";
$tdataFINAL_STOPED[".panelSearchFields"][] = "ar_praksis";
$tdataFINAL_STOPED[".panelSearchFields"][] = "date_praksis";
$tdataFINAL_STOPED[".panelSearchFields"][] = "sch_orario";
$tdataFINAL_STOPED[".panelSearchFields"][] = "ypeythinos_name";
$tdataFINAL_STOPED[".panelSearchFields"][] = "ypeythinos_amm";
$tdataFINAL_STOPED[".panelSearchFields"][] = "ypeythinos_klados";
$tdataFINAL_STOPED[".panelSearchFields"][] = "ypeythinos_wres";
$tdataFINAL_STOPED[".panelSearchFields"][] = "ypeythinos_again";
$tdataFINAL_STOPED[".panelSearchFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn1_name";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn1_amm";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn1_klados";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn1_wres";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn1_again";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn2_name";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn2_amm";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn2_klados";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn2_wres";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn2_again";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn3_name";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn3_amm";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn3_klados";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn3_wres";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn3_again";
$tdataFINAL_STOPED[".panelSearchFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_STOPED[".panelSearchFields"][] = "mathites_synolo";
$tdataFINAL_STOPED[".panelSearchFields"][] = "agoria";
$tdataFINAL_STOPED[".panelSearchFields"][] = "koritsia";
$tdataFINAL_STOPED[".panelSearchFields"][] = "amiges";
$tdataFINAL_STOPED[".panelSearchFields"][] = "meet_day";
$tdataFINAL_STOPED[".panelSearchFields"][] = "meet_hour";
$tdataFINAL_STOPED[".panelSearchFields"][] = "meet_place";
$tdataFINAL_STOPED[".panelSearchFields"][] = "arxeio";
$tdataFINAL_STOPED[".panelSearchFields"][] = "ypothemata";
$tdataFINAL_STOPED[".panelSearchFields"][] = "stoxoi";
$tdataFINAL_STOPED[".panelSearchFields"][] = "methodologia";
$tdataFINAL_STOPED[".panelSearchFields"][] = "syndeseis";
$tdataFINAL_STOPED[".panelSearchFields"][] = "month1";
$tdataFINAL_STOPED[".panelSearchFields"][] = "month2";
$tdataFINAL_STOPED[".panelSearchFields"][] = "month3";
$tdataFINAL_STOPED[".panelSearchFields"][] = "month4";
$tdataFINAL_STOPED[".panelSearchFields"][] = "month5";
$tdataFINAL_STOPED[".panelSearchFields"][] = "episkepseis";
$tdataFINAL_STOPED[".panelSearchFields"][] = "submission_date";
$tdataFINAL_STOPED[".panelSearchFields"][] = "last_modified_date";
$tdataFINAL_STOPED[".panelSearchFields"][] = "ip_address";
$tdataFINAL_STOPED[".panelSearchFields"][] = "is_finalized";
$tdataFINAL_STOPED[".panelSearchFields"][] = "sch_id";

$tdataFINAL_STOPED[".advSearchFields"][] = "submission_id";
$tdataFINAL_STOPED[".advSearchFields"][] = "programa";
$tdataFINAL_STOPED[".advSearchFields"][] = "date";
$tdataFINAL_STOPED[".advSearchFields"][] = "ar_protocol";
$tdataFINAL_STOPED[".advSearchFields"][] = "sxol_etos";
$tdataFINAL_STOPED[".advSearchFields"][] = "dide_name";
$tdataFINAL_STOPED[".advSearchFields"][] = "sch_name";
$tdataFINAL_STOPED[".advSearchFields"][] = "tel_ergasias";
$tdataFINAL_STOPED[".advSearchFields"][] = "dimos";
$tdataFINAL_STOPED[".advSearchFields"][] = "fax";
$tdataFINAL_STOPED[".advSearchFields"][] = "e_mail";
$tdataFINAL_STOPED[".advSearchFields"][] = "sch_teachers";
$tdataFINAL_STOPED[".advSearchFields"][] = "sch_students";
$tdataFINAL_STOPED[".advSearchFields"][] = "dieythintis_name";
$tdataFINAL_STOPED[".advSearchFields"][] = "klados_dieythinti";
$tdataFINAL_STOPED[".advSearchFields"][] = "program_title";
$tdataFINAL_STOPED[".advSearchFields"][] = "ar_praksis";
$tdataFINAL_STOPED[".advSearchFields"][] = "date_praksis";
$tdataFINAL_STOPED[".advSearchFields"][] = "sch_orario";
$tdataFINAL_STOPED[".advSearchFields"][] = "ypeythinos_name";
$tdataFINAL_STOPED[".advSearchFields"][] = "ypeythinos_amm";
$tdataFINAL_STOPED[".advSearchFields"][] = "ypeythinos_klados";
$tdataFINAL_STOPED[".advSearchFields"][] = "ypeythinos_wres";
$tdataFINAL_STOPED[".advSearchFields"][] = "ypeythinos_again";
$tdataFINAL_STOPED[".advSearchFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn1_name";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn1_amm";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn1_klados";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn1_wres";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn1_again";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn2_name";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn2_amm";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn2_klados";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn2_wres";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn2_again";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn3_name";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn3_amm";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn3_klados";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn3_wres";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn3_again";
$tdataFINAL_STOPED[".advSearchFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_STOPED[".advSearchFields"][] = "mathites_synolo";
$tdataFINAL_STOPED[".advSearchFields"][] = "agoria";
$tdataFINAL_STOPED[".advSearchFields"][] = "koritsia";
$tdataFINAL_STOPED[".advSearchFields"][] = "amiges";
$tdataFINAL_STOPED[".advSearchFields"][] = "meet_day";
$tdataFINAL_STOPED[".advSearchFields"][] = "meet_hour";
$tdataFINAL_STOPED[".advSearchFields"][] = "meet_place";
$tdataFINAL_STOPED[".advSearchFields"][] = "arxeio";
$tdataFINAL_STOPED[".advSearchFields"][] = "ypothemata";
$tdataFINAL_STOPED[".advSearchFields"][] = "stoxoi";
$tdataFINAL_STOPED[".advSearchFields"][] = "methodologia";
$tdataFINAL_STOPED[".advSearchFields"][] = "syndeseis";
$tdataFINAL_STOPED[".advSearchFields"][] = "month1";
$tdataFINAL_STOPED[".advSearchFields"][] = "month2";
$tdataFINAL_STOPED[".advSearchFields"][] = "month3";
$tdataFINAL_STOPED[".advSearchFields"][] = "month4";
$tdataFINAL_STOPED[".advSearchFields"][] = "month5";
$tdataFINAL_STOPED[".advSearchFields"][] = "episkepseis";
$tdataFINAL_STOPED[".advSearchFields"][] = "submission_date";
$tdataFINAL_STOPED[".advSearchFields"][] = "last_modified_date";
$tdataFINAL_STOPED[".advSearchFields"][] = "ip_address";
$tdataFINAL_STOPED[".advSearchFields"][] = "is_finalized";
$tdataFINAL_STOPED[".advSearchFields"][] = "sch_id";
$tdataFINAL_STOPED[".advSearchFields"][] = "submited";

$tdataFINAL_STOPED[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataFINAL_STOPED[".pageSize"] = 300;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataFINAL_STOPED[".strOrderBy"] = $tstrOrderBy;

$tdataFINAL_STOPED[".orderindexes"] = array();

$tdataFINAL_STOPED[".sqlHead"] = "SELECT ft_form_4.submission_id,  ft_form_4.programa,  ft_form_4.`date`,  ft_form_4.ar_protocol,  ft_form_4.sxol_etos,  ft_form_4.dide_name,  ft_form_4.sch_name,  ft_form_4.tel_ergasias,  ft_form_4.dimos,  ft_form_4.fax,  ft_form_4.e_mail,  ft_form_4.sch_teachers,  ft_form_4.sch_students,  ft_form_4.dieythintis_name,  ft_form_4.klados_dieythinti,  ft_form_4.program_title,  ft_form_4.ar_praksis,  ft_form_4.date_praksis,  ft_form_4.sch_orario,  ft_form_4.ypeythinos_name,  ft_form_4.ypeythinos_amm,  ft_form_4.ypeythinos_klados,  ft_form_4.ypeythinos_wres,  ft_form_4.ypeythinos_again,  ft_form_4.ypeythinos_epimorfosi,  ft_form_4.symetexwn1_name,  ft_form_4.symetexwn1_amm,  ft_form_4.symetexwn1_klados,  ft_form_4.symetexwn1_wres,  ft_form_4.symetexwn1_again,  ft_form_4.symetexwn1_epimorfosi,  ft_form_4.symetexwn2_name,  ft_form_4.symetexwn2_amm,  ft_form_4.symetexwn2_klados,  ft_form_4.symetexwn2_wres,  ft_form_4.symetexwn2_again,  ft_form_4.symetexwn2_epimorfosi,  ft_form_4.symetexwn3_name,  ft_form_4.symetexwn3_amm,  ft_form_4.symetexwn3_klados,  ft_form_4.symetexwn3_wres,  ft_form_4.symetexwn3_again,  ft_form_4.symetexwn3_epimorfosi,  ft_form_4.mathites_synolo,  ft_form_4.agoria,  ft_form_4.koritsia,  ft_form_4.amiges,  ft_form_4.meet_day,  ft_form_4.meet_hour,  ft_form_4.meet_place,  ft_form_4.arxeio,  ft_form_4.ypothemata,  ft_form_4.stoxoi,  ft_form_4.methodologia,  ft_form_4.syndeseis,  ft_form_4.month1,  ft_form_4.month2,  ft_form_4.month3,  ft_form_4.month4,  ft_form_4.month5,  ft_form_4.episkepseis,  ft_form_4.submission_date,  ft_form_4.last_modified_date,  ft_form_4.ip_address,  ft_form_4.is_finalized,  ft_form_4.sch_id,  pschools.submited";
$tdataFINAL_STOPED[".sqlFrom"] = "FROM ft_form_4  INNER JOIN pschools ON pschools.sch_id = ft_form_4.sch_id";
$tdataFINAL_STOPED[".sqlWhereExpr"] = "(ft_form_4.is_finalized =\"yes\") AND (pschools.submited =1)";
$tdataFINAL_STOPED[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataFINAL_STOPED[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataFINAL_STOPED[".arrGroupsPerPage"] = $arrGPP;

$tableKeysFINAL_STOPED = array();
$tableKeysFINAL_STOPED[] = "submission_id";
$tdataFINAL_STOPED[".Keys"] = $tableKeysFINAL_STOPED;

$tdataFINAL_STOPED[".listFields"] = array();
$tdataFINAL_STOPED[".listFields"][] = "submited";
$tdataFINAL_STOPED[".listFields"][] = "submission_id";
$tdataFINAL_STOPED[".listFields"][] = "programa";
$tdataFINAL_STOPED[".listFields"][] = "date";
$tdataFINAL_STOPED[".listFields"][] = "ar_protocol";
$tdataFINAL_STOPED[".listFields"][] = "sxol_etos";
$tdataFINAL_STOPED[".listFields"][] = "dide_name";
$tdataFINAL_STOPED[".listFields"][] = "sch_name";
$tdataFINAL_STOPED[".listFields"][] = "tel_ergasias";
$tdataFINAL_STOPED[".listFields"][] = "dimos";
$tdataFINAL_STOPED[".listFields"][] = "fax";
$tdataFINAL_STOPED[".listFields"][] = "e_mail";
$tdataFINAL_STOPED[".listFields"][] = "sch_teachers";
$tdataFINAL_STOPED[".listFields"][] = "sch_students";
$tdataFINAL_STOPED[".listFields"][] = "dieythintis_name";
$tdataFINAL_STOPED[".listFields"][] = "klados_dieythinti";
$tdataFINAL_STOPED[".listFields"][] = "program_title";
$tdataFINAL_STOPED[".listFields"][] = "ar_praksis";
$tdataFINAL_STOPED[".listFields"][] = "date_praksis";
$tdataFINAL_STOPED[".listFields"][] = "sch_orario";
$tdataFINAL_STOPED[".listFields"][] = "ypeythinos_name";
$tdataFINAL_STOPED[".listFields"][] = "ypeythinos_amm";
$tdataFINAL_STOPED[".listFields"][] = "ypeythinos_klados";
$tdataFINAL_STOPED[".listFields"][] = "ypeythinos_wres";
$tdataFINAL_STOPED[".listFields"][] = "ypeythinos_again";
$tdataFINAL_STOPED[".listFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn1_name";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn1_amm";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn1_klados";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn1_wres";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn1_again";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn2_name";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn2_amm";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn2_klados";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn2_wres";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn2_again";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn3_name";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn3_amm";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn3_klados";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn3_wres";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn3_again";
$tdataFINAL_STOPED[".listFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_STOPED[".listFields"][] = "mathites_synolo";
$tdataFINAL_STOPED[".listFields"][] = "agoria";
$tdataFINAL_STOPED[".listFields"][] = "koritsia";
$tdataFINAL_STOPED[".listFields"][] = "amiges";
$tdataFINAL_STOPED[".listFields"][] = "meet_day";
$tdataFINAL_STOPED[".listFields"][] = "meet_hour";
$tdataFINAL_STOPED[".listFields"][] = "meet_place";
$tdataFINAL_STOPED[".listFields"][] = "arxeio";
$tdataFINAL_STOPED[".listFields"][] = "ypothemata";
$tdataFINAL_STOPED[".listFields"][] = "stoxoi";
$tdataFINAL_STOPED[".listFields"][] = "methodologia";
$tdataFINAL_STOPED[".listFields"][] = "syndeseis";
$tdataFINAL_STOPED[".listFields"][] = "month1";
$tdataFINAL_STOPED[".listFields"][] = "month2";
$tdataFINAL_STOPED[".listFields"][] = "month3";
$tdataFINAL_STOPED[".listFields"][] = "month4";
$tdataFINAL_STOPED[".listFields"][] = "month5";
$tdataFINAL_STOPED[".listFields"][] = "episkepseis";
$tdataFINAL_STOPED[".listFields"][] = "submission_date";
$tdataFINAL_STOPED[".listFields"][] = "last_modified_date";
$tdataFINAL_STOPED[".listFields"][] = "ip_address";
$tdataFINAL_STOPED[".listFields"][] = "is_finalized";
$tdataFINAL_STOPED[".listFields"][] = "sch_id";

$tdataFINAL_STOPED[".viewFields"] = array();
$tdataFINAL_STOPED[".viewFields"][] = "submission_id";
$tdataFINAL_STOPED[".viewFields"][] = "programa";
$tdataFINAL_STOPED[".viewFields"][] = "date";
$tdataFINAL_STOPED[".viewFields"][] = "ar_protocol";
$tdataFINAL_STOPED[".viewFields"][] = "sxol_etos";
$tdataFINAL_STOPED[".viewFields"][] = "dide_name";
$tdataFINAL_STOPED[".viewFields"][] = "sch_name";
$tdataFINAL_STOPED[".viewFields"][] = "tel_ergasias";
$tdataFINAL_STOPED[".viewFields"][] = "dimos";
$tdataFINAL_STOPED[".viewFields"][] = "fax";
$tdataFINAL_STOPED[".viewFields"][] = "e_mail";
$tdataFINAL_STOPED[".viewFields"][] = "sch_teachers";
$tdataFINAL_STOPED[".viewFields"][] = "sch_students";
$tdataFINAL_STOPED[".viewFields"][] = "dieythintis_name";
$tdataFINAL_STOPED[".viewFields"][] = "klados_dieythinti";
$tdataFINAL_STOPED[".viewFields"][] = "program_title";
$tdataFINAL_STOPED[".viewFields"][] = "ar_praksis";
$tdataFINAL_STOPED[".viewFields"][] = "date_praksis";
$tdataFINAL_STOPED[".viewFields"][] = "sch_orario";
$tdataFINAL_STOPED[".viewFields"][] = "ypeythinos_name";
$tdataFINAL_STOPED[".viewFields"][] = "ypeythinos_amm";
$tdataFINAL_STOPED[".viewFields"][] = "ypeythinos_klados";
$tdataFINAL_STOPED[".viewFields"][] = "ypeythinos_wres";
$tdataFINAL_STOPED[".viewFields"][] = "ypeythinos_again";
$tdataFINAL_STOPED[".viewFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn1_name";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn1_amm";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn1_klados";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn1_wres";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn1_again";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn2_name";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn2_amm";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn2_klados";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn2_wres";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn2_again";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn3_name";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn3_amm";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn3_klados";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn3_wres";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn3_again";
$tdataFINAL_STOPED[".viewFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_STOPED[".viewFields"][] = "mathites_synolo";
$tdataFINAL_STOPED[".viewFields"][] = "agoria";
$tdataFINAL_STOPED[".viewFields"][] = "koritsia";
$tdataFINAL_STOPED[".viewFields"][] = "amiges";
$tdataFINAL_STOPED[".viewFields"][] = "meet_day";
$tdataFINAL_STOPED[".viewFields"][] = "meet_hour";
$tdataFINAL_STOPED[".viewFields"][] = "meet_place";
$tdataFINAL_STOPED[".viewFields"][] = "arxeio";
$tdataFINAL_STOPED[".viewFields"][] = "ypothemata";
$tdataFINAL_STOPED[".viewFields"][] = "stoxoi";
$tdataFINAL_STOPED[".viewFields"][] = "methodologia";
$tdataFINAL_STOPED[".viewFields"][] = "syndeseis";
$tdataFINAL_STOPED[".viewFields"][] = "month1";
$tdataFINAL_STOPED[".viewFields"][] = "month2";
$tdataFINAL_STOPED[".viewFields"][] = "month3";
$tdataFINAL_STOPED[".viewFields"][] = "month4";
$tdataFINAL_STOPED[".viewFields"][] = "month5";
$tdataFINAL_STOPED[".viewFields"][] = "episkepseis";
$tdataFINAL_STOPED[".viewFields"][] = "submission_date";
$tdataFINAL_STOPED[".viewFields"][] = "last_modified_date";
$tdataFINAL_STOPED[".viewFields"][] = "ip_address";
$tdataFINAL_STOPED[".viewFields"][] = "is_finalized";
$tdataFINAL_STOPED[".viewFields"][] = "sch_id";
$tdataFINAL_STOPED[".viewFields"][] = "submited";

$tdataFINAL_STOPED[".addFields"] = array();
$tdataFINAL_STOPED[".addFields"][] = "submission_id";
$tdataFINAL_STOPED[".addFields"][] = "programa";
$tdataFINAL_STOPED[".addFields"][] = "date";
$tdataFINAL_STOPED[".addFields"][] = "ar_protocol";
$tdataFINAL_STOPED[".addFields"][] = "sxol_etos";
$tdataFINAL_STOPED[".addFields"][] = "dide_name";
$tdataFINAL_STOPED[".addFields"][] = "sch_name";
$tdataFINAL_STOPED[".addFields"][] = "tel_ergasias";
$tdataFINAL_STOPED[".addFields"][] = "dimos";
$tdataFINAL_STOPED[".addFields"][] = "fax";
$tdataFINAL_STOPED[".addFields"][] = "e_mail";
$tdataFINAL_STOPED[".addFields"][] = "sch_teachers";
$tdataFINAL_STOPED[".addFields"][] = "sch_students";
$tdataFINAL_STOPED[".addFields"][] = "dieythintis_name";
$tdataFINAL_STOPED[".addFields"][] = "klados_dieythinti";
$tdataFINAL_STOPED[".addFields"][] = "program_title";
$tdataFINAL_STOPED[".addFields"][] = "ar_praksis";
$tdataFINAL_STOPED[".addFields"][] = "date_praksis";
$tdataFINAL_STOPED[".addFields"][] = "sch_orario";
$tdataFINAL_STOPED[".addFields"][] = "ypeythinos_name";
$tdataFINAL_STOPED[".addFields"][] = "ypeythinos_amm";
$tdataFINAL_STOPED[".addFields"][] = "ypeythinos_klados";
$tdataFINAL_STOPED[".addFields"][] = "ypeythinos_wres";
$tdataFINAL_STOPED[".addFields"][] = "ypeythinos_again";
$tdataFINAL_STOPED[".addFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn1_name";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn1_amm";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn1_klados";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn1_wres";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn1_again";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn2_name";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn2_amm";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn2_klados";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn2_wres";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn2_again";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn3_name";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn3_amm";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn3_klados";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn3_wres";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn3_again";
$tdataFINAL_STOPED[".addFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_STOPED[".addFields"][] = "mathites_synolo";
$tdataFINAL_STOPED[".addFields"][] = "agoria";
$tdataFINAL_STOPED[".addFields"][] = "koritsia";
$tdataFINAL_STOPED[".addFields"][] = "amiges";
$tdataFINAL_STOPED[".addFields"][] = "meet_day";
$tdataFINAL_STOPED[".addFields"][] = "meet_hour";
$tdataFINAL_STOPED[".addFields"][] = "meet_place";
$tdataFINAL_STOPED[".addFields"][] = "arxeio";
$tdataFINAL_STOPED[".addFields"][] = "ypothemata";
$tdataFINAL_STOPED[".addFields"][] = "stoxoi";
$tdataFINAL_STOPED[".addFields"][] = "methodologia";
$tdataFINAL_STOPED[".addFields"][] = "syndeseis";
$tdataFINAL_STOPED[".addFields"][] = "month1";
$tdataFINAL_STOPED[".addFields"][] = "month2";
$tdataFINAL_STOPED[".addFields"][] = "month3";
$tdataFINAL_STOPED[".addFields"][] = "month4";
$tdataFINAL_STOPED[".addFields"][] = "month5";
$tdataFINAL_STOPED[".addFields"][] = "episkepseis";
$tdataFINAL_STOPED[".addFields"][] = "submission_date";
$tdataFINAL_STOPED[".addFields"][] = "last_modified_date";
$tdataFINAL_STOPED[".addFields"][] = "ip_address";
$tdataFINAL_STOPED[".addFields"][] = "is_finalized";
$tdataFINAL_STOPED[".addFields"][] = "sch_id";

$tdataFINAL_STOPED[".inlineAddFields"] = array();
$tdataFINAL_STOPED[".inlineAddFields"][] = "submited";
$tdataFINAL_STOPED[".inlineAddFields"][] = "submission_id";
$tdataFINAL_STOPED[".inlineAddFields"][] = "programa";
$tdataFINAL_STOPED[".inlineAddFields"][] = "date";
$tdataFINAL_STOPED[".inlineAddFields"][] = "ar_protocol";
$tdataFINAL_STOPED[".inlineAddFields"][] = "sxol_etos";
$tdataFINAL_STOPED[".inlineAddFields"][] = "dide_name";
$tdataFINAL_STOPED[".inlineAddFields"][] = "sch_name";
$tdataFINAL_STOPED[".inlineAddFields"][] = "tel_ergasias";
$tdataFINAL_STOPED[".inlineAddFields"][] = "dimos";
$tdataFINAL_STOPED[".inlineAddFields"][] = "fax";
$tdataFINAL_STOPED[".inlineAddFields"][] = "e_mail";
$tdataFINAL_STOPED[".inlineAddFields"][] = "sch_teachers";
$tdataFINAL_STOPED[".inlineAddFields"][] = "sch_students";
$tdataFINAL_STOPED[".inlineAddFields"][] = "dieythintis_name";
$tdataFINAL_STOPED[".inlineAddFields"][] = "klados_dieythinti";
$tdataFINAL_STOPED[".inlineAddFields"][] = "program_title";
$tdataFINAL_STOPED[".inlineAddFields"][] = "ar_praksis";
$tdataFINAL_STOPED[".inlineAddFields"][] = "date_praksis";
$tdataFINAL_STOPED[".inlineAddFields"][] = "sch_orario";
$tdataFINAL_STOPED[".inlineAddFields"][] = "ypeythinos_name";
$tdataFINAL_STOPED[".inlineAddFields"][] = "ypeythinos_amm";
$tdataFINAL_STOPED[".inlineAddFields"][] = "ypeythinos_klados";
$tdataFINAL_STOPED[".inlineAddFields"][] = "ypeythinos_wres";
$tdataFINAL_STOPED[".inlineAddFields"][] = "ypeythinos_again";
$tdataFINAL_STOPED[".inlineAddFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn1_name";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn1_amm";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn1_klados";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn1_wres";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn1_again";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn2_name";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn2_amm";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn2_klados";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn2_wres";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn2_again";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn3_name";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn3_amm";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn3_klados";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn3_wres";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn3_again";
$tdataFINAL_STOPED[".inlineAddFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_STOPED[".inlineAddFields"][] = "mathites_synolo";
$tdataFINAL_STOPED[".inlineAddFields"][] = "agoria";
$tdataFINAL_STOPED[".inlineAddFields"][] = "koritsia";
$tdataFINAL_STOPED[".inlineAddFields"][] = "amiges";
$tdataFINAL_STOPED[".inlineAddFields"][] = "meet_day";
$tdataFINAL_STOPED[".inlineAddFields"][] = "meet_hour";
$tdataFINAL_STOPED[".inlineAddFields"][] = "meet_place";
$tdataFINAL_STOPED[".inlineAddFields"][] = "arxeio";
$tdataFINAL_STOPED[".inlineAddFields"][] = "ypothemata";
$tdataFINAL_STOPED[".inlineAddFields"][] = "stoxoi";
$tdataFINAL_STOPED[".inlineAddFields"][] = "methodologia";
$tdataFINAL_STOPED[".inlineAddFields"][] = "syndeseis";
$tdataFINAL_STOPED[".inlineAddFields"][] = "month1";
$tdataFINAL_STOPED[".inlineAddFields"][] = "month2";
$tdataFINAL_STOPED[".inlineAddFields"][] = "month3";
$tdataFINAL_STOPED[".inlineAddFields"][] = "month4";
$tdataFINAL_STOPED[".inlineAddFields"][] = "month5";
$tdataFINAL_STOPED[".inlineAddFields"][] = "episkepseis";
$tdataFINAL_STOPED[".inlineAddFields"][] = "submission_date";
$tdataFINAL_STOPED[".inlineAddFields"][] = "last_modified_date";
$tdataFINAL_STOPED[".inlineAddFields"][] = "ip_address";
$tdataFINAL_STOPED[".inlineAddFields"][] = "is_finalized";
$tdataFINAL_STOPED[".inlineAddFields"][] = "sch_id";

$tdataFINAL_STOPED[".editFields"] = array();
$tdataFINAL_STOPED[".editFields"][] = "programa";
$tdataFINAL_STOPED[".editFields"][] = "date";
$tdataFINAL_STOPED[".editFields"][] = "ar_protocol";
$tdataFINAL_STOPED[".editFields"][] = "sxol_etos";
$tdataFINAL_STOPED[".editFields"][] = "dide_name";
$tdataFINAL_STOPED[".editFields"][] = "sch_name";
$tdataFINAL_STOPED[".editFields"][] = "tel_ergasias";
$tdataFINAL_STOPED[".editFields"][] = "dimos";
$tdataFINAL_STOPED[".editFields"][] = "fax";
$tdataFINAL_STOPED[".editFields"][] = "e_mail";
$tdataFINAL_STOPED[".editFields"][] = "sch_teachers";
$tdataFINAL_STOPED[".editFields"][] = "sch_students";
$tdataFINAL_STOPED[".editFields"][] = "dieythintis_name";
$tdataFINAL_STOPED[".editFields"][] = "klados_dieythinti";
$tdataFINAL_STOPED[".editFields"][] = "program_title";
$tdataFINAL_STOPED[".editFields"][] = "ar_praksis";
$tdataFINAL_STOPED[".editFields"][] = "date_praksis";
$tdataFINAL_STOPED[".editFields"][] = "sch_orario";
$tdataFINAL_STOPED[".editFields"][] = "ypeythinos_name";
$tdataFINAL_STOPED[".editFields"][] = "ypeythinos_amm";
$tdataFINAL_STOPED[".editFields"][] = "ypeythinos_klados";
$tdataFINAL_STOPED[".editFields"][] = "ypeythinos_wres";
$tdataFINAL_STOPED[".editFields"][] = "ypeythinos_again";
$tdataFINAL_STOPED[".editFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn1_name";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn1_amm";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn1_klados";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn1_wres";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn1_again";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn2_name";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn2_amm";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn2_klados";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn2_wres";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn2_again";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn3_name";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn3_amm";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn3_klados";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn3_wres";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn3_again";
$tdataFINAL_STOPED[".editFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_STOPED[".editFields"][] = "mathites_synolo";
$tdataFINAL_STOPED[".editFields"][] = "agoria";
$tdataFINAL_STOPED[".editFields"][] = "koritsia";
$tdataFINAL_STOPED[".editFields"][] = "amiges";
$tdataFINAL_STOPED[".editFields"][] = "meet_day";
$tdataFINAL_STOPED[".editFields"][] = "meet_hour";
$tdataFINAL_STOPED[".editFields"][] = "meet_place";
$tdataFINAL_STOPED[".editFields"][] = "arxeio";
$tdataFINAL_STOPED[".editFields"][] = "ypothemata";
$tdataFINAL_STOPED[".editFields"][] = "stoxoi";
$tdataFINAL_STOPED[".editFields"][] = "methodologia";
$tdataFINAL_STOPED[".editFields"][] = "syndeseis";
$tdataFINAL_STOPED[".editFields"][] = "month1";
$tdataFINAL_STOPED[".editFields"][] = "month2";
$tdataFINAL_STOPED[".editFields"][] = "month3";
$tdataFINAL_STOPED[".editFields"][] = "month4";
$tdataFINAL_STOPED[".editFields"][] = "month5";
$tdataFINAL_STOPED[".editFields"][] = "episkepseis";
$tdataFINAL_STOPED[".editFields"][] = "submission_date";
$tdataFINAL_STOPED[".editFields"][] = "last_modified_date";
$tdataFINAL_STOPED[".editFields"][] = "ip_address";
$tdataFINAL_STOPED[".editFields"][] = "is_finalized";
$tdataFINAL_STOPED[".editFields"][] = "sch_id";
$tdataFINAL_STOPED[".editFields"][] = "submission_id";

$tdataFINAL_STOPED[".inlineEditFields"] = array();
$tdataFINAL_STOPED[".inlineEditFields"][] = "submited";
$tdataFINAL_STOPED[".inlineEditFields"][] = "submission_id";
$tdataFINAL_STOPED[".inlineEditFields"][] = "programa";
$tdataFINAL_STOPED[".inlineEditFields"][] = "date";
$tdataFINAL_STOPED[".inlineEditFields"][] = "ar_protocol";
$tdataFINAL_STOPED[".inlineEditFields"][] = "sxol_etos";
$tdataFINAL_STOPED[".inlineEditFields"][] = "dide_name";
$tdataFINAL_STOPED[".inlineEditFields"][] = "sch_name";
$tdataFINAL_STOPED[".inlineEditFields"][] = "tel_ergasias";
$tdataFINAL_STOPED[".inlineEditFields"][] = "dimos";
$tdataFINAL_STOPED[".inlineEditFields"][] = "fax";
$tdataFINAL_STOPED[".inlineEditFields"][] = "e_mail";
$tdataFINAL_STOPED[".inlineEditFields"][] = "sch_teachers";
$tdataFINAL_STOPED[".inlineEditFields"][] = "sch_students";
$tdataFINAL_STOPED[".inlineEditFields"][] = "dieythintis_name";
$tdataFINAL_STOPED[".inlineEditFields"][] = "klados_dieythinti";
$tdataFINAL_STOPED[".inlineEditFields"][] = "program_title";
$tdataFINAL_STOPED[".inlineEditFields"][] = "ar_praksis";
$tdataFINAL_STOPED[".inlineEditFields"][] = "date_praksis";
$tdataFINAL_STOPED[".inlineEditFields"][] = "sch_orario";
$tdataFINAL_STOPED[".inlineEditFields"][] = "ypeythinos_name";
$tdataFINAL_STOPED[".inlineEditFields"][] = "ypeythinos_amm";
$tdataFINAL_STOPED[".inlineEditFields"][] = "ypeythinos_klados";
$tdataFINAL_STOPED[".inlineEditFields"][] = "ypeythinos_wres";
$tdataFINAL_STOPED[".inlineEditFields"][] = "ypeythinos_again";
$tdataFINAL_STOPED[".inlineEditFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn1_name";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn1_amm";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn1_klados";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn1_wres";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn1_again";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn2_name";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn2_amm";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn2_klados";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn2_wres";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn2_again";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn3_name";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn3_amm";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn3_klados";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn3_wres";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn3_again";
$tdataFINAL_STOPED[".inlineEditFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_STOPED[".inlineEditFields"][] = "mathites_synolo";
$tdataFINAL_STOPED[".inlineEditFields"][] = "agoria";
$tdataFINAL_STOPED[".inlineEditFields"][] = "koritsia";
$tdataFINAL_STOPED[".inlineEditFields"][] = "amiges";
$tdataFINAL_STOPED[".inlineEditFields"][] = "meet_day";
$tdataFINAL_STOPED[".inlineEditFields"][] = "meet_hour";
$tdataFINAL_STOPED[".inlineEditFields"][] = "meet_place";
$tdataFINAL_STOPED[".inlineEditFields"][] = "arxeio";
$tdataFINAL_STOPED[".inlineEditFields"][] = "ypothemata";
$tdataFINAL_STOPED[".inlineEditFields"][] = "stoxoi";
$tdataFINAL_STOPED[".inlineEditFields"][] = "methodologia";
$tdataFINAL_STOPED[".inlineEditFields"][] = "syndeseis";
$tdataFINAL_STOPED[".inlineEditFields"][] = "month1";
$tdataFINAL_STOPED[".inlineEditFields"][] = "month2";
$tdataFINAL_STOPED[".inlineEditFields"][] = "month3";
$tdataFINAL_STOPED[".inlineEditFields"][] = "month4";
$tdataFINAL_STOPED[".inlineEditFields"][] = "month5";
$tdataFINAL_STOPED[".inlineEditFields"][] = "episkepseis";
$tdataFINAL_STOPED[".inlineEditFields"][] = "submission_date";
$tdataFINAL_STOPED[".inlineEditFields"][] = "last_modified_date";
$tdataFINAL_STOPED[".inlineEditFields"][] = "ip_address";
$tdataFINAL_STOPED[".inlineEditFields"][] = "is_finalized";
$tdataFINAL_STOPED[".inlineEditFields"][] = "sch_id";

$tdataFINAL_STOPED[".exportFields"] = array();
$tdataFINAL_STOPED[".exportFields"][] = "submission_id";
$tdataFINAL_STOPED[".exportFields"][] = "programa";
$tdataFINAL_STOPED[".exportFields"][] = "date";
$tdataFINAL_STOPED[".exportFields"][] = "ar_protocol";
$tdataFINAL_STOPED[".exportFields"][] = "sxol_etos";
$tdataFINAL_STOPED[".exportFields"][] = "dide_name";
$tdataFINAL_STOPED[".exportFields"][] = "sch_name";
$tdataFINAL_STOPED[".exportFields"][] = "tel_ergasias";
$tdataFINAL_STOPED[".exportFields"][] = "dimos";
$tdataFINAL_STOPED[".exportFields"][] = "fax";
$tdataFINAL_STOPED[".exportFields"][] = "e_mail";
$tdataFINAL_STOPED[".exportFields"][] = "sch_teachers";
$tdataFINAL_STOPED[".exportFields"][] = "sch_students";
$tdataFINAL_STOPED[".exportFields"][] = "dieythintis_name";
$tdataFINAL_STOPED[".exportFields"][] = "klados_dieythinti";
$tdataFINAL_STOPED[".exportFields"][] = "program_title";
$tdataFINAL_STOPED[".exportFields"][] = "ar_praksis";
$tdataFINAL_STOPED[".exportFields"][] = "date_praksis";
$tdataFINAL_STOPED[".exportFields"][] = "sch_orario";
$tdataFINAL_STOPED[".exportFields"][] = "ypeythinos_name";
$tdataFINAL_STOPED[".exportFields"][] = "ypeythinos_amm";
$tdataFINAL_STOPED[".exportFields"][] = "ypeythinos_klados";
$tdataFINAL_STOPED[".exportFields"][] = "ypeythinos_wres";
$tdataFINAL_STOPED[".exportFields"][] = "ypeythinos_again";
$tdataFINAL_STOPED[".exportFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn1_name";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn1_amm";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn1_klados";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn1_wres";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn1_again";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn2_name";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn2_amm";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn2_klados";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn2_wres";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn2_again";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn3_name";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn3_amm";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn3_klados";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn3_wres";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn3_again";
$tdataFINAL_STOPED[".exportFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_STOPED[".exportFields"][] = "mathites_synolo";
$tdataFINAL_STOPED[".exportFields"][] = "agoria";
$tdataFINAL_STOPED[".exportFields"][] = "koritsia";
$tdataFINAL_STOPED[".exportFields"][] = "amiges";
$tdataFINAL_STOPED[".exportFields"][] = "meet_day";
$tdataFINAL_STOPED[".exportFields"][] = "meet_hour";
$tdataFINAL_STOPED[".exportFields"][] = "meet_place";
$tdataFINAL_STOPED[".exportFields"][] = "arxeio";
$tdataFINAL_STOPED[".exportFields"][] = "ypothemata";
$tdataFINAL_STOPED[".exportFields"][] = "stoxoi";
$tdataFINAL_STOPED[".exportFields"][] = "methodologia";
$tdataFINAL_STOPED[".exportFields"][] = "syndeseis";
$tdataFINAL_STOPED[".exportFields"][] = "month1";
$tdataFINAL_STOPED[".exportFields"][] = "month2";
$tdataFINAL_STOPED[".exportFields"][] = "month3";
$tdataFINAL_STOPED[".exportFields"][] = "month4";
$tdataFINAL_STOPED[".exportFields"][] = "month5";
$tdataFINAL_STOPED[".exportFields"][] = "episkepseis";
$tdataFINAL_STOPED[".exportFields"][] = "submission_date";
$tdataFINAL_STOPED[".exportFields"][] = "last_modified_date";
$tdataFINAL_STOPED[".exportFields"][] = "ip_address";
$tdataFINAL_STOPED[".exportFields"][] = "is_finalized";
$tdataFINAL_STOPED[".exportFields"][] = "sch_id";
$tdataFINAL_STOPED[".exportFields"][] = "submited";

$tdataFINAL_STOPED[".printFields"] = array();
$tdataFINAL_STOPED[".printFields"][] = "submited";
$tdataFINAL_STOPED[".printFields"][] = "submission_id";
$tdataFINAL_STOPED[".printFields"][] = "programa";
$tdataFINAL_STOPED[".printFields"][] = "date";
$tdataFINAL_STOPED[".printFields"][] = "ar_protocol";
$tdataFINAL_STOPED[".printFields"][] = "sxol_etos";
$tdataFINAL_STOPED[".printFields"][] = "dide_name";
$tdataFINAL_STOPED[".printFields"][] = "sch_name";
$tdataFINAL_STOPED[".printFields"][] = "tel_ergasias";
$tdataFINAL_STOPED[".printFields"][] = "dimos";
$tdataFINAL_STOPED[".printFields"][] = "fax";
$tdataFINAL_STOPED[".printFields"][] = "e_mail";
$tdataFINAL_STOPED[".printFields"][] = "sch_teachers";
$tdataFINAL_STOPED[".printFields"][] = "sch_students";
$tdataFINAL_STOPED[".printFields"][] = "dieythintis_name";
$tdataFINAL_STOPED[".printFields"][] = "klados_dieythinti";
$tdataFINAL_STOPED[".printFields"][] = "program_title";
$tdataFINAL_STOPED[".printFields"][] = "ar_praksis";
$tdataFINAL_STOPED[".printFields"][] = "date_praksis";
$tdataFINAL_STOPED[".printFields"][] = "sch_orario";
$tdataFINAL_STOPED[".printFields"][] = "ypeythinos_name";
$tdataFINAL_STOPED[".printFields"][] = "ypeythinos_amm";
$tdataFINAL_STOPED[".printFields"][] = "ypeythinos_klados";
$tdataFINAL_STOPED[".printFields"][] = "ypeythinos_wres";
$tdataFINAL_STOPED[".printFields"][] = "ypeythinos_again";
$tdataFINAL_STOPED[".printFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn1_name";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn1_amm";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn1_klados";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn1_wres";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn1_again";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn2_name";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn2_amm";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn2_klados";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn2_wres";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn2_again";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn3_name";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn3_amm";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn3_klados";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn3_wres";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn3_again";
$tdataFINAL_STOPED[".printFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_STOPED[".printFields"][] = "mathites_synolo";
$tdataFINAL_STOPED[".printFields"][] = "agoria";
$tdataFINAL_STOPED[".printFields"][] = "koritsia";
$tdataFINAL_STOPED[".printFields"][] = "amiges";
$tdataFINAL_STOPED[".printFields"][] = "meet_day";
$tdataFINAL_STOPED[".printFields"][] = "meet_hour";
$tdataFINAL_STOPED[".printFields"][] = "meet_place";
$tdataFINAL_STOPED[".printFields"][] = "arxeio";
$tdataFINAL_STOPED[".printFields"][] = "ypothemata";
$tdataFINAL_STOPED[".printFields"][] = "stoxoi";
$tdataFINAL_STOPED[".printFields"][] = "methodologia";
$tdataFINAL_STOPED[".printFields"][] = "syndeseis";
$tdataFINAL_STOPED[".printFields"][] = "month1";
$tdataFINAL_STOPED[".printFields"][] = "month2";
$tdataFINAL_STOPED[".printFields"][] = "month3";
$tdataFINAL_STOPED[".printFields"][] = "month4";
$tdataFINAL_STOPED[".printFields"][] = "month5";
$tdataFINAL_STOPED[".printFields"][] = "episkepseis";
$tdataFINAL_STOPED[".printFields"][] = "submission_date";
$tdataFINAL_STOPED[".printFields"][] = "last_modified_date";
$tdataFINAL_STOPED[".printFields"][] = "ip_address";
$tdataFINAL_STOPED[".printFields"][] = "is_finalized";
$tdataFINAL_STOPED[".printFields"][] = "sch_id";

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
	
		
		
	$tdataFINAL_STOPED["submission_id"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["programa"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["date"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["ar_protocol"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["sxol_etos"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["dide_name"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["sch_name"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["tel_ergasias"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["dimos"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["fax"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["e_mail"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["sch_teachers"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["sch_students"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["dieythintis_name"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["klados_dieythinti"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["program_title"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["ar_praksis"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["date_praksis"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["sch_orario"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["ypeythinos_name"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["ypeythinos_amm"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["ypeythinos_klados"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["ypeythinos_wres"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["ypeythinos_again"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["ypeythinos_epimorfosi"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn1_name"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn1_amm"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn1_klados"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn1_wres"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn1_again"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn1_epimorfosi"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn2_name"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn2_amm"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn2_klados"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn2_wres"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn2_again"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn2_epimorfosi"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn3_name"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn3_amm"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn3_klados"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn3_wres"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn3_again"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["symetexwn3_epimorfosi"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["mathites_synolo"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["agoria"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["koritsia"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["amiges"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["meet_day"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["meet_hour"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["meet_place"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["arxeio"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["ypothemata"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["stoxoi"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["methodologia"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["syndeseis"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["month1"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["month2"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["month3"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["month4"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["month5"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["episkepseis"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["submission_date"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["last_modified_date"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["ip_address"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["is_finalized"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["sch_id"] = $fdata;
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
	
		
		
	$tdataFINAL_STOPED["submited"] = $fdata;

	
$tables_data["FINAL_STOPED"]=&$tdataFINAL_STOPED;
$field_labels["FINAL_STOPED"] = &$fieldLabelsFINAL_STOPED;
$fieldToolTips["FINAL_STOPED"] = &$fieldToolTipsFINAL_STOPED;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["FINAL_STOPED"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["FINAL_STOPED"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_FINAL_STOPED()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ft_form_4.submission_id,  ft_form_4.programa,  ft_form_4.`date`,  ft_form_4.ar_protocol,  ft_form_4.sxol_etos,  ft_form_4.dide_name,  ft_form_4.sch_name,  ft_form_4.tel_ergasias,  ft_form_4.dimos,  ft_form_4.fax,  ft_form_4.e_mail,  ft_form_4.sch_teachers,  ft_form_4.sch_students,  ft_form_4.dieythintis_name,  ft_form_4.klados_dieythinti,  ft_form_4.program_title,  ft_form_4.ar_praksis,  ft_form_4.date_praksis,  ft_form_4.sch_orario,  ft_form_4.ypeythinos_name,  ft_form_4.ypeythinos_amm,  ft_form_4.ypeythinos_klados,  ft_form_4.ypeythinos_wres,  ft_form_4.ypeythinos_again,  ft_form_4.ypeythinos_epimorfosi,  ft_form_4.symetexwn1_name,  ft_form_4.symetexwn1_amm,  ft_form_4.symetexwn1_klados,  ft_form_4.symetexwn1_wres,  ft_form_4.symetexwn1_again,  ft_form_4.symetexwn1_epimorfosi,  ft_form_4.symetexwn2_name,  ft_form_4.symetexwn2_amm,  ft_form_4.symetexwn2_klados,  ft_form_4.symetexwn2_wres,  ft_form_4.symetexwn2_again,  ft_form_4.symetexwn2_epimorfosi,  ft_form_4.symetexwn3_name,  ft_form_4.symetexwn3_amm,  ft_form_4.symetexwn3_klados,  ft_form_4.symetexwn3_wres,  ft_form_4.symetexwn3_again,  ft_form_4.symetexwn3_epimorfosi,  ft_form_4.mathites_synolo,  ft_form_4.agoria,  ft_form_4.koritsia,  ft_form_4.amiges,  ft_form_4.meet_day,  ft_form_4.meet_hour,  ft_form_4.meet_place,  ft_form_4.arxeio,  ft_form_4.ypothemata,  ft_form_4.stoxoi,  ft_form_4.methodologia,  ft_form_4.syndeseis,  ft_form_4.month1,  ft_form_4.month2,  ft_form_4.month3,  ft_form_4.month4,  ft_form_4.month5,  ft_form_4.episkepseis,  ft_form_4.submission_date,  ft_form_4.last_modified_date,  ft_form_4.ip_address,  ft_form_4.is_finalized,  ft_form_4.sch_id,  pschools.submited";
$proto0["m_strFrom"] = "FROM ft_form_4  INNER JOIN pschools ON pschools.sch_id = ft_form_4.sch_id";
$proto0["m_strWhere"] = "(ft_form_4.is_finalized =\"yes\") AND (pschools.submited =1)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(ft_form_4.is_finalized =\"yes\") AND (pschools.submited =1)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(ft_form_4.is_finalized =\"yes\") AND (pschools.submited =1)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "ft_form_4.is_finalized =\"yes\"";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "is_finalized",
	"m_strTable" => "ft_form_4"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "=\"yes\"";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "1";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "pschools.submited =1";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "submited",
	"m_strTable" => "pschools"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "=1";
$proto5["m_havingmode"] = "0";
$proto5["m_inBrackets"] = "1";
$proto5["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = "0";
$proto7["m_inBrackets"] = "0";
$proto7["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto7);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "submission_id",
	"m_strTable" => "ft_form_4"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "programa",
	"m_strTable" => "ft_form_4"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "ft_form_4"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "ar_protocol",
	"m_strTable" => "ft_form_4"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sxol_etos",
	"m_strTable" => "ft_form_4"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "dide_name",
	"m_strTable" => "ft_form_4"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_name",
	"m_strTable" => "ft_form_4"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "tel_ergasias",
	"m_strTable" => "ft_form_4"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "dimos",
	"m_strTable" => "ft_form_4"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "ft_form_4"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "e_mail",
	"m_strTable" => "ft_form_4"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_teachers",
	"m_strTable" => "ft_form_4"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_students",
	"m_strTable" => "ft_form_4"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "dieythintis_name",
	"m_strTable" => "ft_form_4"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "klados_dieythinti",
	"m_strTable" => "ft_form_4"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "program_title",
	"m_strTable" => "ft_form_4"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "ar_praksis",
	"m_strTable" => "ft_form_4"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "date_praksis",
	"m_strTable" => "ft_form_4"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_orario",
	"m_strTable" => "ft_form_4"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "ypeythinos_name",
	"m_strTable" => "ft_form_4"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "ypeythinos_amm",
	"m_strTable" => "ft_form_4"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "ypeythinos_klados",
	"m_strTable" => "ft_form_4"
));

$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "ypeythinos_wres",
	"m_strTable" => "ft_form_4"
));

$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "ypeythinos_again",
	"m_strTable" => "ft_form_4"
));

$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "ypeythinos_epimorfosi",
	"m_strTable" => "ft_form_4"
));

$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn1_name",
	"m_strTable" => "ft_form_4"
));

$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn1_amm",
	"m_strTable" => "ft_form_4"
));

$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn1_klados",
	"m_strTable" => "ft_form_4"
));

$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn1_wres",
	"m_strTable" => "ft_form_4"
));

$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn1_again",
	"m_strTable" => "ft_form_4"
));

$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn1_epimorfosi",
	"m_strTable" => "ft_form_4"
));

$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn2_name",
	"m_strTable" => "ft_form_4"
));

$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn2_amm",
	"m_strTable" => "ft_form_4"
));

$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn2_klados",
	"m_strTable" => "ft_form_4"
));

$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn2_wres",
	"m_strTable" => "ft_form_4"
));

$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn2_again",
	"m_strTable" => "ft_form_4"
));

$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn2_epimorfosi",
	"m_strTable" => "ft_form_4"
));

$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn3_name",
	"m_strTable" => "ft_form_4"
));

$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn3_amm",
	"m_strTable" => "ft_form_4"
));

$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn3_klados",
	"m_strTable" => "ft_form_4"
));

$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn3_wres",
	"m_strTable" => "ft_form_4"
));

$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn3_again",
	"m_strTable" => "ft_form_4"
));

$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "symetexwn3_epimorfosi",
	"m_strTable" => "ft_form_4"
));

$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "mathites_synolo",
	"m_strTable" => "ft_form_4"
));

$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "agoria",
	"m_strTable" => "ft_form_4"
));

$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "koritsia",
	"m_strTable" => "ft_form_4"
));

$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "amiges",
	"m_strTable" => "ft_form_4"
));

$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto0["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLField(array(
	"m_strName" => "meet_day",
	"m_strTable" => "ft_form_4"
));

$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "";
$obj = new SQLFieldListItem($proto103);

$proto0["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "meet_hour",
	"m_strTable" => "ft_form_4"
));

$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto0["m_fieldlist"][]=$obj;
						$proto107=array();
			$obj = new SQLField(array(
	"m_strName" => "meet_place",
	"m_strTable" => "ft_form_4"
));

$proto107["m_expr"]=$obj;
$proto107["m_alias"] = "";
$obj = new SQLFieldListItem($proto107);

$proto0["m_fieldlist"][]=$obj;
						$proto109=array();
			$obj = new SQLField(array(
	"m_strName" => "arxeio",
	"m_strTable" => "ft_form_4"
));

$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "";
$obj = new SQLFieldListItem($proto109);

$proto0["m_fieldlist"][]=$obj;
						$proto111=array();
			$obj = new SQLField(array(
	"m_strName" => "ypothemata",
	"m_strTable" => "ft_form_4"
));

$proto111["m_expr"]=$obj;
$proto111["m_alias"] = "";
$obj = new SQLFieldListItem($proto111);

$proto0["m_fieldlist"][]=$obj;
						$proto113=array();
			$obj = new SQLField(array(
	"m_strName" => "stoxoi",
	"m_strTable" => "ft_form_4"
));

$proto113["m_expr"]=$obj;
$proto113["m_alias"] = "";
$obj = new SQLFieldListItem($proto113);

$proto0["m_fieldlist"][]=$obj;
						$proto115=array();
			$obj = new SQLField(array(
	"m_strName" => "methodologia",
	"m_strTable" => "ft_form_4"
));

$proto115["m_expr"]=$obj;
$proto115["m_alias"] = "";
$obj = new SQLFieldListItem($proto115);

$proto0["m_fieldlist"][]=$obj;
						$proto117=array();
			$obj = new SQLField(array(
	"m_strName" => "syndeseis",
	"m_strTable" => "ft_form_4"
));

$proto117["m_expr"]=$obj;
$proto117["m_alias"] = "";
$obj = new SQLFieldListItem($proto117);

$proto0["m_fieldlist"][]=$obj;
						$proto119=array();
			$obj = new SQLField(array(
	"m_strName" => "month1",
	"m_strTable" => "ft_form_4"
));

$proto119["m_expr"]=$obj;
$proto119["m_alias"] = "";
$obj = new SQLFieldListItem($proto119);

$proto0["m_fieldlist"][]=$obj;
						$proto121=array();
			$obj = new SQLField(array(
	"m_strName" => "month2",
	"m_strTable" => "ft_form_4"
));

$proto121["m_expr"]=$obj;
$proto121["m_alias"] = "";
$obj = new SQLFieldListItem($proto121);

$proto0["m_fieldlist"][]=$obj;
						$proto123=array();
			$obj = new SQLField(array(
	"m_strName" => "month3",
	"m_strTable" => "ft_form_4"
));

$proto123["m_expr"]=$obj;
$proto123["m_alias"] = "";
$obj = new SQLFieldListItem($proto123);

$proto0["m_fieldlist"][]=$obj;
						$proto125=array();
			$obj = new SQLField(array(
	"m_strName" => "month4",
	"m_strTable" => "ft_form_4"
));

$proto125["m_expr"]=$obj;
$proto125["m_alias"] = "";
$obj = new SQLFieldListItem($proto125);

$proto0["m_fieldlist"][]=$obj;
						$proto127=array();
			$obj = new SQLField(array(
	"m_strName" => "month5",
	"m_strTable" => "ft_form_4"
));

$proto127["m_expr"]=$obj;
$proto127["m_alias"] = "";
$obj = new SQLFieldListItem($proto127);

$proto0["m_fieldlist"][]=$obj;
						$proto129=array();
			$obj = new SQLField(array(
	"m_strName" => "episkepseis",
	"m_strTable" => "ft_form_4"
));

$proto129["m_expr"]=$obj;
$proto129["m_alias"] = "";
$obj = new SQLFieldListItem($proto129);

$proto0["m_fieldlist"][]=$obj;
						$proto131=array();
			$obj = new SQLField(array(
	"m_strName" => "submission_date",
	"m_strTable" => "ft_form_4"
));

$proto131["m_expr"]=$obj;
$proto131["m_alias"] = "";
$obj = new SQLFieldListItem($proto131);

$proto0["m_fieldlist"][]=$obj;
						$proto133=array();
			$obj = new SQLField(array(
	"m_strName" => "last_modified_date",
	"m_strTable" => "ft_form_4"
));

$proto133["m_expr"]=$obj;
$proto133["m_alias"] = "";
$obj = new SQLFieldListItem($proto133);

$proto0["m_fieldlist"][]=$obj;
						$proto135=array();
			$obj = new SQLField(array(
	"m_strName" => "ip_address",
	"m_strTable" => "ft_form_4"
));

$proto135["m_expr"]=$obj;
$proto135["m_alias"] = "";
$obj = new SQLFieldListItem($proto135);

$proto0["m_fieldlist"][]=$obj;
						$proto137=array();
			$obj = new SQLField(array(
	"m_strName" => "is_finalized",
	"m_strTable" => "ft_form_4"
));

$proto137["m_expr"]=$obj;
$proto137["m_alias"] = "";
$obj = new SQLFieldListItem($proto137);

$proto0["m_fieldlist"][]=$obj;
						$proto139=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_id",
	"m_strTable" => "ft_form_4"
));

$proto139["m_expr"]=$obj;
$proto139["m_alias"] = "";
$obj = new SQLFieldListItem($proto139);

$proto0["m_fieldlist"][]=$obj;
						$proto141=array();
			$obj = new SQLField(array(
	"m_strName" => "submited",
	"m_strTable" => "pschools"
));

$proto141["m_expr"]=$obj;
$proto141["m_alias"] = "";
$obj = new SQLFieldListItem($proto141);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto143=array();
$proto143["m_link"] = "SQLL_MAIN";
			$proto144=array();
$proto144["m_strName"] = "ft_form_4";
$proto144["m_columns"] = array();
$proto144["m_columns"][] = "submission_id";
$proto144["m_columns"][] = "programa";
$proto144["m_columns"][] = "date";
$proto144["m_columns"][] = "ar_protocol";
$proto144["m_columns"][] = "sxol_etos";
$proto144["m_columns"][] = "dide_name";
$proto144["m_columns"][] = "sch_name";
$proto144["m_columns"][] = "tel_ergasias";
$proto144["m_columns"][] = "dimos";
$proto144["m_columns"][] = "fax";
$proto144["m_columns"][] = "e_mail";
$proto144["m_columns"][] = "sch_teachers";
$proto144["m_columns"][] = "sch_students";
$proto144["m_columns"][] = "dieythintis_name";
$proto144["m_columns"][] = "klados_dieythinti";
$proto144["m_columns"][] = "program_title";
$proto144["m_columns"][] = "ar_praksis";
$proto144["m_columns"][] = "date_praksis";
$proto144["m_columns"][] = "sch_orario";
$proto144["m_columns"][] = "ypeythinos_name";
$proto144["m_columns"][] = "ypeythinos_amm";
$proto144["m_columns"][] = "ypeythinos_klados";
$proto144["m_columns"][] = "ypeythinos_wres";
$proto144["m_columns"][] = "ypeythinos_again";
$proto144["m_columns"][] = "ypeythinos_epimorfosi";
$proto144["m_columns"][] = "symetexwn1_name";
$proto144["m_columns"][] = "symetexwn1_amm";
$proto144["m_columns"][] = "symetexwn1_klados";
$proto144["m_columns"][] = "symetexwn1_wres";
$proto144["m_columns"][] = "symetexwn1_again";
$proto144["m_columns"][] = "symetexwn1_epimorfosi";
$proto144["m_columns"][] = "symetexwn2_name";
$proto144["m_columns"][] = "symetexwn2_amm";
$proto144["m_columns"][] = "symetexwn2_klados";
$proto144["m_columns"][] = "symetexwn2_wres";
$proto144["m_columns"][] = "symetexwn2_again";
$proto144["m_columns"][] = "symetexwn2_epimorfosi";
$proto144["m_columns"][] = "symetexwn3_name";
$proto144["m_columns"][] = "symetexwn3_amm";
$proto144["m_columns"][] = "symetexwn3_klados";
$proto144["m_columns"][] = "symetexwn3_wres";
$proto144["m_columns"][] = "symetexwn3_again";
$proto144["m_columns"][] = "symetexwn3_epimorfosi";
$proto144["m_columns"][] = "mathites_synolo";
$proto144["m_columns"][] = "agoria";
$proto144["m_columns"][] = "koritsia";
$proto144["m_columns"][] = "amiges";
$proto144["m_columns"][] = "meet_day";
$proto144["m_columns"][] = "meet_hour";
$proto144["m_columns"][] = "meet_place";
$proto144["m_columns"][] = "arxeio";
$proto144["m_columns"][] = "ypothemata";
$proto144["m_columns"][] = "stoxoi";
$proto144["m_columns"][] = "methodologia";
$proto144["m_columns"][] = "syndeseis";
$proto144["m_columns"][] = "month1";
$proto144["m_columns"][] = "month2";
$proto144["m_columns"][] = "month3";
$proto144["m_columns"][] = "month4";
$proto144["m_columns"][] = "month5";
$proto144["m_columns"][] = "episkepseis";
$proto144["m_columns"][] = "submission_date";
$proto144["m_columns"][] = "last_modified_date";
$proto144["m_columns"][] = "ip_address";
$proto144["m_columns"][] = "is_finalized";
$proto144["m_columns"][] = "sch_id";
$obj = new SQLTable($proto144);

$proto143["m_table"] = $obj;
$proto143["m_alias"] = "";
$proto145=array();
$proto145["m_sql"] = "";
$proto145["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto145["m_column"]=$obj;
$proto145["m_contained"] = array();
$proto145["m_strCase"] = "";
$proto145["m_havingmode"] = "0";
$proto145["m_inBrackets"] = "0";
$proto145["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto145);

$proto143["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto143);

$proto0["m_fromlist"][]=$obj;
												$proto147=array();
$proto147["m_link"] = "SQLL_INNERJOIN";
			$proto148=array();
$proto148["m_strName"] = "pschools";
$proto148["m_columns"] = array();
$proto148["m_columns"][] = "sch_id";
$proto148["m_columns"][] = "submited";
$proto148["m_columns"][] = "username";
$proto148["m_columns"][] = "password";
$proto148["m_columns"][] = "sch_code";
$proto148["m_columns"][] = "sch_perioxi";
$proto148["m_columns"][] = "sch_name";
$proto148["m_columns"][] = "sch_dimos";
$proto148["m_columns"][] = "sch_phone";
$proto148["m_columns"][] = "fax";
$proto148["m_columns"][] = "email";
$obj = new SQLTable($proto148);

$proto147["m_table"] = $obj;
$proto147["m_alias"] = "";
$proto149=array();
$proto149["m_sql"] = "pschools.sch_id = ft_form_4.sch_id";
$proto149["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sch_id",
	"m_strTable" => "pschools"
));

$proto149["m_column"]=$obj;
$proto149["m_contained"] = array();
$proto149["m_strCase"] = "= ft_form_4.sch_id";
$proto149["m_havingmode"] = "0";
$proto149["m_inBrackets"] = "0";
$proto149["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto149);

$proto147["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto147);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_FINAL_STOPED = createSqlQuery_FINAL_STOPED();
																																																																			$tdataFINAL_STOPED[".sqlquery"] = $queryData_FINAL_STOPED;

$tableEvents["FINAL_STOPED"] = new eventsBase;
$tdataFINAL_STOPED[".hasEvents"] = false;

$cipherer = new RunnerCipherer("FINAL_STOPED");

?>