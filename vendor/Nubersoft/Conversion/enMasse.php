<?php
namespace Nubersoft\Conversion;

trait enMasse
{
	public	function colToTitle($value, $uc = true)
	{
		return $this->columnToTitle($value, $uc);
	}
	
	public	function columnToTitle($value, $uc = true)
	{
		return (new \Nubersoft\Conversion())->{__FUNCTION__}($value, $uc);
	}
}