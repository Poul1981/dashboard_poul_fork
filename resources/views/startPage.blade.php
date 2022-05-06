<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Start Page</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/mystyle.css">
{{--    <link rel="stylesheet" href="css/adminlte.min.css">--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
{{--    <div class="btn-container">--}}
{{--        <div class="infobelgu btn btn-info"></div>--}}
{{--    </div>--}}
<section class="head-section">
    <div class="container">
        <header class="home-header d-flex py-3">
            <div><span class="fs-4">Laravel projeckt</span></div>
            <ul class="nav nav-pills">
                <li class="nav-item start-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item start-item"><a href="{{route('dash')}}" class="nav-link">ИнфоБелГУ</a></li>
                <li class="nav-item start-item"><a href="#" class="nav-link">Pricing</a></li>
                <li class="nav-item start-item"><a href="#" class="nav-link">FAQs</a></li>
                <li class="nav-item start-item"><a href="#" class="nav-link">About</a></li>
            </ul>
        </header>
        <hr>
    </div>
</section>

</body>
</html>