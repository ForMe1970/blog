@extends('admin.layouts.default')
@section('content')
<div id="create_article_form">
  <form action="">
    <div class="form-group">
      <label for="title">文章标题：</label>
      <input type="text" class="form-control" name="title" id="title">
    </div>

    <div class="form-group">
      <label for="intro">文章简介：</label>
      <input type="text" class="form-control" name="intro" id="intro">
    </div>

    <div class="form-group">
      <label for="categorys">所属分类：</label>
      <select name="categorys" id="categorys" class="form-control">
        <option value="1">linux</option>
        <option value="2">mysql</option>
      </select>
    </div>

    <div class="form-group">
      <label for="tags">标签：</label>
      <select name="categorys" class="form-control" name="categorys">
        <option value="1">运维</option>
        <option value="2">慢查询</option>
      </select>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">提交</button>
      <button type="reset" class="btn btn-primary">重置</button>
    </div>
  </form>
</div>
@endsection