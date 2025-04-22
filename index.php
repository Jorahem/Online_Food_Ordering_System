<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <style>
  .hero {
    height: 100vh;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('https://images.unsplash.com/photo-1504674900247-0877df9cc836') center/cover;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    margin-top: -16px;
}

.hero-content {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 1s ease forwards;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.hero-content h1 {
    font-size: 3.5rem;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.hero-content p {
    font-size: 1.4rem;
    margin-bottom: 2rem;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

.order-btn {
    padding: 1.2rem 2.5rem;
    font-size: 1.2rem;
    background: #e74c3c;
    color: white;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s;
    position: relative;
    overflow: hidden;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: bold;
    box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3);
}

.order-btn::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.order-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(231, 76, 60, 0.4);
}

.order-btn:hover::before {
    width: 300px;
    height: 300px;
}
.card-img-top {
    width: 100%; /* Ensures image takes the full width of the card */
    height: 200px; /* Fixed height for consistency */
    object-fit: cover; /* Ensures images maintain aspect ratio and cover the area */
    border-radius: 10px; /* Optional: Adds rounded corners */
}
/* Fade-in animation for menu cards */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.animate-menu {
    animation: fadeInUp 0.8s ease-out both;
}

/* Hover Effect on Menu Cards */
.menu-card {
    transition: all 0.3s ease-in-out;
    border-radius: 15px;
    overflow: hidden;
}
.menu-card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

/* Pulse effect for buttons */
@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.4); }
    50% { box-shadow: 0 0 10px 5px rgba(0, 123, 255, 0.2); }
    100% { box-shadow: 0 0 0 0 rgba(0, 123, 255, 0); }
}
.pulse-btn {
    animation: pulse 1.5s infinite;
    transition: transform 0.3s ease;
}
.pulse-btn:hover {
    transform: translateY(-2px);
}


  /*menu*/
/*  */
</style>



    <title>Home</title>
    <link rel = "icon" href ="img/logo.jpg" type = "image/x-icon">
  </head>
<body>
  <?php include 'partials/_dbconnect.php';?>
  <?php require 'partials/_nav.php' ?>
  
        <section id="home" class="hero">
        <div class="hero-content">
            <h1>Welcome to Fast Food Corner</h1>
            <p>Delicious food delivered to your doorstep</p>
            <button class="order-btn">Order Now</button>
        </div>
    </section>




    <!-- <div class="container my-3 mb-5">
    <div class="col-lg-2 text-center bg-light my-3" style="margin:auto;border-top: 2px groove black;border-bottom: 2px groove black;">     
        <h2 class="text-center" style="font-size: 2.5rem; color: #ff4500; font-weight: bold; background-color: #f8f9fa; padding: 15px 20px; border-top: 4px groove #000; border-bottom: 4px groove #000; display: inline-block; border-radius: 10px; margin: 20px auto;">
            Menu
        </h2>
    </div> -->


    <div class="container my-5">
    <div class="text-center my-4">
        <h2 class="text-uppercase font-weight-bold text-danger position-relative d-inline-block pb-2" 
            style="border-bottom: 4px solid black;">
            Menu
        </h2>
    </div>
    <div class="row justify-content-center"> 
        <?php 
            $sql = "SELECT * FROM `categories`"; 
            $result = mysqli_query($conn, $sql);
            $delay = 0.1; 
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['categorieId'];
                $cat = $row['categorieName'];
                $desc = $row['categorieDesc'];
                
                echo '<div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4 d-flex justify-content-center animate-menu" 
                        style="animation-delay: '. $delay .'s;">
                        <div class="card menu-card shadow-lg" style="width: 18rem;">
                            <img src="img/card-' . $id . '.jpg?v=' . time() . '" class="card-img-top" alt="image for this category">
                            <div class="card-body text-center">
                                <h5 class="card-title"><a href="viewFoodList.php?catid=' . $id . '">' . $cat . '</a></h5>
                                <p class="card-text">' . substr($desc, 0, 30). '... </p>
                                <a href="viewFoodList.php?catid=' . $id . '" class="btn btn-primary pulse-btn">View All</a>
                            </div>
                        </div>
                    </div>';
                $delay += 0.2; 
            }
        ?>
    </div>
</div>


    </div>
  </div>


    <?php require 'partials/_footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
    <script>

const heroText = document.querySelector('.hero-content h1');
if (heroText) {
    const text = heroText.textContent;
    heroText.textContent = '';
    
    text.split('').forEach((char, i) => {
        const span = document.createElement('span');
        span.textContent = char === ' ' ? '\u00A0' : char;
        span.style.opacity = '0';
        span.style.transform = 'translateY(20px)';
        span.style.transition = `all 0.3s ease ${i * 0.05}s`;
        heroText.appendChild(span);
    });
    
    setTimeout(() => {
        heroText.querySelectorAll('span').forEach(span => {
            span.style.opacity = '1';
            span.style.transform = 'translateY(0)';
        });
    }, 100);
}
</script>



</body>
</html>





<!-- <div class="container my-3 mb-5">
    <div class="col-lg-2 text-center bg-light my-3" style="margin:auto;border-top: 2px groove black;border-bottom: 2px groove black;">     
      <h2 class="text-center">Menu </h2>
      <h2 class="text-center" style="font-size: 2.5rem; color: #ff4500; font-weight: bold; background-color: #f8f9fa; padding: 15px 20px; border-top: 4px groove #000; border-bottom: 4px groove #000; display: inline-block; border-radius: 10px; margin: 20px auto;">
  Menu
</h2>

    </div>
    <div class="row">
      <!-- Fetch all the categories and use a loop to iterate through categories -->
      <?php 
  // $sql = "SELECT * FROM `categories`"; 
  // $result = mysqli_query($conn, $sql);
  // while($row = mysqli_fetch_assoc($result)){
  //   $id = $row['categorieId'];
  //   $cat = $row['categorieName'];
  //   $desc = $row['categorieDesc'];
    
  //   // Correctly format the image path inside echo
  //   echo '<div class="col-xs-3 col-sm-3 col-md-3">
  //           <div class="card" style="width: 18rem;">
  //             <img src="img/card-' . $id . '.jpg?v=' . time() . '" class="card-img-top" alt="image for this category" >
  //             <div class="card-body">
  //               <h5 class="card-title"><a href="viewFoodList.php?catid=' . $id . '">' . $cat . '</a></h5>
  //               <p class="card-text">' . substr($desc, 0, 30). '... </p>
  //               <a href="viewFoodList.php?catid=' . $id . '" class="btn btn-primary">View All</a>
  //             </div>
  //           </div>
  //         </div>';
  // }
?>
 


