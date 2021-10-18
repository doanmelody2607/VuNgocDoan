<!doctype html>
<html lang="en">

<head>
    <title>Bài 9</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <style>
        .navbar
        {
            width: 1000px;    
        }
    </style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

<!-- Navbar -->
<div class="navbar">
    <div class="w3-bar w3-black w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="../views/bt_form.php?bai=9?id=1" class="w3-bar-item w3-button w3-padding-large">Trang chủ</a>
        <a href="../views/bt_form.php?bai=9?id=2" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Giới thiệu</a>
        <a href="../views/bt_form.php?bai=9?id=3" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Tin tức</a>
        <a href="../views/bt_form.php?bai=9?id=4" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Liên hệ</a>
        <a href="../views/bt_form.php?bai=9?id=5" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Diễn đàn</a>
        <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
    </div>
</div>

<div>
    <?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        switch ($id) {
            case 1:
                include('../views/bt_form.php?bai=9-trangchu');
                break;
            case 2:
                include('../views/bt_form.php?bai=9-gioithieu');
                break;
            case 3:
                include('../views/bt_form.php?bai=9-tintuc');
                break;
            case 4:
                include('views/bt_form.php?bai=9-lienhe');
                break;
            case 5:
                include('views/bt_form.php?bai=9-diendan');
                break;
        }
    }
    ?>
</div>


</html>