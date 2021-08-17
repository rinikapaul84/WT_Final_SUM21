  <?php include 'main_header.php';?>
<?php 
include 'controllers/temp.php';
?> 

<html>
	<head></head>
	<body>
		<form action="" method="post">
		
		<fieldset>
		
			<table >
			
			<tr>
			<td> <center> LogIn Form  </td>
			</tr>
			<h5> <?php echo $err_db;?></h5>
			<tr>
					<td>Email</td>
					<td>: <input type="text" name="email" value="<?php echo $email; ?>"placeholder="Insert Your Email">  </td>
					<td><span> <?php echo $err_email;?> </span></td>
				</tr>
				<tr>
					<td>Enter Password</td>
					<td>: <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
			<tr>
					 <td  rowspan="2" > <input type="submit" name="login" value="Log In"> </a>  <input type="reset" value="Reset"> </td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>