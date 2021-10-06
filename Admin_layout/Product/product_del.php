<?php

include $_SERVER["DOCUMENT_ROOT"] . "/TheGioiBDS/connecting/Ketnoi.php";

$id_sp = $_GET["id_sp"];

$sql = "DELETE FROM danhsach_sp WHERE ID='$id_sp'";
$query = mysqli_query($connect, $sql);

header('location: http://localhost/TheGioiBDS/public/TrangQuanTri.php?Admin=product_show');

?>

