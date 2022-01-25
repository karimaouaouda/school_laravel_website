<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcome.css')}}">
    <title>Welcome</title>
</head>
<body>
    <div id="app">
        <div class="header">
            <div class="inner">
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
    </div>
</body>
</html>