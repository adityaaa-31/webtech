
<?php
	$name= $_POST['uname'];
	$pwd= $_POST['pwd'];

	session_start();
	if(($name=="Aditya")&& ($pwd=='a@123')){
		echo "Hi, Welcome " .$name;
	}
	else{
		if(!isset($_SESSION['$chance']))
		$_SESSION['$chance']=0;
		$_SESSION['$chance']++;
		echo "Wrong Password, Try Again " .$_SESSION['$chance']." chances gone";
	}
	
	if($_SESSION['$chance']==3){
		echo "<br> Sorry, Your Chances have exceeded";	
		$_SESSION['$chance']=0;
	}

?>	

