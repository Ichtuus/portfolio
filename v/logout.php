<?php
	session_start();
	if(isset($_SESSION['theName'])){
		echo "à bientôt ".$_SESSION['theName']." !";
		session_destroy();
		echo "<script>setTimeout(function(){location.replace('../');}, 3000)</script>";
	}else{
		echo "<script>location.replace('../')</script>";
	}

?>