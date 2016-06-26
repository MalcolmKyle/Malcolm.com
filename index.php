
<?php
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Contact Form'; 
    $to = 'malcolm@malcolmmccullum.com'; 
    $subject = 'SimplyMalcolm message';
    
    $body ="From: $name\n E-Mail: $email\n Message:\n $message";
    // Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Please enter your name';
    }
    
    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }
    
    //Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 4) {
      $errHuman = 'Your anti-spam is incorrect';
    }
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
   /* $autoMessage="Thank you for contacting me. Please exuse the www-data in the name.\nI have  received your email and will be in contact soon. Feel free to reply back to this email if you have any other questions or concerns.\n\nThank you,\n\nMalcolm McCulllum";
    mail($email,"Let's stay in touch", $autoMessage,  "From: $to");*/
  } else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.<br>In the meantime directly email me: mmccullum1991@gmail.com</div>';
  }
}
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <!-- Used by Malcolm McCullum to build my website -->
  <title>Simply Malcolm</title>
  <meta charset="utf-8">
  <meta name="google-site-verification" content="LasYa2wKqFhV1FHsZKLKqXpHTqesOQJzRY_8FyHGSys" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script>
    var map;
    function initialize() {
      var mapProp = {
        center:new google.maps.LatLng(33.0000,90.0000),
        zoom:12,
        mapTypeId:google.maps.MapTypeId.HYBRID
      };
      map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <style>
    body {
        font: 20px Montserrat, sans-serif;
        line-height: 1.8;
        color: #f5f6f7;
    }
    #bio {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
    #travel {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
    #experience {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
    #contact {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
    #gmap_canvas {
      background-color: #1abc9c;
      color: #000000
      margin: auto;
      height: 440px;
      max-width: 770px;
      margin: 10px auto;
    }
    p {font-size: 16px;}
    .margin {margin-bottom: 45px;}
    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    .bg-1 {
        background-color: #1abc9c; /*  1abc9c Dark Blue */
        color: #ffffff;
    }
    .bg-2 { 
        background-color: #929AA9; /* 474e5d Green */
        color: #ffffff;
    }
    .bg-3 { 
        background-color: #474e5d; /* ffffff White */
        color: #ffffff;
    }
    .bg-4 { 
        background-color: #2f2f2f; /* Black Gray */
        color: #fff;
    }
    .bg-5{
        background-color: #709399; /* greyish */
        color: #ffffff;
    }
    .bg-6{
        background-color: #EFD309; /* easter pink */
        color: #2f2f2f;
    }
    .bg-7{
        background-color: #5FFF7E; /* easter green */
        color: #ffffff;
    }
    .container-fluid {
        padding-top: 70px;
        padding-bottom: 70px;
    }
    .fa-facebook {
      color:#3b5998;

    } 
    a:hover{
      color: #EFD62D;
    }
    .navbar {
        padding-top: 15px;
        padding-bottom: 15px;
        border: 0;
        border-radius: 0;
        margin-bottom: 0;
        font-size: 12px;
        letter-spacing: 5px;
        background-color: #2f2f2f;
    }
    .navbar-header a:hover{
      color: #1abc9c !important;
    }
    .navbar-nav li a:hover{
      color: #1abc9c !important;
    }
    .dropdown-menu{
      background-color: #1abc9c;
      color: white;
      border: 1px solid black;
    }
    .dropdown-menu a:hover{
      color: #1abc9c !important;
    }
    .dropdown:hover .dropdown-menu {
        display: block;
    }
    .scroll-top-wrapper {
      position: fixed;
      opacity: 0;
      visibility: hidden;
      overflow: hidden;
      text-align: center;
      z-index: 99999999;
        background-color: #1abc9c;
      color: #eeeeee;
      width: 50px;
      height: 48px;
      line-height: 48px;
      right: 30px;
      bottom: 30px;
      padding-top: 2px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
    }
    .scroll-top-wrapper:hover {
      background-color: #888888;
    }
    .scroll-top-wrapper.show {
        visibility:visible;
        cursor:pointer;
      opacity: 1.0;
    }
    .scroll-top-wrapper i.fa {
      line-height: inherit;
    }
 
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!--side Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://malcolmmccullum.com">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#bio">BIO</a></li>
          <li><a href="#travel">TRAVEL</a></li>
          <li><a href="#experience">EXPERIENCE</a></li>
          <li><a href="#resume">RESUME</a></li>
          <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- First Container -->
<div class="container-fluid bg-3 text-center" style="padding-top:150px; ">
  <h1 style="color: #1abc9c">Malcolm Kyle McCullum</h1>
</div>

