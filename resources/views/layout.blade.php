<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #eee;
            display: flex;
            justify-content: space-between;
            padding: 20px 100px;
            align-items: center;
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-menu li {
            margin-right: 20px;
        }

        .nav-menu li a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <header>
        <h3>Blog LWU</h3>
        <ul class="nav-menu">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('blog.index') }}">Blogs</a></li>
        </ul>
    </header>

    @yield('content')
</body>

</html>
