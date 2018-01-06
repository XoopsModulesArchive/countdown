<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
$modversion['name'] = _MI_COUNTDOWN_NAME;
$modversion['version'] = '0.1 Beta';
$modversion['description'] = _MI_COUNTDOWN_DESC;
$modversion['credits'] = "Eric Juden (ejuden01)";
$modversion['author'] = "Alan Juden (ajuden)";
$modversion['help'] = "not yet";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 1;
$modversion['image'] = "images/logo.png";
$modversion['dirname'] = "countdown";


// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0]    = "countdown_events";

// Admin things
$modversion['hasAdmin'] = 0;

// Templates
$modversion['templates'][1]['file'] = 'countdown_index.html';
$modversion['templates'][1]['description'] = _MI_CD_TEMP_COUNTDOWN;
$modversion['templates'][2]['file'] = 'countdown_add.html';
$modversion['templates'][2]['description'] = _MI_CD_TEMP_COUNTDOWN_ADD;
$modversion['templates'][3]['file'] = 'countdown_edit.html';
$modversion['templates'][3]['description'] = _MI_CD_TEMP_COUNTDOWN_EDIT;

// Menu
$modversion['hasMain'] = 1;
$modversion['sub'][1]['name'] = _MI_MENU_ADD_NEW;
$modversion['sub'][1]['url'] = "index.php?op=add";
$modversion['sub'][2]['name'] = _MI_MENU_VIEW_CURRENT;
$modversion['sub'][2]['url'] = "index.php";
$modversion['sub'][3]['name'] = _MI_MENU_VIEW_ALL;
$modversion['sub'][3]['url'] = "index.php?op=all";
$modversion['sub'][4]['name'] = _MI_MENU_VIEW_EXPIRED;
$modversion['sub'][4]['url'] = "index.php?op=expired";
	
// Search
$modversion['hasSearch'] = 0;

?>