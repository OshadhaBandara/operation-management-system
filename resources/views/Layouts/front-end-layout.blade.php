

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}" />
    <link rel="stylesheet" href=" {{asset('assets/fonts/flaticon/font/flaticon.css')}}" />

    <link href="{{asset('assets/css/tiny-slider.css')}}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/aos.css') }}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>

    <title>
      Property &mdash; Free Bootstrap 5 Website Template by Untree.co
    </title>
  </head>
  <body>
    




    @include('component/heder')












    @yield('Content')








    @include('component/footer')









    <!-- /.site-footer -->
    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/tiny-slider.js')}}"></script>
    <script src="{{asset('assets/js/aos.js')}}"></script>
    <script src="{{asset('assets/js/navbar.js')}}"></script>
    <script src="{{asset('assets/js/counter.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
  </body>
</html>

