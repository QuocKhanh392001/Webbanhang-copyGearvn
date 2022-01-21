<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KHÁNH WEBSITE</title>
<link href="indexcss.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
<div id="header">
		<div id="header-contain">
			<div id="logo">
				<img src="img/istockphoto-1023560094-170667a.jpg" height="100px" width="100px" />
			</div>
			<div id="menuheader">
				<div id="search">
					<form>
						<input type="text"  name="searchbar" size="50" placeholder="Nhập tên hoặc mã sản phẩm" />
						<button type="submit"><i class="material-icons">search</i></button>
					</form>
			</div>
			<div id="menusearch">
				<table cellpadding="0" cellspacing="0" border="0" height="50px" width="450px">
					<tr align="center">
						<td><a href="dangky.php">ĐĂNG KÝ</a></td>
						<td><a href="dangnhap.php">ĐĂNG NHẬP</a></td>
						<td><a href="#">KHUYẾN MÃI</a></td>
						<td><a href="#">GIỎ HÀNG</a></td>
					</tr>
				</table>
			</div>
			</div>
			<div id="menuheader1">
				<table cellpadding="0" cellspacing="0" border="0" height="50px" width="900px">
				<tr align="center">
					<Td>ĐỊA CHỈ</Td><td><font size="+3">|</font></td>
					<td>TỔNG ĐÀI</td><td><font size="+3">|</font></td>
					<td>VIDEOS</td><td><font size="+3">|</font></td>
					<td>TIN CÔNG NGHỆ</td><td><font size="+3">|</font></td>
					<td>TUYỂN DỤNG</td>
				</tr>
				</table>
			</div>
		</div>
		<hr width="100%" size="1px">
		<div id="header-contain">
			<div id="menuchinhsach">
			<table width="1000px">
				<tr>
					<td><div id="danhmuc">Danh mục sản phẩm</div></td>
					<td><form action="#"><button>THÔNG TIN MÙA DỊCH</button></form></td>
					<td><form action="#"><button>HƯỚNG DẪN TRẢ GÓP </button></td>
					<td><form action="#"><button>CHÍNH SÁCH BẢO HÀNH</button></td>
					<td><form action="#"><button>CHÍNH SÁCH VẬN CHUYỂN</button></td>
				</tr>
			</table>
			</div>
		</div>
        

	</div>
    <table >
            <tr>
                <td colspan="4">QUẢN LÝ SẢN PHẨM</td>
            </tr>
            <tr>
                <th>STT</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>LEVEL</th>
            </tr>
        </table>
</body>
</html>