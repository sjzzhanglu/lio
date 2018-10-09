<!-- Nav -->
<style media="screen">
    .z-logo{max-height: 35px; margin-left: 30px;}
    .z-logo img{max-height: 35px}
    .navbar{border-radius: 0px}
    .zremind{ position: relative;top: -48px;display: none;}
</style>
<div class="row demo-row">
<div class="col">
  <nav class="navbar navbar-inverse navbar-embossed navbar-expand-lg" role="navigation">
    <!-- <div class="z-logo"><img src="{{ url('/') }}/Flat-UI/docs/assets/images/icons/clocks.svg" alt="Watches"></div> -->
    <a class="navbar-brand" href="{{ url('/') }}">zhanglu.io</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-01"></button>
    <div class="collapse navbar-collapse" id="navbar-collapse-01">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}">首页</a></li>
       </ul>
       <form class="navbar-form form-inline my-2 my-lg-0 mr-auto" action="#" role="search">
        <div class="form-group">
          <div class="input-group">
            <input class="form-control" id="navbarInput-01" type="search" placeholder="搜索">
            <span class="input-group-btn">
              <button type="submit" class="btn"><span class="fui-search"></span></button>
            </span>
          </div>
        </div>
      </form>
      <ul class="nav navbar-nav">
        <li><a href="{{ url('user/login') }}">登录</a></li>
        <li><a href="{{ url('user/register') }}">注册</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav><!-- /navbar -->
</div>
</div>
<div class="zremind">
  <a href="#fakelink" class="btn btn-block btn-lg btn-warning">重置密码成功！<small>点击关闭</small></a>
</div>
