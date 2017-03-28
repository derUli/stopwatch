<?php
define ( "MODULE_ADMIN_HEADLINE", get_translation ( "stopwatch" ) );
define ( "MODULE_ADMIN_REQUIRED_PERMISSION", "stopwatch" );
function stopwatch_admin() {
	echo Template::executeModuleTemplate ( "stopwatch", "embed" );
}