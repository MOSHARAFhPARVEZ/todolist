<!DOCTYPE html>
<html lang="en">
  <!-- header part start  -->

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>To Do List</title>
    <!-- css part start -->
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/style.css" />
    <!-- css part end -->
  </head>
  <!-- header part end  -->

  <!-- body part start  -->

  <body>
    <!-- show todo list part start -->
    <section>
      @yield('content')
    </section>
    <!-- show todo list part end -->

    <!-- js part start  -->
    <script src="{{ asset('frontend_assets') }}/js/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/custom.js"></script>

    <!-- js part end -->
  </body>
  <!-- body part end  -->
</html>
