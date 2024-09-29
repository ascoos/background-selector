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
 * @subpackage         : GB English Languages (en, en-GB)
 * @source             : /[BLOCKS PATH]/background_selector/languages/en-GB.php
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
	public $blockname = "Select background website";

	public $APL_license = "Ascoos General License (AGL)";
	public $APL_author = "CHRIS DROGKIDIS";
	public $APL_creation = "";
	public $APL_copyright = "ALEXSOFT SOFTWARE";
	public $APL_translator = "KOURTIDIS GEORGE";
	public $APL_translatorEmail = "";
	public $APL_translatorUrl = "";
	public $APL_desc = "With this implant, we can dynamically change the image of the background of our website, or even the isolated elements as DIVS, etc.";
	
	public $APL_paramgroup_dates_label = "▼ &nbsp; Options of Dates of Application Configurations";
	public $APL_paramgroup_dates_label_info = "<strong>CHOICES OF DATES</strong><br />--------------------------------------<br /><br />In this context you can choose whether you want this section to have time limits of operation.";
	public $APL_sdate_label = "Date of beginning of appearance of background";
	public $APL_sdate_desc = "<strong>EFFECTIVE DATE</strong><br />--------------------------------------<br /><br />Click next to input box, choose the date of beginning of operation of this section.<br /><br />You can give a later date of beginning.";
	public $APL_edate_label = "Date of expiry of background";
	public $APL_edate_desc = "<strong>EXPIRATION DATE</strong><br />--------------------------------------<br /><br />Click next to input box, choose the date of expiry of operation of this section.<br /><br />It is recommended to use this option to have targeted presentations per page or days, etc.";

	public $APL_paramgroup_bg_label = "▼ &nbsp; Background image options";
	public $APL_paramgroup_bg_label_info = "<strong>IMAGE OPTIONS</strong><br />--------------------------------------<br /><br />In this frame you can select various parameters to customize the background image.";
	public $APL_id_label = "CSS Selector";
	public $APL_id_desc = "<strong>CSS SELECTORS</strong><br />--------------------------------------<br /><br />Give here the CSS item or items that you want they contain the selected picture of background.<br /><br />In the case of many elements should be separated by commas (eg, body,. Myclass, # myid).";
	public $APL_image_label = "Website background image";
	public $APL_image_placeholder = " Select a background image ";	
	public $APL_image_desc = "<strong>BACKGROUND IMAGE</strong><br />--------------------------------------<br /><br />Select from the list of available images for the background of your page.<br /><br />Provided that you have the essential rights of access, you can change the root of your pictures is found, through the file params.php.";
	public $APL_position_label = "Background image alignment";
	public $APL_position_placeholder = " Select an alignment ";
	public $APL_position_desc = "<strong>IMAGE POSITION</strong><br />--------------------------------------<br /><br />Select the horizontal and vertical alignment of the image background.<br /><br />You are provided with 9 alignment options.";
	public $APL_opt_LeftTop = "Left - Top";
	public $APL_opt_LeftCenter = "Left - Center";
	public $APL_opt_LeftBottom = "Left - Bottom";
	public $APL_opt_RightTop = "Right - Top";
	public $APL_opt_RightCenter = "Right - Center";
	public $APL_opt_RightBottom = "Right - Bottom";
	public $APL_opt_CenterTop = "Center - Top";
	public $APL_opt_CenterCenter = "Center - Center";
	public $APL_opt_CenterBottom = "Center - Bottom";
	public $APL_attachment_label = "Attach a background image";
	public $APL_attachment_placeholder = " Select a background attachment";
	public $APL_attachment_desc = "<strong>IMAGE ATTACHMENT</strong><br />--------------------------------------<br /><br />Here you can select the method to attach the background image on your website.<br /><br />The method of automatic correction, make real and steady the image background when scrolling the page. The second method will result in scrolling the background image, along with the page content.";
	public $APL_opt_Fixed = "AutoCorrect";
	public $APL_opt_Scroll = "Rolling";
	public $APL_repeat_label = "Repeating background image";
	public $APL_repeat_placeholder = " Select a replay image ";
	public $APL_repeat_desc = "<strong>IMAGE REPEAT</strong><br />--------------------------------------<br /><br />Here you can choose whether the image will be repeated or not and the way of repetition.<br /><br />We provide 4 selections of repetition.";
	public $APL_opt_NoRepeat = "Uncommitted";
	public $APL_opt_Repeat = "Repetition";
	public $APL_opt_RepeatX = "Horizontal repetition";
	public $APL_opt_RepeatY = "Vertical repetition";
	public $APL_bgcolor_label = "Background color";
	public $APL_bgcolor_desc = "<strong>BACKGROUND COLOR</strong><br />--------------------------------------<br /><br />Double-click in the next input box to display the background color selection box.<br /><br />You can manually enter the color of your choice, in the form RRGGBB (Attention! Without the # in front).";
}
?>