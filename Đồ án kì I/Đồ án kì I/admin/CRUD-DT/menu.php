  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <?php if($_SESSION['level'] == 1) {
        ?>
          <div class="sidebar-brand-text mx-3"><span>Xin chào admin</span></div>
        <?php 
        }else{
        ?>
          <div class="sidebar-brand-text mx-3"><span>Chào mừng </span></div>
        <?php 
        }
        ?>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">
    <i class="fas fa-home"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Đơn hàng
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-clipboard-list"></i>
          <span>Đơn hàng</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Quản lý đơn hàng:</h6>
            <a class="collapse-item" href="../danhsachdonhang.php">Danh sách đơn hàng</a>
          </div>
        </div>
      </li>

      <!-- Heading -->
      <div class="sidebar-heading">
        Sản phẩm
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-mobile-alt"></i>
          <span>Sản phẩm</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Quản lý sản phẩm:</h6>
            <a class="collapse-item" href="../danhsachsanpham.php">Danh sách điện thoại</a>
            <a class="collapse-item" href="../danhsachphukien.php">Danh sách phụ kiện</a>
          </div>
        </div>
      </li>

      <!-- Heading -->
      <div class="sidebar-heading">
        Tài khoản
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-user-shield"></i>
          <span>Tài khoản</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Quản lý tài khoản:</h6>
            <?php 
              if($_SESSION['level'] == 1){
            ?>
              <a class="collapse-item" href="../danhsachtaikhoan.php">Tài khoản quản trị</a>
            <?php 
            }else{
            ?>
              <a class="collapse-item" onclick="tb();" href="#">Tài khoản quản trị</a>
            <?php 
            }
            ?>
            <a class="collapse-item" href="../danhsachtk_khachhang.php">Tài khoản khách hàng</a>
            <script type="text/javascript">
              function tb(){
                alert("Bạn không đủ thẩm quyền xem chức năng này");
              }
            </script>
          </div>
        </div>
      </li>

      <!-- Heading -->
      <div class="sidebar-heading">
        Tin tức
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tintuc" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-mobile-alt"></i>
          <span>Tin tức</span>
        </a>
        <div id="tintuc" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Quản lý tin tức:</h6>
            <a class="collapse-item" href="../danhsachtintuc.php">Danh sách tin tức</a>
          </div>
        </div>
      </li>

      <div class="sidebar-heading">
        Kho hàng
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#khohang" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-mobile-alt"></i>
          <span>Kho hàng</span>
        </a>
        <div id="khohang" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Quản lý kho hàng:</h6>
            <a class="collapse-item" href="../khohang.php">Kho hàng điện thoại</a>
            <a class="collapse-item" href="../khohangpk.php">Kho hàng phụ kiện</a>
          </div>
        </div>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
          <?php 
            $id = $_SESSION['id'];
            include('../../connect.php');
            $dulieu = "select * from thong_tin_tai_khoan where id = $id";
            $sql = mysqli_query($con,$dulieu);
            $tt = mysqli_fetch_assoc($sql);
            $ktra = mysqli_num_rows($sql);
          ?>
            <!--Dao diện người dùng -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$_SESSION['user'];?></span>
                <?php 
                  if(isset($tt) && $tt['avatar'] != ""){
                ?>
                  <img class="img-profile rounded-circle" src="../../images/<?=$tt['avatar']?>">
                <?php 
                }else{
                ?>
                    <img class="img-profile rounded-circle" src="https://www.vietravel.com/Images/no-image-available.jpg">
                <?php 
                }
                ?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../thongtintaikhoan.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Thông tin tài khoản
                </a>
                <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="../doimatkhau.php">
                  <i class="fas fa-exchange-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Đổi mật khẩu
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Đăng xuất
                </a>
              </div>
            </li>

          </ul>

        </nav>