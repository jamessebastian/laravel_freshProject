<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a href="/">SimpleWork</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="{{Request::path() === '/' ? 'current_page_item':''}}"><a href="/" accesskey="1" title="">Homepage</a></li>
                <li class="{{Request::path() === 'clients' ? 'current_page_item':''}}"><a href="#" accesskey="2" title="">Our Clients</a></li>
                <li class="{{Request::is('about') ? 'current_page_item':''}}"><a href="/about" accesskey="3" title="">About Us</a></li>
                <li class="{{Request::path() === 'careers' ? 'current_page_item':''}}"><a href="/articles" accesskey="4" title="">Articles</a></li>
                <li class="{{Request::path() === 'contact' ? 'current_page_item':''}}"><a href="#" accesskey="5" title="">Contact Us</a></li>
            </ul>
        </div>
    </div>
@yield('header')
</div>
@yield('content')
    <div id="copyright" class="container">
        <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
    </div>
</body>
</html>


{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <title>Laravel</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

{{--    <!-- Styles -->--}}
{{--    <style>--}}
{{--        html, body {--}}
{{--            background-color: #fff;--}}
{{--            color: #636b6f;--}}
{{--            font-family: 'Nunito', sans-serif;--}}
{{--            font-weight: 200;--}}
{{--            height: 100vh;--}}
{{--            margin: 0;--}}
{{--        }--}}

{{--        .full-height {--}}
{{--            height: 100vh;--}}
{{--        }--}}

{{--        .flex-center {--}}
{{--            align-items: center;--}}
{{--            display: flex;--}}
{{--            justify-content: center;--}}
{{--        }--}}

{{--        .position-ref {--}}
{{--            position: relative;--}}
{{--        }--}}

{{--        .top-right {--}}
{{--            position: absolute;--}}
{{--            right: 10px;--}}
{{--            top: 18px;--}}
{{--        }--}}

{{--        .content {--}}
{{--            text-align: center;--}}
{{--        }--}}

{{--        .title {--}}
{{--            font-size: 84px;--}}
{{--        }--}}

{{--        .links > a {--}}
{{--            color: #636b6f;--}}
{{--            padding: 0 25px;--}}
{{--            font-size: 13px;--}}
{{--            font-weight: 600;--}}
{{--            letter-spacing: .1rem;--}}
{{--            text-decoration: none;--}}
{{--            text-transform: uppercase;--}}
{{--        }--}}

{{--        .m-b-md {--}}
{{--            margin-bottom: 30px;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--    @yield('content')--}}
{{--</body>--}}
{{--</html>--}}
