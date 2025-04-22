  <!-- Sign up Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered animate__animated animate__zoomIn" role="document">
        <div class="modal-content glass-effect">
          <div class="modal-header border-0">
            <h5 class="modal-title fw-bold" id="signupModal">Create Account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body px-4 py-4">
            <form action="partials/_handleSignup.php" method="post">
              <div class="form-floating mb-3 animate__animated animate__fadeInUp animate__delay-1s">
                <input class="form-control custom-input" id="username" name="username" placeholder="Username" type="text" required minlength="3" maxlength="11">
                <label for="username"><i class="fas fa-user me-2"></i>Username</label>
              </div>
              
              <div class="row animate__animated animate__fadeInUp animate__delay-2s">
                <div class="col-md-6 mb-3">
                  <div class="form-floating">
                    <input class="form-control custom-input" id="firstName" name="firstName" placeholder="First Name" type="text" required>
                    <label for="firstName"><i class="fas fa-user-circle me-2"></i>First Name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-floating">
                    <input class="form-control custom-input" id="lastName" name="lastName" placeholder="Last Name" type="text" required>
                    <label for="lastName"><i class="fas fa-user-circle me-2"></i>Last Name</label>
                  </div>
                </div>
              </div>

              <div class="form-floating mb-3 animate__animated animate__fadeInUp animate__delay-3s">
                <input class="form-control custom-input" id="email" name="email" placeholder="Email" type="email" required>
                <label for="email"><i class="fas fa-envelope me-2"></i>Email</label>
              </div>

              <div class="form-floating mb-3 animate__animated animate__fadeInUp animate__delay-4s">
                <div class="input-group">
                  <span class="input-group-text country-code">+977</span>
                  <input type="tel" class="form-control custom-input" id="phone" name="phone" placeholder="Phone Number" required pattern="[0-9]{10}" maxlength="10">
                </div>
              </div>

              <div class="form-floating mb-3 animate__animated animate__fadeInUp animate__delay-5s">
                <input class="form-control custom-input" id="password" name="password" placeholder="Password" type="password" required minlength="4" maxlength="21">
                <label for="password"><i class="fas fa-lock me-2"></i>Password</label>
              </div>

              <div class="form-floating mb-4 animate__animated animate__fadeInUp animate__delay-6s">
                <input class="form-control custom-input" id="cpassword" name="cpassword" placeholder="Confirm Password" type="password" required minlength="4" maxlength="21">
                <label for="cpassword"><i class="fas fa-lock me-2"></i>Confirm Password</label>
              </div>

              <div class="d-grid gap-2 animate__animated animate__fadeInUp animate__delay-7s">
                <button type="submit" class="btn custom-btn pulse-effect">
                  <span>Create Account</span>
                  <i class="fas fa-arrow-right ms-2"></i>
                </button>
              </div>
            </form>
            <p class="text-center mt-4 mb-0 animate__animated animate__fadeInUp animate__delay-8s">
              Already have an account? 
              <a href="#" class="login-link" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">
                Login here
                <i class="fas fa-chevron-right ms-1"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>

<style>
/* Base styles from login modal */
.glass-effect {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    box-shadow: 0 8px 32px rgba(31, 38, 135, 0.15);
}

/* Enhanced input styling */
.custom-input {
    border: 2px solid #eee;
    border-radius: 12px;
    padding: 12px 20px;
    height: 55px;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    background: rgba(255, 255, 255, 0.9);
}

.custom-input:focus {
    border-color: #2193b0;
    box-shadow: 0 0 0 4px rgba(33, 147, 176, 0.1);
    transform: translateY(-2px);
}

