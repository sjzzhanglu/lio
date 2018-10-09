<div class="login-icon">
  <img src="{{ url('/') }}/Flat-UI/docs/assets/images/login/icon.png" alt="Welcome to Mail App" />
  <h4>注册<small>zhanglu.io</small></h4>
</div>

<div class="login-form">
  <div class="form-group">
    <input type="text" class="form-control login-field" value="" placeholder="邮箱" id="login-name" />
    <label class="login-field-icon fui-user" for="login-name"></label>
  </div>

  <div class="form-group">
    <input type="password" class="form-control login-field" value="" placeholder="密码" id="login-pass" />
    <label class="login-field-icon fui-lock" for="login-pass"></label>
  </div>

  <div class="form-group">
    <input type="password" class="form-control login-field" value="" placeholder="确认密码" id="login-pass" />
    <label class="login-field-icon fui-lock" for="login-pass"></label>
  </div>

  <a class="btn btn-primary btn-lg btn-block" href="#">注册</a>
  <a class="login-link" href="{{ url('user/login') }}">已经注册，请登录！</a>
</div>
