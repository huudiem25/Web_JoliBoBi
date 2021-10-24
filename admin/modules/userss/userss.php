<h3>Danh Sách Thành Viên</h3>
<?php
global $o;
$connection = mysqli_connect("localhost", "root", "", "web");

$sql="SELECT * FROM thanhvien ORDER BY mathanhvien";

$result = mysqli_query($connection, $sql);
$rs = $o->query($sql)->fetchAll();
foreach ($rs as $row) {
    echo "<table border='1' align='center' width='700px'>";
	echo "<tr height='50px' bgcolor='#bbb'>";
	echo "<td colspan='12' align='center'><strong>Danh Sách Thành Viên</strong></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align='center'><strong>STT</strong></td>";
	echo "<td align='center'><strong>Tên đăng nhập</strong></td>";
	echo "<td align='center'><strong>Mật khẩu</strong></td>";
	echo "<td align='center'><strong>Họ Tên</strong></td>";
	echo "<td align='center'><strong>Địa Chỉ</strong></td>";
	echo "<td align='center'><strong>Điện Thoại</strong></td>";
	echo "<td align='center'><strong>Email</strong></td>";
	echo "</tr>";
	echo "<tr align='center'>";
	echo "<td>" . $row['mathanhvien'] . "</td>";
	echo "<td>" . $row['tendangnhap'] . "</td>";
	echo "<td>" . $row['matkhau'] . "</td>";
	echo "<td>" . $row['hoten'] . "</td>";
	echo "<td>" . $row['diachi'] . "</td>";
	echo "<td>" . $row['dienthoai'] . "</td>";
	echo "<td>" . $row['email'] . "</td>";
	echo "</tr>";
	echo "<tr height='50px' bgcolor='#bbb'>";
	echo "</table>";
	echo "</br>";
}
?>

