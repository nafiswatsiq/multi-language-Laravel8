<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">{{ trans('sentence.home')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ trans('sentence.features')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ trans('sentence.pricing')}}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            @if (trans('sentence.lang') == 'English')
                                English
                            @elseif (trans('sentence.lang') == 'Indonesia')
                                Indonesia
                            @elseif (trans('sentence.lang') == 'Jepang')
                                ジェパン
                            @else
                                Bahasa
                            @endif
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="lang/en">
                                @if (trans('sentence.lang') == 'English')
                                    English
                                @elseif (trans('sentence.lang') == 'Indonesia')
                                    Inggris
                                @elseif (trans('sentence.lang') == 'Jepang')
                                    Inggris
                                @endif
                            </a></li>
                            <li><a class="dropdown-item" href="lang/id">Indonesia</a></li>
                            <li><a class="dropdown-item" href="lang/jp">
                                @if (trans('sentence.lang') == 'English')
                                    Japanese
                                @elseif (trans('sentence.lang') == 'Indonesia')
                                    Jepang
                                @elseif (trans('sentence.lang') == 'Jepang')
                                    ジェパン
                                @endif
                            </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1>{{ trans('sentence.hello')}}, {{ trans('sentence.world')}}!</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
