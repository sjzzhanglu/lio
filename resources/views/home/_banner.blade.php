<div class="row demo-samples">
  <div class="col-4">
    <div class="todo">
      <div class="todo-search">
        <input class="todo-search-field" type="search" value="" placeholder="Search" />
      </div>
      <ul>
        <li class="todo-done">
          <div class="todo-icon fui-user"></div>
          <div class="todo-content">
            <h4 class="todo-name">
              Meet <strong>Adrian</strong> at <strong>6pm</strong>
            </h4>
            Times Square
          </div>
        </li>
        <li>
          <div class="todo-icon fui-list"></div>
          <div class="todo-content">
            <h4 class="todo-name">
              Chat with <strong>V.Kudinov</strong>
            </h4>
            Skype conference an 9 am
          </div>
        </li>
        <li>
          <div class="todo-icon fui-eye"></div>
          <div class="todo-content">
            <h4 class="todo-name">
              Watch <strong>Iron Man</strong>
            </h4>
            1998 Broadway
          </div>
        </li>
        <li>
          <div class="todo-icon fui-time"></div>
          <div class="todo-content">
            <h4 class="todo-name">
              Fix bug on a <strong>Website</strong>
            </h4>
            As soon as possible
          </div>
        </li>
      </ul>
    </div><!-- /.todo -->
  </div><!-- /.col-4 -->

  <div class="col-8">
    <video
      id="my-player"
      class="video-js"
      controls
      preload="auto"
      poster="{{ url('/') }}/Flat-UI/docs/assets/images/video/poster.jpg"
      data-setup='{}'>
      <source src="http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.mp4" type="video/mp4"></source>
      <source src="http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.webm" type="video/webm"></source>
      <p class="vjs-no-js">
        To view this video please enable JavaScript, and consider upgrading to a
        web browser that
        <a href="http://videojs.com/html5-video-support/" target="_blank">
          supports HTML5 video
        </a>
      </p>
    </video>
  </div> <!-- /video -->
</div>
