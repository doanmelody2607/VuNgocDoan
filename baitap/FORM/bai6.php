<?php
$n1 = $n2 = "";
?>

<!doctype html>
<html lang="en">


<head>
  <title>PHÉP TÍNH TRÊN 2 SỐ</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
  .form-bt {
    width: 700px;
    height: 300px;
    margin: 60px 200px;
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

  .btn-group label {
    font-weight: bold;
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
      <h2>PHÉP TÍNH TRÊN 2 SỐ</h2>
    </div>

    <form class="form-tinhtoan" action="../views/bt_form.php?bai=6-ketqua" method="post" style="width:70%; margin-left:100px">
      <div class="form-group">
        <label>Chọn phép tính:</label>
        <div>

          <input type="radio" name="calculate" value="Cong" autocomplete="off" checked> Cộng

          <input type="radio" name="calculate" value="Tru" autocomplete="off"> Trừ

          <input type="radio" name="calculate" value="Nhan" autocomplete="off "> Nhân

          <input type="radio" name="calculate" value="Chia" autocomplete="off "> Chia

          <input type="radio" name="calculate" value="Phantram" autocomplete="off "> Phần trăm

        </div>
      </div>

      <div class="form-group">
        <label for="">Số thứ nhất</label>
        <div style="width:76%">
          <input type="text" name="n1" class="form-control" value="<?php echo $n1 ?>">
        </div>
      </div>

      <div class="form-group">
        <label for="">Số thứ hai</label>
        <div style="width:76%">
          <input type="text" name="n2" class="form-control" value="<?php echo $n2 ?>">
        </div>
      </div>

      <button name="submit" class="btn btn-dark submit">Tính</button>
    </form>

  </div>

</body>

</html>