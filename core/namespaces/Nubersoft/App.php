<?php
namespace Nubersoft;

class	App extends \Nubersoft\nApp
	{
		public	function __construct()
			{
				return parent::__construct();
			}
		
		public	function getData()
			{
				return $this->getHelper('Methodize');
			}
	}