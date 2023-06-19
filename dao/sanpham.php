<?php

function insert_sanpham($tensp, $giasp, $img, $mota, $iddm)
{
    $sql = "insert into sanpham(name, price, img, mota,iddm) values ('$tensp', $giasp, '$img','$mota', $iddm)";
    pdo_execute($sql);
}

function  update_sanpham($id, $tensp, $giasp, $mota, $iddm, $filename)
{
    if ($filename != "") {
        $sql = "update sanpham set name='$tensp', price=$giasp, img='$filename', mota='$mota', iddm=$iddm  where id=" . $id;
    } else {
        $sql = "update sanpham set name='$tensp', price=$giasp, mota='$mota', iddm=$iddm  where id=" . $id;
    }
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "delete from sanpham where id =" . $id;
    pdo_query($sql);
}

function get_all_sanpham($kyw, $iddm)
{
    $sql = "select * from sanpham where 1";

    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm=" . $iddm;
    }


    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function get_all_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,8";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function get_all_sanpham_by_danhmuc($iddm, $kyw)
{
    $sql = "select * from hanghoa where 1";

    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm=" . $iddm;
    }


    $sql .= " order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function get_top_sanpham()
{
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,4";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function get_one_sanpham($id)
{
    $sql = "select *  from sanpham where id =" . $id;
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}
function get_sanpham_cungloai($id, $iddm)
{
    $sql = "select *  from sanpham where iddm='.$iddm.' and id<>" . $id;
    $getSanPhamCungLoai = pdo_query($sql);
    return $getSanPhamCungLoai;
}
