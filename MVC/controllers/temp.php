<?php 
include 'models/db_config.php';
	
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	
	$password="";
	$err_password="";
	$email="";
	$err_email="";
	$err_db="";
	$hasError=false;
	if(isset($_POST["Sign_up"])){
		//name
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 3){
			$hasError = true;
			$err_name="Name must contain >3 character";
		}
		else{
			$name = $_POST["name"];
		}
		//username
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username="User Name Required";
		}
		else if(strlen($_POST["username"]) <= 3){
			$hasError = true;
			$err_username="UserName must contain >3 character";
		}
		else{
			$username = $_POST["username"];
		}
		
		//password
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		
		
		else if(isset($_POST[""])){
		       echo htmlspecialchars($_POST["pass"]);
		    }
			 else if(strlen($_POST["password"])<8){
        $hasError=true;
				 $err_password="Password Must Be 8 Charachter Long";
		 }
			 else if(!strpos($_POST["password"],"#")){
         $hasError=true;
			 $err_password="Password should contain special character";
		    }
		 else if(!strpos($_POST["password"],"5")){
         $hasError=true;
			    $err_password="Password should contain Numeric values";
		   }
		  
		   else if(strpos($_POST["password"]," ")){
          $hasError=true;
			    $err_password="Password should not contain space";
		    }
			 else{
				 $password=$_POST["password"];
			 }
			 //email
			 if(empty($_POST["email"])){
			$hasError = true;
			$err_email="Email Required";
		}
		
 else if(!strpos($_POST["email"],"@gmail.com")){
          $hasError=true;
			     $err_email="Email must contain @gmail.com ";
		     }

		
		
		else{
			$email = $_POST["email"];
		}
		
		if(!$hasError){ 
			$rs= insertUser($name,$username,$email,$password);
			if($rs===true)
			{
				header("Location: loginpage.php");
			}
			$err_db= $rs;
	//header("Location: loginpage.php");
	}
}
else if (isset($_POST["login"]))
{
	//email
			 if(empty($_POST["email"])){
			$hasError = true;
			$err_email="Email Required";
		}

		
		
		else{
			$email = $_POST["email"];
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		
		
		else if(isset($_POST[""])){
		       echo htmlspecialchars($_POST["pass"]);
		    }
			 else if(strlen($_POST["password"])<8){
        $hasError=true;
				 $err_password="Password Must Be 8 Charachter Long";
		 }
			 else if(!strpos($_POST["password"],"#")){
         $hasError=true;
			 $err_password="Password should contain special character";
		    }
		 else if(!strpos($_POST["password"],"5")){
         $hasError=true;
			    $err_password="Password should contain Numeric values";
		   }
		  
		   else if(strpos($_POST["password"]," ")){
          $hasError=true;
			    $err_password="Password should not contain space";
		    }
			 else{
				 $password=$_POST["password"];
			 }
			 if(!$hasError){ 
			 $rs= authenticateUser($email,$password);
			 if($rs===true)
			{
				header("Location: dashboard.php");
			}
			 
			 $err_db="log In failed. Please try again";
			 
			 
}
	
}
function insertUser($name,$username,$email,$password)
{
	$query= "insert into user_info values (NULL, '$name','$username','$email','$password')";
	return excute($query);
}
	function authenticateUser($email,$password)
	{
		$query= "select * from user_info where email='$email' and password='$password'";
		$rs= get($query);
		if(count($rs)>0)
		{
			return true;
		}
		return false;
	}

?>