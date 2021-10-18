<?php
//   echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";
//   function checkTK($sql){
//     $conn = mysqli_connect('localhost', 'root', '', 'dang_nhap')
//   or die ('Kết nối không được' .mysqli_connect_error());
//     $result = mysqli_query($conn, $sql);

//     $row = mysqli_fetch_assoc($result);

//       mysqli_close($conn);
//     return $row;
//   }
//   $sql ="";
//   echo '<script> 



// </script>';
//   if(isset($_POST['submit'])){
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $sql = 'select * from taikhoan where user_name = "'.$username.'" and pass_word = "'.$password.'"';
//     $data = checkTK($sql);
//     if(count($data) <= 0) {
//       echo '<script> 
//       swal({
//         title: "Oh no!",
//         text: "Đăng nhập không thành công!",
//         icon: "error",
//         button: "OK",
//         });

//       </script>';
//     }
//     else{
//       echo header('location: views/index1.php');

//     }  


//   }

//Xử lý phần LOGIN
//Add Library of SweetAlert
echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";
//Khi bấm vào nút Login
if (isset($_POST['submitLogin'])) {
  //Login thành công
  if ($_POST['username'] == "doan" && $_POST['password'] == "123") {
    header("Location: views/index1.php");
  }
  //Login không thành công
  else {
    echo '<script> 
      swal({
        title: "Oh no!",
        text: "Đăng nhập không thành công! \n Username: doan \n Password: 123",
        icon: "error",
        button: "OK",
        });
      </script>';
  }
}
?>


<!DOCTYPE html>
<html>
<title>PHP Blogs</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Add thư viện SweetAlert -->
<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>

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
</style>

<body class="w3-theme-l5">

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
      <!-- Home -->
      <a id="home" href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Home"><i class="fa fa-home"></i></a>
      <!-- News -->
      <a href="#" class="nav-link w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
      <!-- Profile -->
      <a href="#" class="nav-link w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Profile"><i class="fa fa-user"></i></a>
      <!-- Project -->
      <a href="#" class="nav-link w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Project"><i class="fa fa-folder-open"></i></a>
      <!-- Contact -->
      <a href="#" class="nav-link w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Contact"><i class="fa fa-envelope"></i></a>
      <!-- Login -->
      <a onclick="document.getElementById('login').style.display='block'" href="#login" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Sign in">
        <small> Login</small> <i class="fa fa-sign-in"></i>
      </a>
    </div>
  </div>

  <!-- LOGIN Modal -->
  <div id="login" class="w3-modal w3-animate-opacity">
    <div class="w3-modal-content w3-white" style="width: 400px; height: 360px;">
      <!-- Dấu X - đóng -->
      <i onclick="document.getElementById('login').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
      <div class="w3-container w3-white">

        <!-- Title of Modal -->
        <div style="background-color: pink;" class="modal-title">
          <h2 style="text-align: center;" class="">SIGN IN</h2>
        </div>
        <!-- UI-LOGIN -->
        <form action="" method="post">
          <label style="font-weight: bold;"><i class="fa fa-user"></i> Username</label>
          <p><input class="w3-input w3-border" name="username" type="text" placeholder="@username is doan"></p>
          <label style="font-weight: bold;"><i class="fa fa-unlock-alt"></i> Password</label>
          <p><input class="w3-input w3-border" name="password" type="password" placeholder="@password is 123"></p>
          <!-- Button - Khi click vào (với điều kiện đúng user & pass) -->
          <button name="submitLogin" id="button" class="button-login w3-button w3-padding-large w3-green w3-margin-bottom" style="margin-left: 130px;">LOGIN</button>
        </form>
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

  <!-- Java Script - SweetAlert -->
  <script>
    //Hiển thị noti khi chưa đăng nhập 
    var x = document.querySelectorAll('.nav-link');
    x.forEach(myFunction);

    function myFunction(id) {
      id.addEventListener("click", function() {
        swal({
          title: "Oh no!",
          text: "Bạn chưa đăng nhập",
          icon: "error",
          button: "OK",
        });
      });
    }

    //Lỗi khi đăng nhập sai
    //   var  x = document.querySelectorAll(".button-login");
    //   x.forEach(loginFunction);
    //   function loginFunction(id){
    //     id.addEventListener("click",function(){
    //       swal({
    //   title: "Oh no!",
    //   text: "Tài khoản không hợp lệ!",
    //   icon: "error",
    //   button: "OK",
    // });
    //     });
    //   }
  </script>

</body>

</html>