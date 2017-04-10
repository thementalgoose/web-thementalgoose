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
            <li class="active"><a href="/paste">Pastes</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container text-center">
      <div class="row">
        <h1>Pastebin</h1>
        <?php 
          if (isset($_GET["e"])) {
            echo "<div class=\"row\"><div class=\"col-sm-6 col-sm-offset-3\"><div class=\"alert alert-danger\"><strong>Error</strong> You haven't typed anything</div></div></div>";
          }
          if (isset($_GET["i"])) {
            echo "<div class=\"row\"><div class=\"col-sm-6 col-sm-offset-3\"><div class=\"alert alert-danger\"><strong>Interal Error occured</strong> An internal error occured with the service</div></div></div>";
          }
        ?>
        <p>This is a personal paste bin service for <a href="http://jordanfisher.me">jordanfisher.me</a></p>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <form action="paste.php" method="post">
              <textarea id="markdown_file" class="form form-control" rows="10" name="data" placeHolder="Enter your paste data here"></textarea>
              <p></p>
              <p><input id="md" type="checkbox" name="markdown"/> Check this box if you wish the paste to be formatted as <strong><i>markdown</i></strong></p>
              <div class="row">
                <div class="col-sm-4">
                  <a id="preview" href="#" target="_newtab" class="form form-control btn btn-info">Preview</a>
                </div>
                <div class="col-sm-8">
                  <input type="submit" class="form form-control btn btn-primary" value="Paste"/>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript" src="/web/js/jquery1.1.js"></script>
<script type="text/javascript" src="/web/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/web/js/preview.js"></script>
</body>
</html>