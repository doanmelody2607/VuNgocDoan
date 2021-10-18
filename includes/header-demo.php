<!DOCTYPE html>
<html>
<title>PHP Blogs</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  html,
  body,
  h1,
  h2,
  h3,
  h4,
  h5 {
    font-family: "Open Sans", sans-serif
  }

  .sign-out {
    margin-left: 15px;
  }

  .w3-infor {
    margin-left: 90px;
  }

  .w3-infor label {
    font-weight: bold;
    text-decoration: underline;
  }
</style>

<body class="w3-theme-l5">

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
      <!-- Home -->
      <a href="index2.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Home"><i class="fa fa-home"></i></a>
      <!-- News -->
      <div class="w3-dropdown-hover w3-hide-small">
        <a href="homepage.php" class="w3-button w3-padding-large" title="News"><i class="fa fa-globe"></i><span class="w3-badge w3-right w3-small w3-green">5</span></a>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
          <a href="homepage.php#spring-huy" class="w3-bar-item w3-button"><img src="../avatar/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">Nguyen Xuan Huy posted an article.</a>
          <a href="homepage.php#tiger-diep" class="w3-bar-item w3-button"><img src="../avatar/avatar3.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">Diep Tuy Dung posted an article.</a>
          <a href="homepage.php#toan-ngu" class="w3-bar-item w3-button"><img src="../avatar/avatar4.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">Vo Minh Toan posted an article.</a>
          <a href="homepage.php#huu-phuc" class="w3-bar-item w3-button"><img src="../avatar/avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">Dang Huu Phuc posted an article.</a>
          <a href="homepage.php#friend-request" class="w3-bar-item w3-button"><img src="../avatar/avatar7.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">Do Thuy Quynh and 2 others sent you a friend request.</a>
        </div>
      </div>
      <!-- Profile -->
      <a href="#profile" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Profile" onclick="document.getElementById('information').style.display='block'"><i class="fa fa-user"></i></a>

      <!-- Project -->
      <div class="w3-dropdown-hover w3-hide-small">
        <a href="#" class="w3-button w3-padding-large" title="Project"><i class="fa fa-folder-open"></i></a>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
          <a href="bt_form.php" class="w3-bar-item w3-button" title="Helps">Bài tập FORM</a>
          <a href="bt_array.php" class="w3-bar-item w3-button" title="Helps">Bài tập ARRAY_FUNCTION</a>
          <a href="bt_mysql.php" class="w3-bar-item w3-button" title="Helps">Bài tập MYSQL</a>
        </div>
      </div>

      <!-- Contact -->
      <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Contact"><i class="fa fa-envelope"></i></a>
      <!-- Login -->
      <div class="w3-dropdown-hover w3-hide-small w3-right">
        <a href="#" class="w3-button w3-padding-large" title="News">
          <img src="../avatar/avatar1.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
        </a>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
          <a href="#" class="w3-bar-item w3-button" title="Helps"><i class="sign-out fa fa-question-circle"></i></a>
          <a href="#" class="w3-bar-item w3-button w3-right" title="Settings"><i class="sign-out fa fa-cog"></i></a>
          <a href="../index.php" class="w3-bar-item w3-button" title="Sign out"><i class="sign-out fa fa-sign-out w3-middle"></i></a>
        </div>
      </div>

    </div>
  </div>

  <!-- Profile Modal -->
  <div id="information" class="w3-modal w3-animate-opacity w3-theme-d2">
    <div class="w3-modal-content w3-white" style="width: 500px; height: 460px;">
      <!-- Dấu X - đóng -->
      <i onclick="document.getElementById('information').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
      <div class="w3-container w3-white">
        <!-- Title of Modal -->
        <h3 class="w3-center">THÔNG TIN CÁ NHÂN</h3>
        <img src="../avatar/avatar1.png" alt="Avatar" class="w3-center w3-circle w3-margin-right" style="width:70px; margin-left: 200px;">
        <p style="font-weight: bold;" class="w3-wide w3-center w3-text-green">59130336</p>
        <hr>
        <div class="w3-infor">
          <label><i class="fa fa-user"></i> Name:</label> &emsp;&emsp;&emsp; <span>Vũ Ngọc Đoàn</span>
          <br>
          <label><i class="fa fa-birthday-cake"></i> DoB:</label> &emsp;&emsp;&emsp;&ensp; <span>26-07-1999</span>
          <br>
          <label><i class="fa fa-home"></i> Country:</label> &emsp;&emsp; <span>Thai Binh</span>
          <br>
          <label><i class="fa fa-address-book"></i> Address:</label> &emsp;&emsp; Nha Trang, Khanh Hoa
          <br>
          <label><i class="fa fa-phone-square"></i> Phone:</label> &emsp;&emsp;&emsp; 0977267728
          <br>
          <label><i class="fa fa-graduation-cap"></i> School:</label> &emsp;&emsp;&ensp; Nha Trang University
          <br>
          <label><i class="fa fa-facebook-square"></i> Facebook:</label> &emsp;&ensp; facebook.com/doanmelody99
          <br>
          <label><i class="fa fa-envelope"></i> Gmail:</label> &emsp;&emsp;&emsp; doanmelody2607@gmail.com
          <br>
          <label><i class="fa fa-github-square"></i> Github:</label> &emsp;&emsp;&ensp;&ensp; github.com/doanmelody2607
        </div>
      </div>

    </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
  </div>


  <script>
    // Accordion
    function myFunction(id) {
      var x = document.getElementById(id);
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
      } else {
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className =
          x.previousElementSibling.className.replace(" w3-theme-d1", "");
      }
    }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>

</body>

</html>