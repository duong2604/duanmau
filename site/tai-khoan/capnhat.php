<?php
if (isset($_SESSION['kh']) && is_array($_SESSION['kh'])) {
    extract($_SESSION['kh']);

    $img_path = './upload/' . $hinh;
}

?>


<section style="background-color: #eee">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="<?= $img_path ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px" />
                        <h5 class="my-3"><?= $ho_ten ?></h5>
                        <p class="text-muted mb-1 text-red"><?php if (isset($vai_tro) && $vai_tro == 1) {
                                                                echo 'Admin';
                                                            } else {
                                                                echo 'Khách hàng';
                                                            } ?></p>
                        <p class="text-muted mb-4"><?= $email ?></p>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-primary">Follow</button>
                            <button type="button" class="btn btn-outline-primary ms-1">
                                Message
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fas fa-globe fa-lg text-warning"></i>
                                <p class="mb-0">https://dannyduong2604.com</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-github fa-lg" style="color: #333333"></i>
                                <p class="mb-0">https://github.com/duong2604</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-twitter fa-lg" style="color: #55acee"></i>
                                <p class="mb-0">duongbuibd</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-instagram fa-lg" style="color: #ac2bac"></i>
                                <p class="mb-0">duongbui</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998"></i>
                                <p class="mb-0">duongbui</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <h2 class="text-center my-5">Cập nhật tài khoản</h2>

                    <?php

                    if (isset($thongbao) && $thongbao != "") {
                        echo '<h4 class="text-center" style="color:red">' . $thongbao . '</h4>';
                    }

                    ?>

                    <form class="container mb-5" action="index.php?act=capnhattk" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Email </label>
                            <input type="email" class="form-control" placeholder="Nhập email" name="email" value="<?= $email ?>" />
                        </div>
                        <div class="form-group">
                            <label for="">Tài Khoản </label>
                            <input type="text" class="form-control" placeholder="Nhập tài khoản" name="ma_kh" value="<?= $ma_kh ?>" disabled />
                            <input type="hidden" class="form-control" placeholder="Nhập tài khoản" name="ma_kh" value="<?= $ma_kh ?>" />
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="text" class="form-control" placeholder="Password" name="mat_khau" value="<?= $mat_khau ?>" />
                        </div>
                        <div class="form-group">
                            <label for="">Họ tên</label>
                            <input type="text" class="form-control" placeholder="Nhập họ tên" name="ho_ten" value="<?= $ho_ten ?>" />
                        </div>
                        <div class="form-group">
                            <label for="">Kích hoạt</label>
                            <input type="number" class="form-control" placeholder="kich_hoat" name="kich_hoat" value="<?= $kich_hoat ?>" />
                        </div>
                        <div class="form-group">
                            <label for="">Hình</label>
                            <input type="file" class="form-control" placeholder="Hình ảnh" name="hinh" />
                        </div>
                        <div class="form-group">
                            <label for="">Vai trò</label>
                            <input type="number" class="form-control" placeholder="Vai Trò" name="vai_tro" value="<?= $vai_tro ?>" />
                        </div>

                        <input type="submit" class="btn btn-primary" value="Cập nhật" name="capnhat" />
                        <input type="reset" value="Reset" class="btn btn-info" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>