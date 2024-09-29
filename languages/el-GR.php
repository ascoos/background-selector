<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ***********************************************************************************
 * @ASCOOS-NAME        : ASCOOS CMS 24'                                            *
 * @ASCOOS-VERSION     : 24.0.0                                                    *
 * @ASCOOS-CATEGORY    : Block (Frontend and Administrator Side)                   *
 * @ASCOOS-CREATOR     : Drogidis Christos                                         *
 * @ASCOOS-SITE        : www.ascoos.com                                            *
 * @ASCOOS-LICENSE     : [Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html  *
 * @ASCOOS-COPYRIGHT   : Copyright (c) 2007 - 2024, AlexSoft Software.             *
 ***********************************************************************************
 *
 * @package            : Background Selector
 * @subpackage         : Greek Languages (el, el-GR)
 * @source             : /[BLOCKS PATH]/background_selector/languages/el-GR.php
 * @fileNo             : 
 * @version            : 1.0.1
 * @created            : 2012-07-27 20:00:00 UTC+3 
 * @updated            : 2024-09-29 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 * @translator	       :
 * @translatorSite     :
 * @translatorCreated  :
 * @translatedUpdated  : 
*/

defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

class TBlock_background_selector_Language extends TObject
{
	public $blockname = "Επιλογή υποβάθρου ιστοσελίδας";

	public $APL_license = "Ascoos General License (AGL)";
	public $APL_author = "ΔΡΟΓΚΙΔΗΣ ΧΡΗΣΤΟΣ";
	public $APL_creation = "";
	public $APL_copyright = "ALEXSOFT ΛΟΓΙΣΜΙΚΟ";
	public $APL_translator = "";
	public $APL_translatorEmail = "";
	public $APL_translatorUrl = "";
	public $APL_desc = "Με το ένθεμα αυτό, μπορούμε να αλλάξουμε δυναμικά την εικόνα του υποβάθρου της ιστοσελίδας μας, ή ακόμη και μεμονομένων στοιχείων όπως DIVS κλπ.";
	
	public $APL_paramgroup_dates_label = "▼ &nbsp; Επιλογές Ημερομηνιών Εφαρμογής Παραμέτρων";
	public $APL_paramgroup_dates_label_info = "<strong>ΕΠΙΛΟΓΕΣ ΗΜΕΡΟΜΗΝΙΩΝ</strong><br />--------------------------------------<br /><br />Στο πλαίσιο αυτό μπορείτε να επιλέξετε εάν θέλετε η ενότητα αυτή να έχει χρονικά όρια λειτουργίας.";
	public $APL_sdate_label = "Ημερομηνία έναρξης εμφάνισης υποβάθρου";
	public $APL_sdate_desc = "<strong>ΗΜΕΡΟΜΗΝΙΑ ΕΝΑΡΞΗΣ</strong><br />--------------------------------------<br /><br />Πατήστε δίπλα στο πλαίσιο εισαγωγής και επιλέξτε από το πλαίσιο ημερομηνίας την ημερομηνία έναρξης λειτουργίας της ενότητας αυτής.<br /><br />Μπορείτε να δώσετε μεταγενέστερη ημερομηνία έναρξης.";
	public $APL_edate_label = "Ημερομηνία λήξης υποβάθρου";
	public $APL_edate_desc = "<strong>ΗΜΕΡΟΜΗΝΙΑ ΛΗΞΗΣ</strong><br />--------------------------------------<br /><br />Πατήστε δίπλα στο πλαίσιο εισαγωγής και επιλέξτε από το πλαίσιο ημερομηνίας την ημερομηνία λήξης λειτουργίας της ενότητας αυτής.<br /><br />Συνίσταται η χρήση της επιλογής αυτής για να έχετε στοχευμένες παρουσιάσεις ανά σελίδα ή ημέρα κλπ.";

	public $APL_paramgroup_bg_label = "▼ &nbsp; Επιλογές Εικόνας Υποβάθρου";
	public $APL_paramgroup_bg_label_info = "<strong>ΕΠΙΛΟΓΕΣ ΕΙΚΟΝΑΣ</strong><br />--------------------------------------<br /><br />Στο πλαίσιο αυτό μπορείτε να επιλέξετε διάφορες παραμέτρους για να διαμορφώσετε την εικόνα υποβάθρου.";
	public $APL_id_label = "Στοιχείο CSS";
	public $APL_id_desc = "<strong>ΣΤΟΙΧΕΙΟ CSS</strong><br />--------------------------------------<br /><br />Δώστε εδώ το στοιχείο ή τα στοιχεία CSS που θέλετε να περιέχουν την επιλεγόμενη εικόνα υποβάθρου.<br /><br />Σε περίπτωση πολλών στοιχείων, θα πρέπει να διαχωρίζονται με κόμμα (π.χ. body, .myclass, #myid).";
	public $APL_image_label = "Εικόνα υποβάθρου ιστοσελίδας";
	public $APL_image_placeholder = " Επιλέξτε μια εικόνα υποβάθρου ";	
	public $APL_image_desc = "<strong>ΕΙΚΟΝΑ ΥΠΟΒΑΘΡΟΥ</strong><br />--------------------------------------<br /><br />Επιλέξτε μια από τις διαθέσιμες εικόνες της λίστας για το υπόβαθρο της σελίδας σας.<br /><br />Εφόσον έχετε τα απαραίτητα δικαιώματα πρόσβασης, μπορείτε να αλλάξετε την διαδρομή που βρίσκονται οι εικόνες σας μέσα από το αρχείο params.php.";
	public $APL_position_label = "Στοίχιση εικόνας υποβάθρου";
	public $APL_position_placeholder = " Επιλέξτε μια στοίχιση ";
	public $APL_position_desc = "<strong>ΣΤΟΙΧΙΣΗ ΕΙΚΟΝΑΣ</strong><br />--------------------------------------<br /><br />Επιλέξτε την οριζόντια και κάθετη στοίχιση της εικόνας υποβάθρου.<br /><br />Σας παρέχονται 9 επιλογές στοίχισης.";
	public $APL_opt_LeftTop = "Αριστερά - Επάνω";
	public $APL_opt_LeftCenter = "Αριστερά - Κέντρο";
	public $APL_opt_LeftBottom = "Αριστερά - Κάτω";
	public $APL_opt_RightTop = "Δεξιά - Επάνω";
	public $APL_opt_RightCenter = "Δεξιά - Κέντρο";
	public $APL_opt_RightBottom = "Δεξιά - Κάτω";
	public $APL_opt_CenterTop = "Κέντρο - Επάνω";
	public $APL_opt_CenterCenter = "Κέντρο - Κέντρο";
	public $APL_opt_CenterBottom = "Κέντρο - Κάτω";
	public $APL_attachment_label = "Επισύναψη εικόνας υποβάθρου";
	public $APL_attachment_placeholder = " Επιλέξτε μια επισύναψη υποβάθρου";
	public $APL_attachment_desc = "<strong>ΕΠΙΣΥΝΑΨΗ ΕΙΚΟΝΑΣ</strong><br />--------------------------------------<br /><br />Εδώ μπορείτε να επιλέξετε την μέθοδο επισύναψης της εικόνας υποβάθρου στην ιστοσελίδα σας.<br /><br />Η μέθοδος της αυτόματης διόρθωσης, θα καταστήσει ακίνητη και σταθερή την εικόνα υποβάθρου κατά την κύλιση της σελίδας. Η 2η μέθοδος θα έχει ως αποτέλεσμα την κύλιση της εικόνας υποβαθρου μαζί με το περιεχόμενο της σελίδας.";
	public $APL_opt_Fixed = "Αυτόματη διόρθωση";
	public $APL_opt_Scroll = "Κυλιόμενο";
	public $APL_repeat_label = "Επανάληψη εικόνας υποβάθρου";
	public $APL_repeat_placeholder = " Επιλέξτε μια επανάληψη εικόνας ";
	public $APL_repeat_desc = "<strong>ΕΠΑΝΑΛΗΨΗ ΕΙΚΟΝΑΣ</strong><br />--------------------------------------<br /><br />Εδώ μπορείτε να επιλέξετε εάν η εικόνα θα επαναλαμβάνεται ή όχι και τον τρόπο της επανάληψης.<br /><br />Σας παρέχονται 4 επιλογές επανάληψης.";
	public $APL_opt_NoRepeat = "Χωρίς επανάληψη";
	public $APL_opt_Repeat = "Επανάληψη";
	public $APL_opt_RepeatX = "Οριζόντια επανάληψη";
	public $APL_opt_RepeatY = "Κάθετη επανάληψη";
	public $APL_bgcolor_label = "Χρώμα Υποβάθρου";
	public $APL_bgcolor_desc = "<strong>ΧΡΩΜΑ ΥΠΟΒΑΘΡΟΥ</strong><br />--------------------------------------<br /><br />Πατήστε διπλό κλικ στο διπλανό πλαίσιο εισαγωγής για να εμφανιστεί το πλαίσιο επιλογής χρώματος υποβάθρου.<br /><br />Έχετε την δυνατότητα να καταχωρήσετε και χειροκίνητα το χρώμα της αρεσκείας σας, σε μορφή RRGGBB (Προσοχή!! χωρίς το # μπροστά).";
}
?>