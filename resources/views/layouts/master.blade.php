<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','จักรยาน')</title>
    
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/kmutnb.css')}}">
</head>

<body style ="background-image: url({{asset('bg/bg-home3.jpg')}}); ">
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/Chart.min.js')}}"></script>
    <script src="{{asset('js/angular.min.js')}}"></script>
    {{-- <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
    <script src="{{asset('vendor/toastr/toastr.min.js')}}"></script>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a href="/" class="navbar-brand">BikeShop</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('home/') }}">หน้าแรก</a></li>               
                    <li><a href="{{ URL::to('product/') }}">จัดการข้อมูลสินค้า</a></li>
                    <li><a href="{{ URL::to('chart/') }}">รายงาน</a></li>
                </ul>
                
               
            </div>
        </div>
    </nav>
    {{-- <div class="header-kmutnb"></div> --}}
    
    @yield('content');
    <!-- js -->
    @if(session('msg'))
        @if(session('ok'))
            <script> toastr.success("{{ session('msg') }}")</script>
        @else
            <script> toastr.error("{{ session('msg') }}")</script>
        @endif
    @endif
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

</body>

</html>