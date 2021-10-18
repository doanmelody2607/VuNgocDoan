<?php
$namduonglich = $namamlich = "";
$arrCan = array('Canh', 'Tân', 'Nhâm', 'Quý', 'Giáp', 'Ất', 'Bính', 'Đinh', 'Mậu', 'Kỷ');
$arrChi = array('Thân', 'Dậu', 'Tuất', 'Hợi', 'Tý', 'Sửu', 'Dần', 'Mão', 'Thìn', 'Tỵ', 'Ngọ', 'Mùi');
$arrImg = array('than.jpg', 'dau.jpg', 'tuat.jpg', 'hoi.jpg', 'ty.jpg', 'suu.jpg', 'dan.jpg', 'mao.jpg', 'thin.jpg', 'tyj.jpg', 'ngo.jpg', 'mui.jpg');

if (isset($_POST['submit'])) {
    if (!empty($_POST['namduonglich']) && $_POST['namduonglich'] > 0 && is_numeric($_POST['namduonglich'])) {
        $namduonglich = $_POST['namduonglich'];
        $can = $namduonglich % 10;
        $chi = $namduonglich % 12;
        $namamlich = $arrCan[$can] . " " . $arrChi[$chi];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .form-bt {
            margin: 30px 200px;
            width: 590px;
            height: 300px;
            border: 1px solid black;
        }

        .title {
            background-color: pink;
            height: 70px;
        }

        .title h2 {
            text-align: center;
            line-height: 70px;
        }

        .form {
            padding: 20px;
        }

        .form-group {
            display: flex;
        }

        .form-group .label-group {
            min-width: 200px;
            font-weight: bold;
        }

        .form-group input {
            min-width: 200px;
        }

        ::-webkit-input-placeholder {
            /* WsebKit, Blink, Edge */
            color: red !important;
        }

        .nutbam {
            width: 50px;
            height: 30px;
            margin-top: 30px;
            margin-left: 50px;
        }

        .namamlich
        {
            margin-left: 50px;
        }

        img {
            width: 150px;
            margin-left: 200px;
        }
    </style>
</head>

<body>


    <div class="form-bt">
        <div class="title">
            <h2>TÍNH NĂM ÂM LỊCH</h2>
        </div>
        <div class="form">
            <form action="" method="post">
                <div class="form-group">
                    <div>
                        <div class="label-group"><label for="">Năm dương lịch</label></div>
                        <input type="text" name="namduonglich" id="" class="form-control" value="<?php echo $namduonglich; ?>" aria-describedby="helpId">
                    </div>
                    <button class="nutbam w3-button w3-round w3-theme" name="submit">
                        =>
                    </button>
                    <div class="namamlich">
                        <div class="label-group"><label for="">Năm âm lịch</label></div>
                        <input type="text" name="namamlich" readonly id="" class="form-control" value="<?php echo $namamlich; ?> " aria-describedby="helpId">
                    </div>
                </div>

                <div class="img">
                    <img src="<?php echo '../baitap/ARRAY/12congiap/' . $arrImg[$chi]; ?>" alt="">
                </div>
            </form>
        </div>
    </div>
</body>

</html>