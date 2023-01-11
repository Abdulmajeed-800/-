<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: login.php");
}

if(isset($_GET["logout"])){
    session_destroy();
    header("Location: login.php");
}


$user = $_SESSION["user"];

?>

<!DOCTYPE html>
<html>
<head>   
<body>

<h1>welcome to alnatye <?php echo $user; ?></h1>
<a href="?logout"> تسجيل الخروج </a>



</body>
</html>