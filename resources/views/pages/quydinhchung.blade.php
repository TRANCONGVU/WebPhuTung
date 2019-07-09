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
                            <center><strong>CHÍNH SÁCH & QUY ĐỊNH CHUNG</strong></center>
                        </h6>
                        <span class="time"><i class="far fa-clock"></i> Chủ nhật, 7/7/2019</span><br>
                        <strong style="font-size: 13px;">Chính sách & Quy định chung: Bao gồm các điều kiện hạn chế,
                            tiêu chuẩn dịch vụ, quy trình, quy định….</strong>
                        <ul>
                            <li> www.phutungchinhhieu.com thuộc quyền sở hữu của Công Ty TNHH TMDV Thiên Nhẫn.</li>
                            <li> www.phutungchinhhieu.com cho phép người dùng tham khảo , tiềm hiểu các sản phẩm phụ
                                tùng xe máy chính hãng đươc nhập khẩu trực tiếp từ Japan, Thailand, Indo…</li>
                            <li> Các điều khoản và điều kiện trong quy định này sẻ điều khiển việc sử dụng các dịch vụ
                                do công ty cung cấp và có sẵn trên trang website www.phutungchinhieu.com </li>
                            <li><strong> Quy định chung:</strong> Trang web điện tử có tên miền giao dịch là:
                                www.phututngchinhieu.com. Công ty có thể sửa đổi quy chế tùy từng thời điểm vì các lý do
                                liên quan đến pháp luật hay quy định để đảm bảo trang web hoạt động đúng cách, thuận
                                tiện và tốt nhất cho khách hàng.</li>
                            <li> Hàng hóa, sản phẩm của www.phutungchinhhieu.com đáp ứng đầy đủ các quy định của pháp
                                luật có liên quan, không thuộc các trường hợp cấm kinh doanh, cấm quảng cáo theo quy
                                định của pháp luật.</li>
                            <li><strong> Quy trình giao dịch:</strong> www.phutungchinhhieu.com được xây dựng nhằm hổ
                                trợ tối đa khách hàng có nhu cầu về các sản phẩm chính hãng. Khi có nhu cầu đặt hàng
                                khách hàng thực hiện các bước sau đây: Tìm kiếm trên web www.phutungchinhhieu.com tham
                                khảo sản phẩm do trang web cung cấp, Sau khi khách hàng có sự lựa chọn phù hợp liên hệ
                                qua số hotline 0943333427 hoặc email thiennhanco@yahoo.com sẽ có nhân viên tư vấn cho bạn
                                về sản phẩm của công ty hoặc Khách hàng có thể đến các cửa hàng bán lẻ hoặc các cửa hàng
                                dịch vụ là đối tác của phutungchinhhieu.com</li>
                        </ul>
                    </div>
                </div>
                @include('pages.otherpost')
            </div>
        </div>
    </div>
</div>
@endsection
