<?php
session_start();
ob_start();
include("class/classsql.php");
$p = new mysql();
?>
<?php
if (isset($_SESSION['id']) && isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['tensv']) && isset($_SESSION['phanquyen'])) {
    include("ham_dangnhap.php");
    $q = new login1();
    if ($q->confirmloginGV($_SESSION['id'], $_SESSION['user'], $_SESSION['pass'], $_SESSION['tensv'], $_SESSION['phanquyen']) == 1) {

        header('location:login.php');
    } else {
    }
} else {
    header('location:login.php');
}
$lop = 0;
$layid = 0;
if (isset($_REQUEST['id'])) {
    $layid = $_REQUEST['id'];
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teacher</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <div class="page">
        <!-- Main Navbar-->
        <header class="header z-index-50">

        </header>
        <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <nav class="side-navbar z-index-40">
                <!-- Sidebar Header-->
                <div class="sidebar-header d-flex align-items-center py-4 px-3"><img class="avatar shadow-0 img-fluid rounded-circle" src="img/Logo_IUH.png" alt="...">
                    <div class="ms-3 title">
                        <h1 class="h4 mb-2"><?php echo $_SESSION['tensv']; ?></h1>
                        <p class="text-sm text-gray-500 fw-light mb-0 lh-1">Gi???ng vi??n tr?????ng DHCN Tp.HCM</p>
                    </div>
                </div>
                <!-- Sidebar Navidation Menus--><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Main</span>
                <ul class="list-unstyled py-4">
                    <li class="sidebar-item active"><a class="sidebar-link" href="../trangWeb/index.html">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#real-estate-1"> </use>
                            </svg>Trang ch???</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdownm" data-bs-toggle="collapse">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#browser-window-1"> </use>
                            </svg>L???p h???c ph???n</a>
                        <ul class="collapse list-unstyled " id="exampledropdownDropdownm">
                            <li><a class="sidebar-link" href="danhSachLHP.php">Danh s??ch l???p h???c</a></li>
                            <li><a class="sidebar-link" href="taoLHP.php">T???o l???p h???c ph???n</a></li>
                            <li><a class="sidebar-link" href="chopLopTruong.php">Ch???p l???p tr?????ng</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdow" data-bs-toggle="collapse">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#sales-up-1"> </use>
                            </svg>??i???m danh</a>
                        <ul class="collapse list-unstyled " id="exampledropdownDropdow">
                            <li><a class="sidebar-link" href="taoPass.php">T???o pass ??i???m danh</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#portfolio-grid-1"> </use>
                            </svg>Ho???t ?????ng ngo???i kh??a</a>
                        <ul class="collapse list-unstyled " id="exampledropdownDropdown">
                            <li><a class="sidebar-link" href="addHDNK.php">????ng ho???t ?????ng ngo???i kh??a</a></li>
                            <li><a class="sidebar-link" href="danhSachHDNK.php">Danh s??ch ho???t ?????ng ngo???i kh??a</a></li>
                            <li><a class="sidebar-link" href="xacnhanBC.php">X??c nh???n b??o c??o</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdownmm" data-bs-toggle="collapse">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#survey-1"> </use>
                            </svg>T???ng h???p</a>
                        <ul class="collapse list-unstyled " id="exampledropdownDropdownmm">
                            <li><a class="sidebar-link" href="tongHopDiemDanh.php">T???ng h???p ??i???m danh</a></li>
                            <li><a class="sidebar-link" href="tongHopTichCuc.php">T???ng h???p t??ch c???c </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="login.php">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#disable-1"> </use>
                            </svg>Login page </a></li>
            </nav>
            <div class="content-inner w-100">
                <!-- Page Header-->
                <header class="bg-white shadow-sm px-4 py-3 z-index-20">
                    <div class="container-fluid px-0">
                        <h2 class="mb-0 p-1">Qu???n l?? s??? t??ch c???c</h2>
                    </div>
                </header>
                <!-- Breadcrumb-->
                <div class="bg-white">
                    <div class="container-fluid">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 py-3">
                                <li class="breadcrumb-item"><a class="fw-light" href="homeGV.php">Trang ch???</a></li>
                                <li class="breadcrumb-item active fw-light" aria-current="page">Ch???n l???p tr?????ng</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <section class="forms">
                    <div class="container-fluid">
                        <!-- Form Elements -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                                        </div>
                                    </div>
                                    <h3 class="h4 mb-0">Ch???n l???p tr?????ng</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post" enctype="application/x-www-form-urlencoded" class="form-horizontal" id="#">
                                        <div class="row">
                                            <label class="col-sm-3 form-label">Ch???n l???p h???c ph???n</label>
                                            <div class="col-sm-9">

                                                <div class="col-sm-9">
                                                    <?php

                                                    $p->loaddslop("select maLHP,tenLHP from lophocphan order by maLHP ");
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="nut" type="submit" class="btn btn-primary" id="nut" value="Ch???n">
                                        <?php
                                        if (isset($_POST['nut']))
                                            switch ($_POST['nut']) {
                                                case 'Ch???n': {
                                                        if (isset($_REQUEST['lop']))
                                                            $lop = $_REQUEST['lop'];
                                                    }
                                                    break;
                                                case 'Ch???n l??m l???p tr?????ng': {

                                                        if (isset($layid)) {
                                                            if ($layid > 0) {
                                                                if ($p->themxoasua("UPDATE taikhoan SET phanquyen = '3' WHERE idSV = '$layid'") == 1) {

                                                                    echo 'chon thanh cong';
                                                                    header("refresh:2 url='homeGV.php'");
                                                                } else {
                                                                    echo 'ch???n th???t b???i';
                                                                }
                                                            } else {
                                                                echo 'b???n ch??a ch???n l???p tr?????ng';
                                                            }
                                                        }
                                                    }
                                                    break;
                                                case 'Thu h???i quy???n l???p tr?????ng': {
                                                        if (isset($layid)) {
                                                            if ($layid > 0) {
                                                                if ($p->themxoasua("UPDATE taikhoan SET phanquyen = '2' WHERE idSV = '$layid'") == 1) {

                                                                    echo 'thu h???i quy???n th??nh c??ng.';
                                                                } else {
                                                                    echo 'thu h???i th???t b???i.';
                                                                }
                                                            }
                                                        }
                                                    }
                                                    break;
                                            }

                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="tables">
                    <div class="container-fluid">
                        <div class="row gy-4">

                            <div class="col-lg-12">
                                <div class="card mb-0">
                                    <div class="card-header">
                                        <div class="card-close">
                                            <div class="dropdown">
                                                <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                                            </div>
                                        </div>
                                        <h3 class="h4 mb-0">Danh s??ch sinh vi??n</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">

                                            <?php

                                            if (isset($_REQUEST['id'])) {

                                                $q->loaddssvlop_chonlttk("select tensv, idsv from taikhoan where idsv='$layid'");
                                            } else {

                                                $q->loaddssvlop_chonlt("select TenSV, ID from sinhvien where MaLHP='$lop'");
                                            }

                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="tables">
                    <div class="container-fluid">
                        <div class="row gy-4">

                            <div class="col-lg-12">
                                <div class="card mb-0">
                                    <div class="card-header">
                                        <div class="card-close">
                                            <div class="dropdown">
                                                <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                                            </div>
                                        </div>
                                        <h3 class="h4 mb-0">Danh s??ch sinh vi??n ???? ???????c ch???n l??m l???p tr?????ng:</h3>
                                        <?php

                                        $q->loaddssvloptruong("select tensv, idsv from taikhoan where phanquyen='3'");
                                        if (isset($_REQUEST['id'])) {

                                            $q->loaddssvlop_xoalttk("select tensv, idsv from taikhoan where idsv='$layid' ");
                                        }



                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Page Footer-->
                <footer class="position-absolute bottom-0 bg-darkBlue text-white text-center py-3 w-100 text-xs" id="footer">
                    <div class="container-fluid">
                        <div class="row gy-2">
                            <div class="col-sm-6 text-sm-start">
                                <p class="mb-0">Seven Team &copy; 2022</p>
                            </div>
                            <div class="col-sm-6 text-sm-end">
                                <p class="mb-0">Design by <a href="https://bootstrapious.com/p/admin-template" class="text-white text-decoration-none">Lynn</a></p>
                                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>