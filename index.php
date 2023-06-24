<?php
session_start();
ob_start();
include "dao/pdo.php";
include "dao/loai.php";
include "dao/hang-hoa.php";
include "dao/khach-hang.php";
include "dao/binh-luan.php";
include "site/header.php";

$getLoais = loai_select_all();
$topHangHoa = hang_hoa_select_top4();
// $getHangHoaHomepage = get_hang_hoa_homepage();

if (isset($_POST['search']) && $_POST['search']) {
    $keyword = $_POST['keyword'];
    $getHangHoaHomepage = hang_hoa_select_keyword($keyword);
} else {
    $per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 8;
    $page = !empty($_GET['page']) ? $_GET['page'] : 1;
    $getHangHoaHomepage = hang_hoa_paginate($per_page, $page);
}




if (isset($_GET['act']) && $_GET['act'] != "") {
    $act =  $_GET['act'];

    switch ($act) {

        case "sanpham":
            if ($_GET['iddm'] && $_GET['iddm'] > 0) {

                $ma_loai = $_GET['iddm'];
                $getOneLoai = loai_select_by_id($ma_loai);
                extract($getOneLoai);

                $per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 6;
                $page = !empty($_GET['page']) ? $_GET['page'] : 1;
                $listHangHoaTheoLoai = hang_hoa_by_loai_paginate($per_page, $page, $ma_loai);




                // $listHangHoaTheoLoai = hang_hoa_select_by_loai($ma_loai);

                $list_loai_by_name = loai_select_all();
            }
            include "site/sanpham.php";
            break;

        case "sanphamct":
            if ($_GET['idsp'] && $_GET['idsp'] > 0) {
                $ma_hh = $_GET['idsp'];

                hang_hoa_tang_so_luot_xem($ma_hh);
                $getOneSanPham =  hang_hoa_select_by_id($ma_hh);

                if (is_array($getOneSanPham)) {
                    extract($getOneSanPham);
                    $getSpCungLoai = hang_hoa_select_cung_loai($ma_loai, $ma_hh);
                }
            }
            include "site/sanphamct.php";
            break;


        case "dangky":
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $ma_kh = $_POST['ma_kh'];
                $mat_khau = $_POST['mat_khau'];
                $ho_ten = $_POST['ho_ten'];
                $email = $_POST['email'];
                $kich_hoat = $_POST['kich_hoat'];
                $vai_tro = $_POST['vai_tro'];

                $file = $_FILES['hinh'];
                $hinh = $file['name'];

                move_uploaded_file($file["tmp_name"], "upload/" . $hinh);

                khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
                $thongbao = "Đăng ký thành công ";
            }
            include "site/tai-khoan/dangky.php";
            break;

        case "dangnhap":
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $ma_kh = $_POST['ma_kh'];
                $mat_khau = $_POST['mat_khau'];
                $checkkh =  check_kh($ma_kh, $mat_khau);
                if (is_array($checkkh)) {
                    $_SESSION['kh'] = $checkkh;
                    // $thongbao = 'Đăng nhập thành công';
                    header('Location: index.php');
                } else {
                    $thongbao = 'Tài khoản hoặc mật khẩu không đúng';
                }
            }
            include "site/tai-khoan/dangnhap.php";
            break;

        case "capnhattk":
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $ma_kh = $_POST['ma_kh'];
                $mat_khau = $_POST['mat_khau'];
                $ho_ten = $_POST['ho_ten'];
                $email = $_POST['email'];
                $kich_hoat = $_POST['kich_hoat'];
                $vai_tro = $_POST['vai_tro'];

                $file = $_FILES['hinh'];
                $hinh = $file['name'];


                if ($hinh != '') {
                    move_uploaded_file($file["tmp_name"], "upload/" . $hinh);
                    khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
                    $_SESSION['kh'] = check_kh($ma_kh, $mat_khau);
                    header('Location: index.php?act=capnhattk');
                } else {
                    khach_hang_update_khong_hinh($ma_kh, $mat_khau, $ho_ten, $email, $kich_hoat, $vai_tro);
                    $_SESSION['kh'] = check_kh($ma_kh, $mat_khau);
                    header('Location: index.php?act=capnhattk');
                }


                $thongbao = "Cập nhật thành công ";
            }
            include "site/tai-khoan/capnhat.php";
            break;

        case "quenmk":

            if (isset($_POST['send']) && $_POST['send']) {
                $ma_kh = $_POST['ma_kh'];
                $email = $_POST['email'];

                $get_kh = get_kh_quen_mk($ma_kh, $email);
                if (is_array($get_kh)) {
                    extract($get_kh);
                    $thongbao = "Mật khẩu cửa bạn là: " . $mat_khau;
                } else {
                    $thongbao = "Tài khoản hoặc email không chính xác";
                }
            }
            include "site/tai-khoan/quenmk.php";
            break;

        case "thoat":
            include "site/tai-khoan/logout.php";
            include "site/home.php";
            break;



        default:
            include "site/home.php";
            break;
    }
} else {
    include "site/home.php";
}





include "site/footer.php";


ob_end_flush();
