<h3>Liên Hệ</h3>



<div id="lienhe">

    <span class="style">CÔNG TY CỔ PHẦN CÔNG NGHỆ APHONE</span>
    <p class="tintuc">

    <p class="tintuc">Địa chỉ: 52 Nguyễn Giản Thanh Phường 15 Quận 10 TP HCM</p>
    <p class="tintuc">Điện thoại: 0971894618</p>
    <p class="tintuc">Fax:</p>
    <p class="tintuc">Email:huudiem2510@gmail.com</p>
    </p>
    <h3>Thông Tin Phản Hồi</h3>

    <div id="thongtinlienhe">
        <p>Xin vui lòng điền các yêu cầu vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn ngay sau khi
            nhận được.
            Xin chân thành cảm ơn!</p>

        <?php
        $sessid = session_id();
        ?>
        <form method="post" action="">
            <table>

                <tr>
                    <td>
                        Họ tên
                    </td>
                    <td>
                        <input type="text" name="hoten" size="35">
                    </td>
                </tr>
                <tr>
                    <td>
                        Địa chỉ
                    </td>
                    <td>
                        <input type="text" name="diachi" size="35">
                    </td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        <input type="text" name="email" size="35">
                    </td>
                </tr>
                <tr>
                    <td>
                        Số điện thoại</td>
                    <td>
                        <input type="text" name="sdt" size="35">
                    </td>
                </tr>
                <tr>
                    <td>
                        Tiêu đề
                    </td>
                    <td>
                        <input type="text" name="tieude" size="35" maxlength="12">
                    </td>
                </tr>
                <tr>
                    <td>
                        Nội dung</td>
                    <td>
                        <textarea name="noidung" cols="36" style="height:80px"></textarea>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" height="50px">
                        <div align="center">
                            <form action="" method="POST">
                                <input type="submit" name="gui" value="GỬI LIÊN HỆ">
                                <form>
                        </div>
                    </td>
                </tr>
            </table>
            <?php
            global $o;
            if (isset($_POST['gui'])) {
                $hoten = $_POST['hoten'];
                $diachi = $_POST['diachi'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $tieude = $_POST['tieude'];
                $noidung = $_POST['noidung'];
                $lienhe = "INSERT INTO lienhe (hoten,diachi,email,sdt,tieude,noidung) VALUES ('$hoten','$diachi','$email','$sdt','$sdt','$noidung')";
                $tb1 = $o->query($lienhe);

                echo "<h3>Gửi Thành Công</h3>";
            }
            ?>

    </div>
</div>