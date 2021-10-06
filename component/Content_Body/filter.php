<?php
include $_SERVER["DOCUMENT_ROOT"] . "/TheGioiBDS/connecting/Ketnoi.php";

if (isset($_POST["search"])) {
    $text = $_POST["search"];
}
if (!isset($_POST["search"])) {
    $text = $_GET["text"];
}

$textFix = trim($text);
$arr_textFix = explode(" ", $textFix);
$textFix = implode("%", $arr_textFix);
$textFix = "%" . $textFix . "%";

// print_r($query) ;
if (isset($_GET["page_filter"])) {
    $stt = $_GET["page_filter"];
} else {
    $stt = 1;
}
$pageRow = 3;
$perRow = $stt * $pageRow - $pageRow;
$totalPage = ceil(mysqli_num_rows(mysqli_query($connect, "SELECT * FROM danhsach_sp WHERE Name LIKE ('$textFix')")) / $pageRow);
$listPrd = "";
$x = 1;
$y = 2;

for ($i = 1; $i <= $totalPage; $i++) {

    if (isset($_GET["page_filter"])) {
        $x = $_GET["page_filter"] - 1;
        $y = $_GET["page_filter"] + 1;
    }

    $prevPg = '<li class="page-item"><a class="page-link" href="http://localhost/TheGioiBDS/public/TrangChu.php?component=filter&text=' . $text . '&page_filter=' . $x . '" aria-label="Previous"><span aria-hidden="true"><i class="fas fa-angle-left"></i></span></a></li>';
    $listPrd .= '<li class="page-item"><a class="page-link" href="http://localhost/TheGioiBDS/public/TrangChu.php?component=filter&text=' . $text . '&page_filter=' . $i . '">' . $i . '</a></li>';
    $nextPg = '<li class="page-item"><a class="page-link" href="http://localhost/TheGioiBDS/public/TrangChu.php?component=filter&text=' . $text . '&page_filter=' . $y . '" aria-label="Next"><span aria-hidden="true"><i class="fas fa-angle-right"></i></span></a></li>';
    // echo $textFix;
}
$sql = "SELECT * FROM danhsach_sp WHERE Name LIKE ('$textFix') ORDER BY ID ASC LIMIT $perRow,$pageRow";
$query = mysqli_query($connect, $sql);

?>
<div class="container">
    <div class="row" style="background-color: rgb(58, 196, 23);">
        <h4 style="line-height: 40px; padding-left: 15px">kết quả của từ khoá: <?= $text ?>,</h4>

    </div>
    <div class="row pt-4">
        <?php
        if (mysqli_num_rows($query) == 0) {
            echo "Không có sản phẩm bạn muốn tìm kiếm";
        }
        ?>
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-10 set-product shadow bg-white rounded">
                        <div class="brg-image" style="background-image: url('../img/<?= $row["Image"] ?>');">
                            <p class="clip-path">Sản phẩm mở bán</p>
                        </div>
                        <h5 class="mt-3"><?= $row["Name"] ?></h5>
                        <p>187 Hai Bà Trưng, Ngã Ba Võ Thị Sáu, Quận 10, Thành Phố Hồ Chí Minh</p>
                        <div class="row mt-1">
                            <b class="col-4 text-aligncenter">
                                <p> Giá từ </p>
                                <p><?= $row["Price"] ?> ₫</p>
                            </b>
                            <b class="col-4 text-aligncenter pl-2 pr-2">
                                <p class="line-border"> Số căn </p>
                                <p><?= $row["Status"] ?></p>
                            </b>
                            <b class="col-4 text-aligncenter">
                                <p> Diện tích </p>
                                <p> 0 ha </p>
                            </b>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>

    </div>
</div>
<div class="container mt-5">

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php
                    if (isset($_GET['page_filter']) && $_GET['page_filter'] > 1) {
                        echo $prevPg;
                    }
                    ?>
                    <?= $listPrd ?>
                    <?php
                    if (isset($_GET['page_filter']) && $_GET['page_filter'] < $totalPage) {
                        echo $nextPg;
                    }
                    if (!isset($_GET['page_filter']) && mysqli_num_rows($query) > 1) {
                        echo $nextPg;
                    }
                    ?>

                </ul>
            </nav>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>