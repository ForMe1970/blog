<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta name="viewport" content="width=device-width, intial-scale=1, user-scalable=no">
		<link rel="stylesheet" href="{{ mix('css/app.css') }}">
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
</html>
