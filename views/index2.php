<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Library of AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<style>
  body,
  html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
  }

  .bgimg {
    background-position: center;
    background-size: cover;
    background-image: url("../img/it2.jpg");
    min-height: 75%;
  }

  .section1 {
    margin: auto 50px;
  }

  .section2 {
    margin: auto 50px;
  }
</style>

<body class="w3-content w3-black" style="max-width:100%;">

  <!-- Navbar -->
  <?php # Script 3.4 - index.php
  include('../includes/header-demo.php');
  ?>

  <!-- Header with image -->
  <header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-middle w3-center">
      <span class="w3-text-yellow" style="font-size:70px">PHP<br>Open Source Code</span>
    </div>
  </header>

  <!-- PHP Language -->
  <div class="w3-padding-64 w3-white">
    <div class="section1 w3-row-padding">
      <!-- Content of PHP -->
      <div class="w3-col l6 m6">
        <h1 class="w3-xxlarge"><b>PHP Language</b></h1>
        <h1 class="w3-xlarge w3-text-green"><b>What is it?</b></h1>
        <p><span class="w3-xlarge w3-text-red">PHP (short for Hypertext Preprocessor)</span>
          is a multi-purpose programming language developed in early 1994. More specifically, PHP is an open source scripting language that runs on the server side and is used to create applications. web application. Up to now, it has been used by many people to develop software applications through web programming. The feature of this programming language is to use open source, easily embedded in HTML to develop website.</p>
      </div>
      <!-- Image of PHP -->
      <div data-aos="fade-up" data-aos-duration="3000" class="w3-col l6 m6">
        <img src="../img/php-wall.jpg" class="w3-image w3-right w3-hide-small" width="335" height="471">
        <img src="../img/php-wall1.jpg" class="w3-image w3-right w3-hide-small" width="335" height="471">
      </div>

      <!-- Show on small screen -->
      <div data-aos="fade-up" data-aos-duration="3000" class="w3-center w3-hide-large w3-hide-medium">
        <img src="../img/php-wall.jpg" class="w3-image w3-margin-top" width="335" height="471">
        <img src="../img/php-wall1.jpg" class="w3-image w3-margin-top" width="335" height="471">
      </div>
    </div>
  </div>
  </div>

  <!-- Open Source -->
  <div class="w3-padding-64 w3-light-grey">
    <div class="section2">
      <div class="w3-row-padding">
        <!-- Image of OS -->
        <div data-aos="fade-up" data-aos-duration="3000" class="w3-col l5 m6">
          <img class="w3-image w3-hide-small" src="../img/git.png" alt="App" width="335" height="471">
          <img class="w3-image w3-hide-small" src="../img/php-wall2.png" alt="App" width="335" height="471">
        </div>

        <!-- Content of OS -->
        <div class="w3-col l7 m6">
          <h1 class="w3-xxlarge"><b>Open Source</b></h1>
          <h1 class="w3-xlarge w3-text-red"><b>You known?</b></h1>
          <p><span class="w3-xlarge w3-text-green">Open Source</span>
            is a software that has a set of source code that users can easily download, modify, or upgrade to add necessary features to meet their own actual usage needs.
            Usually these are the source code released completely free, owned by the units, large businesses in the field of technology. Sometimes, open source code is developed by programmers, providing it with certain differences, uniqueness when compared to the original version.</p>
        </div>

        <!-- Show on small screen -->
        <div data-aos="fade-up" data-aos-duration="3000" class="w3-center w3-hide-large w3-hide-medium">
          <img src="../img/git.png" class="w3-image w3-margin-top" width="335" height="471">
          <img src="../img/php-wall2.jpg" class="w3-image w3-margin-top" width="335" height="471">
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php
  include('../includes/footer-demo.php');
  ?>

  <!-- Javascript of AOS -->
  <script>
    AOS.init();
  </script>

</body>

</html>