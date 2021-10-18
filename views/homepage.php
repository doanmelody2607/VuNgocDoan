<!DOCTYPE html>
<html>
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

  .features-of-post {
    display: flex;
  }

  .features i {
    width: 20px;
    height: 20px;
  }

  .features {
    margin-left: 230px;
  }
</style>

<body class="w3-theme-l5" id="header">

  <!-- Navbar -->
  <?php # Script 3.4 - index.php
  include('../includes/header-demo.php');
  ?>

  <!-- Page Container -->
  <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
    <!-- The Grid -->
    <div class="w3-row">
      <!-- Left Column -->
      <div class="w3-col m3">
        <!-- Profile -->
        <div class="w3-card w3-round w3-white">
          <div class="w3-container">
            <h4 class="w3-center">Vu Ngoc Doan</h4>
            <p class="w3-center"><img src="../avatar/avatar1.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
            <hr>
            <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Developer, FE</p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Nhatrang, VN</p>
            <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> July 26, 1999</p>
          </div>
        </div>
        <br>

        <!-- Accordion -->
        <div class="w3-card w3-round">
          <div class="w3-white">
            <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
            <div id="Demo1" class="w3-hide w3-container">
              <p>Some text..</p>
            </div>
            <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
            <div id="Demo2" class="w3-hide w3-container">
              <p>Some other text..</p>
            </div>
            <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
            <div id="Demo3" class="w3-hide w3-container">
              <div class="w3-row-padding">
                <br>
                <div class="w3-half">
                  <img src="../img/it2.jpg" style="width:100%" class="w3-margin-bottom">
                </div>
                <div class="w3-half">
                  <img src="../img/it3.jpg" style="width:100%" class="w3-margin-bottom">
                </div>
                <div class="w3-half">
                  <img src="../img/it8.jpg" style="width:100%" class="w3-margin-bottom">
                </div>
                <div class="w3-half">
                  <img src="../img/it12.jpg" style="width:100%" class="w3-margin-bottom">
                </div>
                <div class="w3-half">
                  <img src="../img/it11.jpg" style="width:100%" class="w3-margin-bottom">
                </div>
                <div class="w3-half">
                  <img src="../img/it10.jpg" style="width:100%" class="w3-margin-bottom">
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>

        <!-- Interests -->
        <div class="w3-card w3-round w3-white w3-hide-small">
          <div class="w3-container">
            <p>Interests</p>
            <p>
              <span class="w3-tag w3-small w3-theme-d5">News</span>
              <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
              <span class="w3-tag w3-small w3-theme-d3">Labels</span>
              <span class="w3-tag w3-small w3-theme-d2">Games</span>
              <span class="w3-tag w3-small w3-theme-d1">Friends</span>
              <span class="w3-tag w3-small w3-theme">Games</span>
              <span class="w3-tag w3-small w3-theme-l1">Friends</span>
              <span class="w3-tag w3-small w3-theme-l2">Food</span>
              <span class="w3-tag w3-small w3-theme-l3">Design</span>
              <span class="w3-tag w3-small w3-theme-l4">Art</span>
              <span class="w3-tag w3-small w3-theme-l5">Photos</span>
            </p>
          </div>
        </div>
        <br>

        <!-- Alert Box -->
        <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
          <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
            <i class="fa fa-remove"></i>
          </span>
          <p><strong>Hey!</strong></p>
          <p>Have a nice day. Don't forget to answer everyone's questions!</p>
        </div>

        <!-- End Left Column -->
      </div>

      <!-- Middle Column -->
      <div class="w3-col m7">

        <div class="w3-row-padding">
          <div class="w3-col m12">
            <div class="w3-card w3-round w3-white">
              <div class="w3-container w3-padding">
                <input readonly onclick="document.getElementById('post').style.display='block'" placeholder="Đoàn ơi, bạn đang nghĩ gì thế?" style="width: 80%;"></p>

                <div class="features-of-post">
                  <p style="width: 150px;" class="w3-border w3-center w3-green"><i class="fa fa-video-camera"></i> Video trực tiếp</p>
                  <p style="width: 150px; margin-left: 20px;" class="w3-border w3-center w3-red"><i class="fa fa-picture-o"></i> Ảnh</p>
                  <p style="width: 180px; margin-left: 20px;" class="w3-border w3-center w3-brown"><i class="fa fa-smile-o"></i> Cảm xúc/Hoạt động</p>
                </div>

                <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button>
              </div>
            </div>
          </div>
        </div>

        <!-- LOGIN Modal -->
        <div id="post" class="w3-modal w3-animate-opacity">
          <div class="w3-modal-content w3-white" style="width: 600px; height: 450px;">
            <!-- Dấu X - đóng -->
            <i onclick="document.getElementById('post').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
            <div class="w3-container w3-white">
              <!-- Title of Modal -->
              <img src="../avatar/avatar1.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
              <h5>Vu Ngoc Doan</h5>
              <hr>
              <input placeholder="Đoàn ơi, bạn đang nghĩ gì thế?" style="width: 565px; height: 200px;"></p>

              <span class="features">
                <i class="fa fa-picture-o w3-green"></i>
                <i class="fa fa-tags w3-blue"></i>
                <i class="fa fa-smile-o w3-yellow"></i>
                <i class="fa fa-map-marker w3-red"></i>
                <i class="fa fa-camera w3-pink"></i>
              </span>

              <button class="w3-button w3-block w3-green w3-section" title="Post"><i class="fa fa-pencil">POST</i></button>
            </div>

          </div>
        </div>

        <div class="w3-container w3-card w3-white w3-round w3-margin" id="spring-huy"><br>
          <img src="../avatar/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
          <div class="w3-dropdown-hover w3-hide-small w3-right">
            <span><i class="fa fa-ellipsis-h" aria-hidden="true"></i></span>
            <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:200px">
              <a href="#bookmark" class="w3-bar-item w3-button w3-right" title="Settings"><i class="sign-out fa fa-bookmark"></i> Lưu bài viết</a>
              <a href="#block" class="w3-bar-item w3-button" title="Helps"><i class="sign-out fa fa-ban"></i> Chặn người này</a>
              <a href="#delete" class="w3-bar-item w3-button" title="Sign out"><i class="sign-out fa fa-trash"></i> Xóa</a>
            </div>
          </div>
          <h4>Nguyen Xuan Huy</h4>
          <p class="w3-opacity">1 min <i class="fa fa-globe"></i></p>
          <hr class="w3-clear">
          <p>Mai thi rồi, ôn bài chưa các bạn iu :-* </p>
          <p>Mình với Dũng đi học quốc phòng ngắm gái đã quá heheheh</p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-twothird">
              <img src="../img/huy-va-dung.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div>
          </div>
          <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
          <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
        </div>

        <div class="w3-container w3-card w3-white w3-round w3-margin" id="tiger-diep"><br>
          <img src="../avatar/avatar3.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
          <div class="w3-dropdown-hover w3-hide-small w3-right">
            <span><i class="fa fa-ellipsis-h" aria-hidden="true"></i></span>
            <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:200px">
              <a href="#bookmark" class="w3-bar-item w3-button w3-right" title="Settings"><i class="sign-out fa fa-bookmark"></i> Lưu bài viết</a>
              <a href="#block" class="w3-bar-item w3-button" title="Helps"><i class="sign-out fa fa-ban"></i> Chặn người này</a>
              <a href="#delete" class="w3-bar-item w3-button" title="Sign out"><i class="sign-out fa fa-trash"></i> Xóa</a>
            </div>
          </div>
          <h4>Diep Tuy Dung</h4>
          <p class="w3-opacity">16 min <i class="fa fa-globe"></i></p>
          <hr class="w3-clear">
          <p>Web cá nhân của mình đẹp không mấy bạn iu? Như này chắc thầy Triều cho 10 điểm luôn quá kakakak ^_^</p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
              <img src="../img/web-dung1.png" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="../img/web-dung.png" style="width:100%" alt="Nature" class="w3-margin-bottom">
            </div>
          </div>
          <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
          <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
        </div>

        <div class="w3-container w3-card w3-white w3-round w3-margin" id="toan-ngu"><br>
          <img src="../avatar/avatar4.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
          <div class="w3-dropdown-hover w3-hide-small w3-right">
            <span><i class="fa fa-ellipsis-h" aria-hidden="true"></i></span>
            <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:200px">
              <a href="#bookmark" class="w3-bar-item w3-button w3-right" title="Settings"><i class="sign-out fa fa-bookmark"></i> Lưu bài viết</a>
              <a href="#block" class="w3-bar-item w3-button" title="Helps"><i class="sign-out fa fa-ban"></i> Chặn người này</a>
              <a href="#delete" class="w3-bar-item w3-button" title="Sign out"><i class="sign-out fa fa-trash"></i> Xóa</a>
            </div>
          </div>
          <h4>Vo Minh Toan</h4>
          <p class="w3-opacity">32 min <i class="fa fa-globe"></i></p>
          <hr class="w3-clear">
          <p>Bài này làm đúng chưa mấy thằng ngu??? Thằng nào rảnh bày t làm bài tập với chứ không thầy cho t rớt môn :'(</p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
              <img src="../img/bt1.png" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="../img/bt1-php.png" style="width:100%" alt="Nature" class="w3-margin-bottom">
            </div>
          </div>
          <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
          <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
        </div>

        <div class="w3-container w3-card w3-white w3-round w3-margin" id="huu-phuc"><br>
          <img src="../avatar/avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
          <div class="w3-dropdown-hover w3-hide-small w3-right">
            <span><i class="fa fa-ellipsis-h" aria-hidden="true"></i></span>
            <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:200px">
              <a href="#bookmark" class="w3-bar-item w3-button w3-right" title="Settings"><i class="sign-out fa fa-bookmark"></i> Lưu bài viết</a>
              <a href="#block" class="w3-bar-item w3-button" title="Helps"><i class="sign-out fa fa-ban"></i> Chặn người này</a>
              <a href="#delete" class="w3-bar-item w3-button" title="Sign out"><i class="sign-out fa fa-trash"></i> Xóa</a>
            </div>
          </div>
          <h4>Dang Huu Phuc</h4>
          <p class="w3-opacity">1 hour <i class="fa fa-globe"></i></p>
          <hr class="w3-clear">
          <p>Thể dục thể thao nâng cao sức khỏe nha mấy bạn!</p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-twothird">
              <img src="../img/doibongtieulam.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div>

          </div>
          <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
          <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
        </div>

        <!-- End Middle Column -->
      </div>

      <!-- Right Column -->
      <div class="w3-col m2">
        <div class="w3-card w3-round w3-white w3-center">
          <div class="w3-container">
            <h4 style="font-weight:bold">Upcoming Events</h4>
            <img src="../img/it7.jpg" alt="Forest" style="width:100%;">
            <p><strong>Holiday</strong></p>
            <p>Friday 15:00</p>
            <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
          </div>
        </div>
        <br>

        <!-- Friend Request -->
        <div class="w3-card w3-round w3-white w3-center" id="friend-request">
          <div class="w3-container">
            <h4 style="font-weight:bold">Friend Request</h4>
            <img src="../avatar/avatar7.png" alt="Avatar" style="width:50%"><br>
            <span>Do Thuy Quynh</span>
            <div class="w3-row w3-opacity">
              <div class="w3-half">
                <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
              </div>
              <div class="w3-half">
                <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
              </div>
            </div>

            <br>

            <img src="../avatar/avatar8.png" alt="Avatar" style="width:50%"><br>
            <span>Chau Cam Ly</span>
            <div class="w3-row w3-opacity">
              <div class="w3-half">
                <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
              </div>
              <div class="w3-half">
                <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
              </div>
            </div>

            <br>

            <img src="../avatar/avatar9.png" alt="Avatar" style="width:50%"><br>
            <span>Nguyen Thi Kim Nga</span>
            <div class="w3-row w3-opacity">
              <div class="w3-half">
                <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
              </div>
              <div class="w3-half">
                <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
              </div>
            </div>

          </div>
        </div>
        <br>

        <!-- End Right Column -->
      </div>

      <!-- End Grid -->
    </div>

    <!-- End Page Container -->
  </div>
  <br>

  <!-- Footer -->
  <?php
  include('../includes/footer-demo.php');
  ?>

</body>

</html>