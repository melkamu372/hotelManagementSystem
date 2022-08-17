
<?php
include_once "db.php";
 ?>
<!DOCTYPE >
<html>
<head>
<title>Sarem International Hotel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="csshome/style.css" type="text/css" media="all" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="jshome/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jshome/jquery.jcarousel.js"></script>
<script type="text/javascript" src="jshome/cufon-yui.js"></script>
<script type="text/javascript" src="jshome/MyriadPro.font.js"></script>
<script type="text/javascript" src="jshome/ArialBold.font.js"></script>
<script type="text/javascript" src="jshome/jquery-func.js"></script>
</head>
<body>
<div id="header">
  <div class="shell">
    <br>
    <label style="color:rgb(47, 156, 26);font-size:30; margin-top:0px;">Sarem International Hotel </label>
    <a style="float:right;padding-top:-100px; color:#3246a8;font-size:20; margin-right:0px;" href="login.php">Sign In</a>
    <a style="float:right;padding-top:-100px; color:#3246a8;font-size:20; margin-right:30px;" href="home.php?booking">Book</a> &nbsp; 
    <a style="float:right;padding-top:-100px; color:#3246a8;font-size:20; margin-right:30px;" href="home.php">Home</a>  
  
  </div>
</div>
<?php
if (isset($_GET['booking'])){
  include_once "custom_booking.php";
}
else{
  include_once "body.php";
}
?>
<div id="main">
  <div class="shell">
    <div class="box">
      <h2>Welcome!</h2>
      <div class="entry">
        <div class="big-image"><img src="csshome/images/Sarem.PNG" width="220px" alt="" /></div>
        <p><strong>Sarem International Hotel offers adipiscing elit sed odio et ante. </strong></p>
        <p>Sarem International Hotel, consectetuer adipiscing elit. Proin sed odio et ante <a href="#">adipiscing</a> lobortis. Quisque <a href="#">eleifend</a> arcu, a dictum varius, risus neque.</p>
      </div>
      <div class="buttons"> <a href="#" class="button"><span>Read More</span></a> </div>
    </div>
    <div class="box">
      <h2>Latest News</h2>
      <div class="entry">
        <div class="news">
          <ul>
            <li>
              <div class="post-image"> <a href="#"><img src="css/images/news-image-1.jpg" alt="" /></a> </div>
              <div class="post-data">
                <h5><a href="#">September 11th, 2014</a></h5>
                <p>Nam scelerisque mi ut leo eleifend imperdiet. Donec at molestie diam. Etiam quam nisi, elementum sed commodo, posuere <a href="#">&hellip;</a></p>
              </div>
              <div class="cl">&nbsp;</div>
            </li>
            <li class="last">
              <div class="post-image"> <a href="#"><img src="css/images/news-image-2.jpg" alt="" /></a> </div>
              <div class="post-data">
                <h5><a href="#">September 10th, 2014</a></h5>
                <p>Nam scelerisque mi ut leo eleifend imperdiet. Donec at molestie diam. Etiam quam nisi, elementum sed commodo, posuere <a href="#">&hellip;</a></p>
              </div>
              <div class="cl">&nbsp;</div>
            </li>
          </ul>
        </div>
      </div>
      <div class="buttons"> <a href="#" class="button"><span>Read More</span></a> </div>
    </div>
    <div class="box last-box">
      <h2>Hotel Services</h2>
      <div class="entry bullet-list">
        <ul>
          <li><a href="#"> Free private parking is available </a></li>
          <li><a href="#">Sarem International Hotel</a></li>
          <li><a href="#">Food Deliver  </a></li>
          <li><a href="#">Rooms are equipped with a flat-screen TV </a></li>
          <li><a href="#">free shuttle service, a 24-hour front desk,</a></li>
          <li><a href="#">Free wifi services</a></li>
          <li><a href="#">Parking on room</a></li>
          <li><a href="#">shared lounge and gift shop at the property</a></li>
        </ul>
      </div>
      <div class="buttons"> <a href="#" class="button"><span>Read More</span></a> </div>
    </div>
    <div class="cl">&nbsp;</div>
  </div>
</div>
<div class="footer">
  <div class="shell">
     <p style="text-align: center" class="lf">Copyright &copy;
       <?php
echo date("d/m/Y");
?> <a href="#">Sarem International Hotel </a> - All Rights Reserved</p>
    <div style="clear:both;"></div>
  </div>
</div>


</body>
</html>