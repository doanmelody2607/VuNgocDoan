<?php
const HOST = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const DATABASE = "test_quanlybansua";;

//Hàm kết nối database
function getData($sql)
{
  $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
  $data = [];
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($result)) {
    $data[] = $row;
  }
  mysqli_close($conn);
  return $data;
}

$sql = 'select * from sua';
$dong =  ceil(sizeof(getData($sql)) / 5);
$data;
?>
<!doctype html>
<html lang="en">

<head>
  <title>List Dạng Cột</title>
  <!-- Required meta tags -->
  <style>
    .tt {
      text-align: center;
      background-color: pink;
      font-size: 15px;
    }

    table {
      width: 900px;
      margin: 20px 60px;
    }

    kbh {
      color: red;
    }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <table align="center" border="1" class="" style="font-size: 10px;">
    <tr>
      <th colspan="5" class="tt">THÔNG TIN CÁC SẢM PHẨM</th>
    </tr>

    <?php
    for ($i = 0; $i < $dong; $i++) {
      $sql = 'select * from sua limit ' . ($i * 5) . ',5';
      $data = getData($sql);
      echo '<tr class="text-center"> ';
      foreach ($data as $value) {
        echo ' <td> 
                        <p><b> ' . $value[1] . ' </b></p>
                        <p><span><kbh> ' . $value[4] . ' </kbh>gr</span>
                        <span> - <kbh> ' . $value[5] . ' </kbh> VNĐ</span> 
                        </p>
                        <img src="../baitap/MySQL/hinh-sua/' . $value[8] . '" width="40" height="40">
                    </td>  ';
      }
      echo '</tr>';
    }
    ?>
  </table>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>