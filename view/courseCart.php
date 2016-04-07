<?php include 'partials/globalVars.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $siteTitle; ?> | Cart</title>
    <?php include 'partials/preBodyHead.php'; ?>
  </head>
  <body>
    <div class="grid-frame">
      <!-- Side Menu -->
      <?php include 'partials/sideMenu.php'; ?>

      <div class="grid-block collapse medium-9 large-10 vertical">
        <!-- Top Bar -->
        <?php include 'partials/topMenu.php'; ?>
        <!-- Body -->
        <div class="grid-container">
          <h1 class="main-heading">Course Cart</h1>
          <div class="align-right grid-block">
            <ul class="button-group segmented">
              <li><a href="#"><i class="fa fa-calendar"></i></a></li>
              <li class="is-active"><a href="#"><i class="fa fa-bars"></i></a></li>
            </ul>
          </div>
          <section class="block-list wide">
            <ul>
              <li><a href="#">
                <strong>ITIS 1212 Media Programming</strong>
                <span class="block-list-label">3 HRS</span>
                <br/>Bruce Long</a></li>
              <li><a href="#">
                <strong>ITIS 3105 Server Side Applications and Databases</strong>
                <span class="block-list-label">3 HRS</span>
                <br/>Dale Marie Wilson</a></li></a></li>
              <li><a href="#">
                <strong>ITIS 2110 IT Infrastructure</strong>
                <span class="block-list-label">3 HRS</span>
                <br/>Tony Kombol</a></li></a></li>
              <li><a href="#">&nbsp;<span class="block-list-label">
                <strong>SUBTOTAL: 15 HRS</strong></span></a></li>
            </ul>
          </section>
          <div class="align-right grid-block">
            <a class="button primary large" href="<?php echo $confirmationPage; ?>">CHECKOUT</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