/* Phone input specific styling */
.country-code {
    background: linear-gradient(45deg, #2193b0, #6dd5ed);
    color: white;
    border: none;
    border-radius: 12px 0 0 12px;
    padding: 12px 15px;
}

/* Title styling */
.modal-title {
    background: linear-gradient(45deg, #2193b0, #6dd5ed);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 1.8rem;
    position: relative;
}

/* Submit button styling */
.custom-btn {
    background: linear-gradient(45deg, #2193b0, #6dd5ed);
    border: none;
    color: white;
    padding: 15px 30px;
    border-radius: 12px;
    font-weight: 600;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
}

.custom-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(33, 147, 176, 0.3);
}

/* Form floating labels */
.form-floating label {
    padding-left: 16px;
    color: #666;
}

.form-floating input:focus ~ label {
    color: #2193b0;
}

/* Login link styling */
.login-link {
    color: #2193b0;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    padding: 8px 16px;
    border-radius: 8px;
}

.login-link:hover {
    background: rgba(33, 147, 176, 0.1);
    color: #6dd5ed;
}

.login-link i {
    transition: transform 0.3s ease;
}

.login-link:hover i {
    transform: translateX(5px);
}

/* Close button styling */
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
}

.close:hover {
    background: rgba(33, 147, 176, 0.1);
    color: #2193b0;
    transform: rotate(90deg);
}

/* Animation delays */
.animate__delay-1s { animation-delay: 0.1s; }
.animate__delay-2s { animation-delay: 0.2s; }
.animate__delay-3s { animation-delay: 0.3s; }
.animate__delay-4s { animation-delay: 0.4s; }
.animate__delay-5s { animation-delay: 0.5s; }
.animate__delay-6s { animation-delay: 0.6s; }
.animate__delay-7s { animation-delay: 0.7s; }
.animate__delay-8s { animation-delay: 0.8s; }

/* Input validation styling */
.custom-input:valid {
    border-color: #28a745;
}

.custom-input:invalid:not(:placeholder-shown) {
    border-color: #dc3545;
}

/* Password strength indicator */
.password-strength {
    height: 4px;
    margin-top: 8px;
    border-radius: 2px;
    transition: all 0.3s ease;
}

/* Floating animation */
@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-5px); }
    100% { transform: translateY(0px); }
}

.form-floating:hover .custom-input {
    animation: float 3s ease-in-out infinite;
}

/* Pulse effect */
@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(33, 147, 176, 0.4); }
    70% { box-shadow: 0 0 0 10px rgba(33, 147, 176, 0); }
    100% { box-shadow: 0 0 0 0 rgba(33, 147, 176, 0); }
}

.pulse-effect {
    animation: pulse 2s infinite;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">



  <!-- Sign up Modal -->
  <!-- <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: rgb(111 202 203);">
            <h5 class="modal-title" id="signupModal">SignUp Here</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="partials/_handleSignup.php" method="post">
              <div class="form-group">
                  <b><label for="username">Username</label></b>
                  <input class="form-control" id="username" name="username" placeholder="Choose a unique Username" type="text" required minlength="3" maxlength="11">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <b><label for="firstName">First Name:</label></b>
                  <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                </div>
                <div class="form-group col-md-6">
                  <b><label for="lastName">Last name:</label></b>
                  <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last name" required>
                </div>
              </div>
              <div class="form-group">
                  <b><label for="email">Email:</label></b>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
              </div>
              <div class="form-group">
                <b><label for="phone">Phone No:</label></b>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon">+977</span>
                  </div>
                  <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number" required pattern="[0-9]{10}" maxlength="10">
                </div>
              </div>
              <div class="text-left my-2">
                  <b><label for="password">Password:</label></b>
                  <input class="form-control" id="password" name="password" placeholder="Enter Password" type="password" required data-toggle="password" minlength="4" maxlength="21">
              </div>
              <div class="text-left my-2">
                  <b><label for="password1">Renter Password:</label></b>
                  <input class="form-control" id="cpassword" name="cpassword" placeholder="Renter Password" type="password" required data-toggle="password" minlength="4" maxlength="21">
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <p class="mb-0 mt-1">Already have an account? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Login here</a>.</p>
          </div>
        </div>
      </div>
    </div> -->
