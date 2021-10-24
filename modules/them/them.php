<?php
global $o;
$id123 = $_REQUEST['ID'];
$query = "SELECT ID,ProductName,Image,Price FROM products WHERE ID='$id123'";
$results = $o->query($query)->fetchAll();
$row = $results[0];
extract($row);
?>
<h3>Sản Phẩm Muốn Thêm Vào Giỏ</h3>
<div id="themgh">
    <table>
        <tr>
            <?php
            echo "<td id=themghimage><img src='$row[Image]'/></td>";
            echo "<td class=thongtin>";
            echo "<b>Tên Sản Phẩm:</b> ";
            echo "<br><br>";

            echo "<b class=ten> $row[ProductName]</b>";
            echo "<br><br>";
            echo "<b>Giá Bán:</b> ";
            echo "<br><br>";

            echo "<b class=gia>$row[Price]</b></td>";
            ?> </tr>

        <tr>
            <td>
                <form method="POST" action="index.php?mod=them&ID=<?php echo $id123 ?>">
                    &nbsp;&nbsp;&nbsp;&nbsp;Số lượng:
                    <input type="text" name="sl_them" value="1" size="1">
                    <input type="hidden" name="ID" value="<?php echo $ID; ?>">
                    <input type="hidden" name="ProductName" value="<?php echo $ProductName; ?>">
                    <input type="hidden" name="Image" value="<?php echo $Image; ?>">
                    <input type="hidden" name="Price" value="<?php echo $Price; ?>">

                    <input type="submit" name="themgiohang" value="Thêm vào giỏ hàng">
                </form>

            </td>

        </tr>
        <tr class="link">
            <td>
                <a href="?mod=giohang">Xem giỏ hàng</a>
                <a href="index.php">Trang chủ</a>
            </td>
        </tr>
    </table>
</div>
<?php

if (!isset($_SESSION["tendangnhap"])) {
    echo "<h3>Bạn phải đăng nhập mới có thể thêm vào giỏ hàng</h3>";
    echo ("<script>location.href = 'index.php?mod=dangnhap';</script>");
}

$username = $_SESSION["tendangnhap"];

if (isset($_POST['themgiohang'])) {
    $sl_them = $_POST['sl_them']; // lay so luong san pham
    $ID = $_POST['ID']; // lay id san pham
    $ProductName = $_POST['ProductName']; // lay id san pham
    $Image = $_POST['Image']; // lay id san pham
    $Price = $_POST['Price']; // lay id san pham
    $query = "INSERT INTO giohang (idsp,sl,tendangnhap,ProductName,Image,Price)
          VALUES ('$ID','$sl_them','$username','$ProductName','$Image','$Price')";

    $results = $o->query($query);
    if ($results) {
        echo "<h3>Thêm thành công</h3>";
        echo ("<script>location.href = 'index.php?mod=giohang';</script>");
    } else
        echo "<h3>Thêm thất bại</h3>";
}
?>