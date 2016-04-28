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
          <h1 class="main-heading">Spring 2015 Calendar</h1>
          <table id="calendar">
            <thead>
              <!--<tr>
                <th colspan="6">January</th>
              </tr>-->
              <tr>
                <th></th>
                <th width="18%">M</th>
                <th width="18%">T</th>
                <th width="18%">W</th>
                <th width="18%">R</th>
                <th width="18%">F</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="time">8:00</td>
                <td class="block-monday"></td>
                <td class="block-tuesday">ITIS 1212</td>
                <td class="block-wednesday"></td>
                <td class="block-thursday">ITIS 1212</td>
                <td class="block-friday"></td>
              </tr>
              <tr>
                <td class="time">9:30</td>
                <td class="block-monday"></td>
                <td class="block-tuesday"></td>
                <td class="block-wednesday"></td>
                <td class="block-thursday"></td>
                <td class="block-friday"></td>
              </tr>
              <tr>
                <td class="time">11:00</td>
                <td class="block-monday"></td>
                <td class="block-tuesday"></td>
                <td class="block-wednesday"></td>
                <td class="block-thursday"></td>
                <td class="block-friday"></td>
              </tr>
              <tr>
                <td class="time">12:30</td>
                <td class="block-monday"></td>
                <td class="block-tuesday">ITIS 2110</td>
                <td class="block-wednesday"></td>
                <td class="block-thursday"></td>
                <td class="block-friday"></td>
              </tr>
              <tr>
                <td class="time">2:00</td>
                <td class="block-monday"></td>
                <td class="block-tuesday"></td>
                <td class="block-wednesday"></td>
                <td class="block-thursday"></td>
                <td class="block-friday"></td>
              </tr>
              <tr>
                <td class="time">3:30</td>
                <td class="block-monday"></td>
                <td class="block-tuesday"></td>
                <td class="block-wednesday">ITIS 3105</td>
                <td class="block-thursday"></td>
                <td class="block-friday">ITIS 3105</td>
              </tr>
              <tr>
                <td class="time">5:00</td>
                <td class="block-monday"></td>
                <td class="block-tuesday"></td>
                <td class="block-wednesday"></td>
                <td class="block-thursday"></td>
                <td class="block-friday"></td>
              </tr>
              <tr>
                <td class="time">6:30</td>
                <td class="block-monday"></td>
                <td class="block-tuesday"></td>
                <td class="block-wednesday"></td>
                <td class="block-thursday"></td>
                <td class="block-friday"></td>
              </tr>
            </tbody>
          </table>
          <div class="align-center grid-block">
            <a class="button primary large" href="<?php echo $userHistoryPage; ?>"><i class="fa fa-arrow-left"></i> VIEW OTHER SCHEDULES</a>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(function() {
        $('#calendar tbody tr td:not(".time")').each(function() {
          if ($(this).html() != "") {
            $(this).css({'background-color':'rgb(138, 181, 161)', 'color':'white'});
          }
        });
      });
    </script>
  </body>
</html>
