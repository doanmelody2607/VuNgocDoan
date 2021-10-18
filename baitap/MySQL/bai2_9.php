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

$tensua = $result = "";
if (isset($_POST['tensua'])) {
    $tensua = $_POST['tensua'];
}
$sql = 'SELECT * FROM sua WHERE Ten_sua LIKE "%' . $tensua . '%" ';
$data = getData($sql);
if (count($data) > 0) $result = " Có " . count($data) . " sản phẩm được tìm thấy";
else    $result = "Không có sản phẩm nào được tìm thấy";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        .search{
            margin-top: 50px;
        }

        .search h2{
            margin-left: 300px;
        }

        .search form {
            margin-left: 320px;
        }

        .info-sua{
            width: 700px;
            margin:20px 150px;
        }
    </style>

</head>

<body>

    <div class="search text-center ">
        <h2>TÌM KIẾM THÔNG TIN SỮA</h2>
        <form action="" class="form-inline form" method="post">
            <div class="form-group ml-35">
                <label style="font-weight: bold;" for="">Tên sữa</label>
                <input type="text" name="tensua" value="<?php echo $tensua; ?>">
            </div>
            <button type="submit" class="w3-button w3-round w3-theme-d2 ml-2">Tìm kiếm</button>
        </form>
    </div>

    <div class="info-sua text-center">
        <!-- Hiển thị ra dòng "Có n sản phẩm" -->
        <p class="w3-text-theme"><?php echo $result ?></p>
        <!-- Hiển thị ra form thông tin sữa -->
        <div>
            <table border="1" style="font-size: 10px;">
                <?php
                foreach ($data as $value) {
                    echo '
                        <tr style="background-color: pink"><td colspan="2" class="text-center"> <h2>' . $value[1] . '</h2></td></tr>
                        <tr>
                          <td><img src="../baitap/MySQL/hinh-sua/' . $value[8] . '" width="100" height="100"></td>
                          <td>
                            <p><b>Thành phần dinh dưỡng</b></p>
                            <p>' . $value[6] . '</p>
                            <p><b>Lợi ích</b></p>
                            <p>' . $value[7] . '</p>
                            <p><b>Trọng lượng: </b> <kbh class="text-danger">' . $value[4] . ' 
                            </kbh></span> <span>- Đơn giá: <kbh class="text-danger"> ' . $value[5] . ' </kbh></span></p>
                          </td>
                        </tr>';
                }
                ?>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>