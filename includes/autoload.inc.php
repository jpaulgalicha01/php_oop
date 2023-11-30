<?php


spl_autoload_register('Autoload');

function Autoload($classname){
	$ext = ".config.php";

	$full_path = 'config/' . $classname . $ext;

	if(!file_exists($full_path)){
		return false;
	}

	include_once ($full_path);
}
