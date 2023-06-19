<h2 class="text-center my-5">Đăng ký tài khoản</h2>

<?php

if (isset($thongbao) && $thongbao != "") {
    echo '<h4 class="text-center" style="color:red">' . $thongbao . '</h4>';
}

?>

<form class="container mb-5" action="index.php?act=dangky" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Email </label>
        <input type="email" class="form-control" placeholder="Nhập email" name="email" />
    </div>
    <div class="form-group">
        <label for="">Tài Khoản </label>
        <input type="text" class="form-control" placeholder="Nhập tài khoản" name="ma_kh" />
    </div>
    <div class="form-group">
        <label for="">Mật khẩu</label>
        <input type="text" class="form-control" placeholder="Password" name="mat_khau" />
    </div>
    <div class="form-group">
        <label for="">Họ tên</label>
        <input type="text" class="form-control" placeholder="Nhập họ tên" name="ho_ten" />
    </div>
    <div class="form-group">
        <label for="">Kích hoạt</label>
        <input type="number" class="form-control" placeholder="kich_hoat" name="kich_hoat" />
    </div>
    <div class="form-group">
        <label for="">Hình</label>
        <input type="file" class="form-control" placeholder="Hình ảnh" name="hinh" />
    </div>
    <div class="form-group">
        <label for="">Vai trò</label>
        <input type="number" class="form-control" placeholder="Vai Trò" name="vai_tro" />
    </div>

    <input type="submit" class="btn btn-primary" value="Đăng ký" name="dangky" />
    <input type="reset" value="Reset" class="btn btn-info" />
</form>