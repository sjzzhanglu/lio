@extends('layouts.default')
@section('title','注册')
@section('container')
<style media="screen">
  .zlogin{
    background: #1abc9c;
    margin-top: 0px;
    margin-bottom: 0px;
    padding: 30px 30px 70px;
  }
  body{
    background: #1abc9c;
  }
</style>
<div class="login zlogin">
  <div class="login-screen">
    @include('user._register')
  </div>
</div>
@endsection
