<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
$mobile;
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
	header('Location: old/index.php?m=1');
} else {
	$mobile = false;
}
if (isset($_GET['m']) && $_GET['m'] == 1)
	header('Location: /old/old/v1/index.php?m=1');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="author" content="Jordan Fisher">
	<?php if($mobile == true) echo '<meta name="viewport" content="width=device-width, initial-scale=1">'; ?>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
	<link href="css/desktop.css" rel="stylesheet" type="text/css" />
	<title>Jordan Fisher</title>
	<script src="js/jquery-2.2.0.min.js"></script>
	<script src="js/header.js"></script>
	<script src="js/scrolling.js"></script>
	<script src="js/work.js"></script>
	<script src="js/active.js"></script>
</head>
<body>
<div class="header">
	<div class="centered">
		<div class="header_overview transparent">
			<div class="header_left">
				<h1 id="name">Jordan Fisher</h1>
			</div>
			<div class="header_right">
				<nav>
					<a href="#Home" data-scroll="Home" class="active smoothScroll">Home</a>
					<a href="#About" data-scroll="About" class="smoothScroll">About Me</a>
					<a href="#Skills" data-scroll="Skills" class="smoothScroll">Skill Set</a>
					<a href="#Education" data-scroll="Education" class="smoothScroll">Education</a>
					<a href="#Portfolio" data-scroll="Portfolio" class="smoothScroll">Portfolio</a>
					<a href="#Work" data-scroll="Work" class="smoothScroll">Work</a>
					<a href="#Contact" data-scroll="Contact" class="smoothScroll">Contact</a>
				</nav>
			</div>
		</div>
	</div>
