<?php
	/**
	* This class is used to load and Convert to mysql codes
	*/
	class ERD  
	{
		 
		public $Types=array();
		

		public function Load($FileName='')
		{
			$xml = new SimpleXMLElement(file_get_contents($FileName));
			$ts  = $xml->Types->Type;

			foreach ($ts as $t) {
		 		$name = $t['ref'];
		 		$aincr= $t['autoincrement'];

		 		$this->Types["$name"]=(string)$t;
		 	}

		 	print_r($this->Types);




			 
		}
	}
?>