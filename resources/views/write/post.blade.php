@extends('layouts.editor')
@section('title','写新文章')
@section('editor')
  @include('editor::head')
@endsection
@section('container')
<style type="text/css">
  .editor{ width: 100% !important; }
  .zsubmit{ padding: 0px 20px 0px 20px; }
  .navbar{ 
    border-radius:0px !important;
    background: #2f4154 !important;
    text-decoration-color: #fff !important;
  }
</style>
<form action="" method="post">
  <div class="row demo-row zsubmit">
        
        <div class="col-md-1">
          <button class="btn btn-block btn-sm btn-primary">发布</button>
        </div>
        <div class="col-md-1">
          <a href="#fakelink" class="btn btn-block btn-sm btn-warning">取消</a>
        </div>
        <div class="col-md-10">
          <div class="form-group">
            <input type="text" value="" placeholder="标题..." class="form-control">
          </div>
        </div>
  </div>
  <div class="editor">
      <textarea id='myEditor'></textarea>
  </div>
</form>
@endsection
