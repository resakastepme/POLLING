<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
    <style>
        #backButton{
            cursor: pointer;
        }
    </style>
    @yield('css')
</head>

<body style="background-color: #F3EDC8">

    @yield('backButton')

    <div class="container-lg">
        <div class="row d-flex justify-content-center align-items-center min-vh-100">
            <div class="col-md-2">

                {{-- EMPTY --}}

            </div>
            <div class="col-md-8">

                @yield('content')

            </div>
            <div class="col-md-2">
                {{-- EMPTY --}}
            </div>
        </div>
    </div>

</body>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/fontawesome/all.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>

@yield('script')

</html>
