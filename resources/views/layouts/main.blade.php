<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Мой Логотип</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('main.index')}}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('about.index')}}">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('service.index')}}">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact.index')}}">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')
</body>
</html>
