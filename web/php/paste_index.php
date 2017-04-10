<!DOCTYPE html>
<html>
<head>
<?php
function getCurrentDirectory() {
  $path = dirname($_SERVER['PHP_SELF']);
  $position = strrpos($path,'/') + 1;
  return substr($path,$position);
}
if ($md) {
  require ("../../../web/php/Parsedown.php");
}
?>
    <title>Paste <?php echo getCurrentDirectory(); ?></title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Sans+Mono" />
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
            <li class="active"><a href="/paste">Pastes</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container content">
      <h1>Paste <?php echo getCurrentDirectory();?> <span class="pull-right"><a class="btn btn-primary btn-sm" href="data.txt">View raw paste data</a></span></h1>
      <?php 
        echo "<div id=\"scalled\">";
        if ($md) {
          echo "<hr><hr>";
          $parsedown = new Parsedown();
          $file_contents = file_get_contents('data.txt'); 
          $data = $parsedown -> text($file_contents);
          $data = str_ireplace("<script", "&lt;script", $data);
          $data = str_ireplace("</script>", "&lt;/script", $data);
          $data = str_ireplace("<style", "&lt;style", $data);
          $data = str_ireplace("</style>", "&lt;/style", $data);
          $data = str_ireplace("<meta", "&lt;meta", $data);
          $data = str_ireplace("<html", "&lt;html", $data);
          $data = str_ireplace("<body", "&lt;body", $data);
          $data = str_ireplace("<object", "&lt;object", $data);
          $data = str_ireplace("<form", "&lt;form", $data);
          $data = str_ireplace("<input", "&lt;input", $data);
          $data = str_ireplace("<applet", "&lt;applet", $data);
          echo $data;
          echo "<hr><hr>";
        } else {
          echo "<pre><code>";
          $file_contents = file_get_contents('data.txt'); 
          $file_contents = stripslashes(htmlspecialchars($file_contents));
          echo $file_contents;
          echo "</pre></code>";
        }
        echo "</div>";
        if ($md) {
          echo "<p>Markdown -> HTML conversion comes from <a href=\"http://parsedown.org/\">Parsedown</a>. Content subject to removal at any time</p>";
        } else {
          echo "<p>Content subject to removal at any time.</p>";
        }
      ?>
    </div>
<script type="text/javascript" src="/web/js/jquery1.1.js"></script>
<script type="text/javascript" src="/web/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/web/css/highlightjs/github.css">
<script src="/web/js/highlight.pack.js"></script>
<?php
  echo "<script>hljs.initHighlightingOnLoad();</script>";
?>
</body>
</html>
