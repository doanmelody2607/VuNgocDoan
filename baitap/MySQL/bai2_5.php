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

$sql = 'select  s.Ten_sua, hs.Ten_hang_sua, ls.Ten_loai, s.Trong_luong, s.Don_gia, s.Hinh 
    from sua s join hang_sua hs on s.Ma_hang_sua=hs.Ma_hang_sua
    join loai_sua ls on s.Ma_loai_sua=ls.Ma_loai_sua';
$data = getData($sql);

?>

<!doctype html>
<html lang="en">

<head>
    <title>THÔNG TIN HÀNG SỮA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>

<style>
    .table
    {
        margin: 20px 150px;
    }

    .table th
    {
        background-color: pink;
        font-size: 15px;
        text-align: center;
    }

    .table td
    {
        text-align: center;
    }
</style>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <table border="1" align="center" class="table table-hover" style="font-size: 10px;">
        <tr class="title">
            <th colspan="2">THÔNG TIN CÁC SẢM PHẨM</th>
        </tr>

        <?php
        foreach ($data as $value) {
            echo '<tr>
            <td><img src="../baitap/MySQL/hinh-sua/' . $value[5] . '" width="50" height="50"></td>

            <td>' . $value[0] . '<br>   
            Nhà sản xuất:' . $value[1] . '<br>
            ' . $value[2] . ' - ' . $value[3] . ' gr - ' . $value[4] . ' VNĐ
            </td>
        </tr>';
        }
        ?>
    </table>
</body>

</html>