<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- Link use for icons by https://iconscout.com/unicons -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css?v=<?php echo time(); ?>" />
  <!-- By using boostrap v5.0.1 -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css?v=<?php echo time(); ?>" />
  <!-- For swiper slider by using https://swiperjs.com -->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css?v=<?php echo time(); ?>" />

  <!-- For fancy box by using jquery.fancybox.min.css -->
  <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css?v=<?php echo time(); ?>" />
  <!-- For custom css -->
  <link rel="stylesheet" href="assets/css/global.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="assets/css/admin-login.css?v=<?php echo time(); ?>" />
</head>

<body>
  <section class="sign-in si-active">
    <div class="container">
      <div class="site-sign-in">
        <div class="ssi-title eh5">Sign In</div>
        <form action="" class="ssi-form" method="post">
          <div class="ssi-f-item">
            <label for="" class="eh">Phone Number or Email</label>
            <input type="text" placeholder="Enter your phone number or email" name="username">
          </div>
          <div class="ssi-f-item">
            <label for="" class="eh">Password</label>
            <input type="password" placeholder="Enter your password" name="password">
          </div>
          <div class="ssi-forgot-password p2-medium-14" style="color: var(--darkGreen-03)">Forgot Password?</div>
          <div class="btn-main">
            <button class="btn-general eh" type="submit" name="admin-sign-in">Sign In</button>
            <a href="?mod=page&act=home">
              <button class="btn-ghost eh" type="button" name="cancel">Cancel</button>
            </a>
          </div>
        </form>
        <div class="ssi-article">
          <div class="ssi-a-content p2-medium-14" style="color: var(--grey-01)">Or using other method</div>
          <div class="ssi-a-divider"></div>
        </div>
        <div class="ssi-another-login-method">
          <div class="btn-main">
            <button class="btn-wIcon h2" style="color: var(--darkGreen-01)">
              <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.6454 14.8745L18.0443 12.342H15.5868V10.6959C15.5868 10.0034 15.9299 9.32674 17.027 9.32674H18.16V7.17015C17.5002 7.06503 16.8335 7.00816 16.1653 7C14.1427 7 12.8221 8.21481 12.8221 10.411V12.342H10.5801V14.8745H12.8221V21H15.5868V14.8745H17.6454Z" fill="#337FFF"></path>
              </svg>
              Sign In with Facebook
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- For jquery -->
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <!-- For boostrap -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- For popper cdn 2.9.x -->
  <script src="assets/js/popper.min.js"></script>

  <!-- For fontawesome -->
  <script src="assets/js/font-awesome.min.js"></script>

  <!-- For swipper slider -->
  <script src="assets/js/swiper-bundle.min.js"></script>

  <!-- For mixiup -- filter -->
  <script src="assets/js/jquery.mixitup.min.js"></script>

  <!-- For fancybox -->
  <script src="assets/js/jquery.fancybox.min.js"></script>

  <!-- For parallax -->
  <script src="assets/js/parallax.min.js"></script>

  <!-- For gsap -->
  <script src="assets/js/gsap.min.js"></script>

  <!-- For scroll trigger -->
  <script src="assets/js/ScrollTrigger.min.js"></script>
  <!-- For scroll to plugin -->
  <script src="assets/js/ScrollToPlugin.min.js"></script>
  <!-- For rellax -->
  <!-- <script src="assets/js/rellax.min.js"></script>
    <script src="assets/js/rellax-custom.js"></script> -->
  <!-- For smooth scroll -->
  <script src="assets/js/smooth-scroll.js"></script>
  <!-- For custom js -->
  <script src="assets/js/main.js?v=<?php echo time(); ?>"></script>
</body>

</html>