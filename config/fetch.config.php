<?php

class fetch extends controller{

	public function log_in($name,$pass){
		$stmt = $this->logIn($name,$pass);	

		if($stmt){
			echo "Username/Password are Valid";
		}
		else{
			echo "Usename/Password not Valid";
		}

	}
}


?>