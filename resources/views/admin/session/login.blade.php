<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, intial-scale=1, user-scalable=no">
  <title>@yield('title', '为我后台管理系统')</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <div class="card login-form">
        <div class="card-body">
          <form action="{{ route('session.store') }}">
            <div class="form-group">
              <h5 class="login-form-title">为我后台管理系统</h5>
            </div>
            <div class="form-group">
              <label for="account">账号：</label>
              <input type="text" class="form-control" id="account" name="account">
            </div>

            <div class="form-group">
              <label for="password">密码：</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
              <input type="checkbox" class="form-input-check" id="reber_me">
              <label for="reber_me" class="form-check-label">记住我</label>
            </div>

            <button type="submit" class="btn btn-primary">登录</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<script src="{{ mix('js/app.js') }}"></script>
</html>