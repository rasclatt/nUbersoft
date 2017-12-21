<?php
namespace Nubersoft;

class Conversion extends \Nubersoft\Singleton
{
	public	static	function columnToTitle($title,$uc = false)
	{
		$title	= str_replace('_',' ',$title);
		return ($uc)? ucwords($title) : $title;
	}
}