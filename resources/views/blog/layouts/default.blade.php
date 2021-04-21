<!DOCTYPE html>
<html lang="zh-CN">
	<head>
    <title>@yield('title', '为我博客') ---- 为我</title>
		<meta name="viewport" content="width=device-width, intial-scale=1, user-scalable=no">
		<link rel="stylesheet" href="{{ mix('css/app.css') }}">
		<link rel="stylesheet" href="/editormd/css/editormd.css">
	</head>
	<body>
    @include('blog.layouts._header')
    <div class="container">
      <div class="row">
        @yield('content')
      </div>
    </div>
	</body>
	<script src="{{ mix('js/app.js') }}"></script>
  <script src="/editormd/editormd.min.js"></script>
</html>
