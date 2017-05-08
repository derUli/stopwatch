<?php
$template = Settings::get ( "stopwatch_service" ) == "chronme" ? "chronme" : "ipadstopwatch";

$template = "services/" . $template;
echo Template::executeModuleTemplate ( "stopwatch", $template );
?>
