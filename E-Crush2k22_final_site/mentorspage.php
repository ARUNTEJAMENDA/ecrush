<?php include "php/config.php" ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Mentorspage | E-Crush </title>
    <meta content="" name="description">
    <meta content="" name=""> 
    <!-- Jquery cdn -->
  <?php include "repeats/dumpyard.php" ?>

  <style>
    .team .team-member .member-img {
      border-radius: 8px;
      overflow: hidden;
    }
    .team .team-member .social {
      position: absolute;
      left: 0;
      top: -18px;
      right: 0;
      opacity: 0;
      transition: ease-in-out 0.3s;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .team .team-member .social a {
      transition: color 0.3s;
      color: white;
      background: #2456e7;
      margin: 0 5px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      transition: 0.3s;
    }
    .team .team-member .social a i {
      line-height: 0;
      font-size: 16px;
    }
    .team .team-member .social a:hover {
      background: white;
    }
    .team .team-member .social i {
      font-size: 18px;
      margin: 0 2px;
    }
    .team .team-member .member-info {
      padding: 30px 15px;
      text-align: center;
      box-shadow: 0px 2px 15px rgba(0,0,0, 0.1);
      background: white;
      margin: -50px 20px 0 20px;
      position: relative;
      border-radius: 8px;
    }
    .team .team-member .member-info h4 {
      font-weight: 400;
      margin-bottom: 5px;
      font-size: 24px;
      color: black;
    }
    .team .team-member .member-info span {
      display: block;
      font-size: 16px;
      font-weight: 400;
      color: var(--color-gray);
    }
    .team .team-member .member-info p {
      font-style: italic;
      font-size: 14px;
      line-height: 26px;
      color: var(--color-gray);
    }
    .team .team-member:hover .social {
      opacity: 1;
    }
    
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <img style="height:60px; width:70px" src="assets/img/favicon.png">
      <h1 class="logo me-auto"><a href="index.php"><span>E-Crush</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="navElement"><a class="active" href="index.php" id="navElement">Home</a></li>
          <li class="navElement"><a href="about.php" id="navElement">About</a></li>
          <li class="navElement"><a href="trainers.php" id="navElement">Weekend Trivia</a></li>
          <li class="navElement"><a href="courses.php" id="navElement">Courses</a></li>

          <li class="navElement"><a href="events.php" id="navElement">Events</a></li>


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
      <div class="d-none d-lg-block">

        <a href="login.php" class="get-started-btn">Log in</a>
      </div>

    </div>
  </header>
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Contact Us</h2>
      <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
    </div>
  </div>
  <!-- End Header -->
  <div class="container  pt-5 mt-5">
    <h1 class="main-headings">MENTORS GROUP</h1>
    <section id="team" class="team">
    <div class="row">
      <div class="col-12 col-md-4 mb-3">
       <div class="team-member">
          <div class="member-img">
            <img src="assets/img/trainers/sid9.jpeg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            <h4>name</h4>
            <span>desigination</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-3">
       <div class="team-member">
          <div class="member-img">
            <img src="assets/img/trainers/sid9.jpeg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            <h4>name</h4>
            <span>desigination</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-3">
       <div class="team-member">
          <div class="member-img">
            <img src="assets/img/trainers/sid9.jpeg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            <h4>name</h4>
            <span>desigination</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-3">
       <div class="team-member">
          <div class="member-img">
            <img src="assets/img/trainers/sid9.jpeg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            <h4>name</h4>
            <span>desigination</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-3">
       <div class="team-member">
          <div class="member-img">
            <img src="assets/img/trainers/sid9.jpeg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            <h4>name</h4>
            <span>desigination</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-3">
       <div class="team-member">
          <div class="member-img">
            <img src="assets/img/trainers/sid9.jpeg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            <h4>name</h4>
            <span>desigination</span>
          </div>
        </div>
      </div>
    </div>
    </section>
  </div>
  <!-- footerr -->
<?php include "repeats/footer.php"?>

<!-- End Footer -->

</body>

</html>