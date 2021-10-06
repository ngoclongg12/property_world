<?php

include $_SERVER["DOCUMENT_ROOT"] . "/TheGioiBDS/connecting/Ketnoi.php";

if (isset($_GET["page_under"])) {
    $stt = $_GET["page_under"];
} else {
    $stt = 1;
}
$pageRow = 9;
$perRow = $stt * $pageRow - $pageRow;
$totalPage = ceil(mysqli_num_rows(mysqli_query($connect, "SELECT * FROM danhsach_sp WHERE Top = 0")) / $pageRow);
$listPrd = "";
$x = 1;
$y = 2;

for ($i = 1; $i <= $totalPage; $i++) {

    if (isset($_GET["page_under"])) {
        $x = $_GET["page_under"] - 1;
        $y = $_GET["page_under"] + 1;
    }

    $prevPg = '<li class="page-item"><a class="page-link" href="http://localhost/TheGioiBDS/public/TrangChu.php?page_under=' . $x . '" aria-label="Previous"><span aria-hidden="true"><i class="fas fa-angle-left"></i></span></a></li>';
    $listPrd .= '<li class="page-item"><a class="page-link" href="http://localhost/TheGioiBDS/public/TrangChu.php?page_under=' . $i . '">' . $i . '</a></li>';
    $nextPg = '<li class="page-item"><a class="page-link" href="http://localhost/TheGioiBDS/public/TrangChu.php?page_under=' . $y . '" aria-label="Next"><span aria-hidden="true"><i class="fas fa-angle-right"></i></span></a></li>';
}
$sql = "SELECT * FROM danhsach_sp WHERE Top = 0 ORDER BY ID DESC LIMIT $perRow,$pageRow";
$query = mysqli_query($connect, $sql);



$sql1 = "SELECT * FROM danhsach_sp WHERE Top = 1 ORDER BY ID DESC LIMIT 4";
$query1 = mysqli_query($connect, $sql1);

$sql2 = "SELECT * FROM danhsach_sp WHERE Top = 2 ORDER BY ID DESC";
$query2 = mysqli_query($connect, $sql2);

?>

<div class="container list_product mt-3">
    <div class="row">
        <!-- component-list-content -->
        <div class="col-md-8">

            <div class="row row-cols-1">
                <?php
                while ($row1 = mysqli_fetch_array($query1)) {
                ?>
                    <div class="col-md-5 set-product shadow bg-white rounded">
                        <div class="brg-image" style="background-image: url('../img/<?= $row1["Image"] ?>');">
                            <p class="clip-path">Sản phẩm mở bán</p>
                        </div>
                        <h5 class="mt-3"><?= $row1["Name"] ?></h5>
                        <p>187 Hai Bà Trưng, Ngã Ba Võ Thị Sáu, Quận 10, Thành Phố Hồ Chí Minh</p>
                        <div class="row mt-1">
                            <b class="col-4 text-aligncenter">
                                <p> Giá từ </p>
                                <p> <?= $row1["Price"] ?> Triệu/m² </p>
                            </b>
                            <b class="col-4 text-aligncenter pl-2 pr-2">
                                <p class="line-border"> Số căn </p>
                                <p> <?= $row1["Status"] ?> </p>
                            </b>
                            <b class="col-4 text-aligncenter">
                                <p> Diện tích </p>
                                <p> 0 ha </p>
                            </b>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <!-- component-right -->
        <div class="col-md-4 mt-3">
            <h3> Bất động sản <b class="coloraqua">HOT</b> </h3>

            <div class="row component-right">
                <?php
                while ($row2 = mysqli_fetch_array($query2)) {
                ?>
                    <div class="col-5 text-aligncenter hot-left">
                        <img class="smimg fit_img" src="../img/<?= $row2["Image"] ?>" alt="house">
                    </div>
                    <div class="col-7 hot-right">
                        <b class="font11"><?= $row2["Name"] ?></b>
                        <b class="font11 color589623"><?= $row2["Price"] ?> triệu </b>
                        <b>/</b>
                        <b class="font11 color589623">0 m²</b>
                        <p class="font11"><i class="fas fa-map-marker-alt color589623"></i> Lorem ipsum dolor sit amet, consectetur.</p>
                        <p class="font11"><i class="fas fa-user color589623"></i> Lorem ipsum dolor amet.</p>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </div>

    <!-- component-under -->

    <div class="row">
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
    <div style="clear: both;"></div>
</div>
<div class="container mt-5">

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php
                        if(isset($_GET['page_under']) && $_GET['page_under']>1){
                            echo $prevPg;
                        }
                    ?>
                    <?= $listPrd ?>
                    <?php
                        if(isset($_GET['page_under']) && $_GET['page_under']<$totalPage){
                            echo $nextPg;
                        }
                        if(!isset($_GET['page_under'])){
                            echo $nextPg;
                        }
                    ?>

                </ul>
            </nav>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>