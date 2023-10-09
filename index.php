<!DOCTYPE html>

<!--
---------------------------------------------
Website created and maintained by Alex Testin
---------------------------------------------
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#F1B82D">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="University of Missouri Student's Underwater Robotics Foundation">
    <title>MIZZOU SURF</title>
    <meta property="og:title" content="Mizzou SURF" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://mizzousurf.com/" />
    <meta property="og:image" content="http://mizzousurf.com/images/underwaterTiger.jpg" />
    <meta property="og:description" content="Student's Underwater Robotics Foundation is a student organization that strives to implement the knowledge of engineering courses- utilizing them by manufacturing marine robotics projects. SURF is a competition team with an element of robotic research." />
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- change to style.css for testing -->
    <link rel="stylesheet" type="text/css" href="style.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Play" media="none">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway" media="none">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Julius+Sans+One" media="none">
<script>
//facebook widget
window.onload = function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.async = true;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
    fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk');

      //mobile view compact menu
      function showmenu() {
          document.getElementById('nav').classList.toggle('show');
      }

      //hide welcome message on scroll
      function yScroll(){
          main = document.getElementById('main');
          yPos = window.pageYOffset;
          main.style.transitionDuration = "0.3s";
          if(yPos > (document.documentElement.clientHeight / 6)) {
              main.style.opacity = "0";
        } else {
            main.style.opacity = "1";
        }
      }
      window.addEventListener('scroll', yScroll);

      //slide in UI onload
      window.onload = function() {
          head = document.getElementById('headNav');
          head.style.top = "0px";
          arrow = document.getElementById('scrollIndicator');
          arrow.style.margin = "0px";
          main = document.getElementById('main');
          yPos = window.pageYOffset;
          if(yPos > (document.documentElement.clientHeight / 6)) {
              main.style.opacity = "0";
        } else {
            main.style.opacity = "1";
        }

        //variables for smooth scrolling page shortcuts
        var targetOffset, currentPosition,
            body = document.getElementById('contentToScroll'),
            aboutUsButton = document.getElementById('aboutUsTab'),
            newsButton = document.getElementById('newsTab'),
            vehicleButton = document.getElementById('vehicleTab'),
            sponsorsButton = document.getElementById('sponsorsTab'),
            connectButton = document.getElementById('connectTab'),
            subButton = document.getElementById('subButton'),
            arrowButton = document.getElementById('arrowButton'),
            animateTime = 900;

        aboutUsButton.addEventListener('click', smoothscroll);
        newsButton.addEventListener('click', smoothscroll);
        vehicleButton.addEventListener('click', smoothscroll);
        sponsorsButton.addEventListener('click', smoothscroll);
        connectButton.addEventListener('click', smoothscroll);
        subButton.addEventListener('click', smoothscroll);
        arrowButton.addEventListener('click', smoothscroll);

        function getPageScroll() {
            var yScroll;
            if(window.pageYOffset) {
                yScroll = window.pageYOffset;
          } else if (document.documentElement && document.documentElement.scrollTop) {
              yScroll = document.documentElement.scrollTop;
          } else if (document.getElementById('contentToScroll')) {
              yScroll = document.getElementById('contentToScroll').scrollTop;
          }
          return yScroll;
        }

        function smoothscroll(event) {
            targetOffset = document.getElementById(event.target.hash.substr(1)).offsetTop;
            currentPosition = getPageScroll();

            if((currentPosition - targetOffset) <= 10 && (currentPosition - targetOffset) >= -10) {
                animateTime = 0;
          } else {
              animateTime = 900;
          }
          totalHeight = document.documentElement.scrollHeight;
          windowHeight = document.documentElement.clientHeight;
          //check if the target position is greater than the height of the website, if so, it subtracts the difference so the scrolling can't go past the bottom (measured from the top of the window)
          if((totalHeight - windowHeight) < (currentPosition - (currentPosition - targetOffset))) {
              targetOffset = targetOffset - ((currentPosition - (currentPosition - targetOffset)) - (totalHeight - windowHeight));
          }
          body.classList.add('contentToScroll');
          body.style.WebkitTransform = "translate(0, " + (currentPosition - targetOffset) + "px)";
          body.style.MozTransform = "translate(0, " + (currentPosition - targetOffset) + "px)";
          body.style.transform = "translate(0, " + (currentPosition - targetOffset) + "px)";

          window.setTimeout(function () {
              body.classList.remove('contentToScroll');
              body.style.cssText = "";
              window.scrollTo(0, targetOffset);
              main.style.transitionDuration = "0s";
              main.style.opacity = "0";
          }, animateTime);

          event.preventDefault();
        }
      }
    </script>
  </head>
  <body>
