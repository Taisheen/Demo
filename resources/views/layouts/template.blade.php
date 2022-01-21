<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <script src="https://cdn.webrtc.ecl.ntt.com/skyway-4.4.3.js"></script>
        <title>@yield('title')</title>
        @yield("head")
    </head>
    <header>
            <h1>TELESA</h1>
                <nav>
                    <ul class="nav_links">
                        <li><a href="#">チャット機能</a></li>
                        <li><a href="{{url('/make_room')}}">匿名モニタ機能</a></li>
                    </ul>
                </nav>
            <a class="cta" href="#"><button>会員登録</button></a>
        </header>
    <body>
        @yield('content')
    </body>
</html>