</div>
<div class="content">
	<div class="overview"  id="home_div">
		<a class="anchor" name="Home"></a>
		<div class="vertical_center">
			<div class="home_wrapper">
				<p id="hi">Hello</p>
				<p id="intro">I'm Jordan, and I write code</p>
				<p>This website is old! Current version is avalable <a href="../../../">here</a></p>
				<hr width="50%" />
			</div>
		</div>
	</div>
	<div class="overview" id="about_div">
		<a style="position: absolute; margin-top: -167px;" name="About"></a>
		<div class="centered">
		 	<p><img id="profile_image_home" class="home_image" src="photos/profile.png" width="200px" height="200px"></p>
		 	<div class="padder_image"></div>
		 	<!-- <h1 class="centered_text">Me</h1>
		 	<p class="centered_text">I am a 20 year old Computer Science student studying at the University Of Leicester. Primarily a Java / Android developer, I will try my hand at anything! I love design, logic, and perfection.</p>
		 	 -->
		 	<div class="list_about">
		 	<div class="element_about" id="where">
		 		<h2 class="centered_text">Where</h2>
		 		<p>living and studying in <a id="text_link" href="https://goo.gl/maps/vNSXAXpBnrs">&#187;Leicestershire&#171;</a>, where i've<br/>lived all my life</p>
		 	</div>
		 	<div class="element_about" id="what">
		 		<h2 class="centered_text">What</h2>
		 		<p>Studying a degree in Computer Science at the<br/><a id="text_link" href="https://le.ac.uk/">&#187;University of Leicester&#171;</a> (2<sup>nd</sup> year)</p>
		 	</div>
		 	<div class="element_about" id="why">
		 		<h2 class="centered_text">Why</h2>
		 		<p>Because I am passionate about software development and programming</p>
		 	</div>
		 	</div>
		 	<div style="clear: both; padding-top: 50px"></div>
		 	<h2 class="centered_text" id="centered_nice_text">My name is Jordan Fisher, I'm
			<?php
			  //date in mm/dd/yyyy format; or it can be in other formats as well
			  $birthDate = "10/12/1995";
			  //explode the date to get month, day and year
			  $birthDate = explode("/", $birthDate);
			  //get age from date or birthdate
			  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
			    ? ((date("Y") - $birthDate[2]) - 1)
			    : (date("Y") - $birthDate[2]));
			  echo $age;
			?>
		 	 years old, and I have a passion for software development.<br/><br/>I will try my hand at anything that's required, and I am always looking to increase my portfolio, so contact me <a id="text_link" href="#Contact" class="smoothScroll">&#187;here&#171;</a> if you would like my help</h2>
		 	
		</div>
	</div>
	<div class="overview"  id="skills_div">
		<div class="padding_header"> </div>
		<a id="anchor_offset" name="Skills" data-anchor="Skills"></a>
		<div class="centered">
			<h1 class="centered_text" id="header_padder">Skills</h1>
			<p class="centered_text">Diverse range of programming experience</p>
			<div class="list">
				<div class="element centered_text" style="width: 25%;">
					<img src="photos/skills/java.png" width="60%" height="60%">
					<h2>Java</h2>
					<p>Advanced knowledge of Java, developing since I was 14. Intermediate - Advanced knowledge</p>
				</div>
				<div class="element centered_text" style="width: 25%;">
					<img src="photos/skills/android.png" width="60%" height="60%">
					<h2>Android</h2>
					<p>Developing since 2012, three applications published. Intermediate - Advanced knowledge</p>
				</div>
				<div class="element centered_text" style="width: 25%;">
					<img src="photos/skills/csharp.png" width="60%" height="60%">
					<h2>C#</h2>
					<p>1 years programming experience, developed a Battleships game and Mario game</p>
				</div>
				<div class="element centered_text" style="width: 25%;">
					<img src="photos/skills/web.png" width="60%" height="60%">
					<h2>Web</h2>
					<p>Knowledge of PHP, MySQL, XHTML, HTML5, CSS, JS, and JQuery. Also done Spring STS using MVC architecture</p>
				</div>
			</div>
			<div class="list">
				<div class="element centered_text" style="width: 25%;">
					<img src="photos/skills/cplusplus.png" width="60%" height="60%">
					<h2>Other</h2>
					<p>Basic knowledge of C++ (pointers and conventions)<br/>Basic PROLOG logic programming<br/>Basic Python</p>
				</div>
				<div class="element centered_text" style="width: 25%;">
					<img src="photos/skills/git.png" width="60%" height="60%">
					<h2>VCS and CI</h2>
					<p>Git and <a id="text_link_2" href="https://github.com/TheMentalGoose">&#187;Github&#171;</a> knowledge, using Travis-CI to perform continuous integration with Gradle</p>
				</div>
				<div class="element centered_text" style="width: 25%;">
					<img src="photos/skills/software.png" width="60%" height="60%">
					<h2>Software</h2>
					<p>Advanced working knowledge of Microsoft Office suite, Windows, Linux (including terminal) fast learner with new software</p>
				</div>
				<div class="element centered_text" style="width: 25%;">
					<img src="photos/skills/hardware.png" width="60%" height="60%">
					<h2>Hardware</h2>
					<p>Built computers from scratch, know about hardware specification with computers</p>
				</div>
			</div>			
			<div class="list"></div>
			<h2 class="centered_text" id="centered_nice_text">And growing...</h2>
		</div>
	</div>


	<?php
     $now = time(); // or your date as well
     $your_date = strtotime("2014-08-01");
     $datediff = $now - $your_date;
     $days = floor($datediff/(60*60*24));
     $width = floor(($days * 49) / 144);
    ?>
	<div class="overview"  id="education_div">
		<div class="padding_header"> </div>
		<a id="anchor_offset" name="Education" data-anchor="Education"></a>
		<div class="centered">
			<h1 class="centered_text" id="header_padder" style="padding-bottom: 30px;">Education</h1>
			<p class="larger_text_header" style="padding-bottom: 50px;">I've always enjoyed learning new information, it's probably the reason I got called a nerd! :)</p>
			<div style="width: 100%; height: 30px;">
				<div class="element" style="width: 5%;"><p style="font-size: 12px; text-align: start;">2010</p></div>
				<div class="element" style="width: 15%;"><p><strong>GCSE</strong></p></div>
				<div class="element" style="width: 10%;"><p style="font-size: 12px;">2012</p></div>
				<div class="element" style="width: 15%;"><p><strong>A Level</strong></p></div>
				<div class="element" style="width: 10%;"><p style="font-size: 12px;">2014</p></div>
				<div class="element" style="width: 40%;"><p><strong>Degree</strong></p></div>
				<div class="element" style="width: 5%;"><p style="font-size: 12px; text-align: end;">2019</p></div>
			</div>
			<div class="education_overview" style="margin-bottom: 20px;">
				<div class="education_gcse"></div>
				<div class="education_alevel"></div>
				<div class="education_degree" style="width: <?php echo $width; ?>px"></div>
			</div>
			<div class="centered_text educational" style="width: 100%;">
				<div id="education_gcse_info" class="element" style="width: 25%;">
				<p><a id="text_link" href="http://www.lutterworthcollege.com/">&#187;Lutterworth College&#171;</a></p>
				<div style="width: 100%">
					<div class="element" style="width: 30%"><p><strong>A*</strong></p></div>
					<div class="element" style="width: 70%"><p style="text-align: start;">Mathematics, Physics, Chemistry, Info Technology, RE, Design (Systems)</p></div></div>
				<div style="width: 100%">
					<div class="element" style="width: 30%"><p><strong>A</strong></p></div>
					<div class="element" style="width: 70%"><p style="text-align: start;">English Literature, English Language, Geography, Biology</p></div></div>
				<div style="width: 100%">
					<div class="element" style="width: 30%"><p><strong>B</strong></p></div>
					<div class="element" style="width: 70%"><p style="text-align: start;">French</p></div></div>
				</div>
				<div id="education_alevel_info" class="element" style="width: 25%;">
				<p><a id="text_link" href="http://www.lutterworthcollege.com/">&#187;Lutterworth College&#171;</a></p>
				<div style="width: 100%">
					<div class="element" style="width: 30%"><p><strong>A*</strong></p></div>
					<div class="element" style="width: 70%"><p style="text-align: start;">(A2) Mathematics</p></div></div>
				<div style="width: 100%">
					<div class="element" style="width: 30%"><p><strong>A</strong></p></div>
					<div class="element" style="width: 70%"><p style="text-align: start;">(A2) Physics, Computing<br/>(AS) Mathematics, Physics, Computing, Chemistry</p></div></div>
				</div>
				<div id="education_degree_info" class="element" style="width: 50%;">
					<p><a id="text_link" href="http://www.le.ac.uk/">&#187;University Of Leicester&#171;</a></p>
					<p>Degree in <strong>Computer Science</strong></p>
					<div class="list" style="width: 100%; margin: 0 auto;">
					<p>First year grade: <strong>1:1</strong> <i>86%</i></p>
					<p>Second year grade: <i>Pending</i></p>
					</div>
				</div>
				<div style="clear: both; height: 120px;"> </div>
			</div>
		</div>
	</div>

	<div class="overview"  id="portfolio_div">
		<div class="padding_header"> </div>
		<a id="anchor_offset" name="Portfolio" data-anchor="Portfolio"></a>
		<div class="centered">
			<h1 class="centered_text" id="header_padder">Portfolio</h1>
			<p class="larger_text_header centered_text" style="padding-top: 50px;">I don't have many projects to my name, and so I am forever looking to increase my knowledge-base
			<br/>The projects I do have are Android projects, some java games, and limited web development</p>
			<h2 class="centered_text" id="portfolio_header" style="padding-top: 50px;">Android projects</h2>
			<div class="list centered_text" style="width: 100%; margin: 0 auto;">
				<div class="element" style="width: 30%;">
					<h2>Driving Tutor</h2>
					<a href="photos/portfolio/full/drivingtutor.png"><img class="portfolio_image_padder" src="photos/portfolio/drivingtutor.png"/></a>
					<p><b>Driving Tutor</b> is an Android application designed to help people living in the UK learn to drive, 
					by providing an All-In-One solution to their revision. 
					<br/>You can download this application from <a id="text_link_2" href="https://play.google.com/store/apps/details?id=jsf.driving.drivingtutor">&#187;Google Play&#171;</a> now</p>
				</div>
				<div class="element" style="width: 30%; margin-right: 5%; margin-left: 5%;">
					<h2>CMAI</h2>
					<a href="photos/portfolio/full/cmai.png"><img class="portfolio_image_padder" src="photos/portfolio/cmai.png"/></a>
					<p>(<b>CMAI</b>) <b>C</b>yanogen<b>M</b>od <b>A</b>pp <b>I</b>nstaller, and this is a Mobile Application for Android that allows
					you to install custom versions of stock apps to any version of Android!
					<br/>You can download this application from <a id="text_link_2" href="http://forum.xda-developers.com/android/apps-games/app-cm-app-installer-t2959922">&#187;XDA Developers&#171;</a> right now</p>
				</div>
				<div class="element" style="width: 30%;">
					<h2>Upcoming</h2>
					<a href="photos/portfolio/full/schedule.png"><img class="portfolio_image_padder" src="photos/portfolio/schedule.png"/></a>
					<p>I am currently working on <b>Schedule</b>, an organization and homework management application. It
					is designed to manage your work schedule and improve organisation<br/>
					You can view the source code for the project <a id="text_link_2" href="https://github.com/thementalgoose/Schedule">&#187;here on Github&#171;</a></p>
				</div>
			</div>
			<div style="clear: both; padding-top: 50px;"> </div>
			<hr width="70%"/>
			<h2 class="centered_text" id="portfolio_header"style="padding-top: 50px;">Java projects</h2>
			<div class="list centered_text" style="width: 1000px; margin: 0 auto;">
				<div class="element" style="width: 30%;">
					<h2>Space invaders</h2>
					<a href="photos/portfolio/full/spaceinvaders.png"><img class="portfolio_image_padder" src="photos/portfolio/full/spaceinvaders.png" width="100%" height="200px"/></a>
					<p>A while ago I made a space invaders game using the Java Graphics library and swing libraries, and have good knowledge of games programming theory</p>
				</div>
				<div class="element" style="width: 30%; margin-right: 5%; margin-left: 5%;">
					<h2>Mini Game</h2>
					<a href="photos/portfolio/full/mini.png"><img class="portfolio_image_padder" src="photos/portfolio/full/mini.png" width="100%" height="200px"/></a>
					<p>I have just completed a project for a piece of University coursework, including heavy use of Swing libraries to make a Mini educational game.</p>
				</div>
				<div class="element" style="width: 30%;">
					<h2>All sorts</h2>
					<a href="photos/portfolio/full/chatserver.png"><img class="portfolio_image_padder" src="photos/portfolio/full/chatserver.png" width="100%" height="200px"/></a>
					<p>I've made a Quadratic Equation solver for my maths homework when I was 14 to a multi-threaded chat server run of a raspberry pi. You name it, i've probably done it at some point!</p>
				</div>
			</div>
			<div style="clear: both; padding-top: 50px;"> </div>
			<hr width="70%"/>
			<h2 class="centered_text" id="portfolio_header"style="padding-top: 50px;">Web develoment</h2>
			<div class="list centered_text" style="width: 65%; margin: 0 auto;">
				<div class="element" style="width: 47%; margin-right: 3%;">
					<h2>This website</h2>
					<a href="photos/portfolio/full/website.png"><img class="portfolio_image_padder" src="photos/portfolio/full/website.png" width="100%" height="200px"/></a>
					<p>This website was made using raw HTML, CSS, JS, JQuery, and PHP. It has been redesigned here on 20<sup>th</sup> January from the old design which can be captured <a id="text_link_2" href="old/index.php">&#187;here&#171;</a></p>
				</div>
				<div class="element" style="width: 48%; margin-left: 2%;">
					<h2>University Project</h2>
					<a href="photos/portfolio/full/uni.png"><img class="portfolio_image_padder" src="photos/portfolio/full/uni.png" width="100%" height="200px"/></a>
					<p>I have made websites for assignments using PHP and MySQL for simple querying, but also Spring STS (with Spring Security in MVC architecture) with MySQL database for a Management system</p>
				</div>
			</div>
		</div>
		<div style="clear: both; height: 50px;"> </div>
	</div>

	<?php
		$width = 1000;
		$days_ye = 5 * 365;

		$base = (strtotime("2011-01-01") / (60*60*24));
     	$ms = (strtotime("2011-03-01") / (60*60*24));
     	$ms_d = floor((30 * $width) / $days_ye);
     	$cf = (strtotime("2012-04-01") / (60*60*24));
     	$cf_d = floor((880 * $width) / $days_ye);
     	$hv = (strtotime("2015-06-01") / (60*60*24));
     	$hv_d = floor((100 * $width) / $days_ye);

     	$ms_i = floor((($ms - $base) * $width) / $days_ye);
     	$cf_i = floor(((($cf - $base) * $width) / $days_ye) - ($ms_i + $ms_d));
     	$hv_i = floor(((($hv - $base) * $width) / $days_ye) - ($cf_i + $cf_d));
	?>

	<div class="overview"  id="work_div">
		<div class="padding_header"> </div>
		<a id="anchor_offset" name="Work" data-anchor="Work"></a>
		<div class="centered">
			<h1 class="centered_text" id="header_padder">Work Experience</h1>
			<p class="larger_text_header" style="padding-top: 50px; padding-bottom: 50px; padding-right: 10%; padding-left: 10%; font-size: 20px;">I don't have any experience for work in programming, but I do have some work experience elsewhere, which hold some transferrable skills!</p>
			<div style="width: 100%; height: 30px;">
				<div class="element" style="width: 10%;"><p style="font-size: 12px; text-align: start;">2011</p></div>
				<div class="element" style="width: 20%;"><p style="font-size: 12px;">2012</p></div>
				<div class="element" style="width: 20%;"><p style="font-size: 12px;">2013</p></div>
				<div class="element" style="width: 20%;"><p style="font-size: 12px;">2014</p></div>
				<div class="element" style="width: 20%;"><p style="font-size: 12px;">2015</p></div>
				<div class="element" style="width: 10%;"><p style="font-size: 12px; text-align: end;">2016</p></div>
			</div>
			<div class="work_overview" style="margin-bottom: 20px;">
				<div class="work_filler" style="width: <?php echo $ms_i; ?>px"> </div>
				<div class="work_ms" style="width: <?php echo $ms_d; ?>px"></div>
				<div class="work_filler" style="width: <?php echo $cf_i; ?>px"> </div>
				<div class="work_freight" style="height: 20px; width: <?php echo $cf_d; ?>px"></div>
				<div class="work_filler" style="width: <?php echo $hv_i; ?>px"> </div>
				<div class="work_harveys" style="height: 20px; width: <?php echo $hv_d; ?>px"></div>
			</div>
			<div class="centered_text" style="clear: both;width: 1000px; margin: 0 auto;">
				<div id="work_ms_box" class="element" style="width: 30%;">
				<hr/>
				<h3><b>Marks and Spencers</b></h3>
				<p>Sales Assistant (volunteering)<br/>March 2011 - April 2011</p>
				<ul style="text-align: start; padding: 10px; padding-left: 20px;" >
					<li>Customer sales assistant for four weeks</li>
					<li>Very involved with customer interaction and customer sales.</li>
					<li>This opportunity gave me good team-working skills and communication skills working for a large company, seeing how these companies function</li>
				</ul>
				</p>
				</div>
				<div id="work_cf_box" class="element" style="width: 30%; margin-left: 5%; margin-right: 5%;">
				<hr/>
				<h3><b>Castle Freight</b></h3>
				<p>Night loader<br/>March 2014 - April 2014</p>
				<ul style="text-align: start; padding: 10px; padding-left: 20px;" >
					<li>I loaded and unloaded lorries and a warehouse with materials and stock for distribution</li>
					<li>I was heavily involved in situations where teamwork was essential and it required excellent communication skills.</li>
					<li>Promoted to senior loader before leaving, which involved management of team I was previously part of.</li>
					<li>Left due to time clashes with University.</li>
				</ul>
				</div>
				<div id="work_hv_box" class="element" style="width: 30%;">
				<hr/>
				<h3><b>Harveys Furniture Store</b></h3>
				<p>Quality Control Inspector:<br/>June 2015 - September 2015</p>
				<ul style="text-align: start; padding: 10px; padding-left: 20px;" >
					<li>I inspected furniture returned from customers and being sent to customers for defects.</li>
					<li>This position again required excellent teamwork skills and communication, as well as an expectation for working to a high standard.</li>
					<li>Left due to clashes with University.</li>
				</ul>
				</div>
			</div>
			<div style="clear: both; height: 100px;"> </div>
		</div>
	</div>

	<div class="overview"  id="contact_div">
		<div class="padding_header"> </div>
		<a id="anchor_offset" name="Contact" data-anchor="Contact"></a>
		<div class="centered">
			<h1 class="centered_text" id="header_padder">Contact</h1>
			<p class="larger_text_header">You can get in contact with me in any number of ways.<br/>
			If you would like me to do some web development for you, send me a message below. 
			<br/>You can also download my resume <a id="text_link_2" href="docs/JordanFisher.pdf">&#187;here&#171;</a></p>
			<div class="vertical_center">
				<div class="home_wrapper">
					<div class="home_left centered_text">
						<h2 style="padding-bottom: 50px;">Email me now</h2>
						<?php if ($_GET['sent'] == "true") echo "<p style='padding-bottom: 20px;'><font color='#88EE88'>Your message has been sent</font></p>"; ?>
						<?php if ($_GET['sent'] == "false") echo "<p style='padding-bottom: 20px;'><font color='#EE8888'>Your message hasn't been sent</font></p>"; ?>
						<form action="sendmail.php" method="post">
						<input class="inputform" type="text" name="name" placeHolder="Name" value="Unavailable" disabled/>
						<input class="inputform" type="email" name="email" placeHolder="Email" value="Unavailable" disabled />
						<input class="inputform" type="text" name="subject" placeHolder="Subject" value="Unavailable" disabled />
						<textarea type="text" name="message" placeHolder="Message" disabled>This service is currently unavailable whilst it undergoes refurbishment. Please check back later</textarea>
						<input class="submitform" type="submit" value="Email!" disabled/>
					</div>
					<div class="home_right">
						<h2 class="centered_text" style="padding-bottom: 50px;">My accounts</h2>
						<div class="contact_center">
							<h3><a id="text_link_2" href="mailto:thementalgoose@gmail.com"><img src="photos/contact/email.png" width="20px" height="20px"> thementalgoose@gmail.com</a></h3>
							<h3><a id="text_link_2" href="mailto:j.s.fisher@outlook.com"><img src="photos/contact/email.png" width="20px" height="20px"> j.s.fisher@outlook.com</a></h3>
							<h3><a id="text_link_2" href="https://www.linkedin.com/in/jordanspencerfisher"><img src="photos/contact/linkedin.png" width="20px" height="20px"> linkedin.com/in/jordanspencerfisher</a></h3>
							<h3><a id="text_link_2" href="http://gplus.to/JordanFisher"><img src="photos/contact/google-plus.png" width="20px" height="20px"> gplus.to/JordanFisher</a></h3>
							<h3><a id="text_link_2" href="http://github.com/TheMentalGoose"><img src="photos/contact/github.png" width="20px" height="20px"> github.com/TheMentalGoose</a></h3>
							<h3><a id="text_link_2" href="https://play.google.com/store/apps/developer?id=Jordan+Fisher"><img src="photos/contact/google.png" width="20px" height="20px"> play.google.com/store/...?id=Jordan+Fisher</a></h3>
						</div>
					</div>
				</div>	
			</div>
			<h2 class="centered_text" style="padding-bottom: 100px;">Thank you for viewing</h2>
		</div>
	</div>
</div>
</body>
</html>
