<<<<<<< HEAD


<html lang="ar" dir="rtl">
=======
<<<<<<<< HEAD:login1.php


<html lang="ar" dir="rtl">
========
<?php
session_start();
if(isset($_SESSION["user"])) {
    header("Location: dashboard.php");
}

if (isset($_POST["submit"])) {
    $user = $_POST["user"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $con = mysqli_connect("localhost", "root", "", "elani");
    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $res = mysqli_query($con, $sql);
    $rows = mysqli_num_rows($res);
    if ($rows === 1) {
        $_SESSION["user"] = $user;
        header("Location: dashboard.php");

    }
    $error = true;
    mysqli_close($con);
}
?>

 <html lang="ar" dir="rtl">
>>>>>>>> cc5e5c6abf09b324680d7a9ac77dca090f22753d:login.php
>>>>>>> cc5e5c6abf09b324680d7a9ac77dca090f22753d
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>اعلاناتي</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album-rtl/">



    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.rtl.min.css" rel="stylesheet">
<link href="css/headers.css" rel="stylesheet">
 <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        .bg-color {
        background-color: #31909C!important;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


  </head>
  <body>

<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
     <h1>  اعلاناتي </h1>
      </a>



      <div class="col-md-3 text-end">

      </div>
    </header>
  </div>

<main>

  <section class="py-2 text-center container">
    <div class="row py-lg-1">
      <div class="col-lg-6 col-md-8 mx-auto">
      <img id="img1" src="logo.png">
      </div>
    </div>
  </section>

  <div class="py-1">
    <div class="container">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">تسجيل الدخول</h1>

      </div>
      <form method="post">
      <div class="row">
        <div class="col-5">
            <label for="username" class="form-label">أسم المستخدم</label>
            <input type="text" name="user" class="form-control" id="username" >

        </div>
      </div>
      <div class="row">
        <div class="col-5">
            <label for="password" class="form-label">كلمة المرور</label>
            <input type="password" name="pass" class="form-control" id="password" >
        </div>
      </div>


        <br>
          <button type="submit" name="submit" class="btn btn-primary">تسجيل الدخول</button>
<<<<<<< HEAD
          <a href="register.php" style="font-size: 12px;">ليس لديك حساب ( تسجيل حساب مستخدم ) ؟</a>
          <a href="register1.php" style="font-size: 12px;">ليس لديك حساب ( تسجيل حساب مصمم ) ؟</a>

=======
<<<<<<<< HEAD:login1.php
          <a href="register1.php" style="font-size: 12px;">ليس لديك حساب ( تسجيل حساب صممم ) ؟</a>
========
          <a href="register.php" style="font-size: 12px;">ليس لديك حساب ( تسجيل حساب ) ؟</a>
>>>>>>>> cc5e5c6abf09b324680d7a9ac77dca090f22753d:login.php
>>>>>>> cc5e5c6abf09b324680d7a9ac77dca090f22753d


      </form>
          </div>
        </div>


<<<<<<< HEAD
        <?php
session_start();
if(isset($_SESSION["user"])) {
    header("Location: dashboard.php");
=======
<<<<<<<< HEAD:login1.php
        <?php
session_start();
if(isset($_SESSION["user"])) {
    header("Location: dashboard1.php");
>>>>>>> cc5e5c6abf09b324680d7a9ac77dca090f22753d
}

if (isset($_POST["submit"])) {
    $user = $_POST["user"];
<<<<<<< HEAD
    //$email = $_POST["email"];
    $pass = $_POST["pass"];
    $con = mysqli_connect("localhost", "root", "", "elani");

    if (!empty($user) && (!empty($pass))) {
        
        $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
=======
   // $email = $_POST["email"];
    $pass = $_POST["pass"];
   $con = mysqli_connect("localhost", "root", "", "elani");
    if (!empty($user) && (!empty($pass))) {
        
        $sql = "SELECT * FROM accounts WHERE username='$user' AND password='$pass'";
>>>>>>> cc5e5c6abf09b324680d7a9ac77dca090f22753d
        $res = mysqli_query($con, $sql);
        $rows = mysqli_num_rows($res);
        if ($rows === 1) {
            $_SESSION["user"] = $user;
<<<<<<< HEAD
            header("Location: dashboard.php");
        } 
 } else  echo "يجب ادخال اسم المستخدم وكلمة المرور<hr>";

        
        $error = true;
=======
            header("Location: dashboard1.php");
        } 
 } else echo "يجب ادخال اسم المستخدم وكلمة المرور<hr>";

        
        $error = true;
        

>>>>>>> cc5e5c6abf09b324680d7a9ac77dca090f22753d
        mysqli_close($con);
    
}

if(isset($error)){
<<<<<<< HEAD
    echo "اسم المستخدم او كلمة المرور غير صحيحة";
}




?>


=======
  echo "اسم المستخدم او كلمة المرور غير صحيحة";
}
?>
========


>>>>>>>> cc5e5c6abf09b324680d7a9ac77dca090f22753d:login.php

>>>>>>> cc5e5c6abf09b324680d7a9ac77dca090f22753d
</main>

<footer class="text-muted py-3">



  </div>
</footer>

<<<<<<< HEAD


=======
<?php
if(isset($error)){
    echo "فشل تسجيل الدخول";
}


?>

<<<<<<<< HEAD:login1.php




========
>>>>>>>> cc5e5c6abf09b324680d7a9ac77dca090f22753d:login.php
>>>>>>> cc5e5c6abf09b324680d7a9ac77dca090f22753d
  </body>
</html>
