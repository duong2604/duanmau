<?php
require_once 'pdo.php';

function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta)
{
    $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta) VALUES (?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet == 1, $so_luot_xem, $ngay_nhap, $mo_ta);
}

function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta)
{
    $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
    pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet == 1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
}

function hang_hoa_delete($ma_hh)
{
    $sql = "DELETE FROM hang_hoa WHERE  ma_hh=?";
    if (is_array($ma_hh)) {
        foreach ($ma_hh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_hh);
    }
}

function hang_hoa_select_all()
{
    $sql = "SELECT * FROM hang_hoa";
    return pdo_query($sql);
}
function get_hang_hoa_homepage()
{
    $sql = "SELECT * FROM hang_hoa Where 1 ORDER BY ma_hh desc limit 0,8";
    return pdo_query($sql);
}

function hang_hoa_select_by_id($ma_hh)
{
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
    return pdo_query_one($sql, $ma_hh);
}

function hang_hoa_exist($ma_hh)
{
    $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
    return pdo_query_value($sql, $ma_hh) > 0;
}

function hang_hoa_tang_so_luot_xem($ma_hh)
{
    $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
    pdo_execute($sql, $ma_hh);
}

function hang_hoa_select_top4()
{
    $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 4";
    return pdo_query($sql);
}

function hang_hoa_select_dac_biet()
{
    $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
    return pdo_query($sql);
}

function hang_hoa_select_by_loai($ma_loai)
{
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
    return pdo_query($sql, $ma_loai);
}

function hang_hoa_select_cung_loai($ma_loai, $ma_hh)
{
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai=? and ma_hh<>" . $ma_hh;
    return pdo_query($sql, $ma_loai);
}

function hang_hoa_select_keyword($keyword)
{
    $sql = "SELECT * FROM hang_hoa hh "
        . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
        . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}
function hang_hoa_select_loai_keyword($keyword, $ma_loai)
{
    $sql = "SELECT * FROM hang_hoa hh "
        . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
        . " WHERE ten_hh LIKE ? and ma_loai= ?" . $ma_loai;
    return pdo_query($sql, '%' . $keyword . '%');
}


function get_hh_theo_key($key, $ma_loai)
{
    $sql = "select * from hang_hoa where 1";

    if ($key != "") {
        $sql .= " and ten_hh like '%" . $key . "%'";
    }
    if ($ma_loai > 0) {
        $sql .= " and ma_loai=" . $ma_loai;
    }
}


function tong_so_page($per_page)
{
    $items_per_page = $per_page;
    $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
    $page = ceil((int)$row_count / $items_per_page);
    return $page;
}

function tong_so_sanpham_page($per_page, $ma_loai)
{
    $items_per_page = $per_page;
    $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa WHERE ma_loai=" . $ma_loai);
    $page = ceil((int)$row_count / $items_per_page);
    return $page;
}


function hang_hoa_paginate($per_page, $page)
{
    $items_per_page =  $per_page;
    $current_page = $page;
    $offset = ($current_page - 1) * $items_per_page;
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT " . $items_per_page . " OFFSET " . $offset;
    return pdo_query($sql);
}

function hang_hoa_by_loai_paginate($per_page, $page, $ma_loai)
{
    $items_per_page =  $per_page;
    $current_page = $page;
    $offset = ($current_page - 1) * $items_per_page;
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai=? ORDER BY ma_hh LIMIT " . $items_per_page . " OFFSET " . $offset;
    return pdo_query($sql, $ma_loai);
}

function hang_hoa_select_page()
{
    if (!isset($_SESSION['page_no'])) {
        $_SESSION['page_no'] = 0;
    }
    if (!isset($_SESSION['page_count'])) {
        $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
        $_SESSION['page_count'] = ceil((int)$row_count / 10.0);
    }
    if (!$_SESSION['page_no']) {
        $_SESSION['page_no'] = $_REQUEST['page_no'];
    }
    if ($_SESSION['page_no'] < 0) {
        $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
    }
    if ($_SESSION['page_no'] >= $_SESSION['page_count']) {
        $_SESSION['page_no'] = 0;
    }
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT " . $_SESSION['page_no'] . ", 10";
    return pdo_query($sql);
}
