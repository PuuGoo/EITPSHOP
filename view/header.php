<?php
ob_start();
if (isset($_GET['method'])) {
  if ($_GET['method'] === "logout") {
    session_destroy();
    header("Location: ?mod=page&act=home");
  }
}

if (isset($_GET['act'])) {
  if ($_GET['act'] === "home") {
    if (isset($_GET['method'])) {
      if ($_GET['method'] === "logout") {
        session_destroy();
        header("Location: ?mod=page&act=home");
      }
    }
  } 
  if ($_GET['act'] === "admin") {
    if (isset($_GET['method'])) {
      if ($_GET['method'] === "logout") {
        session_destroy();
        header("Location: ?mod=page&act=adminlogin");
      }
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Food Website</title>
  <!-- Link use for icons by https://iconscout.com/unicons -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
  <!-- By using boostrap v5.0.1 -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <!-- For swiper slider by using https://swiperjs.com -->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

  <!-- For fancy box by using jquery.fancybox.min.css -->
  <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css" />
  <!-- For custom css -->
  <link rel="stylesheet" href="assets/css/global.css?v=<?php echo time(); ?>" />

  <?php if (isset($act)) {
    if ($act === "shipping" || $act === "payment") {
      echo '<link rel="stylesheet" href="assets/css/cart.css?v=<?php echo time(); ?>" />';
    }
  } ?>

  <link rel="stylesheet" href="assets/css/<?php

                                          if (isset($act)) {
                                            switch ($act) {
                                              case 'home':
                                                echo "styles";
                                                break;
                                              default:
                                                echo $act;
                                                break;
                                            }
                                          }

                                          ?>.css?v=<?php echo time(); ?>" />
</head>

<body class="body-fixed">
  <!-- start of header -->
  <header class="site-header">
    <div class="container">
      <div class="primary-navigation">
        <a href="?mod=page&act=home" class="header-logo">
          <svg width="93" height="32" viewBox="0 0 93 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_3147_601)">
              <rect width="32" height="32" fill="#1E4C2F" />
              <path d="M10.959 12.5671C11.1739 11.093 12.4379 10 13.9276 10H22.0724C23.5621 10 24.8261 11.093 25.041 12.5671L26.4994 22.5671C26.7633 24.3771 25.3599 26 23.5308 26H12.4692C10.6401 26 9.23667 24.3771 9.50063 22.5671L10.959 12.5671Z" fill="#143C23" />
              <path d="M8.95897 10.5671C9.17393 9.09304 10.4379 8 11.9276 8H20.0724C21.5621 8 22.8261 9.09304 23.041 10.5671L24.4994 20.5671C24.7633 22.3771 23.3599 24 21.5308 24H10.4692C8.64006 24 7.23667 22.3771 7.50063 20.5671L8.95897 10.5671Z" fill="white" />
              <path d="M19.3256 14C19.7288 14 20.0623 14.3294 19.9901 14.7261C19.9387 15.0086 19.8573 15.2855 19.7469 15.552C19.5431 16.0441 19.2444 16.4912 18.8678 16.8678C18.4912 17.2444 18.0441 17.5431 17.552 17.7469C17.06 17.9507 16.5326 18.0556 16 18.0556C15.4674 18.0556 14.94 17.9507 14.448 17.7469C13.9559 17.5431 13.5088 17.2444 13.1322 16.8678C12.7556 16.4912 12.4569 16.0441 12.2531 15.552C12.1427 15.2855 12.0613 15.0086 12.0099 14.7261C11.9377 14.3294 12.2712 14 12.6744 14C13.0775 14 13.3945 14.3331 13.5064 14.7204C13.5331 14.8129 13.565 14.904 13.602 14.9933C13.7324 15.3082 13.9236 15.5943 14.1646 15.8354C14.4057 16.0764 14.6918 16.2676 15.0067 16.398C15.3216 16.5285 15.6591 16.5956 16 16.5956C16.3409 16.5956 16.6784 16.5285 16.9933 16.398C17.3082 16.2676 17.5943 16.0764 17.8354 15.8354C18.0764 15.5943 18.2676 15.3082 18.398 14.9933C18.435 14.904 18.4669 14.8129 18.4936 14.7204C18.6055 14.3331 18.9225 14 19.3256 14Z" fill="#1E4C2F" />
            </g>
            <path d="M54.016 17.064C54.016 17.544 53.984 17.976 53.92 18.36H44.2C44.28 19.32 44.616 20.072 45.208 20.616C45.8 21.16 46.528 21.432 47.392 21.432C48.64 21.432 49.528 20.896 50.056 19.824H53.68C53.296 21.104 52.56 22.16 51.472 22.992C50.384 23.808 49.048 24.216 47.464 24.216C46.184 24.216 45.032 23.936 44.008 23.376C43 22.8 42.208 21.992 41.632 20.952C41.072 19.912 40.792 18.712 40.792 17.352C40.792 15.976 41.072 14.768 41.632 13.728C42.192 12.688 42.976 11.888 43.984 11.328C44.992 10.768 46.152 10.488 47.464 10.488C48.728 10.488 49.856 10.76 50.848 11.304C51.856 11.848 52.632 12.624 53.176 13.632C53.736 14.624 54.016 15.768 54.016 17.064ZM50.536 16.104C50.52 15.24 50.208 14.552 49.6 14.04C48.992 13.512 48.248 13.248 47.368 13.248C46.536 13.248 45.832 13.504 45.256 14.016C44.696 14.512 44.352 15.208 44.224 16.104H50.536ZM57.9725 9.12C57.3805 9.12 56.8845 8.936 56.4845 8.568C56.1005 8.184 55.9085 7.712 55.9085 7.152C55.9085 6.592 56.1005 6.128 56.4845 5.76C56.8845 5.376 57.3805 5.184 57.9725 5.184C58.5645 5.184 59.0525 5.376 59.4365 5.76C59.8365 6.128 60.0365 6.592 60.0365 7.152C60.0365 7.712 59.8365 8.184 59.4365 8.568C59.0525 8.936 58.5645 9.12 57.9725 9.12ZM59.6285 10.704V24H56.2685V10.704H59.6285ZM66.6602 13.464V19.896C66.6602 20.344 66.7642 20.672 66.9722 20.88C67.1962 21.072 67.5642 21.168 68.0762 21.168H69.6362V24H67.5242C64.6922 24 63.2762 22.624 63.2762 19.872V13.464H61.6922V10.704H63.2762V7.416H66.6602V10.704H69.6362V13.464H66.6602ZM75.2129 12.624C75.6449 12.016 76.2369 11.512 76.9889 11.112C77.7569 10.696 78.6289 10.488 79.6049 10.488C80.7409 10.488 81.7649 10.768 82.6769 11.328C83.6049 11.888 84.3329 12.688 84.8609 13.728C85.4049 14.752 85.6769 15.944 85.6769 17.304C85.6769 18.664 85.4049 19.872 84.8609 20.928C84.3329 21.968 83.6049 22.776 82.6769 23.352C81.7649 23.928 80.7409 24.216 79.6049 24.216C78.6289 24.216 77.7649 24.016 77.0129 23.616C76.2769 23.216 75.6769 22.712 75.2129 22.104V30.336H71.8529V10.704H75.2129V12.624ZM82.2449 17.304C82.2449 16.504 82.0769 15.816 81.7409 15.24C81.4209 14.648 80.9889 14.2 80.4449 13.896C79.9169 13.592 79.3409 13.44 78.7169 13.44C78.1089 13.44 77.5329 13.6 76.9889 13.92C76.4609 14.224 76.0289 14.672 75.6929 15.264C75.3729 15.856 75.2129 16.552 75.2129 17.352C75.2129 18.152 75.3729 18.848 75.6929 19.44C76.0289 20.032 76.4609 20.488 76.9889 20.808C77.5329 21.112 78.1089 21.264 78.7169 21.264C79.3409 21.264 79.9169 21.104 80.4449 20.784C80.9889 20.464 81.4209 20.008 81.7409 19.416C82.0769 18.824 82.2449 18.12 82.2449 17.304ZM89.4065 24.168C88.7985 24.168 88.2945 23.984 87.8945 23.616C87.5105 23.232 87.3185 22.76 87.3185 22.2C87.3185 21.64 87.5105 21.176 87.8945 20.808C88.2945 20.424 88.7985 20.232 89.4065 20.232C89.9985 20.232 90.4865 20.424 90.8705 20.808C91.2545 21.176 91.4465 21.64 91.4465 22.2C91.4465 22.76 91.2545 23.232 90.8705 23.616C90.4865 23.984 89.9985 24.168 89.4065 24.168Z" fill="#0B0F0E" />
            <defs>
              <clipPath id="clip0_3147_601">
                <rect width="32" height="32" rx="10" fill="white" />
              </clipPath>
            </defs>
          </svg>

        </a>


        <div class="form-navigation">
          <div class="header-left">
            <div class="categories">All Categories <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.96004 4.4751L6.70004 7.7351C6.31504 8.1201 5.68504 8.1201 5.30004 7.7351L2.04004 4.4751" stroke="#0B0F0E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="divider1"></div>
            <form action="?mod=page&act=shop" class="header-search-form" method="post">
              <input type="search" class="form-input" placeholder="Search on EITPSHOP...">
              <button type="submit">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" stroke="#C4C8CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M22 22L20 20" stroke="#C4C8CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </button>
            </form>
          </div>
          <div class="header-right">
            <a href="cart.html" class="header-btn header-cart">
              <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 14H15.74C16.82 14 17.67 14.93 17.58 16L16.75 25.96C16.61 27.59 17.9 28.99 19.54 28.99H30.19C31.63 28.99 32.89 27.81 33 26.38L33.54 18.88C33.66 17.22 32.4 15.87 30.73 15.87H17.82" fill="#818B9C" />
                <path d="M14 14H15.74C16.82 14 17.67 14.93 17.58 16L16.75 25.96C16.61 27.59 17.9 28.99 19.54 28.99H30.19C31.63 28.99 32.89 27.81 33 26.38L33.54 18.88C33.66 17.22 32.4 15.87 30.73 15.87H17.82" stroke="#818B9C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M28.25 34C28.9404 34 29.5 33.4404 29.5 32.75C29.5 32.0596 28.9404 31.5 28.25 31.5C27.5596 31.5 27 32.0596 27 32.75C27 33.4404 27.5596 34 28.25 34Z" stroke="#818B9C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M20.25 34C20.9404 34 21.5 33.4404 21.5 32.75C21.5 32.0596 20.9404 31.5 20.25 31.5C19.5596 31.5 19 32.0596 19 32.75C19 33.4404 19.5596 34 20.25 34Z" stroke="#818B9C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M21 20H33" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
            <div class="divider2"></div>
            <div class="header-btn header-user">
              <?php if ($_SESSION['id']) : ?>
                <img src="assets/images/<?= $_SESSION['HinhAnh'] ?>" alt="">
              <?php else : ?>
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="#E4E9EE" />
                  <path d="M24 24C26.7614 24 29 21.7614 29 19C29 16.2386 26.7614 14 24 14C21.2386 14 19 16.2386 19 19C19 21.7614 21.2386 24 24 24Z" fill="#818B9C" />
                  <path d="M23.9999 26.5C18.9899 26.5 14.9099 29.86 14.9099 34C14.9099 34.28 15.1299 34.5 15.4099 34.5H32.5899C32.8699 34.5 33.0899 34.28 33.0899 34C33.0899 29.86 29.0099 26.5 23.9999 26.5Z" fill="#818B9C" />
                </svg>
              <?php endif; ?>
            </div>
            <div class="sah-ra-show">
              <div class="sah-ra-s-top">
                <div class="sah-ra-st-left">
                  <img src="assets/images/<?= $_SESSION['HinhAnh'] ?>" width="48" height="48" alt="" />
                  <div class="sah-r-a-status-online"></div>
                </div>
                <div class="sah-ra-st-right">
                  <div class="sah-ra-st-r-title eh6">PuuGoo</div>
                  <div class="sah-ra-st-r-content eh" style="color: var(--grey-01)">
                    Admin
                  </div>
                </div>
              </div>
              <div class="sah-ra-s-divider"></div>
              <a href="?mod=user&act=profile">
                <div class="sah-ra-s-mid">
                  <i class="uil uil-user"></i>
                  <div class="sah-ra-sm-title eh" style="color: var(--grey-01)">
                    My Profile
                  </div>
                </div>
              </a>
              <div class="sah-ra-s-divider"></div>
              <a href="?mod=page&act=home&method=logout">
                <div class="sah-ra-s-bot">
                  <i class="uil uil-sign-out-alt"></i>
                  <div class="sah-ra-sm-title eh" style="color: var(--red-01)">
                    Logout
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="secondary-navigation">
        <ul class="sa-menu eh6">
          <li class=""><a href="?mod=page&act=home">Home</a></li>
          <li class=""><a href="?mod=page&act=about">About Us</a></li>
          <li class=""><a href="?mod=page&act=blog">Blog</a></li>
          <li class="sa-m-shop">
            <div class="sa-m-title">
              <div class="sa-mt-heading">Shop</div>
              <i class="uil uil-arrow-down"></i>
            </div>
            <div class="sa-m-content">
              <?php foreach ($show_cats as $cat) : ?>
                <ul>
                  <li><a href="?mod=page&act=shop"><?= $cat['TenDanhMuc'] ?></a></li>
                </ul>
              <?php endforeach; ?>
            </div>
          </li>
        </ul>
      </div>
    </div>
    </div>
    </div>
  </header>
  <!-- header ends -->
  <!-- Sign in -->
  <section class="sign-in <?php if ($mes === "Login Failled!" || $mes === "Register Successfully!") {
                            echo "si-active";
                          } ?>">
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
            <button class="btn-general eh" type="submit" name="sign-in">Sign In</button>
            <button class="btn-ghost eh btn-register" type="button">Register</button>
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
                <path d="M17.6454 14.8745L18.0443 12.342H15.5868V10.6959C15.5868 10.0034 15.9299 9.32674 17.027 9.32674H18.16V7.17015C17.5002 7.06503 16.8335 7.00816 16.1653 7C14.1427 7 12.8221 8.21481 12.8221 10.411V12.342H10.5801V14.8745H12.8221V21H15.5868V14.8745H17.6454Z" fill="#337FFF" />
              </svg>
              Sign In with Facebook
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Sign in end-->

  <!-- Register in -->
  <section class="register sign-in <?php if ($mes === "Register Failled!") {
                                      echo "r-active";
                                    } ?>">
    <div class="container">
      <div class="site-sign-in">
        <div class="ssi-title eh5">Register</div>
        <form action="" class="ssi-form" method="post">
          <div class="ssi-f-item">
            <label for="" class="eh">Name</label>
            <input type="text" placeholder="Enter your name" name="fullName">
          </div>
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
            <button class="btn-general eh" type="submit" name="register">Register</button>
            <button class="btn-ghost eh btn-back" type="button">Back</button>
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
                <path d="M17.6454 14.8745L18.0443 12.342H15.5868V10.6959C15.5868 10.0034 15.9299 9.32674 17.027 9.32674H18.16V7.17015C17.5002 7.06503 16.8335 7.00816 16.1653 7C14.1427 7 12.8221 8.21481 12.8221 10.411V12.342H10.5801V14.8745H12.8221V21H15.5868V14.8745H17.6454Z" fill="#337FFF" />
              </svg>
              Sign In with Facebook
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Register in end-->

  <!-- Forgot Password in -->
  <section class="forgot-password sign-in">
    <div class="container">
      <div class="site-sign-in">
        <div class="ssi-title eh5">Forgot Password</div>
        <form action="" class="ssi-form">
          <div class="ssi-f-item">
            <label for="" class="eh">Phone Number or Email</label>
            <input type="text" placeholder="Enter your phone number or email">
          </div>
        </form>
        <div class="ssi-article">
          <div class="ssi-a-content p2-medium-14" style="color: var(--grey-01)">We'll send how to reset password in your
            email!</div>
          <div class="ssi-a-divider"></div>
        </div>
        <div class="btn-main">
          <button class="btn-general eh">Forgot Password</button>
          <button class="btn-ghost eh btn-back">Back</button>
        </div>
      </div>
    </div>
  </section>
  <!-- Forgot Password in end-->

  <div class="background-opacity">
    <div class="container">
      <div class="site-background-opacity">
        <div class="sbo-title"></div>
      </div>
    </div>
  </div>