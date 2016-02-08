<?php
/**
 * This product Copyright 2010 metaVentis GmbH.  For detailed notice,
 * see the "NOTICE" file with this distribution.
 * 
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 */

define('cookie_path','/srv/www/moodledata/sessions/');
define('cookie_name','MoodleSession');  // <= current name of cookie

// 1st part of this setting is the same like "$CFG->dirroot", hard written here to prevent MoodleSessionStart/Fails... .. .do not change the 2nd part!
define ('CC_CONF_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define ('CC_CONF_APPFILE','ccapp-registry.properties.xml');


//param names for es authentication predefined by repository
//if shibboleth attributes are defined these one must match!
define('EDU_AUTH_PARAM_NAME_USERID', 'userid'); // change to userid
define('EDU_AUTH_PARAM_NAME_LASTNAME', 'lastname');
define('EDU_AUTH_PARAM_NAME_FIRSTNAME', 'firstname');
define('EDU_AUTH_PARAM_NAME_EMAIL', 'email');

//EDU_AUTH_KEY valuespace "id", "username", "idnumber", "email"
define('EDU_AUTH_KEY', 'username');








