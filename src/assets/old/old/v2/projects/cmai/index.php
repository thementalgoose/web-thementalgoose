<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/custom.css">
    <link rel="stylesheet" type="text/css" href="../../css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--[if gte IE 9]><!-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/ico" href="img/favicon.ico" />
  <title>CMAI</title>
</head>
<body>
  <?php
    require 'variables.php';
  ?>
  <a id="home"></a>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="#home" class="page-scroll navbar-brand">CMAI</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav">
          <li>
            <a href="#about" class="page-scroll">About</a>
          </li>
          <li>
            <a href="#gallery" class="page-scroll">Gallery</a>
          </li>
          <li>
            <a href="#howitworks" class="page-scroll">How it works</a>
          </li>
          <li>
            <a href="#download" class="page-scroll">Download</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header>
    <div class="header-content">
      <div class="header-content-inner">
        <h1>CMAI</h1>
        <hr>
        <p>CyanogenMod App Installer</p>
      </div>
    </div>
  </header>
  <section id="about">
    <div class="container">
      <h1 class="text-center"><strong>C</strong>yanogen <strong>M</strong>od <strong>A</strong>pp <strong>I</strong>nstaller</h1>
      <hr>
      <p>The CyanogenMod App Installer provides an easy way to try and install some of the applications that CyanogenMod specifically develop onto any device running any version of android. <a href="http://www.cyanogenmod.com">CyanogenMod</a> have been known to make noticable improvements over the stock applications offered by Android to enhance your experience.</p>
      <p>Please note I <strong>cannot guarantee compatibility</strong> with this, it may work or it may not. This application simply provides an easy method of attempting to</p>
      <div class="padder50"> </div>
    </div>
  </section>
  <section id="gallery">
    <div class="container">
      <h1 class="text-center">Gallery</h1>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <img id="gallery_img" src="img/1.png"/>
        </div>
        <div class="col-md-4">
          <img id="gallery_img" src="img/2.png"/>
        </div>
        <div class="col-md-4">
          <img id="gallery_img" src="img/3.png"/>
        </div>
      </div>
      <div class="padder50"> </div>
    </div>
  </section>
  <section id="howitworks">
    <div class="container">
      <h1 class="text-center">How it works</h1>
      <hr>
      <?php echo $howitworks; ?>
      <div class="padder50"> </div>
    </div>
  </section>
  <section id="download">
    <div class="container">
      <h1 class="text-center">Download</h1>
      <hr>
      <p>The application is available to download from XDA developers now</p>
      <div class="row text-center">
        <div class="col-md-3"> </div>
        <div class="col-md-3"> <a href="http://forum.xda-developers.com/attachment.php?attachmentid=3508667&d=1453310949" class="btn btn-success btn-lg">Download APK</a> </div>
        <div class="col-md-3"> <a href="http://forum.xda-developers.com/android/apps-games/app-cm-app-installer-t2959922" class="btn btn-primary btn-lg">View the XDA page now</a> </div>
        <div class="col-md-3"> </div>
      </div>
      
      <h4>Why can't I get this app on the play store?</h4>
      <p>This app was once on the play store, however it got removed for a policy violation which stated that you couldn't download apps inside apps, due to it being potentially unsafe and what not.</p>
    </div>
  </section>
<script type="text/javascript" src="../../js/jquery1.js"></script>
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../js/custom.js"></script>
<script type="text/javascript" src="../../js/jquery.easing.min.js"></script>
</body>
</html>