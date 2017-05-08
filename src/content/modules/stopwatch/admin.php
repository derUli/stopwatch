<?php
define ( "MODULE_ADMIN_HEADLINE", get_translation ( "stopwatch" ) );
define ( "MODULE_ADMIN_REQUIRED_PERMISSION", "stopwatch" );
function stopwatch_admin() {
	$otherTemplate = Settings::get ( "stopwatch_service" ) != "chronme" ? "chronme" : "ipadstopwatch";
	if (isset ( $_REQUEST ["toggle_service"] )) {
		Settings::set ( "stopwatch_service", $otherTemplate );
	}
	
	?>
<p>
	[ <a
		href="<?php echo ModuleHelper::buildAdminURL("stopwatch", "toggle_service")?>">
		<?php translate("change_service", array("?"=> Settings::get("stopwatch_service")))?></a>
	]
</p>
<?php
	echo Template::executeModuleTemplate ( "stopwatch", "embed" );
}