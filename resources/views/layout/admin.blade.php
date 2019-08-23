<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('I Can Do')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylehome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontbook.css') }}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
    <!-- FontAwesome CSS CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

</head>

<body>
    <div class="wrapper">
        <nav class="Top_Bar navbar-expand-sm fixed-top">
        <a class="Entry_Book navbar-brand" href="#"><img src="{{ asset('/img/Brand.png') }}" alt=""> Entry Book</a>
            <div class="container-fluid">
                <div class="row">
                    <div class="col text-right">
                        <a class="Buku nav-link disabled font-weight-bold" href="#" tabindex="-1" aria-disabled="true">Book</a>
                    </div>
                    <div class="col text-right">
                        <form class="">
                            <button class="btn btn-outline-success" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
          </nav>
        <!--Side Bar-->
        <nav id="sidebar">
            <div class="d-flex align-items-start flex-column" id="sidebar-log">
                <div class="p-2 bd-highlight">
                    <ul class="list-unstyled">
                        <li>
                            <a href="/admin" id="Dashboard"><i class="fas fa-th-large fa-xs"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#pageSubmenu" id="Buku"><i class="fas fa-book fa-xs"></i> Buku</a>
                        </li>
                    </ul>
                </div>
                <form class="mt-auto bd-highlight align-self-center">
                    <button id="Logout-btn" type="submit"><i class="fas fa-sign-out-alt fa-rotate-180"></i> Keluar</button>
                </form>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="/js/jquery-3.3.1.slim.js"></script>
    <!-- Popper JS -->
    <script src="/js/popper.js"></script>
    <!-- Bootstrap JS -->
    <script src="/js/bootstrap.js"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/main.js"></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> --}}
</body>

</html>