<?php
$tenchuho = $errTCH = $chisocu = $errCSC = $chisomoi = $errCSM = $dongia = $total = "";
if (isset($_POST['submit'])) {
  //Kiểm tra tên chủ hộ
  if (empty($_POST['tenchuho']))
    $errTCH = "* Chưa nhập vào tên chủ hộ";
  else
    $tenchuho = $_POST['tenchuho'];

  //Kiểm tra chỉ số cũ
  if (empty($_POST['chisocu']))
    $errCSC = "* Chưa nhập vào chỉ số cũ";
  else {
    $chisocu = $_POST['chisocu'];
    if (!is_numeric($chisocu))
      $errCSC = "* Chỉ cho phép nhập số";
    else if ($chisocu <= 0)
      $errCSC = "* Chỉ số cũ phải lớn hơn 0";
  }

  //Kiểm tra chỉ số mới
  if (empty($_POST['chisomoi']))
    $errCSM = "* Chưa nhập vào chỉ số mới";
  else {
    $chisomoi = $_POST['chisomoi'];
    if (!is_numeric($chisomoi))
      $errCSM = "* Chỉ cho phép nhập số";
    else if ($chisomoi <= 0)
      $errCSM = "* Chỉ số mới phải lớn hơn 0";
    else if ($chisomoi < $chisocu)
      $errCSM = "* Chỉ số mới phải lớn hơn chỉ số cũ";
  }


  //Tính số tiền thanh toán
  if (empty($errTCH) && empty($errCSC) && empty($errCSM)) {
    $dongia = $_POST['dongia'];
    $total = ($chisomoi - $chisocu) * $dongia;
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>THANH TOÁN TIỀN ĐIỆN</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
  .form-bt {
    width: 600px;
    height: 430px;
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
      <h2>THANH TOÁN TIỀN ĐIỆN</h2>
    </div>

    <form class="form-tinhtoan" action="" method="post" style="width:70%; margin-left:90px">
      <div class="form-group">
        <label for="">Tên chủ hộ</label>
        <div style="width:70%">
          <input type="text" name="tenchuho" class="form-control" value="<?php echo $tenchuho ?>">
          <small><?php echo $errTCH ?></small>
        </div>
      </div>

      <div class="form-group">
        <label for="">Chỉ số cũ</label>
        <div style="width:70%">
          <input type="text" name="chisocu" class="form-control" value="<?php echo $chisocu ?>">
          <small><?php echo $errCSC ?></small>
        </div>
        (Kw)
      </div>

      <div class="form-group">
        <label for="">Chỉ số mới</label>
        <div style="width:70%">
          <input type="text" name="chisomoi" class="form-control" value="<?php echo $chisomoi ?>">
          <small><?php echo $errCSM ?></small>
        </div>
        (Kw)
      </div>

      <div class="form-group">
        <label for="">Đơn giá</label>
        <input type="text" name="dongia" class="form-control" value="20000">(VNĐ)
      </div>

      <div class="form-group">
        <label for="">Số tiền thanh toán</label>
        <input type="text" name="total" readonly class="form-control" value="<?php echo $total ?>">(VNĐ)
      </div>

      <button name="submit" class="btn btn-dark submit">Tính</button>
    </form>

  </div>

</body>

</html>