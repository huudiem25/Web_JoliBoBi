<h3>Thay đổi thông tin tài khoản </h3>
<?php
global $o;
if (isset($_REQUEST['doithongtintk'])) {
	$tendangnhap = $_REQUEST['tendangnhap'];
    $matkhau = $_REQUEST['matkhau'];
    $hoten = $_REQUEST['hoten'];
    $diachi = $_REQUEST['diachi'];
    $dienthoai = $_REQUEST['dienthoai'];
    $email = $_REQUEST['email'];
	$sql = "select * from thanhvien where tendangnhap='$tendangnhap' and matkhau='$matkhau' and trangthaithanhvien=1";
	$rs = $o->query($sql)->fetchAll();

	if (count($rs) < 1) {
		echo "<script>alert('Bạn điền sai tên đăng nhập hoặc mật khẩu cũ.'); onload=function(){frmdangnhap.tendangnhap.focus();}</script>";
	} else {
        $sql = "UPDATE thanhvien SET hoten = '$hoten'  WHERE tendangnhap = '$tendangnhap'";
        $rs = $o->query($sql)->fetchAll();
        $sql = "UPDATE thanhvien SET diachi = '$diachi' WHERE tendangnhap = '$tendangnhap'";
        $rs = $o->query($sql)->fetchAll();
        $sql = "UPDATE thanhvien SET dienthoai = '$dienthoai'  WHERE tendangnhap = '$tendangnhap'";
        $rs = $o->query($sql)->fetchAll();
        $sql = "UPDATE thanhvien  SET email = '$email' WHERE tendangnhap = '$tendangnhap'";
        $rs = $o->query($sql)->fetchAll();
        
        echo "<script>alert('Bạn đã thay đổi thông tin tài khoản thành công thành công.');</script>";
        echo "<script>location='index.php?mod=thongtintaikhoan';</script>";
	}
}
?>
<form id="frmdangky" name="frmdangky" method="post" onsubmit="return frmdangkyform()">
    <table width="519" height="136" align="center">

        <tr>
            <td>Tên đăng nhập:</td>
            <td><label for="tendangnhap"></label>
                <input type="text" name="tendangnhap" id="tendangnhap" placeholder="Nhập vào tên đăng nhập">
            </td>
        </tr>
        </tr>
        <td>Mật khẩu</td>
        <td><label for="matkhau"></label>
            <input type="text" name="matkhau" id="matkhau" placeholder="Nhập vào mật khẩu">
        </td>
        <tr>
            <td>Họ và tên</td>
            <td><label for="hoten"></label>
                <input type="text" name="hoten" id="hoten" placeholder="Nhập vào họ tên cần đổi">
            </td>
        <tr>
            <td>Địa Chỉ</td>
            <td><label for="diachi"></label>
                <input type="text" name="diachi" id="diachi" placeholder="Nhập vào địa chỉ cần đổi">
            </td>
        <tr>
            <td>Điện Thoại</td>
            <td><label for="dienthoai"></label>
                <input type="text" name="dienthoai" id="dienthoai" placeholder="Nhập vào Sđt cần đổi">
            </td>
        <tr>
            <td>Email cá nhân</td>
            <td><label for="email"></label>
                <input type="email" name="email" id="email" placeholder="Nhập vào email cần đổi">
            </td>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="doithongtintk" id="doithongtintk" value="Thay đổi thông tin tài khoản">
            </td>
        </tr>
    </table>
</form>