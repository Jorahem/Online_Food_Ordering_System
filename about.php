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
    <link rel="stylesheet" href="about.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/OnlineFoodDelivery/assets/css/about.css"> -->
    <link rel = "icon" href ="img/logo.jpg" type = "image/x-icon">
    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

    <!-- Vendor CSS Files -->
    <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet"> -->




</head>
<body>
<?php include 'partials/_dbconnect.php';?>
<?php include 'partials/_nav.php';?>
    
    <section class="about-hero">
        <div class="hero-content">
            <h1>Welcome to FFC Dhangadhi</h1>
            <p>Where Taste Meets Tradition</p>
        </div>
    </section>




    <section class="our-story">
        <div class="story-container">
            <div class="story-text" data-aos="fade-right">
                <h2>Our Story <i class="fas fa-utensils" aria-hidden="true"></i></h2>
                <p>FFC Dhangadhi, established in the heart of Ratopool, has been serving delicious fast food with a local twist since 2015. What started as a small corner shop has now grown into one of the most beloved eateries in Sudurpashchim Province.</p>
                <p>Our commitment to quality ingredients, authentic flavors, and exceptional service has made us a favorite among locals and visitors alike. We take pride in being more than just a restaurant - we're a part of the Dhangadhi community.</p>
            </div>
            <div class="story-image" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9" alt="Restaurant Interior" loading="lazy">
            </div>
        </div>
    </section>


    <!-- Why Choose Us Section -->
    <section class="why-choose-us">
        <h2>Why Choose FFC?</h2>
        <div class="features-grid">
            <div class="feature-card" data-aos="fade-up">
                <i class="fas fa-utensils"></i>
                <h3>Quality Ingredients</h3>
                <p>We source the freshest ingredients from local suppliers to ensure the best taste and quality.</p>
            </div>
            <div class="feature-card" data-aos="fade-up">
                <i class="fas fa-clock"></i>
                <h3>Fast Service</h3>
                <p>Quick service without compromising on quality - your food is prepared fresh and served promptly.</p>
            </div>
            <div class="feature-card" data-aos="fade-up">
                <i class="fas fa-heart"></i>
                <h3>Made with Love</h3>
                <p>Every dish is prepared with care and attention to detail by our experienced chefs.</p>
            </div>
            <div class="feature-card" data-aos="fade-up">
                <i class="fas fa-leaf"></i>
                <h3>Hygiene First</h3>
                <p>We maintain the highest standards of cleanliness and food safety.</p>
            </div>
        </div>
    </section>

    <!-- Our Team Section -->
    <section class="our-team">
        <h2>Meet Our Team</h2>
        <div class="team-grid">
            <div class="team-member">
                <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c" alt="Head Chef">
                <h3>Chef Rajesh Sharma</h3>
                <p>Head Chef</p>
            </div>
            <div class="team-member">
                <img src="https://images.unsplash.com/photo-1566554273541-37a9ca77b91f" alt="Sous Chef">
                <h3>Chef Priya Patel</h3>
                <p>Sous Chef</p>
            </div>
            <div class="team-member">
                <img src="https://images.unsplash.com/photo-1442115597578-2d0fb2413734" alt="Manager">
                <h3>Amit Thapa</h3>
                <p>Restaurant Manager</p>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section class="achievements">
        <h2>Our Achievements</h2>
        <div class="achievements-grid">
            <div class="achievement-card">
                <div class="achievement-number">5000+</div>
                <p>Happy Customers</p>
            </div>
            <div class="achievement-card">
                <div class="achievement-number">50+</div>
                <p>Menu Items</p>
            </div>
            <div class="achievement-card">
                <div class="achievement-number">8</div>
                <p>Years of Service</p>
            </div>
            <div class="achievement-card">
                <div class="achievement-number">#1</div>
                <p>Restaurant in Dhangadhi</p>
            </div>
        </div>
    </section>

 

    <section class="gallery">
        <h2>Our Restaurant Gallery</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="img/gallary1.jpg" alt="Cozy Dining Area" loading="lazy">
            </div>
            <div class="gallery-item">
                <img src="img/gallary2.jpg" alt="Delicious Special Dish" loading="lazy">
            </div>
            <div class="gallery-item">
                <img src="img/gallary3.jpg" alt="Food Preparation" loading="lazy">
            </div>
            <div class="gallery-item">
                <img src="img/gallary4.jpg" alt="Restaurant Interior" loading="lazy">
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div class="lightbox" id="lightbox">
            <div class="lightbox-content">
                <span class="lightbox-close" id="lightbox-close"></span>
                <img src="" alt="Expanded Image" id="lightbox-img">
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="location">
        <h2>Visit Us</h2>
        <div class="location-container">
            <div class="map">
                <!-- Replace with actual Google Maps embed code -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.8887243421447!2d80.5800000!3d28.7000000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDQyJzAwLjAiTiA4MMKwMzQnNDguMCJF!5e0!3m2!1sen!2snp!4v1635000000000!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="address-info">
                <h3>Our Location</h3>
                <p><i class="fas fa-map-marker-alt"></i> Ratopool, Dhangadhi, Sudurpashchim Province</p>
                <p><i class="fas fa-phone"></i> +977-91-XXXXXXX</p>
                <p><i class="fas fa-envelope"></i> info@ffcdhangadhi.com</p>
                <div class="opening-hours">
                    <h3>Opening Hours</h3>
                    <p>Monday - Saturday: 10:00 AM - 10:00 PM</p>
                    <p>Sunday: 11:00 AM - 9:00 PM</p>
                </div>
            </div>
        </div>
    </section>


    

  <?php include 'partials/_footer.php';?> 

    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>

    
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>

 
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 1000, 
        once: true,     
      });
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
        });
        
        // Lightbox Functionality
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const lightboxClose = document.getElementById('lightbox-close');
const galleryItems = document.querySelectorAll('.gallery-item img');

galleryItems.forEach(item => {
    item.addEventListener('click', () => {
        lightboxImg.src = item.src;
        lightbox.classList.add('active');
    });
});

lightboxClose.addEventListener('click', () => {
    lightbox.classList.remove('active');
});

lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) {
        lightbox.classList.remove('active');
    }
});
    </script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


  </body>
</html>
