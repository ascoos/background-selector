<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ************************************************************************************
 * @ASCOOS-NAME        	: ASCOOS CMS 24'                                            *
 * @ASCOOS-VERSION     	: 24.0.0                                                    *
 * @ASCOOS-CATEGORY    	: Block (Frontend and Administrator Side)                   *
 * @ASCOOS-CREATOR     	: Drogidis Christos                                         *
 * @ASCOOS-SITE        	: www.ascoos.com                                            *
 * @ASCOOS-LICENSE     	: [Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html  *
 * @ASCOOS-COPYRIGHT   	: Copyright (c) 2007 - 2024, AlexSoft Software.             *
 ************************************************************************************
 *
 * @package            	: Background Selector
 * @subpackage         	: Main Frontend File
 * @source             	: /[BLOCKS PATH]/background_selector/index.php
 * @fileNo             	: 5
 * @version            	: 1.0.1
 * @created            	: 2012-07-27 20:00:00 UTC+3 
 * @updated            	: 2024-09-29 07:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 8.2.0
 */

defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

global $cms_site, $app, $cur_template, $frontpage, $efp;

$bg_date_start	= $block->getParam('str', 'sdate', '');
$bg_date_end	= $block->getParam('str', 'edate', '');
$bg_id    	 	= $block->getParam('str', 'id', '');
$bg_image    	= $block->getParam('str', 'image', '');
$bg_position 	= $block->getParam('str', 'position', '');
$bg_attachment	= $block->getParam('str', 'attachment', '');
$bg_repeat     	= $block->getParam('str', 'repeat', '');
$bg_color      	= $block->getParam('str', 'color', '');

// If isset Background image and CSS Selector
if ( ($bg_id != '') && ($bg_image != '') )
{
	// If given a start date
	if ( $bg_date_start !='') $bg_sdate = (time() >= strtotime($bg_date_start)) ? true : false;
	else $bg_sdate = true;

	// If given an expiration date
	if ( $bg_date_end != '') $bg_edate = (time() <= strtotime($bg_date_end)) ? true : false;
	else $bg_edate = true;

	// If we are within the limits of the given dates.
	if ($bg_sdate && $bg_edate)
	{
		// If selected Front 3LT Template.
		$bgtpl = ( strcmp($block->getVar('front'), $cur_template) == 0) ? true : false;

		// If selected Frontpage 3LT Template.
		$bgfrontpage = ( strcmp($block->getVar('frontpage'), $frontpage) == 0) ? true : false;

		// If selected EFP 3LT Template.
		$bgefp = ( strcmp($block->getVar('efp'), $efp) == 0) ? true : false;

		// If you have selected a 3LT Template.	
		if ($bgtpl || $bgfrontpage || $bgefp)
		{
			$arr = [];
			$text = "jQuery('".$bg_id."').css({";
			if ($bg_image != '') 		$arr[] = '"background-image":"url('.$cms_site .'/themes/wallpapers/'.$bg_image.')"';
			if ($bg_attachment != '') 	$arr[] = '"background-attachment":"'.$bg_attachment.'"';
			if ($bg_position != '') 	$arr[] = '"background-position":"'.$bg_position.'"';
			if ($bg_repeat != '') 		$arr[] = '"background-repeat":"'.$bg_repeat.'"';
			if ($bg_color != '') 		$arr[] = '"background-color":"#'.$bg_color.'"';
			$text .= implode(',', $arr)."});";
			unset($arr);
			$app->addJAScript($text);
			unset($text);
		} 
	}
}
?>