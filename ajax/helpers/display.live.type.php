<?php
include_once(__DIR__.'/../config.php');
autoload_function("check_empty");

if(!check_empty($_POST,'content'))
	return;
	
autoload_function("ajax_display_live_type",__DIR__.'/functions/');
echo ajax_display_live_type();