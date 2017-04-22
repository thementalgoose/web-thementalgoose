<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jordan Fisher</title>
    <?php include "php/header.php"; ?>
</head>

<body id="page-top">

    <?php include "php/nav.php"; ?>

    <header>
        <div class="container">
            <div class="row">
                <div class="header-content">
                    <div class="header-content-inner">
                        <h1>I'm Jordan and I write <br/><span class="element"></span></h1> 
                        <a href="#info" class="btn btn-outline btn-xl page-scroll">About me</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container" id="info">
        <div class="row" style="margin-top: 5%; margin-bottom: 5%;">
            <div class="col-sm-4">
                <div class="card" style="padding: 10px;">
                    <h1 class="text-center" style="font-size: 70px;"><i class="fa fa-smile-o" aria-hidden="true"></i></h1>
                    <h1 class="text-center">Me, Myself<br/>and I</h1>
                    <p>My name is Jordan, but i'm also known by TheMentalGoose or TheFatPanda. I have been developing in some form or another since the long lost year of 2009, and I have a passion for technology. If you've like to know more about me or get into contact, checkout my <a href="/cv">Curriculum Vitae</a></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="padding: 10px;">
                    <h1 class="text-center" style="font-size: 70px;"><i class="fa fa-tasks" aria-hidden="true"></i></h1>
                    <h1 class="text-center">In the past<br/>of a future</h1>
                    <p>I enjoy Ice Skating every weekend and motorsport where I can. I like to keep up to date with what is going on in the world of technology. I have been doing <code>Java</code> since I was 14 and enjoy doing the android development side of Java. I use <code>C#</code>, <code>C++</code>, <code>Haskell</code>, and a lot of the major web languages (<code>XHTML</code>, <code>CSS</code>, <code>JS</code>, <code>PHP</code>, <code>MySQL</code>, <code>jQuery</code>, etc.). </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="padding: 10px;">
                    <h1 class="text-center" style="font-size: 70px;"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
                    <h1 class="text-center">Which way<br/>is up</h1>
                    <p>This website is something I've made for myself, and to be able to easily share knowledge between people and communities. Feel free to take a look around! There will be a section for all the projects i've worked on, a small blog section for me to make some writings and some markdown utilities for anyone who needs them</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="height: 40%; background-position: center center; background-repeat: no-repeat; background-size: cover; background: url('/img/leicester.png');">
        <div style="height: 40%;">
        </div>
    </div>


    <!-- <section id="download" class="download bg-primary text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="section-heading">Discover what all the buzz is about!</h2>
                    <p>Our app is available on any mobile device! Download now to get started!</p>
                    <div class="badges">
                        <a class="badge-link" href="#"><img src="img/google-play-badge.svg" alt=""></a>
                        <a class="badge-link" href="#"><img src="img/app-store-badge.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Unlimited Features, Unlimited Fun</h2>
                        <p class="text-muted">Check out what you can do with this app theme!</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! 
                                    <img src="img/demo-screen-1.jpg" class="img-responsive" alt=""> </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-screen-smartphone text-primary"></i>
                                    <h3>Device Mockups</h3>
                                    <p class="text-muted">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-camera text-primary"></i>
                                    <h3>Flexible Use</h3>
                                    <p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-present text-primary"></i>
                                    <h3>Free to Use</h3>
                                    <p class="text-muted">As always, this theme is free to download and use for any purpose!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-lock-open text-primary"></i>
                                    <h3>Open Source</h3>
                                    <p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-content">
            <div class="container">
                <h2>Stop waiting.<br>Start building.</h2>
                <a href="#contact" class="btn btn-outline btn-xl page-scroll">Let's Get Started!</a>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <section id="contact" class="contact bg-primary">
        <div class="container">
            <h2>We <i class="fa fa-heart"></i> new friends!</h2>
            <ul class="list-inline list-social">
                <li class="social-twitter">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="social-facebook">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="social-google-plus">
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
            </ul>
        </div>
    </section> -->

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> <a href="http://jordanfisher.me">jordanfisher.me</a></p>
            <p>~~ copyright info ~~</p>
        </div>
    </footer>

    <?php include "php/scripts.php" ?>

    <script>
      document.addEventListener('DOMContentLoaded', function(){
          Typed.new('.element', {
            strings: ["android apps", "java projects", "responsive web apps", "databases", "cool stuff", "APIs", "unit tests", "functional haskell", "C# programs"],
            typeSpeed: 30,
            backDelay: 1500,
            cursorChar: "_",
            loop: true
          });
      });
    </script>

</body>

</html>
