<?php include "apis/config.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>E-crush website </title>
  <meta content="" name="description">
  <meta content="" name=""> 
  <!-- Jquery cdn -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- <script src="assets/js/main.js"></script> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.2/css/boxicons.min.css" integrity="sha512-AGmpdsTqvAh2GvTWzVhhJ9VqQb1eAXwOM7uiWtv0DzcnGaGWy98K51z2cK5OG3gp4NB1HbMaD7p0MeO9kE7E3w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.css" integrity="sha512-ipO1yoQyZS3BeIuv2A8C5AwQChWt2Pi4KU3nUvXxc4TKr8QgG8dPexPAj2JGsJD6yelwKa4c7Y2he9TTkPM4Dg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/toast.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <!-- Vendor JS Files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js" integrity="sha512-V1mUBtsuFY9SNr+ptlCQAlPkhsH0RGLcazvOCFt415od2Bf9/YkdjXxZCdhrP/TVYsPeAWuHa+KYLbjNbeEnWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
  <!-- =======================================================
  * Template Name: Mentor - v4.7.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html"><img style="height:60px; width:70px" src="assets/img/favicon.png"></a>
      <h1 class="logo me-auto"><a href="index.html"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="navElement"><a class="active" href="index.html" id="navElement">Home</a></li>
          <li class="navElement"><a href="about.html" id="navElement">About</a></li>
          <li class="navElement"><a href="trainers.html" id="navElement">Weekend Trivia</a></li>
          <li class="navElement"><a href="courses.html" id="navElement">Courses</a></li>

          <li class="navElement"><a href="events.html" id="navElement">Events</a></li>


          <li class="dropdown"><a href="#" id="navElement"><span>Clubs</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a> -->
              <!-- <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul> -->
          </li>
          <li style="color:white"><a href="E-Library.html">E-Library</a></li>
          <li style="color:white"><a href="E-skills.html">E-skills</a></li>
          <li style="color:white"><a href="Soft Skill and Communication.html">Soft Skill & Communication</a></li>
          <li style="color:white"><a href="Content writing.html">Content writing</a></li>
          <li style="color:white"><a href="Photography.html">Photography</a></li>
          <li style="color:white"><a href="Quiz.html">Quiz</a></li>
          <li style="color:white"><a href="E-Crush pods.html">E-Crush pods</a></li>
          <li style="color:white"><a href="web development.html">Web development</a></li>
          <li style="color:white"><a href="Desiging team.html">Desiging team</a></li>
          <li style="color:white"><a href="Promotion & marketing.html">Promotion & marketing</a></li>
          <li style="color:white"><a href="Technical.html">Technical</a></li>
          <li style="color:white"><a href="Infra team.html">Infra team</a></li>
        </ul>
        </li>
        <li class="navElement"><a href="contact.html" id="navElement">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      

        <a href="E-Library.html" class="get-started-btn">News Paper&nbsp;<span>&rarr;</span></a>
  
  </header><!-- End Header -->

  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
     
      <div class="row">
        
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1>

            E-Crush
    
           
          </h1>
          <h3>
            <p class="line anim-typewriter">Provision for your vision</p>
          </h3>
      
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <h2>This site is intended to provide the best resources to the RGUKTians.</h2>
            </div>
          </div>
        </div>
        <div class="col-lg-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
 

  </section>
 <!-- End Hero -->


  <main id="main">

    <!-- ======= About Section ======= -->
   <br> <div class="section-header">
      <span>about us</span>
      <h2>about us</h2>
    </div>
    <section id="about" class="about">
      <div class="container" >

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" >
            <!-- <img src="assets/img/favicon.png" class="img-fluid" alt=""> -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="assets/img/trainers/c1.svg"
                    class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/trainers/c2.svg"
                    class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img
                    src="assets/img/trainers/c3.svg"
                    class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img
                    src="assets/img/trainers/c4.svg"
                    class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img
                    src="assets/img/trainers/c5.svg"
                    class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img
                    src="assets/img/trainers/c6.svg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">

            <h3>E-CRUSH---PROVISION FOR YOUR
              VISION</h3>
            <p class="fst-italic">
              E-crush organisation is a student body organisation meant to
              support students with their english developing skills.It is
              intended to promote best resources to the students of
              RGUKT to learn english fluently without hesitation and with
              confidence.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> It is the best platform to improve yourself in many
                ways related to english..</li>
              <li><i class="bi bi-check-circle"></i>The motto is to help students leave the
                fear behind and move forward to learn english with love and
                enthusiasm.</li>
              <li><i class="bi bi-check-circle"></i>Our mission is to make every student and every volunteer
                to be good in english LSRW (listening, speaking, reading, and writing)skills.</li>
            </ul>
            <p>
              We provide you a platform to learn many helpful things. We spread knowledge of English to all students of
              the campus by our daily activities, events, sessions, talks and many more&nbsp;<a href="about.html"  style="font-weight:bold;font-size:17px; color:093f5b;">read more&nbsp;<span>&rarr;</span></a> </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    
    <section id="wwec" class="wwec">
      <div class="section-header">
        <span>Week with ecrush</span>
        <h2>Week with ecrush</h2>
      </div>
     <section id="about" class="about">
      <!--  -->
      <div class="container ">
        <div class="row align-items-center text-center">
            <div class="col-md-6 col-lg-6 col-12">
              <div class="WeekWithEcrushText pb-4 text-uppercase">
                Daily Posts
              </div>
              <div class="posts text-center owl-carousel" >
                <?php
                  $query = "SELECT * FROM `week_with_ecrush`";
                  $exec = mysqli_query($con,$query);
                  while($row = mysqli_fetch_assoc($exec)){
                    echo '<img src="uploads/'.$row['filename1'].'" alt=""><img src="uploads/'.$row['filename2'].'" alt=""><img src="uploads/'.$row['filename3'].'" alt="">';
                  }
                ?>
              </div>
            </div>
            
            <div class="col-md-6 col-lg-6 col-12">
              <div class="WeekWithEcrushText pb-4 text-uppercase">
                Special Wishes
              </div>
              <div class="posts text-center owl-carousel">
              <?php
                  $query1 = "SELECT * FROM `special_wishes`";
                  $exec1 = mysqli_query($con,$query1);
                  while($row = mysqli_fetch_assoc($exec1)){
                    echo '<img src="uploads/'.$row['filename1'].'" alt=""><img src="uploads/'.$row['filename2'].'" alt=""><img src="uploads/'.$row['filename3'].'" alt="">';
                  }
                ?>
              </div>
            </div>
          </div>
      </div>
    </section>
    </section>
    <!-- ======= Features Section ======= -->
    <div class="clubCard" style="margin-top:15px;margin-bottom:15px;">
      <section id="features" class="features" style="padding:30px;">
        <div class="section-header">
          <span>Clubs</span>
          <h2>Clubs</h2>
    
        </div>
        <div class="container" >
          <div class="row" >
            <div class="col-lg-3 col-md-4">
              <div class="cardcontainer">
                <div class="card" style="background: #FFFEFE;">
                  
                  <div class="content">
                    <div class="imgBx">
                      <img src="assets/img/Club Cards/e-library.png" alt="">
                    </div>
                    <div class="contentBx">

                      <div class="clubname">E-Library Club</div>
                    
                      <p class="card-text">
                        Explore through the shelves of library...
                      </p>
                     
                      <a href="E-library.html"><button class="card-btn">Visit <span>&rarr;</span></button></a> 

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
              <div class="cardcontainer">
                <div class="card" style="background:#E7E0F3;">
                 
                  <div class="content">
                    <div class="imgBx">
                      <img src="assets/img/Club Cards/e-skills.png" alt="">
                    </div>
                    <div class="contentBx">

                      <div class="clubname">E-Skills Club</div>
                      <p class="card-text">
                        Enhance skills into strongest weapons..
                      </p>
                     
                      <a href="E-skills.html"><button class="card-btn">Visit <span>&rarr;</span></button></a> 

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
              <div class="cardcontainer">
                <div class="card" style="background:white;">
                 
                  <div class="content">
                    <div class="imgBx">
                      <img src="assets/img/Club Cards/soft and communication.png" alt="">
                    </div>
                    <div class="contentBx">

                      <div class="clubname">Soft and Communication</div>
                     
                      <p class="card-text">
                        Improves you in eloquence and fluency..
                      </p>
                      <a href="Soft Skill and Communication.html"><button class="card-btn">Visit <span>&rarr;</span></button></a> 
          
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
              <div class="cardcontainer">
                <div class="card" style="background: rgba(165, 185, 255, 0.33);">
                  
              
                  <div class="content">
                    <div class="imgBx">
                      <img src="assets/img/Club Cards/content-writing.png" alt="">
                    </div>
                    <div class="contentBx">

                      <div class="clubname">Content Writing</div>
                     
                      <p class="card-text" style="margin-bottom:10px;">
                         Build a pavement for your voice and visions ..
                      </p>

                      <a href="Content writing.html"><button class="card-btn">Visit <span>&rarr;</span></button></a> 

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="cardcontainer">
                <div class="card" style="background: #C5E6C0;">
                 
                  <div class="content">
                    <div class="imgBx">
                      <img src="assets/img/Club Cards/photography.png" alt="">
                    </div>
                    <div class="contentBx">

                      <div class="clubname">Photography Club</div>
                     
                      <p class="card-text">
                        Captures our charming moments..
                      </p>
                    
                     <a href="Photography.html"><button class="card-btn">Visit <span>&rarr;</span></button></a> 

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="cardcontainer">
                <div class="card" style="background:white;">
                
                  
                  <div class="content">
                    <div class="imgBx">
                      <img src="assets/img/Club Cards/quiz.png" alt="">
                    </div>
                    <div class="contentBx">

                      <div class="clubname">Quiz-team</div>
                     
                      <p class="card-text">
                        Unlocks your knowledge and skills.
                      </p>
                    
                      <a href="Quiz.html"><button class="card-btn">Visit <span>&rarr;</span></button></a> 

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="cardcontainer">
                <div class="card" style="background: rgba(227, 228, 164, 0.62);">
               
                  <div class="content">
                    <div class="imgBx">
                      <img src="assets/img/Club Cards/podcast.png" alt="">
                    </div>
                    <div class="contentBx">

                      <div class="clubname">Podcasting Club</div>
                     
                      <p class="card-text">
                        This team works on giving voice over . 
                      </p>
                   
                      <a href="E-Crush pods.html"><button class="card-btn">Visit <span>&rarr;</span></button></a> 

                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="cardcontainer">
                <div class="card" style="background: #FFFEFE;">
              
                  <div class="content">
                    <div class="imgBx">
                      <img src="assets/img/Club Cards/Website designer.png" alt="">
                    </div>
                    <div class="contentBx">

                      <div class="clubname">Web Development</div>
                     
                      <p class="card-text">
                        We make progress with lines of code
                      </p>
                    
                      <a href="web development.html"><button class="card-btn">Visit <span>&rarr;</span></button></a> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="cardcontainer">

                <div class="card" style="background: #ffffff;">
                  <div class="content">
                    <div class="imgBx">
                      <img src="assets/img/Club Cards/desigin.png" alt="">
                    </div>
                    <div class="contentBx">

                      <div class="clubname">Designing Club</div>
                    
                      <p class="card-text">
                        Your creativity maintains our dignity

                      </p>
                
                      <a href="Desiging team.html"><button class="card-btn">Visit <span>&rarr;</span></button></a> 

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="cardcontainer">
                <div class="card" style="background: rgba(183, 223, 225, 0.56);">
               
                  <div class="content">
                    <div class="imgBx">
                      <img src="assets/img/Club Cards/technical club.png" alt="">
                    </div>
                    <div class="contentBx">

                      <div class="clubname">Technical Club</div>
                    
                      <p class="card-text">
                        Brings us together through technology
                        </p>
                    
                     <a href="Technical.html"><button class="card-btn">Visit <span>&rarr;</span></button></a> 

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="cardcontainer">
                <div class="card" style="background:white;">
                  <div class="content">
                    <div class="imgBx">
                      <img src="assets/img/Club Cards/promotion and marketing.png" alt="">
                    </div>
                    <div class="contentBx">

                      <div class="clubname" style=" font-size: 16px;">Promotion & Marketing</div>
                      
                      <p class="card-text">
                        Best way  to connect and  reach you...
                      </p>
                      <a href="Promotion & marketing.html"><button class="card-btn">Visit <span>&rarr;</span></button></a> 

                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="cardcontainer">
                <div class="card" style="background: rgba(226, 190, 216, 0.48);">
                  <div class="content">
                    <div class="imgBx">
                      <img src="assets/img/Club Cards/infra.png" alt="">
                    </div>
                    <div class="contentBx">

                      <div class="clubname">Infra Club</div>
                    
                      <p class="card-text">
                        We teach you real-time dedication
                      </p>
                   
                      <a href="Infra team.html"><button class="card-btn">Visit <span>&rarr;</span></button></a> 


                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End Features Section -->
    </div>
    <!-- End Features Section -->

      <!-- ======= Popular Courses Sectiocn ======= -->
     
      <section id="popular-courses" class="courses" >
        <div class="section-header">
          <span>Our courses</span>
          <h2>Our Courses</h2>
    
        </div>
        <div class="container" >


          <div class="row" >

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <a href="course-details1.html">
              <div class="course-item">
                <img src="assets/img/courses/spoken english.png"
                  class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>No .of videos: 55</h4>
                    <p class="price">Free</p>
                  </div>

                  <h3><a href="course-details1.html">Spoken English classes</a></h3>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This course provides you the content for learning English and you'll be taught how to apply it in your daily communication.<br><br></p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img
                        src="assets/img/courses/nmrsir.jpg"
                        class="img-fluid" alt="...">
                      <span>NMR. Polagani</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;19980
                      &nbsp;&nbsp;
                      <i class="bx bx-heart"></i>&nbsp;776
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div> <!-- End Course Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <a href="course-details2.html">
                <div class="course-item">
                <img src="assets/img/courses/E grammar.png"
                  class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>No. of videos: 4</h4>
                    <p class="price">Free</p>
                  </div>

                  <h3><a href="course-details2.html">English Grammar</a></h3>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grammar is the basic structure of any language. This course introduces you the different aspects of grammar in English language.</p>
                 
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img
                        src="assets/img/courses/nmrsir.jpg"
                        class="img-fluid" alt="">
                      <span>NMR. Polagani</span>
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
              <a href="course-details3.html">
              <div class="course-item">
                <img src="assets/img/courses/Airforce.png"
                  class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>No. of videos: 7</h4>
                    <p class="price">Free</p>
                  </div>

                  <h3><a href="course-details3.html">Indian Air Force</a></h3>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This course helps many students and aspirants in learning English required for cracking IAF examination.<br></p>
                 <br> <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img
                        src="assets/img/courses/nmrsir.jpg"
                        class="img-fluid" alt="">
                      <span>NMR. Polagani</span>
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

          </div>
       <br>
          <h2 class="coursetext"><a href="courses.html">Explore more<span>&rarr;</span></a></h2>
        </div>
    
      
      
      </section>
      <!-- End Popular Courses Section -->

     
      <div class="container" >
        
      
     
        <div class="quickLinks">
          <section id="quicklinks" class="quicklinks">
            <div class="section-header">
              <span>Quick Links</span>
              <h2>Quick Links</h2>
            </div>



            <div class="row" >
              <p class="linktext">Rgukt Sites</p>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0 qlb">
              <a href="http://www.rguktn.ac.in/"  target="_blank"><button class="glow-on-hover" type="button">Rgukt nuzvid</button></a>
              </div> 
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0 qlb">
                <a href="http://rguktrkv.ac.in/" target="_blank"><button class="glow-on-hover" type="button">Rgukt Rk valley</button></a>
              
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0 qlb">
                <a href="http://rguktsklm.ac.in/" target="_blank"><button class="glow-on-hover" type="button">Rgukt Sklm</button></a>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-lg-0 qlb">
                <a href="http://rguktong.ac.in/" target="_blank"><button class="glow-on-hover" type="button">Rgukt ongole</button></a>
              </div>

              <p class="linktext">Student Sites</p>

              <div class="col-lg-3 col-md-4 mt-4 qlb">

                <a href="http://intranet.rguktn.ac.in/" target="_blank"><button class="glow-on-hover" type="button">Intranet</button></a>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 qlb">

                <a href="http://intranet.rguktn.ac.in/SMS/" target="_blank"><button class="glow-on-hover" type="button">SMS</button></a>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 qlb">
                
                <a href="http://103.225.13.244/updates/login.php" target="_blank"><button class="glow-on-hover" type="button">Seating Position</button></a>
              </div>
              
              <div class="col-lg-3 col-md-4 mt-4 qlb">
                <a href="http://examcell.rguktn.ac.in/" target="_blank"><button class="glow-on-hover" type="button">Examination cell</button></a>
              </div>

              <p class="linktext"> Student Organisation Sites</p>

              <div class="col-lg-3 col-md-4 mt-4 qlb">
                <a href="https://instagram.com/sdcac_rguktn?igshid=YmMyMTA2M2Y=" target="_blank"><button class="glow-on-hover" type="button">SDCAC</button></a>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 qlb">
                <a href="https://instagram.com/studentmitra?igshid=YmMyMTA2M2Y=" target="_blank"><button class="glow-on-hover" type="button">Student Mitra</button></a>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 qlb">
                <a href="https://instagram.com/helpinghands_rguktn?igshid=YmMyMTA2M2Y=" target="_blank"><button class="glow-on-hover" type="button">Helping Hands</button></a>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 qlb">

                <a href="https://instagram.com/campus.chronicle?igshid=YmMyMTA2M2Y=" target="_blank"><button class="glow-on-hover" type="button">Campus Chronicle</button></a>
              </div>
            </div>
          </section>
        </div>
        </div>
        
        <!-- ======= Trainers Section ======= -->
    
        <section id="Site developers" class="site developers">
              <div id="team">
                <div class="section-header">
                  <span>Website developers</span>
                  <h2>Website developers</h2>
                </div>
                <div class="testimonial-box">
                  <div class="container">
                    <div class="row">
                    
                        <div class="team-slider owl-carousel">
                        
                          <div class="single-box text-center" >
                          <div class="cardcontainer">
                              <div class="profile-card">
                                <div class="profile-img">
                                  <img src="assets/img/trainers/siddhu.jpg" alt="Team Image" />
                                </div>
                                <div class="profile-content">
                                  <h2 class="title">siddhu from srikakulam
                                    <span>UI UX-Designer & Frontend webdeveloper</span>
                                  </h2>
                                  <ul class="social-link">
                                    <li><a href="https://www.linkedin.com/in/siddartha-yernagula-a4745b238/" class="fa fa-linkedin"></a></li>
                                    <li><a href="https://www.instagram.com/siddhu_from_srikakulam/" class="fa fa-instagram"></a></li>
                                    <li><a href="https://www.instagram.com/siddhu_from_srikakulam/" class="fa fa-facebook"></a></li>
                                    <li><a href="https://www.linkedin.com/in/siddartha-yernagula-a4745b238/" class="fa fa-twitter"></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                           </div>
                          <div class="single-box text-center">
                          <div class="cardcontainer">
                              <div class="profile-card">
                                <div class="profile-img">
                                  <img src="assets/img/trainers/rohita.jpeg" alt="Team Image" />
                                </div>
                                <div class="profile-content">
                                  <h2 class="title">Rohita Uppara
                                    <span>Fullstack Webdeveloper</span>
                                  </h2>
                                  <ul class="social-link">
                                    <li><a href="https://www.linkedin.com/in/rohitha-uppala-002092180" class="fa fa-linkedin"></a></li>
                                    <li><a href="https://instagram.com/rohitha_uppala?igshid=YmMyMTA2M2Y=" class="fa fa-instagram"></a></li>
                                    <li><a href="" class="fa fa-facebook"></a></li>
                                    <li><a href="" class="fa fa-twitter"></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                         
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        
             
            </div>
          </section>
         
          </div>
        </section>
  </main><!-- End #main -->
