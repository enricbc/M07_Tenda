<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/png" href="images/ag.png">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <!-- Scripts -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body style="background-color:#ecf0ff;">
  
  @can('crear_productes')

    @include('layouts.partials.admin_navbar')

  @else 

    @include('layouts.partials.navbar')

  @endcan
  <!--MARKAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA-->

  @include('layouts._errors')
  @include('layouts._misatges')
  @yield('content')

  <section style="background-color:#868e96;"class="pb-1 rounded-top ">
    <div class="container ">
          <div class="media-container-row content mbr-white">
              <div class="col-md-3 pt-3 col-sm-4 text-primary">
                  <h5 style="text-shadow: 2px 2px #e5f4e7" id="title">Antique Gravity</h5>
              </div>
              <div class="row">
              <div class="col-md-8 col-sm-8">
                  <p class="mb-4 foot-title mbr-fonts-style display-7">Nosaltres</p>
                  <p class="mbr-text mbr-fonts-style foot-text display-7">Aliquam eget viverra diam. Vivamus efficitur odio eu metus tincidunt consectetur sit amet ut magna. Duis sed ligula eu eros volutpat sagittis ut eu metus. Nulla vehicula non ipsum id dignissim.</p>
              </div>
              <div class="container col-4" style="font-size: -webkit-xxx-large;text-shadow: 2px 2px #e5f4e7;">
                <div class="row">
                  <div class="col-4 zoom">
                    <i class="fab fa-tumblr-square"></i>
                  </div>
                  <div class="col-4 zoom">
                    <i class="fab fa-youtube"></i>
                  </div>
                  <div class="col-4 zoom">
                    <i class="fab fa-facebook-square"></i>
                  </div>
                </div>
                <div class="row">
                  <div class="col-4 zoom">
                    <i class="fab fa-snapchat"></i>
                  </div>
                  <div class="col-4 zoom">
                    <i class="fab fa-twitter"></i>
                  </div>
                  <div class="col-4 zoom">
                    <i class="fab fa-telegram-plane"></i>
                  </div>
                </div>
              </div>
              </div>
          </div>
          <div class="footer-lower">
              <div class="media-container-row">
                  <div class="col-sm-12">
                      <hr>
                  </div>
              </div>
              <div class="media-container-row mbr-white">
                  <div class="col-sm-12 copyright">
                      <p class="mbr-text mbr-fonts-style display-7">
                          © Copyright 2017 <a href="{{ route('rss') }}" class="text-white">Antique Gravity</a> - All Rights Reserved
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </section>
    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/lang/summernote-ca-ES.min.js"></script>
</body>
</html>
