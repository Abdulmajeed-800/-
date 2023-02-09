<?php
session_start();
include "conn.php";

if (isset($_POST['user']) && isset($_POST['firstname']) 
&& isset($_POST['lastname']) && isset($_POST['email']) &&
isset($_POST['pass']) && isset($_POST['re_pass'])
&& isset($_POST['role']) ){

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$uname = validate($_POST['user']);
$fname = validate($_POST['firstname']);
$lname = validate($_POST['lastname']);
$email = validate($_POST['email']);
$pass = validate($_POST['pass']);
$re_pass = validate($_POST['re_pass']);
$role = validate($_POST['role']);

$user_data = 'user=' . $uname. 
'&firstname='. $fname. 
'&lastname='. $lname. 
'&email='. $email. 
'&pass='. $pass. 
'&re_pass='. $re_pass. 
'&role='. $role;
;

echo $user_data ;

if (empty($uname)){
    header("Location: register.php?error=الرجاء ادخال اسم المستخدم&$user_data");
    exit();
}else if(empty($fname)){
    header("Location: register.php?error=الرجاء ادخال الاسم الاول&$user_data");
    exit();
}

else if(empty($lname)){
    header("Location: register.php?error=الرجاء ادخال الاسم الاخير&$user_data");
    exit();
}

else if(empty($email)){
    header("Location: register.php?error=الرجاء ادخال البريد الالكتروني&$user_data");
    exit();
}

else if(empty($pass)){
    header("Location: register.php?error=الرجاء ادخال كلمة المرور&$user_data");
    exit();
}

else if(empty($re_pass)){
    header("Location: register.php?error=الرجاء تاكيد كلمة المرور&$user_data");
    exit();
}

else if(empty($role)){
    header("Location: register.php?error=حدد نوع الحساب&$user_data");
    exit();
}

else if($pass !== $re_pass){
    header("Location: register.php?error=تأكيد كلمة المرور لا يتطابق&$user_data");
    exit();
}

else{
    //تشفير كلمة المرور
    $pass = md5($pass);
    
    $sql = "SELECT * FROM users WHERE username = '$uname' or email = '$email' ";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        header("Location: register.php?error=اسم المستخدم او البريد الالكتروني موجودين بالفعل&$user_data");
        exit();
    }else{
        $sql2 = "INSERT INTO users(username,firstname,lastname,email,password,role) VALUES('$uname', '$fname', '$lname', '$email', '$pass', '$role')";
        $result2 = mysqli_query($conn, $sql2);
        if ($result2){
            header("Location: register.php?success=تم انشاء الحساب");
            exit();
        }else{
            header("Location: register.php?error=حدث خطأ غير معروف&$user_data");
            exit();
        }
    }
}
}else{
    header("Location: register.php");
        exit();
}

?>