<?php include 'header.html'; ?>
<style>
  .cropimg {
  width: 200px;
  height: 250px;
  overflow: hidden;
}
</style>
  <div id="contentToScroll">
    <div class="parallaxI">
      <div>
        <div id='bubbles'></div>
        <div id='bubbles2'></div>
        <div id='bubbles3'></div>
      </div>
      <div class="mainWelcome" id="main">
        <h1 class="homeTitle">MIZZOU SURF</h1>
        <hr class="fancy">
        <h2 class="homeMsg">University of Missouri Students' Underwater Robotics Foundation</h2>
      </div>
      <div id="scrollIndicator">
        <a id="subButton" class="sub diveAnim" href="#aboutUs"></a>
        <a id="arrowButton" class="arrow" href="#aboutUs"></a>
      </div>
    </div>
    <div id="aboutUs" class="container">
      <div class="content">
        <h3 class="sectionTitle">Welcome to Mizzou SURF</h3>
        Students’ Underwater Robotics Foundation is an engineering student organization that strives to implement the knowledge of engineering courses to real life projects. Mizzou SURF designs and manufactures marine robotic projects. SURF is a competition team with an element of robotic research. We are currently hard at work preparing for the 2024 RoboSub competition at the Transdeck in San Francisco!
        <br><br><br><br><br>
        <hr class="fancy">
        <br><br><br>
        <h3 class="sectionTitle">Meet the Team: </h3>
        <br>
        <div style="display:inline-block; max-width:1280px; margin:0px auto 0px;">
        <div style="display:inline-block; width:320px; height:355px; margin:10px 36px 0px;">
            <h4 style="margin:10px">Co-President and Electrical Team Leader</h4>
            <div class="officer" style="position:absolute; width:240px; margin: 0px 40px; padding:12px 0px; background-color:#b17c02;">
              <i>Amelia Truong<br></i>
              <img src="images/officers/AmeliaTruong.jpeg" alt="Co-President and Electrical Team Member" style="max-width:200px; filter:grayscale(100%); -webkit-filter:grayscale(100%); height:200px; overflow:hidden;">
              <p class="bioBox" style="font-size: 12px">
              "My name is Amelia Truong and I am a sophomore studying computer engineering. I like SURF because it has allowed me to experience real applications of my major that I couldn’t have gotten from classes during my freshman year."
              </p>
              <h6 style="margin:10px">Contact: ajt9zn@umsystem.edu</h6>
            </div>
          </div>
          <div style="display:inline-block; width:320px; height:355px; margin:10px 36px 0px;">
            <h4 style="margin:10px">Co-President and Software Team Leader</h4>
            <div class="officer" style="position:absolute; width:240px; margin: 0px 40px; padding:12px 0px; background-color:#b17c02;">
              <i>Kendra Minch<br></i>
              <img src="images/officers/headshot_Kendra.jpg" alt="Co-President and Software Team Leader" style="max-width:200px; filter:grayscale(100%); -webkit-filter:grayscale(100%); height:200px; overflow:hidden;">
              <p class="bioBox" style="font-size: 12px">
                "My name is Kendra Minch and I am a Senior studying Computer Science with a minor in Mathematics. Mizzou SURF has allowed me to learn more about programming autonomous systems and problem solving in a team environment."
              </p>
              <h6 style="margin:10px">Contact: kkmbfc@umsystem.edu</h6>
            </div>
          </div>
            <div style="display:inline-block; width:320px; height:355px; margin:10px 36px 0px;">
            <h4 style="margin:10px">Vice-President and Mechanical Team Leader</h4>
                <div class="officer" style="position:absolute; width:240px; margin: 0px 40px; padding:12px 0px; background-color:#b17c02;">
                <i>Matt Cira<br></i>
                  <img src="images/officers/MattCira.jpg" alt="Vice-President and Mechanical Team Leader" style="max-width:200px; filter:grayscale(100%); -webkit-filter:grayscale(100%); height:200px; overflow:hidden;">
                  <p class="bioBox" style="font-size: 12px">
                "I am Matt Cira and am a current Senior in the Mechanical and Aerospace Engineering program. SURF provides me with the real life, hands on application of my courses while allowing me to work through the complex problems of waterproof robotic systems."
                  </p>
                  <h6 style="margin:10px">Contact: mjcvyd@umsystem.edu</h6>
                </div>
          </div>
