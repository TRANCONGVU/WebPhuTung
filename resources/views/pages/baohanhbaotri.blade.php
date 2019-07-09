@extends('master-layout')
@section('content')
@include('banner')
<div class="main-page">
    <div class="container">
        <div class="row">
            {{-- Tim kiem nang cao --}}
            <div class="col-lg-3 offset-lg-1">
                @include('pages.timkiemnangcao')
            </div>
            {{-- Chinh sach bao tri --}}
            <div class="col-lg-7">
                <h3 class="title-block">Chính Sách Hoạt Động</h3>
                <div class="policy">
                    <div class="header-content">
                        <span><a href="{{ url('/trang-chu') }}">Trang chủ</a></span>&nbsp;<span>/</span>
                        <span>Chính Sách Hoạt Động</span>
                    </div>
                    <div class="body-content">
                        <h6>
                            <center><strong>CHÍNH SÁCH BẢO HÀNH BẢO TRÌ</strong></center>
                        </h6>
                        <span class="time"><i class="far fa-clock"></i> Chủ nhật, 7/7/2019</span><br>
                        <strong style="font-size: 13px;">Chính sách bảo hành bảo trì (nhóm hàng hóa dịch vụ có bảo hành)</strong>
                        <h1><strong>Sử dụng phụ tùng chính hiệu</strong></h1>
                        <p>Để đảm bảo sự an toàn tối đa khi sử dụng xe, chúng tôi khuyên quý khách chỉ nên sử dụng phụ tùng chính hiệu được cung cấp bởi Công Ty TNHH TMDV Thiên Nhẫn thông qua các Cửa hàng do Công Ty TNHH TMDV Thiên Nhẫn ủy nhiệm.</p>
                        <p>Để biết thêm chi tiết, xin quý khách vui lòng liên lạc với Cửa hàng do Công Ty TNHH TMDV Thiên Nhẫn ủy nhiệm nơi gần nhất.</p>
                        <h1><strong>Quyền lợi, nghĩa vụ khách hàng</strong></h1>
                        <p>Để sử dụng xe an toàn và thoải mái, việc kiểm tra và bảo dưỡng xe là hết sức cần thiết. Vì vậy, hãy chú ý những điểm sau đây. Trong trường hợp không chú ý các điểm này, chúng tôi từ chối  bảo hành cho quý khách:</p>
                        <ul>
                          <li> Sử dụng xe theo đúng phương pháp đã hướng dẫn.</li>
                          <li> Tiến hành “kiểm tra trước khi vận hành” theo đúng hướng dẫn.</li>
                          <li> Tiến hành kiểm tra định kỳ theo hướng dẩn của nhà sản xuất.</li>
                          <li> Thay thế các bộ phận định kỳ, các chất lỏng, dầu mỡ theo đúng sách hướng dẫn sử dụng đã quy định.
                            </li>
                          <li> phutungchinhhieu.com cam kết mang đến cho khách hàng những sản phẩm chính hảng của nhà sản xuất như (BANDO, YSS, DID. MICHELINE.....)</li>
                        </ul>
                    </div>
                </div>
                @include('pages.otherpost')
            </div>
        </div>
    </div>
</div>
@endsection
