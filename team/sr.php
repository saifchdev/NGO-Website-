 <?php 
 require_once('includes/load.php');

 ?>

 <link rel="stylesheet" href="libs/css/style.css" />

<?php


$sql = "SELECT * FROM media where id='".remove_junk($_POST['searchid'])."'";
$result = $db->query($sql);




?>
  <!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HopeMirror NGO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/favicon.png" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/gijgo.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/slicknav.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
      <div class="topbar ">
        <div class="socialbar">
        <a href="#" class="socials"><i class="fa fa-facebook"></i></a>
        <a href="#" class="socials"><i class="fa fa-instagram"></i></a>
        <a href="#" class="socials"><i class="fa fa-whatsapp"></i></a>
        <a href="#" class="socials"><i class="fa fa-youtube"></i></a>
      </div>

      <div class="donate">
        <button class="donate"> DONATE NOW </button>
      </div>
      </div>

        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="../index.html">
                                    <img src="../img/hopemirrorlogo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block text-center">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="../index.html">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Our Team</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="#">Media Coverage</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                      
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none">   </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
  <div class="main-footer">
     <center><div class="row">
      <div class="btnb col-6">
        <img src="https://image.flaticon.com/icons/svg/901/901120.svg">
        <span>+91 8699 272829</span>

      </div>

      <div class="btnb col-6">
        <img src="https://image.flaticon.com/icons/svg/855/855451.svg">
        <span>info@hopemirror.org</span>


      </div>
  </div>
 </center>
     </div>
<?
if (mysqli_num_rows($result) > 0) 
{
                              // output data of each row
  ?>

                             <?php
                            
                              while($row = mysqli_fetch_assoc($result)) {
                               // echo "<img src='uploads/products/".$row["file_name"]."' id='searchimg'>";
                               
                                ?>
     <section class="blog2_area section-padding m-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog2_left_sidebar">
                        <article class="blog2_item">
                             <h1> <?php echo $row["id"]; ?>  </h1>
                          <p> We are proud to have <?php echo $row["name"]; ?> as a member of Team HopeMirror. Thank you!</p>
                         
                              <div class="blog2_item_img">
                               <img class="card-img rounded-0" src="uploads/products/<?php echo $row["file_name"];?>"  alt="">
                                <a href="#" class="blog2_item_date">

                                    <p>Member</p>
                                </a>
                            </div>
                            

                                 
                            <div class="blog2_details">
                                <a class="d-inline-block" href="#">
                                    <h2><?php echo $row["name"]; ?> </h2>
                                </a>
                                <p><?php echo $row["position"]; } }?><br>
                               </p>

                            </div>
                        </article>


                    </div>
                </div>
            </div>
        </div>
    </section>

                    
              <?php if (mysqli_num_rows($result)<1){
                echo "  <section class='blog2_area section-padding m-2'>  <center><img src='uploads/blue-chick.jpg' style='width:60%;'> <h1>ID NOT FOUND!!</h1>" ;
                echo "<a href='search.php'> <button  type='back' name='back' class='boxed-btn3 mb-5'>Go Back </button></a></center></section> ";
                      }             ?>       
                                
                        
    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3">
                        <div class="footer_logo wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                            <a href="index.html">
                                    <img src="../img/hopemirrorlogo.png" alt="" style="width: 250px";><br>
                                    <p class="mb-0"><span style="color: #f0f0f0;"><i class="fa fa-map-marker" aria-hidden="true"></i> Navi Mumbai, Maharashtra</span></p>
                                    <p class="mb-0"><span style="color: #f0f0f0;"> <i class="fa fa-phone-square" aria-hidden="true"></i> +91 8699 272829</span></p>
                                    <p class="mb-0"><span style="color: #f0f0f0;"><i class="fa fa-envelope" aria-hidden="true"></i> info@hopemirror.org</span></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-7 col-md-9">
                        <div class="menu_links">
                            <ul>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s" href="#">About</a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s" href="#">Gallery</a></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".6s" href="#">Media</a></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".8s" href="#">Team</a></li>
                                                          <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.1s" href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="socail_links">
                            <ul>
                                <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s" href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" href="#"> <i class="fa fa-instagram"></i> </a></li>
                                <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s" href="#"> <i class="fa fa-google-plus"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12 mb-90">
                        <p class="copy_right text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> HopeMirror Foundation  <br> Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by PenP!xxel
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- JS here -->
    <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>
    <script src="../js/ajax-form.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/imagesloaded.pkgd.min.js"></script>
    <script src="../js/scrollIt.js"></script>
    <script src="../js/jquery.scrollUp.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/nice-select.min.js"></script>
    <script src="../js/jquery.slicknav.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="../js/contact.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/jquery.form.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/mail-script.js"></script>

    <script src="../js/main.js"></script>
</body>

</html>
 
