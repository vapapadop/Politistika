<?php
require_once(getabspath("classes/cipherer.php"));
$tdataft_form_4 = array();
	$tdataft_form_4[".NumberOfChars"] = 80; 
	$tdataft_form_4[".ShortName"] = "ft_form_4";
	$tdataft_form_4[".OwnerID"] = "sch_id";
	$tdataft_form_4[".OriginalTable"] = "ft_form_4";

//	field labels
$fieldLabelsft_form_4 = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsft_form_4["English"] = array();
	$fieldToolTipsft_form_4["English"] = array();
	$fieldLabelsft_form_4["English"]["submission_id"] = "Αρ. Ηλ. Καταχώρησης";
	$fieldToolTipsft_form_4["English"]["submission_id"] = "";
	$fieldLabelsft_form_4["English"]["programa"] = "Τύπος Προγράματος";
	$fieldToolTipsft_form_4["English"]["programa"] = "";
	$fieldLabelsft_form_4["English"]["date"] = "Ημνια Πρωτλου Σχολείου";
	$fieldToolTipsft_form_4["English"]["date"] = "";
	$fieldLabelsft_form_4["English"]["ar_protocol"] = "Αρ. Πρωτλου Σχολείου";
	$fieldToolTipsft_form_4["English"]["ar_protocol"] = "";
	$fieldLabelsft_form_4["English"]["sxol_etos"] = "Σχολ. Ετος";
	$fieldToolTipsft_form_4["English"]["sxol_etos"] = "";
	$fieldLabelsft_form_4["English"]["dide_name"] = "ΔΔΕ Ονομα";
	$fieldToolTipsft_form_4["English"]["dide_name"] = "";
	$fieldLabelsft_form_4["English"]["sch_name"] = "Σχολείο";
	$fieldToolTipsft_form_4["English"]["sch_name"] = "";
	$fieldLabelsft_form_4["English"]["tel_ergasias"] = "Τηλ. Σχολείου";
	$fieldToolTipsft_form_4["English"]["tel_ergasias"] = "";
	$fieldLabelsft_form_4["English"]["dimos"] = "Δήμος Σχολείου";
	$fieldToolTipsft_form_4["English"]["dimos"] = "";
	$fieldLabelsft_form_4["English"]["fax"] = "Fax";
	$fieldToolTipsft_form_4["English"]["fax"] = "";
	$fieldLabelsft_form_4["English"]["e_mail"] = "E Mail";
	$fieldToolTipsft_form_4["English"]["e_mail"] = "";
	$fieldLabelsft_form_4["English"]["sch_teachers"] = "Αρ. Καθηγητών Σχολείου";
	$fieldToolTipsft_form_4["English"]["sch_teachers"] = "";
	$fieldLabelsft_form_4["English"]["sch_students"] = "Αρ. Μαθητών Σχολείου";
	$fieldToolTipsft_form_4["English"]["sch_students"] = "";
	$fieldLabelsft_form_4["English"]["dieythintis_name"] = "Ονομα Διευθυντή";
	$fieldToolTipsft_form_4["English"]["dieythintis_name"] = "";
	$fieldLabelsft_form_4["English"]["klados_dieythinti"] = "Κλάδος Διευθυντή";
	$fieldToolTipsft_form_4["English"]["klados_dieythinti"] = "";
	$fieldLabelsft_form_4["English"]["program_title"] = "Τίτλος Προγράμματος";
	$fieldToolTipsft_form_4["English"]["program_title"] = "";
	$fieldLabelsft_form_4["English"]["ar_praksis"] = "Αρ. Πράξης Συλλόγου";
	$fieldToolTipsft_form_4["English"]["ar_praksis"] = "";
	$fieldLabelsft_form_4["English"]["date_praksis"] = "Ημνια Πράξης Συλλόγου";
	$fieldToolTipsft_form_4["English"]["date_praksis"] = "";
	$fieldLabelsft_form_4["English"]["sch_orario"] = "Ωράριο Σχολείου";
	$fieldToolTipsft_form_4["English"]["sch_orario"] = "";
	$fieldLabelsft_form_4["English"]["ypeythinos_name"] = "Όνομα Υπευθύνου";
	$fieldToolTipsft_form_4["English"]["ypeythinos_name"] = "";
	$fieldLabelsft_form_4["English"]["ypeythinos_amm"] = "ΑΦΜ Υπευθύνου";
	$fieldToolTipsft_form_4["English"]["ypeythinos_amm"] = "";
	$fieldLabelsft_form_4["English"]["ypeythinos_klados"] = "Κλάδος Υπευθύνου";
	$fieldToolTipsft_form_4["English"]["ypeythinos_klados"] = "";
	$fieldLabelsft_form_4["English"]["ypeythinos_wres"] = "Ώρες Υπευθύνου";
	$fieldToolTipsft_form_4["English"]["ypeythinos_wres"] = "";
	$fieldLabelsft_form_4["English"]["ypeythinos_again"] = "Υπεύθυνος ξανά";
	$fieldToolTipsft_form_4["English"]["ypeythinos_again"] = "";
	$fieldLabelsft_form_4["English"]["ypeythinos_epimorfosi"] = "Επιμόρφωση Υπευθύνου";
	$fieldToolTipsft_form_4["English"]["ypeythinos_epimorfosi"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn1_name"] = "Όνομα Συμμετέχων1";
	$fieldToolTipsft_form_4["English"]["symetexwn1_name"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn1_amm"] = "ΑΦΜ Συμμετέχων1";
	$fieldToolTipsft_form_4["English"]["symetexwn1_amm"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn1_klados"] = "Κλάδος Συμμετέχων1";
	$fieldToolTipsft_form_4["English"]["symetexwn1_klados"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn1_wres"] = "Ώρες Συμμετέχων1";
	$fieldToolTipsft_form_4["English"]["symetexwn1_wres"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn1_again"] = "Συμμετέχων1 ξανά";
	$fieldToolTipsft_form_4["English"]["symetexwn1_again"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn1_epimorfosi"] = "Επιμόρφωση Συμμετέχων1";
	$fieldToolTipsft_form_4["English"]["symetexwn1_epimorfosi"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn2_name"] = "Όνομα Συμμετέχων2";
	$fieldToolTipsft_form_4["English"]["symetexwn2_name"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn2_amm"] = "ΑΦΜ Συμμετέχων2";
	$fieldToolTipsft_form_4["English"]["symetexwn2_amm"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn2_klados"] = "Κλάδος Συμμετέχων2";
	$fieldToolTipsft_form_4["English"]["symetexwn2_klados"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn2_wres"] = "Ώρες Συμμετέχων2";
	$fieldToolTipsft_form_4["English"]["symetexwn2_wres"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn2_again"] = "Συμμετέχων2 ξανά";
	$fieldToolTipsft_form_4["English"]["symetexwn2_again"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn2_epimorfosi"] = "Επιμόρφωση Συμμετέχων2";
	$fieldToolTipsft_form_4["English"]["symetexwn2_epimorfosi"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn3_name"] = "Όνομα Συμμετέχων3";
	$fieldToolTipsft_form_4["English"]["symetexwn3_name"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn3_amm"] = "ΑΦΜ Συμμετέχων3";
	$fieldToolTipsft_form_4["English"]["symetexwn3_amm"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn3_klados"] = "Κλάδος Συμμετέχων3";
	$fieldToolTipsft_form_4["English"]["symetexwn3_klados"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn3_wres"] = "Ώρες Συμμετέχων3";
	$fieldToolTipsft_form_4["English"]["symetexwn3_wres"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn3_again"] = "Συμμετέχων3 ξανά";
	$fieldToolTipsft_form_4["English"]["symetexwn3_again"] = "";
	$fieldLabelsft_form_4["English"]["symetexwn3_epimorfosi"] = "Επιμόρφωση Συμμετέχων3";
	$fieldToolTipsft_form_4["English"]["symetexwn3_epimorfosi"] = "";
	$fieldLabelsft_form_4["English"]["mathites_synolo"] = "Σύνολο Μαθητές Ομάδας";
	$fieldToolTipsft_form_4["English"]["mathites_synolo"] = "";
	$fieldLabelsft_form_4["English"]["agoria"] = "Αγόρια";
	$fieldToolTipsft_form_4["English"]["agoria"] = "";
	$fieldLabelsft_form_4["English"]["koritsia"] = "Κορίτσια";
	$fieldToolTipsft_form_4["English"]["koritsia"] = "";
	$fieldLabelsft_form_4["English"]["amiges"] = "Σύνθεση Ομάδας";
	$fieldToolTipsft_form_4["English"]["amiges"] = "";
	$fieldLabelsft_form_4["English"]["meet_day"] = "Ημέρα/ες Συνάντησης";
	$fieldToolTipsft_form_4["English"]["meet_day"] = "";
	$fieldLabelsft_form_4["English"]["meet_hour"] = "Ώρα/ες Συνάντησης";
	$fieldToolTipsft_form_4["English"]["meet_hour"] = "";
	$fieldLabelsft_form_4["English"]["meet_place"] = "Τόπος Συνάντησης";
	$fieldToolTipsft_form_4["English"]["meet_place"] = "";
	$fieldLabelsft_form_4["English"]["arxeio"] = "Υπάρχει Αρχείο ";
	$fieldToolTipsft_form_4["English"]["arxeio"] = "";
	$fieldLabelsft_form_4["English"]["ypothemata"] = "Υποθέματα";
	$fieldToolTipsft_form_4["English"]["ypothemata"] = "";
	$fieldLabelsft_form_4["English"]["stoxoi"] = "Στόχοι";
	$fieldToolTipsft_form_4["English"]["stoxoi"] = "";
	$fieldLabelsft_form_4["English"]["methodologia"] = "Μεθοδολογία";
	$fieldToolTipsft_form_4["English"]["methodologia"] = "";
	$fieldLabelsft_form_4["English"]["syndeseis"] = "Συνδέσεις";
	$fieldToolTipsft_form_4["English"]["syndeseis"] = "";
	$fieldLabelsft_form_4["English"]["month1"] = "Μήνας 1";
	$fieldToolTipsft_form_4["English"]["month1"] = "";
	$fieldLabelsft_form_4["English"]["month2"] = "Μήνας 2";
	$fieldToolTipsft_form_4["English"]["month2"] = "";
	$fieldLabelsft_form_4["English"]["month3"] = "Μήνας 3";
	$fieldToolTipsft_form_4["English"]["month3"] = "";
	$fieldLabelsft_form_4["English"]["month4"] = "Μήνας 4";
	$fieldToolTipsft_form_4["English"]["month4"] = "";
	$fieldLabelsft_form_4["English"]["month5"] = "Μήνας 5";
	$fieldToolTipsft_form_4["English"]["month5"] = "";
	$fieldLabelsft_form_4["English"]["episkepseis"] = "Αρ. Επισκέψεων";
	$fieldToolTipsft_form_4["English"]["episkepseis"] = "";
	$fieldLabelsft_form_4["English"]["submission_date"] = "Ημερομηνία Υποβολής Αιτησης";
	$fieldToolTipsft_form_4["English"]["submission_date"] = "";
	$fieldLabelsft_form_4["English"]["last_modified_date"] = "Last Modified Date";
	$fieldToolTipsft_form_4["English"]["last_modified_date"] = "";
	$fieldLabelsft_form_4["English"]["ip_address"] = "Ip Address";
	$fieldToolTipsft_form_4["English"]["ip_address"] = "";
	$fieldLabelsft_form_4["English"]["is_finalized"] = "Διακοπή Προγράμματος";
	$fieldToolTipsft_form_4["English"]["is_finalized"] = "";
	$fieldLabelsft_form_4["English"]["sch_id"] = "sch_id";
	$fieldToolTipsft_form_4["English"]["sch_id"] = "";
	if (count($fieldToolTipsft_form_4["English"]))
		$tdataft_form_4[".isUseToolTips"] = true;
}
	
	
	$tdataft_form_4[".NCSearch"] = true;



$tdataft_form_4[".shortTableName"] = "ft_form_4";
$tdataft_form_4[".nSecOptions"] = 1;
$tdataft_form_4[".recsPerRowList"] = 1;
$tdataft_form_4[".mainTableOwnerID"] = "sch_id";
$tdataft_form_4[".moveNext"] = 1;
$tdataft_form_4[".nType"] = 0;

$tdataft_form_4[".strOriginalTableName"] = "ft_form_4";




$tdataft_form_4[".showAddInPopup"] = false;

$tdataft_form_4[".showEditInPopup"] = false;

$tdataft_form_4[".showViewInPopup"] = false;

$tdataft_form_4[".fieldsForRegister"] = array();

$tdataft_form_4[".listAjax"] = false;

	$tdataft_form_4[".audit"] = false;

	$tdataft_form_4[".locking"] = false;

$tdataft_form_4[".listIcons"] = true;
$tdataft_form_4[".edit"] = true;
$tdataft_form_4[".inlineEdit"] = true;
$tdataft_form_4[".inlineAdd"] = true;
$tdataft_form_4[".view"] = true;

$tdataft_form_4[".exportTo"] = true;

$tdataft_form_4[".printFriendly"] = true;

$tdataft_form_4[".delete"] = true;

$tdataft_form_4[".showSimpleSearchOptions"] = false;

$tdataft_form_4[".showSearchPanel"] = true;

if (isMobile())
	$tdataft_form_4[".isUseAjaxSuggest"] = false;
else 
	$tdataft_form_4[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataft_form_4[".addPageEvents"] = false;

// use timepicker for search panel
$tdataft_form_4[".isUseTimeForSearch"] = false;




$tdataft_form_4[".allSearchFields"] = array();

$tdataft_form_4[".allSearchFields"][] = "submission_id";
$tdataft_form_4[".allSearchFields"][] = "programa";
$tdataft_form_4[".allSearchFields"][] = "date";
$tdataft_form_4[".allSearchFields"][] = "ar_protocol";
$tdataft_form_4[".allSearchFields"][] = "sxol_etos";
$tdataft_form_4[".allSearchFields"][] = "dide_name";
$tdataft_form_4[".allSearchFields"][] = "sch_name";
$tdataft_form_4[".allSearchFields"][] = "tel_ergasias";
$tdataft_form_4[".allSearchFields"][] = "dimos";
$tdataft_form_4[".allSearchFields"][] = "fax";
$tdataft_form_4[".allSearchFields"][] = "e_mail";
$tdataft_form_4[".allSearchFields"][] = "sch_teachers";
$tdataft_form_4[".allSearchFields"][] = "sch_students";
$tdataft_form_4[".allSearchFields"][] = "dieythintis_name";
$tdataft_form_4[".allSearchFields"][] = "klados_dieythinti";
$tdataft_form_4[".allSearchFields"][] = "program_title";
$tdataft_form_4[".allSearchFields"][] = "ar_praksis";
$tdataft_form_4[".allSearchFields"][] = "date_praksis";
$tdataft_form_4[".allSearchFields"][] = "sch_orario";
$tdataft_form_4[".allSearchFields"][] = "ypeythinos_name";
$tdataft_form_4[".allSearchFields"][] = "ypeythinos_amm";
$tdataft_form_4[".allSearchFields"][] = "ypeythinos_klados";
$tdataft_form_4[".allSearchFields"][] = "ypeythinos_wres";
$tdataft_form_4[".allSearchFields"][] = "ypeythinos_again";
$tdataft_form_4[".allSearchFields"][] = "ypeythinos_epimorfosi";
$tdataft_form_4[".allSearchFields"][] = "symetexwn1_name";
$tdataft_form_4[".allSearchFields"][] = "symetexwn1_amm";
$tdataft_form_4[".allSearchFields"][] = "symetexwn1_klados";
$tdataft_form_4[".allSearchFields"][] = "symetexwn1_wres";
$tdataft_form_4[".allSearchFields"][] = "symetexwn1_again";
$tdataft_form_4[".allSearchFields"][] = "symetexwn1_epimorfosi";
$tdataft_form_4[".allSearchFields"][] = "symetexwn2_name";
$tdataft_form_4[".allSearchFields"][] = "symetexwn2_amm";
$tdataft_form_4[".allSearchFields"][] = "symetexwn2_klados";
$tdataft_form_4[".allSearchFields"][] = "symetexwn2_wres";
$tdataft_form_4[".allSearchFields"][] = "symetexwn2_again";
$tdataft_form_4[".allSearchFields"][] = "symetexwn2_epimorfosi";
$tdataft_form_4[".allSearchFields"][] = "symetexwn3_name";
$tdataft_form_4[".allSearchFields"][] = "symetexwn3_amm";
$tdataft_form_4[".allSearchFields"][] = "symetexwn3_klados";
$tdataft_form_4[".allSearchFields"][] = "symetexwn3_wres";
$tdataft_form_4[".allSearchFields"][] = "symetexwn3_again";
$tdataft_form_4[".allSearchFields"][] = "symetexwn3_epimorfosi";
$tdataft_form_4[".allSearchFields"][] = "mathites_synolo";
$tdataft_form_4[".allSearchFields"][] = "agoria";
$tdataft_form_4[".allSearchFields"][] = "koritsia";
$tdataft_form_4[".allSearchFields"][] = "amiges";
$tdataft_form_4[".allSearchFields"][] = "meet_day";
$tdataft_form_4[".allSearchFields"][] = "meet_hour";
$tdataft_form_4[".allSearchFields"][] = "meet_place";
$tdataft_form_4[".allSearchFields"][] = "arxeio";
$tdataft_form_4[".allSearchFields"][] = "ypothemata";
$tdataft_form_4[".allSearchFields"][] = "stoxoi";
$tdataft_form_4[".allSearchFields"][] = "methodologia";
$tdataft_form_4[".allSearchFields"][] = "syndeseis";
$tdataft_form_4[".allSearchFields"][] = "month1";
$tdataft_form_4[".allSearchFields"][] = "month2";
$tdataft_form_4[".allSearchFields"][] = "month3";
$tdataft_form_4[".allSearchFields"][] = "month4";
$tdataft_form_4[".allSearchFields"][] = "month5";
$tdataft_form_4[".allSearchFields"][] = "episkepseis";
$tdataft_form_4[".allSearchFields"][] = "submission_date";
$tdataft_form_4[".allSearchFields"][] = "last_modified_date";
$tdataft_form_4[".allSearchFields"][] = "ip_address";
$tdataft_form_4[".allSearchFields"][] = "is_finalized";
$tdataft_form_4[".allSearchFields"][] = "sch_id";

$tdataft_form_4[".googleLikeFields"][] = "submission_id";
$tdataft_form_4[".googleLikeFields"][] = "programa";
$tdataft_form_4[".googleLikeFields"][] = "date";
$tdataft_form_4[".googleLikeFields"][] = "ar_protocol";
$tdataft_form_4[".googleLikeFields"][] = "sxol_etos";
$tdataft_form_4[".googleLikeFields"][] = "dide_name";
$tdataft_form_4[".googleLikeFields"][] = "sch_name";
$tdataft_form_4[".googleLikeFields"][] = "tel_ergasias";
$tdataft_form_4[".googleLikeFields"][] = "dimos";
$tdataft_form_4[".googleLikeFields"][] = "fax";
$tdataft_form_4[".googleLikeFields"][] = "e_mail";
$tdataft_form_4[".googleLikeFields"][] = "sch_teachers";
$tdataft_form_4[".googleLikeFields"][] = "sch_students";
$tdataft_form_4[".googleLikeFields"][] = "dieythintis_name";
$tdataft_form_4[".googleLikeFields"][] = "klados_dieythinti";
$tdataft_form_4[".googleLikeFields"][] = "program_title";
$tdataft_form_4[".googleLikeFields"][] = "ar_praksis";
$tdataft_form_4[".googleLikeFields"][] = "date_praksis";
$tdataft_form_4[".googleLikeFields"][] = "sch_orario";
$tdataft_form_4[".googleLikeFields"][] = "ypeythinos_name";
$tdataft_form_4[".googleLikeFields"][] = "ypeythinos_amm";
$tdataft_form_4[".googleLikeFields"][] = "ypeythinos_klados";
$tdataft_form_4[".googleLikeFields"][] = "ypeythinos_wres";
$tdataft_form_4[".googleLikeFields"][] = "ypeythinos_again";
$tdataft_form_4[".googleLikeFields"][] = "ypeythinos_epimorfosi";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn1_name";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn1_amm";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn1_klados";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn1_wres";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn1_again";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn1_epimorfosi";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn2_name";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn2_amm";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn2_klados";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn2_wres";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn2_again";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn2_epimorfosi";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn3_name";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn3_amm";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn3_klados";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn3_wres";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn3_again";
$tdataft_form_4[".googleLikeFields"][] = "symetexwn3_epimorfosi";
$tdataft_form_4[".googleLikeFields"][] = "mathites_synolo";
$tdataft_form_4[".googleLikeFields"][] = "agoria";
$tdataft_form_4[".googleLikeFields"][] = "koritsia";
$tdataft_form_4[".googleLikeFields"][] = "amiges";
$tdataft_form_4[".googleLikeFields"][] = "meet_day";
$tdataft_form_4[".googleLikeFields"][] = "meet_hour";
$tdataft_form_4[".googleLikeFields"][] = "meet_place";
$tdataft_form_4[".googleLikeFields"][] = "arxeio";
$tdataft_form_4[".googleLikeFields"][] = "ypothemata";
$tdataft_form_4[".googleLikeFields"][] = "stoxoi";
$tdataft_form_4[".googleLikeFields"][] = "methodologia";
$tdataft_form_4[".googleLikeFields"][] = "syndeseis";
$tdataft_form_4[".googleLikeFields"][] = "month1";
$tdataft_form_4[".googleLikeFields"][] = "month2";
$tdataft_form_4[".googleLikeFields"][] = "month3";
$tdataft_form_4[".googleLikeFields"][] = "month4";
$tdataft_form_4[".googleLikeFields"][] = "month5";
$tdataft_form_4[".googleLikeFields"][] = "episkepseis";
$tdataft_form_4[".googleLikeFields"][] = "submission_date";
$tdataft_form_4[".googleLikeFields"][] = "last_modified_date";
$tdataft_form_4[".googleLikeFields"][] = "ip_address";
$tdataft_form_4[".googleLikeFields"][] = "is_finalized";
$tdataft_form_4[".googleLikeFields"][] = "sch_id";

$tdataft_form_4[".panelSearchFields"][] = "submission_id";
$tdataft_form_4[".panelSearchFields"][] = "programa";
$tdataft_form_4[".panelSearchFields"][] = "date";
$tdataft_form_4[".panelSearchFields"][] = "ar_protocol";
$tdataft_form_4[".panelSearchFields"][] = "sxol_etos";
$tdataft_form_4[".panelSearchFields"][] = "dide_name";
$tdataft_form_4[".panelSearchFields"][] = "sch_name";
$tdataft_form_4[".panelSearchFields"][] = "tel_ergasias";
$tdataft_form_4[".panelSearchFields"][] = "dimos";
$tdataft_form_4[".panelSearchFields"][] = "fax";
$tdataft_form_4[".panelSearchFields"][] = "e_mail";
$tdataft_form_4[".panelSearchFields"][] = "sch_teachers";
$tdataft_form_4[".panelSearchFields"][] = "sch_students";
$tdataft_form_4[".panelSearchFields"][] = "dieythintis_name";
$tdataft_form_4[".panelSearchFields"][] = "klados_dieythinti";
$tdataft_form_4[".panelSearchFields"][] = "program_title";
$tdataft_form_4[".panelSearchFields"][] = "ar_praksis";
$tdataft_form_4[".panelSearchFields"][] = "date_praksis";
$tdataft_form_4[".panelSearchFields"][] = "sch_orario";
$tdataft_form_4[".panelSearchFields"][] = "ypeythinos_name";
$tdataft_form_4[".panelSearchFields"][] = "ypeythinos_amm";
$tdataft_form_4[".panelSearchFields"][] = "ypeythinos_klados";
$tdataft_form_4[".panelSearchFields"][] = "ypeythinos_wres";
$tdataft_form_4[".panelSearchFields"][] = "ypeythinos_again";
$tdataft_form_4[".panelSearchFields"][] = "ypeythinos_epimorfosi";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn1_name";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn1_amm";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn1_klados";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn1_wres";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn1_again";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn1_epimorfosi";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn2_name";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn2_amm";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn2_klados";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn2_wres";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn2_again";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn2_epimorfosi";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn3_name";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn3_amm";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn3_klados";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn3_wres";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn3_again";
$tdataft_form_4[".panelSearchFields"][] = "symetexwn3_epimorfosi";
$tdataft_form_4[".panelSearchFields"][] = "mathites_synolo";
$tdataft_form_4[".panelSearchFields"][] = "agoria";
$tdataft_form_4[".panelSearchFields"][] = "koritsia";
$tdataft_form_4[".panelSearchFields"][] = "amiges";
$tdataft_form_4[".panelSearchFields"][] = "meet_day";
$tdataft_form_4[".panelSearchFields"][] = "meet_hour";
$tdataft_form_4[".panelSearchFields"][] = "meet_place";
$tdataft_form_4[".panelSearchFields"][] = "arxeio";
$tdataft_form_4[".panelSearchFields"][] = "ypothemata";
$tdataft_form_4[".panelSearchFields"][] = "stoxoi";
$tdataft_form_4[".panelSearchFields"][] = "methodologia";
$tdataft_form_4[".panelSearchFields"][] = "syndeseis";
$tdataft_form_4[".panelSearchFields"][] = "month1";
$tdataft_form_4[".panelSearchFields"][] = "month2";
$tdataft_form_4[".panelSearchFields"][] = "month3";
$tdataft_form_4[".panelSearchFields"][] = "month4";
$tdataft_form_4[".panelSearchFields"][] = "month5";
$tdataft_form_4[".panelSearchFields"][] = "episkepseis";
$tdataft_form_4[".panelSearchFields"][] = "submission_date";
$tdataft_form_4[".panelSearchFields"][] = "last_modified_date";
$tdataft_form_4[".panelSearchFields"][] = "ip_address";
$tdataft_form_4[".panelSearchFields"][] = "is_finalized";
$tdataft_form_4[".panelSearchFields"][] = "sch_id";

$tdataft_form_4[".advSearchFields"][] = "submission_id";
$tdataft_form_4[".advSearchFields"][] = "programa";
$tdataft_form_4[".advSearchFields"][] = "date";
$tdataft_form_4[".advSearchFields"][] = "ar_protocol";
$tdataft_form_4[".advSearchFields"][] = "sxol_etos";
$tdataft_form_4[".advSearchFields"][] = "dide_name";
$tdataft_form_4[".advSearchFields"][] = "sch_name";
$tdataft_form_4[".advSearchFields"][] = "tel_ergasias";
$tdataft_form_4[".advSearchFields"][] = "dimos";
$tdataft_form_4[".advSearchFields"][] = "fax";
$tdataft_form_4[".advSearchFields"][] = "e_mail";
$tdataft_form_4[".advSearchFields"][] = "sch_teachers";
$tdataft_form_4[".advSearchFields"][] = "sch_students";
$tdataft_form_4[".advSearchFields"][] = "dieythintis_name";
$tdataft_form_4[".advSearchFields"][] = "klados_dieythinti";
$tdataft_form_4[".advSearchFields"][] = "program_title";
$tdataft_form_4[".advSearchFields"][] = "ar_praksis";
$tdataft_form_4[".advSearchFields"][] = "date_praksis";
$tdataft_form_4[".advSearchFields"][] = "sch_orario";
$tdataft_form_4[".advSearchFields"][] = "ypeythinos_name";
$tdataft_form_4[".advSearchFields"][] = "ypeythinos_amm";
$tdataft_form_4[".advSearchFields"][] = "ypeythinos_klados";
$tdataft_form_4[".advSearchFields"][] = "ypeythinos_wres";
$tdataft_form_4[".advSearchFields"][] = "ypeythinos_again";
$tdataft_form_4[".advSearchFields"][] = "ypeythinos_epimorfosi";
$tdataft_form_4[".advSearchFields"][] = "symetexwn1_name";
$tdataft_form_4[".advSearchFields"][] = "symetexwn1_amm";
$tdataft_form_4[".advSearchFields"][] = "symetexwn1_klados";
$tdataft_form_4[".advSearchFields"][] = "symetexwn1_wres";
$tdataft_form_4[".advSearchFields"][] = "symetexwn1_again";
$tdataft_form_4[".advSearchFields"][] = "symetexwn1_epimorfosi";
$tdataft_form_4[".advSearchFields"][] = "symetexwn2_name";
$tdataft_form_4[".advSearchFields"][] = "symetexwn2_amm";
$tdataft_form_4[".advSearchFields"][] = "symetexwn2_klados";
$tdataft_form_4[".advSearchFields"][] = "symetexwn2_wres";
$tdataft_form_4[".advSearchFields"][] = "symetexwn2_again";
$tdataft_form_4[".advSearchFields"][] = "symetexwn2_epimorfosi";
$tdataft_form_4[".advSearchFields"][] = "symetexwn3_name";
$tdataft_form_4[".advSearchFields"][] = "symetexwn3_amm";
$tdataft_form_4[".advSearchFields"][] = "symetexwn3_klados";
$tdataft_form_4[".advSearchFields"][] = "symetexwn3_wres";
$tdataft_form_4[".advSearchFields"][] = "symetexwn3_again";
$tdataft_form_4[".advSearchFields"][] = "symetexwn3_epimorfosi";
$tdataft_form_4[".advSearchFields"][] = "mathites_synolo";
$tdataft_form_4[".advSearchFields"][] = "agoria";
$tdataft_form_4[".advSearchFields"][] = "koritsia";
$tdataft_form_4[".advSearchFields"][] = "amiges";
$tdataft_form_4[".advSearchFields"][] = "meet_day";
$tdataft_form_4[".advSearchFields"][] = "meet_hour";
$tdataft_form_4[".advSearchFields"][] = "meet_place";
$tdataft_form_4[".advSearchFields"][] = "arxeio";
$tdataft_form_4[".advSearchFields"][] = "ypothemata";
$tdataft_form_4[".advSearchFields"][] = "stoxoi";
$tdataft_form_4[".advSearchFields"][] = "methodologia";
$tdataft_form_4[".advSearchFields"][] = "syndeseis";
$tdataft_form_4[".advSearchFields"][] = "month1";
$tdataft_form_4[".advSearchFields"][] = "month2";
$tdataft_form_4[".advSearchFields"][] = "month3";
$tdataft_form_4[".advSearchFields"][] = "month4";
$tdataft_form_4[".advSearchFields"][] = "month5";
$tdataft_form_4[".advSearchFields"][] = "episkepseis";
$tdataft_form_4[".advSearchFields"][] = "submission_date";
$tdataft_form_4[".advSearchFields"][] = "last_modified_date";
$tdataft_form_4[".advSearchFields"][] = "ip_address";
$tdataft_form_4[".advSearchFields"][] = "is_finalized";
$tdataft_form_4[".advSearchFields"][] = "sch_id";

$tdataft_form_4[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataft_form_4[".pageSize"] = 300;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataft_form_4[".strOrderBy"] = $tstrOrderBy;

$tdataft_form_4[".orderindexes"] = array();

$tdataft_form_4[".sqlHead"] = "SELECT submission_id,  programa,  `date`,  ar_protocol,  sxol_etos,  dide_name,  sch_name,  tel_ergasias,  dimos,  fax,  e_mail,  sch_teachers,  sch_students,  dieythintis_name,  klados_dieythinti,  program_title,  ar_praksis,  date_praksis,  sch_orario,  ypeythinos_name,  ypeythinos_amm,  ypeythinos_klados,  ypeythinos_wres,  ypeythinos_again,  ypeythinos_epimorfosi,  symetexwn1_name,  symetexwn1_amm,  symetexwn1_klados,  symetexwn1_wres,  symetexwn1_again,  symetexwn1_epimorfosi,  symetexwn2_name,  symetexwn2_amm,  symetexwn2_klados,  symetexwn2_wres,  symetexwn2_again,  symetexwn2_epimorfosi,  symetexwn3_name,  symetexwn3_amm,  symetexwn3_klados,  symetexwn3_wres,  symetexwn3_again,  symetexwn3_epimorfosi,  mathites_synolo,  agoria,  koritsia,  amiges,  meet_day,  meet_hour,  meet_place,  arxeio,  ypothemata,  stoxoi,  methodologia,  syndeseis,  month1,  month2,  month3,  month4,  month5,  episkepseis,  submission_date,  last_modified_date,  ip_address,  is_finalized,  sch_id";
$tdataft_form_4[".sqlFrom"] = "FROM ft_form_4";
$tdataft_form_4[".sqlWhereExpr"] = "";
$tdataft_form_4[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataft_form_4[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataft_form_4[".arrGroupsPerPage"] = $arrGPP;

$tableKeysft_form_4 = array();
$tableKeysft_form_4[] = "submission_id";
$tdataft_form_4[".Keys"] = $tableKeysft_form_4;

$tdataft_form_4[".listFields"] = array();
$tdataft_form_4[".listFields"][] = "submission_id";
$tdataft_form_4[".listFields"][] = "programa";
$tdataft_form_4[".listFields"][] = "date";
$tdataft_form_4[".listFields"][] = "ar_protocol";
$tdataft_form_4[".listFields"][] = "sxol_etos";
$tdataft_form_4[".listFields"][] = "dide_name";
$tdataft_form_4[".listFields"][] = "sch_name";
$tdataft_form_4[".listFields"][] = "tel_ergasias";
$tdataft_form_4[".listFields"][] = "dimos";
$tdataft_form_4[".listFields"][] = "fax";
$tdataft_form_4[".listFields"][] = "e_mail";
$tdataft_form_4[".listFields"][] = "sch_teachers";
$tdataft_form_4[".listFields"][] = "sch_students";
$tdataft_form_4[".listFields"][] = "dieythintis_name";
$tdataft_form_4[".listFields"][] = "klados_dieythinti";
$tdataft_form_4[".listFields"][] = "program_title";
$tdataft_form_4[".listFields"][] = "ar_praksis";
$tdataft_form_4[".listFields"][] = "date_praksis";
$tdataft_form_4[".listFields"][] = "sch_orario";
$tdataft_form_4[".listFields"][] = "ypeythinos_name";
$tdataft_form_4[".listFields"][] = "ypeythinos_amm";
$tdataft_form_4[".listFields"][] = "ypeythinos_klados";
$tdataft_form_4[".listFields"][] = "ypeythinos_wres";
$tdataft_form_4[".listFields"][] = "ypeythinos_again";
$tdataft_form_4[".listFields"][] = "ypeythinos_epimorfosi";
$tdataft_form_4[".listFields"][] = "symetexwn1_name";
$tdataft_form_4[".listFields"][] = "symetexwn1_amm";
$tdataft_form_4[".listFields"][] = "symetexwn1_klados";
$tdataft_form_4[".listFields"][] = "symetexwn1_wres";
$tdataft_form_4[".listFields"][] = "symetexwn1_again";
$tdataft_form_4[".listFields"][] = "symetexwn1_epimorfosi";
$tdataft_form_4[".listFields"][] = "symetexwn2_name";
$tdataft_form_4[".listFields"][] = "symetexwn2_amm";
$tdataft_form_4[".listFields"][] = "symetexwn2_klados";
$tdataft_form_4[".listFields"][] = "symetexwn2_wres";
$tdataft_form_4[".listFields"][] = "symetexwn2_again";
$tdataft_form_4[".listFields"][] = "symetexwn2_epimorfosi";
$tdataft_form_4[".listFields"][] = "symetexwn3_name";
$tdataft_form_4[".listFields"][] = "symetexwn3_amm";
$tdataft_form_4[".listFields"][] = "symetexwn3_klados";
$tdataft_form_4[".listFields"][] = "symetexwn3_wres";
$tdataft_form_4[".listFields"][] = "symetexwn3_again";
$tdataft_form_4[".listFields"][] = "symetexwn3_epimorfosi";
$tdataft_form_4[".listFields"][] = "mathites_synolo";
$tdataft_form_4[".listFields"][] = "agoria";
$tdataft_form_4[".listFields"][] = "koritsia";
$tdataft_form_4[".listFields"][] = "amiges";
$tdataft_form_4[".listFields"][] = "meet_day";
$tdataft_form_4[".listFields"][] = "meet_hour";
$tdataft_form_4[".listFields"][] = "meet_place";
$tdataft_form_4[".listFields"][] = "arxeio";
$tdataft_form_4[".listFields"][] = "ypothemata";
$tdataft_form_4[".listFields"][] = "stoxoi";
$tdataft_form_4[".listFields"][] = "methodologia";
$tdataft_form_4[".listFields"][] = "syndeseis";
$tdataft_form_4[".listFields"][] = "month1";
$tdataft_form_4[".listFields"][] = "month2";
$tdataft_form_4[".listFields"][] = "month3";
$tdataft_form_4[".listFields"][] = "month4";
$tdataft_form_4[".listFields"][] = "month5";
$tdataft_form_4[".listFields"][] = "episkepseis";
$tdataft_form_4[".listFields"][] = "submission_date";
$tdataft_form_4[".listFields"][] = "last_modified_date";
$tdataft_form_4[".listFields"][] = "ip_address";
$tdataft_form_4[".listFields"][] = "is_finalized";
$tdataft_form_4[".listFields"][] = "sch_id";

$tdataft_form_4[".viewFields"] = array();
$tdataft_form_4[".viewFields"][] = "submission_id";
$tdataft_form_4[".viewFields"][] = "programa";
$tdataft_form_4[".viewFields"][] = "date";
$tdataft_form_4[".viewFields"][] = "ar_protocol";
$tdataft_form_4[".viewFields"][] = "sxol_etos";
$tdataft_form_4[".viewFields"][] = "dide_name";
$tdataft_form_4[".viewFields"][] = "sch_name";
$tdataft_form_4[".viewFields"][] = "tel_ergasias";
$tdataft_form_4[".viewFields"][] = "dimos";
$tdataft_form_4[".viewFields"][] = "fax";
$tdataft_form_4[".viewFields"][] = "e_mail";
$tdataft_form_4[".viewFields"][] = "sch_teachers";
$tdataft_form_4[".viewFields"][] = "sch_students";
$tdataft_form_4[".viewFields"][] = "dieythintis_name";
$tdataft_form_4[".viewFields"][] = "klados_dieythinti";
$tdataft_form_4[".viewFields"][] = "program_title";
$tdataft_form_4[".viewFields"][] = "ar_praksis";
$tdataft_form_4[".viewFields"][] = "date_praksis";
$tdataft_form_4[".viewFields"][] = "sch_orario";
$tdataft_form_4[".viewFields"][] = "ypeythinos_name";
$tdataft_form_4[".viewFields"][] = "ypeythinos_amm";
$tdataft_form_4[".viewFields"][] = "ypeythinos_klados";
$tdataft_form_4[".viewFields"][] = "ypeythinos_wres";
$tdataft_form_4[".viewFields"][] = "ypeythinos_again";
$tdataft_form_4[".viewFields"][] = "ypeythinos_epimorfosi";
$tdataft_form_4[".viewFields"][] = "symetexwn1_name";
$tdataft_form_4[".viewFields"][] = "symetexwn1_amm";
$tdataft_form_4[".viewFields"][] = "symetexwn1_klados";
$tdataft_form_4[".viewFields"][] = "symetexwn1_wres";
$tdataft_form_4[".viewFields"][] = "symetexwn1_again";
$tdataft_form_4[".viewFields"][] = "symetexwn1_epimorfosi";
$tdataft_form_4[".viewFields"][] = "symetexwn2_name";
$tdataft_form_4[".viewFields"][] = "symetexwn2_amm";
$tdataft_form_4[".viewFields"][] = "symetexwn2_klados";
$tdataft_form_4[".viewFields"][] = "symetexwn2_wres";
$tdataft_form_4[".viewFields"][] = "symetexwn2_again";
$tdataft_form_4[".viewFields"][] = "symetexwn2_epimorfosi";
$tdataft_form_4[".viewFields"][] = "symetexwn3_name";
$tdataft_form_4[".viewFields"][] = "symetexwn3_amm";
$tdataft_form_4[".viewFields"][] = "symetexwn3_klados";
$tdataft_form_4[".viewFields"][] = "symetexwn3_wres";
$tdataft_form_4[".viewFields"][] = "symetexwn3_again";
$tdataft_form_4[".viewFields"][] = "symetexwn3_epimorfosi";
$tdataft_form_4[".viewFields"][] = "mathites_synolo";
$tdataft_form_4[".viewFields"][] = "agoria";
$tdataft_form_4[".viewFields"][] = "koritsia";
$tdataft_form_4[".viewFields"][] = "amiges";
$tdataft_form_4[".viewFields"][] = "meet_day";
$tdataft_form_4[".viewFields"][] = "meet_hour";
$tdataft_form_4[".viewFields"][] = "meet_place";
$tdataft_form_4[".viewFields"][] = "arxeio";
$tdataft_form_4[".viewFields"][] = "ypothemata";
$tdataft_form_4[".viewFields"][] = "stoxoi";
$tdataft_form_4[".viewFields"][] = "methodologia";
$tdataft_form_4[".viewFields"][] = "syndeseis";
$tdataft_form_4[".viewFields"][] = "month1";
$tdataft_form_4[".viewFields"][] = "month2";
$tdataft_form_4[".viewFields"][] = "month3";
$tdataft_form_4[".viewFields"][] = "month4";
$tdataft_form_4[".viewFields"][] = "month5";
$tdataft_form_4[".viewFields"][] = "episkepseis";
$tdataft_form_4[".viewFields"][] = "submission_date";
$tdataft_form_4[".viewFields"][] = "last_modified_date";
$tdataft_form_4[".viewFields"][] = "ip_address";
$tdataft_form_4[".viewFields"][] = "is_finalized";
$tdataft_form_4[".viewFields"][] = "sch_id";

$tdataft_form_4[".addFields"] = array();
$tdataft_form_4[".addFields"][] = "programa";
$tdataft_form_4[".addFields"][] = "date";
$tdataft_form_4[".addFields"][] = "ar_protocol";
$tdataft_form_4[".addFields"][] = "sxol_etos";
$tdataft_form_4[".addFields"][] = "dide_name";
$tdataft_form_4[".addFields"][] = "sch_name";
$tdataft_form_4[".addFields"][] = "tel_ergasias";
$tdataft_form_4[".addFields"][] = "dimos";
$tdataft_form_4[".addFields"][] = "fax";
$tdataft_form_4[".addFields"][] = "e_mail";
$tdataft_form_4[".addFields"][] = "sch_teachers";
$tdataft_form_4[".addFields"][] = "sch_students";
$tdataft_form_4[".addFields"][] = "dieythintis_name";
$tdataft_form_4[".addFields"][] = "klados_dieythinti";
$tdataft_form_4[".addFields"][] = "program_title";
$tdataft_form_4[".addFields"][] = "ar_praksis";
$tdataft_form_4[".addFields"][] = "date_praksis";
$tdataft_form_4[".addFields"][] = "sch_orario";
$tdataft_form_4[".addFields"][] = "ypeythinos_name";
$tdataft_form_4[".addFields"][] = "ypeythinos_amm";
$tdataft_form_4[".addFields"][] = "ypeythinos_klados";
$tdataft_form_4[".addFields"][] = "ypeythinos_wres";
$tdataft_form_4[".addFields"][] = "ypeythinos_again";
$tdataft_form_4[".addFields"][] = "ypeythinos_epimorfosi";
$tdataft_form_4[".addFields"][] = "symetexwn1_name";
$tdataft_form_4[".addFields"][] = "symetexwn1_amm";
$tdataft_form_4[".addFields"][] = "symetexwn1_klados";
$tdataft_form_4[".addFields"][] = "symetexwn1_wres";
$tdataft_form_4[".addFields"][] = "symetexwn1_again";
$tdataft_form_4[".addFields"][] = "symetexwn1_epimorfosi";
$tdataft_form_4[".addFields"][] = "symetexwn2_name";
$tdataft_form_4[".addFields"][] = "symetexwn2_amm";
$tdataft_form_4[".addFields"][] = "symetexwn2_klados";
$tdataft_form_4[".addFields"][] = "symetexwn2_wres";
$tdataft_form_4[".addFields"][] = "symetexwn2_again";
$tdataft_form_4[".addFields"][] = "symetexwn2_epimorfosi";
$tdataft_form_4[".addFields"][] = "symetexwn3_name";
$tdataft_form_4[".addFields"][] = "symetexwn3_amm";
$tdataft_form_4[".addFields"][] = "symetexwn3_klados";
$tdataft_form_4[".addFields"][] = "symetexwn3_wres";
$tdataft_form_4[".addFields"][] = "symetexwn3_again";
$tdataft_form_4[".addFields"][] = "symetexwn3_epimorfosi";
$tdataft_form_4[".addFields"][] = "mathites_synolo";
$tdataft_form_4[".addFields"][] = "agoria";
$tdataft_form_4[".addFields"][] = "koritsia";
$tdataft_form_4[".addFields"][] = "amiges";
$tdataft_form_4[".addFields"][] = "meet_day";
$tdataft_form_4[".addFields"][] = "meet_hour";
$tdataft_form_4[".addFields"][] = "meet_place";
$tdataft_form_4[".addFields"][] = "arxeio";
$tdataft_form_4[".addFields"][] = "ypothemata";
$tdataft_form_4[".addFields"][] = "stoxoi";
$tdataft_form_4[".addFields"][] = "methodologia";
$tdataft_form_4[".addFields"][] = "syndeseis";
$tdataft_form_4[".addFields"][] = "month1";
$tdataft_form_4[".addFields"][] = "month2";
$tdataft_form_4[".addFields"][] = "month3";
$tdataft_form_4[".addFields"][] = "month4";
$tdataft_form_4[".addFields"][] = "month5";
$tdataft_form_4[".addFields"][] = "episkepseis";
$tdataft_form_4[".addFields"][] = "submission_date";
$tdataft_form_4[".addFields"][] = "last_modified_date";
$tdataft_form_4[".addFields"][] = "ip_address";
$tdataft_form_4[".addFields"][] = "is_finalized";

$tdataft_form_4[".inlineAddFields"] = array();
$tdataft_form_4[".inlineAddFields"][] = "programa";
$tdataft_form_4[".inlineAddFields"][] = "date";
$tdataft_form_4[".inlineAddFields"][] = "ar_protocol";
$tdataft_form_4[".inlineAddFields"][] = "sxol_etos";
$tdataft_form_4[".inlineAddFields"][] = "dide_name";
$tdataft_form_4[".inlineAddFields"][] = "sch_name";
$tdataft_form_4[".inlineAddFields"][] = "tel_ergasias";
$tdataft_form_4[".inlineAddFields"][] = "dimos";
$tdataft_form_4[".inlineAddFields"][] = "fax";
$tdataft_form_4[".inlineAddFields"][] = "e_mail";
$tdataft_form_4[".inlineAddFields"][] = "sch_teachers";
$tdataft_form_4[".inlineAddFields"][] = "sch_students";
$tdataft_form_4[".inlineAddFields"][] = "dieythintis_name";
$tdataft_form_4[".inlineAddFields"][] = "klados_dieythinti";
$tdataft_form_4[".inlineAddFields"][] = "program_title";
$tdataft_form_4[".inlineAddFields"][] = "ar_praksis";
$tdataft_form_4[".inlineAddFields"][] = "date_praksis";
$tdataft_form_4[".inlineAddFields"][] = "sch_orario";
$tdataft_form_4[".inlineAddFields"][] = "ypeythinos_name";
$tdataft_form_4[".inlineAddFields"][] = "ypeythinos_amm";
$tdataft_form_4[".inlineAddFields"][] = "ypeythinos_klados";
$tdataft_form_4[".inlineAddFields"][] = "ypeythinos_wres";
$tdataft_form_4[".inlineAddFields"][] = "ypeythinos_again";
$tdataft_form_4[".inlineAddFields"][] = "ypeythinos_epimorfosi";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn1_name";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn1_amm";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn1_klados";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn1_wres";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn1_again";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn1_epimorfosi";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn2_name";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn2_amm";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn2_klados";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn2_wres";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn2_again";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn2_epimorfosi";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn3_name";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn3_amm";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn3_klados";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn3_wres";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn3_again";
$tdataft_form_4[".inlineAddFields"][] = "symetexwn3_epimorfosi";
$tdataft_form_4[".inlineAddFields"][] = "mathites_synolo";
$tdataft_form_4[".inlineAddFields"][] = "agoria";
$tdataft_form_4[".inlineAddFields"][] = "koritsia";
$tdataft_form_4[".inlineAddFields"][] = "amiges";
$tdataft_form_4[".inlineAddFields"][] = "meet_day";
$tdataft_form_4[".inlineAddFields"][] = "meet_hour";
$tdataft_form_4[".inlineAddFields"][] = "meet_place";
$tdataft_form_4[".inlineAddFields"][] = "arxeio";
$tdataft_form_4[".inlineAddFields"][] = "ypothemata";
$tdataft_form_4[".inlineAddFields"][] = "stoxoi";
$tdataft_form_4[".inlineAddFields"][] = "methodologia";
$tdataft_form_4[".inlineAddFields"][] = "syndeseis";
$tdataft_form_4[".inlineAddFields"][] = "month1";
$tdataft_form_4[".inlineAddFields"][] = "month2";
$tdataft_form_4[".inlineAddFields"][] = "month3";
$tdataft_form_4[".inlineAddFields"][] = "month4";
$tdataft_form_4[".inlineAddFields"][] = "month5";
$tdataft_form_4[".inlineAddFields"][] = "episkepseis";
$tdataft_form_4[".inlineAddFields"][] = "submission_date";
$tdataft_form_4[".inlineAddFields"][] = "last_modified_date";
$tdataft_form_4[".inlineAddFields"][] = "ip_address";
$tdataft_form_4[".inlineAddFields"][] = "is_finalized";

$tdataft_form_4[".editFields"] = array();
$tdataft_form_4[".editFields"][] = "programa";
$tdataft_form_4[".editFields"][] = "date";
$tdataft_form_4[".editFields"][] = "ar_protocol";
$tdataft_form_4[".editFields"][] = "sxol_etos";
$tdataft_form_4[".editFields"][] = "dide_name";
$tdataft_form_4[".editFields"][] = "sch_name";
$tdataft_form_4[".editFields"][] = "tel_ergasias";
$tdataft_form_4[".editFields"][] = "dimos";
$tdataft_form_4[".editFields"][] = "fax";
$tdataft_form_4[".editFields"][] = "e_mail";
$tdataft_form_4[".editFields"][] = "sch_teachers";
$tdataft_form_4[".editFields"][] = "sch_students";
$tdataft_form_4[".editFields"][] = "dieythintis_name";
$tdataft_form_4[".editFields"][] = "klados_dieythinti";
$tdataft_form_4[".editFields"][] = "program_title";
$tdataft_form_4[".editFields"][] = "ar_praksis";
$tdataft_form_4[".editFields"][] = "date_praksis";
$tdataft_form_4[".editFields"][] = "sch_orario";
$tdataft_form_4[".editFields"][] = "ypeythinos_name";
$tdataft_form_4[".editFields"][] = "ypeythinos_amm";
$tdataft_form_4[".editFields"][] = "ypeythinos_klados";
$tdataft_form_4[".editFields"][] = "ypeythinos_wres";
$tdataft_form_4[".editFields"][] = "ypeythinos_again";
$tdataft_form_4[".editFields"][] = "ypeythinos_epimorfosi";
$tdataft_form_4[".editFields"][] = "symetexwn1_name";
$tdataft_form_4[".editFields"][] = "symetexwn1_amm";
$tdataft_form_4[".editFields"][] = "symetexwn1_klados";
$tdataft_form_4[".editFields"][] = "symetexwn1_wres";
$tdataft_form_4[".editFields"][] = "symetexwn1_again";
$tdataft_form_4[".editFields"][] = "symetexwn1_epimorfosi";
$tdataft_form_4[".editFields"][] = "symetexwn2_name";
$tdataft_form_4[".editFields"][] = "symetexwn2_amm";
$tdataft_form_4[".editFields"][] = "symetexwn2_klados";
$tdataft_form_4[".editFields"][] = "symetexwn2_wres";
$tdataft_form_4[".editFields"][] = "symetexwn2_again";
$tdataft_form_4[".editFields"][] = "symetexwn2_epimorfosi";
$tdataft_form_4[".editFields"][] = "symetexwn3_name";
$tdataft_form_4[".editFields"][] = "symetexwn3_amm";
$tdataft_form_4[".editFields"][] = "symetexwn3_klados";
$tdataft_form_4[".editFields"][] = "symetexwn3_wres";
$tdataft_form_4[".editFields"][] = "symetexwn3_again";
$tdataft_form_4[".editFields"][] = "symetexwn3_epimorfosi";
$tdataft_form_4[".editFields"][] = "mathites_synolo";
$tdataft_form_4[".editFields"][] = "agoria";
$tdataft_form_4[".editFields"][] = "koritsia";
$tdataft_form_4[".editFields"][] = "amiges";
$tdataft_form_4[".editFields"][] = "meet_day";
$tdataft_form_4[".editFields"][] = "meet_hour";
$tdataft_form_4[".editFields"][] = "meet_place";
$tdataft_form_4[".editFields"][] = "arxeio";
$tdataft_form_4[".editFields"][] = "ypothemata";
$tdataft_form_4[".editFields"][] = "stoxoi";
$tdataft_form_4[".editFields"][] = "methodologia";
$tdataft_form_4[".editFields"][] = "syndeseis";
$tdataft_form_4[".editFields"][] = "month1";
$tdataft_form_4[".editFields"][] = "month2";
$tdataft_form_4[".editFields"][] = "month3";
$tdataft_form_4[".editFields"][] = "month4";
$tdataft_form_4[".editFields"][] = "month5";
$tdataft_form_4[".editFields"][] = "episkepseis";
$tdataft_form_4[".editFields"][] = "submission_date";
$tdataft_form_4[".editFields"][] = "last_modified_date";
$tdataft_form_4[".editFields"][] = "ip_address";
$tdataft_form_4[".editFields"][] = "is_finalized";
$tdataft_form_4[".editFields"][] = "sch_id";
$tdataft_form_4[".editFields"][] = "submission_id";

$tdataft_form_4[".inlineEditFields"] = array();
$tdataft_form_4[".inlineEditFields"][] = "submission_id";
$tdataft_form_4[".inlineEditFields"][] = "programa";
$tdataft_form_4[".inlineEditFields"][] = "date";
$tdataft_form_4[".inlineEditFields"][] = "ar_protocol";
$tdataft_form_4[".inlineEditFields"][] = "sxol_etos";
$tdataft_form_4[".inlineEditFields"][] = "dide_name";
$tdataft_form_4[".inlineEditFields"][] = "sch_name";
$tdataft_form_4[".inlineEditFields"][] = "tel_ergasias";
$tdataft_form_4[".inlineEditFields"][] = "dimos";
$tdataft_form_4[".inlineEditFields"][] = "fax";
$tdataft_form_4[".inlineEditFields"][] = "e_mail";
$tdataft_form_4[".inlineEditFields"][] = "sch_teachers";
$tdataft_form_4[".inlineEditFields"][] = "sch_students";
$tdataft_form_4[".inlineEditFields"][] = "dieythintis_name";
$tdataft_form_4[".inlineEditFields"][] = "klados_dieythinti";
$tdataft_form_4[".inlineEditFields"][] = "program_title";
$tdataft_form_4[".inlineEditFields"][] = "ar_praksis";
$tdataft_form_4[".inlineEditFields"][] = "date_praksis";
$tdataft_form_4[".inlineEditFields"][] = "sch_orario";
$tdataft_form_4[".inlineEditFields"][] = "ypeythinos_name";
$tdataft_form_4[".inlineEditFields"][] = "ypeythinos_amm";
$tdataft_form_4[".inlineEditFields"][] = "ypeythinos_klados";
$tdataft_form_4[".inlineEditFields"][] = "ypeythinos_wres";
$tdataft_form_4[".inlineEditFields"][] = "ypeythinos_again";
$tdataft_form_4[".inlineEditFields"][] = "ypeythinos_epimorfosi";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn1_name";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn1_amm";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn1_klados";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn1_wres";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn1_again";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn1_epimorfosi";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn2_name";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn2_amm";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn2_klados";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn2_wres";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn2_again";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn2_epimorfosi";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn3_name";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn3_amm";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn3_klados";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn3_wres";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn3_again";
$tdataft_form_4[".inlineEditFields"][] = "symetexwn3_epimorfosi";
$tdataft_form_4[".inlineEditFields"][] = "mathites_synolo";
$tdataft_form_4[".inlineEditFields"][] = "agoria";
$tdataft_form_4[".inlineEditFields"][] = "koritsia";
$tdataft_form_4[".inlineEditFields"][] = "amiges";
$tdataft_form_4[".inlineEditFields"][] = "meet_day";
$tdataft_form_4[".inlineEditFields"][] = "meet_hour";
$tdataft_form_4[".inlineEditFields"][] = "meet_place";
$tdataft_form_4[".inlineEditFields"][] = "arxeio";
$tdataft_form_4[".inlineEditFields"][] = "ypothemata";
$tdataft_form_4[".inlineEditFields"][] = "stoxoi";
$tdataft_form_4[".inlineEditFields"][] = "methodologia";
$tdataft_form_4[".inlineEditFields"][] = "syndeseis";
$tdataft_form_4[".inlineEditFields"][] = "month1";
$tdataft_form_4[".inlineEditFields"][] = "month2";
$tdataft_form_4[".inlineEditFields"][] = "month3";
$tdataft_form_4[".inlineEditFields"][] = "month4";
$tdataft_form_4[".inlineEditFields"][] = "month5";
$tdataft_form_4[".inlineEditFields"][] = "episkepseis";
$tdataft_form_4[".inlineEditFields"][] = "submission_date";
$tdataft_form_4[".inlineEditFields"][] = "last_modified_date";
$tdataft_form_4[".inlineEditFields"][] = "ip_address";
$tdataft_form_4[".inlineEditFields"][] = "is_finalized";
$tdataft_form_4[".inlineEditFields"][] = "sch_id";

$tdataft_form_4[".exportFields"] = array();
$tdataft_form_4[".exportFields"][] = "submission_id";
$tdataft_form_4[".exportFields"][] = "programa";
$tdataft_form_4[".exportFields"][] = "date";
$tdataft_form_4[".exportFields"][] = "ar_protocol";
$tdataft_form_4[".exportFields"][] = "sxol_etos";
$tdataft_form_4[".exportFields"][] = "dide_name";
$tdataft_form_4[".exportFields"][] = "sch_name";
$tdataft_form_4[".exportFields"][] = "tel_ergasias";
$tdataft_form_4[".exportFields"][] = "dimos";
$tdataft_form_4[".exportFields"][] = "fax";
$tdataft_form_4[".exportFields"][] = "e_mail";
$tdataft_form_4[".exportFields"][] = "sch_teachers";
$tdataft_form_4[".exportFields"][] = "sch_students";
$tdataft_form_4[".exportFields"][] = "dieythintis_name";
$tdataft_form_4[".exportFields"][] = "klados_dieythinti";
$tdataft_form_4[".exportFields"][] = "program_title";
$tdataft_form_4[".exportFields"][] = "ar_praksis";
$tdataft_form_4[".exportFields"][] = "date_praksis";
$tdataft_form_4[".exportFields"][] = "sch_orario";
$tdataft_form_4[".exportFields"][] = "ypeythinos_name";
$tdataft_form_4[".exportFields"][] = "ypeythinos_amm";
$tdataft_form_4[".exportFields"][] = "ypeythinos_klados";
$tdataft_form_4[".exportFields"][] = "ypeythinos_wres";
$tdataft_form_4[".exportFields"][] = "ypeythinos_again";
$tdataft_form_4[".exportFields"][] = "ypeythinos_epimorfosi";
$tdataft_form_4[".exportFields"][] = "symetexwn1_name";
$tdataft_form_4[".exportFields"][] = "symetexwn1_amm";
$tdataft_form_4[".exportFields"][] = "symetexwn1_klados";
$tdataft_form_4[".exportFields"][] = "symetexwn1_wres";
$tdataft_form_4[".exportFields"][] = "symetexwn1_again";
$tdataft_form_4[".exportFields"][] = "symetexwn1_epimorfosi";
$tdataft_form_4[".exportFields"][] = "symetexwn2_name";
$tdataft_form_4[".exportFields"][] = "symetexwn2_amm";
$tdataft_form_4[".exportFields"][] = "symetexwn2_klados";
$tdataft_form_4[".exportFields"][] = "symetexwn2_wres";
$tdataft_form_4[".exportFields"][] = "symetexwn2_again";
$tdataft_form_4[".exportFields"][] = "symetexwn2_epimorfosi";
$tdataft_form_4[".exportFields"][] = "symetexwn3_name";
$tdataft_form_4[".exportFields"][] = "symetexwn3_amm";
$tdataft_form_4[".exportFields"][] = "symetexwn3_klados";
$tdataft_form_4[".exportFields"][] = "symetexwn3_wres";
$tdataft_form_4[".exportFields"][] = "symetexwn3_again";
$tdataft_form_4[".exportFields"][] = "symetexwn3_epimorfosi";
$tdataft_form_4[".exportFields"][] = "mathites_synolo";
$tdataft_form_4[".exportFields"][] = "agoria";
$tdataft_form_4[".exportFields"][] = "koritsia";
$tdataft_form_4[".exportFields"][] = "amiges";
$tdataft_form_4[".exportFields"][] = "meet_day";
$tdataft_form_4[".exportFields"][] = "meet_hour";
$tdataft_form_4[".exportFields"][] = "meet_place";
$tdataft_form_4[".exportFields"][] = "arxeio";
$tdataft_form_4[".exportFields"][] = "ypothemata";
$tdataft_form_4[".exportFields"][] = "stoxoi";
$tdataft_form_4[".exportFields"][] = "methodologia";
$tdataft_form_4[".exportFields"][] = "syndeseis";
$tdataft_form_4[".exportFields"][] = "month1";
$tdataft_form_4[".exportFields"][] = "month2";
$tdataft_form_4[".exportFields"][] = "month3";
$tdataft_form_4[".exportFields"][] = "month4";
$tdataft_form_4[".exportFields"][] = "month5";
$tdataft_form_4[".exportFields"][] = "episkepseis";
$tdataft_form_4[".exportFields"][] = "submission_date";
$tdataft_form_4[".exportFields"][] = "last_modified_date";
$tdataft_form_4[".exportFields"][] = "ip_address";
$tdataft_form_4[".exportFields"][] = "is_finalized";
$tdataft_form_4[".exportFields"][] = "sch_id";

$tdataft_form_4[".printFields"] = array();
$tdataft_form_4[".printFields"][] = "submission_id";
$tdataft_form_4[".printFields"][] = "programa";
$tdataft_form_4[".printFields"][] = "date";
$tdataft_form_4[".printFields"][] = "ar_protocol";
$tdataft_form_4[".printFields"][] = "sxol_etos";
$tdataft_form_4[".printFields"][] = "dide_name";
$tdataft_form_4[".printFields"][] = "sch_name";
$tdataft_form_4[".printFields"][] = "tel_ergasias";
$tdataft_form_4[".printFields"][] = "dimos";
$tdataft_form_4[".printFields"][] = "fax";
$tdataft_form_4[".printFields"][] = "e_mail";
$tdataft_form_4[".printFields"][] = "sch_teachers";
$tdataft_form_4[".printFields"][] = "sch_students";
$tdataft_form_4[".printFields"][] = "dieythintis_name";
$tdataft_form_4[".printFields"][] = "klados_dieythinti";
$tdataft_form_4[".printFields"][] = "program_title";
$tdataft_form_4[".printFields"][] = "ar_praksis";
$tdataft_form_4[".printFields"][] = "date_praksis";
$tdataft_form_4[".printFields"][] = "sch_orario";
$tdataft_form_4[".printFields"][] = "ypeythinos_name";
$tdataft_form_4[".printFields"][] = "ypeythinos_amm";
$tdataft_form_4[".printFields"][] = "ypeythinos_klados";
$tdataft_form_4[".printFields"][] = "ypeythinos_wres";
$tdataft_form_4[".printFields"][] = "ypeythinos_again";
$tdataft_form_4[".printFields"][] = "ypeythinos_epimorfosi";
$tdataft_form_4[".printFields"][] = "symetexwn1_name";
$tdataft_form_4[".printFields"][] = "symetexwn1_amm";
$tdataft_form_4[".printFields"][] = "symetexwn1_klados";
$tdataft_form_4[".printFields"][] = "symetexwn1_wres";
$tdataft_form_4[".printFields"][] = "symetexwn1_again";
$tdataft_form_4[".printFields"][] = "symetexwn1_epimorfosi";
$tdataft_form_4[".printFields"][] = "symetexwn2_name";
$tdataft_form_4[".printFields"][] = "symetexwn2_amm";
$tdataft_form_4[".printFields"][] = "symetexwn2_klados";
$tdataft_form_4[".printFields"][] = "symetexwn2_wres";
$tdataft_form_4[".printFields"][] = "symetexwn2_again";
$tdataft_form_4[".printFields"][] = "symetexwn2_epimorfosi";
$tdataft_form_4[".printFields"][] = "symetexwn3_name";
$tdataft_form_4[".printFields"][] = "symetexwn3_amm";
$tdataft_form_4[".printFields"][] = "symetexwn3_klados";
$tdataft_form_4[".printFields"][] = "symetexwn3_wres";
$tdataft_form_4[".printFields"][] = "symetexwn3_again";
$tdataft_form_4[".printFields"][] = "symetexwn3_epimorfosi";
$tdataft_form_4[".printFields"][] = "mathites_synolo";
$tdataft_form_4[".printFields"][] = "agoria";
$tdataft_form_4[".printFields"][] = "koritsia";
$tdataft_form_4[".printFields"][] = "amiges";
$tdataft_form_4[".printFields"][] = "meet_day";
$tdataft_form_4[".printFields"][] = "meet_hour";
$tdataft_form_4[".printFields"][] = "meet_place";
$tdataft_form_4[".printFields"][] = "arxeio";
$tdataft_form_4[".printFields"][] = "ypothemata";
$tdataft_form_4[".printFields"][] = "stoxoi";
$tdataft_form_4[".printFields"][] = "methodologia";
$tdataft_form_4[".printFields"][] = "syndeseis";
$tdataft_form_4[".printFields"][] = "month1";
$tdataft_form_4[".printFields"][] = "month2";
$tdataft_form_4[".printFields"][] = "month3";
$tdataft_form_4[".printFields"][] = "month4";
$tdataft_form_4[".printFields"][] = "month5";
$tdataft_form_4[".printFields"][] = "episkepseis";
$tdataft_form_4[".printFields"][] = "submission_date";
$tdataft_form_4[".printFields"][] = "last_modified_date";
$tdataft_form_4[".printFields"][] = "ip_address";
$tdataft_form_4[".printFields"][] = "is_finalized";
$tdataft_form_4[".printFields"][] = "sch_id";

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
	
		
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "submission_id"; 
		$fdata["FullName"] = "submission_id";
	
		
		
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
	
		
		
	$tdataft_form_4["submission_id"] = $fdata;
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
		$fdata["FullName"] = "programa";
	
		
		
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
	
		
		
	$tdataft_form_4["programa"] = $fdata;
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
		$fdata["FullName"] = "`date`";
	
		
		
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
	
		
		
	$tdataft_form_4["date"] = $fdata;
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
		$fdata["FullName"] = "ar_protocol";
	
		
		
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
	
		
		
	$tdataft_form_4["ar_protocol"] = $fdata;
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
		$fdata["FullName"] = "sxol_etos";
	
		
		
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
	
		
		
	$tdataft_form_4["sxol_etos"] = $fdata;
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
		$fdata["FullName"] = "dide_name";
	
		
		
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
	
		
		
	$tdataft_form_4["dide_name"] = $fdata;
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataft_form_4["sch_name"] = $fdata;
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
		$fdata["FullName"] = "tel_ergasias";
	
		
		
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
	
		
		
	$tdataft_form_4["tel_ergasias"] = $fdata;
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
		$fdata["FullName"] = "dimos";
	
		
		
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
	
		
		
	$tdataft_form_4["dimos"] = $fdata;
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataft_form_4["fax"] = $fdata;
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
		$fdata["FullName"] = "e_mail";
	
		
		
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
	
		
		
	$tdataft_form_4["e_mail"] = $fdata;
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
		$fdata["FullName"] = "sch_teachers";
	
		
		
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
	
		
		
	$tdataft_form_4["sch_teachers"] = $fdata;
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
		$fdata["FullName"] = "sch_students";
	
		
		
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
	
		
		
	$tdataft_form_4["sch_students"] = $fdata;
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
		$fdata["FullName"] = "dieythintis_name";
	
		
		
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
	
		
		
	$tdataft_form_4["dieythintis_name"] = $fdata;
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
		$fdata["FullName"] = "klados_dieythinti";
	
		
		
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
	
		
		
	$tdataft_form_4["klados_dieythinti"] = $fdata;
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
		$fdata["FullName"] = "program_title";
	
		
		
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
	
		
		
	$tdataft_form_4["program_title"] = $fdata;
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
		$fdata["FullName"] = "ar_praksis";
	
		
		
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
	
		
		
	$tdataft_form_4["ar_praksis"] = $fdata;
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
		$fdata["FullName"] = "date_praksis";
	
		
		
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
	
		
		
	$tdataft_form_4["date_praksis"] = $fdata;
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
		$fdata["FullName"] = "sch_orario";
	
		
		
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
	
		
		
	$tdataft_form_4["sch_orario"] = $fdata;
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
		$fdata["FullName"] = "ypeythinos_name";
	
		
		
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
	
		
		
	$tdataft_form_4["ypeythinos_name"] = $fdata;
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
		$fdata["FullName"] = "ypeythinos_amm";
	
		
		
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
	
		
		
	$tdataft_form_4["ypeythinos_amm"] = $fdata;
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
		$fdata["FullName"] = "ypeythinos_klados";
	
		
		
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
	
		
		
	$tdataft_form_4["ypeythinos_klados"] = $fdata;
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
		$fdata["FullName"] = "ypeythinos_wres";
	
		
		
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
	
		
		
	$tdataft_form_4["ypeythinos_wres"] = $fdata;
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
		$fdata["FullName"] = "ypeythinos_again";
	
		
		
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
	
		
		
	$tdataft_form_4["ypeythinos_again"] = $fdata;
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
		$fdata["FullName"] = "ypeythinos_epimorfosi";
	
		
		
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
	
		
		
	$tdataft_form_4["ypeythinos_epimorfosi"] = $fdata;
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
		$fdata["FullName"] = "symetexwn1_name";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn1_name"] = $fdata;
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
		$fdata["FullName"] = "symetexwn1_amm";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn1_amm"] = $fdata;
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
		$fdata["FullName"] = "symetexwn1_klados";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn1_klados"] = $fdata;
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
		$fdata["FullName"] = "symetexwn1_wres";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn1_wres"] = $fdata;
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
		$fdata["FullName"] = "symetexwn1_again";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn1_again"] = $fdata;
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
		$fdata["FullName"] = "symetexwn1_epimorfosi";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn1_epimorfosi"] = $fdata;
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
		$fdata["FullName"] = "symetexwn2_name";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn2_name"] = $fdata;
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
		$fdata["FullName"] = "symetexwn2_amm";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn2_amm"] = $fdata;
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
		$fdata["FullName"] = "symetexwn2_klados";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn2_klados"] = $fdata;
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
		$fdata["FullName"] = "symetexwn2_wres";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn2_wres"] = $fdata;
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
		$fdata["FullName"] = "symetexwn2_again";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn2_again"] = $fdata;
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
		$fdata["FullName"] = "symetexwn2_epimorfosi";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn2_epimorfosi"] = $fdata;
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
		$fdata["FullName"] = "symetexwn3_name";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn3_name"] = $fdata;
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
		$fdata["FullName"] = "symetexwn3_amm";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn3_amm"] = $fdata;
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
		$fdata["FullName"] = "symetexwn3_klados";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn3_klados"] = $fdata;
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
		$fdata["FullName"] = "symetexwn3_wres";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn3_wres"] = $fdata;
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
		$fdata["FullName"] = "symetexwn3_again";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn3_again"] = $fdata;
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
		$fdata["FullName"] = "symetexwn3_epimorfosi";
	
		
		
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
	
		
		
	$tdataft_form_4["symetexwn3_epimorfosi"] = $fdata;
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
		$fdata["FullName"] = "mathites_synolo";
	
		
		
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
	
		
		
	$tdataft_form_4["mathites_synolo"] = $fdata;
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
		$fdata["FullName"] = "agoria";
	
		
		
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
	
		
		
	$tdataft_form_4["agoria"] = $fdata;
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
		$fdata["FullName"] = "koritsia";
	
		
		
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
	
		
		
	$tdataft_form_4["koritsia"] = $fdata;
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
		$fdata["FullName"] = "amiges";
	
		
		
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
	
		
		
	$tdataft_form_4["amiges"] = $fdata;
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
		$fdata["FullName"] = "meet_day";
	
		
		
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
	
		
		
	$tdataft_form_4["meet_day"] = $fdata;
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
		$fdata["FullName"] = "meet_hour";
	
		
		
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
	
		
		
	$tdataft_form_4["meet_hour"] = $fdata;
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
		$fdata["FullName"] = "meet_place";
	
		
		
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
	
		
		
	$tdataft_form_4["meet_place"] = $fdata;
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
		$fdata["FullName"] = "arxeio";
	
		
		
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
	
		
		
	$tdataft_form_4["arxeio"] = $fdata;
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
		$fdata["FullName"] = "ypothemata";
	
		
		
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
	
		
		
	$tdataft_form_4["ypothemata"] = $fdata;
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
		$fdata["FullName"] = "stoxoi";
	
		
		
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
	
		
		
	$tdataft_form_4["stoxoi"] = $fdata;
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
		$fdata["FullName"] = "methodologia";
	
		
		
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
	
		
		
	$tdataft_form_4["methodologia"] = $fdata;
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
		$fdata["FullName"] = "syndeseis";
	
		
		
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
	
		
		
	$tdataft_form_4["syndeseis"] = $fdata;
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
		$fdata["FullName"] = "month1";
	
		
		
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
	
		
		
	$tdataft_form_4["month1"] = $fdata;
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
		$fdata["FullName"] = "month2";
	
		
		
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
	
		
		
	$tdataft_form_4["month2"] = $fdata;
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
		$fdata["FullName"] = "month3";
	
		
		
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
	
		
		
	$tdataft_form_4["month3"] = $fdata;
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
		$fdata["FullName"] = "month4";
	
		
		
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
	
		
		
	$tdataft_form_4["month4"] = $fdata;
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
		$fdata["FullName"] = "month5";
	
		
		
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
	
		
		
	$tdataft_form_4["month5"] = $fdata;
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
		$fdata["FullName"] = "episkepseis";
	
		
		
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
	
		
		
	$tdataft_form_4["episkepseis"] = $fdata;
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
		$fdata["FullName"] = "submission_date";
	
		
		
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
	
		
		
	$tdataft_form_4["submission_date"] = $fdata;
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
		$fdata["FullName"] = "last_modified_date";
	
		
		
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
	
		
		
	$tdataft_form_4["last_modified_date"] = $fdata;
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
		$fdata["FullName"] = "ip_address";
	
		
		
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
	
		
		
	$tdataft_form_4["ip_address"] = $fdata;
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
		$fdata["FullName"] = "is_finalized";
	
		
		
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
	
		
		
	$tdataft_form_4["is_finalized"] = $fdata;
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
	
		
		
	$tdataft_form_4["sch_id"] = $fdata;

	
$tables_data["ft_form_4"]=&$tdataft_form_4;
$field_labels["ft_form_4"] = &$fieldLabelsft_form_4;
$fieldToolTips["ft_form_4"] = &$fieldToolTipsft_form_4;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ft_form_4"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["ft_form_4"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ft_form_4()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "submission_id,  programa,  `date`,  ar_protocol,  sxol_etos,  dide_name,  sch_name,  tel_ergasias,  dimos,  fax,  e_mail,  sch_teachers,  sch_students,  dieythintis_name,  klados_dieythinti,  program_title,  ar_praksis,  date_praksis,  sch_orario,  ypeythinos_name,  ypeythinos_amm,  ypeythinos_klados,  ypeythinos_wres,  ypeythinos_again,  ypeythinos_epimorfosi,  symetexwn1_name,  symetexwn1_amm,  symetexwn1_klados,  symetexwn1_wres,  symetexwn1_again,  symetexwn1_epimorfosi,  symetexwn2_name,  symetexwn2_amm,  symetexwn2_klados,  symetexwn2_wres,  symetexwn2_again,  symetexwn2_epimorfosi,  symetexwn3_name,  symetexwn3_amm,  symetexwn3_klados,  symetexwn3_wres,  symetexwn3_again,  symetexwn3_epimorfosi,  mathites_synolo,  agoria,  koritsia,  amiges,  meet_day,  meet_hour,  meet_place,  arxeio,  ypothemata,  stoxoi,  methodologia,  syndeseis,  month1,  month2,  month3,  month4,  month5,  episkepseis,  submission_date,  last_modified_date,  ip_address,  is_finalized,  sch_id";
$proto0["m_strFrom"] = "FROM ft_form_4";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ft_form_4 = createSqlQuery_ft_form_4();
																																																																		$tdataft_form_4[".sqlquery"] = $queryData_ft_form_4;

$tableEvents["ft_form_4"] = new eventsBase;
$tdataft_form_4[".hasEvents"] = false;

$cipherer = new RunnerCipherer("ft_form_4");

?>