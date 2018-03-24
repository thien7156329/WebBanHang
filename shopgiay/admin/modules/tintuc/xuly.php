<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
	include('../config.php');
	$id = $_GET['id'];
	$tenloaitt=$_POST['txtloaitt'];
	if(isset($_POST['them'])){
		$sql_them=("insert into loaitt (ten_tintuc) values('$tenloaitt')");
		mysqli_query( $Dbconnect,$sql_them);
		header('location:../../index.php?quanly=tintuc&ac=them');
	}elseif(isset($_POST['sua'])){
		$sql_sua="update loaitt set ten_tintuc = '$tenloaitt' where ID_TT = '$id'";
		mysqli_query( $Dbconnect,$sql_sua);
		header('location:../../index.php?quanly=tintuc&ac=sua&id='.$id);
	}else{
		$sql_xoa = "delete from loaitt where ID_TT = $id";
		mysqli_query($Dbconnect,$sql_xoa);
		header('location:../../index.php?quanly=tintuc&ac=them');
	}
?>
