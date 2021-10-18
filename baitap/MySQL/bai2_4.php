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

$current_page = 1;
$sql = 'select * from sua,loai_sua,hang_sua
    where sua.Ma_loai_sua = loai_sua.Ma_loai_sua 
    and sua.Ma_hang_sua = hang_sua.Ma_hang_sua';

$page = ceil(sizeof(getData($sql)) / 5);
if (isset($_GET['pages'])) {
    $current_page = $_GET['pages'];
} else {
    $_GET['pages'] = 1;
}
$index = ($current_page - 1) * 5;
$sql = 'select * from sua,loai_sua,hang_sua
                        where sua.Ma_loai_sua = loai_sua.Ma_loai_sua 
                              and sua.Ma_hang_sua = hang_sua.Ma_hang_sua
                        limit ' . $index . ' , 5';
$data = getData($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .table
        {
            margin: 90px 200px;
        }

        .table th{
            min-width: 110px;
        }

        .table th,td{
            text-align: center;
        }

        .pagination{
            margin-left: 280px;
        }

        .pagination li {
            margin-right: 30px;
        }

        .pagination li a:link {
            text-decoration: none;
        }

    </style>
</head>

<body>


    <table border="1" class="table table-hover" style="font-size: 10px;">
        <thead style="background-color: pink;" class="">
            <tr>
                <th>STT</th>
                <th>Tên sữa</th>
                <th>Hãng sữa</th>
                <th>Loại sữa</th>
                <th>Trọng lượng</th>
                <th>Đơn giá</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($data as $value) {
                echo '<tr>
                    <td>' . $i . '</td>
                    <td>' . $value[1] . '</td>
                    <td>' . $value[12] . '</td>
                    <td>' . $value[10] . '</td>
                    <td>' . $value[4] . '</td>
                    <td>' . $value[5] . '</td>
                </tr>';
                $i++;
            }
            ?>
        </tbody>
    </table>
    <ul class="pagination">
        <?php
        echo '<li><a href="?bai=4"> << </a></li>';
        if (isset($_GET['pages'])) {
            $nextPage = $_GET['pages'];
            if ($_GET['pages'] > 1) {
                $nextPage--;
            }
        }
        echo '<li><a href="?bai=4&pages=' . $nextPage . '"> <  </a></li>';
        for ($i = 1; $i <= $page; $i++) {
            if ($i == $_GET['pages']) {
                echo '<li><b><a href="?bai=4&pages=' . $i . '"> ' . $i . ' </a></b></li>';
            } else echo '<li><a href="?bai=4&pages=' . $i . '"> ' . $i . ' </a></li>';
        }
        if (isset($_GET['pages'])) {
            $backPage = $_GET['pages'];
            if ($_GET['pages'] < $page) {
                $backPage++;
            }
        }
        echo '<li><a href="?bai=4&pages=' . $backPage . '"> >  </a></li>';
        echo '<li><a href="?bai=4&pages=' . $page . '"> >> </a></li>';
        ?>
    </ul>
</body>

</html>