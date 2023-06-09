<!-- sidebar + content -->
<section class="">
    <div class="container">
        <div class="row">
            <!-- sidebar -->
            <div class="col-lg-3">
                <!-- Toggle button -->
                <button class="btn btn-outline-secondary mb-3 w-100 d-lg-none" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span>Show filter</span>
                </button>
                <!-- Collapsible wrapper -->
                <div class="collapse card d-lg-block mb-5" id="navbarSupportedContent">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button text-dark bg-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Related items
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                                <div class="accordion-body">
                                    <ul class="list-unstyled">



                                        <?php
                                        foreach ($list_loai_by_name as $loai) {
                                            extract($loai);
                                            $link_list_sp = "index.php?act=sanpham&iddm=" . $ma_loai;
                                            echo '<li><a class="text-black" href="' . $link_list_sp . '">' . $ten_loai . '</a></li> <hr>';
                                        }

                                        ?>


                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button text-dark bg-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                    Brands
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                                <div class="accordion-body">
                                    <div>
                                        <!-- Checked checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1" checked />
                                            <label class="form-check-label" for="flexCheckChecked1">Mercedes</label>
                                            <span class="badge badge-secondary float-end">120</span>
                                        </div>
                                        <!-- Checked checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked />
                                            <label class="form-check-label" for="flexCheckChecked2">Toyota</label>
                                            <span class="badge badge-secondary float-end">15</span>
                                        </div>
                                        <!-- Checked checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3" checked />
                                            <label class="form-check-label" for="flexCheckChecked3">Mitsubishi</label>
                                            <span class="badge badge-secondary float-end">35</span>
                                        </div>
                                        <!-- Checked checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4" checked />
                                            <label class="form-check-label" for="flexCheckChecked4">Nissan</label>
                                            <span class="badge badge-secondary float-end">89</span>
                                        </div>
                                        <!-- Default checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                            <label class="form-check-label" for="flexCheckDefault">Honda</label>
                                            <span class="badge badge-secondary float-end">30</span>
                                        </div>
                                        <!-- Default checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                            <label class="form-check-label" for="flexCheckDefault">Suzuki</label>
                                            <span class="badge badge-secondary float-end">30</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button text-dark bg-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Price
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                                <div class="accordion-body">
                                    <div class="range">
                                        <input type="range" class="form-range" id="customRange1" />
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <p class="mb-0">
                                                Min
                                            </p>
                                            <div class="form-outline">
                                                <input type="number" id="typeNumber" class="form-control" />
                                                <label class="form-label" for="typeNumber">$0</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="mb-0">
                                                Max
                                            </p>
                                            <div class="form-outline">
                                                <input type="number" id="typeNumber" class="form-control" />
                                                <label class="form-label" for="typeNumber">$1,0000</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-white w-100 border border-secondary">apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button text-dark bg-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                    Size
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                                <div class="accordion-body">
                                    <input type="checkbox" class="btn-check border justify-content-center" id="btn-check1" checked autocomplete="off" />
                                    <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check1">XS</label>
                                    <input type="checkbox" class="btn-check border justify-content-center" id="btn-check2" checked autocomplete="off" />
                                    <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check2">SM</label>
                                    <input type="checkbox" class="btn-check border justify-content-center" id="btn-check3" checked autocomplete="off" />
                                    <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check3">LG</label>
                                    <input type="checkbox" class="btn-check border justify-content-center" id="btn-check4" checked autocomplete="off" />
                                    <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check4">XXL</label>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button text-dark bg-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                    Ratings
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                                <div class="accordion-body">
                                    <!-- Default checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </label>
                                    </div>
                                    <!-- Default checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-secondary"></i>
                                        </label>
                                    </div>
                                    <!-- Default checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-secondary"></i>
                                            <i class="fas fa-star text-secondary"></i>
                                        </label>
                                    </div>
                                    <!-- Default checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-secondary"></i><i class="fas fa-star text-secondary"></i>
                                            <i class="fas fa-star text-secondary"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sidebar -->
            <!-- content -->
            <div class="col-lg-9">
                <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
                    <div class="ms-auto">
                        <form action="index.php?act=sanpham" method="post" class="d-flex justify-content-center align-items-center gap-2 mt-4">
                            <input type="hidden" name="ma_loai" value="<?= $ma_loai ?>">
                            <input type="text" placeholder="Tìm kiếm nhanh..." class="form-control" name="keyword">
                            <input type="submit" class="btn btn-primary" value="Search" name="searchLoai">
                        </form>
                    </div>
                </header>

                <div class="row">

                    <?php
                    foreach ($listHangHoaTheoLoai as $sp) {
                        extract($sp);


                        $img_path = "./upload/" . $hinh;
                        $link_sanphamct = "index.php?act=sanphamct&idsp=" . $ma_hh;

                        echo '<div class="col-lg-3 col-md-6 col-sm-6 border mr-2">
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

                <hr />







                <!-- Pagination -->
                <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
                    <ul class="pagination">



                        <?php
                        $totalPage =  tong_so_sanpham_page($per_page, $ma_loai);


                        if ($totalPage > 1) {
                            if ($page > 1) {
                                $pre_page = $page - 1;
                                echo ' <li class="page-item border"><a class="page-link" href="?per_page=' . $per_page . '&page=' . $pre_page . '">' . '<< Pre' . '</a></li>';
                            }


                            if ($page > 3) {
                                $first_page = 1;
                                echo ' <li class="page-item border"><a class="page-link" href="?per_page=' . $per_page . '&page=' . $first_page . '">' . 'First' . '</a></li>';
                            }



                            for ($num = 1; $num <= $totalPage; $num++) {
                                if ($num != $page) {
                                    if ($num > $page - 2 && $num < $page + 2) {
                                        echo ' <li class="page-item border"><a class="page-link" href="?per_page=' . $per_page . '&page=' . $num . '">' . $num . '</a></li>';
                                    }
                                } else {
                                    echo '<strong class="page-item border bg-primary text-white"><a class="page-link" href="?per_page=' . $per_page . '&page=' . $num . '">' . $num . '</a></strong>';
                                }
                            }

                            if ($page < 3) {
                                $last_page = $totalPage;
                                echo ' <li class="page-item border"><a class="page-link" href="?per_page=' . $per_page . '&page=' . $last_page . '">' . 'Last' . '</a></li>';
                            }


                            if ($page < $totalPage - 1) {
                                $next_page = $page + 1;
                                echo ' <li class="page-item border"><a class="page-link" href="?per_page=' . $per_page . '&page=' . $next_page . '">' . 'Next >>' . '</a></li>';
                            }
                        }



                        ?>


                    </ul>
                </nav>

            </div>
        </div>
    </div>
</section>
<!-- sidebar + content -->