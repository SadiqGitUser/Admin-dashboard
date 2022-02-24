<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/sweet-alert/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="{{asset('login.css')}}">
    <title>Document</title>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 login-title">
                ADMIN PANEL
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    {{--FORM--}}
                    <form action="{{ route('login') }}" method="POST">

                   @csrf
                    <!--email -->
{{--                        @if($errors->any())--}}
{{--                            @foreach($errors->all() as $error)--}}
{{--                                <div class="alert alert-danger">--}}
{{--                                    {{ $error }}--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        @endif--}}

                        <div class="form-group">
                            <label class="form-control-label">EMAIL</label>
                            <input type="text" name="email" class="form-control">
                        </div>



                    <!--password -->
                        <div class="form-group">
                            <label class="form-control-label">PASSWORD</label>
                            <input type="password" name="password" class="form-control">

                            <div>
                                <label class="checkbox-wrap"  style="color: #a7ffeb">Remember Me
                                    <input  name="remember" type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>


                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-text">
                                <!-- Error Message -->
                            </div>
                            <div class="col-lg-6 login-btm login-button">
                                <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-2"></div>
        </div>

    </div>

    <script src="{{ asset('assets/sweet-alert/sweetalert2.all.min.js') }}"></script>
{{--    LOGIN GIRIS XETASI--}}
    <script>

                   <?php
                       if($errors->any())
                       {
                           $swalText = '';
                           foreach ($errors->all() as $error)
                           {
                               $swalText .= $error . '<br>';
                           }
                       }

                   ?>
                   @if($errors->any())
                   Swal.fire({
                       icon: 'error',
                       title: 'Xeta...',
                       html: '{!!   $swalText !!}',

                   });
                   @endif

        @include('sweetalert::alert')
    </script>

</body>
</html>
