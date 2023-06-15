<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Submission Tracker</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">


        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light p-4" id="ftco-navbar"
            style="background-color: #0a3f69b9!important;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
            <div class="container-fluid">
                <div>

                    <h1 class="navbar-brand fw-bolder fs-2 m-0 p-0 text-white"
                        style="text-shadow: 1px -2px 4px rgba(0,0,0,0.6);">
                        <img src="https://www.pikpng.com/pngl/b/583-5830237_your-logo-retulp-bus-stop-clipart.png"
                            class="logo-navbar" alt="" srcset="">
                        Submissions Tracker
                    </h1>
                    <p class="m-0 text-white" style="font-size: 10px"> © Kitty Consultants LLC</p>
                </div>

                <form action="#" class="searchform order-sm-start order-lg-last  m-0">
                    <div class="form-group d-flex">
                        <button class="noselect me-3"><i class="fa fa-plus me-2"></i>Add New</button>
                        <i class="fa fa-cog fs-3 me-3 mt-1 icons"></i>
                        <i class="fa fa-question-circle fs-3 me-3 mt-1 icons"></i>

                    </div>
                </form>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item   me-3">

                            <button class="noselect">Stories</button>

                        </li>

                        <li class="nav-item me-3"> <button class="noselect">Submissions</button>
                        </li>
                        <li class="nav-item me-3"> <button class="noselect">Publishers</button>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
