<html>
<head>
    <meta charset="UTF-8">
    <title>{{$title}}</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
<div id="main">
    <div id="header2"><div id="header1"></div></div>
    <div id="menu">
    @include('_menu')
    </div>
    <div id="content">
        @if ($iscurrent)
            @include('_currentinfo')
        @else
            @include('_notcurrentinfo')
        @endif
        @yield('content')
    </div>
    <div id="footer">©hava 2016</div>
</div>
</body>
</html>