<div class="container-fluid bg-3">
<div class="row" style="display: inline-block;">
<div class="col-sm-1"></div>
<div class="col-sm-1"></div>
  <div class="col-sm-4">
    <h2 style="color: #1abc9c;">Who am I?</h2>
    <h4 class="margin"><p>"Never be afraid to raise your voice for honesty and truth and compassion against injustice and lying and greed.</p>
    	<p>If all the people all over the world would do this....it would change the world."</p></h4>
    <h4>By: William Faulkner</h4><br>
     <p>I am currently a senior at Mississippi State University studying Computer Science graduating in December 2016. If anyone were to describe me they would definitely say I am a unique individual. I think outside of the box, love to be adventerous, and enjoy what I do and who I am. Well what exactly is that you may say? Keep looking and surely you will find out.</p>
  </div>
  <div class="col-sm-1"></div>
  <div class="container-fluid col-sm-4">
    <img src="CarSelfie.jpg" class="img-responsive img-circle margin" style="display:inline-block;" alt="myself" width="400" height="400">
  </div>
</div>
</div>

<!-- Bio section -->
<a name="bio"></a>
<div class="container-fluid bg-3 text-center" >
  <div class="col-sm-1"></div>
  <h3 style="color: #1abc9c;">My past</h3>
  <p>Most of my time was spent outdoors either playing my brother and sister,<br>
      my friends in the boyscouts, or my dog.</p>
  <p>I grew up in Petal, MS and lived there for 18 years of my life.</p>
  <br>
  <p>For those of you that do not know where that is then there is a map just below.</p>
  
</div>
  <!-- Div to contain the map of Petal -->
  <div class="container-fluid bg-3 text-center" style="color: #000000;">
  <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;widt: 600px;'><div id='gmap_canvas'> </div><div ><small><a href="http://embedgooglemaps.com" style="color: #000000;">                 embed google maps             </a></small></div><div><small><a href="http://www.autohuren.world/">autohuren</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(31.3465627,-89.26006050000001),mapTypeId: google.maps.MapTypeId.HYBRID};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(31.3465627,-89.26006050000001)});infowindow = new google.maps.InfoWindow({content:'<strong color=#000000>My hometown</strong><br color=#000000>Petal, MS<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>
<div class="container-fluid bg-3 text-center">
<div class="col-sm-1"></div>
  <div class="col-sm-1"></div>
  <div class="col-sm-8">
  <p>I would have to say that my childhood was a fairly normal one. I was either in school, playing in the woods with my cousins, riding our four-wheelers around, or just enjoying time with my family.<br>Some of my happiest moments are all of us packing up and driving down to the beach or having getting ready for birthdays or holidays.<br>
  Those were always very speical around our house. I guess that is how I adopted the philosophy of no matter what is going on, stop and enjoy the good time we have becasue we never know what is coming next.</p>
  </div>
  </div>
</div>
<div class="container-fluid text-center bg-2 " style="color: yellow;" >
  <p class="italic">"Nothing can stop the man with the right mental attitude from achieving his goal;<br> nothing on earth can help the man with the wrong mental attitude."</p>
--Thomas Jefferson
</div>
<!-- Experience section -->
<a name="experience"></a>
<div class="container-fluid bg-3 text-center" style="padding-top: 100px;">
  <h3 class="margin" style="color: #1abc9c;">What Am I?</h3>
  <p>I am just another voyager on this brisk journey called life.</p>
  <p>Currently a student at Mississippi State University where I am studying computer science. Go Bulldogs!</p>
  <P>My life has been full of twists and turns, but I am here, in this moment, now and I will make the most of it.</P>
  <a href="https://www.linkedin.com/in/malcolm-mccullum-b970aa116"
     class="btn btn-default btn-large">Take a look at my LinkedIn</a><br>
  <a href="https://github.com/MalcolmKyle"
    class="btn btn-default btn-large">Gander at my GitHub account</a><br>
</div>

<a name="resume"></a>
<div class="container-fluid bg-3 text-center" style="padding-top: 100px;">
  <h2 class="margin" style="color: #1abc9c;">Resume</h2>
  <a href="#contact"
    class="btn btn-default btn-large">Download my resume</a><br>
</div>

<div class="container-fluid bg-3">
<div class="row" style="display: inline-block;">
<div class="col-sm-1"></div>
<div class="col-sm-1"></div>
  <div class="col-sm-4">
