<!DOCTYPE html>
<html>
<head>
<?php
  class Item {
    public $directory;
    public $title;
    public $time;
    public $description;
  }
  function cmp($a, $b)
  {
    return strcmp($b->time,$a->time);
  }
  // Read in the tutorials
  $tutorialArray = array();
  $t_handle = fopen("tutorials/data", "r");  
  if ($t_handle) {
    while (($t_line =  fgets($t_handle)) !== false) {
      // Process $t_line
      $array = explode("|", $t_line);
      $item = new Item();
      $item -> directory = $array[0];
      $item -> title = $array[1];
      $item -> time = $array[2];
      $item -> description = $array[3];
      array_push($tutorialArray, $item);
    }
    fclose($t_handle);
  } else {
    // No tutorials
  }


  // Read in the posts
  $postArray = array();
  $p_handle = fopen("posts/data", "r");  
  if ($p_handle) {
    while (($p_line =  fgets($p_handle)) !== false) {
      // Process $p_line
      $array = explode("|", $p_line);
      $item = new Item();
      $item -> directory = $array[0];
      $item -> title = $array[1];
      $item -> time = $array[2];
      $item -> description = $array[3];
      array_push($postArray, $item);
    }
    fclose($p_handle);
  } else {
    // No posts
  }

  // SORT
  usort($tutorialArray, "cmp");
  usort($postArray, "cmp");
?>
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
            <li class="active"><a href="/blog">Blog</a></li>
            <li><a href="/paste">Pastes</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
        <h1 class="text-center">Blog</h1>
        <p class="text-center">So this is where some semi interesting / not very interesting blog posts might go.<br/> I also have some tutorials listed as well of some processes I have done myself</p>
        <div class="row">
          <div class="col-md-1"> </div>
          <div class="col-sm-6 col-md-4">
            <h2 class="text-center">Posts</h2>
            <hr>
            <?php
              foreach ($postArray as $key => $value) {
                $mydate = strtotime($value -> time);
                echo "<h3><a href=\"posts/" . ($value -> directory) . "\">" . ($value -> title) . "</a></h3>";
                echo "<p><strong><i>" . date('jS F Y', $mydate) . "</i></strong><br/>";
                echo "<p>" . ($value -> description) . "</p>";
              }
              if (empty($postArray)) {
                echo "<h1 class=\"text-center\" style=\"font-size: 80px;\">:(</h1>";
                echo "<p class=\"text-center\">There are currently no posts</p>";
              }
            ?>
          </div>
          <div class="col-md-2"> </div>
          <div class="col-sm-6 col-md-4">
            <h2 class="text-center">Tutorials</h2>
            <hr>
            <?php
              foreach ($tutorialArray as $key => $value) {
                $mydate = strtotime($value -> time);
                echo "<h3><a href=\"tutorials/" . ($value -> directory) . "\">" . ($value -> title) . "</a></h3>";
                echo "<p><strong><i>" . date('jS F Y', $mydate) . "</i></strong><br/>";
                echo "<p>" . ($value -> description) . "</p>";
              }
              if (empty($tutorialArray)) {
                echo "<h1 class=\"text-center\" style=\"font-size: 80px;\">:(</h1>";
                echo "<p class=\"text-center\">There are currently no tutorials</p>";
              }
            ?>
          </div>
          <div class="col-md-1"> </div>
        </div>
    </div>
<script type="text/javascript" src="/web/js/jquery1.1.js"></script>
<script type="text/javascript" src="/web/js/bootstrap.min.js"></script>
<script type="text/javascript"> 
</script>
</body>
</html>