<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>About Us</title>
    <link rel = "icon" href ="img/logo.jpg" type = "image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom CSS (Add this to your style.css or within a <style> tag) -->
    <style>
      /* Cool progress bar animation */
.animated-progress {
  animation: progress-animation 2s ease-in-out;
}

@keyframes progress-animation {
  from {
    width: 0%;
  }
}

/* Smooth fade effects */
[data-aos] {
  opacity: 0;
  transition: all 0.8s ease-in-out;
}

[data-aos].aos-animate {
  opacity: 1;
}

/* Add hover effects */
h3 strong {
  transition: color 0.3s ease-in-out;
}

h3 strong:hover {
  color: #ff5733;
}

/* ======= Our Team Section Styling ======= */
/* (Include the CSS provided above here) */
    </style>

  </head>
  <body>
  <?php include 'partials/_dbconnect.php';?>
  <?php include 'partials/_nav.php';?>
  
      <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
   
          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/slide/slide-1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>FFC</span></h2>
                <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>
      
          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/slide/slide-2.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown mb-0">Our Mission</h2>
                <p class="animate__animated animate__fadeInUp">To be number one</p>
                <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>
       
          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/slide/slide-3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown mb-0">Parmar Darshan Kiritbhai</h2><p>CE084 <a href="https://github.com/darshankparmar" target="_blank">@darshankparmar</a></p>
                <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-thin-double-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-thin-double-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section>
  <main id="main">


     <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3>Welcome to <strong>Fast Food Corner</strong></h3>
            <h3><strong>The best online food ordering system</strong></h3>
            <p class="font-italic">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <div class="skills-content">
              <p><b>Rating: </b></p>
              <div class="progress">
                <span class="skill">5 star <i class="val">93%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">4 star <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">3 star <i class="val">30%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">2 star <i class="val">5%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">1 star <i class="val">0%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <style>
      /* Cool progress bar animation */
.animated-progress {
  animation: progress-animation 2s ease-in-out;
}

@keyframes progress-animation {
  from {
    width: 0%;
  }
}

/* Smooth fade effects */
[data-aos] {
  opacity: 0;
  transition: all 0.8s ease-in-out;
}

[data-aos].aos-animate {
  opacity: 1;
}

/* Add hover effects */
h3 strong {
  transition: color 0.3s ease-in-out;
}

h3 strong:hover {
  color: #ff5733;
}

    </style>

    <!-- <section id="about" class="about py-5">
  <div class="container">
    <div class="section-title text-center" data-aos="fade-up">
      <h2>About Us</h2>
    </div>

    <div class="row align-items-center">
      <div class="col-lg-6" data-aos="fade-right">
        <h3>Welcome to <strong>Fast Food Corner</strong></h3>
        <h3><strong>The best online food ordering system</strong></h3>
        <p class="font-italic">
          Experience the best flavors with us!
        </p>
      </div> -->

      <!-- <section id="about" class="about py-5">
  <div class="container">
    <div class="section-title text-center" data-aos="fade-up">
      <h2>About Us</h2>
    </div>

    <div class="row align-items-center">
      <div class="col-12 col-lg-6" data-aos="fade-right">
        <h3>Welcome to <strong>Fast Food Corner</strong></h3>
        <h3><strong>The best online food ordering system</strong></h3>
        <p class="font-italic">
          Experience the best flavors with us!
        </p>
      </div>
      <div class="col-12 col-lg-6" data-aos="fade-left">
        <img src="path/to/your/image.jpg" class="img-fluid" alt="About Us Image">
      </div>
    </div>
  </div>
</section> -->

<!-- 
      <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
        <div class="skills-content">
          <p><b>Rating: </b></p> -->

          <!-- <div class="progress">
            <span class="skill">5 star <i class="val">93%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar animated-progress" role="progressbar" style="width: 93%;"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">4 star <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar animated-progress" role="progressbar" style="width: 90%;"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">3 star <i class="val">30%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar animated-progress" role="progressbar" style="width: 30%;"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">2 star <i class="val">5%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar animated-progress" role="progressbar" style="width: 5%;"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">1 star <i class="val">0%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar animated-progress" role="progressbar" style="width: 0%;"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section> -->


    <section class="counts section-bg">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">232</span>
              <p><strong>Happy Customers</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">121</span>
              <p><strong>Items</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">14</span>
              <p><strong>Hours Of Support</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">12</span>
              <p><strong>Hard Workers</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section>

   
    <section id="team" class="team py-5">
      <div class="container">

        <div class="section-title text-center" data-aos="fade-up">
          <h2>Our Team</h2>
        </div>

        <div class="row">

          <!-- Team Member 1 -->
          <div class="col-xl-3 col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="Darshan Parmar">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Darshan Parmar</h4>
                </div>
                <div class="social">
                  <a href="https://twitter.com/darshankparmar" target="_blank"><i class="fab fa-twitter"></i></a>
                  <a href="https://github.com/darshankparmar" target="_blank"><i class="fab fa-github"></i></a>
                  <a href="https://www.linkedin.com/in/darshankparmar/" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Team Member 2 -->
          <div class="col-xl-3 col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="Harsh Patel">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Harsh Patel</h4>
                </div>
                <div class="social">
                  <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                  <a href="https://github.com/7Har" target="_blank"><i class="fab fa-github"></i></a>
                  <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Team Member 3 -->
          <div class="col-xl-3 col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/team-5.jpg" class="img-fluid member-img" alt="Bhavesh Parmar">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Bhavesh Parmar</h4>
                </div>
                <div class="social">
                  <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                  <a href="https://github.com/Blparmar007" target="_blank"><i class="fab fa-github"></i></a>
                  <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Add more team members as needed -->

        </div>
      </div>
    </section><  </main>

  <?php include 'partials/_footer.php';?> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>

    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 1000, // Animation duration in milliseconds
        once: true,     // Whether animation should happen only once - while scrolling down
      });
    </script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


  </body>
</html>
