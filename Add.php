<?php require 'conn.php'; ?>


<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location: login.php");
}

if(isset($_GET["logout"])){
    session_destroy();
    header("Location: login.php");
}

$user = $_SESSION["username"];
$idd = $_SESSION["user_id"];
?>

<?php

if(isset($_POST["submit"])){

    $title = $_POST["title"];
    $text = $_POST["text"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $comp = $_POST["comp"];
    
   
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
            $query = ("INSERT INTO posts (designer_id,company_username,title,description,image,publication_date,publication_time) VALUES('$idd', '$comp', '$title', '$text', '$newImageName', '$date', '$time')");
            mysqli_query($conn, $query);
            echo
            "<script> 
            alert('Successfully Added'); 
            document.location.href = 'dashboard.php';
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
    <title>اعلاناتي</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album-rtl/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.rtl.min.css" rel="stylesheet">
<link href="css/headers.css" rel="stylesheet">
<link href="css/s.css" rel="stylesheet">
		<link href="modal/fontawesome/webfonts/fontawesome-all.min.css" rel="stylesheet" media="all">

		<!-- Bootstrap Style Sheet 
		<link href="modal/css/bootstrap.min.css" rel="stylesheet" media="all">-->

		<!-- Plugin Style Sheet -->
		<link href="modal/css/bs4_modal.css" rel="stylesheet" media="all">
 
  </head>
  <body class="d-flex flex-column min-vh-100">
    <!-- test_id-->

   

                <header>
                      <nav class="navbar">
                          <div class="container-fluid">
                              <div>
                                 
                                      <img src="img/logo_1.png" style="height: 100px;"> 
                                  
                              </div>
                              <div class="nav navbar-nav1">
                  <a href="dashboard.php" class="btn active">الصفحة الرئيسية</a>
                  <a href="login.php" class="btn btn1">تسجيل الخروج</a>                 
              </div>
                          </div>
                      </nav>
                </header>

<main>

  

  <div class="py-1">
    <div class="container">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">إضافة</h1>
       
      </div>
      <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
      <div class="row my-4">
        <div class="col-5">
            <label for="formFile" class="form-label">أختر صورة</label>
            <input  class="form-control" type="file" id="formFile " name="formFile" accept=".jpg, .jpeg, .png">
    
        </div>
      </div> 
      <div class="row my-4">
        <div class="col-5">
            <label for="text" class="form-label"> عنوان الصورة</label>
            <input name ="title" type="text" class="form-control" id="title" >
    
        </div>
      </div>
       <div class="row my-4">
        <div class="col-5">
            <label for="text" class="form-label"> النص</label>
            <input name ="text" type="text" class="form-control" id="text" >
    
        </div>
      </div>
       <div class="row my-4">
        <div class="col-5">
            <label for="date" class="form-label">التاريخ</label>
            <input name ="date" type="date" class="form-control" id="date" >
        </div>
      </div>
       <div class="row my-4">
        <div class="col-5">
            <label for="time" class="form-label">الوقت</label>
            <input name ="time" type="time" class="form-control" id="time" >
        </div>
      </div>

      <div class="row">
        <div class="col-5">
            <label for="role" class="form-label">حدد اسم الشركة :</label>
            <select name="comp" id="comp">
              <?php
              $select = $conn -> query("SELECT username FROM users WHERE role = 'company'");
              while($row = $select -> fetch_assoc()){
              ?>
              <option name="comp"><?php echo $row['username']?></option>
              <?php }?>
            </select>
        </div>
      </div>
       
                            <div class="row my-4">
        <div class="col-3">
            <button type="submit" name="submit" id="submit" class="w-100 btn btn-primary btn-lg"> إضافة</button>
        </div>
      </div>
      
       
      </form>
          </div>
        </div>
        
      
        
    
  

</main>
<footer class="mt-auto">
 <nav class="navbar">
          <div class="container-fluid">
              <div>
                 <text x="50%" y="50%" fill="#eceeef" dy=".3em" style="font-size: 18px;font-weight: 600;">  كل الحقوق محفوظة لموقع اعلاناتي  </text>
              </div>
              <div class="nav navbar-nav1">
                    <img src="img/logo_1.png" style="height: 100px;">       
              </div>
          </div>
      </nav>
</footer>







      
  </body>
</html>
