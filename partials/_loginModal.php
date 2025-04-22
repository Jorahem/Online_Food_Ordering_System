
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered animate__animated animate__zoomIn" role="document">
        <div class="modal-content glass-effect">
          <div class="modal-header border-0">
            <h5 class="modal-title fw-bold" id="loginModal">Welcome Back!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body px-4 py-4">
            <form action="partials/_handleLogin.php" method="post">
              <div class="form-floating mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                  <input class="form-control custom-input" id="loginusername" name="loginusername" placeholder="Username" type="text" required>
                  <label for="loginusername"><i class="fas fa-user me-2"></i>Username</label>
              </div>
              <div class="form-floating mb-4 animate__animated animate__fadeInUp animate__delay-2s">
                  <input class="form-control custom-input" id="loginpassword" name="loginpassword" placeholder="Password" type="password" required data-toggle="password">
                  <label for="loginpassword"><i class="fas fa-lock me-2"></i>Password</label>
              </div>
              <div class="d-grid gap-2 animate__animated animate__fadeInUp animate__delay-3s">
                <button type="submit" class="btn custom-btn pulse-effect">
                  <span>Login</span>
                  <i class="fas fa-arrow-right ms-2"></i>
                </button>
              </div>
            </form>
            <p class="text-center mt-4 mb-0 animate__animated animate__fadeInUp animate__delay-4s">
              Don't have an account? 
              <a href="#" class="signup-link" data-dismiss="modal" data-toggle="modal" data-target="#signupModal">
                Create Account
                <i class="fas fa-chevron-right ms-1"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>

<style>
.glass-effect {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    box-shadow: 
        0 8px 32px rgba(31, 38, 135, 0.15),
        inset 0 0 0 1px rgba(255, 255, 255, 0.1);
}

.modal-title {
    position: relative;
    overflow: hidden;
    background: linear-gradient(45deg, #2193b0, #6dd5ed);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 1.8rem;
}

.modal-title::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255, 255, 255, 0.4),
        transparent
    );
    animation: shimmer 3s infinite;
}

@keyframes shimmer {
    0% { left: -100%; }
    100% { left: 100%; }
}

.custom-input {
    border: 2px solid #eee;
    border-radius: 12px;
    padding: 12px 20px;
    height: 55px;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    background: rgba(255, 255, 255, 0.9);
    position: relative;
    z-index: 1;
}

.custom-input::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 12px;
    padding: 2px;
    background: linear-gradient(45deg, #2193b0, #6dd5ed);
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    opacity: 0;
    transition: opacity 0.4s ease;
}

.custom-input:focus::before {
    opacity: 1;
}

.custom-btn {
    background: linear-gradient(45deg, #2193b0, #6dd5ed);
    border: none;
    color: white;
    padding: 12px 30px;
    border-radius: 12px;
    font-weight: 600;
    letter-spacing: 0.5px;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.custom-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        120deg,
        transparent,
        rgba(255, 255, 255, 0.3),
        transparent
    );
    transition: 0.5s;
}

.custom-btn:hover::before {
    left: 100%;
}

.pulse-effect {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(33, 147, 176, 0.4);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(33, 147, 176, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(33, 147, 176, 0);
    }
}

.signup-link {
    position: relative;
    display: inline-block;
    padding: 0.5rem 1rem;
    overflow: hidden;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.signup-link:hover {
    background: rgba(33, 147, 176, 0.1);
    transform: translateY(-2px);
}

.signup-link i {
    transition: transform 0.3s ease;
}

.signup-link:hover i {
    transform: translateX(5px);
}

/* Animation classes */
.animate__animated {
    animation-duration: 0.8s;
}

.animate__delay-1s { animation-delay: 0.2s; }
.animate__delay-2s { animation-delay: 0.4s; }
.animate__delay-3s { animation-delay: 0.6s; }
.animate__delay-4s { animation-delay: 0.8s; }

@keyframes zoomIn {
    from {
        opacity: 0;
        transform: scale3d(0.3, 0.3, 0.3);
    }
    50% {
        opacity: 1;
    }
}

.animate__zoomIn {
    animation-name: zoomIn;
}

/* Add floating animation to inputs on focus */
@keyframes float {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-5px);
    }
    100% {
        transform: translateY(0px);
    }
}

.custom-input:focus {
    animation: float 3s ease-in-out infinite;
}

/* Enhanced form floating labels */
.form-floating label {
    padding-left: 16px;
    color: #666;
    transition: all 0.3s ease;
}

.form-floating input:focus ~ label {
    color: #2193b0;
    transform: translateY(-1.5rem) scale(0.85);
    text-shadow: 0 0 10px rgba(33, 147, 176, 0.2);
}

/* New loading state for button */
.custom-btn.loading {
    position: relative;
    pointer-events: none;
}

.custom-btn.loading span {
    opacity: 0;
}

.custom-btn.loading::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    top: 50%;
    left: 50%;
    margin: -10px 0 0 -10px;
    border: 3px solid rgba(255, 255, 255, 0.3);
    border-top-color: white;
    border-radius: 50%;
    animation: spin 1s infinite linear;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

/* Improved focus states */
*:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(33, 147, 176, 0.2);
}

/* Smooth scrollbar for modal */
.modal-body {
    scrollbar-width: thin;
    scrollbar-color: #2193b0 #ffffff;
}

.modal-body::-webkit-scrollbar {
    width: 8px;
}

.modal-body::-webkit-scrollbar-track {
    background: #ffffff;
    border-radius: 4px;
}

.modal-body::-webkit-scrollbar-thumb {
    background: linear-gradient(45deg, #2193b0, #6dd5ed);
    border-radius: 4px;
}

/* New 3D hover effect for the entire modal */
.modal-content {
    transition: transform 0.3s ease;
    transform-style: preserve-3d;
    perspective: 1000px;
}

.modal-content:hover {
    transform: rotateX(2deg) rotateY(2deg);
}

/* Add these styles for the close button */
.close {
    background: transparent;
    border: none;
    position: absolute;
    right: 20px;
    top: 20px;
    font-size: 1.5rem;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #666;
    transition: all 0.3s ease;
    padding: 0;
}

.close:hover {
    background: rgba(33, 147, 176, 0.1);
    color: #2193b0;
    transform: rotate(90deg);
}

.close span {
    line-height: 1;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<script>
document.querySelector('form').addEventListener('submit', function(e) {
    const button = this.querySelector('.custom-btn');
    button.classList.add('loading');
});
</script>






<!-- Login Modal -->
<!-- <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: rgb(111 202 203);">
            <h5 class="modal-title" id="loginModal">Login Here</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="partials/_handleLogin.php" method="post">
              <div class="text-left my-2">
                  <b><label for="username">Username</label></b>
                  <input class="form-control" id="loginusername" name="loginusername" placeholder="Enter Your Username" type="text" required>
              </div>
              <div class="text-left my-2">
                  <b><label for="password">Password</label></b>
                  <input class="form-control" id="loginpassword" name="loginpassword" placeholder="Enter Your Password" type="password" required data-toggle="password">
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <p class="mb-0 mt-1">Don't have an account? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signupModal">Sign up now</a>.</p>
          </div>
        </div>
      </div>
    </div> -->

