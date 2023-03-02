<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Submission Tracker</title>


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('ST_resource/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ST_resource/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('ST_resource/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ST_resource/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('ST_resource/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ST_resource/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ST_resource/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('ST_resource/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <div id="app">


        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-cente">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

                <div class="d-flex">
                    <a href="{{ route('home') }}" class="logo  me-3 bg-white"><img
                            src="{{ asset('ST_resource/img/logo.png') }}" alt="" class="img-fluid"></a>

                    <a href="{{ route('home') }}" class="logo  me-3">
                        <h1 class="logo me-auto me-lg-0 fw-bold fs-2 mt-1 text-white"> Submissions Tracker </h1>
                    </a>
                </div>


                @if (Auth::check())
                    <div class="d-flex">


                        @if (request()->segment(count(request()->segments())) == 'submissions')
                            <button type="button" class="book-a-table-btn btn d-lg-flex h-100 me-4"
                                data-bs-toggle="modal" data-bs-target="#submission">
                                <i class="fa fa-plus me-2 mt-1"></i>Add New
                            </button>
                        @endif
                        @if (request()->segment(count(request()->segments())) == 'stories')
                            <button type="button" class="book-a-table-btn btn d-lg-flex h-100 me-4"
                                data-bs-toggle="modal" data-bs-target="#storyModal">
                                <i class="fa fa-plus me-2 mt-1"></i>Add New
                            </button>
                        @endif

                        @if (request()->segment(count(request()->segments())) == 'publishers')
                            <button type="button" class="book-a-table-btn btn d-lg-flex h-100 me-4"
                                data-bs-toggle="modal" data-bs-target="#PublisherModal">
                                <i class="fa fa-plus me-2 mt-1"></i>Add New
                            </button>
                        @endif




                        <i class="fa fa-cog fs-3  mt-1 me-4 " data-bs-toggle="modal" data-bs-target="#setting"
                            style="cursor: pointer"></i>
                        <i class="fa fa-question-circle fs-3  mt-1  me-4" style="cursor: pointer"></i>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            {{-- <button type="submit" class="btn btn-warning"Log Out</button> --}}
                            <button type="submit" class="  btn d-lg-flex h-100 text-white">
                                <i class="fa fa-sign-out me-2 mt-1"></i>Log Out
                            </button>
                        </form>
                    </div>
                @endif




            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        @if (Auth::check())
            <section id="hero" class="d-flex align-items-center">
            @else
                <section id="heroLogin" class="d-flex align-items-center">
        @endif
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">

                <main>
                    @yield('content')
                </main>

            </div>

        </div>
        </section>
        <!-- End Hero -->

        @if (Auth::check())
            <!-- ======= Footer ======= -->
            <footer id="footer">
                <div class="container">
                    <div class="copyright">
                        &copy; Kitty Consultants LLC
                    </div>
                    <div class="credits">

                        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
                    </div>
                </div>


            </footer><!-- End Footer -->
        @endif

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>


    </div>

    @include('modal.submission')
    @include('modal.setting')
    @include('modal.editStory')
    @include('modal.editPublisher')
    @include('modal.editSubmission')
    @include('modal.Story')
    @include('modal.Publisher')
</body>

<!-- Vendor JS Files -->
<script src="{{ asset('ST_resource/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('ST_resource/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('ST_resource/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('ST_resource/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('ST_resource/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('ST_resource/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('ST_resource/js/main.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@stack('scripts')

<script src="{{ asset('js/common.js') }}"></script>
<script src="{{ asset('js/table.js') }}"></script>
<script src="{{ asset('js/login.js') }}"></script>
<script src="{{ asset('js/editModal.js') }}"></script>


</html>
