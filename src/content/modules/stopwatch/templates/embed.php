<?php
$template = Settings::get ( "stopwatch_service" ) == "chronme" ? "chronme" : "ipadstopwatch";

$template = "services/" . $template . ".php";
echo Template::executeModuleTemplate ( "stopwatch", $template );
?>
