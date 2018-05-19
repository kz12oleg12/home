<?php
	class alloptions
		{
		public $types = [];
		
		function __construct() 
			{
			$this->types = [];
			}
			
		public function get_translete($name) 
			{
			require('config/translete.php');
			$lang = 'ru';
			
			if(isset(${$name}[$lang])) 
				{
				return ${$name}[$lang];
				}
			elseif(isset(${$name}['ru'])) 
				{
				return ${$name}['ru'];				
				}
			else 
				{
				return false;
				}
			}
				
		}
?>
