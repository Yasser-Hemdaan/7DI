<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="Marketing Agency Seven Dimensions part of your journey ,On an empty desert and while walking between its sands, some dimensions were discovered on this point that include a set of innovations and creativity that create businesses from scratch to great work." name="description">
  <title>Contact</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="assets/lib/icomoon/style.css" />
  <link rel="stylesheet" href="assets/fonts/DIN/fonts.css">
  <link rel="icon" type="image/x-icon" href="img/IconW.webp">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script defer src="js/main.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script defer src="js/validateForm.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lte IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TZDF6QS');</script>
<!-- End Google Tag Manager -->

</head>

<body>
  <div class="parentContainer">
    <div class="header">
      <div class="overlay"></div>
      <video src="video/promo2_3.mp4" width="100%" muted loop autoplay></video>

      <nav>
        <div class="navToggler">
          <button class="menuBtn" id="menu">Menu</button>
        </div>
      </nav>

      <a href="#web" class="toWeb">
        <span class="icon-angle-down"></span>
        <span class="icon-angle-down"></span>
      </a>
    </div>

    <div class="ewc justifyContentCenter alignItemsCenter flexDirectionCol" data-aos="fade-right" data-aos-delay="50">
    <a href="contact.php" class="justifyContentCenter alignItemsCenter" target="_blank"><span class="icon-envelope-o"></span></a>
    <a href="tel:+966535553380" class="justifyContentCenter alignItemsCenter" target="_blank"><span class="icon-phone"></span></a>
    <a href="https://api.whatsapp.com/send/?phone=966535553380&text&app_absent=0" target="_blank" class="justifyContentCenter alignItemsCenter"><span class="icon-whatsapp"></span></a>
  </div>

    <div class="navBody">
      <ul>
      <li><a href="index.php">home</a></li>
        <li><a href="projects.php">projects</a></li>
        <li><a href="services.php">services</a></li>
        <li><a href="team.php">team</a></li>
        <li><a href="contact.php">contact</a></li>
        <li><a href="contactAr.php">arabic</a></li>
      </ul>
    </div>
  </div>


  <?php 
  
  //Check if user come from form request

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $fullname = filter_var($_POST["fullname"] , FILTER_SANITIZE_STRING); 
    $email = filter_var($_POST["email"] , FILTER_SANITIZE_EMAIL); 
    $message = $_POST["message"];   

    // create form errors array

  $formErrors = array();

  $headers = 'From: ' . $email . 'r/n/';
  $myEmail = 'info@7di.sa';
  $subject = 'contact Form';


  if(empty($formErrors)){
    mail($myEmail , $subject , $message , $headers);
  }
  
  $fullname = "";
  $email = "";
  $message = "";
  $success = '<div class="success"> We have recieved your message we will send you soon, Thanks</div>';
    
  }
  
  ?>

  <div class="container" id="web">
    <div class="contactSec justifyContentCenter flexDirectionCol">
      <div class="content">
        <div class="contact alignItemsCenter flexDirectionCol">
          <h2 class="special-header" data-aos="fade-in" data-aos-delay="50">contact</h2>

            <?php 
            if(!empty($formErrors)){ ?>
            <div class="errors">
              <?php
              foreach($formErrors as $error){
                echo $error ."<br>"; 
              }?>
            <?php } ?>
            <?php  if(isset($success)){
              echo($success);
            } ?>
          </div>

          <div class="contactBlock">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="alignItemsCenter justifyContentCenter flexDirectionCol">
              
              <div class="formGroup">
                <input type="text" autocomplete="off" class="feild" data-aos="fade-right" data-aos-delay="50" data-aos-duration="2000" name="fullname" id="fullname"
                  placeholder="your name" value="<?php if(isset($fullname)){ echo $fullname; }?>"  />
                  <span class="astric">*</span>
                  <div class="alert">Your name must be more than <strong>3</strong> characters</div>
              </div>

              <div class="formGroup">
                <input type="email" autocomplete="off" class="feild" data-aos="fade-right" data-aos-delay="50" data-aos-duration="2000" name="email" id="email" placeholder="your email"
                  value="<?php if(isset($email)){ echo $email; }?>"  />
                  <span class="astric">*</span>
                  <div class="alert">Email can't be <strong>empty</strong></div>
              </div>
              
              <div class="formGroup">
                <textarea name="message" autocomplete="off" class="feild" data-aos="fade-right" data-aos-delay="50" data-aos-duration="2000" id="message" placeholder="your message"
                  rows="10"  noresize><?php if(isset($message)){ echo $message;}?></textarea>
                  <span class="astric">*</span>
                  <div class="alert">Your message must be more than <strong>10</strong> characters</div>
              </div>
              <input type="submit" data-aos="fade-in" data-aos-delay="50" value="send message" id="send" />
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="content">
        <div class="social">
          <div class="socialLinks">
            <a href="https://twitter.com/7di_co" target="_blank"><span class="icon-twitter"></span></a>
            <a href="https://www.linkedin.com/company/7di-co/mycompany/" target="_blank"><span
                class="icon-linkedin"></span></a>
            <a href="https://www.instagram.com/7di_co/" target="_blank"><span class="icon-instagram"></span></a>
            <a href="https://www.behance.net/seven_dimensions?tracking_source=search_projects_recommended%7C7d"
              target="_blank"><span class="icon-behance"></span></a>
          </div>
          <p>social media</p>
        </div>

        <div class="supporters">
          <div class="supportersLinks">
            <a><span class="icon-google"></span></a>
            <a><span class="icon-twitter"></span></a>
            <a><span class="icon-snapchat-ghost"></span></a>
            <a><span class="icon-tiktok"></span></a>
          </div>
          <p>Certified Partners</p>
        </div>
      </div>
    </div>
  </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZDF6QS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script>
  AOS.init({
    duration: 1200,
    delay:100,
    once:"true",
  });
  </script>

</body>

</html>