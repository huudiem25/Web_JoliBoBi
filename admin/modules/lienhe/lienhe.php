<h3>Liên Hệ</h3>
<div id="lienhe">

    <span class="style">CÔNG TY CỔ PHẦN CÔNG NGHỆ JoliBoBi</span>
    <p class="tintuc">
    <p class="tintuc">Địa chỉ: 52 Nguyễn Giản Thanh Phường 15 Quận 10 TP HCM</p>
    <p class="tintuc">Điện thoại: 0971894618</p>
    <p class="tintuc">Fax:</p>
    <p class="tintuc">Email:huudiem2510@gmail.com</p>
    </p>

</div>
</div>
<h3>Danh Sách Phản Hồi</h3>
<?php
global $o;

$connection = mysqli_connect("localhost", "root", "", "web");

$sql="SELECT * FROM lienhe ORDER BY id";

$result = mysqli_query($connection, $sql);
$rs = $o->query($sql)->fetchAll();
foreach ($rs as $row) {
    
    echo "<table border='1' align='center' width='700px'>";
	echo "<tr height='50px' bgcolor='#bbb'>";
	echo "<td colspan='12' align='center'><strong>Thông Tin Phản Hồi</strong></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align='center'><strong>STT</strong></td>";
	echo "<td align='center'><strong>Họ Tên</strong></td>";
	echo "<td align='center'><strong>Địa Chỉ</strong></td>";
	echo "<td align='center'><strong>Email</strong></td>";
	echo "<td align='center'><strong>Sđt</strong></td>";
	echo "<td align='center'><strong>Tiêu Đề</strong></td>";
	echo "<td align='center' colspan='4'><strong>Nội Dung</strong></td>";
	echo "</tr>";
	echo "<tr align='center'>";
	echo "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['hoten'] . "</td>";
	echo "<td>" . $row['diachi'] . "</td>";
	echo "<td>" . $row['email'] . "</td>";
	echo "<td>" . $row['sdt'] . "</td>";
	echo "<td>" . $row['tieude'] . "</td>";
	echo "<td>" . $row['noidung'] . "</td>";
	echo "</tr>";
	echo "<tr height='50px' bgcolor='#bbb'>";
	echo "</table>";
	echo "</br>";
    
}