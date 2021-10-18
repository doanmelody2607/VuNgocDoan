<?php
$giobd = $errBD = $giokt = $errKT = $total = "";
if (isset($_POST['submit'])) {
  //Kiểm tra giờ bắt đầu
  if (empty($_POST['giobd']))
    $errBD = "* Chưa nhập vào giờ bắt đầu";
  else {
    $giobd = $_POST['giobd'];
    if (!is_numeric($giobd))
      $errBD = "* Chỉ cho phép nhập số";
    else if ($giobd < 0)
      $errBD = "* Giờ không được là số âm";
  }

  //Kiểm tra giờ kết thúc
  if (empty($_POST['giokt']))
    $errKT = "* Chưa nhập vào giờ kết thúc";
  else {
    $giokt = $_POST['giokt'];
    if (!is_numeric($giokt))
      $errKT = "* Chỉ cho phép nhập số";
    else if ($giokt <= 0)
      $errKT = "* Giờ không được là số âm";
    else if ($giokt < $giobd)
      $errKT = "* Giờ kết thúc phải lớn hơn giờ bắt đầu";
  }

  //Tính tiền
  if (empty($errBD) && empty($errKT)) {
    if ($giokt > 17)
      $total = ($giokt - 17) * 45000 + (17 - $giobd) * 20000;
    else
      $total = (17 - $giobd) * 20000;
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>TÍNH TIỀN KARAOKE</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
  .form-bt {
    width: 600px;
    height: 360px;
    margin: 40px 200px;
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
      <h2>TÍNH TIỀN KARAOKE</h2>
    </div>

    <form class="form-tinhtoan" action="" method="post" style="width:70%; margin-left:90px">
      <div class="form-group">
        <label for="">Giờ bắt đầu</label>
        <div style="width:76%">
          <input type="text" name="giobd" class="form-control" value="<?php echo $giobd ?>">
          <small><?php echo $errBD ?></small>
        </div>
        (h)
      </div>

      <div class="form-group">
        <label for="">Giờ kết thúc</label>
        <div style="width:76%">
          <input type="text" name="giokt" class="form-control" value="<?php echo $giokt ?>">
          <small><?php echo $errKT ?></small>
        </div>
        (h)
      </div>

      <div class="form-group">
        <label for="">Tiền thanh toán</label>
        <input type="text" name="total" readonly class="form-control" value="<?php echo $total ?>">(VNĐ)
      </div>

      <button name="submit" class="btn btn-dark submit">Tính tiền</button>
    </form>

  </div>

</body>

</html>