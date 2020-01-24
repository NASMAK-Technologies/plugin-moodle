<?php
// This file is part of Moodle - http://moodle.org/
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Filter converting edu-sharing URIs in the text to edu-sharing rendering links
 *
 * @package mod_edusharing
 * @copyright metaVentis GmbH — http://metaventis.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/mod/edusharing/locallib.php');

function xmldb_edusharing_install() {

    //$metadataurl = 'http://localhost:8080/edu-sharing/metadata?format=lms';
    $metadataurl = null;
    $repo_admin = 'admin';
    $repo_pw = 'admin';
    $repo_url = get_config('edusharing', 'application_cc_gui_url');

    if (!empty($metadataurl)){
        if (edusharing_import_metadata($metadataurl)){
            error_log('Successfully imported metadata from '.$metadataurl);
            $answer = json_decode(callRepoAPI('PUT', $repo_url.'rest/admin/v1/applications?url=http%3A%2F%2Flocalhost%2Fplugin-moodle%2Fmod%2Fedusharing%2Fmetadata.php', null, $repo_admin.':'.$repo_pw), true);
            if ($answer['appid'] == get_config('edusharing', 'application_appid')){
                error_log('Successfully registered the edusharing-moodle-plugin at: '.$repo_url);
            }else{
                error_log('Could not register the edusharing-moodle-plugin at: '.$repo_url);
            }
        }else{
            error_log('Could not import metadata from '.$metadataurl);
        }
    }
}

