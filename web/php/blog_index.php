<!DOCTYPE html>
<html>
<?php 
  $appRootPath = getenv('APP_ROOT_PATH');
  require ($appRootPath . '/web/php/Parsedown.php'); 
?>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Sans+Mono" />
    <link rel="stylesheet" type="text/css" href="/web/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/web/css/style.css">
    <link rel="stylesheet" type="text/css" href="/web/css/blog.css">
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
            <li class="active"><a href="/blog">Blog</a></li>
            <li><a href="/paste">Pastes</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-md-1"> </div>
        <div class="col-md-10 content">
          <p><a href="../../">&lt;&lt; Back to blog</a></p>
            <?php
                $parsedown = new Parsedown();
                $file_contents = file_get_contents('data.txt'); 
                echo $parsedown -> text($file_contents);
            ?>
        </div>
        <div class="col-md-1"> </div>
      </div>
    </div>
<script type="text/javascript" src="/web/js/jquery1.1.js"></script>
<script type="text/javascript" src="/web/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/web/css/highlightjs/github.css">
<script src="/web/js/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
