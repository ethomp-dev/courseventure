<form action="." method="post">
  <div class="shrink collapse grid-content">
    <div class="dark title-bar">
      <span class="center">
        <label>
          <span class="inline-label">
            <input type="hidden" name="action" value="search_courses"/>
            <input name="search_input" type="search" placeholder="Search">
            <input type="submit" class="fa button light" value="&#xf002;"/>
          </span>
        </label>
        <span id="logoutIcon">
          <a href="<?php echo '.?action=logout'; ?>"><i class="fa fa-sign-out fa-2x"></i></a>
        </span>
      </span>
    </div>
  </div>
</form>
