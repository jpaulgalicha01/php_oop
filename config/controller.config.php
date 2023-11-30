<?php

class controller{
	protected function logIn($name,$pass){

		// Credentials for log in
		$uname = "user";
		
		// This password depends on you what will you it's either md5 or password_hash

		$password = "ee11cbb19052e40b07aac0ca060c23ee"; // This md5 password is equal to $uname variable

		if($uname == $name && md5($pass) == $password){
			return 1;
		}
			return 0;

	}
}
?>