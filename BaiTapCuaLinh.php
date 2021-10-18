<?php 
    $errMSSV = $errHoTen = $errNgaySinh = $errEmail ="";
    $malop = $masv = $hoten = $gioitinh = $ngaysinh= $email= "";

    if(isset($_POST['submit']))
    {
      
        $SinhVien=array();
        $new_SV = array(
          'malop' => $malop,
          'masv' => $masv,
          'hoten' => $hoten,
          'gioitinh' => $gioitinh,
          'ngaysinh' => $ngaysinh,
          'email' => $email
        );

        $SinhVien[] = $new_SV;
      }
?>

<!doctype html>
<html lang="en">

<head>
  <title>THÔNG TIN SINH VIÊN</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>

<style>
  .form-bt
  {
    margin: 20px 200px;
    width: 700px;
  }


  .form-tinhtoan legend {
    font-weight: bold;
  }

  .form-group {
    display: flex;
    margin-top: 10px;
  }

  .form-group label {
    min-width: 150px;
  }

  .form-group small {
    color: red;
  }

  .submit {
    width: 200px;
    margin-top: 10px;
  }

  .cancel {
    width: 70px;
    margin-top: 10px;
  }

  .button {
    margin-left: 150px;
  }

  ::-webkit-input-placeholder {
    color: red !important;
  }

  .fill select {
    width: 170px;
  }

  .form-control-note {
    width: 350px;
    height: 100px;
  }
</style>

<body>

  <div class="form-bt">


    <form class="form-tinhtoan" action="BaiTapCuaLinh.php" method="POST" style="width:95%; margin-left:15px">
      <fieldset>
        <legend>THÔNG TIN SINH VIÊN</legend>
        <div class="form-group">
            <label for="">Mã lớp</label>
            <div class="fill">
              <select name="malop">
                <option value="60CNTT1"> 60CNTT1 </option>
                <option value="60CNTT2"> 60CNTT2 </option>
                <option value="60CNTT3"> 60CNTT3 </option>
              </select>
            </div>
          </div>

        <div class="form-group">
          <label for="">Mã sinh viên: </label>
          <div>
            <input type="text" name="masv" class="form-control">
            <small><?php echo $errMSSV ?></small>
          </div>
        </div>

        <div class="form-group">
          <label for="">Họ tên: </label>
          <input type="text" name="hoten" class="form-control">
          <small><?php echo $errHoTen ?></small>
        </div>

        <div class="form-group">
          <label for="">Ngày sinh: </label>
          <input type="date" name="ngaysinh" class="form-control">
          <small><?php echo $errNgaySinh ?></small>
        </div>

        <div class="form-group">
          <label for="">Giới tính: </label>
            <input type="radio" name="gioitinh" value="Nam" class="form-control" checked> Nam
            <input type="radio" name="gioitinh" value="Nữ" class="form-control"> Nữ
            <input type="radio" name="gioitinh" value="Không xác định" class="form-control"> Không xác định
        </div>

        <div class="form-group">
          <label for="">Email: </label>
          <input type="type" name="email" class="form-control">
          <small><?php echo $errEmail ?></small>
        </div>

        <div class="button">
          <button name="submit" type="submit" class="btn btn-dark submit">Thêm sinh viên</button>

          <button name="cancel" type="reset" class="btn btn-dark submit">Hủy</button>
        </div>
    </form>

  </div>


  </fieldset>



</body>

</html>