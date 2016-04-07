<div zf-panel position="left" id="sidebar" class="medium-grid-block collapse medium-3 large-2 vertical">
  <div id="sideMenu-upper" class="grid-content">
    <img id="main-logo" src="<?php echo $pathToImg; ?>courseventure-logo-light.jpg" alt="Course Venture">
    <ul id="sideMenu-upper-list" class="vertical menu-bar">
      <li><a href="<?php echo $homePage; ?>">HOME</a></li>
      <li><a href="<?php echo $aboutPage; ?>">ABOUT</a></li>
      <li><a href="<?php echo $resultsPage; ?>">SHOP</a></li>
    </ul>
  </div>
  <div id="sideMenu-lower" class="grid-content">
    <ul id="sideMenu-lower-list" class="vertical menu-bar">
      <li><a href="<?php echo $cartPage; ?>"><img src="<?php echo $pathToIcons; ?>cart.svg" alt="Cart"/>&nbsp;VIEW CART</a></li>
      <li>(3) COURSES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15 h</li>
      <hr/>
      <li><a href="<?php echo '.?action=display_settings' ; ?>"><img src="<?php echo $pathToIcons; ?>user.svg" alt="User"/>&nbsp;MY ACCOUNT</a></li>
      <li><a href="<?php echo $userHistoryPage; ?>"><img src="<?php echo $pathToIcons; ?>calendar.svg" alt="Calendar"/>&nbsp;MY CALENDARS</a></li>
      <li><a href="<?php echo $helpPage; ?>"><img src="<?php echo $pathToIcons; ?>help.svg" alt="Help"/>&nbsp;NEED HELP?</a></li>
    </ul>
  </div>
</div>
