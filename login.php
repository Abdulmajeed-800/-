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
<link href="css/style.css" rel="stylesheet">
		<link href="modal/fontawesome/webfonts/fontawesome-all.min.css" rel="stylesheet" media="all">

		<!-- Bootstrap Style Sheet 
		<link href="modal/css/bootstrap.min.css" rel="stylesheet" media="all">-->

		<!-- Plugin Style Sheet -->
		<link href="modal/css/bs4_modal.css" rel="stylesheet" media="all">
 
  </head>
  <body class="d-flex flex-column min-vh-100">

                <header>
                      <nav class="navbar">
                          <div class="container-fluid">
                              <div>
                                  
                                      <img src="img/logo_1.png" style="height: 100px;"> 
                                  
                              </div>
                              <div class="nav navbar-nav1">
                                <a href="register.php" class="btn btn1" href="sign_up.html">انشاء حساب</a>                     
                              </div>
                          </div>
                      </nav>
                </header>


                <main>
                    <div class="py-1">
                        <div class="container">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">تسجيل الدخول</h1>
                           
                          </div>
                          <form action="login_check.php" method="post">

                          <?php if (isset($_GET['error'])) {?>

<p class="error"><?php echo $_GET['error'];?></p>

<?php } ?>

                         <div class="row my-4">
                            <div class="col-5">
                                <label for="username" class="form-label">أسم المستخدم</label>
                                <input type="text" name="user" class="form-control" id="username" >
                        
                            </div>
                          </div>
                          <div class="row my-4">
                            <div class="col-5">
                           
                                <label for="password" class="form-label">كلمة المرور</label>
                                <input type="password" name="pass" class="form-control" id="password" >
                            </div>
                          </div>
                          
                     
                          
                           <div class="row">
        <div class="col-3">
            <button type="submit" name="submit" class="w-100 btn btn-primary btn-lg">تسجيل الدخول</button>
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
