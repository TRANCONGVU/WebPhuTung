@extends('admin.layout.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sản phẩm
                        <small>Danh Sách</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                @if(session('thongbao'))
                    <div class = "alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên </th>
                        <th>Nội dung</th>
                        <th>Giá</th>
                        <th>Avatar</th>
                        <th>Số lượng</th>
                        <th>Nơi sản xuất</th>
                        <th>Ngày đăng</th>
                        {{--<th>Lượt xem</th>--}}
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
{{--                    @dd($product)--}}
                    @foreach($product as $pro)
                        <tr class="odd gradeX" align="center">

                            <td>{{$pro->id}}</td>
                            <td>{{$pro->title}}</td>
                            <td>{!! $pro->content !!}</td>

                            <td>{{$pro->price}}</td>
                            <td><img width="100px" src="admin/upload/images/san-pham/{{$pro->avatar}}"></td>
                            <td>{{$pro->amount}}</td>
                            <td>{{$pro->where_production}}</td>
                            <td>{{$pro->created_at}}</td>




                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/san-pham/xoa/{{$pro->id}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/san-pham/sua/{{$pro->id}}">Edit</a></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <div style="float: right" align="right">
                {{$product->links()}}
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection