<style type="text/css">
  .banner-left .todo li:after{
    display: none;
  }
  .banner-left .todo li:first-child{
    border-radius: 6px 6px 0px 0px;
  }
  .banner-left .todo ul{
    border-radius: 6px;
  }
  .banner-right img{
    width: 100%;
    height: 254px;
    border-radius: 6px;
  }
</style>
<div class="row demo-samples banner-left">
  <div class="col-4">
    <div class="todo">
      <ul>
        <li>
          <div class="todo-content">
            <h4 class="todo-name">
              11月热门
            </h4>
          </div>
        </li>
        <li>
          <div class="todo-content">
            <h4 class="todo-name">
             12月热门
            </h4>
          </div>
        </li>
        <li>
          <div class="todo-content">
            <h4 class="todo-name">
              书刊推荐
            </h4>
          </div>
        </li>
        <li>
          <div class="todo-content">
            <h4 class="todo-name">
              成长路线
            </h4>
          </div>
        </li>
      </ul>
    </div><!-- /.todo -->
  </div><!-- /.col-4 -->

  <div class="col-8">
    <div class="banner-right">
      <img src="{{ url('/') }}/Flat-UI/docs/assets/images/example-image.jpg" alt="First slide">
    </div>
  </div> <!-- /banner -->
</div>
