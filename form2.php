<?php
    if(isset($_POST['submit'])){

        echo $_POST['name'];
        echo"<br>";
        echo $_POST['age'];
        echo"<br>";

        echo $_POST['hobby'];
        echo"<br>";

        echo $_POST['email'];
        echo"<br>";

        echo $_POST['password'];
        echo"<br>";


    }



?>

<html>
<head>
    <title> form</title>
</head>  
    <body>
    <form action="form2.php" method="POST">
    name
        <input type="text" name="name">
        <br>
        age
        <input type="number" name="age"> <br>
        hobby
        <input type="text" name="hobby"><br>
        email
        <input type="email" name="email"><br>
        pssword
        <input type="password" name="password"><br>
        <input type="submit" name="submit"><br>
        </form>
  </body>
</html
