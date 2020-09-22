<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><!定義顯示區塊>@yield('title')</title>
</head>
<body>
    <!定義區塊>
    @section('sidebar')
    <p>這是主要的側邊欄。</p>
    @show

    <div class="sidebar" style="width: 15%; float:left; background-color:#aaa;">側邊欄</div>
    <div class="container">
        <!定義顯示區塊>
        @yield('content')
    </div>

</body>
</html>
