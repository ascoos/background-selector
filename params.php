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
 * @subpackage         	: Backend Parameters File
 * @source             	: /[BLOCKS PATH]/background_selector/params.php
 * @fileNo             	: 6
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

global $cms_path;

function getBackgrounds(?string $dirpath=NULL): array
{
	global $cms_path, $my;
	
	if (is_null($dirpath)) $dirpath = $cms_path."/images/pub/users/".$my->id;
   	$arr = [];
	require_once($cms_path."/kernel/coreDirectory.php");
	$dir =& TDirectoryHandler::getInstance();
	$arrdir = $dir->scandir($dirpath);	
	unset($dirpath);
	unset($dir);
	foreach ($arrdir as $key => $val) $arr[$val] = $val;
	return $arr;
}

$ASCOOS['extraParamFields']['WallpaperArrays'] = getBackgrounds($cms_path."/themes/wallpapers");
?>