<!-- Left Column -->
    <h3 style="color: #1abc9c;">Education</h3>
    <h4 class="margin"><p>Mississippi State University - December 2016</p>
    <p>Bachelor of Science - Computer Science
    Mississippi State University, Starkville, MS 39759</p></h4>

    <h3 style="color: #1abc9c;">Skills</h3>
    <h4 class="margin"><p>C/C++, Python, Javascript, MySQL, PHP, C#, SQL, CSS, LAMP, Bootstrap, Leadership, Public speaking, Software engineering, Web development</p>
    <p>Related courses: data communications, cryptography, website and database developement, software engineering, and algorithmic analysis</p></h4>           
  </div>

  <div class="col-sm-1"></div>

<!-- Right column -->
  <div class=" col-sm-4">
    <h3 style="color: #1abc9c;">Awards and Activities</h3>
      <h4 class="margin"><p>Floor Supervisor and Building Supervisor of the year - The Joe Frank Sanderson Center</p>
        <p>Information Assurance Certificate - Mississippi State University</p>
        <p>QPR Gatekeeper - The Joe Frank Sanderson Center</p>
        <p>Habitat for Humanity Home Rebuild – Mississippi State University</p>
        <p>Academic Competiveness Grant Recipient – Mississippi State University</p>
        <p>IEEE member-local MSU Electrical and Computer Engineering Chapter</p>
        <p>Spanish/Math tutor and Engineering Entrepreneur competition – Mississippi State University</p>
        <p>CPR, First-Aid, and AED Certified</p>
      </h4>      
    </div>
    </div>
<div class="row" style="display: inline-block;">
    <div class="col-sm-1"></div>
    <div class="col-sm-1"></div>
    <div class="col-md-8">
    <h3 class="margin" style="color: #1abc9c;">Experience</h3>
    <h4 class="margin"><p style="color: #1abc9c; text-align margin-left: " >Protection1 Security Solutions<br>Summer Sales Internship</p>
          <p style="color: #EFD62D;">May 2016 - July 2016</p>
          <p>Protection1 is one of the nation's leader in security solutions for national, commercial, and residential customers. I have years of experience in customer service and leadership so this internship, while not directly related to computer science, was a great opportunity to develop my skills of working in a team consisting of various backgrounds and skills, learn about the sales process and further my communication skills, and to develop a product that has never been produced in the security industry before. The specifics of the internship in which I was able to produce and develop my leadership, sales, and innovative skills are listed below.</p>

          <p>- Door to door sales for home security and home automation that Proection1 provides</p>
          <p>- Business to business sales</p>
          <p>- Helped develop the launch of a new product never before seen in this market</p>
          <p>- Developed a marketing strategy and brand development for this new product</p>
          <p>- Contacted numerous businesses and helped plan a social/networking event for the release of the new product</p>
          <p>- Generated new business leads for sales representatives to investigate further</p>
          <p>- Group final project to adapt and refine a current process which will be presented to the CEO and other members of the C-Suite executives</p>
          <p>The group final project in which we assessed and refined the process in which areas sales representatives are assigned. Normally, there is tons of research done on which cities for the team of sales reps to go to, but once they are there the neighborhoods and areas they visit is up to them. My partner and I researched years of data and analyzed the data across many specifics to determine the most profitable areas for a sales rep to visit. The project is still underway. At the end we will be presenting our findings and presenting an alternative process for the sales reps which will hopefully be implemented.</p>
    </h4>
    <h4 class="margin"><p style="color:  #1abc9c; text-align right: ">The Joe Frank Sanderson Center at Mississippi State University</p>
          <p>January 2010 - Present</p>
          <p style="color:  #EFD62D; text-align right: ">Building Supervisor
          <p style="color:  #EFD62D; text-align right: ">June 2012 - Present</p>
          <p>- Handle all patron issues within the 5 functional areas (Aquatics,
          Outdoor Adventures, Intramurals, Sport Clubs, and Fitness)</p>
          <p>- Supervise and manage customer service and floor supervisor employees</p>
          <p>- Minimize emergency management throughout entire facility</p>
          <p>- Help coordinate, train, and supervise new hires and interviewees</p>
          <p style="color: #EFD62D; text-align right: ">Floor Supervisor</p>
          <p style="color:  #EFD62D; text-align right: ">August 2010 – June 2012</p>
          <p>- Maintain hourly demographic reports</p>
          <p>- Enforce building policies for patrons to ensure safety in all areas</p>
          <p style="color: #EFD62D; text-align right: ">Customer Service Desk Attendant</p>
          <p style="color:  #EFD62D; text-align right: ">January 2010 – August 2010</p>
          <p>- Handle cash register and credit card transactions</p>
          <p>- Welcome patrons in friendly manner while providing adequate responses to complaints,</p>
          concerns, and requests.
          <p>- Handle equipment issue and daily upkeep of equipment and inventory report</p></h4>

    <h4><p style="color: #1abc9c;">Research Assistant</p>
            <p style="color: #EFD62D;">June 2013 – August 2014</p>
            <p>STaRS (Social Therapeutic and Robotic Systems) Research Lab and
            CAVS (Center for Advanced Vehicular Systems)</p>
            <p>- Researched and conducted HRI (Human and Robotic Interaction) studies</p>
            <p>- Developed gesture recognition system with Kinect and Turtlebot
            integration using C#</p>
            <p>- ITAR and OPSEC trained</p>
            <p>Images source and more information  on  the project can be found  at <a href="http://www.stars.msstate.edu/research/past-projects/">S.T.A.R.S  Lab</a>.</p><br>

            <p><img src="turtlebot.jpg" height="200" width="320" alt="Turtlebot">
            <img src="user_controls.jpg" height="180" width="320" alt="Eiffel Tower"></p>
    </h4>
    </div>
    </div>

    </div>
  </div>

    


