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
                        <span>Hệ thống trạm</span>&nbsp;<span>/</span><span> Tp Hồ Chí Minh</span>
                    </div>
                    <div class="system">
                      <div class="content-system mb-2">
                        <h6 class="pb-2 name-store" style="font-size: 13px;"><strong><a href="">PHÒNG TRƯNG BÀY - BÁN LẺ - LẮP RÁP - SỬA CHỮA - BẢO HÀNH HOÀNG VĂN THỤ</a></strong></h6>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="image-content-system">
                              <img src="{{ asset('images/image.jpg') }}" alt="" style="width:100%;">
                            </div>
                          </div>
                          <div class="col-lg-8 text-content">
                            <strong>Địa chỉ: </strong><span>551 Hoàng Văn Thụ, P.4, Q.Tân Bình, HCM</span><br>
                            <img src="{{ asset('images/icon-map.png') }}" alt=""><a href=""> (Bản đồ đi tới cửa hàng)</a><br>
                            <strong>Đường dây nóng: </strong><span>028 3811 3161</span><br>
                            <strong>Văn phòng: </strong><span></span><br>
                            <span>Tel: 028 3811 3161</span> | <span>Fax: </span><br>
                            <span>Văn phòng kinh doanh: </span> | <span>Phòng dịch vụ: </span>
                          </div>
                        </div>
                      </div>
                      <div class="content-system mb-2">
                        <h6 class="pb-2 name-store" style="font-size: 13px;"><strong><a href="">TRẠM BẢO DƯỠNG & SỬA CHỮA XE MÁY BÌNH THỚI</a></strong></h6>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="image-content-system">
                              <img src="{{ asset('images/image.jpg') }}" alt="" style="width:100%;">
                            </div>
                          </div>
                          <div class="col-lg-8 text-content">
                            <strong>Địa chỉ: </strong><span>19 Bình Thới, P.11, Q.11, HCM</span><br>
                            <img src="{{ asset('images/icon-map.png') }}" alt=""><a href=""> (Bản đồ đi tới cửa hàng)</a><br>
                            <strong>Đường dây nóng: </strong><span>0938 201 675</span><br>
                            <strong>Văn phòng: </strong><span></span><br>
                            <span>Tel: 028 3811 3161</span> | <span>Fax: </span><br>
                            <span>Văn phòng kinh doanh: </span> | <span>Phòng dịch vụ: </span>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
