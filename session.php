<?php
session_start();
$_SESSION['user']="sakshi";
unset($_SESSION);
session_destroy();

?>