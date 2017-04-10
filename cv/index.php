<!DOCTYPE html>
<html>
<head>
    <title>Jordan</title>
    <link rel="stylesheet" type="text/css" href="/web/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/web/css/style.css">
    <link rel="stylesheet" type="text/css" href="/web/css/resume.css">
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
            <li class="active"><a href="/cv">CV</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/paste">Pastes</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<?php 
   require ("skills.php"); 

  /* CALCULATE BIRTHDAY */
  $birthDate = "10/12/1995";
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
  ?>
<div class="container content">
  <div class="row">
    <div class="col-xs-12">
      <div id="photo-header" class="text-center">
        <!-- PHOTO (AVATAR) -->
        <div id="photo">
          <img src="/web/media/me.png" alt="avatar">
        </div>
        <div id="text-header">
          <h2 class="text-center">Hi. I'm <strong color="#917382">Jordan</strong>, and I write code</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <hr>
    <hr>
    <div class="col-md-7">
      <h3 id="cv-header"><strong>ABOUT ME</strong></h3>
      <hr>
      <p>My name is Jordan, I'm <?php echo $age; ?> years old and I am a Computer Science student at the <a href="http://www.le.ac.uk">University of Leicester</a> with a passion for programming. I am always looking to increase my portfolio or get stuck in on projects, so send me a message if you think I can help you!</p>
      <h3 id="cv-header"><strong>PROJECTS</strong></h3>
      <hr>
      <p>You can view my current and past projects <a href="/projects">here</a></p> 
      <h3 id="cv-header"><strong>WORK</strong></h3>
      <hr>

      <?php
         $now = time(); // or your date as well
         $your_date = strtotime("2017-06-05");
         $duration = 360;
         $datediff = $your_date - $now;
         $days = floor($datediff/(60*60*24));
         $width = floor((($duration - $days) * 100) / $duration);
        ?>
      <div class="row">
        <div class="col-sm-4">
          <h4><strong><a href="http://www.rolleragency.co.uk">Roller agency</a></strong></h4>
          <div class="progress mini">
            <?php 
              if ($width >= 100) {
                  echo "<div class=\"progress-bar progress-bar-success\" style=\"width: 100%;\"> </div>";
              } else {
                  echo "<div class=\"progress-bar\" style=\"width:" . $width . "%\"> </div>";
              }
            ?>
          </div>
          <?php
            if (date('Y-m-d', $now) == "2016-06-13") {
                echo "Starting today! :D";
            } else if ($width <= 0) {
                echo "<p>Starting 13th June 2016</p>";
            } else {
                echo "<p>June 2016 <span class=\"pull-right\">June 2017</span></p>";
            }
          ?>
        </div>
        <div class="col-sm-8">
          <h4><strong>Android application developer</strong></h4>
          <p>My placement will be working as part of a team in order to develop and deploy high quality Android applications for a portfolio of clients. I will also be performing web integration using frameworks like Laravel for apps, working with APIs and working to a specification</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <h4>Harveys</h4>
          <div class="progress mini">
            <div class="progress-bar progress-bar-success" style="width:100%"> </div>
          </div>
          <p>June 2015 <span class="pull-right">Sep 2015</span></p>
        </div>
        <div class="col-sm-8">
          <h4><i><strong>Quality Control Inspector</strong></i></h4>
          <p>Inspected furniture for defects for returns</p>
          <ul>
              <li>Lots of teamwork and communication skills required</li>
              <li>Constistent expectation of working to a high standard</li>
              <li>Position of responsibility, as my decisions affect company sales</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <h4><a href="http://www.castlefreight.co.uk/">Castle Freight</a></h4>
          <div class="progress mini">
            <div class="progress-bar progress-bar-success" style="width:100%"> </div>
          </div>
          <p>Apr 2012 <span class="pull-right">Sep 2014</span></p>
        </div>
        <div class="col-sm-8">
          <h4><i><strong>Night loader</strong></i></h4>
          <p>Managed stock around a warehouse and organised stock for distribution</p>
          <ul>
              <li>Heavily involved in teamwork situations and required coordination</li>
              <li>Promoted to Senior Loader before leaving, involving management of a small team</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <h4>Marks and Spencers</h4>
          <div class="progress mini">
            <div class="progress-bar progress-bar-success" style="width:100%"> </div>
          </div>
          <p>Mar 2011 <span class="pull-right">Apr 2011</span></p>
        </div>
        <div class="col-sm-8">
          <h4><i><strong>Customer Sales assistant</strong></i></h4>
          <p>Volunteered sales assistant for customers</p>
          <ul>
              <li>Heavily involved in customer interaction and sales</li>
              <li>Opportunity gave me good communication skills and teamworking skills, and understanding of large company workings</li>
          </ul>
        </div>
      </div>
      <h3 id="cv-header"><strong>EDUCATION</strong></h3> 
      <hr>
        <ul class="education">
          <li>
              <div class="row">
              <div class="col-xs-2 year-indicator">
                <h4><strong>2014</strong></h4>
              </div>
              <div class="col-xs-10 description">
                <?php 
                  $value = "<span class=\"pull-right\"><i><small>Finishing 2018</small></i></span>";
                ?>
                <h4><strong>Computer Science Degree</strong> <i><?php echo $value; ?></i></h4>
                <h5><i><a href="http://www.le.ac.uk">University Of Leicester</a></i></h5>
                <p>First year: I achieved 85% on my first year, in modules such as Logic Programming, Data Structures, Computer Systems, etc.</p>
                <p>Second year: I achieved 89% in my second year, in modules such as Functional Programming, Automata Language and Computation, Operating Systems and Networks etc.</p>
                <p>Third year: Industrial placement at <a href="http://www.rolleragency.co.uk">Roller Agency</a></p>
                <p>Fourth year: <i>Pending</i></p>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
            <div class="col-xs-2 year-indicator">
              <h4><strong>2012</strong></h4>
            </div>
            <div class="col-xs-10 description">
              <h4><strong>A Levels</strong> <span class="pull-right"><i><small>Finished 2014</small></i></span></h4>
              <h5><i><a href="http://www.lutterworthcollege.com/">Lutterworth College</a></i></h5>
              <div class="row">
                <div class="col-sm-6">
                  <p><strong>A2</strong> Mathematics<span class="badge pull-right">A*</span><br/>
                     <strong>A2</strong> Physics<span class="badge pull-right">A</span><br/>
                     <strong>A2</strong> Computing<span class="badge pull-right">A</span><br/></p>
                </div>
                <div class="col-sm-6">
                  <p><strong>AS</strong> Chemistry<span class="badge pull-right">A</span></p>
                </div>
              </div>
            </div>
            </div>
          </li>
          <li>
            <div class="row">
            <div class="col-xs-2 year-indicator">
              <h4><strong>2010</strong></h4>
            </div>
            <div class="col-xs-10 description">
              <h4><strong>GCSE</strong><span class="pull-right"><i><small>Finished 2012</small></i></span></h4>
              <h5><i><a href="http://www.lutterworthcollege.com/">Lutterworth College</a></i></h5>
              <div class="row">
                <div class="col-sm-6">
                  <p>Mathematics<span class="badge pull-right">A*</span><br/>
                     Physics<span class="badge pull-right">A*</span><br/>
                     Chemistry<span class="badge pull-right">A*</span><br/>
                     Biology<span class="badge pull-right">A</span><br/>
                     Information Technology<span class="badge pull-right">A*</span><br/>
                     Systems and Control<span class="badge pull-right">A*</span><br/></p>
                </div>
                <div class="col-sm-6">
                  <p>English Literature<span class="badge pull-right">A</span><br/>
                     English Language<span class="badge pull-right">A</span><br/>
                     Geography<span class="badge pull-right">A</span><br/>
                     French<span class="badge pull-right">B</span><br/>
                     RE<span class="badge pull-right">A*</span><br/></p>
                </div>
              </div>
            </div>
            </div>
        </li>
      </ul>
    </div>
















    <div class="col-md-5">
      <h3 id="cv-header"><strong>CONTACT</strong></h3>
      <hr>
      <p>You can get into contact with me any one of the following ways</p>
      <div id="contact">
      <div class="row">
        <div class="col-xs-10">
          <h5>info@jordanfisher.me</h5>
        </div>
        <div class="col-xs-2"><a href="mailto:info@jordanfisher.me"><img class="pull-right" src="/web/media/contact/email.png"/></a></div>
      </div>
      <div class="row">
        <div class="col-xs-10">
          <h5>github.com/thementalgoose</h5>
        </div>
        <div class="col-xs-2"><a href="http://github.com/thementalgoose"><img class="pull-right" src="/web/media/contact/github.png"/></a></div>
      </div>
      <div class="row">
        <div class="col-xs-10">
          <h5>play.google.com/?id=Jordan+Fisher</h5>
        </div>
        <div class="col-xs-2"><a href="https://play.google.com/store/apps/developer?id=Jordan+Fisher"><img class="pull-right" src="/web/media/contact/google.png"/></a></div>
      </div>
      <div class="row">
        <div class="col-xs-10">
          <h5>linkedin.com/in/jordanspencerfisher</h5>
        </div>
        <div class="col-xs-2"><a href="http://linkedin.com/in/jordanspencerfisher"><img class="pull-right" src="/web/media/contact/linkedin.png"/></a></div>
      </div>
      <div class="row">
        <div class="col-xs-10">
          <h5>gplus.to/JordanFisher</h5>
        </div>
        <div class="col-xs-2"><a href="https://plus.google.com/u/0/100227586380017427860"><img class="pull-right" src="/web/media/contact/gplus.png"/></a></div>
      </div>
      </div>
      <h3 id="cv-header"><strong>SKILLS</strong></h3>
      <hr>
      <h4>Programming skills</h4>
      <div class="skills">
      <?php
        foreach ($ss as $obj) {
          $prog = ($obj -> progress);
          if ($prog > 70) {
          	echo "<div class=\"custom-progress\" role=\"progressbar\" data-percent=\"" . $obj -> progress . "\">";
          } else {
          	echo "<div class=\"custom-progress\" role=\"progressbar\" data-percent=\"" . $obj -> progress . "\">";
          }
          echo "<p class=\"skill-id\"><strong><span class=\"pull-left\">" . ($obj -> name) . "</span></strong></p>";
          echo "</div>";
        }
        ?>
      </div>
      <h4>Other</h4>
      <p>Alongside raw programming I have a lot of experience in some of the following technologies</p>
      <div class="skillsother">
      <?php
        foreach ($ssother as $obj) {
          $prog = ($obj -> progress);
          if ($prog > 70) {
          	echo "<div class=\"custom-progress\" role=\"progressbar\" data-percent=\"" . $obj -> progress . "\">";
          } else {
          	echo "<div class=\"custom-progress\" role=\"progressbar\" data-percent=\"" . $obj -> progress . "\">";
          }
          echo "<p class=\"skill-id\"><strong><span class=\"pull-left\">" . ($obj -> name) . "</span></strong></p>";
          echo "</div>";
        }
        ?>
      </div>
      <h3 id="cv-header"><strong>PERSONAL</strong></h3>
      <hr>
      <p>I have a strong passion for technology, and I find that whenever I can I am always exploring new projects and new concepts. I follow Google and regularly watch keynotes and tedtalks on technology</p>
      <p>I enjoy bike riding where I can, and I enjoy going to Ice Skating every few months or so :)</p>
      <p>I hold a full driving license and run my own car. I'm a bit of a petrol head :)</p>
      <h3 id="cv-header"><strong>DOWNLOAD</strong></h3>
      <hr>
      <p>Download a copy of my resume here</p>
      <a class="btn btn-primary btn-sm form" href="/web/docs/JordanFisher.pdf">Download</a>
    </div>
</div>
<script type="text/javascript" src="/web/js/jquery1.1.js"></script>
<script type="text/javascript" src="/web/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/web/js/custom.js"></script>
</body>
</html>
