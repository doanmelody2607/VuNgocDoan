<!doctype html>
<html lang="en">

<head>
    <title>PHP Blogs</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .baitap a {
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <?php # Script 3.4 - index.php
    include('../includes/header-demo.php');
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <div style="margin-top: 42px;" class="big ">
        <div class="row">

            <div class="baitap col-md-2 w3-theme mt-2">
                <h4 style="margin-left: 30px;">Bài Tập MySQL</h4>
                <a class="dropdown-item" href="bt_mysql.php?bai=1">Bài 1</a><br>
                <a class="dropdown-item" href="bt_mysql.php?bai=2">Bài 2</a><br>
                <a class="dropdown-item" href="bt_mysql.php?bai=3">Bài 3</a><br>
                <a class="dropdown-item" href="bt_mysql.php?bai=4">Bài 4</a><br>
                <a class="dropdown-item" href="bt_mysql.php?bai=5">Bài 5</a><br>
                <a class="dropdown-item" href="bt_mysql.php?bai=6">Bài 6</a><br>
                <a class="dropdown-item" href="bt_mysql.php?bai=7">Bài 7</a><br>
                <a class="dropdown-item" href="bt_mysql.php?bai=8">Bài 8</a><br>
                <a class="dropdown-item" href="bt_mysql.php?bai=9">Bài 9</a>

            </div>
            <div class="col-md-10">
                <div class="col-md-8">
                    <div id="wrapper">



                        <div id="content">
                            <?php
                            if (isset($_GET['bai'])) {
                                $page = $_GET['bai'];
                            } else $page = null;

                            switch ($page) {
                                case '1':
                                    include('../baitap/MySQL/bai2_1.php');
                                    break;
                                case '2':
                                    include('../baitap/MySQL/bai2_2.php');
                                    break;
                                case '3':
                                    include('../baitap/MySQL/bai2_3.php');
                                    break;
                                case '4':
                                    include('../baitap/MySQL/bai2_4.php');
                                    break;
                                case '5':
                                    include('../baitap/MySQL/bai2_5.php');
                                    break;
                                case '6':
                                    include('../baitap/MySQL/bai2_6.php');
                                    break;
                                case '7':
                                    include('../baitap/MySQL/bai2_7.php');
                                    break;
                                case '7-info':
                                    include('../baitap/MySQL/bai2_7_info.php');
                                    break;
                                case '8':
                                    include('../baitap/MySQL/bai2_8.php');
                                    break;
                                case '9':
                                    include('../baitap/MySQL/bai2_9.php');
                                    break;
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <!-- Footer -->
    <?php
    include('../includes/footer-demo.php');
    ?>
</body>

</html>