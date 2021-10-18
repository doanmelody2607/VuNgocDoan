<?php
$errDaySo = $errSoCu = $errSoMoi = "";
$dayso = $socu = $somoi = $mangcu = $mangmoi = "";
$arr = array();

//Hàm xuất mảng
function xuatMang($arr)
{
  $mangcu = '';
  for ($i = 0; $i < count($arr); $i++) {
    # code...
    $mangcu .= $arr[$i] . " ";
  }
  return $mangcu;
}

//Hàm thay thế 
function thayThe(&$arr, $cu, $moi)
{
  for ($i = count($arr) - 1; $i >= 0; $i--) {
    if ($arr[$i] == $cu) $arr[$i] =  $moi;
  }
}

//Khi bấm vào nút Thay thế
if (isset($_POST['submit'])) {
  //Kiểm tra dãy số đã được nhập vào hay chưa
  if (empty($_POST['dayso'])) {
    $errDaySo = "* Chưa nhập vào dãy số";
  }

  //Error of Giá trị cần thay thế
  if (empty($_POST['socu'])) {
    $errSoCu = "* Chưa nhập vào giá trị cần thay thế";
  } else {
    $socu = $_POST['socu'];
    if (!is_numeric($socu))
      $errSoCu = "* Chỉ được nhập vào số";
  }

  //Error of Giá trị thay thế
  if (empty($_POST['somoi'])) {
    $errSoMoi = "* Chưa nhập vào giá trị thay thế";
  } else {
    $somoi = $_POST['somoi'];
    if (!is_numeric($somoi))
      $errSoMoi = "* Chỉ được nhập vào số";
  }

  //Nếu không có lỗi ==> code xử lý
  if (empty($errDaySo) && empty($errSoCu) && empty($errSoMoi)) {
    $dayso = $_POST['dayso'];
    $arr = explode(",", $dayso);
    $socu = $_POST['socu'];
    $somoi = $_POST['somoi'];
    $mangcu = xuatMang($arr);
    thayThe($arr, $socu, $somoi);
    $mangmoi = xuatMang($arr);
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>THAY THẾ</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="form.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
  .form-bt {
    width: 700px;
    height: 500px;
    margin: 20px 150px;
    border: 1px solid black;
  }

  .form-bt-title {
    background: pink;
    text-align: center;
    height: 70px;
  }

  .form-bt-title h2 {
    line-height: 70px;
  }

  .form-tinhtoan {
    padding-top: 20px
  }

  .form-group {
    display: flex;
  }

  .form-group label {
    min-width: 150px;
    font-weight: bold;
  }

  .form-group small {
    color: red;
  }

  .submit {
    width: 120px;
    margin-left: 150px;
  }

  ::-webkit-input-placeholder {
    color: red !important;
  }

  .note {
    color: red;
    margin-left: 50px;
  }
</style>

<body>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



  <div class="form-bt">

    <div class="form-bt-title">
      <h2>THAY THẾ</h2>
    </div>

    <form class="form-tinhtoan" action="" method="post" style="width:80%; margin-left:80px">
      <div class="form-group">
        <label for="">Nhập các phần tử</label>
        <div style="width:76%">
          <input type="text" name="dayso" class="form-control" value="<?php echo $dayso ?>">
          <small><?php echo $errDaySo ?></small>
        </div>
      </div>

      <div class="form-group">
        <label for="">Giá trị cần thay thế</label>
        <div style="width:76%">
          <input type="text" name="socu" class="form-control" value="<?php echo $socu ?>">
          <small><?php echo $errSoCu ?></small>
        </div>
      </div>

      <div class="form-group">
        <label for="">Giá trị thay thế</label>
        <div style="width:76%">
          <input type="text" name="somoi" class="form-control" value="<?php echo $somoi ?>">
          <small><?php echo $errSoMoi ?></small>
        </div>
      </div>

      <button name="submit" class="btn btn-dark submit">Thay thế</button>

      <div class="form-group" style="margin-top: 20px">
        <label for="">Mảng cũ</label>
        <div style="width:76%">
          <input type="text" name="mangcu" readonly class="form-control" value="<?php echo $mangcu ?>">
        </div>
      </div>

      <div class="form-group" style="margin-top: 20px">
        <label for="">Mảng sau khi thay thế</label>
        <input type="text" name="mangmoi" readonly class="form-control" value="<?php echo $mangmoi ?>">
      </div>
    </form>

  </div>

</body>

</html>