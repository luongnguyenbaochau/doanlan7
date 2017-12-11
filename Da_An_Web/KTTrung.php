<?php
		include("./config/config.php");
	    include ROOT."/include/function.php";
	    spl_autoload_register("loadClass");
	    $db= new Db();

		$action = isset($_POST['check']) ? $_POST['check'] : false;
		
		if ($action == "email") {
			$email = isset($_POST['email']) ? $_POST['email'] : '';
			$query= "select count(*) from user where email = '$email'";
			$results = $db->exeQuery($query);
		    if($results[0]['count(*)']==0) {
		        echo 'false';
		    }
		    else{
		       echo 'true';
		    }
		}
		else if ($action == 'phone') {
			$phone_number = isset($_POST['phone']) ? $_POST['phone'] : '';
			$query= "SELECT count(*) FROM user WHERE sdt='". $phone_number."'" ;
			$results =$db->exeQuery($query);
			if ($results[0]['count(*)']!=0) {
				echo 'true';
		    }
		    else{
				print_r("null" );

		        echo 'false';
		    }

		}
	exit;
?>