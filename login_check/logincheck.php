<?php
/**
* Checks to see if the user is logged in. 
* Include at the top of all pages that require a user to be logged in.
* If the user is not logged in this script will redirect them back to the index.
* If you wish to redirect elsewhere edit the path in the header function.
**/	
	try {
		$loginCheck = $db->prepare("SELECT COUNT(id) FROM users WHERE username = UPPER(?)");
		$loginCheck->bindParam(1, $_SESSION['username']);
		$loginCheck->execute();

	} catch (Exception $e) {
		echo "There was a problem connecting to the database on the login check.";
	  }

	$loginCheckValue = $loginCheck->fetchColumn(0);
		
	if ($loginCheckValue != 1) {
		header('Location:index.php');
	}


?>