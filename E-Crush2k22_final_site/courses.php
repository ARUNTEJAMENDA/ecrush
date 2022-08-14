<?php include "php/config.php" ?>

<!DOCTYPE html>
<html lang="en">

  <head> 
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>courses | E-Crush </title>
    <meta content="" name="description">
    <meta content="" name=""> 
<?php include "repeats/dumpyard.php" ?>
 
</head>

<body>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <!-- <a href="index.php">
        <img style="height:60px; width:70px" src="assets/img/logo.png">
      </a>
      <h1 class="logo me-auto"><a href="index.php"></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.php" class="logo me-auto"><img src="assets/img/favicon.png" alt="E-Crush" class="img-fluid"></a>
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li class="navElement">
          <a class="active" href="index.php" id="navElement">Home</a>
        </li>
        <li class="navElement">
          <a href="about.php" id="navElement">About</a>
        </li>
        <li class="navElement">
          <a href="trainers.php" id="navElement">Weekend Trivia</a>
        </li>
        <li class="navElement">
          <a href="courses.php" id="navElement">Courses</a>
        </li>
        <li class="navElement">
          <a href="events.php" id="navElement">Events</a>
        </li>
        <li class="dropdown">
          <a href="#" id="navElement"><span>Clubs</span> 
            <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li style="color:white"><a href="web development.php">Web development</a></li>
              <li style="color:white"><a href="E-Crush pods.php">E-Crush pods</a></li>
              <li style="color:white"><a href="Promotion & marketing.php">Promotion & marketing</a></li>
              <li style="color:white"><a href="Quiz.php">Quiz</a></li>
              <li style="color:white"><a href="Technical.php">Technical</a></li>
              <li style="color:white"><a href="Content writing.php">Content writing</a></li>
              <li style="color:white"><a href="Soft Skill & Communication.php">Soft Skill & Communication</a></li>
              <li style="color:white"><a href="Infra team.php">Infra team</a></li>
              <li style="color:white"><a href="Desiging team.php">Desiging team</a></li>
              <li style="color:white"><a href="E-skills.php">E-skills</a></li>
              <li style="color:white"><a href="Photography.php">Photography</a></li>
              <li style="color:white"><a href="E-Library.php">E-Library</a></li>
            </ul>
        </li>
        <li class="navElement"><a href="contact.php" id="navElement">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
    <a href="login.php" class="get-started-btn">News Paper&nbsp;<span>&rarr;</span></a>
    </div>
  </header>
  <!-- End Header -->
  <main id="main">
    <div class="breadcrumbs">
      <div class="container mt-5 mb-5">
        <h2>Courses</h2>
        <p class="mt-5">E-Crush here gives you chance to learn different english related courses from our mentors and seniors. 
          Courses that includes english grammar, english phonetics, pronunciations, and others that could help you out to improve in different aspects.
          The main theme of implementing these courses is to bring everyone together and learn with a new platform. </p>
      </div>
    </div>

    <div class="navsection">
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Courses</li>
          </ol>
        </div>
      </div>
    <br>
   
    <section id="popular-courses" class="courses" style="margin-bottom: 20px;">
      <div class="container" data-aos="fade-up">


        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <a href="course-details1.php">
              <div class="course-item">
                <img src="assets/img/courses/Spoken english.webp" class="img-fluid" alt="">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>No.of videos:85</h4>
                    <p class="price">Free</p>
                  </div>

                  <h3><a href="course-details1.php">Spoken English classes</a></h3>
                  <p>This course provides you the content for learning English and how to apply it for daily communication.</p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img
                        src="assets/img/courses/nmrsir.webp"
                        class="img-fluid" alt="...">
                      <span>NMR.polgani</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;50
                      &nbsp;&nbsp;
                      <i class="bx bx-heart"></i>&nbsp;65
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <a href="course-details2.php">
              <div class="course-item">
              <img src="assets/img/courses/E grammar.webp"
                class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>No.of videos:4</h4>
                  <p class="price">free</p>
                </div>

                <h3><a href="course-details2.php">ENGLISH GRAMMAR</a></h3>
                <p>Grammar is the basic structure of any language.This course introduces to the different aspects of grammar in English language. </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img
                      src="assets/img/courses/nmrsir.webp"
                      class="img-fluid" alt="">
                    <span>NMR.polgani</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;1799
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;251
                  </div>
                </div>
              </div>
            </div>
          </a>


          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
           
            <a href="course-details3.php">
              <div class="course-item">
                <img src="assets/img/courses/Airforce.webp"
                  class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>No.of videos:7</h4>
                    <p class="price">free</p>
                  </div>

                  <h3><a href="course-details3.php">INDIAN AIR FORCE</a></h3>
                  <p> This course helps many students and aspirants in learning English which is helpful for cracking competetive examinations like IAF. </p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img
                        src="assets/img/courses/nmrsir.webp"
                        class="img-fluid" alt="">
                      <span>NMR.Polgani</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;20
                      &nbsp;&nbsp;
                      <i class="bx bx-heart"></i>&nbsp;85
                    </div>
                  </div>
                </div>
              </div>
              </a>

          </div> <!-- End Course Item-->
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <a href="course-details4.php">
              <div class="course-item">
                <img src="assets/img/courses/AA course.webp"
                  class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>No.of videos:9</h4>
                    <p class="price">Free</p>
                  </div>

                  <h3><a href="course-details4.php"> A..AA... PLAYLIST</a></h3>
                  <p>In this course,you'll be learning English language from scratch.This course is helpful for many beginners where you'll learn English from very basic level. </p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img
                        src="assets/img/courses/nmrsir.webp"
                        class="img-fluid" alt="">
                      <span>NMR.polgani</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;20
                      &nbsp;&nbsp;
                      <i class="bx bx-heart"></i>&nbsp;85
                    </div>
                  </div>
                </div>
              </div>
              </a>


          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
           
            <a href="course-details5.php">
              <div class="course-item">
                <img src="assets/img/courses/PUC 2 Content.webp"
                  class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>No.of videos:1</h4>
                    <p class="price">free</p>
                  </div>

                  <h3><a href="course-details5.php">PUC courses</a></h3>
                  <p>This course provides you the best content for PUC.<br><br><br></p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img
                        src="assets/img/courses/nmrsir.webp"
                        class="img-fluid" alt="">
                      <span>NMR.Polgani</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;412
                      &nbsp;&nbsp;
                      <i class="bx bx-heart"></i>&nbsp;37
                    </div>
                  </div>
                </div>
              </div>
              </a>
          </div> <!-- End Course Item-->

           <!-- End Course Item-->
          

        </div>

      </div>
     
    </section>
    
      <marquee>*** More course will be added soon ***</marquee>
   
    </main>
  <br><br>

  <!-- ======= Footer ======= -->
  <?php include "repeats/footer.php"?>

  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
