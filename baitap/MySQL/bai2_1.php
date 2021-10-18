<?php
const HOST = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const DATABASE = "test_quanlybansua";

//Connect mysqli
$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Đọc tiếng việt
mysqli_set_charset($conn, 'utf8');

$squery = 'select * from hang_sua';
$result = mysqli_query($conn, $squery);
if (!$result) die("Câu truy vấn bị sai");

$data = [];
while ($row = mysqli_fetch_row($result)) {
    $data[] = $row;
}
?>

<!doctype html>
<html lang="en">
<style>
    /* .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th 
    {
        background-color: pink;
    } */

    .table
    {
        margin: 70px auto;
    }  

    .table th
    {
        text-align: center;
        min-width: 200px;
    }  

    .table td
    {
        text-align: center;
    }  
</style>

<head>
    <title>THÔNG TIN HÀNG SỮA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <table border="1" align="center" class="table table-hover" style="font-size: 10px;">
        <tr>
            <th>Mã hàng sữa</th>
            <th>Tên hàng sữa</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th>Email</th>
        </tr>

        <?php
        foreach ($data as $value) {
            echo '<tr>
                    <td>' . $value[0] . '</td>
                    <td>' . $value[1] . '</td>
                    <td>' . $value[2] . '</td>
                    <td>' . $value[3] . '</td>
                    <td>' . $value[4] . '</td>
                </tr>';
        }
        ?>
    </table>
</body>

</html>