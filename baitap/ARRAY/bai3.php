<?php
$err = "";
$dayso = $min = $max = $soN = $n = "";
$arr = array();
$total = 0;

//Hàm tạo mảng
function taoMang($n, &$arr)
{
  for ($i = 0; $i < $n; $i++) {
    # code...
    array_push($arr, rand(0, 20));
  }
}

//Hàm xuất mảng
function xuatMang($arr)
{
  $dayso = '';
  for ($i = 0; $i < count($arr); $i++) {
    # code...
    $dayso .=  $arr[$i] . " ";
  }
  return $dayso;
}

//Hàm tìm TTNN
function timMin($arr)
{
  $min = $arr[0];
  for ($i = 0; $i < count($arr); $i++) {
    # code...
    if ($arr[$i] < $min) $min = $arr[$i];
  }
  return $min;
}

//Hàm tìm GTLN
function timMax($arr)
{
  $max = $arr[0];
  for ($i = 0; $i < count($arr); $i++) {
    # code...
    if ($arr[$i] > $max) $max = $arr[$i];
  }
  return $max;
}

//Hàm tính Tổng mảng
function tongMang($arr)
{
  $total = 0;
  for ($i = 0; $i < count($arr); $i++) {
    # code...
    $total += $arr[$i];
  }
  return $total;
}

if (isset($_POST['submit'])) {
  //Kiểm tra 
  if (empty($_POST['soN'])) {
    $err = "* Chưa nhập vào N";
  } else {
    $soN = $_POST['soN'];
    if (!is_numeric($soN))
      $err = "* N phải là số nguyên";
    else if ($soN <= 0)
      $err = "* N phải lớn hơn 0";
  }

  //Xử lý
  if (empty($err)) {
    $n = $_POST['soN'];
    taoMang($n, $arr);
    $dayso = xuatMang($arr);
    $min  = timMin($arr);
    $max = timMax($arr);
    $total = tongMang($arr);
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>PHÁT SINH MẢNG VÀ TÍNH TOÁN</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="form.css ">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
  .form-bt {
    width: 700px;
    height: 450px;
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
    min-width: 200px;
    font-weight: bold;
  }

  .form-group small {
    color: red;
  }

  .submit {
    width: 180px;
    margin-left: 200px;
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
      <h2>PHÁT SINH MẢNG VÀ TÍNH TOÁN</h2>
    </div>

    <form class="form-tinhtoan" action="" method="post" style="width:70%; margin-left:90px">
      <div class="form-group">
        <label for="">Nhập số phần tử</label>
        <div style="width:76%">
          <input type="text" name="soN" class="form-control" value="<?php echo $n ?>">
          <small><?php echo $err ?></small>
        </div>
      </div>

      <button name="submit" class="btn btn-dark submit">Phát sinh và tính toán</button>

      <div class="form-group" style="margin-top: 20px">
        <label for="">Mảng</label>
        <div style="width:76%">
          <input type="text" name="dayso" class="form-control" readonly value="<?php echo $dayso ?>">
        </div>
      </div>

      <div class="form-group">
        <label for="">GTLN (MAX) trong mảng</label>
        <div style="width:76%">
          <input type="text" name="max" class="form-control" readonly value="<?php echo $max ?>">
        </div>
      </div>

      <div class="form-group">
        <label for="">TTNN (MIN) trong mảng</label>
        <div style="width:76%">
          <input type="text" name="min" class="form-control" readonly value="<?php echo $min ?>">
        </div>
      </div>

      <div class="form-group" style="margin-top: 20px">
        <label for="">Tổng mảng</label>
        <input type="text" name="total" readonly class="form-control" value="<?php echo $total ?>">
      </div>
    </form>

  </div>

</body>

</html>