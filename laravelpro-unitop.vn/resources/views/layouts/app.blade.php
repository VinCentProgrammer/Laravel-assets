<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <div id="wrapper">

        <div id="header">
            Header
        </div>
        <div id="wp-content">
            <div id="content">
                @yield('content')
            </div>
            <div id="sidebar">
                @section('sidebar')
                    <p>Khối tìm kiếm </p>
                @show
            </div>
        </div>
        <div id="footer">
            Footer
        </div>

    </div>
</body>

</html>
