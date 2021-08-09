<?php 
if (!isset ($_COOKIE["loggeduser"]))
{
	header("Location: loginpage.php");
}
?> 
<html>
	<head></head>
	<body>
	<h1 align="center"> Welcome to Course <?php echo $_COOKIE["loggeduser"];?></h1>
		
		<fieldset>
		
			<table >
			<td>
			
					    
					  <a href = "Information.php"> <input type="submit" name="submit" value="Information Technologies"></a> <br>
						<a href = "arts.php"> <input type="submit" name="submit" value="Arts & Humanties"></a> <br>
						<a href = "business.php"> <input type="submit" name="submit" value="Business"></a> <br>
						 <a href = "computer_science.php"><input type="submit" name="submit" value="Computer Science"></a> <br>
						<a href = "datascience.php"><input type="submit" name="submit" value="Data Science"></a> <br>
						<a href = "math.php"><input type="submit" name="submit" value="Math & logic"></a>
						
					</td>
			
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>