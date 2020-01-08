<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Sign up</h2>
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
            <div class="col-lg-5 col-md-8 m-auto">
              <div class="login-page-content">
                <div class="login-form">
                  <h3>Sign Up</h3>
          <form action="registration.php" method="POST">
            <div class="name">
              <div class="row">
                <div class="col-md-6">
                  <input type="text" name="firstName" placeholder="First Name">
                </div>
                <div class="col-md-6">
                  <input type="text" name="lastName" placeholder="Last Name">
                </div>
              </div>
            </div>
            <div class="email">
              <input type="email" name="email" placeholder="Email">
            </div>
            <div class="username">
              <input type="text" name="username" placeholder="Username">
            </div>
            <div class="password">
              <input type="password" name="password" placeholder="Password">
              <small>* Password mora da ima najmanje 8 karaktera i mora da ukljucuje minimum 1 broj</small>
            </div>
            <div class="password">
              <input type="password" name="rePassword" placeholder="Re-Password">
            </div>
            <div class="log-btn">
              <button type="submit" name="submit"><i class="fa fa-check-square"></i> Sign Up</button>
            </div>
          </form>
                </div>

                <div class="login-other">
                  <span class="or">or</span>
                  <a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Signup With Facebook</a>
                  <a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Signup With Google</a>
                </div>
                <div class="create-ac">
                  <p>Have an account? <a href="login.html">Sign In</a></p>
                </div>
                <div class="login-menu">
                  <a href="index.php?page=about">About</a>
                  <span>|</span>
                  <a href="index.php?page=contact">Contact</a>
                </div>
              </div>
            </div>
      </div>
    </div>
</section>
<!--== Login Page Content End ==-->
