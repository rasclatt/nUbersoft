<?php
include_once(__DIR__.'/../config.php');
AutoloadFunction("check_empty");

if(!check_empty($_POST,'action'))
	return;

AutoloadFunction("ajax_check_user",__DIR__.'/functions/');
echo ajax_check_user();