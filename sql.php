<?php
	$conn=mysqli_connect('localhost','root','','office');
	if(mysqli_connect_errno()){
echo "Error";

	} else {
		echo "Connected";
		echo"<br>";
	}
	$query="SELECT * FROm emp";/*write query*/
	$result=mysqli_query($conn,$query);/*execute*/
	$emp=mysqli_fetch_all($result,MYSQLI_ASSOC);/*save output*/
	print_r($emp);
	echo "<br>";
	$query1="INSERT INTO emp(id,name,age,salary) VALUES(4,'deepa',19,10000)";/*write query*/
	$result1=mysqli_query($conn,$query1);/*execute*/
	print_r($emp);

?>
<!DOCTYPE html>
<html>
<head>
	<title>DATABASE</title>
</head>
<body>
	<table border="4">
	<tr>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
	</tr>
	<?php foreach ($emp as $i):?> 
		<tr>
		<td><?php echo $i['name'];?></td>
		<td><?php echo $i['age'];?></td>
		<td><?php echo $i['salary'];?></td>
		</tr>
	<?php endforeach;?>
</tr>
</table>
		

</body>
</html>