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
$role = $_SESSION["role"];

?>
  <?php 
  
  if ($_SESSION['role'] == 'company'){
    ////////////////////////////// For company////////////////////////////////
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
<link href="css/comment.css" rel="stylesheet">
		<link href="modal/fontawesome/webfonts/fontawesome-all.min.css" rel="stylesheet" media="all">

		<!-- Bootstrap Style Sheet 
		<link href="modal/css/bootstrap.min.css" rel="stylesheet" media="all">-->

		<!-- Plugin Style Sheet -->
		<link href="modal/css/bs4_modal.css" rel="stylesheet" media="all">
 
  </head>
    <body class="d-flex flex-column min-vh-100">
      
      <!-- test_id-->



  <!--  <ul>
      <li><a class="active" href="#home">الحساب الشخصي</a></li>
      <li><a href="#logout">تسجيل الخروج</a></li>
      
    </ul>-->

    <header>
      <nav class="navbar">
          <div class="container-fluid">
              <div>
                  
                      <img src="img/logo_1.png" style="height: 100px;">
                  
              </div>
              <div class="nav navbar-nav1">
                  <a href="#" class="btn active">الحساب الشخصي</a>
                  <a href="login.php" class="btn btn1">تسجيل الخروج</a>                 
              </div>
          </div>
      </nav>
  </header>



<main>
<form action="dashboard.php" method="$_POST">
<label for="role" class="form-label">حدد اسم الشركة :</label>
            <select name="comp" id="comp">
              <?php
              
              $select = $conn -> query("SELECT username FROM users WHERE role = 'designer'");
              while($row = $select -> fetch_assoc()){
              ?>
              <option name="comp"><?php echo $row['username']?></option>
              <?php }?>
            </select>
            <button type="submit" name="submit">submit</button>
     

  <div class="album py-5 bg-light">
    <div class="container">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">اعلانات</h1>
        <!---->
       
        
      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
     
      <?php
            
            $rows = mysqli_query($conn, "SELECT * FROM posts");
            
            ?>
            
       <?php foreach($rows as $row) : ?>
      
        <div class="col">
          <div class="card shadow-sm">
            <div class="card-header">
              <div class="card-title">
                <h2>عنوان الصورة</h2>
              </div> 
            </div> 
            <div class="card-body">
                <a data-modal-id="bs4_sngl_cmrce" href="#" class="bs4_modal_trigger" data-toggle="modal">
              <img class="card-img-top"  
              src="images_posts/<?php echo $row['image']; ?>" width="380" height="380"  title="<?php echo $row['image']; ?>"/>
              </a>
            </div>
            <div class="card-footer text-muted">
              <div class="symbol symbol-45px me-5">
                <img src="Img/OIP.jpg" alt=""> <?php echo $user ?>
            </div>
            </div>
          </div>
        </div>
        </form>
        <?php endforeach;
        ?>


      
      </div>
    </div>
  </div>
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


           
	<!-- Trigger Part End -->
      	<div id="bs4_sngl_cmrce" class="modal fade bs4_modal bs4_blue bs4_bg_white bs4_bd_black bs4_bd_semi_trnsp bs4_none_radius bs4_shadow_none bs4_center bs4_animate bs4FadeInDown bs4_duration_md bs4_easeOutQuint bs4_size_sngl_cmrce" role="dialog" data-modal-backdrop="true" data-show-on="click" data-modal-delay="false" data-modal-duration="false">

		<!-- Modal Dialog-->
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">

				<!-- Close Button -->
				<a href="#" data-dismiss="modal" class="bs4_btn_x_out_shtr bs4_sngl_cmrce_close">إغلاق</a>
				
                <div class="row">

					<!-- Image Box -->
					<div class="col-12 col-md-5">
						<div class="bs4_sngl_cmrce_img">
							<img   src="Img/12.png" alt="bs4_single_commerce_01">
						</div>
					</div>
					<!-- /Image Box -->

					<!-- Description Box -->
					<div class="col-12 col-md-7">
						
						<!-- Content -->
						<div class="bs4_sngl_cmrce_txt">
							<!-- Name -->
							  <p class="lead text-muted">
                           
							 <h3>عنوان الصورة</h3>
							<!-- Rating Stars -->
							</p>
							<!-- Rating Stars -->
							
							<!-- Detail -->
							<p> وصف قصير حول الألبوم أدناه (محتوياته ، ومنشؤه ، وما إلى ذلك). اجعله قصير
                            ولطيف، ولكن ليست قصير جدًا حتى لا يتخطى الناس هذا الألبوم تمامًا.</p>
							<!-- Form -->
                            <div id="reader">
                                    <ol>
                                      <li> 
                                      <div class="comment_box"> <a href="#"> <img src="Img/OIP.jpg" alt="avatar"> </a>
                                          <div class="inside_comment">
                                            <div class="comment-meta">
                                              <div class="commentsuser">Jone</div>
                                              <div class="comment_date" name="namei " >21:54 الأربعاء 01 فبراير 2023 - 10 رجب 1444 هـ</div>
                                            </div>
                                          </div>
                                          <div class="comment-body">
                                            <p>
                                            شكراً 1
                                            </p>
                                          </div>
                                          
                                        </div>
                                       </li>
                                          <li> 
                                        <div class="comment_box"> <a href="#"> <img src="Img/OIP.jpg" alt="avatar"> </a>
                                          <div class="inside_comment">
                                            <div class="comment-meta">
                                              <div class="commentsuser">Ali</div>
                                              <div class="comment_date">22:54 الأربعاء 01 فبراير 2023 - 10 رجب 1444 هـ</div>
                                            </div>
                                          </div>
                                          <div class="comment-body">
                                           <p>
                                        2    شكراً 1
                                            </p>
                                           </div>
                                          
                                        </div>
                                      </li>                                    
                                    </ol>
                            </div>
                            
						  <div id="respond">
            <h4>إضافة تعليق</h4>     
<hr>            
            <form id="commentForm" method="post" class="cmxform">
            
              <div class="commentfields">
                <label>تعليق </label>
                <textarea id="ccomment" class="comment-textarea required" name="comment"></textarea>
              </div>
              <div class="commentfields">
                <input class="commentbtn" type="submit" name="submitt" value="إضافة">
              </div>
            </form>
            <?php if(isset($_POST['submitt'])) {
              $unamee = validate($_POST['namei']);
              
              $email = validate($_POST['email']);
              $pass = validate($_POST['pass']);
              $re_pass = validate($_POST['re_pass']);
            }  ?>
          </div>
                        
                        </div> 
                       
					
                    
                    </div>
				</div>
			</div> <!-- /Modal content-->
		</div> <!-- /Modal Dialog-->
	</div>

<script src="modal/js/jquery.js"></script>

	<!-- Bootstrap JS -->
	<script src="modal/js/bootstrap.min.js"></script>
	
	<!-- Touch Swipe JS File Version - 1.6.15 -->
	<script src="modal/js/jquery.touchSwipe.min.js"></script>

	<!-- Plugin JS File -->
	<script src="modal/js/bs4_modal.min.js"></script>

      
  </body>
</html>
<?php }elseif($_SESSION['role'] == 'designer'){
////////////////////////////// For designer////////////////////////////////
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
<link href="css/comment.css" rel="stylesheet">
		<link href="modal/fontawesome/webfonts/fontawesome-all.min.css" rel="stylesheet" media="all">

		<!-- Bootstrap Style Sheet 
		<link href="modal/css/bootstrap.min.css" rel="stylesheet" media="all">-->

		<!-- Plugin Style Sheet -->
		<link href="modal/css/bs4_modal.css" rel="stylesheet" media="all">
 
  </head>
    <body class="d-flex flex-column min-vh-100">
      
      <!-- test_id-->




  <!--  <ul>
      <li><a class="active" href="#home">الحساب الشخصي</a></li>
      <li><a href="#logout">تسجيل الخروج</a></li>
      
    </ul>-->

    <header>
      <nav class="navbar">
          <div class="container-fluid">
              <div>
                  <a href="#">
                      <img src="img/logo_1.png" style="height: 100px;"> 
                  </a>
              </div>
              <div class="nav navbar-nav1">
                  <a href="#" class="btn active">الحساب الشخصي</a>
                  <a href="login.php" class="btn btn1">تسجيل الخروج</a>                 
              </div>
          </div>
      </nav>
  </header>



<main>
<label for="role" class="form-label">حدد اسم الشركة :</label>
            <select name="comp" id="comp">
              <?php
              
              $select = $conn -> query("SELECT username FROM users WHERE role = 'company'");
              while($row = $select -> fetch_assoc()){
              ?>
              <option name="comp"><?php echo $row['username']?></option>
              <?php }?>
            </select>
  
     

  <div class="album py-5 bg-light">
    <div class="container">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">اعلانات</h1>
        <!---->
        <button  type="submit" class="btn btn-primary"  onclick="document.location='Add.php'">+</button>
        
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
         <?php
            
            $rows = mysqli_query($conn, "SELECT * FROM posts");
            
            ?>
            
       <?php foreach($rows as $row) : ?>
      
        <div class="col">
          <div class="card shadow-sm">
            <div class="card-header">
              <div class="card-title">
                <h2>عنوان الصورة</h2>
              </div> 
            </div> 
            <div class="card-body">
                <a data-modal-id="bs4_sngl_cmrce" href="#" class="bs4_modal_trigger" data-toggle="modal">
              <img class="card-img-top"  
              src="images_posts/<?php echo $row['image']; ?>" width="380" height="380"  title="<?php echo $row['image']; ?>"/>
              </a>
            </div>
            <div class="card-footer text-muted">
              <div class="symbol symbol-45px me-5">
                <img src="Img/OIP.jpg" alt=""> <?php echo $user ?>
            </div>
            </div>
          </div>
        </div>
        </form>
        <?php endforeach;
        ?>



      
      
      </div>
    </div>
  </div>
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


           
	<!-- Trigger Part End -->
      	<div id="bs4_sngl_cmrce" class="modal fade bs4_modal bs4_blue bs4_bg_white bs4_bd_black bs4_bd_semi_trnsp bs4_none_radius bs4_shadow_none bs4_center bs4_animate bs4FadeInDown bs4_duration_md bs4_easeOutQuint bs4_size_sngl_cmrce" role="dialog" data-modal-backdrop="true" data-show-on="click" data-modal-delay="false" data-modal-duration="false">

		<!-- Modal Dialog-->
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">

				<!-- Close Button -->
				<a href="#" data-dismiss="modal" class="bs4_btn_x_out_shtr bs4_sngl_cmrce_close">إغلاق</a>
				
                <div class="row">

					<!-- Image Box -->
					<div class="col-12 col-md-5">
						<div class="bs4_sngl_cmrce_img">
							<img   src="Img/12.png" alt="bs4_single_commerce_01">
						</div>
					</div>
					<!-- /Image Box -->

					<!-- Description Box -->
					<div class="col-12 col-md-7">
						
						<!-- Content -->
						<div class="bs4_sngl_cmrce_txt">
							<!-- Name -->
							  <p class="lead text-muted">
                           
							 <h3>عنوان الصورة</h3>
							<!-- Rating Stars -->
							</p>
							<!-- Rating Stars -->
							
							<!-- Detail -->
							<p> وصف قصير حول الألبوم أدناه (محتوياته ، ومنشؤه ، وما إلى ذلك). اجعله قصير
                            ولطيف، ولكن ليست قصير جدًا حتى لا يتخطى الناس هذا الألبوم تمامًا.</p>
							<!-- Form -->
                            <div id="reader">
                                    <ol>
                                      <li> 
                                      <div class="comment_box"> <a href="#"> <img src="Img/OIP.jpg" alt="avatar"> </a>
                                          <div class="inside_comment">
                                            <div class="comment-meta">
                                              <div class="commentsuser">Jone</div>
                                              <div class="comment_date">21:54 الأربعاء 01 فبراير 2023 - 10 رجب 1444 هـ</div>
                                            </div>
                                          </div>
                                          <div class="comment-body">
                                            <p>
                                            شكراً 1
                                            </p>
                                          </div>
                                          
                                        </div>
                                       </li>
                                          <li> 
                                        <div class="comment_box"> <a href="#"> <img src="Img/OIP.jpg" alt="avatar"> </a>
                                          <div class="inside_comment">
                                            <div class="comment-meta">
                                              <div class="commentsuser">Ali</div>
                                              <div class="comment_date">22:54 الأربعاء 01 فبراير 2023 - 10 رجب 1444 هـ</div>
                                            </div>
                                          </div>
                                          <div class="comment-body">
                                           <p>
                                        2    شكراً 1
                                            </p>
                                           </div>
                                          
                                        </div>
                                      </li>                                    
                                    </ol>
                            </div>
                            
						  <div id="respond">
            <h4>إضافة تعليق</h4>     
<hr>            
            <form id="commentForm" method="post" class="cmxform">
            
              <div class="commentfields">
                <label>تعليق </label>
                <textarea id="ccomment" class="comment-textarea required" name="comment"></textarea>
              </div>
              <div class="commentfields">
                <input class="commentbtn" type="submit" value="إضافة">
              </div>
            </form>
          </div>
                        
                        </div> 
                       
					
                    
                    </div>
				</div>
			</div> <!-- /Modal content-->
		</div> <!-- /Modal Dialog-->
	</div>

<script src="modal/js/jquery.js"></script>

	<!-- Bootstrap JS -->
	<script src="modal/js/bootstrap.min.js"></script>
	
	<!-- Touch Swipe JS File Version - 1.6.15 -->
	<script src="modal/js/jquery.touchSwipe.min.js"></script>

	<!-- Plugin JS File -->
	<script src="modal/js/bs4_modal.min.js"></script>

      
  </body>
</html>

<?php }?>