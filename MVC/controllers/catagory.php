<?php 
include 'models/db_config.php';
  
  $name="";
	$err_name="";
	$err_db="";
	$hasError=false;
	if(isset($_POST["add_catagory"])){
		//name
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else{
			$name = $_POST["name"];
		}
		if(!$hasError){ 
			$rs= insertCatagory($name);
			if($rs===true)
			{
				header("Location: allcatagories.php");
			}
			$err_db= $rs;
	}
}
function insertCatagory($name)
{
	$query= "insert into catagories values (NULL,'$name')";
	return excute($query);
}
function getAllcatagory()
{
	$query= "select * from catagories";
	$rs= get($query);
	return $rs;
}
function getCategory($id){
			$query="select * from catagories where id=$id";
			$rs=get($query);
			return $rs[0];
		}
?>