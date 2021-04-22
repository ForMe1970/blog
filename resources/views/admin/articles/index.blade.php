@extends('admin.layouts.default')

@section('content')
<!-- 筛选条件 -->
<div id="filter">
  <form action="" id="filter_form">
    <div class="form-group col-md-4 clearfix">
      <label for="article_name">文章名称：</label>
      <input type="text" class="form-control" placeholder="请输入文章名称" id="article_name">
    </div>

    <div class="form-group col-md-4 clearfix">
      <label for="article_name">所属分类：</label>
      <select name="categorys" class="form-control" name="categorys">
        <option value="1">linux</option>
        <option value="2">mysql</option>
      </select>
    </div>

    <div class="form-group col-md-4 clearfix">
      <label for="article_name">标签：</label>
      <select name="categorys" class="form-control" name="categorys">
        <option value="1">运维</option>
        <option value="2">慢查询</option>
      </select>
    </div>

    <div class="filter-footer">
      <button class="btn btn-primary btn-sm">查询</button>
    </div>
  </form>
</div>

<!-- 操作按钮 -->
<div id="operate_btns">
  <a href="{{ route('articles.create') }}" class="btn btn-outline-primary btn-sm" role="button" aria-pressed="true"><i class="bi bi-plus"></i>添加文章</a>
</div>

<!-- 数据列表 -->
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">序号</th>
      <th scope="col">文章标题</th>
      <th scope="col">文章简介</th>
      <th scope="col">所属分类</th>
      <th scope="col">标签</th>
      <th scope="col">排序</th>
      <th scope="col">创建时间</th>
      <th scope="col">操作</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>linxu内存占满</td>
      <td>linux存储空间占满解决办法</td>
      <td>linux内存简介</td>
      <td>linux</td>
      <td>linux,运维</td>
      <td>2021-04-22 21:00:00</td>
      <td>
        <button type="button" class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil"></i>编辑</button>
        <button type="button" class="btn btn-outline-primary btn-sm"><i class="bi bi-trash"></i>删除</button>
      </td>
    </tr>
  </tbody>
</table>

@endsection