<?php ob_start(); ?>
<?php

if ($_SESSION['VaiTro'] !== 1) {
  header("Location: ?mod=page&act=adminlogin");
}

if (isset($_GET['act'])) {
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
  <title>Shop</title>
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
  <link rel="stylesheet" href="assets/css/admin.css?v=<?php echo time(); ?>" />
  <?php

  if (isset($act)) {
    if ($act === "addcategory" || $act === "updatecategory" || $act === "updateproduct" || $act === "addproduct" || $act === "updatesubcategory" || $act === "addsubcategory" || $act === "addbrand" || $act === "updatebrand" || $act === "addblog" || $act === "updateblog" || $act === "adduser" || $act === "updateuser" || $act === "profile") {
      echo '<link rel="stylesheet" href="assets/css/productlist.css?v=<?php echo time(); ?>" />';
    }
  }

  ?>
  <link rel="stylesheet" href="assets/css/<?php

                                          if (isset($act)) {
                                            switch ($act) {
                                              case 'categorylist':
                                                echo "productlist";
                                                break;
                                              case 'subcategorylist':
                                                echo "productlist";
                                                break;
                                              case 'brandlist':
                                                echo "productlist";
                                                break;
                                              case 'bloglist':
                                                echo "productlist";
                                                break;
                                              case 'userlist':
                                                echo "productlist";
                                                break;

                                              default:
                                                echo $act;
                                                break;
                                            }
                                          }

                                          ?>.css?v=<?php echo time(); ?>" />
</head>

<body class="body-fixed">
  <!-- Admin Header Start -->

  <header class="admin-header">
    <div class="container">
      <div class="site-admin-header">
        <div class="sah-left">
          <a href="?mod=page&act=home">
            <div class="sah-l-logo">
              <img src="logo.png" alt="" />
            </div>
          </a>
        </div>
        <div class="sah-right">
          <div class="sah-r-avatar">
            <img src="assets/images/<?php echo $_SESSION['HinhAnh']; ?>" alt="" />
            <div class="sah-r-a-status-online"></div>

            <div class="sah-ra-show">
              <div class="sah-ra-s-top">
                <div class="sah-ra-st-left">
                  <img src="assets/images/<?php echo $_SESSION['HinhAnh']; ?>" alt="" />
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
              <a href="?mod=page&act=admin&method=logout">
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
    </div>
  </header>

  <section class="main-admin">
    <div class="container">
      <div class="site-main-admin">
        <div class="sma-left">
          <a href="?mod=page&act=admin">
            <div class="sma-l-dashboard">
              <div class="sma-l-heading active">
                <div class="sma-lh-left">
                  <i class="uil uil-box"></i>
                  <div class="sma-lh-title eh6 active">Dashboard</div>
                </div>
              </div>
            </div>
          </a>
          <div class="sma-l-product">
            <div class="sma-l-heading">
              <div class="sma-lh-left">
                <i class="uil uil-box"></i>
                <div class="sma-lh-title eh6">Product</div>
              </div>
              <div class="sma-lh-right">
                <i class="uil uil-arrow-right active"></i>
                <i class="uil uil-arrow-down"></i>
              </div>
            </div>
            <div class="sma-l-items">
              <a href="?mod=product&act=productlist">
                <div class="sma-l-item eh" style="color: var(--black-03)">
                  <i class="uil uil-circle"></i>
                  Product List
                </div>
              </a>
              <a href="?mod=product&act=addproduct">
                <div class="sma-l-item eh" style="color: var(--black-03)">
                  <i class="uil uil-circle"></i>
                  Add Product
                </div>
              </a>
            </div>
          </div>

          <div class="sma-l-category">
            <div class="sma-l-heading">
              <div class="sma-lh-left">
                <i class="uil uil-swatchbook"></i>
                <div class="sma-lh-title eh6">Category</div>
              </div>
              <div class="sma-lh-right">
                <i class="uil uil-arrow-right active"></i>
                <i class="uil uil-arrow-down"></i>
              </div>
            </div>
            <div class="sma-l-items">
              <a href="?mod=category&act=categorylist">
                <div class="sma-l-item eh" style="color: var(--black-03)">
                  <i class="uil uil-circle"></i>
                  Category List
                </div>
              </a>
              <a href="?mod=category&act=addcategory">
                <div class="sma-l-item eh" style="color: var(--black-03)">
                  <i class="uil uil-circle"></i>
                  Add Category
                </div>
              </a>
            </div>
          </div>

          <div class="sma-l-subcategory">
            <div class="sma-l-heading">
              <div class="sma-lh-left">
                <i class="uil uil-swatchbook"></i>
                <div class="sma-lh-title eh6">Sub Category</div>
              </div>
              <div class="sma-lh-right">
                <i class="uil uil-arrow-right active"></i>
                <i class="uil uil-arrow-down"></i>
              </div>
            </div>
            <div class="sma-l-items">
              <a href="?mod=subcategory&act=subcategorylist">
                <div class="sma-l-item eh" style="color: var(--black-03)">
                  <i class="uil uil-circle"></i>
                  Sub Category List
                </div>
              </a>
              <a href="?mod=subcategory&act=addsubcategory">
                <div class="sma-l-item eh" style="color: var(--black-03)">
                  <i class="uil uil-circle"></i>
                  Add Sub Category
                </div>
              </a>
            </div>
          </div>

          <div class="sma-l-brand">
            <div class="sma-l-heading">
              <div class="sma-lh-left">
                <i class="uil uil-box"></i>
                <div class="sma-lh-title eh6">Brand</div>
              </div>
              <div class="sma-lh-right">
                <i class="uil uil-arrow-right active"></i>
                <i class="uil uil-arrow-down"></i>
              </div>
            </div>
            <div class="sma-l-items">
              <a href="?mod=brand&act=brandlist">
                <div class="sma-l-item eh" style="color: var(--black-03)">
                  <i class="uil uil-circle"></i>
                  Brand List
                </div>
              </a>
              <a href="?mod=brand&act=addbrand">
                <div class="sma-l-item eh" style="color: var(--black-03)">
                  <i class="uil uil-circle"></i>
                  Add Brand
                </div>
              </a>
            </div>
          </div>
          <div class="sma-l-blog">
            <div class="sma-l-heading">
              <div class="sma-lh-left">
                <i class="uil uil-blogger"></i>
                <div class="sma-lh-title eh6">Blog</div>
              </div>
              <div class="sma-lh-right">
                <i class="uil uil-arrow-right active"></i>
                <i class="uil uil-arrow-down"></i>
              </div>
            </div>
            <div class="sma-l-items">
              <a href="?mod=blog&act=bloglist">
                <div class="sma-l-item eh" style="color: var(--black-03)">
                  <i class="uil uil-circle"></i>
                  Blog List
                </div>
              </a>
              <a href="?mod=blog&act=addblog">
                <div class="sma-l-item eh" style="color: var(--black-03)">
                  <i class="uil uil-circle"></i>
                  Add Blog
                </div>
              </a>
            </div>
          </div>
          <div class="sma-l-user">
            <div class="sma-l-heading">
              <div class="sma-lh-left">
                <i class="uil uil-users-alt"></i>
                <div class="sma-lh-title eh6">User</div>
              </div>
              <div class="sma-lh-right">
                <i class="uil uil-arrow-right active"></i>
                <i class="uil uil-arrow-down"></i>
              </div>
            </div>
            <div class="sma-l-items">
              <a href="?mod=user&act=userlist">
                <div class="sma-l-item eh" style="color: var(--black-03)">
                  <i class="uil uil-circle"></i>
                  User List
                </div>
              </a>
              <a href="?mod=user&act=adduser">
                <div class="sma-l-item eh" style="color: var(--black-03)">
                  <i class="uil uil-circle"></i>
                  Add User
                </div>
              </a>
            </div>
          </div>
          <div class="sma-l-profile">
            <div class="sma-l-heading">
              <a href="?mod=user&act=profile">
                <div class="sma-lh-left">
                  <i class="uil uil-user-circle"></i>
                  <div class="sma-lh-title eh6">Profile</div>
                </div>
              </a>
            </div>
          </div>
        </div>