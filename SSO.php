<?php
/* Copyright Panopto 2009 - 2011 / With contributions from Spenser Jones (sjones@ambrose.edu)
 * 
 * This file is part of the Panopto plugin for Moodle.
 * 
 * The Panopto plugin for Moodle is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * The Panopto plugin for Moodle is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with the Panopto plugin for Moodle.  If not, see <http://www.gnu.org/licenses/>.
 */

global $CFG, $USER;

if(empty($CFG))
{
    require_once("../../config.php");
}
require_once ($CFG->libdir . '/weblib.php');
require_once("lib/block_panopto_lib.php");

$server_name = required_param("serverName");
$callback_url = required_param("callbackURL");
$expiration = required_param("expiration");
$request_auth_code = required_param("authCode");
$action = optional_param("action");

$relogin = ($action == "relogin");

if($relogin || (isset($USER->username) && ($USER->username == "guest")))
{
    require_logout();

    // Return to this page, minus the "action=relogin" parameter.
    redirect($CFG->wwwroot . "/blocks/panopto/SSO.php" .
				"?authCode=$request_auth_code" .
				"&serverName=$server_name" .
				"&expiration=$expiration" .
				"&callbackURL=" . urlencode($callback_url));
    return;
}

// No course ID (0).  Don't autologin guests (false).
require_login(0, false);

// Reproduce canonically-ordered incoming auth payload.
$request_auth_payload = "serverName=" . $server_name . "&expiration=" . $expiration;

// Verify passed in parameters are properly signed.
if(validate_auth_code($request_auth_payload, $request_auth_code))
{
    $user_key = decorate_username($USER->username);

    // Generate canonically-ordered auth payload string
    $response_params = "serverName=" . $server_name . "&externalUserKey=" . $user_key . "&expiration=" . $expiration;
    // Sign payload with shared key and hash.
    $response_auth_code = generate_auth_code($response_params);

    $separator = (strpos($callback_url, "?") ? "&" : "?");
    $redirect_url = $callback_url . $separator . $response_params . "&authCode=" . $response_auth_code;

    // Redirect to Panopto Focus login page.
    redirect($redirect_url);
}
else
{
    print_header();

    echo "Invalid auth code.";

    print_footer();
}
