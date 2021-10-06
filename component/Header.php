<header>
    <!-- header-1 -->
    <div class="container header1">
        <div class="row">
            <nav class="row">
                <?php
                session_start();

                if (isset($_SESSION["hoTen"])) {
                    $hoTen = $_SESSION["hoTen"];
                ?>
                    <div class="col-md-auto mgl-25">
                        <a class="options" href="#">
                            Xin chào, <?= $hoTen ?> ▼
                        </a>
                        <div class="option-logout-toggle">
                            <a href="../login/Dangxuat.php">Đăng xuất</a>
                            <a href="../login/Doimatkhau.php">Đổi mật khẩu</a>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <div class="col-md-auto mgl-25">
                        <a class="w-100" href="../login/Dangki.php">Đăng ký</a>
                    </div>
                    <div class="col-md-auto mgl-25">
                        <a href="../login/Dangnhap.php">Đăng nhập</a>
                    </div>
                <?php
                }
                ?>
                <div class="col-md-auto mgl-25">
                    <a href="#">Tin tức</a>
                </div>
                <div class="col-md-auto mgl-25">
                    <a href="#">Tuyển dụng</a>
                </div>
                <div class="col-md-auto">
                    <a href="#">Việt Nam</a>
                </div>
            </nav>

        </div>

    </div>

    <!-- header-2 -->
    <div class="container header2">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <img class="logo img-logo fit_img" src="../img/logo.png" alt="logo">
                </div>
            </div>
            <div class="col-md-6">

                <form class="input-group mb-4 border rounded-pill p-1 in-search" action="http://localhost/TheGioiBDS/public/TrangChu.php?component=filter" method="post">
                    <input name="search" type="search" placeholder="searching..." class="form-control bg-none border-0">
                    <div class="input-group-append border-0">
                        <button name="submit" id="button-addon3" type="submit" class="btn btn-link text-success"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- header-3 -->
    <div class="container header3">
        <div class="row">
            <div class="tog-bar">
                <i class="fas fa-bars"></i>
            </div>
            <a style="color: black;" href="../public/TrangChu.php"><i class="fas fa-home"></i></a>
            <nav class="house-world">
                <a href="#">Nhà đất Việt Nam</a>
                <a href="#">Nhà đất Mỹ</a>
                <a href="#">Nhà đất Úc</a>
                <a href="#">Nhà đất Canada</a>
                <a href="#">Nhà đất Pháp</a>
                <a href="#">Nhà đất Nhật Bản</a>
                <a href="#">Nhà đất Hàn Quốc</a>
                <a href="#">Nhà đất Trung Quốc</a>
            </nav>

        </div>
    </div>

</header>