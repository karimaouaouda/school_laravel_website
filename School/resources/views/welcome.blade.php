<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <title>Welcome</title>
</head>
<body>
    <div id="app">
        <div class="header">
            <div class="circle"></div>
            <div class="logo-box">
                <div class="logo-wrapper">
                    <div class="logo">
                        Nibrasse
                    </div>
                </div>
            </div>
            <div class="navs">
                <nav>
                    <ul>
                        <li>
                            <a href="#" class="active">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                About us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Domestic law
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                how it works
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="content">
            <div id="render">
            </div>
        </div>
    </div>
    <script src="{{asset('js/welcome.js')}}"></script>
    <script src="{{asset('threed/ADN3D.js')}}"></script>
</body>
</html>