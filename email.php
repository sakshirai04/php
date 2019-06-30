<?php
$msg1='';
$msgclass='';
if(filter_has_var(INPUT_POST, 'send')){
	$username = htmlspecialchars($_POST['name']);
	$phno = htmlspecialchars($_POST['phone-no']);
	$mail = htmlspecialchars($_POST['email']);
	$add = htmlspecialchars($_POST['address']);
	$msg = htmlspecialchars($_POST['message']);
	if(!empty($mail) && !empty($username) && !empty($message) && !empty($phno) && !empty($add)){
		if(filter_var($mail,FILTER_VALIDATE_EMAIL)===false){
			echo "please use valid email";
		} else{
			$tosend='sakshirai0401@gmail.com';
			$subject='Contact request form'.$username;
			$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$username.'</p>
					<h4>Email</h4><p>'.$mail.'</p>
					<h4>Message</h4><p>'.$msg.'</p>
					<h4>Address</h4><p>'.$add.'</p>
					<h4>Phone</h4><p>'.$phno.'</p>
				';
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
	
				$headers .= "From: " .$username. "<".$mail.">". "\r\n";
				if(mail($toEmail, $subject, $body, $headers)){
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				}
				else{
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}
		}
	} else{
		$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
	}
}
?>
<?php
	$username="";
	$phno="";
	$mail="";
	$add="";
	$msg="";
	if (isset($_POST['send'])) {
		$username=$_POST['name'];
		$phno= $_POST['phone-no'];
		$mail= $_POST['email'];
		$add= $_POST['address'];
		$msg= $_POST['message'];

	}
	else(isset($_POST['clear']))
	?>
<style>
img {
  border-radius: 50%;
}
</style>
<html>
<head>
	
    <title>form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>  
<body style="background-color: red">
	<script type="text/javascript">
		function display() {
			alert("Do you want to clear all data.?");

			
		}
		function reset()
		{
			document.getElemaentByID("name").innerHTML="";
				document.getElemaentByID("phone-no").innerHTML="";
					document.getElemaentByID("email").innerHTML="";
						document.getElemaentByID("address").innerHTML="";
							document.getElemaentByID("message").innerHTML="";
		}
	</script>
	<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">    
          <a class="navbar-brand" href="index.php">Welcome</a>
        </div>
      </div>
    </nav>
	<div class="container mt-5" col-md-12>
		<?php if($msg1 != ''): ?>
    		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg1; ?></div>
    	<?php endif; ?>
	<div class="row">
		

	<div style="background-color: grey; height: 500px; width: 500px;"  class="container" >
		
		
			<div class="column">
				<div class="content">
					<center>
					<img src="img_avatar.jpg" alt="Avatar" width="150px" height="150px">
				</center>
				</div>
			</div>	
		 <div style="text-align: center;">
		 	<br><br><br>
				<label><h4>NAME:SAKSHI</h4></label>
		</div>
		<div style="text-align: center;">
			<label><h4>PHONE:9869770177</h4></label>
		</div>
		<div style="text-align: center;">
			<label><h4>EMAIL:sakshirai@gmail.com</h4></label>
		</div>
	</div>
<div style="background-color: yellow; height: 500px; width: 600px;" class="container"> 
		
		<label><b><span>CONTACT INFO</span></b></label>
	
		
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="form-group " style="text-align: center;">
				<label><b>Name</b></label>
				<input  type="text" name="name" class="form-control"value="<?php echo isset($_POST['name']) ? $username : ''; ?>">
			</div>
		<div class="form-group " style="text-align: center;">
			<label><b>Phone-no</b></label>
			<input  type="number" name="phone-no" class="form-control" value="<?php echo isset($_POST['name']) ? $phno : ''; ?>">
		</div>
		<div class="form-group" style="text-align: center;">
			<label><b>Email</b></label>
			<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['name']) ? $mail : ''; ?>">
		</div>
		<div class="form-group" style="text-align: center;">
			<label><b>Address</b></label>
			<input type="text" name="address" class="form-control" value="<?php echo isset($_POST['name']) ? $add : ''; ?>">
		</div>
		<div class="form-group" style="text-align: center;">
			<label><b>Message</b></label>
			<input type="text" name="message" class="form-control" <?php echo isset($_POST['name']) ? $msg : ''; ?>">
		</div>
		<div class=" form-row container" >
		<div class="col-md-6">
			<button onclick="submit() "type="send" name="send" class="btn btn-primary">Send</button>
		</div>
		<div class="col-md-6" >
			<button onclick="reset();display()" type="clear" name="clear" class="btn btn-primary">Clear</button>
		</div>
	</div>

	</form>
</div>
</div>
</div>

</body>
</html>
<?php
	echo "<center>";
	echo $username;
	echo "<br>";
	
	echo $phno;
	echo "<br>";
	
	echo $mail;
	echo "<br>";
	echo $add;
	echo "<br>";
	echo $msg;
	echo "<br>";
	echo"</center>";
	?>
