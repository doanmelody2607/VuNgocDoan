<?php
$pheptinh = $so1 = $so2 = $ketqua = "";
if (isset($_POST["submit"]) && isset($_POST["calculate"])) {
  $so1 = $_POST["n1"];
  $so2 = $_POST["n2"];
  switch ($_POST["calculate"]) {
    case "Cong": {
        $pheptinh = "Cộng";
        $ketqua = $so1 + $so2;
        break;
      }
    case "Tru": {
        $pheptinh = "Trừ";
        $ketqua = $so1 - $so2;
        break;
      }
    case "Nhan": {
        $pheptinh = "Nhân";
        $ketqua = $so1 * $so2;
        break;
      }
    case "Chia": {
        $pheptinh = "Chia";
        $ketqua = $so1 / $so2;
        break;
      }
    case "Phantram": {
        $pheptinh = "Phần trăm";
        if ($so2 == 0) $ketqua = "Không được chia cho 0";
        else $ketqua = $so1 % $so2;
        break;
      }
    default:
      echo "Sai phép toán! Hãy nhập lại!";
  };
}
?>

<!doctype html>
<html lang="en">

<!-- <style>
  
</style> -->

<head>
  <title>PHÉP TÍNH TRÊN 2 SỐ</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bai6-2.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



  <div class="form-bt">

    <div class="form-bt-title">
      <h2>PHÉP TÍNH TRÊN 2 SỐ</h2>
    </div>

    <form class="form-tinhtoan" action="bai6_ketqua.php" method="post" style="width:70%; margin-left:100px">
      <div class="form-group">
        <label>Chọn phép tính:</label>
        <div>
          <td class="second-right">
            <input type="radio" name="PhepTinh" checked> <?php echo $pheptinh ?>
          </td>
        </div>
      </div>

      <div class="form-group">
        <label for="">Số thứ nhất</label>
        <div style="width:76%">
          <input type="text" name="so1" class="form-control" value="<?php echo $so1 ?>">
        </div>
      </div>

      <div class="form-group">
        <label for="">Số thứ hai</label>
        <div style="width:76%">
          <input type="text" name="so2" class="form-control" value="<?php echo $so2 ?>">
        </div>
      </div>

      <div class="form-group">
        <label for="">Kết quả</label>
        <div style="width:76%">
          <input type="text" name="ketqua" readonly class="form-control" value="<?php echo $ketqua ?>">
        </div>
      </div>

      <!-- Back to the front-page -->
      <a href="javascript:window.history.back(-1);" class="btn btn-dark">Trở về trang trước</a>
    </form>

  </div>

</body>

</html>