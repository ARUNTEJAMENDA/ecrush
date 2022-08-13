<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Courses | E-crush</title> 
  <meta content="" name="description">
  <meta content="" name="">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/contact.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
  <?php include "php/config.php";include "repeats/dumpyard.php";?>


</head>

<body>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <!-- <a href="index.html">
        <img style="height:60px; width:70px" src="assets/img/logo.png">
      </a>
      <h1 class="logo me-auto"><a href="index.html"></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html" class="logo me-auto"><img src="assets/img/favicon.png" alt="E-Crush" class="img-fluid"></a>
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li class="navElement">
          <a class="active" href="index.html" id="navElement">Home</a>
        </li>
        <li class="navElement">
          <a href="about.html" id="navElement">About</a>
        </li>
        <li class="navElement">
          <a href="trainers.html" id="navElement">Weekend Trivia</a>
        </li>
        <li class="navElement">
          <a href="courses.html" id="navElement">Courses</a>
        </li>
        <li class="navElement">
          <a href="events.html" id="navElement">Events</a>
        </li>
        <li class="dropdown">
          <a href="#" id="navElement"><span>Clubs</span> 
            <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li style="color:white"><a href="web development.html">Web development</a></li>
              <li style="color:white"><a href="E-Crush pods.html">E-Crush pods</a></li>
              <li style="color:white"><a href="Promotion & marketing.html">Promotion & marketing</a></li>
              <li style="color:white"><a href="Quiz.html">Quiz</a></li>
              <li style="color:white"><a href="Technical.html">Technical</a></li>
              <li style="color:white"><a href="Content writing.html">Content writing</a></li>
              <li style="color:white"><a href="Soft Skill & Communication.html">Soft Skill & Communication</a></li>
              <li style="color:white"><a href="Infra team.html">Infra team</a></li>
              <li style="color:white"><a href="Desiging team.html">Desiging team</a></li>
              <li style="color:white"><a href="E-skills.html">E-skills</a></li>
              <li style="color:white"><a href="Photography.html">Photography</a></li>
              <li style="color:white"><a href="E-Library.html">E-Library</a></li>
            </ul>
        </li>
        <li class="navElement"><a href="contact.html" id="navElement">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
    <a href="login.html" class="get-started-btn">News Paper&nbsp;<span>&rarr;</span></a>
    </div>
  </header>
  <!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container mt-5 mb-5">
        <h2>Contact Us</h2>
        <p class="mt-5">Your questions and doubts builds our confidence and corrects our mistakes
        Never hesitate to contact us for all your queries
        We encourage each and every word and query you ask us and answer them with all our patience. </p>
      </div>
    
    </div>
    <div class="navsection">
    <nav>
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Contact</li>
        </ol>
      </div>
    </div>
    </nav>
   <!-- End Breadcrumbs -->
<br>



    <div class="contactinfo">
      <p style="background:white;">
      <section class="contactcard">
        <div class="rows">
    
        </div>
        <div class="rows">
          <div class="column">
            <div class="concard">
              <div class="icon-wrapper">
                <i class="fa fa-building"></i>
              </div>
              <h3>Main Office</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                consequatur necessitatibus eaque.
              </p>
            </div>
          </div>
          <div class="column">
            <div class="concard">
              <div class="icon-wrapper">
                <i class="fa fa-phone"></i>
              </div>
              <h3>Phone Number</h3>
              <p>
                 +91 9398848215,<br>
                 Yernagula.Siddartha,<br>
                 Developer of E-Crush site.
              </p>
            </div>
          </div>
          <div class="column">
            <div class="concard">
              <div class="icon-wrapper">
                <i class="fa fa-envelope"></i>
              </div>
              <h3>Mail</h3>
              <p>
                ecrushrgukt@gmail.com<br>
                ecrushwebteam@gmail.com
              </p>
            </div>
          </div>
        
         
          
        </div>
    </div>

    <!-- ======= Contact Section ======= -->
    <div class="contactus">
    <section id="contact" class="contact">
      <div class="contactcontainer">
        <div class="content">
          <div class="image-box">
            <img src="assets/img/Contact.png" alt="">
          </div>
        <form action="#">
          <div class="topic">Send us a message</div>
          <div class="input-box">
            <input type="text" required id="name">
            <label>Enter your name</label>
          </div>
          <div class="input-box">
            <input type="text" required id="email">
            <label>Enter your email</label>
          </div>
          <div class="message-box">
            <textarea id="message"></textarea>
            <label>Enter your message</label>
          </div>
           
          <div class="input-box">
            <input type="submit" value="Send Message" id="send_message">
          </div>
        </form>
        <script>
          $(document).ready(function(){
             var date= new Date();
              $("#send_message").click(function(){
                  var name = $("#name").val();
                  var date = date.getDate();
                  var message = $("#message").val();
                  var email = $("#email").val();
                   //-------
                  $.ajax({
                      url:"contact_form.php",
                      method:"post",
                      data:{name:name,date:date,message:message,email:email},
                      success:function(response){
                          alert(response);
                      }
                  });
              });
          });
        </script>
      </div>
      </div>
    </section><!-- End Contact Section -->
  </div>
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
  
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>E-Crush</h4>
            <p>
              i3 , <br>
              Rgukt-Nuzvid,<br>
              krishna,<br><br>
              <strong>Phone:</strong> +91 9398848215<br>
              <strong>Email:</strong>ecrushrgukt@gmail.com<br>
            </p>
          </div>
  
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="events.html">Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="courses.html">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact us</a></li>
            </ul>
          </div>
  
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="E-Library.html">E-Library</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="E-skills.html">E-skills</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Quiz.html">Quizs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Soft skill & communication.html">Soft skills</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Soft skill & communication.html">Communtaions skills</a></li>
            </ul>
          </div>
  
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Comment us</h4>
            <p>Give your valuable suggestions</p>
            <form action="" method="post">
              <input type="email" name="email">
              <input type="submit" value="send">
            </form>
          </div>
  
        </div>
      </div>
    </div>
  
    <div class="container d-md-flex py-4">
  
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>E-Crush</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="web development.html">Web Team Ecrush</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <div class="icons">
          <a href="https://www.youtube.com/channel/UCG7OmgaVdsa0QASdBsHNo-w" class="yt"><i class="fa fa-youtube"></i></a>
          <a href="https://www.facebook.com/ecrush.rgukt.9" class="fb"><i class="fa fa-facebook-f"></i></a>
          <a href="https://twitter.com/ERgukt?s=08" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="https://instagram.com/ecrushrguktn?utm_medium=copy_link" class="insta"><i class="fa fa-instagram"></i></a>
          <a href="http://www.linkedin.com/in/ecrush-rguktn" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>