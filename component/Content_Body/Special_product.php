<?php

include $_SERVER["DOCUMENT_ROOT"] . "/TheGioiBDS/connecting/Ketnoi.php";

$sql = "SELECT * FROM danhsach_sp LIMIT 12";
$query = mysqli_query($connect, $sql);

?>

<div class="container">
    <!-- text -->
    <p class="gray mt-5">Nhà đất Việt Nam</p>
    <p class="bolder font25">Bất động sản Việt Nam</p>
    <p class="gray">Hiện có khoảng 20.000 bất động sản</p>

    <!-- slider-product -->
    <div class="slider-product">
        <!-- 
        <button class="prev-slick" ><i class="fas fa-angle-left"></i></button>
        <button class="next-slick" ><i class="fas fa-angle-right"></i></button> 
    -->
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <div>
                <div class="methodslide set-method" style="background-image: url('../img/<?= $row['Image'] ?>');">
                    <p></p>
                    <p class="bolder"><?= $row["Name"] ?></p>
                </div>
            </div>

            <div>
                <div class="methodslide method23 mb-2" style="background-image: url('../img/<?= $row['Image'] ?>');">
                    <p></p>
                    <p class="bolder"><?= $row["Name"] ?></p>
                </div>
                <div class="methodslide method23" style="background-image: url('../img/<?= $row['Image'] ?>');">
                    <p></p>
                    <p class="bolder"><?= $row["Name"] ?></p>
                </div>
            </div>
            <div>
                <div class="methodslide method23 mb-2" style="background-image: url('../img/<?= $row['Image'] ?>');">
                    <p></p>
                    <p class="bolder"><?= $row["Name"] ?></p>
                </div>
                <div class="methodslide method23" style="background-image: url('../img/<?= $row['Image'] ?>');">
                    <p></p>
                    <p class="bolder"><?= $row["Name"] ?></p>
                </div>
            </div>

            <div>
                <div class="methodslide set-method" style="background-image: url('../img/<?= $row['Image'] ?>');">
                    <p></p>
                    <p class="bolder"><?= $row["Name"] ?></p>
                </div>
            </div>

        <?php
        }
        ?>
    </div>

    <div style="clear: both;"></div>

    <?php include_once "../component/Content_Body/Search.php" ?>

    <div style="clear: both;"></div>

    <div class="container">
        <div class="set_fullwidth row">
            <div class="col-md-8"></div>
            <div class="col-md-4 btn text-aligncenter">
                <button class="btn btn-success btn-join-now">
                    THAM GIA NGAY
                    <i class="far fa-angle-right font45"></i>
                </button>
            </div>
        </div>
    </div>

</div>