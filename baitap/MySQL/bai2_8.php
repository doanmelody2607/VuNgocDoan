<?php
const HOST = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const DATABASE = "test_quanlybansua";;

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

//Đánh dấu trang hiện tại là 1
$current_page = 1;
$sql = 'select * from sua';
//Phân trang
$page = ceil(sizeof(getData($sql)) / 2);
if (isset($_GET['pages'])) {
    $current_page = $_GET['pages'];
} else {
    $_GET['pages'] = 1;
} //*
$index = ($current_page - 1) * 2;
$sql = 'select * from sua limit ' . $index . ' , 2';
$data = getData($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Phân Trang</title>
    <style>

        .tensua {
            text-align: center;
            background-color: pink;
        }

        .form-bt {
            width: 700px;
            margin: 20px 150px;
        }

        .form-bt-title {
            text-align: center;
            font-size: 30px;
        }

        kbh {
            color: red;
        }

        .pagination{
            margin-left: 80px;
        }

        .pagination li {
            margin-right: 20px;
        }

        .pagination li a:link {
            text-decoration: none;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="form-bt">
        <div class="form-bt-title">Thông Tin Chi Tiết Các Loại Sữa</div>
        <table align="center" border="1" style="font-size: 10px;">
            <?php foreach ($data as $value)
                echo '<tr ><th colspan="2" class="tensua"> <h2>' . $value[1] . '</h2></th></tr>
                <tr>
                <td><img src="../baitap/MySQL/hinh-sua/' . $value[8] . '" width="60" height="60"></td>
                <td>
                  <p><b>Thành phần dinh dưỡng:</b></p>
                  <p>' . $value[6] . '</p>
                  <p><b>Lợi ích:</b></p>
                  <p>' . $value[7] . '</p>
                  <p><b>Trọng lượng: </b><kbh>' . $value[4] . '</kbh> - 
                    <b>Đơn giá: </b><kbh>' . $value[5] . '</kbh></p>
                </td>
                </tr>';
            ?>
        </table>
    </div>
    
    <!-- Phân trang -->
    <ul class="pagination">
        <?php
        echo '<li><a href="?bai=8"> << </a></li>';
        if (isset($_GET['pages'])) {
            $nextPage = $_GET['pages'];
            if ($_GET['pages'] > 1) {
                $nextPage--;
            }
        }
        echo '<li><a href="?bai=8&pages=' . $nextPage . '"> <  </a></li>';
        for ($i = 1; $i <= $page; $i++) {
            if ($i == $_GET['pages']) {
                echo '<li><b><a href="?bai=8&pages=' . $i . '"> ' . $i . ' </a></b></li>';
            } else echo '<li><a href="?bai=8&pages=' . $i . '"> ' . $i . ' </a></li>';
        }
        if (isset($_GET['pages'])) {
            $backPage = $_GET['pages'];
            if ($_GET['pages'] < $page) {
                $backPage++;
            }
        }
        echo '<li><a href="?bai=8&pages=' . $backPage . '"> >  </a></li>';
        echo '<li><a href="?bai=8&pages=' . $page . '"> >> </a></li>';
        ?>
    </ul>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>