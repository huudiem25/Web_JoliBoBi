<?php include_once("includes/dangnhap.php");

if (isset($_REQUEST['mod'])) {
	if ($_REQUEST['mod'] == 'logout')
		abc();
}
?>
<div id="dangnhap">
    <div id="top">

        <div id="bg-menu">

            <ul>

                <?php
				if (!isset($_SESSION['tendangnhap'])) {
				?>
                <li align="center"><strong><a href="?mod=dangnhap">Đăng nhập </a></strong></li>-
                <li align="center"><strong><a href="?mod=dangky">Đăng ký</a></strong></li>
                <?php
				} else {
				?>
                <li colspan="2" align="center">Xin chào: <?php echo $_SESSION['hoten'] ?>&nbsp-&nbsp[<a
                        href="?mod=thongtintaikhoan">Thông Tin Tài Khoản</a>] &nbsp-&nbsp[<a href="?mod=logout">Đăng
                        xuất</a>]</li>
                <?php
				}
				?>
            </ul>
        </div>
    </div>
</div>
<div class="clear"></div>