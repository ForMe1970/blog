<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', '为我后台管理系统')</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
</head>
<body>
  @include('admin.layouts._header')
  <div id="body">
    @include('admin.layouts._aside')
    <div id="iframe">
      @yield('content')
    </div>
  </div>
</body>
<script src="{{ mix('js/app.js') }}"></script>
</html>