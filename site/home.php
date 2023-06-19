<!-- intro -->
<section class="pt-3">
    <div class="container">
        <div class="row gx-3">
            <main class="col-lg-9">
                <div class="card-banner p-5 bg-primary rounded-5" style="height: 350px">
                    <div style="max-width: 500px">
                        <h2 class="text-white">
                            Great products with <br />
                            best deals
                        </h2>
                        <p class="text-white">
                            No matter how far along you are in your sophistication as an
                            amateur astronomer, there is always one.
                        </p>
                        <a href="#" class="btn btn-light shadow-0 text-primary">
                            View more
                        </a>
                    </div>
                </div>
            </main>
            <aside class="col-lg-3">
                <div class="card-banner h-100 rounded-5" style="background-color: #f87217">
                    <div class="card-body text-center pb-5">
                        <h5 class="pt-5 text-white">Amazing Gifts</h5>
                        <p class="text-white">
                            No matter how far along you are in your sophistication
                        </p>
                        <a href="#" class="btn btn-outline-light"> View more </a>
                    </div>
                </div>
            </aside>
        </div>
        <!-- row //end -->
    </div>
    <!-- container end.// -->
</section>
<!-- intro -->

<!-- category -->
<section>
    <div class="container pt-5">
        <nav class="d-flex justify-content-center flex-wrap align-items-center gap-5">
            <?php
            foreach ($getLoais as $loai) {
                extract($loai);
                $link_list_sp = "index.php?act=sanpham&iddm=" . $ma_loai;
                echo '<a href="' . $link_list_sp . '" class="fs-4">' . $ten_loai . '</a>';
            }

            ?>
        </nav>

    </div>
</section>
<!-- category -->

<!-- Products -->
<section>
    <div class="container my-5">
        <header class="mb-4">
            <h3>New products</h3>
        </header>

        <div class="row">
            <?php
            foreach ($getHangHoaHomepage as $hh) {
                extract($hh);
                $img_path = './upload/' . $hinh;
                $link_sanphamct = "index.php?act=sanphamct&idsp=" . $ma_hh;


                echo '<div class="col-lg-3 col-md-6 col-sm-6 border">
                        <div class="card my-2 shadow-0">
                            <a href="' . $link_sanphamct . '" class="">
                                <div class="mask" style="height: 50px">
                                    <div class="d-flex justify-content-start align-items-start h-100 m-2">
                                        <h6><span class="badge bg-danger pt-1">New</span></h6>
                                    </div>
                                </div>
                                <img src="' . $img_path . '" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1" />
                            </a>
                            <div class="card-body p-0 pt-3">
                                <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                                <h5 class="card-title">$' . $don_gia . '</h5>
                                <p class="card-text fw-bold mb-0">' . $ten_hh . '</p>
                                <p class="text-muted">' . $mo_ta . '</p>
                            </div>
                        </div>
                    </div>
    ';
            }

            ?>

        </div>
    </div>
</section>
<!-- Products -->

<!-- Features -->
<section>
    <div class="container">
        <div class="card p-4 bg-primary">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="mb-0 text-white">Best products and brands in store</h4>
                    <p class="mb-0 text-white-50">
                        Trendy products and text to build on the card title
                    </p>
                </div>
                <div class="col-auto">
                    <a class="btn btn-white text-primary shadow-0" href="#">Discover</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features -->

<!-- Recommended -->
<section>
    <div class="container my-5">
        <header class="mb-4">
            <h3>Top sản phẩm nhiều lượt xem</h3>
        </header>

        <div class="row">
            <?php
            foreach ($topHangHoa as $tophh) {
                extract($tophh);
                $img_path = './upload/' . $hinh;
                $link_sanphamct = "index.php?act=sanphamct&idsp=" . $ma_hh;

                echo ' <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card my-2 shadow-0">
                                <a href="' . $link_sanphamct . '" class="">
                                    <img src="' . $img_path . '" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1" />
                                </a>
                                <div class="card-body p-0 pt-3">
                                    <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                                    <h5 class="card-title">$' . $don_gia . '</h5>
                                    <p class="card-text fw-bold mb-0">' . $ten_hh . '</p>
                                    <p class="text-muted">' . $mo_ta . '</p>
                                </div>
                            </div>
                        </div>';
            }

            ?>

        </div>
    </div>
</section>
<!-- Recommended -->