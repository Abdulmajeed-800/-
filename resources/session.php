/*** session.php ***/
<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['sign_in'];
   
   $ses_sql = mysqli_query($conn,"select username from login 
   where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['sign_in'])){
      header("location:sign_in.php");
      die();
   }
?>