<br>




<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>E-Crush</h4>
          <p>
            
            Rajiv Gandhi University of Knowledge Technologies<br>
            Nuzvid,
            Eluru,<br>
            Andhra Pradesh - 521201</p>
            <br>
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
            <input type="email" name="email"><input type="submit" value="send">
          </form>
          <br>
          
          <div class="social-links text-center text-md-right pt-3 pt-md-0">
            
              <div class="icons">
                <a href="https://www.youtube.com/channel/UCG7OmgaVdsa0QASdBsHNo-w" class="yt"><i class="fab fa-youtube"></i></a>
                <a href="https://www.facebook.com/ecrush.rgukt.9" class="fb"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/ERgukt?s=08" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com/ecrushrguktn?utm_medium=copy_link" class="insta"><i class="fab fa-instagram"></i></a>
                <a href="http://www.linkedin.com/in/ecrush-rguktn" class="linkedin"><i class="fab fa-linkedin"></i></a>
              </div>
      
          </div>
          </div>
        </div>
       
     
        </div>

      </div>
    </div>
  </div>

  <div class="container  py-4">

    <div class="me-md-auto text-center text-md-start">
      <div class="copyright" style="text-align:center;">
        &copy; Copyright <strong><span>E-Crush</span></strong>. All Rights Reserved
    
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
        Designed by <a href="web development.html">Web Team Ecrush</a>
      </div>
    </div>
  </div>

