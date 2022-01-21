<?php
const HOST 	   = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'BanHang';

function createDatabase(){
	//connection
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD);
	mysqli_set_charset($conn,'utf8');

	//query
	$sql = 'create database if not exists '.DATABASE;
	mysqli_query($conn,$sql);

	//close
	mysqli_close($conn);
}
function createTable(){
	//connection
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD,DATABASE);
	mysqli_set_charset($conn,'utf8');

	//query
	$sql = 'create table if not exists sanpham (
			id int primary key auto_increment,
			hinhanh varchar(200),
			tensanpham varchar(150) not null,
			giagiam int default 0,
			giatien int default 0
			)';
	mysqli_query($conn,$sql);

	//close
	mysqli_close($conn);
}
function xuatDuLieu($sql){
	//connection
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn,'utf8');

	//query
	$data = [];
	$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_array($result,1)) {
		$data[] = $row;
	}

	//close
	mysqli_close($conn);

	return $data;
}
createDatabase();
createTable();
?> 
