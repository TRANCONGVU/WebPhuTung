<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gaze Sign up & login Form a Flat Responsive Widget Template :: w3layouts </title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Gaze Sign up & login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>

    {{--Thêm Css cho input--}}
    <style>
        .circlecheck {
            display: block;
            position: relative;
            vertical-align: middle;
            margin: 0 auto;
            margin-left: 50px;
        }


    </style>
    <!-- Meta tags -->
    <!--stylesheets-->
    <link href="{{asset('login/css/style.css')}}" rel='stylesheet' type='text/css' media="all">
    <!--//style sheet end here-->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
</head>
<body>
<div class="mid-class">
    <div class="art-right-w3ls">
        <h2>Sign In and Sign Up</h2>
        @csrf
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {{$err}}<br>
                @endforeach

            </div>

        @endif
        @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
        @endif

        <form action="{{url('users/login')}}" method="post">
            @csrf

            <div class="main">

                <div class="form-left-to-w3l">
                    <input type="text" name="email" placeholder="Email" required="">
                </div>

                <div class="form-left-to-w3l ">
                    <input type="password" name="password" placeholder="Password" required="">
                    <div class="clear"></div>
                </div>

            </div>
            <div class="left-side-forget">
                <input type="checkbox" class="checked">
                <span class="remenber-me">Remember me </span>
            </div>
            <div class="right-side-forget">
                <a href="#" class="for">Forgot password...?</a>
            </div>
            <div class="clear"></div>
            <div class="btnn">
                <button type="submit">Sign In</button>
            </div>
        </form>
        <div class="w3layouts_more-buttn">
            <h3>Don't Have an account..?
                <a href="#account">Sign Up Here
                </a>
            </h3>
        </div>
        <!-- popup-->
        <div id="account" class="popup-effect">
            <div class="popup">

                <div class="letter-w3ls">
                    {{--@csrf--}}
                    {{--@if(count($errors) > 0)--}}
                    {{--<div class = "alert alert-danger">--}}
                    {{--@foreach($errors->all() as $err)--}}
                    {{--{{$err}}<br>--}}
                    {{--@endforeach--}}

                    {{--</div>--}}

                    {{--@endif--}}

                    <form id="form_login" action="{{url('users/account')}}" method="post">
                        @csrf
                        {{--@if(session('thongbao'))--}}
                        {{--<div class="alert alert-success">--}}
                        {{--{{session('thongbao')}}--}}
                        {{--</div>--}}
                        {{--@endif--}}
                        <div style="margin-bottom: 30px;">

                            <input name="level" type="radio" value="1" checked="checked"/>Công tác viên
                            <input name="level" type="radio" value="2"/>Quản trị viên
                            <input name="level" type="radio" value="3"/>Admin
                        </div>
                        <div class="form-left-to-w3l">
                            <p style="text-align: left; font-size: smaller ; color: red" id="error_name"></p>
                            <input type="text" id="name" name="account_name" onchange="clickName()"
                                   placeholder="Username"
                                   required="">
                        </div>

                        <div class="form-left-to-w3l">
                            <p style="text-align: left; font-size: smaller ; color: red" id="error_phone"></p>
                            <input type="text" id="phone" name="account_phone" onchange="clickPhone()"
                                   placeholder="Phone"
                                   required="">
                        </div>

                        <div class="form-left-to-w3l">
                            <p style="text-align: left; font-size: smaller ; color: red" id="error_email"></p>
                            <input type="email" id="email" name="account_email"
                                   placeholder="Email"
                                   required="">
                        </div>

                        <div class="form-left-to-w3l">
                            <p style="text-align: left; font-size: smaller ; color: red" id="error_password"></p>
                            <input type="password" id="password" name="account_password" onchange="clickPassword()"
                                   placeholder="Password" required="">
                        </div>

                        <div class="form-left-to-w3l margin-zero">
                            <p style="text-align: left; font-size: smaller ; color: red" id="error_passwordAgain"></p>
                            <input type="password" id="passwordAgain" onchange="clickPasswordAgain()"
                                   name="passwordAgain" placeholder="Confirm Password" required="">
                        </div>


                        <div class="btnn">
                            <button id="button1" type="submit" disabled="" onchange="clickSubmit()">Sign Up</button>
                            <br>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>


                <a class="close" href="">&times;</a>
            </div>
        </div>
        <!-- //popup -->
    </div>
    {{--<div class="art-left-w3ls">--}}
    {{--<h1 class="header-w3ls">--}}
    {{--Gaze sign loginAdminlogin Form--}}
    {{--</h1>--}}
    {{--</div>--}}
</div>

<footer class="bottem-wthree-footer">
    {{--<p>--}}
    {{--© 2019 Gaze Sign Up & Login Form. All Rights Reserved | Design by--}}
    {{--<a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>--}}
    {{--</p>--}}
</footer>
</body>
<script>
    function clickName() {
        var inputUsername = document.getElementById('name');
        if (inputUsername.value.length < 3 || inputUsername.value.length > 32) {

            // alert("Độ dài từ 3 - 32 kí tự");
            document.getElementById("error_name").innerHTML = "Độ dài từ 3 - 32 kí tự";
            return false;
        } else {

            document.getElementById("error_name").innerHTML = "";
            return true;
        }
    }

    function clickPhone() {
        var inputPhone = document.getElementById('phone');
        if (inputPhone.value.length > 9 && inputPhone.value.length < 12) {

            document.getElementById("error_phone").innerHTML = "";
            return true;
        } else {

            document.getElementById("error_phone").innerHTML = "Số điện thoại phải có 10 hoặc 11 số";
            return false;
        }

    }

    function clickPassword() {
        var inputPassword = document.getElementById('password');
        if (inputPassword.value.length < 3 || inputPassword.value.length > 32) {
            document.getElementById('error_password').innerHTML = "Mật khẩu từ 3 đến 32 kí tự";
            return false;
        } else {
            document.getElementById('error_password').innerHTML = "";
            return true;
        }
    }

    function clickPasswordAgain() {
        var inputPassword = document.getElementById('password');
        var inputPasswordAgain = document.getElementById('passwordAgain');
        alert(inputPasswordAgain.value !== inputPasswordAgain.value);
        if (inputPassword.value !== inputPasswordAgain.value) {
            document.getElementById('error_passwordAgain').innerHTML = "Mật khẩu chưa khớp";
            return false;
        } else {
            document.getElementById('error_passwordAgain').innerHTML = "";
            return true;
        }

    }
    // function clickEmail() {
    //     var email = document.getElementsByTagName("input")[6].value;
    //     var regex = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/";
    //
    //     if (!regex.test(email)) {
    //         document.getElementById('error_email').innerHTML = "Sai email";
    //         return false;
    //     } else return true;
    // }

    function clickSubmit() {
        alert('1');
        if (clickName() === true && clickPhone() === true && clickPassword() === true && clickPasswordAgain() === true ) {
            document.getElementById('button1').disabled = true  ;
        }
        document.getElementById('button1').disabled = false;
    }
</script>
</html>