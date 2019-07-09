@extends('master-layout')

@section('content')

@include('banner')


<!-- khuyen mai -->
<main>
    <main class="mt-5">



        <div class="container">
            <!-- row-1 -->
            <div class="row row-1">
                @include('side-bar')

                <!-- main-content -->
                <div class="col-lg-9 col-md-9 col-12 main-content">
                    <h2> khuyen mai </h2>

                    <div class="box-main">

                        <!-- bread crumb -->
                        <div class="bread-crumb">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ul>
                            </nav>
                        </div>

                        <!-- product -->

                        <div class="product">


                            <div class="product-1">
                                <div class="row">
                                    <!-- img -->
                                    <div class="col-md-4 img-left">
                                        <figure>
                                            <a href="#"><img
                                                    src="data:image/jpeg;base64,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"
                                                    alt="" class="img-thumbnail"></a>
                                        </figure>
                                    </div>
                                    <!-- content -->

                                    <div class="col-md-8 content-right">
                                        <h3><a href="#">yss-denso week: combo gia tot!</a></h3>

                                        <div class="date-time">
                                            <i class="fas fa-clock"> <span>Thứ sáu, 05/07/2019</span></i>
                                        </div>

                                        <p>Sự kết hợp hoàn hảo của YSS và DENSO giúp động cơ xe mạnh mẽ, êm ái từ trong
                                            ra
                                            ngoài</p>

                                        <div class="detail text-right">
                                            <a href="#" class="btn btn-danger"> Chi tiet</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-1">
                                <div class="row">
                                    <!-- img -->
                                    <div class="col-md-4 img-left">
                                        <figure>
                                            <a href="#"><img
                                                    src="data:image/jpeg;base64,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"
                                                    alt="" class="img-thumbnail"></a>
                                        </figure>
                                    </div>
                                    <!-- content -->

                                    <div class="col-md-8 content-right">
                                        <h3><a href="#">yss-denso week: combo gia tot!</a></h3>

                                        <div class="date-time">
                                            <i class="fas fa-clock"> <span>Thứ sáu, 05/07/2019</span></i>
                                        </div>

                                        <p>Sự kết hợp hoàn hảo của YSS và DENSO giúp động cơ xe mạnh mẽ, êm ái từ trong
                                            ra
                                            ngoài</p>

                                        <div class="detail text-right">
                                            <a href="#" class="btn btn-danger"> Chi tiet</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-1">
                                <div class="row">
                                    <!-- img -->
                                    <div class="col-md-4 img-left">
                                        <figure>
                                            <a href="#"><img
                                                    src="data:image/jpeg;base64,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"
                                                    alt="" class="img-thumbnail"></a>
                                        </figure>
                                    </div>
                                    <!-- content -->

                                    <div class="col-md-8 content-right">
                                        <h3><a href="#">yss-denso week: combo gia tot!</a></h3>

                                        <div class="date-time">
                                            <i class="fas fa-clock"> <span>Thứ sáu, 05/07/2019</span></i>
                                        </div>

                                        <p>Sự kết hợp hoàn hảo của YSS và DENSO giúp động cơ xe mạnh mẽ, êm ái từ trong
                                            ra
                                            ngoài</p>

                                        <div class="detail text-right">
                                            <a href="#" class="btn btn-danger"> Chi tiet</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-1">
                                <div class="row">
                                    <!-- img -->
                                    <div class="col-md-4 img-left">
                                        <figure>
                                            <a href="#"><img
                                                    src="data:image/jpeg;base64,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"
                                                    alt="" class="img-thumbnail"></a>
                                        </figure>
                                    </div>
                                    <!-- content -->

                                    <div class="col-md-8 content-right">
                                        <h3><a href="#">yss-denso week: combo gia tot!</a></h3>

                                        <div class="date-time">
                                            <i class="fas fa-clock"> <span>Thứ sáu, 05/07/2019</span></i>
                                        </div>

                                        <p>Sự kết hợp hoàn hảo của YSS và DENSO giúp động cơ xe mạnh mẽ, êm ái từ trong
                                            ra
                                            ngoài</p>

                                        <div class="detail text-right">
                                            <a href="#" class="btn btn-danger"> Chi tiet</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <!-- pagination -->
                        <div class="pagin mt-4">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- banner-qc -->
                    <div class="banner-qc2 mt-4">
                        <a href="#"><img
                                src="http://phutungchinhhieu.com/getattachment/0d923a89-502c-4d20-a21b-f88c78f32cc3/NodeAlias.aspx?width=&height="
                                alt=""></a>
                    </div>
                </div>
            </div>



        </div>




        <!-- script -->
        <script>
        $(document).ready(function() {

            var input = ".form-search-adv .accordion .form-check-inline input[type='radio']";

            $(input).click(function(e) {
                if ($("#ckyes").is(":checked")) {
                    $(".content").show();
                } else {
                    $(".content").hide();
                }

                if ($("#ckno").is(":checked")) {
                    $(".content-1").show();
                } else {
                    $(".content-1").hide();
                }

            });



            $(".list-item .list-bars").click(function(e) {
                $("#nav").toggle();

            });

        });
        </script>







    </main>











    @endsection