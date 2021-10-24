<?php function abc()
{
	unset($_SESSION["tendangnhap"]);
	unset($_SESSION["matkhau"]);
	unset($_SESSION["hoten"]);

	header("Location:index.php");
}