<?php
	function login_cmpr($id, $pw){
		include("./dbcom.php");
		$quer="select * from mysite"; 
		
		if($result = mysqli_query($conn, $quer)){
			while($row = mysqli_fetch_array($result)){		
				//echo "<script> alert( $row[1]); </script>";
				if($row['id'] == $id and $row['pw'] == $pw){
					return 1; 
				}
						
				else if($row['id'] == $id and $row['pw'] != $pw){
					return 2;
				}
				
				else if($row['id'] != $id and $row['pw'] == $pw){
					return 2;
				}  
				else{
					continue;
				}
			}
		}
	}
?>

