<?php
session_start();
include "conn.php";

if (isset($_POST['user']) && isset($_POST['pass'])){

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$uname = validate($_POST['user']);
$pass = validate($_POST['pass']);
$idd ;
$role ;
if (empty($uname)){
    header("Location: login.php?error=ادخل اسم المستخدم");
    exit();
}else if(empty($pass)){
    header("Location: login.php?error=ادخل كلمة المرور");
    exit();
}else{
        //تشفير كلمة المرور
    $pass = md5($pass);

    $sql = "SELECT * FROM users WHERE username = '$uname' AND password = '$pass' AND password = '$pass'";
    

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['username'] === $uname && $row['password'] === $pass)
        {
            $role = "SELECT role FROM users WHERE username = '$uname'";
            $idd = "SELECT user_id FROM users WHERE username = '$uname'";
            $_SESSION['username'] = $row['username'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['role'] = $row['role'];
            header("Location: dashboard.php");
            exit();
        }else{
            header("Location: login.php?error=اسم المستخدم او كلمة المرور خاطئة");
            exit();
        }
    }else{
        header("Location: login.php?error=اسم المستخدم او كلمة المرور خاطئة");
            exit();
    }
}
}else{
    header("Location: dashboard.php");
        exit();
}

?>