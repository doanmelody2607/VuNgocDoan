<?php
$toan = $errT = $ly = $errL = $hoa = $errH = $diemchuan = $errDC = $total = $result = "";
if (isset($_POST['submit'])) {
  //Kiểm tra điểm Toán
  if (empty($_POST['toan']))
    $errT = "* Chưa nhập vào điểm Toán";
  else {
    $toan = $_POST['toan'];
    if (!is_numeric($toan))
      $errT = "* Chỉ cho phép nhập số";
    else if ($toan < 0)
      $errT = "* Điểm không được là số âm";
  }


  //Kiểm tra điểm Lý
  if (empty($_POST['ly']))
    $errL = "* Chưa nhập vào điểm Lý";
  else {
    $ly = $_POST['ly'];
    if (!is_numeric($ly))
      $errL = "* Chỉ cho phép nhập số";
    else if ($ly < 0)
      $errL = "* Điểm không được là số âm";
  }

  //Kiểm tra điểm Hóa
  if (empty($_POST['hoa']))
    $errH = "* Chưa nhập vào điểm Hóa";
  else {
    $hoa = $_POST['hoa'];
    if (!is_numeric($hoa))
      $errH = "* Chỉ cho phép nhập số";
    else {
      if ($hoa < 0)
        $errH = "* Điểm không được là số âm";
      else if ($hoa == 0)
        $hoa = 0;
    }
  }

  //Kiểm tra điểm chuẩn
  if (empty($_POST['diemchuan']))
    $errDC = "* Chưa nhập vào điểm chuẩn";
  else {
    $diemchuan = $_POST['diemchuan'];
    if (!is_numeric($diemchuan))
      $errDC = "* Chỉ cho phép nhập số";
    else if ($diemchuan <= 0)
      $errDC = "* Điểm chuẩn phải lớn hơn 0";
  }

  //Tính tổng điểm
  if (empty($errT) && empty($errL) && empty($errH)) {
    $total = $toan + $ly + $hoa;
  }

  //Xét kết quả
  if ($toan > 0 && $ly > 0 && $hoa > 0) {
    if ($total >= $diemchuan)
      $result = "Đậu";
    else
      $result = "Rớt";
  } else
    $result = "Rớt";
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>KẾT QUẢ THI ĐẠI HỌC</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
  .form-bt {
    width: 600px;
    height: 460px;
    margin: 20px 200px;
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
</style>

<body>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



  <div class="form-bt">

    <div class="form-bt-title">
      <h2>KẾT QUẢ THI ĐẠI HỌC</h2>
    </div>

    <form class="form-tinhtoan" action="" method="post" style="width:70%; margin-left:90px">
      <div class="form-group">
        <label for="">Toán</label>
        <div style="width:76%">
          <input type="text" name="toan" class="form-control" value="<?php echo $toan ?>">
          <small><?php echo $errT ?></small>
        </div>
      </div>

      <div class="form-group">
        <label for="">Lý</label>
        <div style="width:76%">
          <input type="text" name="ly" class="form-control" value="<?php echo $ly ?>">
          <small><?php echo $errL ?></small>
        </div>
      </div>

      <div class="form-group">
        <label for="">Hóa</label>
        <div style="width:76%">
          <input type="text" name="hoa" class="form-control" value="<?php echo $hoa ?>">
          <small><?php echo $errH ?></small>
        </div>
      </div>

      <div class="form-group">
        <label for="">Điểm chuẩn</label>
        <div style="width:76%">
          <input type="text" name="diemchuan" class="form-control" style="color:red" value="<?php echo $diemchuan ?>">
          <small><?php echo $errDC ?></small>
        </div>
      </div>

      <div class="form-group">
        <label for="">Tổng điểm</label>
        <input type="text" name="total" readonly class="form-control" value="<?php echo $total ?>">
      </div>

      <div class="form-group">
        <label for="">Kết quả thi</label>
        <input type="text" name="result" readonly class="form-control" value="<?php echo $result ?>">
      </div>

      <button name="submit" class="btn btn-dark submit">Xem kết quả</button>
    </form>

  </div>

</body>

</html>