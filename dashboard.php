<?php require 'conn.php'; ?>

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
        
          <img id="img1" src="img/logo.png"style="
          height: 90px;
      "> 
      </a>

      

      <div class="col-md-3 text-end">
        
      </div>
    </header>
  </div>

<main>

  
     

  <div class="album py-5 bg-light">
    <div class="container">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">اعلانات</h1>
        
      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php
            
            $rows = mysqli_query($conn, "SELECT * FROM posts ORDER BY ID DESC");
            ?>
       <?php foreach($rows as $row) : ?>

      <div class="col">
          
      <img src="images_posts/<?php echo $row['Image']; ?>" width="350" height="350"  title="<?php echo $row['Image']; ?>">

            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          
        </div>

        <?php endforeach;?>
        
     
        
        
        </div>
      </div>
    </div>
  </div>
</div>



</main>

<footer class="text-muted py-3">
  <div class="container">
    <p class="float-end mb-1">
      <a href="dashboard.php">عد إلى الأعلى</a>
    </p>
    
    
  </div>
</footer>


    <script src="js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>



</body>
</html>