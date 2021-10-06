<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/TheGioiBDS/connecting/Ketnoi.php";
$sql = "SELECT * FROM danhsach_sp WHERE Top = 2 LIMIT 6";
$query = mysqli_query($connect, $sql);
?>

<div class="container news mt-5">
    <h5>TIN TỨC BẤT ĐỘNG SẢN</h5>
    <div class="slide-news mt-3">

    <?php
    while($row = mysqli_fetch_array($query)){
    ?>
        <div class="back-img-news" style="background-image: url('../img/<?= $row['Image'] ?>');">
            <div>
                <b class="mt-2 colorw">Giá nhà đất hôm nay</b>
                <p class="font colorw"> 
                    It is a long established fact that a reader will be
                    distracted by the readable 
                </p>
            </div>
        </div>
    <?php
    }
    ?>
    </div>
</div>