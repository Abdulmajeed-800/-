<?php
session_start();
if(isset($_SESSION["user"])) {
    header("Location: dashboard.php");
}

if(isset($_POST["register"])){
    $user = $_POST["user"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $con = mysqli_connect("localhost", "root", "", "elani");
    $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')";
    mysqli_query($con, $sql);
    mysqli_close($con);
    header("Location: login.php");}


?>
<html lang="ar" dir="rtl">
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
        <h1 class="h2">إنشاء حساب</h1>

      </div>
      <form action="" method="post">
      <div class="row">
        <div class="col-5">
            <label for="username" class="form-label">أسم المستخدم</label>
            <input type="text" name="user" class="form-control" id="username" >

        </div>
      </div>
      <div class="row">
        <div class="col-5">
            <label for="email" class="form-label">البريد الإلكتروني</label>
            <input type="email" name="email" class="form-control" id="email" >

        </div>
      </div>
      <div class="row">
        <div class="col-5">
            <label for="password" class="form-label">كلمة المرور  </label>
            <input type="password" name="pass" class="form-control" id="password" >
        </div>
      </div>
      <div class="row">
        <div class="col-5">
            <label for="password2" class="form-label">تأكيد كلمة المرور</label>
            <input type="password" name="pass" class="form-control" id="password2" >
        </div>
      </div>

        <br>
          <button type="submit" name="register" class="btn btn-primary">إنشاء</button>
          <a href="login.php" style="font-size: 12px;">هل لديك حساب ( تسجيل الدخول ) ؟</a>

      </form>
          </div>
        </div>





</main>

<footer class="text-muted py-3">



  </div>
</footer>



  </body>
</html>

