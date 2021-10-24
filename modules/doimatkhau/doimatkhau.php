<h3>Đổi mật khẩu </h3>
<?php
global $o;
if (isset($_REQUEST['doimatkhau'])) {
	$tendangnhap = $_REQUEST['tendangnhap'];
	$matkhau_cu = $_REQUEST['matkhau_cu'];
    $matkhau_moi = $_REQUEST['matkhau_moi'];
	$sql = "select * from thanhvien where tendangnhap='$tendangnhap' and matkhau='$matkhau_cu' and trangthaithanhvien=1";
	$rs = $o->query($sql)->fetchAll();

	if (count($rs) < 1) {
		echo "<script>alert('Bạn điền sai tên đăng nhập hoặc mật khẩu cũ.'); onload=function(){frmdangnhap.tendangnhap.focus();}</script>";
	} else {
        $sql = "UPDATE thanhvien SET matkhau= '$matkhau_moi' WHERE tendangnhap ='$tendangnhap'";
        $rs = $o->query($sql)->fetchAll();
        echo "<script>alert('Bạn đã thay đổi mật khẩu thành công.');</script>";
        echo "<script>location='index.php?mod=thongtintaikhoan';</script>";
	}
}
?>
<form id="frmdangky" name="frmdangky" method="post" onsubmit="return frmdangkyform()">
    <table width="519" height="136" align="center">

        <tr>
            <td>Tên đăng nhập:</td>
            <td><label for="tendangnhap"></label>
                <input type="text" name="tendangnhap" placeholder="Nhập vào tên đăng nhập" id="tendangnhap">
            </td>
        </tr>
        <td>Mật khẩu cũ</td>
        <td><label for="matkhau"></label>
            <input type="text" name="matkhau_cu" id="matkhau_cu" placeholder="Nhập vào mật khẩu cũ">
        </td>
        <tr>
        </tr>
        <td>Mật khẩu mới</td>
        <td><label for="matkhau"></label>
            <input type="text" name="matkhau_moi" id="matkhau_moi" placeholder="Nhập vào mật khẩu mới">
        </td>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="doimatkhau" id="doimatkhau" value="Đổi mật khẩu"></td>
        </tr>
    </table>
</form>