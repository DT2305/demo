<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">
        <img src="./img/CTUT_logo.png" alt="CTUT Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><strong>CTUT</strong></span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index3.html" class="nav-link">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Liên hệ</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Danh sách các ngành học</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li>
              <button type="button" class="btn " data-toggle="modal" data-target="#modal-default">
                  Launch Default Modal
                </button>
              </li>
              <li><a href="#" class="dropdown-item">Khoa học máy tính</a></li>
              <li><a href="#" class="dropdown-item">Khoa học dữ liệu</a></li>
              <li><a href="#" class="dropdown-item">Hệ thống thông tin</a></li>
              <li><a href="#" class="dropdown-item">Kỹ thuật phần mềm</a></li>
              <li><a href="#" class="dropdown-item">Kỹ thuật hệ thống công nghiệp</a></li>
              <li><a href="#" class="dropdown-item">Quản lý công nghiệp</a></li>
              <li><a href="#" class="dropdown-item">Logistics và quản lý chuỗi cung ứng</a></li>
              <li><a href="#" class="dropdown-item">Quản lý xây dựng</a></li>
              <li><a href="#" class="dropdown-item">Công nghệ kỹ thuật công trình xây dựng</a></li>
              <li><a href="#" class="dropdown-item">Công nghệ kỹ thuật cơ điện tử</a></li>
              <li><a href="#" class="dropdown-item">Công nghệ kỹ thuật điện, điện tử</a></li>
              <li><a href="#" class="dropdown-item">Công nghệ kỹ thuật điều khiển và tự động hóa</a></li>
              <li><a href="#" class="dropdown-item">Công nghệ thực phẩm</a></li>
              <li><a href="#" class="dropdown-item">Công nghệ sinh học</a></li>


              <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                  </li>

                  <!-- Level three dropdown-->
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                  <!-- End Level three -->

                  <li><a href="#" class="dropdown-item">level 2</a></li>
                  <li><a href="#" class="dropdown-item">level 2</a></li>
                </ul>
              </li>
              <!-- End Level two -->
            </ul>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <!-- <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div> -->

      @include('candidates.includes.navbar-right')
      
    </div>
  </nav>
  <!-- /.navbar -->