<?php
$err = "";
$dayso = $asc = $desc = "";
$arr = array();

function swap(&$a, &$b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}
function tangDan(&$arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] > $arr[$j]) swap($arr[$i], $arr[$j]);
        }
    }
}
function giamDan(&$arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] < $arr[$j]) swap($arr[$i], $arr[$j]);
        }
    }
}
function xuatMang($arr)
{
    $kq = "";
    for ($i = 0; $i < count($arr); $i++) {
        $kq .= $arr[$i] . " ";
    }
    return $kq;
}
if (isset($_POST['submit'])) {
    if(empty($_POST['dayso'])){
        $err = "* Chưa nhập vào dãy số";
    }
    else{
        $dayso = $_POST['dayso'];
        $arr = explode(",", $dayso);
        tangDan($arr);
        $asc = xuatMang($arr);
        giamDan($arr);
        $desc = xuatMang($arr);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>SẮP XẾP MẢNG</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="form.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
    .form-bt {
        width: 700px;
        height: 340px;
        margin: 20px 150px;
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
        width: 180px;
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
            <h2>SẮP XẾP MẢNG</h2>
        </div>

        <form class="form-tinhtoan" action="" method="post" style="width:80%; margin-left:80px">
            <div class="form-group">
                <label for="">Nhập mảng</label>
                <div style="width:76%">
                    <input type="text" name="dayso" class="form-control" value="<?php echo $dayso ?>">
                    <small><?php echo $err ?></small>
                </div>
            </div>

            <button name="submit" class="btn btn-dark submit">Sắp xếp tăng/giảm</button>

            <div class="form-group" style="margin-top: 20px">
                <label for="">Tăng dần</label>
                <div style="width:76%">
                    <input type="text" name="asc" readonly class="form-control" value="<?php echo $asc ?>">
                </div>
            </div>

            <div class="form-group" style="margin-top: 20px">
                <label for="">Giảm dần</label>
                <input type="text" name="desc" readonly class="form-control" value="<?php echo $desc ?>">
            </div>
        </form>

    </div>

</body>

</html>