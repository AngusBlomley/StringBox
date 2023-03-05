<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>String Box</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/shop.css" />
  <script defer="" src="js/script.js"></script>
  <script src="js/jquery.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<IfModule mod_dir.c></IfModule>

<body id="roof">
<div class="margin">
  
  <!--THIS THE MOBILE VIEW MENU-->
  <div class="menu">
      <ul>
        <!--DISPLAY USER ID IN NAV IF LOGGED IN-->
        <?php if (isset($_SESSION["userid"])) { ?>
          <li><a><?php echo $_SESSION["useruid"]; ?></a></li>
          <li><a href="includes/logout.inc.php">Logout</a></li>

        <!--DISPLAY SIGNUP / LOGIN IF NOT LOGGED IN-->  
        <?php } else { ?>
          <li><a class="signup-link">Sign up</a></li>
          <li><a class="login-link">Login</a></li>
        <?php } ?>
        <br>
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="index.php#string-types__header">Strings</a></li>
        <li><a href="index.php#about">About</a></li>
        <li><a href="index.php#shipping">Shipping</a></li>
        <li><a href="index.php#contact">Contact</a></li>
      </ul>
    </div>

    <div id="header">
      <a href="index.php"><img src="Logo/Blacklogo.png" alt="Logo" id="logo" /></a>
      <div class="nav-toggle"></div>
      <nav>
        <ul>
          <li class="nav-li"><a href="index.php">Home</a></li>
          <li class="nav-li"><a href="shop.php">Shop</a></li>
          <li class="nav-li"><a href="index.php#string-types__header">Strings</a></li>
          <li class="nav-li"><a href="index.php#about">About</a></li>
          <li class="nav-li"><a href="index.php#shipping">Shipping</a></li>
          <li class="nav-li"><a href="index.php#contact">Contact</a></li>
          <?php if (isset($_SESSION["userid"])) { ?>
            <a><li class="nav-account"><?php echo $_SESSION["useruid"]; ?></li></a>
            <a href="includes/logout.inc.php"><li>Logout</li></a>
          <?php } else { ?>
            <a class="signup-link nav-li"><li>Signup</li></a>
            <a class="login-link nav-li"><li>Login</li></a>
          <?php } ?>
          <li class="nav-li nav-facebook">
            <a href="https://www.facebook.com/bangortennisacademy">
              <box-icon color="white" type='logo' name='facebook-square'>
              </box-icon>
            </a>
          </li>

          <!--THIS IS THE DESKTOP NAVIGATION DROPDOWN MENU WHEN HOVERED OVER USER ICON-->
          <div class="nav-dropdown-menu">
            <ul class="nav-dropdown-list">
              <a class="signup-link">
                <?php
                if (isset($_SESSION["userid"])) {
                ?>
                 <img src="Photos/bx-user-circle.png"><li><?php echo $_SESSION["useruid"]; ?></li>
                 <img src="Photos//bx-log-out.png"><li><a href="includes/logout.inc.php">Logout</a></li>
                <?php } else { ?>
                  <img src="Photos/bx-user-circle.png"><li><a class="signup-link">Sign up</a></li>
                  <img src="Photos/bx-log-in.png"><li><a class="login-link">Login</a></li>
                <?php } ?>
                <img src="Photos/bx-user.png"><li>Profile</li>
                  <img src="Photos/bx-list-check.png"><li>Orders</li>
                  <img src="Photos/bx-cart.png"><li>Cart</li>
              </a>
            </ul>
          </div>
        </ul>
      </nav>
    </div>

    <div class="breadcrumbs">
      <a style="color:dodgerblue" href="index.php">Home </a><a>/ Customise</a>
    </div>

    <section class="main">
      <a href="String_Preferences.php">
        <article class="hidden">
          <h1>Use your own strings</h1>
          <img src="Photos/zoe-reeve-JWmfUpVm8mg-unsplash.jpg">
        </article>
      </a>
      <a href="browse.php">
        <article class="hidden">
          <h1>Browse for strings</h1>
          <img src="Photos/valentin-balan-9BA0Kk7-nBY-unsplash.jpg">
        </article>
      </a>
     </section>

  </div>

  <footer>
    <h5>© 2023 STRINGBOX. All rights reserved.</h5>
    <h5>Website Created by Angus Blomley.</h5>
  </footer>

  <script>
const observer1 = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    console.log(entry);
    if (entry.isIntersecting) {
      entry.target.classList.add("fade-in-left");
    } else {
      entry.target.classList.remove("fade-in-left");
    }
  });
});

const observer2 = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    console.log(entry);
    if (entry.isIntersecting) {
      entry.target.classList.add("fade-in-top");
    } else {
      entry.target.classList.remove("fade-in-top");
    }
  });
});

const observer3 = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    console.log(entry);
    if (entry.isIntersecting) {
      entry.target.classList.add("fade-in");
    } else {
      entry.target.classList.remove("fade-in");
    }
  });
});

const hiddenElements1 = document.querySelectorAll(".hidden");
hiddenElements1.forEach((el) => observer1.observe(el));

const hiddenElements2 = document.querySelectorAll(".hidden1");
hiddenElements2.forEach((el) => observer2.observe(el));

const hiddenElements3 = document.querySelectorAll(".hidden2");
hiddenElements3.forEach((el) => observer3.observe(el));
//------------------------END OF FUNCTION------------------------


//Click toggle for navigation on devices smaller than laptop
const menuToggle = document.querySelector(".nav-toggle");
const shopcontent = document.querySelector(".main");
const menu = document.querySelector(".menu");
const breadcrumbs = document.querySelector(".breadcrumbs");

menuToggle.addEventListener("click", () => {
  menuToggle.classList.toggle("active");
  menu.classList.toggle("active");
  shopcontent.classList.toggle("active");
  breadcrumbs.classList.toggle("active");
});
//------------------------END OF FUNCTION------------------------


//Redirect user to Signup %OR Login from other pages to index.php
document.addEventListener("DOMContentLoaded", function () {
  const urlParams = new URLSearchParams(window.location.search);
  const showSignup = urlParams.get("showSignup");
  if (showSignup === "true") {
    // Show the signup window
    const signupWindow = document.querySelector(".signup-form");
    signupWindow.classList.add("active");
  } else {
    // Do not show the signup window
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const urlParams = new URLSearchParams(window.location.search);
  const showLogin = urlParams.get("showLogin");
  if (showLogin === "true") {
    // Show the Login window
    const LoginWindow = document.querySelector(".login-form");
    LoginWindow.classList.add("active");
  } else {
    // Do not show the Login window
  }
});





$(document).ready(function () {

  //opens drop down menu when hovered over signup/user
  $(".nav-account").hover(
    function () {
      $(".nav-dropdown-menu").addClass("active");
    },
    function () {
      $(".nav-dropdown-menu").removeClass("active");
    }
  );

  //keeps open dropdown window when being hovered over
  $(".nav-dropdown-menu").hover(
    function () {
      $(this).addClass("active");
    },
    function () {
      $(this).removeClass("active");
    }
  );

  //make login window appear
  $(".login-link").click(function () {
    $(".login-form").addClass("active");
    $(".signup-form").removeClass("active");
  });

  //make signup window appear
  $(".signup-link").click(function () {
    $(".signup-form").addClass("active");
    $(".login-form").removeClass("active");
  });

  //click x to clear window
  $(".x").click(function () {
    $(".login-form").removeClass("active");
    $(".signup-form").removeClass("active");
  });
});

</script>

<script defer="" src="js/script.js"></script>
  <script src="js/jquery.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js">
</script>

</body>

</html>