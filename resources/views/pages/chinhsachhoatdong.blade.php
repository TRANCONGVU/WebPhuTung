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
            {{-- Chinh sach hoat dong --}}
            <div class="col-lg-7">
                <h3 class="title-block">Chính Sách Hoạt Động</h3>
                <div class="policy">
                  <div class="header-content">
                    <span><a href="{{ url('/trang-chu') }}">Trang chủ</a></span>&nbsp;<span>/</span>
                    <span>Chính Sách Hoạt Động</span>
                  </div>
                </div>
                <div class="banner-adv-right">
                  <img src="http://phutungchinhhieu.com/getattachment/0d923a89-502c-4d20-a21b-f88c78f32cc3/NodeAlias.aspx?width=&height=" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
