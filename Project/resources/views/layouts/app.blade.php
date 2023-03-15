<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    @include('components.navbar')
    <div class=" sm:ml-64">
      @yield('main')
  </div>   

</body>
</html>