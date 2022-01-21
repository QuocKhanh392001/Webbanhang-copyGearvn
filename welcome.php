
<?php
require_once('database.php');
session_start();

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
						<td><a href="#"><?php  echo mb_strtoupper($_SESSION['username']) ; ?></a></td>
						<td><a href="logout.php">ĐĂNG XUẤT</a></td>
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
<div id="main">	
	<div id="danhmucsanpham">
		<form action="#"><button>Laptop</button></form><br/>
		<form action="#"><button>PC GearVN</button></form>
		<form action="#"><button>Apple</button></form>
		<form action="#"><button>PC văn phòng</button></form>
		<form action="#"><button>Linh kiện PC</button></form>
		<form action="#"><button>Màn hình</button></form>
		<form action="#"><button>Chuột + Lót chuột</button></form>
		<form action="#"><button>Tai nghe gaming</button></form>
		<form action="#"><button>Ghế Gaming</button></form>
		<form action="#"><button>Console</button></form>
		<form action="#"><button>Loa & Tai nghe</button></form>
		<form action="#"><button>Thiết bị văn phòng</button></form>
		<form action="#"><button>Thiết bị mạng</button></form>
		<form action="#"><button>Phụ kiện</button></form>
	</div>
	<div id="mainpr">
		<div id="pr"><img src="img/pr.jpg" width="100%" height="100%"></div>
		<div id="pr1"><img src="img/pr1.jpg" alt="" width="100%" height="100%"></div>
		<div id="pr1"><img src="img/pr2.jpg" alt="" width="100%" height="100%"></div>
		<div id="pr1"><img src="img/pr3.jpg" alt="" width="100%" height="100%"></div>
		<div id="pr1"><img src="img/pr4.jpg" alt="" width="100%" height="100%"></div>
		<div id="pr1"><img src="img/pr5.jpg" alt="" width="100%" height="100%"></div>
	</div>
	<DIV id="khung2">
		<div id="pr2"><img src="img/banner1.jpg" width="100%" height="100%" alt=""></div>
		<div id="pr2"><img src="img/banner2.jpg" width="100%" height="100%" alt=""></div>
		<div id="pr2"><img src="img/banner3.jpg" width="100%" height="100%" alt=""></div>
		<div id="pr2"><img src="img/banner4.jpg" width="100%" height="100%" alt=""></div>
	</DIV>

	<div id="banner">
		Deal Hot Trong Tháng
		<div id="bannerright">
			<a href="#">Xem tất cả</a>
		</div>
		
	</div>
	<?php
		$sql = 'select * from dealhottrongthang';
		$result = xuatDuLieu($sql);
		foreach ($result as $sanpham) {
			echo '<div id="sanpham">
		<div id="sanpham_hinh"><a href="#"><div id="deal"><img src="'.$sanpham['hinhanh'].'" width="100%" height="100%" alt=""></div></a></div>
		<div id="sanpham_ten"><a href="#">'.$sanpham['tensanpham'].'</a></div>
		<div id="sanpham_giagiam">'.$sanpham['giagiam'].'</div>
		<div id="sanpham_giatien">'.$sanpham['giatien'].'</div>
	</div>';
		}
		?>
	<div id="banner">
		PC GEARVN - MIỄN PHÍ GIAO HÀNG TOÀN QUỐC
		<div id="bannerright">
			<a href="#">Xem tất cả</a>
		</div>
	</div>
	<?php
		$sql = 'select * from pcgearvn';
		$result = xuatDuLieu($sql);
		foreach ($result as $sanpham) {
			echo'<div id="sanpham">
		<div id="sanpham_hinh"><a href="#"><div id="deal"><img src="'.$sanpham['hinhanh'].'" width="100%" height="100%" alt=""></div></a></div>
		<div id="sanpham_ten"><a href="#">'.$sanpham['tensanpham'].'</a></div>
		<div id="sanpham_giagiam">'.$sanpham['giagiam'].'</div>
		<div id="sanpham_giatien">'.$sanpham['giatien'].'</div>
	</div>';
		}
	?>
	<div id="banner">
		LAPTOP GAMING - MIỄN PHÍ GIAO HÀNG TOÀN QUỐC 
		<div id="bannerright">
			<a href="#">Xem tất cả</a>
		</div>
	</div>
	<?php 
		$sql = 'select * from laptopgaming';
		$result = xuatDuLieu($sql);
		foreach ($result as $sanpham) {
			echo'<div id="sanpham">
		<div id="sanpham_hinh"><a href="#"><div id="deal"><img src="'.$sanpham['hinhanh'].'" width="100%" height="100%" alt=""></div></a></div>
		<div id="sanpham_ten"><a href="#">'.$sanpham['tensanpham'].'</a></div>
		<div id="sanpham_giagiam">'.$sanpham['giagiam'].'</div>
		<div id="sanpham_giatien">'.$sanpham['giatien'].'</div>
	</div>';		}
	?>
	<div id="banner">
		MÀN HÌNH KHUYẾN MÃI HOT - GIAO NHANH 2H
		<div id="bannerright">
			<a href="#">Xem tất cả</a>
		</div>
	</div>
	<?php 
	$sql = 'select * from manhinhkhuyenmai';
	$result = xuatDuLieu($sql);
	foreach ($result as $sanpham) {
		echo'<div id="sanpham">
		<div id="sanpham_hinh"><a href="#"><div id="deal"><img src="'.$sanpham['hinhanh'].'" width="100%" height="100%" alt=""></div></a></div>
		<div id="sanpham_ten"><a href="#">'.$sanpham['tensanpham'].'</a></div>
		<div id="sanpham_giagiam">'.$sanpham['giagiam'].'</div>
		<div id="sanpham_giatien">'.$sanpham['giatien'].'</div>
	</div>';
	}
	?>
	<div id="banner">
		LAPTOP VĂN PHÒNG - MIỄN PHÍ GIAO HÀNG TOÀN QUỐC
		<div id="bannerright">Xem tất cả</div>
	</div>
	<?php 
	$sql = 'select * from laptopvanphong';
	$result = xuatDuLieu($sql);
	foreach ($result as $sanpham) {
		echo'<div id="sanpham">
		<div id="sanpham_hinh"><a href="#"><div id="deal"><img src="'.$sanpham['hinhanh'].'" width="100%" height="100%" alt=""></div></a></div>
		<div id="sanpham_ten"><a href="#">'.$sanpham['tensanpham'].'</a></div>
		<div id="sanpham_giagiam">'.$sanpham['giagiam'].'</div>
		<div id="sanpham_giatien">'.$sanpham['giatien'].'</div>
	</div>';
	}
	?>
	<div id="banner">
		BÀN PHÍM KHUYẾN MÃI HOT - GIAO HÀNG MIỄN PHÍ
		<div id="bannerright">Xem tất cả</div>
	</div>
	<?php 
	$sql = 'select * from banphimkhuyenmaihot';
	$result = xuatDuLieu($sql);
	foreach ($result as $sanpham) {
		echo'<div id="sanpham">
		<div id="sanpham_hinh"><a href="#"><div id="deal"><img src="'.$sanpham['hinhanh'].'" width="100%" height="100%" alt=""></div></a></div>
		<div id="sanpham_ten"><a href="#">'.$sanpham['tensanpham'].'</a></div>
		<div id="sanpham_giagiam">'.$sanpham['giagiam'].'</div>
		<div id="sanpham_giatien">'.$sanpham['giatien'].'</div>
	</div>';	}
	?>
	<div id="banner">
		CHUỘT LOGITECH GIÁ RẺ - GIAO HÀNG MIỄN PHÍ
		<div id="bannerright">Xem tất cả</div>
	</div>
	<?php
	 
	$sql = 'select * from chuotlogitechgiare';
	$result = xuatDuLieu($sql);
	foreach ($result as $sanpham) {
		echo'<div id="sanpham">
		<div id="sanpham_hinh"><a href="#"><div id="deal"><img src="'.$sanpham['hinhanh'].'" width="100%" height="100%" alt=""></div></a></div>
		<div id="sanpham_ten"><a href="#">'.$sanpham['tensanpham'].'</a></div>
		<div id="sanpham_giagiam">'.$sanpham['giagiam'].'</div>
		<div id="sanpham_giatien">'.$sanpham['giatien'].'</div>
	</div>';
	}
	?>
</div>
</div>
<div id="white"></div>

</body>
</html>