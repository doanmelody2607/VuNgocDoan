<style>
    .config
    {
        width: 500px;
        height: 300px;
        border: 1px solid black;
        margin: 30px 250px;
    }

    .button
    {
        margin: 50px 160px;
    }
</style>

<div class="config">
    Bạn đã nhận được thành công, dưới đây là những thông tin bạn đã nhập: </br>
    Họ tên: <?php echo $_POST['name'] ?></br>
    Address: <?php echo $_POST['addr'] ?></br>
    Phone: <?php echo $_POST['phone'] ?></br>
    Gender: <?php echo $_POST['gender'] ?></br>
    Country: <?php echo $_POST['country'] ?></br>
    Note: <?php echo $_POST['note'] ?></br>
    
    <!-- Back to the front-page -->
    <a href="javascript:window.history.back(-1);" class="button btn btn-dark">Trở về trang trước</a>
</div>