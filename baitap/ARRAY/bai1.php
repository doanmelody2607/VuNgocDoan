<?php
ini_set('display_errors', 0);
$errSoN = "";
//Mảng phát sinh ngẫu nhiên
if (isset($_POST["btn"])) {
    if (empty($_POST["txtSoN"])) {
        $errSoN = "Nhập N là số nguyên dương";
    } else {
        $soN = $_POST["txtSoN"];
        if (!preg_match('/^\d+$/', $soN)) {
            $errSoN = "N phải là một số nguyên";
        } elseif ($soN <= 0) {
            $errSoN = "N phải lớn hơn 0";
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Bài tập 1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="form.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
    .form-bt {
        width: 750px;
        height: 500px;
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
        width: 120px;
        margin-left: 150px;
        margin-bottom: 20px;
    }

    ::-webkit-input-placeholder {
        color: red !important;
    }

    .btn-group label {
        font-weight: bold;
    }

    .form-control-kq {
        width: 400px;
        height: 250px;

    }
</style>

<body>
    <div class="form-bt">
        <div class="form-bt-title">
            <h2>Bài 1 - Mảng Chuỗi, Hàm</h2>
        </div>

        <form class="form-tinhtoan" action="" method="post" style="width:70%; margin-left:100px">

            <div class="form-group">
                <label for="">Nhập số N:</label>
                <div style="width:76%">
                    <input type="text" name="txtSoN" class="form-control" value="<?php echo $soN ?>" />
                    <small><?php echo $errSoN ?></small>
                </div>
            </div>

            <button name="btn" class="btn btn-dark submit">Thực Hiện</button>

            <div class="form-group">
                <label for="">Kết quả:</label>
                <div style="width:76%">
                    <textarea type="text" name="txtKq" class="form-control-kq" readonly><?php
                                                                                        ini_set('display_errors', 0);
                                                                                        $errSoN = "";
                                                                                        //Mảng phát sinh ngẫu nhiên
                                                                                        if (isset($_POST["btn"])) {
                                                                                            if (empty($_POST["txtSoN"])) {
                                                                                                $errSoN = "Nhập N là số nguyên dương";
                                                                                            } else {
                                                                                                $soN = $_POST["txtSoN"];
                                                                                                if (!preg_match('/^\d+$/', $soN)) {
                                                                                                    $errSoN = "N phải là một số nguyên";
                                                                                                } elseif ($soN <= 0) {
                                                                                                    $errSoN = "N phải lớn hơn 0";
                                                                                                }
                                                                                            }
                                                                                            if (empty($errSoN)) {
                                                                                                $mang = array();
                                                                                                //Câu a
                                                                                                echo "a)" . " " . $soN . " " . "là số nguyên dương";

                                                                                                //Câu b
                                                                                                echo "\nb) Dãy số nguyên dương " . $soN . " phần tử: ";
                                                                                                for ($i = 0; $i < $soN; $i++) {
                                                                                                    $x = rand(-200, 200);
                                                                                                    array_push($mang, $x);
                                                                                                    echo $x . " , ";
                                                                                                }
                                                                                                //Câu c
                                                                                                echo "\nc) Số phần tử chẵn trong mảng: ";
                                                                                                $count = 0;
                                                                                                for ($i = 0; $i < sizeof($mang); $i++) {
                                                                                                    if ($mang[$i] % 2 == 0)
                                                                                                        $count++;
                                                                                                }
                                                                                                echo $count;
                                                                                                //Câu d
                                                                                                echo "\nd) Số phần tử nhỏ hơn 100 trong mảng: ";
                                                                                                $count_100 = 0;
                                                                                                for ($i = 0; $i < sizeof($mang); $i++) {
                                                                                                    if ($mang[$i] < 100)
                                                                                                        $count_100++;
                                                                                                }
                                                                                                echo $count_100;
                                                                                                //Câu e
                                                                                                echo "\ne) Tổng các phần tử có giá trị âm trong mảng: ";
                                                                                                $sum = 0;
                                                                                                for ($i = 0; $i < sizeof($mang); $i++) {
                                                                                                    if ($mang[$i] < 0)
                                                                                                        $sum += $mang[$i];
                                                                                                }
                                                                                                echo $sum;
                                                                                                //Câu f
                                                                                                echo "\nf) Vị trí các giá trị 0 trong mảng: ";
                                                                                                $vi_tri = 0;
                                                                                                for ($i = 0; $i < sizeof($mang); $i++) {
                                                                                                    if ($mang[$i] == 0) {
                                                                                                        $vi_tri = 1;
                                                                                                        echo $i + 1;
                                                                                                        echo " , ";
                                                                                                    }
                                                                                                }
                                                                                                if ($vi_tri == 0) {
                                                                                                    echo "Không có giá trị 0";
                                                                                                }
                                                                                                //Câu g
                                                                                                echo "\ng) Sắp xếc các phần tử theo thứ tự tăng dần: ";
                                                                                                sort($mang);
                                                                                                for ($i = 0; $i < sizeof($mang); $i++) {
                                                                                                    echo $mang[$i] . " ";
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                        ?>
        </textarea>
                </div>
            </div>


        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>