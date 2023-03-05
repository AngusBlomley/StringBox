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
const shopcontent = document.querySelector("section");
const menu = document.querySelector(".menu");
const breadcrumbs = document.querySelector(".breadcrumbs");

menuToggle.addEventListener("click", () => {
  menuToggle.classList.toggle("active");
  maincontent.classList.toggle("active");
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