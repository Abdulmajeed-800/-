<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: login1.php");
}

if(isset($_GET["logout"])){
    session_destroy();
    header("Location: login1.php");
}


$user = $_SESSION["user"];

?>

<?php
require 'conn.php';
if(isset($_POST["submit"])){
    $name = $_POST["text"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    if($_FILES["formFile"]["error"] === 4){
        echo
        "<script> alert('Image Does Not Exist'); </script>";
    }
    else{
        $fileName = $_FILES["formFile"]["name"];
        $fileSize = $_FILES["formFile"]["size"];
        $tmpName = $_FILES["formFile"]["tmp_name"];

        $validImageExtension = ['jpg','jpeg','png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if(!in_array($imageExtension, $validImageExtension)){
            echo
            "<script> alert('Invalid Image Extension'); </script>";
        }
        else if($fileSize > 1000000){
            echo
            "<script> alert('Image Size Is Too Large'); </script>";
        }
        else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, 'images_posts/' .  $newImageName);
            $query = "INSERT INTO posts (content,image,posting_time,date_publication) VALUES('$name', '$newImageName', '$time', '$date')";
            mysqli_query($conn, $query);
            echo
            "<script> 
            alert('Successfully Added'); 
            document.location.href = 'dashboard1.php';
            </script>";
            
        }
    }
}
?>

<!doctype html>
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
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: blue;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: rgb(124, 75, 124);
}   
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
    <ul>
      <li><a class="active" href="#home">الحساب الشخصي</a></li>
      <li><a href="?logout">تسجيل الخروج</a></li>
      
    </ul>
    <?php
if(isset($error)){
    echo "فشل تسجيل الدخول";
}
?>
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <img id="img1" src="img/logo.png"style="
          height: 90px;
      "> 
      </a>

      

      <div class="col-md-3 text-end">
       
      </div>
    </header>
  </div>

<main>

  

  <div class="py-1">
    <div class="container">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">إضافة</h1>
       
      </div>
      <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
      <div class="row">
        <div class="col-5">
            <label for="formFile" class="form-label">أختر صورة</label>
            <input class="form-control" type="file" name="formFile" id="formFile" accept=".jpg, .jpeg, .png" value="">
    
        </div>
      </div>
      <div class="row">
        <div class="col-5">
            <label for="text" class="form-label"> النص</label>
            <input type="text" class="form-control" name="text" id="text" >
    
        </div>
      </div>
      <div class="row">
        <div class="col-5">
            <label for="date" class="form-label">التاريخ</label>
            <input type="date" class="form-control" name="date" id="date" >
        </div>
      </div>
      <div class="row">
        <div class="col-5">
            <label for="time" class="form-label">الوقت</label>
            <input type="time" class="form-control" name="time" id="time" >
        </div>
      </div>
       
        <br>
          <button type="submit" name="submit" class="btn btn-primary">إضافة</button>
       
      
       
      </form>
          </div>
        </div>
        
      
    
  

</main>

<footer class="text-muted py-3">
  
    
    
  </div>
</footer>


      
  </body>
</html>
