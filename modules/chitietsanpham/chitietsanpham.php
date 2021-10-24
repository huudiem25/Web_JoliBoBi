<?php
    include("config.php");
    include_once("admin/includes/lib.php");
    global $o;
    $id123 = $_REQUEST['ID'];
    $query = $o->query("SELECT * FROM products WHERE ID='$id123'")->fetchAll();
    $row = $query[0];
?>

<h3>Chi tiết sản phẩm</h3>
<div id="chitiet">

    <table id="chitietborder">
        <tr>
            <td rowspan="7" id="borderimage"><img src="<?php echo $row['Image']; ?>" width="100%"></td>
            <td><span class="ten"> <?php echo $row['ProductName']; ?></span></td>
        </tr>

        <tr>
            <td><strong>Giá bán: </strong><br /><br />
                <span class="gia"><?php echo number_format($row['Price'], 0, ',', '.'); ?> đ</span>
            </td>
        </tr>
        <tr>
            <td><strong>Đánh giá:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="images/IcoRating0.png" alt="" /></td>
        </tr>
        <tr>
            <td><strong>Phí vận chuyển:</strong><span>Tính phí khi thanh toán</span></td>
        </tr>

        <tr>
            <td><strong>Mô tả: </strong>&nbsp;<span><?php echo $row['Description']; ?> </span></td>
        </tr>

        <tr>
            <td class="link"><a href="?mod=them&ID=<?php echo $row["ID"]; ?>">
                    Đặt mua</a>
                <a href="javascript: history.go(-1)"> Quay Lại</a>
            </td>
        </tr>


    </table>
   
</div>

<div class="clear"></div>


</body>

</html>