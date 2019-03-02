<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/fonts.css">
	<title>Jordan Fisher</title>
</head>
<body>
  <?php
    require '../php/variables.php';
  ?>
  <div class="header">
    <div class="container">
      <div class="left">
        <h2><?php echo $name; ?></h2>
      </div>
      <div class="left">
        <p>About - Skills - Education - Portfolio - Work - Contact</p>
      </div>
    </div>
  </div> 
  <div class="content">
    <div class="vertical-fill">
      <div class="container">
        <h1><?php echo $header_hello; ?></h1>
        <p><?php echo $header_intro; ?></p>
      </div>
    </div>
  </div>
</body>
</html>