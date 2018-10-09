<div class="login-icon">
  <img src="{{ url('/') }}/Flat-UI/docs/assets/images/login/icon.png" alt="Welcome to Mail App" />
  <h4>重置密码<small>使用邮箱</small></h4>
</div>

<div class="login-form">
  <div class="form-group">
    <input type="text" class="form-control login-field" value="" placeholder="邮箱" id="login-name" />
    <label class="login-field-icon fui-user" for="login-name"></label>
  </div>

  <div class="form-group">
    <div class="login-field">
          <a href="#fakelink" class="btn btn-block btn-sm btn-info">发送验证码</a>
    </div>
  </div>

  <div class="form-group">
    <input type="text" class="form-control login-field" value="" placeholder="邮箱验证码" id="login-name" />
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

  <a class="btn btn-primary btn-lg btn-block" href="#">重置密码</a>
</div>
