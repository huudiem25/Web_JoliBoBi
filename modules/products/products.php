<?php
global $o;
$vSQL_PL = "SELECT * FROM products_type where ID=9 ORDER BY Possition ASC";
$vResult_PL = $o->query($vSQL_PL)->fetchAll();

foreach ($vResult_PL as $rowPL) {
?>
<div class="product_type product_type_<?php echo $rowPL["ID"]; ?>">
    <h3><a
            href="?mod=<?php echo $vModule; ?>&type=<?php echo $rowPL["ID"]; ?>"><?php echo $rowPL["ProductTypeName"]; ?></a>
    </h3>
    <?php
		$vSQL = "SELECT * FROM products WHERE ProductTypeID=" . $rowPL["ID"];
        $vResult = $o->query($vSQL)->fetchAll();
        $demSQL = "SELECT count(*) as dem from products";
        $kqDem = $o->query($demSQL)->fetchAll();
         //echo "<h4>Hiển thị " . $kqDem[0]['dem'] . " sản phẩm</h4>";
		foreach ($vResult as $row) {
		?>
    <div class="product_item">
        <a href="?mod=chitietsanpham&ID=<?php echo $row["ID"]; ?>"> <img class="image" src="<?php echo $row["Image"] ?>"
                border="0" alt="" />
            <span>
                <p class="chitiet"> Hệ điều hành: &nbsp; <?php echo $row["Hedieuhanh"]; ?>
                </p>
                <p class="chitiet"> Màn hình: &nbsp; <?php echo $row["Manhinh"]; ?>

                </p>
                <p class="chitiet"> Ram: &nbsp; <?php echo $row["Ram"]; ?>

                </p>
                <p class="chitiet"> Camera: &nbsp; <?php echo $row["Camera"]; ?>

                </p>
                <p class="chitiet"> CPU: &nbsp; <?php echo $row["CPU"]; ?>

                </p>
                <p class="chitiet"> Pin: &nbsp; <?php echo $row["Pin"]; ?>

                </p>
            </span></a>

        <a href="?mod=chitietsanpham&ID=<?php echo $row["ID"]; ?>">
            <div class="title"><?php echo $row["ProductName"]; ?></div>
        </a>
        <div class="price"><?php echo number_format($row['Price'], 0, ',', '.'); ?>&nbsp;đ</div>
        <div class="stat"><img src="./images/IcoRating0.png" alt="" /></div>

        <div class="link"> <a href="?mod=them&ID=<?php echo $row["ID"]; ?>">MUA HÀNG</a></div>


    </div>
    <?php } ?>
    <div class="clear"></div>
</div>

<?php } ?>