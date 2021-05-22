<?php
if(isset($_POST['gonder'])){
	$username=$_POST['isim'];
	$password=$_POST['sifre'];
	if($username=="g191210352@sakarya.edu.tr" && $password=="g191210352"){
		echo "Hoşgeldiniz $password";
	}
	else{
		
			header('location:login.html');
		
	}
}

?>
