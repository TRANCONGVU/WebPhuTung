@extends('master-layout')
@section('content')
<section class="about-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="row">
					<div class="about-search col-12 col-md-6 col-lg-12">
						<div class="about-search-title">
							Tìm kiếm nâng cao
						</div>
						<div class="about-search-form">
							<form>
								<div class="about-search-form-radio">
									<label>
										<input type="radio" name="for-who" value="0"> Dành cho đại lý
									</label>
									<label>
										<input type="radio" name="for-who" value="1" checked> Tìm sản phẩm
									</label>
								</div>
								<div class="about-search-form-category">
									<div>
										<label>Loại sản phẩm</label>
									</div>
									<div>
										<select>
											<option>Chọn tất cả</option>
											<option>Chọn một</option>
										</select>
									</div>
								</div>
								<div class="about-search-form-category">
									<div>
										<label>Loại xe gì</label>
									</div>
									<div>
										<select>
											<option>Chọn tất cả</option>
											<option>Chọn một</option>
										</select>
									</div>
								</div>
								<div class="about-search-form-category">
									<div>
										<label>Nhà sản xuất</label>
									</div>
									<div>
										<select>
											<option>Chọn tất cả</option>
											<option>Chọn một</option>
										</select>
									</div>
								</div>
								<div class="about-search-form-button">
									<button class="btn btn-danger"><span style="padding-right: 10px;">Tìm kiếm</span> <i class="fas fa-search"></i></button>
								</div>
							</form>
						</div>
					</div>
					<div class="about-banner col-12 col-md-6 col-lg-12">
						<a href="">
							<img src="images/did.jpg">
						</a>
					</div>
					<div class="about-menu col-12 col-md-12 col-lg-12">
						<div class="about-menu-title">
							Danh mục sản phẩm
						</div>
						<div class="about-menu-content">
							<ul>
								<li>
									<span style="color: #ccc;"><i class="fas fa-caret-right"></i></span> <a href="">Nhớt xe gắn máy</a>
								</li>
								<li>
									<span style="color: #ccc;"><i class="fas fa-caret-right"></i></span> <a href="">Nhớt xe gắn máy</a>
								</li>
								<li>
									<span style="color: #ccc;"><i class="fas fa-caret-right"></i></span> <a href="">Nhớt xe gắn máy</a>
								</li>
								<li>
									<span style="color: #ccc;"><i class="fas fa-caret-right"></i></span> <a href="">Nhớt xe gắn máy</a>
								</li>
								<li>
									<span style="color: #ccc;"><i class="fas fa-caret-right"></i></span> <a href="">Nhớt xe gắn máy</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="about">
					<div class="about-search-title">
						Giới thiệu
					</div>
					<div class="about-content">
						<div class="about-content-title">
							<a href="">Trang chủ</a>
							<span style="padding: 0 10px;">/</span>
							<a href="">Giới thiệu</a>
						</div>
						<div class="about-content-body">
							<div class="about-content-member-wrap">
								<div class="about-content-member">
									<div class="about-content-member-left">
										<img src="images/sodo-tochuc.jpg">
									</div>
									<div class="about-content-member-right">
										<div style="padding-bottom: 10px;">
											<strong>Sơ đồ tổ chức</strong>
										</div>
										<div style="color: #848383; font-size: 14px">
											<span style="color: #c5c4c4; font-style: italic;">Thứ ba, 14/10/2014</span>
											<br>
											Những sản phẩm do Thiên Nhẫn phân phối được sản xuất tại các nhà máy phụ tùng, phụ trợ thuộc lọai lớn nhất ở Việt Nam, Thái Lan, Nhật Bản, Inđônêxia, Đài Loan.
										</div>
									</div>
								</div>
								<div class="about-content-member-footer">
									<a href="">Chi tiết</a>
								</div>
							</div>
							<div class="about-content-member-wrap">
								<div class="about-content-member">
									<div class="about-content-member-left">
										<img src="images/sodo-tochuc.jpg">
									</div>
									<div class="about-content-member-right">
										<div style="padding-bottom: 10px;">
											<strong>Sơ đồ tổ chức</strong>
										</div>
										<div style="color: #848383; font-size: 14px">
											<span style="color: #c5c4c4; font-style: italic;">Thứ ba, 14/10/2014</span>
											<br>
											Những sản phẩm do Thiên Nhẫn phân phối được sản xuất tại các nhà máy phụ tùng, phụ trợ thuộc lọai lớn nhất ở Việt Nam, Thái Lan, Nhật Bản, Inđônêxia, Đài Loan.
										</div>
									</div>
								</div>
								<div class="about-content-member-footer">
									<a href="">Chi tiết</a>
								</div>
							</div>
							<div class="about-content-member-wrap">
								<div class="about-content-member">
									<div class="about-content-member-left">
										<img src="images/sodo-tochuc.jpg">
									</div>
									<div class="about-content-member-right">
										<div style="padding-bottom: 10px;">
											<strong>Sơ đồ tổ chức</strong>
										</div>
										<div style="color: #848383; font-size: 14px">
											<span style="color: #c5c4c4; font-style: italic;">Thứ ba, 14/10/2014</span>
											<br>
											Những sản phẩm do Thiên Nhẫn phân phối được sản xuất tại các nhà máy phụ tùng, phụ trợ thuộc lọai lớn nhất ở Việt Nam, Thái Lan, Nhật Bản, Inđônêxia, Đài Loan.
										</div>
									</div>
								</div>
								<div class="about-content-member-footer">
									<a href="">Chi tiết</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="about-right-banner">
					<a href="">
						<img src="images/josho1.jpg">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript" src=""></script>
<script type="text/javascript" src="{{asset('')}}lib/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('')}}lib/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{asset('')}}js/carousel.js"></script>
@endsection
