<h2 class="text-center my-5">Đăng nhập</h2>

<?php

if (isset($thongbao) && $thongbao != '') {
    echo '<h4 class="text-center my-5 " style="color:red">' . $thongbao . '</h4>';
}
?>
<form class="container mb-5" method="post" action="index.php?act=dangnhap">
    <div class="form-group">
        <label for="">Mã khách hàng:</label>
        <input type="text" class="form-control" id="" placeholder="tài khoản" name="ma_kh" />
    </div>
    <div class="form-group">
        <label for="">Mật khẩu</label>
        <input type="password" class="form-control" id="" placeholder="mặt khẩu " name="mat_khau" />
    </div>

    <input type="submit" class="btn btn-primary" value="Đăng nhập" name="dangnhap">
    <a href="index.php?act=quenmk" class="btn btn-info">Quên mật khẩu</a>
</form>