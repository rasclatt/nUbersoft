<?php
function process_requests()
	{
		register_use(__FUNCTION__);
		$header	=	new HeadProcessor();
		// Process any actions
		$header->Process();
		// Process login action
		$header->Login();
		
		$reset			=	(isset($header->reset) && !empty($header->reset))? array("reset"=>$header->reset,"data"=>$header->data) : array("reset"=>false,"data"=>array());
		$array			=	(isset(NubeData::$settings->engine))? (array) NubeData::$settings->engine : false;
		$array['reset']	=	$reset;
		nApp::saveSetting('engine',$array);
		return $reset;
	}