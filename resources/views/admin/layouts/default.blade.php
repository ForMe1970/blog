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
    <div id="menu">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">博客管理</a>
        <a href="#" class="list-group-item list-group-item-action">分类管理</a>
        <a href="#" class="list-group-item list-group-item-action">标签管理</a>
      </div>
    </div>
  </div>
  
</body>
<script src="{{ mix('js/app.js') }}"></script>
</html>