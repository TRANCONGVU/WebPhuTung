@extends('master-layout')
@section('content')
@include('banner')
<div class="main-page">
    <div class="container">
        <h3 class="title-block">Liên hệ</h3>
        <div class="policy">
            <div class="header-content">
                <span><a href="{{ url('/trang-chu') }}">Trang chủ</a></span>&nbsp;<span>/</span>
                <span>Liên hệ</span>
            </div>
            <div class="row">
                <div class="col-lg-5 info-contact">
                    <strong style="font-weight:700;">CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ THIÊN NHẪN</strong><br>
                    <strong>Địa chỉ: </strong><span>34/27 Lữ Gia, Phường 15, Quận 11, TP. HCM</span><br>
                    <strong>Điện thoại: </strong><span>Hotline - 094 3333 427</span><br>
                    <strong>Fax: </strong><span>028 3864 7063</span><br>
                    <strong>Email: </strong><span>admin@phutungchinhhieu.com, thiennhanco@yahoo.com</span><br>
                    <strong>Website: </strong><a href="">phutungchinhhieu.com</a>
                </div>
                <div class="col-lg-7">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="600" height="300" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=l%C3%A1ng&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                            Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 pb-4"><strong>Đóng góp ý kiến</strong></div>
                <form action="">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-3 label">Họ tên <span style="color:red;">(*)</span>:</div>
                            <div class="col-lg-9"><input class="input-info" type="text" name="name"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 label">Địa chỉ:</div>
                            <div class="col-lg-9"><input class="input-info" type="text" name="address"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 label">Email:</div>
                            <div class="col-lg-9"><input class="input-info" type="email" name="email"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 label">Điện thoại:</div>
                            <div class="col-lg-9"><input class="input-info" type="text" name="phone"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-3 label">Tiêu đề:</div>
                            <div class="col-lg-9"><input class="input-info" type="text" name="title"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 label">Câu hỏi <span style="color:red;">(*)</span>:</div>
                            <div class="col-lg-9">
                                <textarea name="question" id=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 button pt-3">
                        <a href="" class="btn btn-primary">Gửi</a>
                        <a href="" class="btn btn-dark">Nhập lại</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
