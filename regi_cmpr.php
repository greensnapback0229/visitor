<?php 
	function regi_cmpr($rid, $rpw, $rmail, $rhobby){
		$rpw_pattern = '^.*(?=^.{8,15}$)(?=.*\d)(?=.*[a-zA-Z])(?=.*[!@#$%^&+=]).*$';
		$err = 0; 
		$chk = 0; 
	if($id!=NULL && $rpw!=NULL && $rmail!=NULL){
		if(ereg("^[[:alnum:]]{6,12}$", $rid)){
			$chk +1;
		}
		
		else{
			$err +10;
		}
	/*	if(ereg($rpw_pattern, $rpw)){
			$chk +1; 
		}

		else{
			$err +10;
		}*/
	/*	if(ereg("^[[:alnum:]]{1,10}@+[[:alpha:]]{1,10}\.com$",$rmail)){
			$chk +1;
		}
		
		else{
			$err +10;
		}*/
		
		if($err >0){
			return $err;
		}
		else{
			return $chk; 
		}
	}
}
?>
