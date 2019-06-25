<?php
	if(isset($_POST['submit'])){
		echo $_POST['name'];
		echo"<br>";
		echo $_POST['roll-no'];
		echo"<br>";
		echo $_POST['address'];
		echo"<br>";		
	}
	  date_default_timezone_set('Asia/Kolkata');
	echo date('h:i:s:a');
	echo"<br>";
	echo date('d-m-y');
	echo"<br>";
	echo date('l');
	echo"<br>";
	 $timestamp=mktime(7,30,60,5,6,2018);
	 echo $timestamp;
	 echo"<br>";
	  echo date('d/m/y h:i:s', $timestamp);
	  echo"<br>";
	   $time= strtotime('tomorrow');
	   echo $time;
	   echo"<br>";
	   echo date('d/m/y h:i:s' ,$time);
	   echo"<br>";
	   $time1= strtotime('+2 months');
	   echo $time1;
	   echo"<br>";
	   echo date('d/m/y h:i:s' ,$time1);
	
		if(isset($_POST['submit1'])){
		echo $_POST['name1'];
		echo"<br>";
		echo $_POST['roll-no-1'];
		echo"<br>";
		echo $_POST['address1'];
		echo"<br>";		
	}

	?>









<html>
<head>
    <title>form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>  
<body>
	<div class="form-row">
		<div class="col-6"> 
	<form action="bt.php" method="post">
			<div class="form-group ">
			<label>name</label>
			<input  type="text" name="name" class="form-control">
		</div>
		<div class="form-group ">
			<label>roll no</label>
			<input  type="number" name="roll-no" class="form-control">
		</div>
		<div class="form-group">
			<label>address</label>
			<input type="text" name="address" class="form-control">
		</div>
		<div>
			<button type="submit" name="submit" class="btn btn-primary">submit</button>
		</div>
	</form>
	</div>
	<div class="col-6">
	<form action="bt.php" method="post">
			<div class="form-group ">
			<label>name1</label>
			<input  type="text" name="name1" class="form-control">
		</div>
		<div class="form-group ">
			<label>roll no</label>
			<input type="number" name="roll-no-1" class="form-control">
		</div>
		<div class="form-group ">
			<label>address</label>
			<input type="text" name="address1" class="form-control">
		</div>
		<div>
			<button type="submit1" name="submit1" class="btn btn-primary">submit</button>
		</div>
	</form>
</div>
</div>
</body>
