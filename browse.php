<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>String Box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles/browse.css" />
    <script defer="" src="js/script.js"></script>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/ylp2mie.css">
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

        <section class="breadcrumbs_Cart">
            <div class="breadcrumbs">
                <a style="color:dodgerblue" href="index.php">Home </a>
                <a style="color:dodgerblue" href="shop.php">/ Customise</a>
                <a>/ Browse</a>
            </div>
        </section>
        <main>
            <section class="filter-container">
                <h2 class="filter-title">Filter</h2>
                <article class="filter-container-2">
                <aside class="filter">
                    <!--First Filter-->
                    <h3 class="filter-header">String Type</h3>
                    <form>
                        <label><input type="checkbox" id="polyester" name="polyester">Polyester</label>
                        <br>
                        <label><input type="checkbox" id="solid-core" name="solid-core">Solid Core</label>
                        <br>
                        <label><input type="checkbox" id="multi-fiber" name="multi-fiber">Multi Fiber</label>
                        <br>
                        <label><input type="checkbox" id="natural-gut" name="natural-gut">Natural Gut</label>
                        <br>
                    </form>
                    <!--Second Filter-->
                    <h3 class="filter-header2">Brands</h3>
                    <form>
                        <label><input type="checkbox" id="babolat" name="babolat">Babolat</label>
                        <br>
                        <label><input type="checkbox" id="head" name="head">Head</label>
                        <br>
                        <label><input type="checkbox" id="wilson" name="wilson">Wilson</label>
                        <br>
                        <label><input type="checkbox" id="prince" name="prince">Prince</label>
                        <br>
                        <label><input type="checkbox" id="yonex" name="yonex">Yonex</label>
                        <br>
                        <label><input type="checkbox" id="dunlop" name="dunlop">Dunlop</label>
                        <br>
                        <label><input type="checkbox" id="volkl" name="volkl">Volkl</label>
                        <br>
                        <label><input type="checkbox" id="pacific" name="pacific">Pacific</label>
                        <br>
                        <label><input type="checkbox" id="k-swiss" name="k-swiss">K-Swiss</label>
                        <br>
                        <label><input type="checkbox" id="prokennex" name="prokennex">Prokennex</label>
                        <br>
                        <label><input type="checkbox" id="bruce-lee" name="bruce-lee">Bruce Lee</label>
                        <br>
                        <label><input type="checkbox" id="donnay" name="donnay">Donnay</label>
                        <br>
                        <label><input type="checkbox" id="gosen" name="gosen">Gosen</label>
                        <br>
                        <label><input type="checkbox" id="victor" name="victor">Victor</label>
                        <br>
                        <label><input type="checkbox" id="tecnifibre" name="tecnifibre">Tecnifibre</label>
                        <br>
                        <button class="submit" type="submit" name="submit">Apply Filter</button>
                    </form>
                </aside>
                </article>
            </section>
                
            <section class="browse-section">
                <h1 class="grid-header">Browse By String Type</h1>
                <section class="grid-container-1">
                    <div class="grid-item">
                        <img src="Photos/nathanael-desmeules-8E1Yplw6Hho-unsplash.jpg">
                        <h2>Polyester</h2>
                    </div>
                    <div class="grid-item">
                        <img src="Photos/cristina-anne-costello-JfOh7yA6XuM-unsplash.jpg">
                        <h2>Solid Core</h2>
                    </div>
                    <div class="grid-item">
                        <img src="Photos/swing.jpg">
                        <h2>Multi Fiber</h2>
                    </div>
                    <div class="grid-item">
                        <img src="Photos/lan-gao-Yx648lGDX28-unsplash.jpg">
                        <h2>Natural Gut</h2>
                    </div>
                </section>
                <h1 class="grid-header-2">Browse By Brand</h1>
                <section class="grid-container-2">
                    <div class="grid-item-brand">
                        <img src="Photos/babolat-logo-square.jpeg">
                    </div>
                    <div class="grid-item-brand">
                        <img class="dunlop" src="Photos/dunlop.png">
                    </div>
                    <div class="grid-item-brand">
                        <img class="head" src="Photos/head.png">
                    </div>
                    <div class="grid-item-brand">
                        <img src="Photos/prince.png">
                    </div>
                </section>
                <a href="products.php" class="browse-all">Browse All</a>
            </section>
        </main>
    </div>
    <footer>
        <h5>?? 2023 STRINGBOX. All rights reserved.</h5>
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
//------------------------END OF FUNCTION------------------------


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

  //when user clicks filter on mobile, a drop down filter box will appear
  $(".filter-title").click(
    function () {
      $(".filter-container-2").toggle("active");
    }
  );

});
//------------------------END OF FUNCTION------------------------
</script>

<script defer="" src="js/script.js"></script>
  <script src="js/jquery.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js">
</script>

</body>

</html>