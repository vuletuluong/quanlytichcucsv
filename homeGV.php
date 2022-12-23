
<?php
session_start();
include('class/classdangnhap.php');
$p=new login();

if(isset($_SESSION['id'])&&isset($_SESSION['user'])&&isset($_SESSION['pass'])&&isset($_SESSION['tensv'])&&isset($_SESSION['phanquyen']))
{
	include("ham_dangnhap.php");
	$q=new login1();
	if($q->confirmloginGV($_SESSION['id'],$_SESSION['user'],$_SESSION['pass'],$_SESSION['tensv'],$_SESSION['phanquyen'])==1)
	
	{
		
		header('location:login.php');
	}
	else 
	{
		
		
	}
}
else
{
		header('location:login.php');
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
  <!-- link css lớp học phần -->
  <link rel="stylesheet" href="css/lophocphan.css">
</head>

<body>
  <div class="page">
    <!-- Main Navbar-->
    <header class="header z-index-50">
      <nav class="navbar py-3 px-0 shadow-sm text-white position-relative">
        <!-- Search Box-->
        <div class="search-box shadow-sm">
          <button class="dismiss d-flex align-items-center">
            <svg class="svg-icon svg-icon-heavy">
              <use xlink:href="#close-1"> </use>
            </svg>
          </button>
          <form id="searchForm" action="#" role="search">
            <input class="form-control shadow-0" type="text" placeholder="What are you looking for...">
          </form>
        </div>
        <div class="container-fluid w-100">
          <div class="navbar-holder d-flex align-items-center justify-content-between w-100">
            <!-- Navbar Header-->
            <div class="navbar-header">
              <!-- Navbar Brand --><a class="navbar-brand d-none d-sm-inline-block" href="#">
                <div class="brand-text d-none d-lg-inline-block"><span>Teacher </span><strong>Dashboard</strong></div>
                <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div>
              </a>
              <!-- Toggle Button--><a class="menu-btn active" id="toggle-btn"
                href="#"><span></span><span></span><span></span></a>
            </div>
            <!-- Navbar Menu -->
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
              <!-- Search-->
              <li class="nav-item d-flex align-items-center"><a id="search" href="#">
                  <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                    <use xlink:href="#find-1"> </use>
                  </svg></a></li>
              <!-- Logout    -->
              <li class="nav-item"><a class="nav-link text-white" href="login.php"> <span
                    class="d-none d-sm-inline">Logout</span>
                  <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                    <use xlink:href="#security-1"> </use>
                  </svg></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="page-content d-flex align-items-stretch">
      <!-- Side Navbar -->
      <nav class="side-navbar z-index-40">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center py-4 px-3"><img
            class="avatar shadow-0 img-fluid rounded-circle" src="img/Logo_IUH.png" alt="...">
          <div class="ms-3 title">
            <h1 class="h4 mb-2"><?php echo'Phan Thị Bảo Trân ' ; ?></h1>
            <p class="text-sm text-gray-500 fw-light mb-0 lh-1">Giảng viên trường DHCN Tp.HCM</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span
          class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Main</span>
        <ul class="list-unstyled py-4">
          <li class="sidebar-item active"><a class="sidebar-link" href="../index.html">
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#real-estate-1"> </use>
              </svg>Trang chủ</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdownm" data-bs-toggle="collapse">
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#browser-window-1"> </use>
              </svg>Lớp học phần</a>
            <ul class="collapse list-unstyled " id="exampledropdownDropdownm">
              <li><a class="sidebar-link" href="danhSachLHP.php">Danh sách lớp học</a></li>
              <li><a class="sidebar-link" href="taoLHP.php">Tạo lớp học phần</a></li>
              <li><a class="sidebar-link" href="chopLopTruong.php">Chọp lớp trưởng</a></li>
            </ul>
          </li>

          <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdow" data-bs-toggle="collapse">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#sales-up-1"> </use>
            </svg>Điểm danh</a>
          <ul class="collapse list-unstyled " id="exampledropdownDropdow">
            <li><a class="sidebar-link" href="taoPass.php">Tạo pass điểm danh</a></li>
          </ul>
        </li>
          
          <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse">
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#portfolio-grid-1"> </use>
              </svg>Hoạt động ngoại khóa</a>
            <ul class="collapse list-unstyled " id="exampledropdownDropdown">
              <li><a class="sidebar-link" href="addHDNK.php">Đăng hoạt động ngoại khóa</a></li>
              <li><a class="sidebar-link" href="danhSachHDNK.php">Danh sách hoạt động ngoại khóa</a></li>
              <li><a class="sidebar-link" href="xacnhanBC.php">Xác nhận báo cáo</a></li>
            </ul>
          </li>
          <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdownmm" data-bs-toggle="collapse">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#survey-1"> </use>
            </svg>Tổng hợp</a>
          <ul class="collapse list-unstyled " id="exampledropdownDropdownmm">
            <li><a class="sidebar-link" href="tongHopDiemDanh.php">Tổng hợp điểm danh</a></li>
            <li><a class="sidebar-link" href="tongHopTichCuc.php">Tổng hợp tích cực </a></li>
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
            <h2 class="mb-0 p-1">Quản lý sự tích cực</h2>
          </div>
        </header>
        <!-- Thêm lớp học phần ở đây nhé-->
        <section class="pb-0">
          <div class="container-fluid">
            <div class="card mb-0">
              <div class="card-body">
                <div class="row gx-5 bg-white">
                  <div class="main">
                    <div class="item-main noiBat">
                        
                        <div class="noiBat_main">
                             <?php
							 $p->loadsanpham("select * from lophocphan")
							 
							 ?>
        
                        </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="pb-0">
          <div class="container-fluid">
            <!-- Project-->
            
            <!-- Project-->
            
            <!-- Project-->
            
                      <?php
		
		
		  		$sql="select * from hoatdongngoaikhoa ";
				
					$p->load_hdnk($sql);
		  ?>

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
                <p class="mb-0">Design by <a href="https://bootstrapious.com/p/admin-template"
                    class="text-white text-decoration-none">Lynn</a></p>
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
  <script src="js/charts-home.js"></script>
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
      ajax.onload = function (e) {
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>