<?php
$err = "";
$dayso = "";
$arr = array();
$total = 0;
if (isset($_POST['submit'])) {
  //Kiểm tra dãy số đã được nhập vào hay chưa
  if (empty($_POST['dayso'])) {
    $err = "* Chưa nhập vào dãy số";
  } else {
    $dayso = $_POST['dayso'];
    $arr = explode(",", $dayso);
  }
  // 1, 2, 3, 4, 5
  foreach ($arr as $value) {
    $total += $value;
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>NHẬP VÀ TÍNH TRÊN DÃY SỐ</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="form.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
  .form-bt {
    width: 600px;
    height: 300px;
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
      <h2>NHẬP VÀ TÍNH TRÊN DÃY SỐ</h2>
    </div>

    <form class="form-tinhtoan" action="" method="post" style="width:70%; margin-left:90px">
      <div class="form-group">
        <label for="">Nhập dãy số</label>
        <div style="width:76%">
          <input type="text" name="dayso" class="form-control" value="<?php echo $dayso ?>">
          <small><?php echo $err ?></small>
        </div>
        <p style="color:red">(*)</p>
      </div>

      <button name="submit" class="btn btn-dark submit">Tổng dãy số</button>

      <div class="form-group" style="margin-top: 20px">
        <label for="">Tổng dãy số</label>
        <input type="text" name="total" readonly class="form-control" value="<?php echo $total ?>">
      </div>

      <p class="note">(*) Các số được nhập cách nhau bằng dấu ","</p>

    </form>

  </div>

</body>

</html>