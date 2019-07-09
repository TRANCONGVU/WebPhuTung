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
                          <center><strong>CHÍNH SÁCH BẢO MẬT THÔNG TIN</strong></center>
                      </h6>
                      <span class="time"><i class="far fa-clock"></i> Chủ nhật, 7/7/2019</span><br>
                      <strong style="font-size: 13px;">Chính sách bảo mật thông tin</strong>
                      <p>-<strong> Chính sách bảo mật:</strong> Công Ty TNHH TM DV THIÊN NHẪN cam kết bảo mật những thông tin mang tính riêng tư của khách hàng. Quý khách vui lòng đọc bản “Chính sách bảo mật” dưới đây để hiểu hơn những cam kết mà chúng tôi thực hiện, nhằm tôn trọng và bảo vệ quyền lợi của người truy cập:</p>
                      <strong>A - Mục đích và phạm vi thu thập thông tin: </strong>
                      <p>Các thông tin thu nhập thông qua website: www.phutungchinhhieu.com sẻ giúp chúng tôi:</p>
                      <ul class="item">
                        <li>Hỗ trợ khách hàng khi mua sản phẩm.</li>
                        <li>Giải đáp thắc mắc khách hàng.</li>
                        <li>Cung cấp cho khách hàng thêm thông tin mới nhất trên website: phutungchinhieu.com</li>
                        <li>Hỗ trơ thực hiện các giao dịch, tư vấn., quý khách có thể sẽ được yêu cầu đang ký mới thông tin cá nhân ( Email, Họ Tên, Số ĐT liên lạc…) mọi thông tin khai báo phải là chính xác và hợp pháp.</li>
                        <li>Chúng tôi cũng có thể sử dụng những thông tin này để liên hệ trực tiếp với khách hàng dưới hình thức như: gửi thư ngỏ, đơn đặt hàng, thư cảm ơn, thông tin khuyến mãi, và thông tin về kỹ thuật…)</li>
                      </ul>
                      <strong>B - Phạm vi sử dụng thông tin:</strong>
                      <ul class="item">
                        <li>Công Ty TNHH TMDV Thiên Nhẫn thu nhập và sử dụng thông tin cá nhân khách hàng với mục đích phù hợp và hoàn toàn tuân theo nội dung của ‘’Chính Sách Bảo Mật’’ này.</li>
                        <li>Khi cần thiết chúng tôi có thể sủ dụng thông tin cá nhân khách hàng để liên hệ trực tiếp dưới các hình thức như: gởi thư ngỏ, đơn đặt hàng, thư cảm ơn, thông tin về kỹ thuật và bảo mật, quý khách có thể nhận được thư định kỳ cung cấp thông tin sản phẩm, dịch vụ mới, thông tin về các sự kiện sắp tới của công ty.</li>
                      </ul>
                      <strong>C - Thời gian lưu trữ thông tin: </strong>
                      <ul class="item">
                        <li>Thông tin cá nhân của khách hàng được lưu trữ trực tuyến tại hệ thống máy chủ của – PA VIETNAM</li>
                      </ul>
                      <strong>D - Địa chỉ của đơn vị thu thập và quản lý thông tin cá nhân:</strong>
                      <ul class="other-item">
                        <li> CÔNG TY TNHH TM DV THIÊN NHẪN</li>
                        <li> 34/27 LỮ GIA, PHƯỜNG 15, QUẬN 11, TPHCM</li>
                        <li> HOTLINE: 0943333427</li>
                        <li> WEB: www.phutungchinhhieu.com</li>
                        <li> Email: Thiennhanco@yahoo.com</li>
                      </ul>
                      <strong>E - Phương tiện và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu cá nhân của mình:</strong>
                      <ul class="item">
                        <li>www.phutungchinhhieu.com không thu nhập thông tin khách hàng qua trang web , thông tin khách hàng được thực hiện thu thập khi khách hàng đến các cửa hàng bán lẻ hay các cửa hàng đối tác về  trưng bày – bán lẻ - láp ráp – bảo hành – bảo dưỡng của www.phutungchinhhieu.com</li>
                        <li>Khách hàng có thể liên hệ số hotline: 0943333427 hoặc liên hệ email: thiennhanco@yahoo.com để chỉnh sửa thông tin của mình.</li>
                      </ul>
                      <strong>F - Cam kết bảo mật thông tin cá nhân khách hàng, bổ sung đầy đủ thông tin về chủ sở hữu website.</strong>
                      <ul class="item">
                        <li>Tại phutungchinhhieu.com việc bảo vệ thông tin cá nhân của khách hàng là rất quan trong, khách hàng được đảm bảo rằng thông tin cung cấp cho chúng tôi sẻ được bảo mật. phutungchinhhieu.com cam kết không chia sẻ, không bán hoặc cho thuê thông tin cá nhân của khách hàng cho bất kỳ người nào khác.</li>
                        <p>Phutungchinhhieu.com cam kết chỉ sử dụng các thông tin của khách hàng vào trường hợp hợp sau:</p>
                          <p>->  Nâng cao chất lượng dịch vụ dành cho khách hàng.</p>
                          <p>->  Giải quyết , tư vấn về kỷ thuật cho khách hàng.</p>
                        <li> Phutungchinhhieu.com hiểu rằng quyền lợi của khách hàng trong việc bảo mật thông tin cá nhân cũng chính là trách nhiệm của chúng tôi nên trong bất kỳ mọi trường hợp thắc mắc, góp ý liên quan đến chính sách bảo mật vui lòng liên hệ qua số Hotline: 0943333427 </li>
                      </ul>
                    </div>
                </div>
                @include('pages.otherpost')
            </div>
        </div>
    </div>
</div>
@endsection
