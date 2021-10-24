<h3>CÁC ĐƠN ĐẶT HÀNG</h3>
<?php
global $o;
$username = $_SESSION["tendangnhap"];
$sql = "select * from hoadon where tendangnhap='$username'";
$kq = $o->query($sql);
foreach ($kq as $row) {
	echo "<table border='1' align='center' width='700px'>";
	echo "<tr height='50px' bgcolor='#bbb'>";
	echo "<td colspan='6' align='center'><strong>Thông Tin Hóa Đơn</strong></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align='center'><strong>Tên người mua</strong></td>";
	echo "<td align='center'><strong>Tên người nhận</strong></td>";
	echo "<td align='center'><strong>Số điện thoại</strong></td>";
	echo "<td colspan='2'align='center'><strong>Địa chỉ</strong></td>";
	echo "<td   align='center'><strong>Thời gian mua</strong></td>";
	echo "</tr>";
	echo "<tr align='center'>";
	echo "<td>" . $row['tendangnhap'] . "</td>";
	echo "<td>" . $row['hoten'] . "</td>";
	echo "<td>" . $row['sodienthoai'] . "</td>";
	echo "<td  colspan='2'>" . $row['diachi'] . "</td>";
	echo "<td >" . $row['tgiandatmua'] . "</td>";
	echo "</tr>";
	echo "<tr height='50px' bgcolor='#bbb'>";
	echo "<td colspan='6' align='center'><strong>Thông Tin Sản Phẩm Mua</strong></td>";
	echo "</tr>";
	echo "<td colspan='2' align='center'><strong>Tên sản phẩm</strong></td>";
	echo "<td colspan='2' align='center'><strong>Số lượng</strong></td>";
	echo "<td  align='center'><strong>Đơn giá</strong></td>";
	echo "<td  align='center'><strong>Tổng tiền</strong></td>";
	echo "</tr>";
	$xem = "SELECT * FROM dathang";
	$xem1 = $o->query($xem)->fetchAll();
	foreach ($xem1 as $xem2) {
		if ($row['tendangnhap'] == $xem2['tendangnhap']) {
			echo "<tr align='center'>";
			echo "<td colspan='2'>" . $xem2['ProductName'] . "</td>";
			echo "<td  colspan='2'>" . $xem2['sl'] . "</td>";
			echo "<td >" . number_format($xem2['Price'], 0, ',', '.') . "</td>";
			echo "<td >" . number_format($xem2['TongTien'], 0, ',', '.') . "</td>";
			echo "</tr>";
		}
	}
	echo "</table>";
	echo "</br>";
}
?>