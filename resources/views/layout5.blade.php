
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BookLib</title>
    <link rel="icon" href="https://cdn0.fahasa.com/media/favicon/default/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="https://cdn0.fahasa.com/media/favicon/default/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/svg+xml" sizes="45x48" href="{{asset('public/frontend/img/star.svg')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="{{asset('public/frontend/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/Contact-Form-Clean.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/Login-Form-Clean.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/Navbar---Apple-1.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/Navbar---Apple.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/Navigation-with-Search.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/Simple-Slider.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/smoothproducts.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/Topbar.css')}}">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-md" style="background-color: #06623b;height: 30px;padding: 0px;">
    <div class="container-fluid">
        <div style="padding: 0px;"><a href="{{route('home')}}" style="color: rgb(255,255,255);font-size: 12px;padding: 7px 10px;">Trang Chủ</a><a href="{{route('get.introduction')}}" style="color: rgb(255,255,255);font-size: 12px;padding: 7px 10px;">Giới thiệu</a><a href="{{route('get.contact')}}" style="color: rgb(255,255,255);font-size: 12px;padding: 7px 10px;">Liên hệ</a></div>
        <div style="padding: 0px;">
        </div>
    </div>
</nav>
<nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color: t;">
    <div class="container"><a class="navbar-brand" style="letter-spacing: 5px;font-size: 25px;color: #21bf73;" href="{{route('home')}}">BookLib</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <div></div>

            <div>
                <div class="nav-item dropdown"></div>
            </div>
        </div>
    </div>
</nav>
<main class="page registration-page">
    <section class="text-left d-xl-flex clean-block clean-form dark">
        <div class="container" style="max-width: 90%;width: 80%;height: 100%;">
            <div class="block-heading">
                <h2 class="text-info">Thông tin chi tiết đơn hàng</h2>
            </div>
            <div class="shadow-none content" style="background-color: rgba(255,255,255,0);">
                <div class="row no-gutters">
                    <div class="col-md-12 col-lg-8 col-xl-9" style="background-color: rgba(255,255,255,0);padding: 0px;">
                        <div class="d-flex flex-row items" id="chuthich" style="padding: 10px 5px;background-color: #ffffff;margin-bottom: 10px;">
                            <div class="d-xl-flex justify-content-start align-items-center justify-content-xl-start col-sm-5" style="padding: 0px 35px;">
                                <h6 class="text-center text-info chuthich">Sản Phẩm</h6>
                            </div>
                            <div class="d-flex justify-content-center align-items-center justify-content-xl-start col-sm-2" style="padding: 0px 25px;">
                                <h6 class="text-center text-info chuthich">Đơn Giá</h6>
                            </div>
                            <div class="d-flex justify-content-center align-items-center col-sm-1">
                                <h6 class="text-center text-info chuthich">Số Lượng</h6>
                            </div>
                            <div class="d-flex justify-content-center align-items-center justify-content-xl-center col-sm-3" style="padding: 0px 25px;">
                                <h6 class="text-center text-info chuthich">Thành tiền</h6>
                            </div>
                            <div class="d-flex justify-content-center align-items-center col-sm-1">
                                <h6 class="text-center text-info chuthich">Thao Tác</h6>
                            </div>
                        </div>
        @yield('content')
    </section>
</main>
<!-- footer  -->
<footer class="page-footer dark">
    <div class="footer-copyright">
        <p>© 2020 BoobLib</p>
    </div>
</footer>
<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('public/frontend/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="{{asset('public/frontend/js/smoothproducts.min.js')}}"></script>
<script src="{{asset('public/frontend/js/theme.js')}}"></script>
<script src="{{asset('public/frontend/js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="{{asset('public/frontend/js/Navbar---Apple.js')}}"></script>
<script src="{{asset('public/frontend/js/Simple-Slider.js')}}"></script>
</body>

</html>
<script>
    $(function () {
        $('.orderby').change(function () {
            $("#form_order").submit();
        })
    })
</script>
