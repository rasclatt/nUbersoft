<?php
if(!$this->isAjaxRequest())
	die('Bad request');

$settings	=	array(
	'html'=>array(
		$this->useTemplatePlugin('nbr_modal')
	),
	'sendto'=>array(
		'#loadspot_modal'
	),
	'acton'=>array(
		'body',
		'#loadspot_modal'
	),
	'fx'=>array(
		'rOpacity',
		'addClass'
	)
);

die(json_encode($settings));