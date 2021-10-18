<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}

    /* CSS of Content */
    .info
    {
        margin-top: 60px;
    }

		td[colspan="4"] h3{
			font-size: 18px;
			color: #986ED7;
		}

		td[colspan="4"] h1{
			color: #053B52;
			font-size: 
		}
		table{
			width: 800px;
			margin: 0 auto;
			margin-top: 10px;
			margin-bottom: 10px;
		}

		table[id="table"] td[colspan="3"]{
			width: 200px;
			font-size: 14px;
			font-family: tahoma;
		}

		.info-header table
		{
			justify-content: right;
		}

		.info-header img{
			margin-top: 15px;
			border-radius: 50%;
		}

		.info-header{
			margin-bottom: 20px;
		}

		td[id="img"]{
		 	padding: 15px;
		}

		.info-next1{
			margin-bottom: 20px;
		}

		.info-next2{
			margin-bottom: 20px;
		}

		.info-next3{
			margin-bottom: 20px;
		}

		.info-next4{
			margin-bottom: 20px;
		}

		.info-next5{
			margin-bottom: 20px;
		}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<?php # Script 3.4 - index.php
  include ('includes/header-demo.php');
?>

<!-- Content -->
<div class="info">

		<div class="info-header">
			<table>
				<tr>
					<td id="img"><img class="animate__animated animate__lightSpeedInRight" src="img/doan-pro.jpg" width="170" height="170"></td>
					<td><table style="width: 370px;" id="table">
				<tr>
					<td colspan="4"><h1 style="font-weight: 800;">VŨ NGỌC ĐOÀN</h1></td>
				</tr>

				<tr>
					<td colspan="3"><b>Ngày sinh: </b></td>
					<td>26/07/1999</td>
				</tr>

				<tr>
					<td colspan="3"><b>Giới tính: </b></td>
					<td>Nam</td>
				</tr>

				<tr>
					<td colspan="3"><b>Điện thoại: </b></td>
					<td>0977267728</td>
				</tr>

				<tr>
					<td colspan="3"><b>Email: </b></td>
					<td>doanmelody2607@gmail.com</td>
				</tr>

				<tr>
					<td colspan="3"><b>Địa chỉ: </b></td>
					<td>33/3 Phạm Tu, Vĩnh Hải, Nha Trang, Khánh Hoà</td>
				</tr>

			</table></td>
				
		</div>

		<div class="info-next1">
			<table>
				<tr>
					<td style="font-size: 18px; font-weight: bold;
					border-bottom: 2px solid black;">MỤC TIÊU NGHỀ NGHIỆP</td>
				</tr>

				<tr>
					<td>Áp dụng những kiến thức đã được học ở trường về các ngôn ngữ lập trình và ứng dụng của những ngôn ngữ lập trình thiết kế và phát triển phần mềm máy tính để tạo nên những sản phẩm phục vụ cho những công tác quản lý của doanh nghiệp, công ty.</td>
				</tr>
			</table>
		</div>

		<div>
			<table>
				<tr>
					<td colspan="10" style="font-size: 18px; font-weight: bold;
					border-bottom: 2px solid black;">HỌC VẤN</td>
				</tr>

				<tr>
					<td colspan="4">09/2017 - 09/2020</td>
					<td colspan="6">
						<b>Đại học Nha Trang (NTU)</b><br>
						Chuyên ngành: Công nghệ thông tin<br>
						Tốt nghiệp loại: Khá, điểm trung bình: 7.0
					</td>
				</tr>
			</table>
		</div>

		<div>
			<table>
				<tr>
					<td colspan="10" style="font-size: 18px; font-weight: bold;
					border-bottom: 2px solid black;">KINH NGHIỆM LÀM VIỆC</td>
				</tr>

				<tr>
					<td colspan="4">02/2018 - 12/2018</td>
					<td colspan="6">
						<b>Homies Coffee & Bakery</b><br>
						Nhân viên phục vụ<br>
						Đảm nhận công việc order và phục vụ thức uống cho khách.
					</td>
				</tr>
			</table>
		</div>

		<div>
			<table>
				<tr>
					<td colspan="10" style="font-size: 18px; font-weight: bold;
					border-bottom: 2px solid black;">HOẠT ĐỘNG</td>
				</tr>

				<tr>
					<td colspan="4">10/2017 - 12/2017</td>
					<td colspan="6">
						<b>Đoàn thanh niên tình nguyện NTU</b><br>
						Tình nguyện viên<br>
						Tập hợp các món quà và phân phát cho người vô gia cư<br>
					</td>
				</tr>
			</table>
		</div>

		<div>
			<table>
				<tr>
					<td colspan="10" style="font-size: 18px; font-weight: bold;
					border-bottom: 2px solid black;">KINH NGHIỆM LÀM VIỆC</td>
				</tr>

				<tr>
					<td colspan="6" style="font-weight: bold;">Biết ngôn ngữ lập trình</td>
					<td colspan="4">- C, C++, C#, PHP, Java</td>
				</tr>

				<tr>
					<td colspan="6" style="font-weight: bold;">Tin học văn phòng</td>
					<td colspan="4">- Am hiểu các công cụ Word, Excel, PowerPoint</td>
				</tr>

				<tr>
					<td colspan="6" style="font-weight: bold;">Tiếng Anh</td>
					<td colspan="4">- Khả năng giao tiếp tiếng Anh tương đối</td>
				</tr>
			</table>
		</div>

		<div>
			<table>
				<tr>
					<td colspan="10" style="font-size: 18px; font-weight: bold;
					border-bottom: 2px solid black;">SỞ THÍCH</td>
				</tr>

				<tr>
					<td colspan="6">
						Âm nhạc - Biết chơi sáo trúc và đã từng tham gia CLB sáo trúc ở trường.<br>
						Đá bóng - Tham gia hoạt động đá bóng do lớp tổ chức.
					</td>
				</tr>
			</table>
		</div>
	</div>

<!-- Footer -->
<?php
	include ('includes/footer-demo.php');
?>

</body>
</html> 
