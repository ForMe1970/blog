@extends('blog.layouts.default')
@section('title', '为我博客首页')

@section('content')
<div class="col-md-7">
  <section class="articles-section">
    <blockquote class="blockquote">
      <h3><a href="#" class="section-title">Linux技术实践</a></h3>
      <footer class="blockquote-footer">2021-04-13 12:00:00 <cite title="Source Title">By 为我</cite></footer>
    </blockquote>
    
    <p class="lead">
      熟练使用以下命令：df -h
    </p>

    <span class="badge badge-pill badge-primary">Linux</span>
    <span class="badge badge-pill badge-primary">内存</span>
  </section>

  <section class="articles-section">
    <blockquote class="blockquote">
      <h3><a href="#" class="section-title">Linux技术实践</a></h3>
      <footer class="blockquote-footer">2021-04-13 12:00:00 <cite title="Source Title">By 为我</cite></footer>
    </blockquote>
    
    <p class="lead">
      熟练使用以下命令：df -h
    </p>

    <div class="articles-footer">
      <span class="badge badge-pill badge-primary">Linux</span>
      <span class="badge badge-pill badge-primary">内存</span>
    </div>
  </section>
</div>
<div class="col-md-4 offset-md-1">
  <div class="clearfix" id="searchs">
    <form action="">
      <input type="text" class="form-control" name="keywords" placehold="输入需要搜索的信息...">
      <button type="submit" class="btn btn-primary form-control">Go</button>
    </form>
  </div>

  <div id="categorys">
    <ul class="list-group">
      <li class="list-group-item disabled" aria-disabled="true">文章分类</li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href=""><ins>Linux</ins></a>
        <span class="badge badge-primary badge-pill">14</span>
      </li>
    </ul>
  </div>

  <div class="card">
    <div id="tags" class="card-body">
      <button type="button" class="btn btn-primary">
        linux内存 <span class="badge badge-light">9</span>
      </button>

      <button type="button" class="btn btn-primary">
        linux <span class="badge badge-light">9</span>
      </button>
    </div>
  </div>
</div>
@stop

<script>

</script>