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
    <div class="login-icon">
      <img src="{{ url('/') }}/Flat-UI/docs/assets/images/login/icon.png" alt="Welcome to Mail App" />
      <h4>登录<small>zhanglu.io</small></h4>
    </div>

    <div class="login-form">
      <div class="form-group">
        <input type="text" class="form-control login-field" value="" placeholder="用户名" id="login-name" />
        <label class="login-field-icon fui-user" for="login-name"></label>
      </div>

      <div class="form-group">
        <input type="password" class="form-control login-field" value="" placeholder="密码" id="login-pass" />
        <label class="login-field-icon fui-lock" for="login-pass"></label>
      </div>

      <a class="btn btn-primary btn-lg btn-block" href="#">登录</a>
      <a class="login-link" href="#">忘记密码?</a>
    </div>
  </div>
</div>
