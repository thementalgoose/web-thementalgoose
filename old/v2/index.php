<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!--[if gte IE 9]><!-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/ico" href="img/favicon.ico" />
  <title>Jordan Fisher</title>
</head>
<body>
  <?php 
    require 'php/variables.php';
  ?>
  <a id="home"></a>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="#home" class="page-scroll navbar-brand"><?php echo $name; ?></a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav">
          <li>
            <a href="#about" class="page-scroll">About me</a>
          </li>
          <li>
            <a href="#skills" class="page-scroll">Skills</a>
          </li>
          <li>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="education">Education <span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="education">
              <li>
                <a href="#educationuni" class="page-scroll">University</a>
              </li>
              <li>
                <a href="#educationcollege" class="page-scroll">College</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#portfolio" class="page-scroll">Portfolio</a>
          </li>
          <li>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="work">Work experience <span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="work">
              <li>
                <a href="#workprogramming" class="page-scroll">Programming experience</a>
              </li>
              <li>
                <a href="#workother" class="page-scroll">Other experience</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#contact" class="page-scroll">Contact me</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>
  <header>
    <div class="header-content">
      <div class="header-content-inner">
        <h1><?php echo $header_hello; ?></h1>
        <hr>
        <p>This website is old! Current version is avalable <a href="../../">here</a></p>
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <?php 
               if (isset($_GET['sent'])) {
                 if ($_GET['sent'] == 'true') {
                   echo "<div class=\"alert alert-success text-center\">";
                   echo "  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
                   echo "  <strong>Email successfully sent.</strong>";
                   echo "</div>";
                 }
                 if ($_GET['sent'] == 'false') {
                    echo "<div class=\"alert alert-danger text-center\">";
                    echo "  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
                    echo "  <strong>Email was not sent. Please try again.";
                    if (isset($_GET['a'])) {
                      if ($_GET['a'] == 'n') {
                        echo "<br/>Missing name";
                      }
                      if ($_GET['a'] == 'e') {
                        echo "<br/>Missing email";
                      }
                      if ($_GET['a'] == 'm') {
                        echo "<br/>Missing message";
                      }
                    }
                    echo "</strong>";
                    echo "</div>";
                 }
               }
            ?>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-xs-4">
          <img src="img/me.jpg" id="profile-image" class="img img-circle img-thumbnail img-responsive disappear">
        </div>
        <div class="col-md-9">
          <h2 class="padder10"><?php echo $name; ?></h2>
          <p class="padder10"><?php echo $about_me; ?></p>
          <p class="padder10"><?php echo $about_passion; ?></p>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-sm-4">
          <h2><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></h2>
          <h3>Where</h3>
          <p><?php echo $about_where; ?></p>
        </div>
        <div class="col-sm-4">
          <h2><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></h2>
          <h3>What</h3>
          <p><?php echo $about_what; ?></p> 
        </div>
        <div class="col-sm-4">
          <h2><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></h2>
          <h3>Why</h3>
          <p><?php echo $about_why; ?></p>
        </div>
      </div>
    </div>
    <div class="padder50">
    </div>
  </section>
  <section id="skills">
    <div class="container">
      <h1 class="text-center">Skills</h1>
      <hr> 
      <div class="row text-center">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-sm-4">
              <img class="skills-image" src="img/skills/java.png"/>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" style="width: 80%"></div>
              </div>
              <p><?php echo $skills_java; ?></p>
            </div>
            <div class="col-sm-4">
              <img class="skills-image" src="img/skills/android.png"/>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" style="width: 70%"></div>
              </div>
              <p><?php echo $skills_android; ?></p>
            </div>
            <div class="col-sm-4">
              <img class="skills-image" src="img/skills/csharp.png"/>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" style="width: 65%"></div>
              </div>
              <p><?php echo $skills_csharp; ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <div class="col-sm-4">
              <img class="skills-image" src="img/skills/web.png"/>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
              <p><?php echo $skills_web; ?></p>
            </div>
            <div class="col-sm-4">
              <img class="skills-image" src="img/skills/cplusplus.png"/>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" style="width: 50%"></div>
              </div>
              <p><?php echo $skills_cplusplus; ?></p>
            </div>
            <div class="col-sm-4">
              <img class="skills-image" src="img/skills/more.png"/>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" style="width: 45%"></div>
              </div>
              <p><?php echo $skills_other; ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-sm-4">
              <img class="skills-image" src="img/skills/os.png"/>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" style="width: 65%"></div>
              </div>
              <p><?php echo $skills_os; ?></p>
            </div>
            <div class="col-sm-4">
              <img class="skills-image" src="img/skills/software.png"/>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" style="width: 80%"></div>
              </div>
              <p><?php echo $skills_software; ?></p>
            </div>
            <div class="col-sm-4">
              <img class="skills-image" src="img/skills/hardware.png"/>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" style="width: 70%"></div>
              </div>
              <p><?php echo $skills_hardware; ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <div class="col-sm-4">
              <img class="skills-image" src="img/skills/git.png"/>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" style="width: 85%"></div>
              </div>
              <p><?php echo $skills_git; ?></p>
            </div>
            <div class="col-sm-4">
              <img class="skills-image" src="img/skills/automatedtesting.png"/>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" style="width: 65%"> </div>
              </div>
              <p><?php echo $skills_unittest; ?></p>          
            </div>
            <div class="col-sm-4">
              <img class="skills-image" src="img/skills/developmenttools.png"/>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" style="width: 60%"></div>
              </div>
              <p><?php echo $skills_ides; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="padder50">
    </div>
  </section>
  <?php
     $now = time(); // or your date as well
     $your_date = strtotime("2018-08-01");
     $datediff = $your_date - $now;
     $days = floor($datediff/(60*60*24));
     $width = floor(((1440 - $days) * 100) / 1440);
    ?>
  <section id="education">
    <section id="educationuni">
    <div class="container">
      <h1 class="text-center">Education</h1>
      <hr>
      <p><i>Sep 2014</i><span class="pull-right"><i>Sep 2018</i></span></p>
      <div class="progress">
        <div class="progress-bar progress-bar-info" style="width: <?php echo $width; ?>%"></div>
      </div>
      <h3><?php echo $uni_title; ?></h3>
      <p><?php echo $uni_desc; ?></p>
      <div class="row">
        <div class="col-md-3">
          <h5><?php echo $uni_1_title; ?></h5>
          <hr>
          <p><?php echo $uni_1_desc; ?></p>
        </div>
        <div class="col-md-3">
          <h5><?php echo $uni_2_title; ?></h5>
          <hr>
          <p><?php echo $uni_2_desc; ?></p>
        </div>
        <div class="col-md-3">
          <h5><?php echo $uni_p_title; ?></h5>
          <hr>
          <p><?php echo $uni_p_desc; ?></p>
        </div>
        <div class="col-md-3">
          <h5><?php echo $uni_3_title; ?></h5>
          <hr>
          <p><?php echo $uni_3_desc; ?></p>
        </div>
      </div>
      <div class="padder50"> </div>
    </div>
    </section>
    <section id="educationcollege">
    <div class="container">
      <p class="paddertop10"><i>Sep 2010</i><span class="pull-right"><i>Sep 2014</i></span></p>
      <div class="progress">
        <div class="progress-bar progress-bar-success" style="width: 100%"></div>
      </div>
      <h3><a href="http://www.lutterworthcollege.com/">Lutterworth College<span class="glyphicon glyphicon-link" aria-hidden="true"></span></a></h3>
      <div class="row">
        <div class="col-md-6">
          <h5>GCSE results</h5>
            <hr>
            <div class="row">
              <div class="col-xs-6">
                <div class="row">
                  <div class="col-md-6 col-xs-8">Mathematics</div>
                  <div class="col-md-6 col-xs-4"><span class="badge">A*</span></div>
                  <div class="col-md-6 col-xs-8">English Language</div>
                  <div class="col-md-6 col-xs-4"><span class="badge">A</span></div>
                  <div class="col-md-6 col-xs-8">English Literature</div>
                  <div class="col-md-6 col-xs-4"><span class="badge">A</span></div>
                  <div class="col-md-6 col-xs-8">Physics</div>
                  <div class="col-md-6 col-xs-4"><span class="badge">A*</span></div>
                  <div class="col-md-6 col-xs-8">Chemistry</div>
                  <div class="col-md-6 col-xs-4"><span class="badge">A*</span></div>
                  <div class="col-md-6 col-xs-8">Biology</div>
                  <div class="col-md-6 col-xs-4"><span class="badge">A</span></div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="row">
                  <div class="col-md-6 col-xs-8">ICT</div>
                  <div class="col-md-6 col-xs-4"><span class="badge">A*</span></div>
                  <div class="col-md-6 col-xs-8">Geography</div>
                  <div class="col-md-6 col-xs-4"><span class="badge">A</span></div>
                  <div class="col-md-6 col-xs-8">DT: Systems</div>
                  <div class="col-md-6 col-xs-4"><span class="badge">A*</span></div>
                  <div class="col-md-6 col-xs-8">RE</div>
                  <div class="col-md-6 col-xs-4"><span class="badge">A*</span></div>
                  <div class="col-md-6 col-xs-8">French</div>
                  <div class="col-md-6 col-xs-4"><span class="badge">B</span></div>
                </div>
              </div>
            </div>
          </ul>
        </div>
        <div class="col-md-6">
          <h5>A Level results</h5>
          <hr>
          <div class="row">
            <div class="col-xs-6">
              <div class="row">
                <div class="col-md-6 col-xs-8"><strong>A2:</strong>Mathematics</div>
                <div class="col-md-6 col-xs-4"><span class="badge">A*</span></div>
                <div class="col-md-6 col-xs-8"><strong>A2:</strong>Computing</div>
                <div class="col-md-6 col-xs-4"><span class="badge">A</span></div>
                <div class="col-md-6 col-xs-8"><strong>A2:</strong>Physics</div>
                <div class="col-md-6 col-xs-4"><span class="badge">A</span></div>
                <div class="col-md-6 col-xs-8"><Strong>AS:</Strong>Chemistry</div>
                <div class="col-md-6 col-xs-4"><span class="badge">A</span></div>
              </div>
            </div>
            <div class="col-xs-6">
              <p><?php echo $edu_extra; ?></p>
            </div>
          </div>
        </div>
      </div>
      </section>
    </div>
    <div class="padder50">
    </div>
  </section>
  <section id="portfolio">
    <div class="container">
      <h1 class="text-center">Portfolio</h1>
      <hr>
      <p class="text-center"><?php echo $ptflo_desc; ?></p>
      <?php
        $count = 0;
        foreach ($portfolio as $obj) {
          // Check if I need to initialise a new object
          if ($count % 3 == 0) {
            echo '<div class="row">';
          }

          echo '<div class="col-sm-4">';
          echo '  <h5>' . $obj -> title . "</h5>";
          echo '  <hr>';
          echo '  <img id="fitter" src="' . $obj -> img . '"/>';
          echo '  <p>' . $obj -> description . '</p>';
          if ($obj -> github != null || $obj -> link != null) {
            echo '  <div class="row">';
            if ($obj -> github != null) {
              echo '    <div class="col-xs-6">';
              echo '      <a class="btn btn-primary form-control" href="' . $obj -> github . '">Github</a>';
              echo '    </div>';
            }
            if ($obj -> link != null) {
              echo '    <div class="col-xs-6">';
              echo '      <a class="btn btn-primary form-control" href="' . $obj -> link . '">Link</a>';
              echo '    </div>';
            }
            echo '  </div>';
          }
          echo '</div>';

          // Increment the count
          $count++;
          // Check if this is an ending tag
          if ($count % 3 == 0) {
            echo '</div>';
          }
        }
        if ($count % 3 != 0) {
          // Random end. Close the Row object
          echo '</div>';
        }
      ?>
    </div>
    <div class="padder50">
    </div>
  </section>
  <section id="workexperience">
    <section id="workprogramming">
      <div class="container">
        <h1 class="text-center">Work</h1>
        <hr>
        <h3>Programming experience</h3>
        <hr>
        <p>I am yet to be employed for a software-development role in a company, but in June 2016 I will begin a year long industrial placement at <a href="http://www.rolleragency.co.uk">Roller agency<span class="glyphicon glyphicon-link" aria-hidden="true"></span></a> as a placement Android developer.</p>
        <p>Alongside this I have completed all the work shown above in the <a class="page-scroll" href="#portfolio">portfolio</a>, alongside many projects undertaken at University (allowing me to build my skill set up). I have also done some free-lance programming work (about which I am still available for, please send me a message <a class="page-scroll" href="#contact">below</a> if you are interested). This includes some backend PHP work for a website called GeekRock, designing the <a href="http://www.j21drivingschool.co.uk">J21 Driving school<span class="glyphicon glyphicon-link" aria-hidden="true"></span></a> website (including setting up analytics, etc.).
        <p>Remember I am always available to do small amounts of freelance programming work (preferably in anything specified in the <a class="page-scroll" href="#skills">skills</a> section. Please don't hesitate to get into contact</p>
      </div>
      <div class="padder50">
      </div>
    </section>
    <section id="workother">
      <div class="container">
        <h3>Other work</h3>
        <hr>
        <p>I have held other jobs whilst studying unrelated to my field, which has provided valuable experience in the working world</p>
      <?php
        $count = 0;
        foreach ($work as $obj) {
          // Check if I need to initialise a new object
          if ($count % 3 == 0) {
            echo '<div class="row">';
          }

          echo '<div class="col-sm-4">';
          echo '  <h5>' . $obj -> title . "</h5>";
          echo '  <hr>';
          echo '  <div class="progress">';
          echo '    <div class="progress-bar progress-bar-success" style="width: ' . $obj -> percentage . '%"></div>';
          echo '  </div>';
          echo '  <p>' . $obj -> desc . '</p>';
          echo '  <ul>';
          $items = $obj -> points;
          foreach ($items as $val) {
            echo '    <li>' . $val . '</li>';
          }
          echo '  </ul>';
          echo '</div>';

          // Increment the count
          $count++;
          // Check if this is an ending tag
          if ($count % 3 == 0) {
            echo '</div>';
          }
        }
        if ($count % 3 != 0) {
          // Random end. Close the Row object
          echo '</div>';
        }
      ?>
      </div>
      <div class="padder50">
      </div>
    </section>
  </section>
  <section id="contact">
    <div class="container">
      <h1 class="text-center">Contact</h1>
      <hr>
      <p class="text-center">You can get into contact with me by either using one of the links below, or filling out the contact form and I will get back to you as soon as I can</p>
      <p class="text-center"><a class="btn btn-primary" href="docs/JordanFisher.pdf">Download a copy of my resume</a></p>
      <div class="row">
        <div class="col-md-1"> </div>
        <div class="col-md-4">
          <form role="form" action="php/sendmail.php" method="POST">
            <div class="row">
              <div class="col-md-2">
                <h6>Name</h6>
              </div>
              <div class="col-md-10">
                <input id="name" type="text" name="name" class="form-control" placeHolder="Name"/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <h6>Email</h6>
              </div>
              <div class="col-md-10">
                <input id="email" type="email" name="email" class="form-control" placeHolder="Email"/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <h6>Message</h6>
              </div>
              <div class="col-md-10">
                <textarea name="message" rows="5" type="text" class="form-control" placeHolder="Please type your message here"></textarea>
              </div>
            </div>
            <div class="padder10"></div>
            <button type="submit" class="form-control btn btn-primary" value="Send">Send</button>
          </form>
        </div>
        <div class="col-md-1"> </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-2"> </div>
            <div class="col-md-8">
              <p><a id="links" href="mailto:thementalgoose@gmail.com" class="btn btn-link form-control"><img id="scaler" src="img/contact/email.png"/> thementalgoose@gmail.com</a></p>
              <p><a id="links" href="mailto:j.s.fisher@outlook.com" class="btn btn-link form-control"><img id="scaler" src="img/contact/email.png"/> j.s.fisher@outlook.com</a></p>
              <p><a id="links" href="https://github.com/thementalgoose" class="btn btn-link form-control"><img id="scaler" src="img/contact/github.png"/> github.com/thementalgoose</a></p>
              <p><a id="links" href="https://play.google.com/store/apps/developer?id=Jordan+Fisher" class="btn btn-link form-control"><img id="scaler" src="img/contact/google.png"/> play.google.com/..?id=Jordan+Fisher</a></p>
              <p><a id="links" href="http://gplus.to/JordanFisher" class="btn btn-link form-control"><img id="scaler" src="img/contact/gplus.png"/> gplus.to/JordanFisher</a></p>
              <p><a id="links" href="https://www.linkedin.com/in/jordanspencerfisher" class="btn btn-link form-control"><img id="scaler" src="img/contact/linkedin.png"/> linkedin.com/in/jordanspencerfisher</a></p>
            </div>
            <div class="col-md-2"></div>
          </div>
        </div>
      </div>
      <div class="padder50">
      </div>
      <h5 class="text-center">Thanks for viewing :)</h5>
      <hr>
    </div>
    <div class="padder50">
    </div>
  </section>
<script type="text/javascript" src="js/jquery1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
</body>
</html>