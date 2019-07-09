@extends('master-layout')
@section('content')
@include('banner')
<div class="main-page">
    <div class="container">
        <div class="row">
            {{-- Tim kiem nang cao --}}
            <div class="col-lg-3">
                @include('pages.timkiemnangcao')
            </div>
            {{-- Chinh sach bao tri --}}
            <div class="col-lg-9">
                <h3 class="title-block">Chính Sách Hoạt Động</h3>
                <div class="policy">
                    <div class="header-content">
                        <span><a href="{{ url('/trang-chu') }}">Trang chủ</a></span>&nbsp;<span>/</span>
                        <span>Chính Sách Hoạt Động</span>
                    </div>
                    <div class="body-content">
                        <h6>
                            <center><strong>QUY ĐỊNH VÀ HÌNH THỨC THANH TOÁN</strong></center>
                        </h6>
                        <span class="time"><i class="far fa-clock"></i> Chủ nhật, 7/7/2019</span><br>
                        <strong style="font-size: 13px;">Quy định và hình thức thanh toán</strong>
                        <p class="pt-2"><strong>Thanh toán bằng tiền mặt:</strong> Khi khách hàng mua hàng tại các điểm bán lẻ phụ tùng xe máy hoặc các trạm dịch vụ là đối tác của phutungchinhhieu.com.</p>
                    </div>
                </div>
                @include('pages.otherpost')
            </div>
        </div>
    </div>
</div>
@endsection
