<?php 
include 'admin_header.php';
include 'controllers/catagory.php';
$catagories=getAllcatagory(); 
?>
<html>
	<head></head>
	<h3>All Categories</h3>
	<table>
	<thead>
	    <th>Sl#</th>
		<th>Name</th>
		<th>Product Count</th>
		<th></th>
		<th></th>
	</thead>
	<tbody>
	<?php 
	$i = 1;
	foreach($catagories as $c){
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$c["name"]."</td>";
		  echo '<td><a href="Edit_Category.php?id='.$c["id"].'">Edit</a></td>';
		  echo "<td>Delete</td>";
		  echo "</tr>";
		  $i++;
	}
	?>
	</tbody>
	</table>
	</body>
</html> 