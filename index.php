<?php get_header(); ?>

<!--Carousel Wrapper-->
<div class="debug">
  <label><input type="checkbox"> Debug</label>
</div>
<div class="parallax">
    <div id="group1" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
          <div class="title">
              <div class="title-child">
              </div>
          </div>
      </div>
    </div>
    <div id="group2" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
          <div class="title">
              <div class="title-child">
              </div>
          </div>
      </div>
      <div class="parallax__layer parallax__layer--back">
        <div class="title" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img%20(24).jpg'); background-repeat: no-repeat; background-size: cover;"></div>
      </div>
    </div>
    <div id="group3" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">
            <div class="title-child">
            </div>
        </div>
      </div>
    </div>
    <div id="group4" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
          <div class="title">
              <div class="title-child">
              </div>
          </div>
      </div>
      <div class="parallax__layer parallax__layer--back">
          <div class="title" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/img%20(40).jpg'); background-repeat: no-repeat; background-size: cover;"></div>
      </div>
    </div>
    <div id="group5" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
          <div class="title">
              <div class="title-child">
              </div>
          </div>
      </div>
    </div>
    <div id="group6" class="parallax__group">
      <div class="parallax__layer parallax__layer--back">
          <div class="title" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/img (43).jpg'); background-repeat: no-repeat; background-size: cover;"></div>
      </div>
      <div class="parallax__layer parallax__layer--base">
          <div class="title">
              <div class="title-child">
              </div>
          </div>
      </div>
    </div>
    <div id="group7" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
          <div class="title">
              <div class="title-child">
              </div>
          </div>
      </div>
    </div>
</div>
<script>
    var debugInput = document.querySelector("input");
    function updateDebugState() {
        document.body.classList.toggle('debug-on', debugInput.checked);
    }
    debugInput.addEventListener("click", updateDebugState);
    updateDebugState();
  </script>
<?php get_footer(); ?>
