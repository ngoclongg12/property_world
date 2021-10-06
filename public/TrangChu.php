<?php

// $contents = 



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property World</title>
    <?php
    include "../connecting/head.php";
    ?>

</head>

<body>

    <?php

    include "../component/Header.php";

    if (isset($_GET['component']) && $_GET['component']='filter') {
        include_once "../component/Content_Body/filter.php";
    }else{
        include_once "../component/ListContent.php";
    }
    
    include "../component/Footer.php";
    include "../connecting/script.php";

    ?>

</body>

</html>