<!--Carousel Source: http://www.w3schools.com/bootstrap/bootstrap_carousel.asp -->
<!--
<div class="container-fluid bg-3 text-center" >
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>
-->
  <!-- Wrapper for slides --> 
  <!--
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="petalHigh.jpg" alt="Petal High">
      <div class="carousel-caption">
        <h3>Petal High School</h3>
        <p>The high school I went to a long, long time ago.</p>
      </div>
    </div>
    <div class="item">
      <img src="swimming.jpg" alt="swimming">
      <div class="carousel-caption">
        <h3>Swim Team</h3>
        <p>I always loved swimming, and ended up becoming top 25 in the state.</p>
      </div>
    </div>
    <div class="item">
      <img src="boyScouts.jpg" alt="Boy Scouts">
      <div class="carousel-caption">
        <h3>Boy Scouts of America</h3>
        <p>Growing up I mainly played outside instead of staring at the t.v. screen.</p>
        <p>Naturally, I gravitate to the outdoors, and loved being apart of the BSOA.</p>
      </div>
    </div>
    <div class="item">
      <img src="MeAndMom.jpg" alt="Mom and I">
      <div class="carousel-caption">
        <h3>My Mother</h3>
        <p>My mom was always a very influential part of my life and made me the man I am today.</p>
      </div>
    </div>
    <div class="item">
      <img src="FIRST.jpg" alt="Robotics">
      <div class="carousel-caption">
        <h3>FIRST</h3>
        <p>In high school I joined the FIRST Robotics Club.<br>
            It was definitely where I learned how awesome being a nerd was, and how much fun you can have with like-minded people.</p>
      </div>
    </div>
    <div class="item">
      <img src="ava.jpg" alt="Ava Danielle"> 
      <div class="carousel-caption">
        <h3>Ava Danielle</h3>
        <p>My niece! She constantly brings light to my day, and reminds me to stay cheerful.</p>
      </div>
    </div>
  </div>
-->
  <!-- Left controls -->
<!--  
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  -->
  <!-- Right controls -->
  <!--
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
-->
<!-- End bio section -->

<!-- Begin Travel Section -->
<a name="travel"></a>
<div class="container-fluid text-center bg-3" style="padding-top: 100px;">    
  <h3 class="margin" style="color: #1abc9c;">Where To Find Me?</h3><br>
  <div class="margin">
    <p>Most of my time is spent studying, working, or in class. I am a full-time student, and work about 20 hours a week so I stay fairly busy.</p>
    <p>
      In my spare time I try to spend most of my time with my friends. They are the cornerstone of my life by holding me together<br> when things get rough, and they always have my best interest in mind, most of the time :D.</p>
  </div>
    <div class="container-fluid bg-3 text-center">
      <img src="AlcalaSquare.jpg" class="img-responsive center" style="width:60%" alt="Acala town square"><br>
      <p>Alcalá de Henares, Spain<br><a href="https://en.wikipedia.org/wiki/Alcal%C3%A1_de_Henares" style="color: #000000 !important; text-decoration: none;">(Click to look up the location)</a></p>
      <div class="col-sm-1"></div>
  <div class="col-sm-1"></div>
  <div class="col-sm-8">
      <p>In the summer of 2013 I found myself walking down the cobblestone streets of Alcala de Henares, Spain, and it was one of the most interesting and cultural experiences in my life.</p>
      <p>I have always been fascinated with the Spanish language and loved learning more about how it is so different, and yet similar,<br> to the English language. That is possibly what has sparked some of my interests in computer science. <br>I have always considered speaking, words, writing, and language to be the most practical way for one human being to communicate with another.</p> 
    </div>
    </div>
    <div class="container-fluid bg-3 text-center"> 
      <img src="NegroProblem.jpg" class="img-responsive center" style="width:60%" alt="Society today"><br>
      <div class="col-sm-1"></div>
  <div class="col-sm-1"></div>
  <div class="col-sm-8">
  <p>I recently had the wonderful experience to explore Atlanta, GA, and it was there that I toured this particular exhibit. <br>This photo was taken in the Human and Civil Rights Museum in Atlanta, GA right beside the World of Coke and the Atlanta Aquarium.</p>
      <p>With everything going on recently with racism, Donlad Trump's rude and unacceptive behavior, and the past I think this quote is <br>very important for understanding the type of past that we have come from, and forge the future with the past in mind.</p>
    </div>
    </div>
    <div class="container-fluid bg-3 text-center"> 
      <img src="RefugeeBridge.jpg" class="img-responsive center" style="width:60%" alt="TheBridge"><br>
      <p>When the time allots, I love to explore nature and all the wonderful things Mother Nature has to offer us.</p>
      <p>This picture was taken at The Noxubee Refuge.</p>
    </div>
