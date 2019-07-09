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
                <img src="images/logoTN.png" alt="">
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
                    <a href="{{ url('gioithieu') }}">giới thiệu</a>
                    <ul class="nav-ul-lv-2">
                        <li><a href="#">Lịch sử hình thành công ty</a></li>
                        <li><a href="#">Sơ đồ tổ chức</a></li>
                        <li><a href="#">Các lĩnh vực xã hội</a></li>
                    </ul>
                </li>
                <li class="sanpham" style="position : unset">
                    <a href="{{ url('sanpham') }}">Sản phẩm</a>
                </li>
                <li>
                    <a href="{{ url('sale') }}">Tin tức sự kiện</a>
                    <ul class="nav-ul-lv-2">
                        <li><a href="#">Khuyến mãi</a></li>
                        <li><a href="#">Tin tư vấn</a></li>
                        <li><a href="#">Tin công ty</a></li>
                        <li><a href="#">Sơn xe đạp</a></li>
                        <li><a href="#">Sự kiện</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('bosuutap') }}">hỏi đáp</a>
                    <ul class="nav-ul-lv-2">
                        <li><a href="#">Câu hỏi chung</a></li>
                        <li><a href="#">Giao hàng và hoàn trả</a></li>
                        <li><a href="#">Những câu hỏi thường gặp</a></li>
                        <li><a href="#">Quy tắc kiểm tra hàng lỗi</a></li>
                    </ul>
                </li>
                <li class="lienhe-led"><a href="{{ url('gioithieu') }}">chính sách thành viên</a></li>
                <li class="lienhe-led"><a href="{ { url('gioithieu') }}">chính sách hoạt động</a></li>
                <li class="lienhe-led"><a href="{{ url('gioithieu') }}">hệ thống trạm</a></li>
                <li class="lienhe-led">
                    <a href="{{ url('lienhe') }}">Liên hệ</a>
                    <ul class="nav-ul-lv-2">
                        <li><a href="{{ url('lienhe') }}">chính sách hoạt động</a></li>
                        <li><a href="{{ url('cauhoi') }}">Hệ thống trạm</a></li>
                        <li><a href="{{ url('gioithieu') }}">Liên hệ</a></li>
                    </ul>

                </li>
            </ul>
            <div class="menu-mobile2">
                <div class="menu-mobile-button">
                    <i class="fas fa-bars"></i>
                </div>

                <div class="head2-form head2-form-mobile">
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
