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
                                  <a href="#">
                                      <img src="img/logo_1.png" style="height: 100px;"> 
                                  </a>
                              </div>
                              <div class="nav navbar-nav1">
                                <a href="login.php" class="btn btn1" href="sign_up.html">تسجيل دخول</a>                     
                              </div>
                          </div>
                      </nav>
                </header>

<main>

  

  <div class="py-1">
    <div class="container">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">إنشاء حساب</h1>
       
      </div>
      <form action="signup_check.php" method="post">

      <?php if (isset($_GET['error'])) {?>
        <p class="error"><?php  echo $_GET['error'];?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) {?>
        <p class="success"><?php  echo $_GET['success'];?></p>
        <?php } ?>
        
        <div class="row">
        <div class="col-5">

        <label for="username" class="form-label">أسم المستخدم</label>

        <?php if(isset($_GET['user'])) { ?>
        <input type="text" 
               name="user" 
               class="form-control"
               placeholder="اسم المستخدم"
               value="<?php echo $_GET['user']; ?>"> 
        <?php }else{ ?>
            <input type="text" 
            name="user" 
            class="form-control" 
            placeholder="اسم المستخدم" > 


            <?php } ?>
            </div>
      </div>

      <div class="row">
        <div class="col-5">

        <label for="firstname" class="form-label">الاسم الاول</label>

        <?php if(isset($_GET['firstname'])) { ?>
        <input type="text" 
               name="firstname" 
               class="form-control"
               placeholder="الاسم الاول"
               value="<?php echo $_GET['firstname']; ?>"> 
        <?php }else{ ?>
            <input type="text" 
            name="firstname" 
            class="form-control" 
            placeholder="الاسم الاول" > 


            <?php } ?>
            </div>
      </div>
      

      <div class="row">
        <div class="col-5">

        <label for="lastname" class="form-label">الاسم الاخير</label>

        <?php if(isset($_GET['lastname'])) { ?>
        <input type="text" 
               name="lastname" 
               class="form-control"
               placeholder="الاسم الاخير"
               value="<?php echo $_GET['lastname']; ?>"> 
        <?php }else{ ?>
            <input type="text" 
            name="lastname" 
            class="form-control" 
            placeholder="الاسم الاخير" > 


            <?php } ?>
            </div>
      </div>

      <div class="row">
        <div class="col-5">

        <label for="email" class="form-label">البريد الالكتروني</label>

        <?php if(isset($_GET['email'])) { ?>
        <input type="email" 
               name="email" 
               class="form-control"
               placeholder="البريد الالكتروني"
               value="<?php echo $_GET['email']; ?>"> 
        <?php }else{ ?>
            <input type="text" 
            name="email" 
            class="form-control" 
            placeholder="البريد الالكتروني" > 


            <?php } ?>
            </div>
      </div>

      <div class="row">
        <div class="col-5">

        <label for="password" class="form-label">كلمة المرور</label>

        <?php if(isset($_GET['pass'])) { ?>
        <input type="password" 
               name="pass" 
               class="form-control"
               placeholder="كلمة المرور"
               value="<?php echo $_GET['pass']; ?>"> 
        <?php }else{ ?>
            <input type="password" 
            name="pass" 
            class="form-control" 
            placeholder="كلمة المرور" > 


            <?php } ?>
            </div>
      </div>

      <div class="row">
        <div class="col-5">
            <label for="password2" class="form-label">تأكيد كلمة المرور</label>
            <input type="password" name="re_pass" class="form-control" id="password2" >
        </div>
      </div>
<br>
<div class="row">
        <div class="col-5">
            <label for="role" class="form-label">نوع الحساب :</label>
            <select name="role">
              <option value="company">شركة</option>
              <option value="designer">مصمم</option>
            </select>
        </div>
      </div>
       <div class="row my-4">
        <div class="col-3">
            <button type="submit" name="register" class="w-100 btn btn-primary btn-lg">انشاء حساب</button>
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
