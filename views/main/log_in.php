<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Login</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Login Page Content Start ==-->
<section id="lgoin-page-wrap" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-8 m-auto">
              <div class="login-page-content">
                <div class="login-form">
                  <h3>Welcome Back!</h3>
          <form action="auth/login.php" method=POST>
            <div class="username">
              <input type="text" name="email" placeholder="Email">
            </div>
            <div class="password">
              <input type="password"name="password" placeholder="Password">
            </div>
            <div class="log-btn">
              <button type="submit" name="submit"><i class="fa fa-sign-in"></i> Log In</button>
            </div>
          </form>
                </div>

                <div class="login-other">
                  <span class="or">or</span>
                  <a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Login With Facebook</a>
                  <a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Login With Google</a>
                </div>
                <div class="create-ac">
                  <p>Don't have an account? <a href="register.html">Sign Up</a></p>
                </div>
                <div class="login-menu">
                  <a href="about.html">About</a>
                  <span>|</span>
                  <a href="contact.html">Contact</a>
                </div>
              </div>
            </div>
      </div>
    </div>
    <?php
    if(isset($_SESSION['error_message'])){
      echo  $_SESSION['error_message'];
      unset($_SESSION['error_message']);
    }
      ?>
</section>
<!--== Login Page Content End ==-->
