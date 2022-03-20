<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">

    <title>Student Management System</title>
  </head>
  <body>

    <section class="col">

      @include('layouts.inc.navbar')
      
      <div class="row header-container justify-content-center text-center">
        <div class="header">
          <h1>Student Management System</h1>
        </div>
      </div>

        @yield('content')


        @include('layouts.inc.footer')

    </section>




    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}" ></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" ></script>
  </body>
</html>