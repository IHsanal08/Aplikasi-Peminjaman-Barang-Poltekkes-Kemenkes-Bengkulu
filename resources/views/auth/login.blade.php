<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <title>PIMBA POLTEKKES</title>
        <link rel="shortcut icon" href="{{ asset('assets/images/logo1.png') }}">
        <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href=" {{ asset('css/style_login.css') }} ">
        <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	</head>
	<body>
		<div id="particles-js">
            <div class="loginBox">
                <img src=" {{ asset('assets/images/logo1.png') }} " class="user">
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block" style="font-size:13px;">

                        <strong>Perhatian:</strong> <i>{{ $message }}</i>
                    </div>
                    @else
                    <h6>Login Operator</h6>
                    <p style="text-align:center; margin-bottom:20px;">Sistem Informasi Peminjaman Barang</p>
                @endif
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <p>Email</p>
                    <input type="email" name="email" placeholder="masukan email">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="••••••">

                    <button type="submit" name="submit" style="margin-bottom:10px;r"><i class="fa fa-sign-in"></i>&nbsp; Login</button>

                    <a href="#" style="font-weight:200; font-style:italic;">Versi 1.0</a>
                </form>
            </div>
        </div>
    </body>
    <script type="text/javascript" src=" {{ asset('assets/particles/particles.min.js') }} "></script>
    <script type="text/javascript" src=" {{ asset('assets/particles/app.js') }} "></script>
    <script>
        // document.addEventListener('contextmenu', event => event.preventDefault());
    </script>
</html>