</div>

	<a name="contact"></a>
  <div class="container-fluid bg-3  text-center" style="padding-top: 100px;" >
  <h1 class="margin" style="color: #1abc9c;">Let's stay in contact</h1>

<table class="container-fluid text-center"> 
    <tr>
      <td width="15%"><a href="https://www.facebook.com/malcolm.mccullum"><i class="fa fa-facebook-square fa-4x"></i></a></td>
      <td width="15%"><a href="https://www.instagram.com/malcolmkyle/"><i class="fa fa-camera-retro fa-4x"></i></a></td>
      <td width="15%"><a href="https://twitter.com/MalcolmKyle"><i class="fa fa-twitter-square fa-4x"></i>
</a></td>
      <td width="15%"><a href="https://www.linkedin.com/in/malcolm-mccullum-b970aa116"><i class="fa fa-linkedin-square fa-4x"></i>
</a></td>
    </tr>
  </table>
  </div>
<!-- Contact me form! -->
  <div class="container-fluid text-center bg-3" style="margin: 0 auto;" align="center">
  
<form class="form-horizontal" role="form" method="post" action="index.php">
  <div class="form-group">
    <label for="name" class="col-sm-2 col-sm-offset-1 control-label" style="color: #1abc9c;">Name</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="name" name="name" placeholder="First and Last Name" value="" >
      <?php echo "<p style='color:yellow'>$errName</p>";?>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 col-sm-offset-1 control-label"  style="color: #1abc9c;">Email</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="" >
      <?php echo "<p style='color:yellow'>$errEmail</p>";?>
    </div>
  </div>
  <div class="form-group">
    <label for="message" class="col-sm-2 col-sm-offset-1 control-label" style="color: #1abc9c;">Message</label>
    <div class="col-sm-8">
      <textarea class="form-control" rows="4" name="message" placeholder="I gladly take any kind of advice or criticism anytime. "></textarea>
      <?php echo "<p style='color:yellow'>$errMessage</p>";?>
    </div>
  </div>
  <div class="form-group">
    <label for="human" class="col-sm-2 col-sm-offset-1 control-label" style="color: #1abc9c;">1 + 3 = ?</label>
    <div class="col-sm-5 ">
      <input type="text" class="form-control" id="human" name="human" placeholder="Forgive the human test..." >
      <?php echo "<p style='color:yellow'>$errHuman</p>";?>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10 col-sm-offset-1">
      <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
       <?php echo $result ?>
    </div>
  </div>
</form>
</div>

<!-- Source: http://www.webtipblog.com/adding-scroll-top-button-website/ -->
<!-- Back to the top icon -->
<div class="scroll-top-wrapper">
  <span class="scroll-top-content">
    <i class="glyphicon glyphicon-arrow-up"></i>
  </span>
</div>

<!-- Scroll to the top functions -->
<script>
 
$(function(){
 
  $(document).on( 'scroll', function(){
 
    if ($(window).scrollTop() > 100) {
      $('.scroll-top-wrapper').addClass('show');
    } else {
      $('.scroll-top-wrapper').removeClass('show');
    }
  });
  $('.scroll-top-wrapper').on('click', scrollToTop);
});

function scrollToTop() {
  verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
  element = $('body');
  offset = element.offset();
  offsetTop = offset.top;
  $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}
</script>
<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
	<table style="width: 100%">
		<tr>
			<td>Created by: Malcolm Kyle McCullum</td>
      <td>With a little help from <a href="http://getbootstrap.com/">Bootstrap</a></td>
      </tr>
	</table>
</footer>
</body>
</html>
