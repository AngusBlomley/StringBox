<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>String Box</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/stylesheet.css" />
  <script defer="" src="js/script.js"></script>
  <script src="js/jquery.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>


<IfModule mod_dir.c></IfModule>

<!--TOP OF BODY-->
<body id="roof">
  <div class="margin">
    <video loop autoplay muted src="video/Video.mp4"></video>

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
        <li><a href="#string-types__header">Strings</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#shipping">Shipping</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>


    <!--THIS THE SIGN UP FORM WINDOW THAT APPEARS WHEN USER CLICKS ON "Signup"-->
    <div class="signup-form">
      <form action="/includes/signup.inc.php" method="post">
        <div class="signup-form-header">
          <h2>Sign Up</h2>
          <img class="x" src="Photos/bx-x.svg">
        </div>
        <input type="text" name="uid" placeholder="Enter your username" required>
        <br>
        <input type="password" name="pwd" placeholder="Enter your password" required>
        <input type="password" name="pwdRepeat" placeholder="Password repeat" required>
        <br>
        <input type="text" name="email" placeholder="Enter your email" required>
        <br>
        <input type="submit" name="submit" value="Submit">
        <br>
        <label class="account">Already have an account? <a class="login-link link">Login</a></label>
      </form>
    </div>

    <!--THIS THE LOGIN FORM WINDOW THAT APPEARS WHEN USER CLICKS ON "Login"-->      
    <div class="login-form">
      <form action="/includes/login.inc.php" method="post">
        <div class="signup-form-header">
          <h2>Welcome Back</h2>
          <img class="x" src="Photos/bx-x.svg">
        </div>
        <input type="text" name="uid" placeholder="Enter your username" required>
        <input type="password" name="pwd" placeholder="Enter your password" required>
        <br>
        <input type="submit" name="submit" value="Submit">
        <br>
        <label class="account">Don't have an account? <a class="signup-link link">Sign up</a></label>
      </form>
    </div>


    <!--THIS IS THE HEADER / NAVIGATION BAR -->        
    <div id="header">
      <a href="index.php"><img src="Logo/LogoWhite.png" alt="Logo" id="logo" /></a>
      <div class="nav-toggle"></div>
      <nav>
        <ul>
          <li class="nav-li"><a href="index.php">Home</a></li>
          <li class="nav-li"><a href="shop.php">Shop</a></li>
          <li class="nav-li"><a href="#string-types__header">Strings</a></li>
          <li class="nav-li"><a href="#about">About</a></li>
          <li class="nav-li"><a href="#shipping">Shipping</a></li>
          <li class="nav-li"><a href="#contact">Contact</a></li>
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

    <!--MAIN CONTENT BLOCK UNDER NAV-->
    <section id="maincontent">
        <h1 class="hidden">You Box it.</h1>
        <h1 class="hidden">We Fix it.</h1>
        <h2 class="hidden1">
          Re-stringing your racquet can improve performance and prolong its
          life.
        </h2>
        <h2 class="hidden1">
          Prevent injury, ensure your racquet is safe.
        </h2>
        <div style="display: inline-flex;">
          <div class="hidden1 button-container"><a class="button" href="#contact">Contact Us</a></div>
          <div class="hidden1 button-container"><a class="button" href="browse.php">Visit Shop</a></div>
        </div>
        <h3 class="hidden1" id="string-types__header">String Types</h3>
    </section>

    <section id="string-types">
      <div class="grid-item item1 ">
        <h3>Natural Gut</h3>
        <ul>
          <li>
            <box-icon class="tick" type="solid" name="check-circle"></box-icon>Maximum ball-pocket depth helps retain more of the ball's incoming
            energy due to the ball retaining more of it's origional shape.
          </li>
          <br />
          <li>
            <box-icon class="tick" type="solid" name="check-circle"></box-icon>Most efficient return of energy received.
          </li>
          <br />
          <li>
            <box-icon class="tick" type="solid" name="check-circle"></box-icon>Gut adds power, comfort, and max shock/vibration reduction.
          </li>
        </ul>
        <img alt="img" src="Photos/natural%20gut.PNG" />
      </div>
      <div class="grid-item item2 ">
        <h3>Multi Fiber</h3>
        <ul>
          <li>
            <box-icon class="tick" type="solid" name="check-circle"></box-icon>Designed to perform like natural gut at a more affordable price.
          </li>
          <br />
          <li>
            <box-icon class="tick" type="solid" name="check-circle"></box-icon>Is not negatively effected by moisture.
          </li>
        </ul>
        <img alt="img" src="Photos/multi%20fiber.PNG" />
      </div>
      <div class="grid-item item3 ">
        <h3>Solid Core</h3>
        <ul>
          <li>
            <box-icon class="tick" type="solid" name="check-circle"></box-icon>Commonly referred to as synthetic gut, the core with outer-wraps
            returns less energy to the ball.
          </li>
          <br />
          <li>
            <box-icon class="tick" type="solid" name="check-circle"></box-icon>A
            nice crisp feel for a player who seeks basics in performance and
            value. Numerous variations can be found.
          </li>
        </ul>
        <img alt="img" src="Photos/Solid%20core.PNG" />
      </div>
      <div class="grid-item item4 ">
        <h3>Polyester</h3>
        <ul>
          <li>
            <box-icon class="tick" type="solid" name="check-circle"></box-icon>A
            longer 'dwell-time' (time ball is on the strings) creates maximum
            'flatening' of the ball for more control. Energy return is less -
            allowing players to use stiffer, more powerful racquets for today's
            game.
          </li>
          <br />
          <li>
            <box-icon class="tick" type="solid" name="check-circle"></box-icon>Less energy return to the ball, a 'firmer-feel' giving extreme
            potential. Best for fast swing-speeds.
          </li>
        </ul>
        <img alt="img" src="Photos/Polyester.PNG" />
      </div>
    </section>
    <div id="about">
      <div>
        <h1 class="howwestring hidden">How We String.</h1>
        <br />
        <p class="hidden">
          We are a professional racquet stringing company that supplies
          high-quality strings from top brands. At StringBox, we understand that
          every player has their own preferences when it comes to strings, which
          is why we offer a wide selection of professional strings to choose
          from. Whether you're looking for a specific brand or a certain type of
          string, we have what you need.<br /><br />

          In addition to our selection of professional strings, we also offer a
          unique service where you can send us your own strings or request a
          specific type of string that we don't carry in stock. This allows you
          to get exactly what you want, tailored to your specific needs.
        </p>
        <br /><br /><br /><br />
        <h5 class="hidden">Stringbox</h5>
      </div>
      <img alt="img" class="hidden" src="Photos/chino-rocha-dEyXftPAMO4-unsplash.jpg" />
    </div>



    <section id="shipping">
      <h2 class="h2 ">The Shipping Process.</h2>
      <ul>
        <div class="ship1 hidden">
          <h3>Step 1.</h3>
          <li>
            You place an order on our website or send us your racquets by mail.
          </li>
          <img alt="img" src="Photos/CA3905EA.png" /><br />
        </div>
        <div class="ship2 hidden">
          <h3>Step 2.</h3>
          <li>
            We receive your order or racquets and begin the stringing process.
          </li>
          <img alt="img" src="Photos/CA3905E8.png" /><br />
        </div>
        <div class="ship3 hidden">
          <h3>Step 3.</h3>
          <li>
            Once the stringing is complete, we package your racquets securely
            and ship them back to you using a reputable courier service.
          </li>
          <img alt="img" class="racquet" src="Photos/CA3905E9.png" /><br />
        </div>
        <div class="ship4 hidden">
          <h3>Step 4.</h3>
          <li>
            You will receive a tracking number by email so you can follow the
            progress of your shipment.
          </li>
          <img alt="img" src="Photos/BA9C1C7.png" /><br />
        </div>
      </ul>
    </section>

    <section id="contact">
      <div>
      <form class="Contactform" action="index.php" method="post">
          <h2>Get in touch.<br />Raise your game.</h2>
          <br/>
          <label>Name</label>
          <input type="text" name="name" placeholder="Your name..." />
          <label>E-Mail</label>
          <input type="text" name="email" placeholder="Your email..." />
          <label>Message</label>
          <textarea name="message" placeholder="Your message..." style="height: 200px"></textarea>
          <button class="sendbutton" name="submit" type="submit">Send</button>
        </form>

        <?php
          if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $to = 'info@stringbox.co.uk';
            $subject = 'Contact Form Submission';
            $body = "Name: $name\n E-Mail: $email\n Message:\n $message";

          if(mail($to, $subject, $body)){
            echo '<p>Your message has been sent!</p>';
          } else{
            echo '<p>Something went wrong, please try again.</p>';
          }
          }
        ?>

      </div>
      <img alt="img" class="" src="Photos/tennis-g4a2677dc2_1280.jpg" />
    </section>


    <a href="#roof">
      <box-icon class="top" name="up-arrow-square" type="solid"></box-icon>
    </a>
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
const maincontent = document.querySelector("#maincontent");
const shopcontent = document.querySelector("#shopcontent");
const menu = document.querySelector(".menu");

menuToggle.addEventListener("click", () => {
  menuToggle.classList.toggle("active");
  maincontent.classList.toggle("active");
  menu.classList.toggle("active");
  shopcontent.classList.toggle("active");
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
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</body>

</html>