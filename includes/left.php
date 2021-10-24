<p class="TITLE">DANH MỤC</p>
<div class="left">


    <div class="text-danhmucsanpham">
        <?php echo create_menu_Left(); ?>
    </div>
</div>
<p class="TITLE">bán chạy</p>
<div class="left">
    <marquee direction="up" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()" height="250px;">
        <?php
		global $o;
		$vSQL_PL = "SELECT * FROM products_type where ID=9 ORDER BY Possition ASC";
		$vResult_PL = $o->query($vSQL_PL)->fetchAll();

		foreach ($vResult_PL as $rowPL) {
		?>
        <div class="product_type product_type_<?php echo $rowPL["ID"]; ?>">

            <?php
				$vSQL = "SELECT * FROM products WHERE ProductTypeID=" . $rowPL["ID"];
				$vResult = $o->query($vSQL)->fetchAll();

				foreach ($vResult as $row) {
				?>
            <div class="product_item">
                <div class="image">
                    <a href="?mod=chitietsanpham&ID=<?php echo $row["ID"]; ?>"> <img class="image"
                            src="<?php echo $row["Image"] ?>" border="0" alt="" /></a>
                </div>
                <a href="?mod=chitietsanpham&ID=<?php echo $row["ID"]; ?>">
                    <div class="title"><?php echo $row["ProductName"]; ?></div>
                </a>
                <div class="price"><?php echo number_format($row['Price'], 0, ',', '.'); ?>&nbsp;đ</div>

            </div>
            <?php } ?>
            <div class="clear"></div>
        </div>

        <?php } ?>
    </marquee>
</div>
<p class="TITLE">Khuyến Mãi</p>
<div class="left">
    <script type="text/javascript" src="js/countdown.js"></script>
    <div class="clock"></div>
    <?php

	$vSQL_PL = "SELECT * FROM products_type where ID=18 ORDER BY Possition ASC";
	$vResult_PL = $o->query($vSQL_PL)->fetchAll();

	foreach ($vResult_PL as $rowPL) {
	?>
    <div class="product_type product_type_<?php echo $rowPL["ID"]; ?>">


        <?php
			$vSQL = "SELECT * FROM products WHERE ProductTypeID=" . $rowPL["ID"];
			$vResult = $o->query($vSQL)->fetchAll();

			foreach ($vResult as  $row) {
			?>
        <div class="product_item">
            <div class="image">
                <a href="?mod=chitietsanpham&ID=<?php echo $row["ID"]; ?>"> <img class="image"
                        src="<?php echo $row["Image"] ?>" border="0" alt="" /></a>
            </div>
            <a href="?mod=chitietsanpham&ID=<?php echo $row["ID"]; ?>">
                <div class="title"><?php echo $row["ProductName"]; ?></div>
            </a>
            <div class="pricenew"><?php echo number_format($row['Price'], 0, ',', '.'); ?>&nbsp;đ</div>
            <div class="price"><?php echo number_format($row['PriceNew'], 0, ',', '.'); ?>&nbsp;đ</div>

        </div>
        <?php } ?>
        <div class="clear"></div>
    </div>

    <?php } ?>
    <br />
    <script type="text/javascript">
    var myCountdown2 = new Countdown({
        time: 1800,
        width: 235,
        height: 80,
        rangeHi: "hour" // <- no comma on last item!
    });
    </script>
</div>
<p class="TITLE">Hỗ trợ</p>

<div id="hotro">
    <div class="yahoo"><a href="#"><img src="images/online.gif" alt="" /></a>
        <p>Phòng Kinh Doanh</p>
    </div>

    <div class="yahoo"><a href="#"><img src="images/online.gif" alt="" /></a>
        <p>Phòng Kỹ Thuât</p>
    </div>
    <div class="hotline"><img src="images/hotline.jpg" alt="" />
        <p>0123.456.789</p>
    </div>
    <div class="hotline"><img src="images/hotline.jpg" alt="" />
        <p>0123.567.789</p>
    </div>
</div>