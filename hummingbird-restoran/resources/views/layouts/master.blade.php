<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @stack('css')
  <title>@stack('title')</title>
</head>

<body>
  <div class="container">
    @yield('content')
  </div>
  @stack('js')
</body>

</html>