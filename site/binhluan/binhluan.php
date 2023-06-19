<?php
session_start();
include "../../dao/pdo.php";
include "../../dao/binh-luan.php";

$ma_hh = $_REQUEST['mahh'];
$listBinhLuan = binh_luan_select_by_hang_hoa($ma_hh);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../content/css/bootstrap.min.css">

</head>

<body>




    <table class="table">

        <?php
        foreach ($listBinhLuan as $bl) {
            extract($bl);
            echo ' <tr>
                        <th>' . $ma_kh . '</th>
                        <td>' . $noi_dung . '</td>
                        <td>' . $ngay_bl . '</td>
                    </tr>';
        }
        ?>

    </table>


    <?php

    if (isset($_POST['send']) && $_POST['send']) {
        $noi_dung = $_POST['noi_dung'];
        $ma_hh = $_POST['ma_hh'];
        $ma_kh = $_SESSION['kh']['ma_kh'];
        $ngay_bl = date("Y/m/d");


        binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    ?>


    <?php if (isset($_SESSION['kh']) && is_array($_SESSION['kh'])) : ?>

        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="d-flex gap-2">
            <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>">
            <input type="text" class="form-control" placeholder="review about this product ..." name="noi_dung">
            <input type="submit" value="Send" class="btn btn-primary" name="send">
        </form>
    <?php endif; ?>

    <?php if (!isset($_SESSION['kh']) || !is_array($_SESSION['kh'])) : ?>
        <h5 class="text-center">Đăng nhập để bình luận</h5>
    <?php endif; ?>


    <script src="../../content/js/bootstrap.bundle.min.js"></script>
</body>

</html>