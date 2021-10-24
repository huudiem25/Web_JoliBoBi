<?php ob_start(); ?>
<?php
global $o;
$key = $_GET["id"];
$xoa = "delete from giohang where idgh='$key'";
$tt = $o->query($xoa);
if ($tt) {
    echo ("<script>location.href = 'index.php?mod=giohang';</script>");
} else "Xóa không thành công!";
?>