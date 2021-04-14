@extends('blog.layouts.default')
@section('content')
<div class="col-md-7">
  <section class="articles-section">
    <blockquote class="blockquote">
      <h3><a href="#" class="section-title">Linux技术实践</a></h3>
      <footer class="blockquote-footer">2021-04-13 12:00:00 <cite title="Source Title">By ForMe1970</cite></footer>
    </blockquote>
    
    <p class="lead">
      熟练使用以下命令：df -h
    </p>
  </section>

  <section class="articles-section">
    <blockquote class="blockquote">
      <h3><a href="#" class="section-title">Linux技术实践</a></h3>
      <footer class="blockquote-footer">2021-04-13 12:00:00 <cite title="Source Title">By ForMe1970</cite></footer>
    </blockquote>
    
    <p class="lead">
      熟练使用以下命令：df -h
    </p>
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
</div>
@stop