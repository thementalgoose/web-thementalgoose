<!DOCTYPE html>
<html>
<head>
  <title>Jordan Fisher - CV</title>
  <?php include "../php/header.php"; ?>
</head>
<body class="background-dark" id="page-top">

  <?php include "../php/nav.php"; ?>
  <div class="container content">
    <div class="row">
      <div class="col-xs-12">
        <div id="photo-header" class="text-center">
          <!-- PHOTO (AVATAR) -->
          <div id="photo">
            <img src="/img/me.png" alt="avatar">
          </div>
          <div id="text-header">
            <h2 class="text-center">Hi. I'm <strong color="#917382">Jordan</strong>, and I write code</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-center">
      <h3>
      <a href="https://gitlab.com/thementalgoose" class="circle link-gitlab"><i class="fa fa-gitlab" aria-hidden="true"></i></a> -
      <a href="https://play.google.com/store/apps/details?id=studio.roboto.hack24" class="circle link-google-play"><i class="fa fa-play" aria-hidden="true"></i></a> -
      <a href="https://www.linkedin.com/pub/jordan-fisher/107/6a/b8b" class="circle link-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> - 
      <a href="https://github.com/thementalgoose" class="circle link-github"><i class="fa fa-github" aria-hidden="true"></i></a> -
      <a href="https://plus.google.com/100227586380017427860" class="circle link-google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a> -
      <a href="mailto:thementalgoose@gmail.com" class="circle link-mail"><i class="fa fa-envelope" aria-hidden="true"></i></a> 
      </h3>
    </div>
    <div class="row box-padder">
      <div class="col-md-6">
        <?php
          $bday = strtotime('1995-10-12');
          $current = strtotime('today UTC');
          $days = ($current - $bday) / (60 * 60 * 24 * 365.25);
          $days = floor($days);
        ?>
        <!-- About -->
        <h1 class="colour-primary"><strong>>> About</strong></h1>
        <p>My name is Jordan, I'm <?php echo $days; ?> years old and I am a Computer Science student at the University Of Leicester with a passion for programming. I am always looking to increase my portfolio or get stuck in with another project, so send me a message if you think I can help you.</p>

        <!-- Work -->
        <h1 class="colour-primary"><strong>>> Work</strong></h1>
        <?php
          $start = strtotime('2016-06-13');
          $end = strtotime('2017-09-15');
          $current = strtotime('today UTC');
          $completed = (($current - $start) / ($end - $start)) * 100;
        ?>
          <!-- Roller -->
        <div class="row">
          <div class="col-sm-4">
          <h4>Roller Agency</h4>
            <div class="progress">
              <?php 
                if ($completed >= 100) {
                  echo '<div class="progress-bar progress-bar-success" style="width: ' . $completed . '%;"></div>';
                } else {
                  echo '<div class="progress-bar progress-bar-primary" style="width: ' . $completed . '%;"></div>';
                }
              ?>
            </div>
            <p>June 2016 <span class="pull-right">Sept 2017</span></p>
          </div>
          <div class="col-sm-8">
            <h4><strong>Android App Developer</strong></h4>
            <p>I have been working alongside a fantastic team of developers and designs to bring mobile and web apps to clients. I have gained experience in Android development and the ecosystem, as well as developing APIs in C#, web development in AngularJS, and enterprise solutions such as Firebase and Azure</p>
          </div>
        </div>

          <!-- Harveys -->
        <div class="row">
          <div class="col-sm-4">
          <h4>Harveys</h4>
            <div class="progress">
              <div class="progress-bar progress-bar-success" style="width: 100%;"></div>
            </div>
            <p>June 2015 <span class="pull-right">Sept 2015</span></p>
          </div>
          <div class="col-sm-8">
            <h4><strong>Quality Control Inspector</strong></h4>
            <p>Inspected return furniture for defects</p>
            <ul>
              <li>Lots of teamwork and communication skills required</li>
              <li>Constistent expectation of working to a high standard</li>
              <li>Position of responsibility, as my decisions affect company sales</li>
            </ul>
          </div>
        </div>

          <!-- Castle Freight -->
        <div class="row">
          <div class="col-sm-4">
          <h4>Castle Freight</h4>
            <div class="progress">
              <div class="progress-bar progress-bar-success" style="width: 100%;"></div>
            </div>
            <p>April 2012 <span class="pull-right">Sept 2014</span></p>
          </div>
          <div class="col-sm-8">
            <h4><strong>Night Loader</strong></h4>
            <p>Managed stock around a warehouse and organised stock for distribution</p>
            <ul>
              <li>Heavily involved in teamwork situations and required coordination</li>
              <li>Promoted to Senior Loader before leaving, involving management of a small team</li>
            </ul>
          </div>
        </div>

        <!-- Education -->
        <h1 class="colour-primary"><strong>>> Education</strong></h1>
        
        <ul class="education">
          <li>
              <div class="row">
              <div class="col-xs-2 year-indicator">
                <h4><strong>2014</strong></h4>
              </div>
              <div class="col-xs-10 description">
                                <h4><strong>Computer Science Degree</strong> <i><span class="pull-right"><i><small>Finishing 2018</small></i></span></i></h4>
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
      <div class="col-md-6">

        <!-- Projects -->
        <h1 class="colour-primary"><strong>>> Projects</strong></h1>
        <p>Recently I have just taken part in <a href="http://www.hack24.co.uk/">Hack24</a>, and developed an app called Am I Wrong whilst I was there.</p>
        <p>You can view all my projects <a href="/portfolio">here</a></p>

        <!-- Skills -->
        <?php
          $javadays = strtotime('2010-08-08');
          $now = strtotime('today UTC');
          $days = ($now - $javadays) / (60 * 60 * 24 * 365.25);
          $days = floor($days);
        ?>
        <h1 class="colour-primary"><strong>>> Skills</strong></h1>
        <p>I have been developing in Java for <?php echo $days; ?> years and been working at Roller Agency developing Android Applications in Java. I've dabbled in many other languages over my time at Roller, my modules at University and my personal projects outside of work</p>
        <div class="row text-center">
          <div class="col-xs-6 col-sm-3 card-invisible background-a" id="photo-percentage">
            <img src="/img/java.png"/>
            <h3>Java</h3>
          </div>
          <div class="col-xs-6 col-sm-3 card-invisible background-b" id="photo-percentage">
            <img src="/img/android.png"/>
            <h3>Android</h3>
          </div>
          <div class="col-xs-6 col-sm-3 card-invisible background-c" id="photo-percentage">
            <img src="/img/csharp.png"/>
            <h3>C#</h3>
          </div>
          <div class="col-xs-6 col-sm-3 card-invisible background-a" id="photo-percentage">
            <img src="/img/web.png"/>
            <h3>Web</h3>
          </div>
          <div class="col-xs-12"></div>
          <div class="col-xs-6 col-sm-3 card-invisible background-b" id="photo-percentage">
            <img src="/img/haskell.png"/>
            <h3>Haskell</h3>
          </div>
          <div class="col-xs-6 col-sm-3 card-invisible background-c" id="photo-percentage">
            <img src="/img/prolog.png"/>
            <h3>PROLOG</h3>
          </div>
          <div class="col-xs-6 col-sm-3 card-invisible background-a" id="photo-percentage">
            <img src="/img/python.png"/>
            <h3>Python</h3>
          </div>
          <div class="col-xs-6 col-sm-3 card-invisible background-b" id="photo-percentage">
            <img src="/img/c++.png"/>
            <h3>C++</h3>
          </div>
          <div class="col-xs-12"></div>
          <div class="col-xs-6 col-sm-3 card-invisible background-c" id="photo-percentage">
            <img src="/img/gradle.png"/>
            <h3>Gradle</h3>
          </div>
          <div class="col-xs-6 col-sm-3 card-invisible background-a" id="photo-percentage">
            <img src="/img/cucumber.png"/>
            <h3>Cucumber</h3>
          </div>
          <div class="col-xs-6 col-sm-3 card-invisible background-c" id="photo-percentage">
            <img src="/img/azure.png"/>
            <h3>Azure</h3>
          </div>
          <div class="col-xs-6 col-sm-3 card-invisible background-b" id="photo-percentage">
            <img src="/img/spring.png"/>
            <h3>Spring IO</h3>
          </div>
          <div class="col-xs-12"></div>
          <div class="col-xs-6 col-sm-3 card-invisible background-a" id="photo-percentage">
            <img src="/img/git.png"/>
            <h3>Git</h3>
          </div>
          <div class="col-xs-6 col-sm-3 card-invisible background-b" id="photo-percentage">
            <img src="/img/firebase.png"/>
            <h3>Firebase</h3>
          </div>
          <div class="col-xs-6 col-sm-3 card-invisible background-c" id="photo-percentage">
            <img src="/img/swift.png"/>
            <h3>Swift</h3>
          </div>
          <div class="col-xs-6 col-sm-3 card-invisible background-c" id="photo-percentage">
            <img src="/img/laravel.png"/>
            <h3>Laravel</h3>
          </div>
        </div>

        <!-- Personal -->
        <h1 class="colour-primary"><strong>>> Personal</strong></h1>
        <p>I have a strong passion for technology, and I find that whenever I can I am always exploring new projects and new concepts. I follow Google and regularly watch keynotes and tedtalks on technology</p>
        <p>I go Ice Skating every weekend and where I can</p>
        <p>I hold a full driving license and run my own car. I'm a bit of a petrol head :)</p>

        <!-- Paper -->
        <h1 class="colour-primary"><strong>>> Download</strong></h1>
        <p>Get into contact with me any way you like if you think I can help you</p>
        <p>You can grab a copy of my resume here</p>
        <a class="btn btn-info" href="#" disabled>Resume</a>
      </div>
    </div>
  </div>

  <div style="height: 30px;"></div>

  <?php include "../php/scripts.php" ?>

</body>
</html>
