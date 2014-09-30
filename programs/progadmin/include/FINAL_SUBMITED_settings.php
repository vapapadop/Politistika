<?php
require_once(getabspath("classes/cipherer.php"));
$tdataFINAL_SUBMITED = array();
	$tdataFINAL_SUBMITED[".NumberOfChars"] = 80; 
	$tdataFINAL_SUBMITED[".ShortName"] = "FINAL_SUBMITED";
	$tdataFINAL_SUBMITED[".OwnerID"] = "";
	$tdataFINAL_SUBMITED[".OriginalTable"] = "ft_form_4";

//	field labels
$fieldLabelsFINAL_SUBMITED = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsFINAL_SUBMITED["English"] = array();
	$fieldToolTipsFINAL_SUBMITED["English"] = array();
	$fieldLabelsFINAL_SUBMITED["English"]["submission_id"] = "Αρ. Ηλ. Καταχώρησης";
	$fieldToolTipsFINAL_SUBMITED["English"]["submission_id"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["programa"] = "Τύπος Προγράματος";
	$fieldToolTipsFINAL_SUBMITED["English"]["programa"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["date"] = "Ημνια Πρωτλου Σχολείου";
	$fieldToolTipsFINAL_SUBMITED["English"]["date"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["ar_protocol"] = "Αρ. Πρωτλου Σχολείου";
	$fieldToolTipsFINAL_SUBMITED["English"]["ar_protocol"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["sxol_etos"] = "Σχολ. Ετος";
	$fieldToolTipsFINAL_SUBMITED["English"]["sxol_etos"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["dide_name"] = "ΔΔΕ Ονομα";
	$fieldToolTipsFINAL_SUBMITED["English"]["dide_name"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["sch_name"] = "Σχολείο";
	$fieldToolTipsFINAL_SUBMITED["English"]["sch_name"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["tel_ergasias"] = "Τηλ. Σχολείου";
	$fieldToolTipsFINAL_SUBMITED["English"]["tel_ergasias"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["dimos"] = "Δήμος Σχολείου";
	$fieldToolTipsFINAL_SUBMITED["English"]["dimos"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["fax"] = "Fax";
	$fieldToolTipsFINAL_SUBMITED["English"]["fax"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["e_mail"] = "E Mail";
	$fieldToolTipsFINAL_SUBMITED["English"]["e_mail"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["sch_teachers"] = "Αρ. Καθηγητών Σχολείου";
	$fieldToolTipsFINAL_SUBMITED["English"]["sch_teachers"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["sch_students"] = "Αρ. Μαθητών Σχολείου";
	$fieldToolTipsFINAL_SUBMITED["English"]["sch_students"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["dieythintis_name"] = "Ονομα Διευθυντή";
	$fieldToolTipsFINAL_SUBMITED["English"]["dieythintis_name"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["klados_dieythinti"] = "Κλάδος Διευθυντή";
	$fieldToolTipsFINAL_SUBMITED["English"]["klados_dieythinti"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["program_title"] = "Τίτλος Προγράμματος";
	$fieldToolTipsFINAL_SUBMITED["English"]["program_title"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["ar_praksis"] = "Αρ. Πράξης Συλλόγου";
	$fieldToolTipsFINAL_SUBMITED["English"]["ar_praksis"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["date_praksis"] = "Ημνια Πράξης Συλλόγου";
	$fieldToolTipsFINAL_SUBMITED["English"]["date_praksis"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["sch_orario"] = "Ωράριο Σχολείου";
	$fieldToolTipsFINAL_SUBMITED["English"]["sch_orario"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["ypeythinos_name"] = "Όνομα Υπευθύνου";
	$fieldToolTipsFINAL_SUBMITED["English"]["ypeythinos_name"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["ypeythinos_amm"] = "ΑΦΜ Υπευθύνου";
	$fieldToolTipsFINAL_SUBMITED["English"]["ypeythinos_amm"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["ypeythinos_klados"] = "Κλάδος Υπευθύνου";
	$fieldToolTipsFINAL_SUBMITED["English"]["ypeythinos_klados"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["ypeythinos_wres"] = "Ώρες Υπευθύνου";
	$fieldToolTipsFINAL_SUBMITED["English"]["ypeythinos_wres"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["ypeythinos_again"] = "Υπεύθυνος ξανά";
	$fieldToolTipsFINAL_SUBMITED["English"]["ypeythinos_again"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["ypeythinos_epimorfosi"] = "Επιμόρφωση Υπευθύνου";
	$fieldToolTipsFINAL_SUBMITED["English"]["ypeythinos_epimorfosi"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn1_name"] = "Όνομα Συμμετέχων1";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn1_name"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn1_amm"] = "ΑΦΜ Συμμετέχων1";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn1_amm"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn1_klados"] = "Κλάδος Συμμετέχων1";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn1_klados"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn1_wres"] = "Ώρες Συμμετέχων1";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn1_wres"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn1_again"] = "Συμμετέχων1 ξανά";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn1_again"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn1_epimorfosi"] = "Επιμόρφωση Συμμετέχων1";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn1_epimorfosi"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn2_name"] = "Όνομα Συμμετέχων2";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn2_name"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn2_amm"] = "ΑΦΜ Συμμετέχων2";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn2_amm"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn2_klados"] = "Κλάδος Συμμετέχων2";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn2_klados"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn2_wres"] = "Ώρες Συμμετέχων2";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn2_wres"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn2_again"] = "Συμμετέχων2 ξανά";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn2_again"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn2_epimorfosi"] = "Επιμόρφωση Συμμετέχων2";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn2_epimorfosi"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn3_name"] = "Όνομα Συμμετέχων3";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn3_name"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn3_amm"] = "ΑΦΜ Συμμετέχων3";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn3_amm"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn3_klados"] = "Κλάδος Συμμετέχων3";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn3_klados"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn3_wres"] = "Ώρες Συμμετέχων3";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn3_wres"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn3_again"] = "Συμμετέχων3 ξανά";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn3_again"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["symetexwn3_epimorfosi"] = "Επιμόρφωση Συμμετέχων3";
	$fieldToolTipsFINAL_SUBMITED["English"]["symetexwn3_epimorfosi"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["mathites_synolo"] = "Σύνολο Μαθητές Ομάδας";
	$fieldToolTipsFINAL_SUBMITED["English"]["mathites_synolo"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["agoria"] = "Αγόρια";
	$fieldToolTipsFINAL_SUBMITED["English"]["agoria"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["koritsia"] = "Κορίτσια";
	$fieldToolTipsFINAL_SUBMITED["English"]["koritsia"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["amiges"] = "Σύνθεση Ομάδας";
	$fieldToolTipsFINAL_SUBMITED["English"]["amiges"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["meet_day"] = "Ημέρα/ες Συνάντησης";
	$fieldToolTipsFINAL_SUBMITED["English"]["meet_day"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["meet_hour"] = "Ώρα/ες Συνάντησης";
	$fieldToolTipsFINAL_SUBMITED["English"]["meet_hour"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["meet_place"] = "Τόπος Συνάντησης";
	$fieldToolTipsFINAL_SUBMITED["English"]["meet_place"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["arxeio"] = "Υπάρχει Αρχείο ";
	$fieldToolTipsFINAL_SUBMITED["English"]["arxeio"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["ypothemata"] = "Υποθέματα";
	$fieldToolTipsFINAL_SUBMITED["English"]["ypothemata"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["stoxoi"] = "Στόχοι";
	$fieldToolTipsFINAL_SUBMITED["English"]["stoxoi"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["methodologia"] = "Μεθοδολογία";
	$fieldToolTipsFINAL_SUBMITED["English"]["methodologia"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["syndeseis"] = "Συνδέσεις";
	$fieldToolTipsFINAL_SUBMITED["English"]["syndeseis"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["month1"] = "Μήνας 1";
	$fieldToolTipsFINAL_SUBMITED["English"]["month1"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["month2"] = "Μήνας 2";
	$fieldToolTipsFINAL_SUBMITED["English"]["month2"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["month3"] = "Μήνας 3";
	$fieldToolTipsFINAL_SUBMITED["English"]["month3"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["month4"] = "Μήνας 4";
	$fieldToolTipsFINAL_SUBMITED["English"]["month4"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["month5"] = "Μήνας 5";
	$fieldToolTipsFINAL_SUBMITED["English"]["month5"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["episkepseis"] = "Αρ. Επισκέψεων";
	$fieldToolTipsFINAL_SUBMITED["English"]["episkepseis"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["submission_date"] = "Ημερομηνία Υποβολής Αιτησης";
	$fieldToolTipsFINAL_SUBMITED["English"]["submission_date"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["is_finalized"] = "Διακοπή Προγράμματος";
	$fieldToolTipsFINAL_SUBMITED["English"]["is_finalized"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["sch_id"] = "sch_id";
	$fieldToolTipsFINAL_SUBMITED["English"]["sch_id"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["submited"] = "Submited";
	$fieldToolTipsFINAL_SUBMITED["English"]["submited"] = "";
	$fieldLabelsFINAL_SUBMITED["English"]["sch_id1"] = "Sch Id1";
	$fieldToolTipsFINAL_SUBMITED["English"]["sch_id1"] = "";
	if (count($fieldToolTipsFINAL_SUBMITED["English"]))
		$tdataFINAL_SUBMITED[".isUseToolTips"] = true;
}
	
	
	$tdataFINAL_SUBMITED[".NCSearch"] = true;



$tdataFINAL_SUBMITED[".shortTableName"] = "FINAL_SUBMITED";
$tdataFINAL_SUBMITED[".nSecOptions"] = 0;
$tdataFINAL_SUBMITED[".recsPerRowList"] = 1;
$tdataFINAL_SUBMITED[".mainTableOwnerID"] = "";
$tdataFINAL_SUBMITED[".moveNext"] = 1;
$tdataFINAL_SUBMITED[".nType"] = 1;

$tdataFINAL_SUBMITED[".strOriginalTableName"] = "ft_form_4";




$tdataFINAL_SUBMITED[".showAddInPopup"] = false;

$tdataFINAL_SUBMITED[".showEditInPopup"] = false;

$tdataFINAL_SUBMITED[".showViewInPopup"] = false;

$tdataFINAL_SUBMITED[".fieldsForRegister"] = array();
	
if (!isMobile())
	$tdataFINAL_SUBMITED[".listAjax"] = true;
else 
	$tdataFINAL_SUBMITED[".listAjax"] = false;

	$tdataFINAL_SUBMITED[".audit"] = false;

	$tdataFINAL_SUBMITED[".locking"] = false;

$tdataFINAL_SUBMITED[".listIcons"] = true;
$tdataFINAL_SUBMITED[".view"] = true;

$tdataFINAL_SUBMITED[".exportTo"] = true;

$tdataFINAL_SUBMITED[".printFriendly"] = true;

$tdataFINAL_SUBMITED[".delete"] = true;

$tdataFINAL_SUBMITED[".showSimpleSearchOptions"] = false;

$tdataFINAL_SUBMITED[".showSearchPanel"] = true;

if (isMobile())
	$tdataFINAL_SUBMITED[".isUseAjaxSuggest"] = false;
else 
	$tdataFINAL_SUBMITED[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataFINAL_SUBMITED[".addPageEvents"] = false;

// use timepicker for search panel
$tdataFINAL_SUBMITED[".isUseTimeForSearch"] = false;




$tdataFINAL_SUBMITED[".allSearchFields"] = array();

$tdataFINAL_SUBMITED[".allSearchFields"][] = "submission_id";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "programa";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "date";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "ar_protocol";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "sxol_etos";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "dide_name";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "sch_name";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "tel_ergasias";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "dimos";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "fax";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "e_mail";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "sch_teachers";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "sch_students";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "dieythintis_name";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "klados_dieythinti";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "program_title";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "ar_praksis";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "date_praksis";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "sch_orario";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "ypeythinos_name";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "ypeythinos_amm";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "ypeythinos_klados";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "ypeythinos_wres";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "ypeythinos_again";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn1_name";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn1_amm";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn1_klados";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn1_wres";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn1_again";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn2_name";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn2_amm";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn2_klados";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn2_wres";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn2_again";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn3_name";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn3_amm";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn3_klados";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn3_wres";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn3_again";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "mathites_synolo";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "agoria";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "koritsia";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "amiges";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "meet_day";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "meet_hour";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "meet_place";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "arxeio";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "ypothemata";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "stoxoi";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "methodologia";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "syndeseis";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "month1";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "month2";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "month3";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "month4";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "month5";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "episkepseis";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "submission_date";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "is_finalized";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "sch_id";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "submited";
$tdataFINAL_SUBMITED[".allSearchFields"][] = "sch_id1";

$tdataFINAL_SUBMITED[".googleLikeFields"][] = "submission_id";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "programa";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "date";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "ar_protocol";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "sxol_etos";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "dide_name";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "sch_name";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "tel_ergasias";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "dimos";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "fax";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "e_mail";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "sch_teachers";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "sch_students";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "dieythintis_name";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "klados_dieythinti";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "program_title";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "ar_praksis";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "date_praksis";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "sch_orario";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "ypeythinos_name";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "ypeythinos_amm";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "ypeythinos_klados";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "ypeythinos_wres";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "ypeythinos_again";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn1_name";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn1_amm";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn1_klados";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn1_wres";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn1_again";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn2_name";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn2_amm";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn2_klados";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn2_wres";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn2_again";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn3_name";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn3_amm";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn3_klados";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn3_wres";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn3_again";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "mathites_synolo";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "agoria";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "koritsia";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "amiges";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "meet_day";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "meet_hour";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "meet_place";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "arxeio";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "ypothemata";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "stoxoi";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "methodologia";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "syndeseis";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "month1";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "month2";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "month3";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "month4";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "month5";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "episkepseis";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "submission_date";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "is_finalized";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "sch_id";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "submited";
$tdataFINAL_SUBMITED[".googleLikeFields"][] = "sch_id1";

$tdataFINAL_SUBMITED[".panelSearchFields"][] = "submission_id";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "programa";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "date";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "ar_protocol";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "sxol_etos";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "dide_name";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "sch_name";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "tel_ergasias";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "dimos";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "fax";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "e_mail";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "sch_teachers";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "sch_students";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "dieythintis_name";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "klados_dieythinti";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "program_title";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "ar_praksis";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "date_praksis";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "sch_orario";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "ypeythinos_name";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "ypeythinos_amm";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "ypeythinos_klados";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "ypeythinos_wres";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "ypeythinos_again";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn1_name";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn1_amm";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn1_klados";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn1_wres";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn1_again";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn2_name";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn2_amm";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn2_klados";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn2_wres";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn2_again";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn3_name";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn3_amm";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn3_klados";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn3_wres";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn3_again";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "mathites_synolo";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "agoria";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "koritsia";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "amiges";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "meet_day";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "meet_hour";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "meet_place";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "arxeio";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "ypothemata";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "stoxoi";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "methodologia";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "syndeseis";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "month1";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "month2";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "month3";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "month4";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "month5";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "episkepseis";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "submission_date";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "is_finalized";
$tdataFINAL_SUBMITED[".panelSearchFields"][] = "sch_id";

$tdataFINAL_SUBMITED[".advSearchFields"][] = "submission_id";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "programa";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "date";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "ar_protocol";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "sxol_etos";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "dide_name";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "sch_name";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "tel_ergasias";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "dimos";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "fax";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "e_mail";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "sch_teachers";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "sch_students";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "dieythintis_name";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "klados_dieythinti";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "program_title";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "ar_praksis";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "date_praksis";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "sch_orario";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "ypeythinos_name";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "ypeythinos_amm";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "ypeythinos_klados";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "ypeythinos_wres";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "ypeythinos_again";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn1_name";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn1_amm";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn1_klados";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn1_wres";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn1_again";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn2_name";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn2_amm";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn2_klados";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn2_wres";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn2_again";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn3_name";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn3_amm";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn3_klados";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn3_wres";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn3_again";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "mathites_synolo";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "agoria";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "koritsia";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "amiges";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "meet_day";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "meet_hour";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "meet_place";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "arxeio";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "ypothemata";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "stoxoi";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "methodologia";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "syndeseis";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "month1";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "month2";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "month3";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "month4";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "month5";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "episkepseis";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "submission_date";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "is_finalized";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "sch_id";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "submited";
$tdataFINAL_SUBMITED[".advSearchFields"][] = "sch_id1";

$tdataFINAL_SUBMITED[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataFINAL_SUBMITED[".pageSize"] = 300;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataFINAL_SUBMITED[".strOrderBy"] = $tstrOrderBy;

$tdataFINAL_SUBMITED[".orderindexes"] = array();

$tdataFINAL_SUBMITED[".sqlHead"] = "SELECT ft_form_4.submission_id,  ft_form_4.programa,  ft_form_4.`date`,  ft_form_4.ar_protocol,  ft_form_4.sxol_etos,  ft_form_4.dide_name,  ft_form_4.sch_name,  ft_form_4.tel_ergasias,  ft_form_4.dimos,  ft_form_4.fax,  ft_form_4.e_mail,  ft_form_4.sch_teachers,  ft_form_4.sch_students,  ft_form_4.dieythintis_name,  ft_form_4.klados_dieythinti,  ft_form_4.program_title,  ft_form_4.ar_praksis,  ft_form_4.date_praksis,  ft_form_4.sch_orario,  ft_form_4.ypeythinos_name,  ft_form_4.ypeythinos_amm,  ft_form_4.ypeythinos_klados,  ft_form_4.ypeythinos_wres,  ft_form_4.ypeythinos_again,  ft_form_4.ypeythinos_epimorfosi,  ft_form_4.symetexwn1_name,  ft_form_4.symetexwn1_amm,  ft_form_4.symetexwn1_klados,  ft_form_4.symetexwn1_wres,  ft_form_4.symetexwn1_again,  ft_form_4.symetexwn1_epimorfosi,  ft_form_4.symetexwn2_name,  ft_form_4.symetexwn2_amm,  ft_form_4.symetexwn2_klados,  ft_form_4.symetexwn2_wres,  ft_form_4.symetexwn2_again,  ft_form_4.symetexwn2_epimorfosi,  ft_form_4.symetexwn3_name,  ft_form_4.symetexwn3_amm,  ft_form_4.symetexwn3_klados,  ft_form_4.symetexwn3_wres,  ft_form_4.symetexwn3_again,  ft_form_4.symetexwn3_epimorfosi,  ft_form_4.mathites_synolo,  ft_form_4.agoria,  ft_form_4.koritsia,  ft_form_4.amiges,  ft_form_4.meet_day,  ft_form_4.meet_hour,  ft_form_4.meet_place,  ft_form_4.arxeio,  ft_form_4.ypothemata,  ft_form_4.stoxoi,  ft_form_4.methodologia,  ft_form_4.syndeseis,  ft_form_4.month1,  ft_form_4.month2,  ft_form_4.month3,  ft_form_4.month4,  ft_form_4.month5,  ft_form_4.episkepseis,  ft_form_4.submission_date,  ft_form_4.is_finalized,  ft_form_4.sch_id,  pschools.submited,  pschools.sch_id AS sch_id1";
$tdataFINAL_SUBMITED[".sqlFrom"] = "FROM ft_form_4  INNER JOIN pschools ON ft_form_4.sch_id = pschools.sch_id";
$tdataFINAL_SUBMITED[".sqlWhereExpr"] = "(pschools.submited =1)";
$tdataFINAL_SUBMITED[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataFINAL_SUBMITED[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataFINAL_SUBMITED[".arrGroupsPerPage"] = $arrGPP;

$tableKeysFINAL_SUBMITED = array();
$tableKeysFINAL_SUBMITED[] = "submission_id";
$tdataFINAL_SUBMITED[".Keys"] = $tableKeysFINAL_SUBMITED;

$tdataFINAL_SUBMITED[".listFields"] = array();
$tdataFINAL_SUBMITED[".listFields"][] = "submited";
$tdataFINAL_SUBMITED[".listFields"][] = "sch_id1";
$tdataFINAL_SUBMITED[".listFields"][] = "submission_id";
$tdataFINAL_SUBMITED[".listFields"][] = "programa";
$tdataFINAL_SUBMITED[".listFields"][] = "date";
$tdataFINAL_SUBMITED[".listFields"][] = "ar_protocol";
$tdataFINAL_SUBMITED[".listFields"][] = "sxol_etos";
$tdataFINAL_SUBMITED[".listFields"][] = "dide_name";
$tdataFINAL_SUBMITED[".listFields"][] = "sch_name";
$tdataFINAL_SUBMITED[".listFields"][] = "tel_ergasias";
$tdataFINAL_SUBMITED[".listFields"][] = "dimos";
$tdataFINAL_SUBMITED[".listFields"][] = "fax";
$tdataFINAL_SUBMITED[".listFields"][] = "e_mail";
$tdataFINAL_SUBMITED[".listFields"][] = "sch_teachers";
$tdataFINAL_SUBMITED[".listFields"][] = "sch_students";
$tdataFINAL_SUBMITED[".listFields"][] = "dieythintis_name";
$tdataFINAL_SUBMITED[".listFields"][] = "klados_dieythinti";
$tdataFINAL_SUBMITED[".listFields"][] = "program_title";
$tdataFINAL_SUBMITED[".listFields"][] = "ar_praksis";
$tdataFINAL_SUBMITED[".listFields"][] = "date_praksis";
$tdataFINAL_SUBMITED[".listFields"][] = "sch_orario";
$tdataFINAL_SUBMITED[".listFields"][] = "ypeythinos_name";
$tdataFINAL_SUBMITED[".listFields"][] = "ypeythinos_amm";
$tdataFINAL_SUBMITED[".listFields"][] = "ypeythinos_klados";
$tdataFINAL_SUBMITED[".listFields"][] = "ypeythinos_wres";
$tdataFINAL_SUBMITED[".listFields"][] = "ypeythinos_again";
$tdataFINAL_SUBMITED[".listFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn1_name";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn1_amm";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn1_klados";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn1_wres";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn1_again";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn2_name";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn2_amm";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn2_klados";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn2_wres";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn2_again";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn3_name";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn3_amm";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn3_klados";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn3_wres";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn3_again";
$tdataFINAL_SUBMITED[".listFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_SUBMITED[".listFields"][] = "mathites_synolo";
$tdataFINAL_SUBMITED[".listFields"][] = "agoria";
$tdataFINAL_SUBMITED[".listFields"][] = "koritsia";
$tdataFINAL_SUBMITED[".listFields"][] = "amiges";
$tdataFINAL_SUBMITED[".listFields"][] = "meet_day";
$tdataFINAL_SUBMITED[".listFields"][] = "meet_hour";
$tdataFINAL_SUBMITED[".listFields"][] = "meet_place";
$tdataFINAL_SUBMITED[".listFields"][] = "arxeio";
$tdataFINAL_SUBMITED[".listFields"][] = "ypothemata";
$tdataFINAL_SUBMITED[".listFields"][] = "stoxoi";
$tdataFINAL_SUBMITED[".listFields"][] = "methodologia";
$tdataFINAL_SUBMITED[".listFields"][] = "syndeseis";
$tdataFINAL_SUBMITED[".listFields"][] = "month1";
$tdataFINAL_SUBMITED[".listFields"][] = "month2";
$tdataFINAL_SUBMITED[".listFields"][] = "month3";
$tdataFINAL_SUBMITED[".listFields"][] = "month4";
$tdataFINAL_SUBMITED[".listFields"][] = "month5";
$tdataFINAL_SUBMITED[".listFields"][] = "episkepseis";
$tdataFINAL_SUBMITED[".listFields"][] = "submission_date";
$tdataFINAL_SUBMITED[".listFields"][] = "is_finalized";
$tdataFINAL_SUBMITED[".listFields"][] = "sch_id";

$tdataFINAL_SUBMITED[".viewFields"] = array();
$tdataFINAL_SUBMITED[".viewFields"][] = "submission_id";
$tdataFINAL_SUBMITED[".viewFields"][] = "programa";
$tdataFINAL_SUBMITED[".viewFields"][] = "date";
$tdataFINAL_SUBMITED[".viewFields"][] = "ar_protocol";
$tdataFINAL_SUBMITED[".viewFields"][] = "sxol_etos";
$tdataFINAL_SUBMITED[".viewFields"][] = "dide_name";
$tdataFINAL_SUBMITED[".viewFields"][] = "sch_name";
$tdataFINAL_SUBMITED[".viewFields"][] = "tel_ergasias";
$tdataFINAL_SUBMITED[".viewFields"][] = "dimos";
$tdataFINAL_SUBMITED[".viewFields"][] = "fax";
$tdataFINAL_SUBMITED[".viewFields"][] = "e_mail";
$tdataFINAL_SUBMITED[".viewFields"][] = "sch_teachers";
$tdataFINAL_SUBMITED[".viewFields"][] = "sch_students";
$tdataFINAL_SUBMITED[".viewFields"][] = "dieythintis_name";
$tdataFINAL_SUBMITED[".viewFields"][] = "klados_dieythinti";
$tdataFINAL_SUBMITED[".viewFields"][] = "program_title";
$tdataFINAL_SUBMITED[".viewFields"][] = "ar_praksis";
$tdataFINAL_SUBMITED[".viewFields"][] = "date_praksis";
$tdataFINAL_SUBMITED[".viewFields"][] = "sch_orario";
$tdataFINAL_SUBMITED[".viewFields"][] = "ypeythinos_name";
$tdataFINAL_SUBMITED[".viewFields"][] = "ypeythinos_amm";
$tdataFINAL_SUBMITED[".viewFields"][] = "ypeythinos_klados";
$tdataFINAL_SUBMITED[".viewFields"][] = "ypeythinos_wres";
$tdataFINAL_SUBMITED[".viewFields"][] = "ypeythinos_again";
$tdataFINAL_SUBMITED[".viewFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn1_name";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn1_amm";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn1_klados";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn1_wres";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn1_again";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn2_name";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn2_amm";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn2_klados";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn2_wres";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn2_again";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn3_name";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn3_amm";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn3_klados";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn3_wres";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn3_again";
$tdataFINAL_SUBMITED[".viewFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_SUBMITED[".viewFields"][] = "mathites_synolo";
$tdataFINAL_SUBMITED[".viewFields"][] = "agoria";
$tdataFINAL_SUBMITED[".viewFields"][] = "koritsia";
$tdataFINAL_SUBMITED[".viewFields"][] = "amiges";
$tdataFINAL_SUBMITED[".viewFields"][] = "meet_day";
$tdataFINAL_SUBMITED[".viewFields"][] = "meet_hour";
$tdataFINAL_SUBMITED[".viewFields"][] = "meet_place";
$tdataFINAL_SUBMITED[".viewFields"][] = "arxeio";
$tdataFINAL_SUBMITED[".viewFields"][] = "ypothemata";
$tdataFINAL_SUBMITED[".viewFields"][] = "stoxoi";
$tdataFINAL_SUBMITED[".viewFields"][] = "methodologia";
$tdataFINAL_SUBMITED[".viewFields"][] = "syndeseis";
$tdataFINAL_SUBMITED[".viewFields"][] = "month1";
$tdataFINAL_SUBMITED[".viewFields"][] = "month2";
$tdataFINAL_SUBMITED[".viewFields"][] = "month3";
$tdataFINAL_SUBMITED[".viewFields"][] = "month4";
$tdataFINAL_SUBMITED[".viewFields"][] = "month5";
$tdataFINAL_SUBMITED[".viewFields"][] = "episkepseis";
$tdataFINAL_SUBMITED[".viewFields"][] = "submission_date";
$tdataFINAL_SUBMITED[".viewFields"][] = "is_finalized";
$tdataFINAL_SUBMITED[".viewFields"][] = "sch_id";
$tdataFINAL_SUBMITED[".viewFields"][] = "submited";
$tdataFINAL_SUBMITED[".viewFields"][] = "sch_id1";

$tdataFINAL_SUBMITED[".addFields"] = array();
$tdataFINAL_SUBMITED[".addFields"][] = "submission_id";
$tdataFINAL_SUBMITED[".addFields"][] = "programa";
$tdataFINAL_SUBMITED[".addFields"][] = "date";
$tdataFINAL_SUBMITED[".addFields"][] = "ar_protocol";
$tdataFINAL_SUBMITED[".addFields"][] = "sxol_etos";
$tdataFINAL_SUBMITED[".addFields"][] = "dide_name";
$tdataFINAL_SUBMITED[".addFields"][] = "sch_name";
$tdataFINAL_SUBMITED[".addFields"][] = "tel_ergasias";
$tdataFINAL_SUBMITED[".addFields"][] = "dimos";
$tdataFINAL_SUBMITED[".addFields"][] = "fax";
$tdataFINAL_SUBMITED[".addFields"][] = "e_mail";
$tdataFINAL_SUBMITED[".addFields"][] = "sch_teachers";
$tdataFINAL_SUBMITED[".addFields"][] = "sch_students";
$tdataFINAL_SUBMITED[".addFields"][] = "dieythintis_name";
$tdataFINAL_SUBMITED[".addFields"][] = "klados_dieythinti";
$tdataFINAL_SUBMITED[".addFields"][] = "program_title";
$tdataFINAL_SUBMITED[".addFields"][] = "ar_praksis";
$tdataFINAL_SUBMITED[".addFields"][] = "date_praksis";
$tdataFINAL_SUBMITED[".addFields"][] = "sch_orario";
$tdataFINAL_SUBMITED[".addFields"][] = "ypeythinos_name";
$tdataFINAL_SUBMITED[".addFields"][] = "ypeythinos_amm";
$tdataFINAL_SUBMITED[".addFields"][] = "ypeythinos_klados";
$tdataFINAL_SUBMITED[".addFields"][] = "ypeythinos_wres";
$tdataFINAL_SUBMITED[".addFields"][] = "ypeythinos_again";
$tdataFINAL_SUBMITED[".addFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn1_name";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn1_amm";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn1_klados";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn1_wres";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn1_again";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn2_name";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn2_amm";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn2_klados";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn2_wres";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn2_again";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn3_name";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn3_amm";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn3_klados";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn3_wres";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn3_again";
$tdataFINAL_SUBMITED[".addFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_SUBMITED[".addFields"][] = "mathites_synolo";
$tdataFINAL_SUBMITED[".addFields"][] = "agoria";
$tdataFINAL_SUBMITED[".addFields"][] = "koritsia";
$tdataFINAL_SUBMITED[".addFields"][] = "amiges";
$tdataFINAL_SUBMITED[".addFields"][] = "meet_day";
$tdataFINAL_SUBMITED[".addFields"][] = "meet_hour";
$tdataFINAL_SUBMITED[".addFields"][] = "meet_place";
$tdataFINAL_SUBMITED[".addFields"][] = "arxeio";
$tdataFINAL_SUBMITED[".addFields"][] = "ypothemata";
$tdataFINAL_SUBMITED[".addFields"][] = "stoxoi";
$tdataFINAL_SUBMITED[".addFields"][] = "methodologia";
$tdataFINAL_SUBMITED[".addFields"][] = "syndeseis";
$tdataFINAL_SUBMITED[".addFields"][] = "month1";
$tdataFINAL_SUBMITED[".addFields"][] = "month2";
$tdataFINAL_SUBMITED[".addFields"][] = "month3";
$tdataFINAL_SUBMITED[".addFields"][] = "month4";
$tdataFINAL_SUBMITED[".addFields"][] = "month5";
$tdataFINAL_SUBMITED[".addFields"][] = "episkepseis";
$tdataFINAL_SUBMITED[".addFields"][] = "submission_date";
$tdataFINAL_SUBMITED[".addFields"][] = "is_finalized";
$tdataFINAL_SUBMITED[".addFields"][] = "sch_id";

$tdataFINAL_SUBMITED[".inlineAddFields"] = array();
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "submited";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "sch_id1";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "submission_id";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "programa";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "date";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "ar_protocol";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "sxol_etos";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "dide_name";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "sch_name";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "tel_ergasias";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "dimos";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "fax";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "e_mail";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "sch_teachers";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "sch_students";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "dieythintis_name";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "klados_dieythinti";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "program_title";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "ar_praksis";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "date_praksis";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "sch_orario";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "ypeythinos_name";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "ypeythinos_amm";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "ypeythinos_klados";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "ypeythinos_wres";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "ypeythinos_again";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn1_name";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn1_amm";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn1_klados";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn1_wres";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn1_again";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn2_name";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn2_amm";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn2_klados";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn2_wres";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn2_again";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn3_name";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn3_amm";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn3_klados";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn3_wres";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn3_again";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "mathites_synolo";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "agoria";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "koritsia";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "amiges";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "meet_day";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "meet_hour";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "meet_place";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "arxeio";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "ypothemata";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "stoxoi";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "methodologia";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "syndeseis";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "month1";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "month2";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "month3";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "month4";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "month5";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "episkepseis";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "submission_date";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "is_finalized";
$tdataFINAL_SUBMITED[".inlineAddFields"][] = "sch_id";

$tdataFINAL_SUBMITED[".editFields"] = array();
$tdataFINAL_SUBMITED[".editFields"][] = "programa";
$tdataFINAL_SUBMITED[".editFields"][] = "date";
$tdataFINAL_SUBMITED[".editFields"][] = "ar_protocol";
$tdataFINAL_SUBMITED[".editFields"][] = "sxol_etos";
$tdataFINAL_SUBMITED[".editFields"][] = "dide_name";
$tdataFINAL_SUBMITED[".editFields"][] = "sch_name";
$tdataFINAL_SUBMITED[".editFields"][] = "tel_ergasias";
$tdataFINAL_SUBMITED[".editFields"][] = "dimos";
$tdataFINAL_SUBMITED[".editFields"][] = "fax";
$tdataFINAL_SUBMITED[".editFields"][] = "e_mail";
$tdataFINAL_SUBMITED[".editFields"][] = "sch_teachers";
$tdataFINAL_SUBMITED[".editFields"][] = "sch_students";
$tdataFINAL_SUBMITED[".editFields"][] = "dieythintis_name";
$tdataFINAL_SUBMITED[".editFields"][] = "klados_dieythinti";
$tdataFINAL_SUBMITED[".editFields"][] = "program_title";
$tdataFINAL_SUBMITED[".editFields"][] = "ar_praksis";
$tdataFINAL_SUBMITED[".editFields"][] = "date_praksis";
$tdataFINAL_SUBMITED[".editFields"][] = "sch_orario";
$tdataFINAL_SUBMITED[".editFields"][] = "ypeythinos_name";
$tdataFINAL_SUBMITED[".editFields"][] = "ypeythinos_amm";
$tdataFINAL_SUBMITED[".editFields"][] = "ypeythinos_klados";
$tdataFINAL_SUBMITED[".editFields"][] = "ypeythinos_wres";
$tdataFINAL_SUBMITED[".editFields"][] = "ypeythinos_again";
$tdataFINAL_SUBMITED[".editFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn1_name";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn1_amm";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn1_klados";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn1_wres";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn1_again";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn2_name";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn2_amm";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn2_klados";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn2_wres";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn2_again";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn3_name";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn3_amm";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn3_klados";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn3_wres";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn3_again";
$tdataFINAL_SUBMITED[".editFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_SUBMITED[".editFields"][] = "mathites_synolo";
$tdataFINAL_SUBMITED[".editFields"][] = "agoria";
$tdataFINAL_SUBMITED[".editFields"][] = "koritsia";
$tdataFINAL_SUBMITED[".editFields"][] = "amiges";
$tdataFINAL_SUBMITED[".editFields"][] = "meet_day";
$tdataFINAL_SUBMITED[".editFields"][] = "meet_hour";
$tdataFINAL_SUBMITED[".editFields"][] = "meet_place";
$tdataFINAL_SUBMITED[".editFields"][] = "arxeio";
$tdataFINAL_SUBMITED[".editFields"][] = "ypothemata";
$tdataFINAL_SUBMITED[".editFields"][] = "stoxoi";
$tdataFINAL_SUBMITED[".editFields"][] = "methodologia";
$tdataFINAL_SUBMITED[".editFields"][] = "syndeseis";
$tdataFINAL_SUBMITED[".editFields"][] = "month1";
$tdataFINAL_SUBMITED[".editFields"][] = "month2";
$tdataFINAL_SUBMITED[".editFields"][] = "month3";
$tdataFINAL_SUBMITED[".editFields"][] = "month4";
$tdataFINAL_SUBMITED[".editFields"][] = "month5";
$tdataFINAL_SUBMITED[".editFields"][] = "episkepseis";
$tdataFINAL_SUBMITED[".editFields"][] = "submission_date";
$tdataFINAL_SUBMITED[".editFields"][] = "is_finalized";
$tdataFINAL_SUBMITED[".editFields"][] = "sch_id";
$tdataFINAL_SUBMITED[".editFields"][] = "submission_id";

$tdataFINAL_SUBMITED[".inlineEditFields"] = array();
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "submited";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "sch_id1";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "submission_id";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "programa";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "date";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "ar_protocol";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "sxol_etos";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "dide_name";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "sch_name";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "tel_ergasias";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "dimos";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "fax";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "e_mail";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "sch_teachers";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "sch_students";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "dieythintis_name";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "klados_dieythinti";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "program_title";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "ar_praksis";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "date_praksis";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "sch_orario";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "ypeythinos_name";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "ypeythinos_amm";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "ypeythinos_klados";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "ypeythinos_wres";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "ypeythinos_again";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn1_name";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn1_amm";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn1_klados";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn1_wres";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn1_again";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn2_name";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn2_amm";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn2_klados";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn2_wres";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn2_again";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn3_name";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn3_amm";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn3_klados";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn3_wres";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn3_again";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "mathites_synolo";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "agoria";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "koritsia";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "amiges";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "meet_day";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "meet_hour";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "meet_place";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "arxeio";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "ypothemata";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "stoxoi";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "methodologia";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "syndeseis";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "month1";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "month2";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "month3";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "month4";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "month5";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "episkepseis";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "submission_date";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "is_finalized";
$tdataFINAL_SUBMITED[".inlineEditFields"][] = "sch_id";

$tdataFINAL_SUBMITED[".exportFields"] = array();
$tdataFINAL_SUBMITED[".exportFields"][] = "submission_id";
$tdataFINAL_SUBMITED[".exportFields"][] = "programa";
$tdataFINAL_SUBMITED[".exportFields"][] = "date";
$tdataFINAL_SUBMITED[".exportFields"][] = "ar_protocol";
$tdataFINAL_SUBMITED[".exportFields"][] = "sxol_etos";
$tdataFINAL_SUBMITED[".exportFields"][] = "dide_name";
$tdataFINAL_SUBMITED[".exportFields"][] = "sch_name";
$tdataFINAL_SUBMITED[".exportFields"][] = "tel_ergasias";
$tdataFINAL_SUBMITED[".exportFields"][] = "dimos";
$tdataFINAL_SUBMITED[".exportFields"][] = "fax";
$tdataFINAL_SUBMITED[".exportFields"][] = "e_mail";
$tdataFINAL_SUBMITED[".exportFields"][] = "sch_teachers";
$tdataFINAL_SUBMITED[".exportFields"][] = "sch_students";
$tdataFINAL_SUBMITED[".exportFields"][] = "dieythintis_name";
$tdataFINAL_SUBMITED[".exportFields"][] = "klados_dieythinti";
$tdataFINAL_SUBMITED[".exportFields"][] = "program_title";
$tdataFINAL_SUBMITED[".exportFields"][] = "ar_praksis";
$tdataFINAL_SUBMITED[".exportFields"][] = "date_praksis";
$tdataFINAL_SUBMITED[".exportFields"][] = "sch_orario";
$tdataFINAL_SUBMITED[".exportFields"][] = "ypeythinos_name";
$tdataFINAL_SUBMITED[".exportFields"][] = "ypeythinos_amm";
$tdataFINAL_SUBMITED[".exportFields"][] = "ypeythinos_klados";
$tdataFINAL_SUBMITED[".exportFields"][] = "ypeythinos_wres";
$tdataFINAL_SUBMITED[".exportFields"][] = "ypeythinos_again";
$tdataFINAL_SUBMITED[".exportFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn1_name";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn1_amm";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn1_klados";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn1_wres";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn1_again";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn2_name";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn2_amm";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn2_klados";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn2_wres";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn2_again";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn3_name";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn3_amm";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn3_klados";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn3_wres";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn3_again";
$tdataFINAL_SUBMITED[".exportFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_SUBMITED[".exportFields"][] = "mathites_synolo";
$tdataFINAL_SUBMITED[".exportFields"][] = "agoria";
$tdataFINAL_SUBMITED[".exportFields"][] = "koritsia";
$tdataFINAL_SUBMITED[".exportFields"][] = "amiges";
$tdataFINAL_SUBMITED[".exportFields"][] = "meet_day";
$tdataFINAL_SUBMITED[".exportFields"][] = "meet_hour";
$tdataFINAL_SUBMITED[".exportFields"][] = "meet_place";
$tdataFINAL_SUBMITED[".exportFields"][] = "arxeio";
$tdataFINAL_SUBMITED[".exportFields"][] = "ypothemata";
$tdataFINAL_SUBMITED[".exportFields"][] = "stoxoi";
$tdataFINAL_SUBMITED[".exportFields"][] = "methodologia";
$tdataFINAL_SUBMITED[".exportFields"][] = "syndeseis";
$tdataFINAL_SUBMITED[".exportFields"][] = "month1";
$tdataFINAL_SUBMITED[".exportFields"][] = "month2";
$tdataFINAL_SUBMITED[".exportFields"][] = "month3";
$tdataFINAL_SUBMITED[".exportFields"][] = "month4";
$tdataFINAL_SUBMITED[".exportFields"][] = "month5";
$tdataFINAL_SUBMITED[".exportFields"][] = "episkepseis";
$tdataFINAL_SUBMITED[".exportFields"][] = "submission_date";
$tdataFINAL_SUBMITED[".exportFields"][] = "is_finalized";
$tdataFINAL_SUBMITED[".exportFields"][] = "sch_id";
$tdataFINAL_SUBMITED[".exportFields"][] = "submited";
$tdataFINAL_SUBMITED[".exportFields"][] = "sch_id1";

$tdataFINAL_SUBMITED[".printFields"] = array();
$tdataFINAL_SUBMITED[".printFields"][] = "submited";
$tdataFINAL_SUBMITED[".printFields"][] = "sch_id1";
$tdataFINAL_SUBMITED[".printFields"][] = "submission_id";
$tdataFINAL_SUBMITED[".printFields"][] = "programa";
$tdataFINAL_SUBMITED[".printFields"][] = "date";
$tdataFINAL_SUBMITED[".printFields"][] = "ar_protocol";
$tdataFINAL_SUBMITED[".printFields"][] = "sxol_etos";
$tdataFINAL_SUBMITED[".printFields"][] = "dide_name";
$tdataFINAL_SUBMITED[".printFields"][] = "sch_name";
$tdataFINAL_SUBMITED[".printFields"][] = "tel_ergasias";
$tdataFINAL_SUBMITED[".printFields"][] = "dimos";
$tdataFINAL_SUBMITED[".printFields"][] = "fax";
$tdataFINAL_SUBMITED[".printFields"][] = "e_mail";
$tdataFINAL_SUBMITED[".printFields"][] = "sch_teachers";
$tdataFINAL_SUBMITED[".printFields"][] = "sch_students";
$tdataFINAL_SUBMITED[".printFields"][] = "dieythintis_name";
$tdataFINAL_SUBMITED[".printFields"][] = "klados_dieythinti";
$tdataFINAL_SUBMITED[".printFields"][] = "program_title";
$tdataFINAL_SUBMITED[".printFields"][] = "ar_praksis";
$tdataFINAL_SUBMITED[".printFields"][] = "date_praksis";
$tdataFINAL_SUBMITED[".printFields"][] = "sch_orario";
$tdataFINAL_SUBMITED[".printFields"][] = "ypeythinos_name";
$tdataFINAL_SUBMITED[".printFields"][] = "ypeythinos_amm";
$tdataFINAL_SUBMITED[".printFields"][] = "ypeythinos_klados";
$tdataFINAL_SUBMITED[".printFields"][] = "ypeythinos_wres";
$tdataFINAL_SUBMITED[".printFields"][] = "ypeythinos_again";
$tdataFINAL_SUBMITED[".printFields"][] = "ypeythinos_epimorfosi";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn1_name";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn1_amm";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn1_klados";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn1_wres";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn1_again";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn1_epimorfosi";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn2_name";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn2_amm";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn2_klados";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn2_wres";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn2_again";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn2_epimorfosi";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn3_name";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn3_amm";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn3_klados";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn3_wres";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn3_again";
$tdataFINAL_SUBMITED[".printFields"][] = "symetexwn3_epimorfosi";
$tdataFINAL_SUBMITED[".printFields"][] = "mathites_synolo";
$tdataFINAL_SUBMITED[".printFields"][] = "agoria";
$tdataFINAL_SUBMITED[".printFields"][] = "koritsia";
$tdataFINAL_SUBMITED[".printFields"][] = "amiges";
$tdataFINAL_SUBMITED[".printFields"][] = "meet_day";
$tdataFINAL_SUBMITED[".printFields"][] = "meet_hour";
$tdataFINAL_SUBMITED[".printFields"][] = "meet_place";
$tdataFINAL_SUBMITED[".printFields"][] = "arxeio";
$tdataFINAL_SUBMITED[".printFields"][] = "ypothemata";
$tdataFINAL_SUBMITED[".printFields"][] = "stoxoi";
$tdataFINAL_SUBMITED[".printFields"][] = "methodologia";
$tdataFINAL_SUBMITED[".printFields"][] = "syndeseis";
$tdataFINAL_SUBMITED[".printFields"][] = "month1";
$tdataFINAL_SUBMITED[".printFields"][] = "month2";
$tdataFINAL_SUBMITED[".printFields"][] = "month3";
$tdataFINAL_SUBMITED[".printFields"][] = "month4";
$tdataFINAL_SUBMITED[".printFields"][] = "month5";
$tdataFINAL_SUBMITED[".printFields"][] = "episkepseis";
$tdataFINAL_SUBMITED[".printFields"][] = "submission_date";
$tdataFINAL_SUBMITED[".printFields"][] = "is_finalized";
$tdataFINAL_SUBMITED[".printFields"][] = "sch_id";

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
	
		
		
	$tdataFINAL_SUBMITED["submission_id"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["programa"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["date"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["ar_protocol"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["sxol_etos"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["dide_name"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["sch_name"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["tel_ergasias"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["dimos"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["fax"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["e_mail"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["sch_teachers"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["sch_students"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["dieythintis_name"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["klados_dieythinti"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["program_title"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["ar_praksis"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["date_praksis"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["sch_orario"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["ypeythinos_name"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["ypeythinos_amm"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["ypeythinos_klados"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["ypeythinos_wres"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["ypeythinos_again"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["ypeythinos_epimorfosi"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn1_name"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn1_amm"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn1_klados"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn1_wres"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn1_again"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn1_epimorfosi"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn2_name"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn2_amm"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn2_klados"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn2_wres"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn2_again"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn2_epimorfosi"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn3_name"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn3_amm"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn3_klados"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn3_wres"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn3_again"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["symetexwn3_epimorfosi"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["mathites_synolo"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["agoria"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["koritsia"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["amiges"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["meet_day"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["meet_hour"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["meet_place"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["arxeio"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["ypothemata"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["stoxoi"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["methodologia"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["syndeseis"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["month1"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["month2"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["month3"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["month4"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["month5"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["episkepseis"] = $fdata;
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
	
		
		
	$tdataFINAL_SUBMITED["submission_date"] = $fdata;
//	is_finalized
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
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
	
		
		
	$tdataFINAL_SUBMITED["is_finalized"] = $fdata;
//	sch_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
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
	
		
		
	$tdataFINAL_SUBMITED["sch_id"] = $fdata;
//	submited
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
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
	
		
		
	$tdataFINAL_SUBMITED["submited"] = $fdata;
//	sch_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "sch_id1";
	$fdata["GoodName"] = "sch_id1";
	$fdata["ownerTable"] = "pschools";
	$fdata["Label"] = "Sch Id1"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sch_id"; 
		$fdata["FullName"] = "pschools.sch_id";
	
		
		
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
	
		
		
	$tdataFINAL_SUBMITED["sch_id1"] = $fdata;

	
$tables_data["FINAL SUBMITED"]=&$tdataFINAL_SUBMITED;
$field_labels["FINAL_SUBMITED"] = &$fieldLabelsFINAL_SUBMITED;
$fieldToolTips["FINAL SUBMITED"] = &$fieldToolTipsFINAL_SUBMITED;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["FINAL SUBMITED"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["FINAL SUBMITED"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_FINAL_SUBMITED()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ft_form_4.submission_id,  ft_form_4.programa,  ft_form_4.`date`,  ft_form_4.ar_protocol,  ft_form_4.sxol_etos,  ft_form_4.dide_name,  ft_form_4.sch_name,  ft_form_4.tel_ergasias,  ft_form_4.dimos,  ft_form_4.fax,  ft_form_4.e_mail,  ft_form_4.sch_teachers,  ft_form_4.sch_students,  ft_form_4.dieythintis_name,  ft_form_4.klados_dieythinti,  ft_form_4.program_title,  ft_form_4.ar_praksis,  ft_form_4.date_praksis,  ft_form_4.sch_orario,  ft_form_4.ypeythinos_name,  ft_form_4.ypeythinos_amm,  ft_form_4.ypeythinos_klados,  ft_form_4.ypeythinos_wres,  ft_form_4.ypeythinos_again,  ft_form_4.ypeythinos_epimorfosi,  ft_form_4.symetexwn1_name,  ft_form_4.symetexwn1_amm,  ft_form_4.symetexwn1_klados,  ft_form_4.symetexwn1_wres,  ft_form_4.symetexwn1_again,  ft_form_4.symetexwn1_epimorfosi,  ft_form_4.symetexwn2_name,  ft_form_4.symetexwn2_amm,  ft_form_4.symetexwn2_klados,  ft_form_4.symetexwn2_wres,  ft_form_4.symetexwn2_again,  ft_form_4.symetexwn2_epimorfosi,  ft_form_4.symetexwn3_name,  ft_form_4.symetexwn3_amm,  ft_form_4.symetexwn3_klados,  ft_form_4.symetexwn3_wres,  ft_form_4.symetexwn3_again,  ft_form_4.symetexwn3_epimorfosi,  ft_form_4.mathites_synolo,  ft_form_4.agoria,  ft_form_4.koritsia,  ft_form_4.amiges,  ft_form_4.meet_day,  ft_form_4.meet_hour,  ft_form_4.meet_place,  ft_form_4.arxeio,  ft_form_4.ypothemata,  ft_form_4.stoxoi,  ft_form_4.methodologia,  ft_form_4.syndeseis,  ft_form_4.month1,  ft_form_4.month2,  ft_form_4.month3,  ft_form_4.month4,  ft_form_4.month5,  ft_form_4.episkepseis,  ft_form_4.submission_date,  ft_form_4.is_finalized,  ft_form_4.sch_id,  pschools.submited,  pschools.sch_id AS sch_id1";
$proto0["m_strFrom"] = "FROM ft_form_4  INNER JOIN pschools ON ft_form_4.sch_id = pschools.sch_id";
$proto0["m_strWhere"] = "(pschools.submited =1)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "pschools.submited =1";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "submited",
	"m_strTable" => "pschools"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=1";
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
	"m_strName" => "is_finalized",
	"m_strTable" => "ft_form_4"
));

$proto129["m_expr"]=$obj;
$proto129["m_alias"] = "";
$obj = new SQLFieldListItem($proto129);

$proto0["m_fieldlist"][]=$obj;
						$proto131=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_id",
	"m_strTable" => "ft_form_4"
));

$proto131["m_expr"]=$obj;
$proto131["m_alias"] = "";
$obj = new SQLFieldListItem($proto131);

$proto0["m_fieldlist"][]=$obj;
						$proto133=array();
			$obj = new SQLField(array(
	"m_strName" => "submited",
	"m_strTable" => "pschools"
));

$proto133["m_expr"]=$obj;
$proto133["m_alias"] = "";
$obj = new SQLFieldListItem($proto133);

$proto0["m_fieldlist"][]=$obj;
						$proto135=array();
			$obj = new SQLField(array(
	"m_strName" => "sch_id",
	"m_strTable" => "pschools"
));

$proto135["m_expr"]=$obj;
$proto135["m_alias"] = "sch_id1";
$obj = new SQLFieldListItem($proto135);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto137=array();
$proto137["m_link"] = "SQLL_MAIN";
			$proto138=array();
$proto138["m_strName"] = "ft_form_4";
$proto138["m_columns"] = array();
$proto138["m_columns"][] = "submission_id";
$proto138["m_columns"][] = "programa";
$proto138["m_columns"][] = "date";
$proto138["m_columns"][] = "ar_protocol";
$proto138["m_columns"][] = "sxol_etos";
$proto138["m_columns"][] = "dide_name";
$proto138["m_columns"][] = "sch_name";
$proto138["m_columns"][] = "tel_ergasias";
$proto138["m_columns"][] = "dimos";
$proto138["m_columns"][] = "fax";
$proto138["m_columns"][] = "e_mail";
$proto138["m_columns"][] = "sch_teachers";
$proto138["m_columns"][] = "sch_students";
$proto138["m_columns"][] = "dieythintis_name";
$proto138["m_columns"][] = "klados_dieythinti";
$proto138["m_columns"][] = "program_title";
$proto138["m_columns"][] = "ar_praksis";
$proto138["m_columns"][] = "date_praksis";
$proto138["m_columns"][] = "sch_orario";
$proto138["m_columns"][] = "ypeythinos_name";
$proto138["m_columns"][] = "ypeythinos_amm";
$proto138["m_columns"][] = "ypeythinos_klados";
$proto138["m_columns"][] = "ypeythinos_wres";
$proto138["m_columns"][] = "ypeythinos_again";
$proto138["m_columns"][] = "ypeythinos_epimorfosi";
$proto138["m_columns"][] = "symetexwn1_name";
$proto138["m_columns"][] = "symetexwn1_amm";
$proto138["m_columns"][] = "symetexwn1_klados";
$proto138["m_columns"][] = "symetexwn1_wres";
$proto138["m_columns"][] = "symetexwn1_again";
$proto138["m_columns"][] = "symetexwn1_epimorfosi";
$proto138["m_columns"][] = "symetexwn2_name";
$proto138["m_columns"][] = "symetexwn2_amm";
$proto138["m_columns"][] = "symetexwn2_klados";
$proto138["m_columns"][] = "symetexwn2_wres";
$proto138["m_columns"][] = "symetexwn2_again";
$proto138["m_columns"][] = "symetexwn2_epimorfosi";
$proto138["m_columns"][] = "symetexwn3_name";
$proto138["m_columns"][] = "symetexwn3_amm";
$proto138["m_columns"][] = "symetexwn3_klados";
$proto138["m_columns"][] = "symetexwn3_wres";
$proto138["m_columns"][] = "symetexwn3_again";
$proto138["m_columns"][] = "symetexwn3_epimorfosi";
$proto138["m_columns"][] = "mathites_synolo";
$proto138["m_columns"][] = "agoria";
$proto138["m_columns"][] = "koritsia";
$proto138["m_columns"][] = "amiges";
$proto138["m_columns"][] = "meet_day";
$proto138["m_columns"][] = "meet_hour";
$proto138["m_columns"][] = "meet_place";
$proto138["m_columns"][] = "arxeio";
$proto138["m_columns"][] = "ypothemata";
$proto138["m_columns"][] = "stoxoi";
$proto138["m_columns"][] = "methodologia";
$proto138["m_columns"][] = "syndeseis";
$proto138["m_columns"][] = "month1";
$proto138["m_columns"][] = "month2";
$proto138["m_columns"][] = "month3";
$proto138["m_columns"][] = "month4";
$proto138["m_columns"][] = "month5";
$proto138["m_columns"][] = "episkepseis";
$proto138["m_columns"][] = "submission_date";
$proto138["m_columns"][] = "last_modified_date";
$proto138["m_columns"][] = "ip_address";
$proto138["m_columns"][] = "is_finalized";
$proto138["m_columns"][] = "sch_id";
$obj = new SQLTable($proto138);

$proto137["m_table"] = $obj;
$proto137["m_alias"] = "";
$proto139=array();
$proto139["m_sql"] = "";
$proto139["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto139["m_column"]=$obj;
$proto139["m_contained"] = array();
$proto139["m_strCase"] = "";
$proto139["m_havingmode"] = "0";
$proto139["m_inBrackets"] = "0";
$proto139["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto139);

$proto137["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto137);

$proto0["m_fromlist"][]=$obj;
												$proto141=array();
$proto141["m_link"] = "SQLL_INNERJOIN";
			$proto142=array();
$proto142["m_strName"] = "pschools";
$proto142["m_columns"] = array();
$proto142["m_columns"][] = "sch_id";
$proto142["m_columns"][] = "submited";
$proto142["m_columns"][] = "username";
$proto142["m_columns"][] = "password";
$proto142["m_columns"][] = "sch_code";
$proto142["m_columns"][] = "sch_perioxi";
$proto142["m_columns"][] = "sch_name";
$proto142["m_columns"][] = "sch_dimos";
$proto142["m_columns"][] = "sch_phone";
$proto142["m_columns"][] = "fax";
$proto142["m_columns"][] = "email";
$obj = new SQLTable($proto142);

$proto141["m_table"] = $obj;
$proto141["m_alias"] = "";
$proto143=array();
$proto143["m_sql"] = "ft_form_4.sch_id = pschools.sch_id";
$proto143["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sch_id",
	"m_strTable" => "ft_form_4"
));

$proto143["m_column"]=$obj;
$proto143["m_contained"] = array();
$proto143["m_strCase"] = "= pschools.sch_id";
$proto143["m_havingmode"] = "0";
$proto143["m_inBrackets"] = "0";
$proto143["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto143);

$proto141["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto141);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_FINAL_SUBMITED = createSqlQuery_FINAL_SUBMITED();
																																																																		$tdataFINAL_SUBMITED[".sqlquery"] = $queryData_FINAL_SUBMITED;

$tableEvents["FINAL SUBMITED"] = new eventsBase;
$tdataFINAL_SUBMITED[".hasEvents"] = false;

$cipherer = new RunnerCipherer("FINAL SUBMITED");

?>