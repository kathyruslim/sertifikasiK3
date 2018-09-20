<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/css/admin/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/admin/dashboard.css')}}" rel="stylesheet">

      <link rel="stylesheet" href="{{ asset('js/select2-master/dist/css/select2.css') }}">
      <script src="{{ asset('js/jquery.min.js') }}"></script>
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{asset('admin')}}">Sertifikasi K3</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          @if(Auth::check())
          <a class="nav-link" href="{{asset('logout')}}">Log out</a>
          @endif
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              @if(Auth::check())
              <li class="nav-item">
                <a class="nav-link" href="{{asset('admin')}}">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/jenisSertifikasi">
                  <span data-feather="file"></span>
                  Jenis Sertifikasi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/karyawan">
                  <span data-feather="file"></span>
                  Data Karyawan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/inputDataSertifikasi">
                  <span data-feather="plus"></span>
                  Data Sertifikasi Karyawan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/rekapitulasi">
                  <span data-feather="database"></span>
                  Rekapitulasi
                </a>
              </li>
              @endif
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div id="content" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">@yield('title')</h1>
            </div>
            @yield('content')
        </main>
        
      </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('/js/admin/popper.min.js')}}"></script>
    <script src="{{asset('/js/admin/bootstrap.min.js')}}"></script>


    <!-- Icons -->
    <script src="{{asset('/js/admin/feather.min.js')}}"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>