<?php
$conn=mysqli_connect('localhost','root','','school');
	if(mysqli_connect_errno()){
echo "Error";

	} else {
		echo "Connected";
		echo"<br>";
	}
$id=filter_input(INPUT_POST,'id');
$name=filter_input(INPUT_POST,'name');
$age=filter_input(INPUT_POST,'age');
$add=filter_input(INPUT_POST,'address');
if(!empty($id)){
if(!empty($name)){
if(!empty($age)){
if(!empty($add)){
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="school";
$conn1=new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_errno().')'
		.mysqli_connect_error());


	} else {
		/*echo "Connected";
		echo"<br>";*/
		$sql = "INSERT INTO stud(id,name,age,address) VALUES($id,'$name',$age,'$add')";
		if($conn->query($sql)){
			echo "New record is inserted";

		} else{
			echo "Error:".$sql."<br>".$conn->error;
		}
		$conn->close();
	}

}else{
	echo "address should not be empty";
	die();
}
} else{
	echo "age should not be empty";
	die();
}
}
else{
	echo "name should not be empty";
	die();
}
}
else{
	echo "id should not be empty";
	die();
}



	
	
	

	?>

<!DOCTYPE html>
<html>
<head>
	<title>DATABASE FORM</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<form method="post" action="dbform.php">
		<center><label><b>APPLICATION FORM</b></label></center>
		<div class="form-group col-md-3">
			<label>ID</label>
			<input type="number" name="id" class="form-control">
		</div>
		<div class="form-group col-md-3">
			<label>NAME</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group col-md-3">
			<label>AGE</label>
			<input type="number" name="age" class="form-control">
		</div>

		<div class="form-group col-md-3">
			<label>ADDRESS</label>
			<input type="text" name="address" class="form-control">
		</div>
		<div><center>
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</div>
	</center>
	</form>

</body>
</html>