@extends('admin.layout.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sản phẩm
                        <small>Sửa</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @csrf
                    @if(count($errors) > 0)
                        <div class = "alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach

                        </div>

                    @endif
                    @if(session('thongbao'))
                        <div class = "alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <form action="{{route('admin.sanpham.postthem')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Thể loại sản phầm</label>
                            <select class="form-control" name="cate_product" id="cate_product" >
                                @foreach($cate_product as $cate)
                                    <option value="{{$cate->id}}">{{$cate->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" name="title" placeholder="Nhập sản phẩm" value="{{$re}}"/>
                        </div>

                        <div class="form-group">
                            <label>Nội Dung</label>
                            <textarea name="noidung" id="content" class="form-control ckeditor" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Giá sản phẩm</label>
                            <input class="form-control" name="price" placeholder="Nhập giá sản phẩm" />
                        </div>
                        <div class="form-group">
                            <label>Số lượng sản phẩm</label>
                            <input class="form-control" name="amount" placeholder="Nhập số lượng" />
                        </div>
                        <div class="form-group">
                            <label>Nơi sản xuát</label>
                            <input class="form-control" name="where_production" placeholder="Noi sản xuất" />
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input type="file" name="avatar" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nổi bật</label>
                            <label class="radio-inline">
                                <input name="status" value="1" checked="" type="radio">Có
                            </label>
                            <label class="radio-inline">
                                <input name="status" value="0" type="radio">Không
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Thêm</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>

                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
<script>
    function fileValidation(obj) {
        //var fileInput = document.getElementById('file'+id);
        var filePath = obj.value; //lấy giá trị input theo id
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i; //các tập tin cho phép
        //Kiểm tra định dạng
        if (!allowedExtensions.exec(filePath)) {
            alert('You can only select files with .jpeg/.jpg/.png/.gif extension.');
            obj.value = '';
            return false;
        } else {
            //Image preview
            if (obj.files && obj.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('imagePreview'+obj.id).innerHTML = '<img style="width:200px;" src="' + e.target.result + '"/>';
                };
                reader.readAsDataURL(obj.files[0]);
            }
        }
    }
</script>