﻿<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
	include('../config.php');
	$id = $_GET['id'];
	$tenloaisp=$_POST['txtloaisp'];
	if(isset($_POST['them'])){         
                 $sql_them=("insert into loaisp (tenloaisp) values('$tenloaisp')");
                 mysqli_query( $Dbconnect,$sql_them);
                 header('location:../../index.php?quanly=loaisp&ac=them');

	}elseif(isset($_POST['sua'])){
		$sql_sua="update loaisp set tenloaisp = '$tenloaisp' where ID = '$id'";
		mysqli_query( $Dbconnect,$sql_sua);
		header('location:../../index.php?quanly=loaisp&ac=sua&id='.$id);
                
	}else{
		$sql_xoa = "delete from loaisp where ID = $id";
		mysqli_query($Dbconnect,$sql_xoa);
		header('location:../../index.php?quanly=loaisp&ac=them');
	}
?>
