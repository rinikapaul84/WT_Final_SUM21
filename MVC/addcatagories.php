<?php include 'admin_header.php';
include 'controllers/catagory.php';?>
<html>
	<head></head>
	<body>
		<form action="" method="post">
		
		<fieldset>
		
			<table >
			
			<tr>
			
			<td> <center> Welcome to Add Catagory  </td>
			<h5> <?php echo $err_db;?></h5>
			<tr>
					<td>Enter The product Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder=" name ...."> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
			
			
			
			<tr>
					<td colspan="2" align="right"> <input type="submit" name="add_catagory" value="Add catagory"><input type="reset" value="Reset"> </td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>