</footer><!-- End Footer -->
<div  class="toast-container">
  <div class="image">
    <img src="assets/img/buzzer.png" alt="" />
  </div>

  <div class="text-content">
    <h3>
      Hello Amigos!, The new core team of the Ecrush has been announced . Please
    <a href="sebpage.html" style="pointer-events:all">   click here</a> to know more.
    </h3>
    <p class="author-name">E-Crush</p>
  </div>

  <div >
  <img class="close" style="pointer-events:all" src="assets/img/close-icon.png"  alt="" /> </a>
  </div>
</div>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>
<script>
  $( document ).ready(function() {
    $(".close").click(function(){
      console.log( "ready!" );
      $(".toast-container").removeClass("active");
      console.log( "ready!" );
    });
});

  $('.team-slider').owlCarousel({
    loop: false,
    nav: true,
    autoplay: false,
    autoplayTimeout: 10000,
    smartSpeed: 800,
    margin: 20,
    responsive: {
      0: {
        items: 1,
        loop: true,
      },
      768: {
        loop: true,
        items: 2,
      },
      991: {
        loop: true,
        items: 3,
      },
      1200: {
        items: 4,
      },
      1920: {
        items: 4,
      }
    }
  });

  $(".posts").owlCarousel({
        autoplay: true,
        slideSpeed:1000,
        loop: true,
        nav:false,
        margin: 30,
        dots: true,
        responsive:{
          0:{
            items:1
          },
          767:{
            items:1
          },
          600:{
            items:1
          },
          1000:{
            items:1
          }
        }
        
      });
      var nav = document.querySelector('header');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-white');
        } else {
          nav.classList.remove('bg-white');
        }
      });
  
</script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js'></script>

</body>

</html>