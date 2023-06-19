<?php

if (is_array($getOneSanPham)) {
    extract($getOneSanPham);
    $img_path = "./upload/" . $hinh;
}




?>

<!-- content -->
<section class="py-5">
    <div class="container">
        <div class="row gx-5">
            <aside class="col-lg-6">
                <div class="border rounded-4 mb-3 d-flex justify-content-center">
                    <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="<?= $img_path ?? '' ?>">
                        <img style="max-width: 100%; max-height: 100vh; margin: auto" class="rounded-4 fit" src="<?= $img_path ?? '' ?>" />
                    </a>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="<?= $img_path ?>" class="item-thumb">
                        <img width="60" height="60" class="rounded-2" src="<?= $img_path ?>" />
                    </a>
                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="<?= $img_path ?>" class="item-thumb">
                        <img width="60" height="60" class="rounded-2" src="<?= $img_path ?>" />
                    </a>
                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="<?= $img_path ?>" class="item-thumb">
                        <img width="60" height="60" class="rounded-2" src="<?= $img_path ?>" />
                    </a>
                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="<?= $img_path ?>" class="item-thumb">
                        <img width="60" height="60" class="rounded-2" src="<?= $img_path ?>" />
                    </a>
                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="<?= $img_path ?>" class="item-thumb">
                        <img width="60" height="60" class="rounded-2" src="<?= $img_path ?>" />
                    </a>
                </div>
                <!-- thumbs-wrap.// -->
                <!-- gallery-wrap .end// -->
            </aside>
            <main class="col-lg-6">
                <div class="ps-lg-3">
                    <h4 class="title text-dark">
                        <?= $ten_hh ?? '' ?>
                    </h4>
                    <div class="d-flex flex-row my-3">
                        <div class="text-warning mb-1 me-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="ms-1"> 4.5 </span>
                        </div>
                        <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154
                            orders</span>
                        <span class="text-success ms-2">In stock</span>
                    </div>

                    <div class="mb-3">
                        <span class="h5">$<?= $don_gia ?? '' ?></span>
                    </div>

                    <p>
                        <?= $mo_ta ?? "" ?>
                    </p>

                    <div class="row">
                        <dt class="col-3">Giảm giá:</dt>
                        <dd class="col-9">$<?= $giam_gia ?? '' ?></dd>

                        <dt class="col-3">Ngày nhập:</dt>
                        <dd class="col-9"><?= $ngay_nhap ?? '' ?></dd>

                        <dt class="col-3">Số lượt xem:</dt>
                        <dd class="col-9"><?= $so_luot_xem ?? '' ?></dd>

                        <dt class="col-3">Brand</dt>
                        <dd class="col-9">Reebook</dd>
                    </div>

                    <hr />

                    <div class="row mb-4">
                        <div class="col-md-4 col-6">
                            <label class="mb-2">Size</label>
                            <select class="form-select border border-secondary" style="height: 35px">
                                <option>Small</option>
                                <option>Medium</option>
                                <option>Large</option>
                            </select>
                        </div>
                        <!-- col.// -->
                        <div class="col-md-4 col-6 mb-3">
                            <label class="mb-2 d-block">Quantity</label>
                            <div class="input-group mb-3" style="width: 170px">
                                <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <input type="text" class="form-control text-center border border-secondary" placeholder="14" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                                <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-warning shadow-0"> Buy now </a>
                    <a href="#" class="btn btn-primary shadow-0">
                        <i class="me-1 fa fa-shopping-basket"></i> Add to cart
                    </a>
                    <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3">
                        <i class="me-1 fa fa-heart fa-lg"></i> Save
                    </a>
                </div>
            </main>
        </div>
    </div>
</section>
<!-- content -->

<section class="bg-light border-top py-4">
    <div class="container">
        <div class="row gx-4">
            <div class="col-lg-8 mb-4">
                <div class="border rounded-2 px-3 py-2 bg-white">
                    <!-- Pills navs -->
                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item d-flex" role="presentation">
                            <a class="nav-link d-flex align-items-center justify-content-center w-100 active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">Comments</a>
                        </li>
                        <li class="nav-item d-flex" role="presentation">
                            <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-2" data-mdb-toggle="pill" href="#ex1-pills-2" role="tab" aria-controls="ex1-pills-2" aria-selected="false">Warranty info</a>
                        </li>
                        <li class="nav-item d-flex" role="presentation">
                            <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-3" data-mdb-toggle="pill" href="#ex1-pills-3" role="tab" aria-controls="ex1-pills-3" aria-selected="false">Shipping info</a>
                        </li>
                        <li class="nav-item d-flex" role="presentation">
                            <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-4" data-mdb-toggle="pill" href="#ex1-pills-4" role="tab" aria-controls="ex1-pills-4" aria-selected="false">Seller profile</a>
                        </li>
                    </ul>
                    <!-- Pills navs -->

                    <!-- Pills content -->
                    <div class="tab-content" id="ex1-content">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                        <script>
                            $(document).ready(function() {

                                $("#binhluan").load("site/binhluan/binhluan.php", {
                                    mahh: <?= $ma_hh ?>
                                });
                            });
                        </script>
                        <div class="tab-pane fade show active" id="binhluan" role="tabpanel" aria-labelledby="ex1-tab-1">

                        </div>

                    </div>
                    <!-- Pills content -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="px-0 border rounded-2 shadow-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Similar items</h5>


                            <?php

                            if (isset($getSpCungLoai) && is_array($getSpCungLoai)) {

                                foreach ($getSpCungLoai as $sp) {
                                    extract($sp);
                                    $linksp = "index.php?act=sanphamct&idsp=" . $ma_hh;
                                    $img_path = "./upload/" . $hinh;
                                    echo ' <div class="d-flex mb-3">
                                                <a href="' . $linksp . '" class="me-3">
                                                    <img src="' . $img_path . '" style="min-width: 96px; height: 96px" class="img-md img-thumbnail" />
                                                </a>
                                                <div class="info">
                                                    <a href="#" class="nav-link mb-1">
                                                        ' . $ten_hh . ' <br />
                                                    ' . $mo_ta . '
                                                    </a>
                                                    <strong class="text-dark"> $' . $don_gia . '</strong>
                                                </div>
                                            </div>';
                                }
                            } else {
                                echo '<span>Không tìm thấy sản phảm nào</span>';
                            }

                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>