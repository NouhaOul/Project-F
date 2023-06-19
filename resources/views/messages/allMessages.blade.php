<!DOCTYPE html>
<html lang="en">

<head>
  <title>HOMEFIT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <link rel="shortcut icon" href="{{ asset("/ftco-32x32.png") }}">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset("/fonts/icomoon/style.css") }}">

  <link rel="stylesheet" href="{{ asset("/css/css/bootstrap.min.css") }}">
  <link rel="stylesheet" href="{{ asset("/css/css/jquery-ui.css") }}">
  <link rel="stylesheet" href="{{ asset("/css/css/owl.carousel.min.css") }}">
  <link rel="stylesheet" href="{{ asset("/css/css/owl.theme.default.min.css") }}">
  <link rel="stylesheet" href="{{ asset("/css/css/owl.theme.default.min.css") }}">

  <link rel="stylesheet" href="{{ asset("/css/css/jquery.fancybox.min.css") }}">

  <link rel="stylesheet" href="{{ asset("/css/css/bootstrap-datepicker.css") }}">

  <link rel="stylesheet" href="{{ asset("/fonts/flaticon/font/flaticon.css") }}">

  <link rel="stylesheet" href="{{ asset("css/css/aos.css") }}">
  <link href="{{ asset("/css/jquery.mb.YTPlayer.min.css") }}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ asset("/css/css/style.css") }}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="row">

        <header class="site-navbar py-4 js-sticky-header site-navbar-target bg-dark" role="banner">

          <div class="container-fluid">
            <div class="d-flex align-items-center">
              <div class="site-logo"><a href="{{ url("index.html") }}">HOME<span>FIT.</span> </a></div>
              <div class="ml-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                  <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li><a href="{{ url("#home-section") }}" class="nav-link">All messages</a></li>
                  </ul>
                </nav>
                <a href="{{ url("#") }}" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
              </div>

            </div>
          </div>

        </header>
    </div>
    <div class="row" style="margin: 200px 0">
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered mg-b-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message )
                                    <tr>
                                        <td>{{ $message->id }}</td>
                                        <td>{{ $message->fname }}</td>
                                        <td>{{ $message->lname }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td>{{ $message->message }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



  </div>
  <!-- .site-wrap -->

  <script src="{{ asset("/js/jquery-3.3.1.min.js") }}"></script>
  <script src="{{ asset("/js/jquery-migrate-3.0.1.min.js") }}"></script>
  <script src="{{ asset("/js/jquery-ui.js") }}"></script>
  <script src="{{ asset("/js/popper.min.js") }}"></script>
  <script src="{{ asset("/js/bootstrap.min.js") }}"></script>
  <script src="{{ asset("/js/owl.carousel.min.js") }}"></script>
  <script src="{{ asset("/js/jquery.stellar.min.js") }}"></script>
  <script src="{{ asset("/js/jquery.countdown.min.js") }}"></script>
  <script src="{{ asset("/js/bootstrap-datepicker.min.js") }}"></script>
  <script src="{{ asset("/js/jquery.easing.1.3.js") }}"></script>
  <script src="{{ asset("/js/aos.js") }}"></script>
  <script src="{{ asset("/js/jquery.fancybox.min.js") }}"></script>
  <script src="{{ asset("/js/jquery.sticky.js") }}"></script>
  <script src="{{ asset("/js/jquery.mb.YTPlayer.min.js") }}"></script>




  <script src="{{ asset("/js/main.js") }}"></script>

</body>

</html>
