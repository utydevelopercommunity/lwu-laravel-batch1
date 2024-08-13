<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        nav {
            border-bottom: 1px solid #ccc;
        }

        .blog-card {
            flex: 1 1 calc(25% - 20px);
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .blog-container {
            flex-wrap: wrap;
            gap: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg py-3">
        <div class="container justify-content-between">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPillsExample"
                aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">LWU Blogs</a>
            <div class="d-flex collapse navbar-collapse" id="navbarPillsExample">
                <ul class="navbar-nav navbar-nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog.index') }}">Blogs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-3">
        @yield('content')
    </div>
</body>

</html>
