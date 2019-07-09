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
                            <center><strong>CHÍNH SÁCH VẬN CHUYỂN GIAO NHẬN</strong></center>
                        </h6>
                        <span class="time"><i class="far fa-clock"></i> Chủ nhật, 7/7/2019</span><br>
                        <strong style="font-size: 13px;">Chính sách vận chuyển giao nhận</strong>
                        <ul class="list-item">
                          <li><strong>Đối tượng áp dụng</strong>
                            <ul class="item">
                              <li>Tất cả khách mua hàng tại phutungchinhhieu.com</li>
                            </ul>
                          </li>
                          <li>Khu vực áp dụng và chi phí:
                            <p>phutungchinhhieu.com nhận vận chuyển hàng hóa trên toàn quốc. Khách hàng chịu phí giao hàng</p>
                          </li>
                          <li><strong>Thời gian giao hàng:</strong>
                            <ul class="item">
                              <li> Đơn hàng trong nội thành Hà Nội, TP.HCM : vận chuyển trong vòng 24h hoặc theo yêu cầu của khách hàng.</li>
                              <li> Các tỉnh thành khác: vận chuyển trong vòng 1-5 ngày.</li>
                              <li> Trước khi vận chuyển, bộ phận giao nhận sẽ liên lạc với Quý khách hàng để hẹn thời gian, địa điểm cụ thể.</li>
                              <li> Thời gian giao hàng: từ 8h30 đến 19h tất cả các ngày trong tuần.</li>
                              <li> phutungchinhhieu.com có thể giao hàng chậm trễ do những điều kiện bất khả kháng như thời tiết xấu, điều kiện giao thông không thuận lợi, xe hỏng hóc trên đường giao hàng, trục trặc trong quá trình xuất hàng… Mong Quý khách hàng thông cảm!</li>
                            </ul>
                          </li>
                          <li><strong>Cước phí giao nhận</strong>
                            <ul class="item">
                              <li> Cước phí chuyển: được tính dựa trên Trọng lượng hàng hoặc Trọng lượng qui đổi từ Kích thước (đối với hàng cồng kềnh), chi phí đóng kiện, cự ly nơi giao hàng.</li>
                              <li> Nếu đơn hàng của quí khách cần phải chuyển đi bằng những chuyến hàng khác nhau hoặc phải chuyển đi nhiều lần, cước phí chuyển toàn bộ đơn hàng của quí khách sẽ được tính một (01) lần tại thời điểm chuyển hàng đầu tiên</li>
                            </ul>
                          </li>
                          <li><strong>Trách nhiệm với hàng hóa vận chuyển</strong>
                            <ul class="item">
                              <li> Nếu dịch vụ vận chuyển do phutungchinhhieu.com chỉ định, chúng tôi sẽ chịu trách nhiệm với hàng hóa và các rủi ro như mất mát hoặc hư hại của hàng hóa trong suốt quá trình vận chuyển hàng từ phutungchinhhieu.com đến địa điểm do quí khách yêu cầu.</li>
                              <li> Quý khách có trách nhiệm kiểm tra hàng hóa khi nhận hàng. Khi phát hiện hàng hóa bị hư hại, trầy xước, bể vỡ, móp méo, hoặc sai hàng hóa, Quý khách vui lòng ký xác nhận tình trạng hàng hóa với Nhân viên giao nhận và thông báo ngay cho Bộ phận Chăm sóc Khách hàng của phutungchinhhieu.com</li>
                              <li> Sau khi Quý khách đã ký nhận hàng mà không ghi chú hoặc có ý kiến về hàng hóa, phutungchinhhieu.com không có trách nhiệm với những yêu cầu đổi trả vì hư hỏng, trầy xước, bể vỡ, mốp méo, sai hàng hóa,… từ Quý khách sau này.</li>
                              <li> Nếu dịch vụ vận chuyển do Quý khách chỉ định và lựa chọn thì Quý khách sẽ chịu trách nhiệm với hàng hóa và các rủi ro như mất mát hoặc hư hại của hàng hóa trong suốt quá trình vận chuyển hàng từ phutungchinhhieu.com đến Quý khách. Khách hàng sẽ chịu trách nhiệm cước phí và tổn thất liên quan.</li>
                            </ul>
                          </li>
                        </ul>
                    </div>
                </div>
                @include('pages.otherpost')
            </div>
        </div>
    </div>
</div>
@endsection
