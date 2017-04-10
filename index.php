<!DOCTYPE html>
<html>
<head>
    <title>Jordan</title>
    <link rel="stylesheet" type="text/css" href="/web/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/web/css/style.css">
    <!--[if gte IE 9]><!-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/ico" href="/web/media/favicon.ico" />
</head>
<body>
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Jordan</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/cv">CV</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/paste">Pastes</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<?php
  require ("web/php/Parsedown.php");
?>
    <div class="container">
      <div class="row">
        <div class="col-sm-2"> </div>
        <div class="col-sm-8 padder">
          <?php 
            $parsedown = new Parsedown();
            $file_contents = file_get_contents('homepage.txt'); 
            echo $parsedown -> text($file_contents);
          ?>
          <p>~Jordan</p>
        </div>
        <div class="col-sm-2"> </div>
      </div>
    </div>
<script type="text/javascript" src="/web/js/jquery1.1.js"></script>
<script type="text/javascript" src="/web/js/bootstrap.min.js"></script>
</body>
</html>