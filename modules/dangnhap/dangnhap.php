<h3>Đăng Nhập</h3>
<?php
global $o;
if (isset($_REQUEST['dangnhap'])) {
	$tendangnhap = $_REQUEST['tendangnhap'];
	$matkhau = $_REQUEST['matkhau'];
	$sql = "select * from thanhvien where tendangnhap='$tendangnhap' and matkhau='$matkhau' and trangthaithanhvien=1";
	$rs = $o->query($sql)->fetchAll();

	if (count($rs) < 1) {
		echo "<script>alert('Bạn điền sai tên đăng nhập hoặc mật khẩu.'); onload=function(){frmdangnhap.tendangnhap.focus();}</script>";
	} else {
        $hoten = $rs[0]['hoten'];
		$_SESSION['tendangnhap'] = $tendangnhap;
		$_SESSION['hoten'] = $hoten;
		echo "<script>location='index.php';</script>";
	}
}
?>
<form id="frmdangky" name="frmdangky" method="post" onsubmit="return frmdangkyform()">
    <table width="519" height="136" align="center">
        <tr>
            <td colspan="2" align="center"><strong>ĐĂNG NHẬP</strong></td>
        </tr>
        <tr>
            <td>Tên đăng nhập:</td>
            <td><label for="tendangnhap"></label>
                <input type="text" name="tendangnhap" id="tendangnhap" placeholder="Nhập vào tên đăng nhập">
            </td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><label for="matkhau"></label>
                <input type="password" name="matkhau" id="matkhau" placeholder="Nhập vào mật khẩu">
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="dangnhap" id="dangnhap" value="Đăng nhập"></td>
        </tr>
    </table>
</form>
<script language="javascript">
function frmdangkyform() {

    regEx = /^\s*$/;
    regExMail = /^(([\-\w]+)\.?)+@(([\-\w]+)\.?)+\.[a-zA-Z]{2,4}$/;


    if (regEx.test(document.frmdangky.tendangnhap.value)) {
        alert('Nhập tên đăng nhập!');
        document.frmdangky.tendangnhap.focus();
        return false;
    }
    if (regEx.test(document.frmdangky.matkhau.value)) {
        alert('Nhập mật khẩu!');
        document.frmdangky.matkhau.focus();
        return false;
    }


    if (document.frmdangky.title.value.length > 60) {
        alert('Please enter <60 character!');
        document.frmdangky.title.focus();
        return false;
    }
    if (document.frmdangky.message.value.length > 500) {
        alert('Please enter < 500 character!');
        document.frmdangky.message.focus();
        return false;
    }
}

function count() {
    document.frmdangky.txtcount.value = 500 - document.frmdangky.message.value.length;
}
</script>