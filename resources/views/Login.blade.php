<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icons -->
    <link href="{{ url('/') }}/assets/images/favicon.png" rel="shortcut icon">

    <!-- All CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/cute-alert/style.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">

    <title>Elearning - Login</title>
  </head>
  <body>

    <!-- Preloader -->
    <div id="preloader">
      <div id="status"></div>
    </div>

    <!-- Header strat -->
    <header class="header">
      <div class="container">
        <nav class="navbar">
          <!-- Site logo -->
          <a href="{{ url('/') }}" class="logo">
            <img src="{{ url('/') }}/assets/images/logo.png" alt="">
          </a>
          <a href="javascript:void(0);" id="mobile-menu-toggler">
            <i class="ti-align-justify"></i>
          </a>
          <ul class="navbar-nav">
            <li class="current-menu-item">
              <a href="{{ url('/') }}">Home</a>
            </li>
            <li><a href="{{ url('/login') }}">Courses</a></li>
            <li><a href="{{ url('/login') }}">Search</a></li>
            <li><a href="{{ url('/login') }}">About</a></li>
            <li><a href="{{ url('/login') }}">Log in</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- Header strat -->

    <!-- Login / Registration start -->
    <section class="banner login-registration">
      <div class="vector-img">
        <img src="{{ url('/') }}/assets/images/login.jpg" alt="">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="content-box">
              <h2>Login Account</h2>
            </div>
            <form action="#" class="sl-form" name="login">
              <div class="form-group">
                <label>Email or Username</label>
                <input type="email" name="email" placeholder="example@gmail.com" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" required>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input">
                <label class="form-check-label">Remember Password</label>
              </div>
              <button type="submit" class="btn btn-filled btn-round"><span class="bh"></span> <span>Login</span></button>
            </form>
          </div>
        </div>
      </div>
    </section>
  <!-- Login / Registration end -->

    <!-- Footer strat -->
    <footer class="footer">

      <div class="foo-btm">
        <div class="container">
          <p class="copyright">Copyright © 2019 <a href="#">Elearning</a>. All rights reserved.</p>
        </div>
      </div>

    </footer>
    <!-- Footer end -->

    <!-- JS -->
    <script src="{{ url('/') }}/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery-ui.min.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery.validate.min.js"></script>
    <script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ url('/') }}/assets/cute-alert/cute-alert.js"></script>
    <script>
      //======================
    // Login Validation
    //======================
    $("form[name='login']").validate({
        errorClass: 'text-danger',
        rules: {
            email: "required",
            password: "required",
        },
        messages: {
            email: "Email Field Is Required",
            password: "Password Field Is Required",
        },
        invalidHandler: function(form, validator) {
        if (!validator.numberOfInvalids())
            return;
        $('html, body').animate({
            scrollTop: $(validator.errorList[0].element).offset().top
        }, 2000);
        },
        submitHandler: function(form) {
            cuteToast({
                type: "success", // or 'info', 'error', 'warning'
                title: "Success",
                message: " ",
                timer: 5000
              })
        // form.submit();
        }
    });
    </script>
    <script src="{{ url('/') }}/assets/js/scripts.js"></script>
  </body>
</html>
