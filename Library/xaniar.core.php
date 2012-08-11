<?php
class App{
	static $libs=array();

	static function isLoaded($lib){
		return in_array($lib, self::$libs);
	}
	
	static function LoadClass($lib){
		if(!self::isLoaded($lib)){
			self::$libs[]=$lib;
			$path = str_replace('.', '/', $lib).'.php';
			include $path ;
		}
	}
}

function import($lib){
	App::LoadClass($lib);
}
?>