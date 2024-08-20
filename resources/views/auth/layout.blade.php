<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    @yield('header-content')
</head>

<body style="background: #ddd;">
    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        @yield('content')
    </div>
</body>

</html>