<br/>
<br/>
<br/>
<br/>
          <div style="display:inline-block; width:240px; height:355px; margin: 0px 35px 0px 35px;">
            <h4>Treasurer</h4>
            <div class="officer" style="position: absolute; width:240px; padding:12px 0px; background-color:#b17c02;">
              <i>Ethan Anderson<br></i>
              <img src="images/officers/ea.jpg" alt="Treasurer" style="max-width:200px; filter:grayscale(100%); -webkit-filter:grayscale(100%); height:200px; overflow:hidden;">
              <p class="bioBox" style="font-size: 12px">
              </p>
              <h6 style="margin:10px">Contact: nac4dc@umsystem.edu</h6>
            </div>
          </div>
          <div style="display:inline-block; width:240px; height:355px; margin: 0px 35px 0px 35px;">
            <h4>Busniess Outreach Officer</h4>
            <div class="officer" style="position: absolute; width:240px; padding:12px 0px; background-color:#b17c02;">
              <i>Daniel Hough<br></i>
              <img src="images/officers/daniel_hough.jpg" alt="Busniess Outreach Officer" style="max-width:200px; filter:grayscale(100%); -webkit-filter:grayscale(100%); height:200px; overflow:hidden;">
              <p class="bioBox" style="font-size: 12px">
                "I am Daniel Hough and I’m a sophomore majoring in Mechanical Engineering with minors in Mathematics and Aerospace Engineering. SURF has provided me with hands-on engineering experiences, like design, manufacturing, and waterproofing."
              </p>
              <h6 style="margin:10px"> Contact :  dshc3f@umsystem.edu</h6>
            </div>
          </div>
          <div style="display:inline-block; width:240px; height:355px; margin: 0px 35px 0px 35px;">
            <h4>Social Media and 3D Printing Tech</h4>
            <div class="officer" style="position: absolute; width:240px; padding:12px 0px; background-color:#b17c02;">
              <i>Matt Fegruson<br></i>
              <img src="images/officers/matt_ferguson.jpg" alt="Social Media and 3D Printing Tech" style="max-width:200px; filter:grayscale(100%); -webkit-filter:grayscale(100%); height:200px; overflow:hidden;">
              <p class="bioBox" style="font-size: 12px">
                "Hi, I’m Matt Ferguson and I’m a sophomore majoring in Electrical engineering and minoring in Nuclear engineering here at Mizzou. SURF has provided me with practical and hands-on experiences of engineering, like the implementation of software, electronics, additive manufacturing, and waterproofing into our competition robot."
              </p>
              <h6 style="margin:10px">Contact: mpf88d@umsystem.edu</h6>
            </div>
          </div>
            <div style="display:inline-block; width:240px; height:355px; margin: 0px 35px 0px 35px;">
            <h4>Mechanical Team Lead</h4>
            <div class="officer" style="position: absolute; width:240px; padding:12px 0px; background-color:#b17c02;">
              <i>Kate Sherard<br></i>
              <img src="images/officers/katesherard.jpg" alt="Social Media and 3D Printing Tech" style="max-width:200px; filter:grayscale(100%); -webkit-filter:grayscale(100%); height:200px; overflow:hidden;">
              <p class="bioBox" style="font-size: 12px">
              </p>
              <h6 style="margin:10px">Contact: mpf88d@umsystem.edu</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="news">
      <div class="contentAlt">
        <h3 class="sectionTitleAlt">News</h3>
        <div class="newsArticles">
        <hr class="fancy">
        <div class="newsArticles">
        <h4 class="articleTitle">6/12/22 - Submitting for Robosub 2022</h4>
        For the first time in two years, and our second time as a team, we will be traveling to Robosub competition! This year it will be held at the University of Maryland in College Park, MD. Team members Colm Barry, Nathan Crum, Mason Fleck, Maria Lusardi, and Amelia Truong will be traveling to attend.
        </div>
          <hr class="fancy">
        <div class="newsArticles">
        <h4 class="articleTitle">8/30/21 - Presenting for SWE Girl Scout Day</h4>
        With the return of more in-person activities, SURF has again partnered with SWE to present Jelly at their annual Girl Scout Day event! Several girl scout troops from the surrounding area came to Mizzou for a day to learn about different types of engineering. We are very excited to introduce them to the exciting field of autonomous underwater robotics!
        </div>
        <hr class="fancy">
        <div class="newsArticles">
        <h4 class="articleTitle">6/17/21 - Submitting for Robosub 2021</h4>
        Mizzou SURF is submitting for the virtual 2021 Robosub competition. Though there is no in-person competition in San Diego, CA this year, we are excited to show off Jelly through our videos and technical reports. This will be SURF's second time competing in the competition.
        </div>
        <hr class="fancy">
        <div id="newsLink">
          <a href="news.php" class="head">More ></a>
        </div>
      </div>
    </div>
    <div id="vehicle" class="container">
      <div class="content">
      <h3 class="sectionTitle">2021-2022</h3><h2 class="sectionTitle"><i>Potens Pleumon</i><br>"Jelly"</h2>
        <br>
        <div><img src="images/Jelly_IsoV2.png" alt="isoView" border=5 id="subImg" style="padding:40px; background-color:#b17c02;"></div>
        <img src="images/Jelly_TopV2.png" alt="topView" border=5 style="max-width:300px; max-height:200px; vertical-align:middle; padding:40px; background-color:#b17c02;">
        <img src="images/Jelly_FrontV2.png" alt="frontView" border=5 style="max-width:300px; max-height:200px; vertical-align:middle; padding:40px; background-color:#b17c02;">
        <img src="images/Jelly_BottomV2.png" alt="bottomView" border=5 style="max-width:300px; max-height:200px; vertical-align:middle; padding:40px; background-color:#b17c02;">
        <div margin="auto">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/6KGUhhGTGrE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div style="width:100%;"><button type="button"><a href="TDR%202022.pdf" class="head" style="color:black; size:100px;">Jelly Technical Design Report</a></button></div>
        </div>
        <div id="newsLink">
          <a href="vehicle.php" class="head">Past Vehicles ></a>
        </div>
        </div>
    </div>

    <div id="sponsors">
      <div class="contentAlt">
        <h3 class="sectionTitleAlt">Sponsors</h3>
        <br><br><br><hr class="fancy">
        <a href="https://engineering.missouri.edu/"><img src="images/sponsors/mizzou.png" alt="mizzou" class="sponsorImg" style="max-width:260px; height:auto; vertical-align:middle;"></a>
        <a href="https://www.solidworks.com/"><img src="images/sponsors/solidworks.png" alt="solidworks" class="sponsorImg" style="max-width:260px; height:auto; vertical-align:middle;"></a>
        <a href="https://www.mathworks.com/"><img src="images/sponsors/mathworks.png" alt="mathworks" class="sponsorImg" style="max-width:260px; height:auto; vertical-align:middle;"></a>
        <a href="https://www.nasa.gov/"><img src="images/sponsors/nasa.png" alt="nasa" class="sponsorImg" style="max-width:260px; height:auto; vertical-align:middle;"></a>
        <br>
        <a href="https://bluerobotics.com/"><img src="images/sponsors/bluerobotics.png" alt="bluerobotics" class="sponsorImg" style="max-width:260px; height:auto; vertical-align:middle;"></a>
        <a href="https://www.nvidia.com/en-us/"><img src="images/sponsors/nvidia.png" alt="bluerobotics" class="sponsorImg" style="max-width:260px; height:auto; vertical-align:middle;"></a>
        <hr class="fancy"><br><br><br>
        Want to help sponsor our team? Contact us below to donate or find more ways to help!
      </div>
    </div>
<?php include "footer.html"; ?>
  </div>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Play">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Julius+Sans+One">
  </body>
</html>
