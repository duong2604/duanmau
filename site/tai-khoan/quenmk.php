<h2 class="text-center my-5">Quên mật khẩu</h2>

<form class="container mb-5" method="post" action="index.php?act=quenmk">
    <div class="form-group">
        <label for="">Mã khách hàng:</label>
        <input type="text" class="form-control" id="" placeholder="tài khoản" name="ma_kh" />
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" id="" placeholder="email" name="email" />
    </div>


    <input type="submit" class="btn btn-primary" value="Send" name="send">
    <a href="index.php?act=dangnhap" class="btn btn-primary">Đăng nhập</a>
</form>

<?php

if (isset($thongbao) && $thongbao != '') {
    echo '<h4 class="text-center my-5 " style="color:red">' . $thongbao . '</h4>';
}
?>