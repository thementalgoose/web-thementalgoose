<?php
    /* Birthday calculation!
     */
    //date in mm/dd/yyyy format; or it can be in other formats as well
    $birthDate = "10/12/1995";
    //explode the date to get month, day and year
    $birthDate = explode("/", $birthDate);
    //get age from date or birthdate
    $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
       ? ((date("Y") - $birthDate[2]) - 1)
       : (date("Y") - $birthDate[2]));
    
    /* Education calculation
     */
    $now = time(); // or your date as well
    $your_date = strtotime("2018-08-01");
    $datediff = $your_date - $now;
    $days = floor($datediff/(60*60*24));
    $width = floor(((1440 - $days) * 100) / 1440);

    /**
     *   Header
     */
    $name             = "Jordan Fisher";
    $header_hello     = "Hi";
    $header_intro     = "I'm Jordan, and I write code";

    /**
     *    About me
     */ 
    $about_me         = "I'm " . $age . " years old studying Computer Science at the <a href=\"#\">University of Leicester<span class=\"glyphicon glyphicon-link\" aria-hidden=\"true\"></span></a>";
    $about_passion    = "I have a passion for software development. If I don't already know something, I'm more than willing to have a go at it. I am always looking to increase my portfolio, so if you think I can help you or are interested in getting some work done, please send me a message below";
    $about_where      = "I'm lived in <a href=\"https://www.google.com/maps/place/Leicester,+UK/@52.6360565,-1.2011402,12z/data=!3m1!4b1!4m2!3m1!1s0x487742ab49b76c73:0x9a151d2a6fb49cb8\">Leicestershire<span class=\"glyphicon glyphicon-link\" aria-hidden=\"true\"></span></a> all my life";
    $about_what       = "Computer Science Student";
    $about_why        = "Because I love working with technology";

    /**
     *    Skills
     */
    $skills_java      = "I have been developing primarily in Java since I was 14, and have intermediate - advanced knowledge";
    $skills_android   = "I have two applications on the play store and a third released to the developer community";
    $skills_csharp    = "2 years programming experience in C# from college studies, making a small mario game and a chat client";
    $skills_web       = "4 years web development experience, including use of XHTML, PHP, MySQL, CSS, jQuery, HTML5, and bootstrap";
    $skills_cplusplus = "Basic knowledge of C++ including conventions, such as pointers, conventions, etc.";
    $skills_other     = "Basic knowledge of Python, Haskell functional programming and PROLOG logic programming";
    $skills_os        = "Advanced knowledge of both Windows and Linux operating systems, including shell commands, troublshooting, etc.";
    $skills_software  = "Advanced knowledge of office and WPS suite, troubleshooting software issues, fast learner of new software";
    $skills_hardware  = "Regularly troubleshoot hardware, can build a PC from scratch and replace components etc.";
    $skills_git       = "Intermediate - Advanced knowledge of git version control, use of Distributed VCS for documents and university control";
    $skills_unittest  = "Use of automated testing using JUnit and Cucumber running on Travis CI server";
    $skills_ides      = "Use of Spring Tool Suite to develop Spring web application for university project (including Hibernate to perform ORM)";

    /**
     *    Education
     */
    $uni_title        = "<a href=\"http://www.le.ac.uk\">University Of Leicester</a>";
    $uni_desc         = "Studying for a Bachelors degree in Computer Science. <i>Specific results available on request</i>";
    $uni_1_title      = "First year: <strong>85% (1st)</strong>";
    $uni_1_desc       = "Modules include: <br/>Program design, Logic programming, Data structures, Computer Systems, Web applications, etc.";
    $uni_2_title      = "Second year: <i>In Progress</i>";
    $uni_2_desc       = "Semester 1 grade: <strong>86% (1st)</strong> <br/> <br/> Modules include: <br/>Automata Language and Computation, Software Engineering, Operating systems and networking, etc.";
    $uni_p_title      = "Placement year";
    $uni_p_desc       = "I have managed to secure a year long industrial placement at <a href=\"http://www.rolleragency.co.uk\">Roller agency</a> as a placement Android developer. I am very much looking forward to working with them and gaining valuable experience in the world of software development";
    $uni_3_title      = "Final Year: <i>N/A</i>";
    $uni_3_desc       = "Starting August 2017";

    $edu_extra        = "Outstanding student award<br/>Best physicist in the school<br/>Top mathematician in the school";

    /**
     *    Work
     */
    $ptflo_desc = "Source code is available for this website, Driving Tutor and CMAI on <a href=\"https://github.com/thementalgoose\">Github</a>. If you request any further source code please message me and i'll see if I can find it and send it";
    class Ptflo {
        public $title;
        public $img;
        public $description;
        public $github;
        public $link;
    }
    $p_dt = new Ptflo();
    $p_dt -> title       = "<a href=\"projects/drivingtutor/\">Driving Tutor</a>";
    $p_dt -> img         = "img/portfolio/drivingtutor.png";
    $p_dt -> description = "<strong>Driving Tutor</strong> is an Android application designed to help people living in the UK learn to drive, by providing an All-In-One solution to their revision.";
    $p_dt -> github      = "https://github.com/thementalgoose/DrivingTutor";
    $p_dt -> link        = "https://play.google.com/store/apps/details?id=jsf.driving.drivingtutor";

    $p_cmai = new Ptflo();
    $p_cmai -> title       = "<a href=\"projects/cmai/\">CyanogenMod App Installer</a>";
    $p_cmai -> img         = "img/portfolio/cmai.png";
    $p_cmai -> description = "<strong>C</strong>yanogenMod <strong>A</strong>pp <strong>I</strong>nstaller (<strong>CMAI</strong>), and this is a Mobile Application for Android that allows you to install custom versions of stock apps to any version of Android!";
    $p_cmai -> github      = "https://github.com/thementalgoose/CMAI";
    $p_cmai -> link        = "http://forum.xda-developers.com/android/apps-games/app-cm-app-installer-t2959922";

    $p_retro = new Ptflo();
    $p_retro -> title       = "Retro Games";
    $p_retro -> img         = "img/portfolio/spaceinvaders.png";
    $p_retro -> description = "A while ago I made a space invaders game using the Java Graphics library and swing libraries, and have good knowledge of games programming theory";

    $p_edu = new Ptflo();
    $p_edu -> title       = "Education Mini game";
    $p_edu -> img         = "img/portfolio/mini.png";
    $p_edu -> description = "I have just completed a project for a piece of University coursework, including heavy use of Swing libraries to make a Mini educational game.";

    $p_net = new Ptflo();
    $p_net -> title       = "Networking";
    $p_net -> img         = "img/portfolio/chatserver.png";
    $p_net -> description = "I've made a Quadratic Equation solver for my maths homework when I was 14 to a multi-threaded localhost chat server run of a raspberry pi. You name it, i've probably done it at some point!";

    $p_web = new Ptflo();
    $p_web -> title       = "This website";
    $p_web -> img         = "img/portfolio/web.png";
    $p_web -> description = "Alongside this website using the bootstrap template, I developed the old version of this website, along with using the Spring framework to make a fully functional flatfinder website, designed for students as part of my university work.";
    $p_web -> link        = "old/";

    $portfolio = array($p_dt, $p_cmai, $p_retro, $p_edu, $p_net, $p_web);


    /** 
     *    Work
     */
    class Work {
        public $title;
        public $desc;
        public $points;
        public $percentage = 100;
    }

    $work_ms = new Work();
    $work_ms -> title      = "Marks and Spencers";
    $work_ms -> desc       = "Sales assistant (volunteering) from <br/><strong>March 2011</strong> until <strong>April 2011</strong> (4 weeks)";
    $work_ms -> points     = array(
        "Very involved with customer interaction and customer sales.",
        "This opportunity gave me good team-working skills and communication skills working for a large company, seeing how these companies function");

    $work_cf = new Work();
    $work_cf -> title      = "Castle Freight";
    $work_cf -> desc       = "Night loader from <br/><strong>April 2012</strong> until <strong>September 2014</strong> (2 years 5 months)";
    $work_cf -> points     = array(
        "I loaded and unloaded lorries and a warehouse with materials and stock for distribution",
        "I was heavily involved in situations where teamwork was essential and it required excellent communication skills.",
        "Promoted to senior loader before leaving, which involved management of team I was previously part of.",
        "Left due to time clashes with University");

    $work_harveys = new Work();
    $work_harveys -> title      = "Harveys Furniture Store";
    $work_harveys -> desc       = "Quality Control Inspector from <br/><strong>June 2015</strong> until <strong>September 2015</strong> (3 months)";
    $work_harveys -> points     = array(
        1 => 'I inspected furniture returned from customers and being sent to customers for defects.',
        2 => 'This position again required excellent teamwork skills and communication, as well as an expectation for working to a high standard.');

    $work = array($work_ms, $work_cf, $work_harveys);
?>