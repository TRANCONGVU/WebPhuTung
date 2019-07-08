<div class="container-fluid head">
    <div class="container ">


        <a href="#"><img src="images/google-icon.png" alt=""></a>
        <a href="#"><img src="images/twitter-icon.png" alt=""></a>
        <a href="#"><img src="images/youtube-icon.png" alt=""></a>
        <a href="#"><img src="images/facebook-icon.png" alt=""></a>
    </div>
</div>
<div class="container-fluid">
    <div class="container head2">
        <div class="row">
            <div class="col-md-6 logo">
                <img src="images/logo-1.jpg" alt="">
            </div>
            <div class="col-md-6 d-flex flex-column text-right">
                <div class="head2-top">
                    <i class="far fa-user"></i>
                    <a href="">Đăng ký</a>
                    <i class="fas fa-sign-in-alt"></i>
                    <a href="">Đăng nhập</a>
                    <i class="fas fa-info"></i>
                    <a href="">Hướng dẫn</a>
                    <i class="fas fa-list-alt"></i>
                    <a href="">Bảo mật thông tin</a>

                </div>
                <div class="head2-form">
                    <form>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm">
                                <button class="btn"> <i class="fas fa-search"></i></button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="nav-horizontal container-fluid">
    <div class="nav-horizontal-container container">
        <div class="nav-horizontal-content">
            <ul class="nav-ul-lv-1">
                <li><a href="{{ url('trang-chu') }}"><i class="fas fa-home"></i></a></li>
                <li class="sanpham" style="position : unset">
                    <a href="{{ url('product') }}">giới thiệu<i class="fas fa-caret-down"></i></a>
                </li>
                <li class="sanpham" style="position : unset">
                    <a href="{{ url('product') }}">Sản phẩm<i class="fas fa-caret-down"></i></a>
                </li>
                <li><a href="{{ url('sale') }}">Tin tức sự kiện</a></li>
                <li>
                    <a href="{{ url('bosuutap') }}">hỏi đáp<i class="fas fa-caret-down"></i></a>
                    <ul class="nav-ul-lv-2">
                        <li><a href="#">Bộ sưu tâp 1</a></li>
                        <li><a href="#">Bộ sưu tập 2</a></li>
                        <li><a href="#">Bộ sưu tập 3</a></li>
                    </ul>
                </li>
                <li class="lienhe-led"><a href="{{ url('gioithieu') }}">chính sách thành viên</a></li>
                <li class="lienhe-led">
                  <a href="{{ url('chinh-sach-hoat-dong') }}">chính sách hoạt động <i class="fas fa-caret-down"></i></a>
                  <ul class="nav-ul-lv-2" style="width:280px;">
                      <li><a href="{{ url('quy-dinh-chung') }}">Chính sách & quy định chung</a></li>
                      <li><a href="{{ url('bao-hanh-bao-tri') }}">Chính sách bảo hành bảo trì</a></li>
                      <li><a href="{{ url('bao-mat-thong-tin') }}">Chính sách bảo mật thông tin</a></li>
                      <li><a href="{{ url('van-chuyen') }}">Chính sách vận chuyển giao nhận</a></li>
                      <li><a href="{{ url('thanh-toan') }}">Quy định & hình thức thanh toán</a></li>
                  </ul>
                </li>
                <li class="lienhe-led"><a href="">hệ thống trạm <i class="fas fa-caret-down"></i></a>
                  <ul class="nav-ul-lv-2">
                    <li><a href="{{ url('he-thong-tram-hcm') }}">Tp Hồ Chí Minh</a></li>
                    <li><a href="{{ url('he-thong-tram-hn') }}">Đại lý Hà Nội</a></li>
                  </ul>
                </li>
                <li class="lienhe-led">
                    <a href="{{ url('lien-he') }}">Liên hệ</a>
                </li>
            </ul>
            <div class="menu-mobile-button">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>
</nav>
<script type="text/javascript" src="js/nav-horizontal.js"></script>

<section class="menu-mobile">
    <div class="menu-mobile-bg"></div>
    <div class="menu-mobile-box">
        <div class="menu-mobile-info">

        </div>
        <div class="menu-mobile-content">
            <div class="menu-left">
                <div class="menu-left-title">
                    <h3>Menu</h3>
                </div>
                <div class="menu-left-content">

                    <ul class="menu-left-ul-lv-1">
                        <li><a href="{{ url('trang-chu') }}">Trang chủ</a></li>
                        <li><a href="{{ url('gioithieu') }}">Giới thiệu</a></li>
                        <li><a href="{{ url('product') }}">Sản Phẩm</a></li>
                        <li><a href="{{ url('khuyenmai') }}">Khuyến mãi</a></li>
                        <li><a href="{{ url('lienhe') }}">Liên hệ</a></li>
                        <li><a href="{{ url('huongdan') }}">Hướng Dẫn</a></li>
                        <li><a href="{{ url('tintuc') }}">Tin Tức</a></li>

                    </ul>

                </div> <!-- menu-left-content -->
            </div> <!-- menu-left -->
            <script type="text/javascript" src="js/menu-left-js.js"></script>
        </div>
    </div>
    <script type="text/javascript" src="js/menu-mobile.js"></script>
</section>
