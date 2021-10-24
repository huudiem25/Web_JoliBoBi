<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<div class="sanpham_moi">
    <h3>Thông tin tài khoản</h3>

    <?php
  global $o;
  $user = $_SESSION['tendangnhap'];
  $sql    = "SELECT * from thanhvien WHERE tendangnhap='$user'";
  $result = $o->query($sql)->fetchAll();
  $row    = $result[0];
  ?>

    <form name="form1" method="post" action="">
        <table width="500px" border="1" align="center">
            <tr>
                <td colspan='2' align='center'><b>Thông tin tài khoản </b></td>
            </tr>
            <tr>
                <td>Tài khoản:</td>
                <td align='center'>
                    <?php
          echo $row['tendangnhap'];
          ?></td>
            </tr>
            <tr>
                <td>Họ và tên:</td>
                <td align='center'><?php
                            echo $row['hoten'];
                            ?></td>
            </tr>


            <tr>
                <td>Địa chỉ:</td>
                <td align='center'><?php
                            echo $row['diachi'];
                            ?></td>
            </tr>
            <tr>
                <td>Điện thoại:</td>
                <td align='center'><?php
                            echo $row['dienthoai'];
                            ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td align='center'><?php
                            echo $row['email'];
                            ?></td>
            </tr>
            <tr>
                <td colspan='2' align='center'><b>Thiết lập tài khoản</b></td>
            </tr>
            <tr>
                <td colspan='2'><a href="?mod=doimatkhau">Thay đổi mật khẩu</a></td>
            </tr>
            <tr>
                <td colspan='2'><a href="?mod=doithongtintk">Thay đổi thông tin tài khoản</a></td>
        </table>
    </form>
</div>