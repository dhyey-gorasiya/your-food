<!-- restaurant-list.php -->
<?php
if (isset($_POST['find'])) {
  $area_id = $_POST['area'];

  include 'dbCon.php';
  include 'template/header.php'; ?>

  <body>

    <?php include 'template/nav-bar.php'; ?>
    <?php include 'template/search-header.php'; ?>
    <!-- END Header -->

    <section id="menu-list" class="section-padding">
      <div class="container">
        <div class="row justify-content-md-center">
          <form action="book.php" method="POST">
            <div class="col-md-12 text-center marb-35">
              <div class="header-h">Discover our exclusive restaurants</div>
              <p class="header-p">Here you will find the list of all our partner restaurants.
              </p>
            </div>
            <div class="col-md-12 text-center" id="menu-filters">
              <ul class="ul-menus">
                <li><a class="filter active" data-filter=".menu-restaurant">See all</a></li>
                <li><a class="filter " data-filter=".wine_bar">Pizza</a></li>
                <li><a class="filter " data-filter=".bio">Burger</a></li>
                <li><a class="filter " data-filter=".bistro_brass">South Indian</a></li>
                <li><a class="filter " data-filter=".waffles">Gujarati</a></li>
                <li><a class="filter " data-filter=".world_food">Panjabi</a></li>
                <li><a class="filter " data-filter=".gourmet">Chinese</a></li>
                <li><a class="filter " data-filter=".pizza">North Indian</a></li>
                <li><a class="filter " data-filter=".tea">Tea bar</a></li>
                <li><a class="filter " data-filter=".traditional">Momos</a></li>
                <li><a class="filter " data-filter=".vegetarian">Non-Vegetarian</a></li>
              </ul>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <?php
                $con = connect();
                $sql = "SELECT * FROM `rc_info` WHERE location = '$area_id' AND `category` = 1 AND isActive='1';";
                $result = $con->query($sql);
                foreach ($result as $r) {
                ?>
                  <div class="wine_bar menu-restaurant">
                    <div class="menus">
                      <div class="menu-img">
                        <img class="rounded-circle" src="dashboard/user-image/<?php echo $r['logo']; ?>" alt="image" width="100" height="100" style="margin-right: 2em ;">
                      </div>
                      <div class="text d-flex">
                        <div class="row one-half">
                          <div class="col-lg-12">
                            <h3 class="h3-menus"><?php echo $r['rc_name']; ?></h3>
                          </div>
                          <div class="col-lg-12">
                            <p class="p-menus"><?php echo $r['address']; ?></p>
                          </div>
                        </div>
                        <div class="one-third">
                          <a href="reservation.php?res_id=<?php echo $r['id']; ?>" class="btn btn-warning" style="width: 100%;margin-top: 20px;">Book</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <?php
                $con = connect();
                $sql = "SELECT * FROM `rc_info` WHERE location = '$area_id' AND `category` = 2 AND isActive='1';";
                $result = $con->query($sql);
                foreach ($result as $r) {
                ?>
                  <div class="bio menu-restaurant">
                    <div class="menus">
                      <div class="menu-img">
                        <img class="rounded-circle" src="dashboard/user-image/<?php echo $r['logo']; ?>" alt="image" width="100" height="100" style="margin-right: 2em ;">
                      </div>
                      <div class="text d-flex">
                        <div class="row one-half">
                          <div class="col-lg-12">
                            <h3 class="h3-menus"><?php echo $r['rc_name']; ?></h3>
                          </div>
                          <div class="col-lg-12">
                            <p class="p-menus"><?php echo $r['address']; ?></p>
                          </div>
                        </div>
                        <div class="one-third">
                          <a href="reservation.php?res_id=<?php echo $r['id']; ?>" class="btn btn-warning" style="width: 100%;margin-top: 20px;">Book</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <?php
                $con = connect();
                $sql = "SELECT * FROM `rc_info` WHERE location = '$area_id' AND `category` = 3 AND isActive='1';";
                $result = $con->query($sql);
                foreach ($result as $r) {
                ?>
                  <div class="bistro_brass menu-restaurant">
                    <div class="menus ">
                      <div class="menu-img">
                        <img class="rounded-circle" src="dashboard/user-image/<?php echo $r['logo']; ?>" alt="image" width="100" height="100" style="margin-right: 2em;">
                      </div>
                      <div class="text d-flex">
                        <div class="row one-half">
                          <div class="col-lg-12">
                            <h3 class="h3-menus"><?php echo $r['rc_name']; ?></h3>
                          </div>
                          <div class="col-lg-12">
                            <p class="p-menus"><?php echo $r['address']; ?></p>
                          </div>
                        </div>
                        <div class="one-third">
                          <a href="reservation.php?res_id=<?php echo $r['id']; ?>" class="btn btn-warning" style="width: 100%;margin-top: 20px;">Book</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <?php
                $con = connect();
                $sql = "SELECT * FROM `rc_info` WHERE location = '$area_id' AND `category` = 4 AND isActive='1';";
                $result = $con->query($sql);
                foreach ($result as $r) {
                ?>
                  <div class="waffles menu-restaurant">
                    <div class="menus">
                      <div class="menu-img">
                        <img class="rounded-circle" src="dashboard/user-image/<?php echo $r['logo']; ?>" alt="image" width="100" height="100" style="margin-right: 2em ;">
                      </div>
                      <div class="text d-flex">
                        <div class="row one-half">
                          <div class="col-lg-12">
                            <h3 class="h3-menus"><?php echo $r['rc_name']; ?></h3>
                          </div>
                          <div class="col-lg-12">
                            <p class="p-menus"><?php echo $r['address']; ?></p>
                          </div>
                        </div>
                        <div class="one-third">
                          <a href="reservation.php?res_id=<?php echo $r['id']; ?>" class="btn btn-warning" style="width: 100%;margin-top: 20px;">Book</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <?php
                $con = connect();
                $sql = "SELECT * FROM `rc_info` WHERE location = '$area_id' AND `category` = 5 AND isActive='1';";
                $result = $con->query($sql);
                foreach ($result as $r) {
                ?>
                  <div class="world_food menu-restaurant">
                    <div class="menus">
                      <div class="menu-img">
                        <img class="rounded-circle" src="dashboard/user-image/<?php echo $r['logo']; ?>" alt="image" width="100" height="100" style="margin-right: 2em;">
                      </div>
                      <div class="text d-flex">
                        <div class="row one-half">
                          <div class="col-lg-12">
                            <h3 class="h3-menus"><?php echo $r['rc_name']; ?></h3>
                          </div>
                          <div class="col-lg-12">
                            <p class="p-menus"><?php echo $r['address']; ?></p>
                          </div>
                        </div>
                        <div class="one-third">
                          <a href="reservation.php?res_id=<?php echo $r['id']; ?>" class="btn btn-warning" style="width: 100%;margin-top: 20px;">Book</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <?php
                $con = connect();
                $sql = "SELECT * FROM `rc_info` WHERE location = '$area_id' AND `category` = 6 AND isActive='1';";
                $result = $con->query($sql);
                foreach ($result as $r) {
                ?>
                  <div class="gourmet menu-restaurant">
                    <div class="menus">
                      <div class="menu-img">
                        <img class="rounded-circle" src="dashboard/user-image/<?php echo $r['logo']; ?>" alt="image" width="100" height="100" style="margin-right: 2em ;">
                      </div>
                      <div class="text d-flex">
                        <div class="row one-half">
                          <div class="col-lg-12">
                            <h3 class="h3-menus"><?php echo $r['rc_name']; ?></h3>
                          </div>
                          <div class="col-lg-12">
                            <p class="p-menus"><?php echo $r['address']; ?></p>
                          </div>
                        </div>
                        <div class="one-third">
                          <a href="reservation.php?res_id=<?php echo $r['id']; ?>" class="btn btn-warning" style="width: 100%;margin-top: 20px;">Book</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <?php
                $con = connect();
                $sql = "SELECT * FROM `rc_info` WHERE location = '$area_id' AND `category` = 7 AND isActive='1';";
                $result = $con->query($sql);
                foreach ($result as $r) {
                ?>
                  <div class="pizza menu-restaurant">
                    <div class="menus">
                      <div class="menu-img">
                        <img class="rounded-circle" src="dashboard/user-image/<?php echo $r['logo']; ?>" alt="image" width="100" height="100" style="margin-right: 2em ;">
                      </div>
                      <div class="text d-flex">
                        <div class="row one-half">
                          <div class="col-lg-12">
                            <h3 class="h3-menus"><?php echo $r['rc_name']; ?></h3>
                          </div>
                          <div class="col-lg-12">
                            <p class="p-menus"><?php echo $r['address']; ?></p>
                          </div>
                        </div>
                        <div class="one-third">
                          <a href="reservation.php?res_id=<?php echo $r['id']; ?>" class="btn btn-warning" style="width: 100%;margin-top: 20px;">Book</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <?php
                $con = connect();
                $sql = "SELECT * FROM `rc_info` WHERE location = '$area_id' AND `category` = 8 AND isActive='1';";
                $result = $con->query($sql);
                foreach ($result as $r) {
                ?>
                  <div class="tea menu-restaurant">
                    <div class="menus">
                      <div class="menu-img">
                        <img class="rounded-circle" src="dashboard/user-image/<?php echo $r['logo']; ?>" alt="image" width="100" height="100" style="margin-right: 2em ;">
                      </div>
                      <div class="text d-flex">
                        <div class="row one-half">
                          <div class="col-lg-12">
                            <h3 class="h3-menus"><?php echo $r['rc_name']; ?></h3>
                          </div>
                          <div class="col-lg-12">
                            <p class="p-menus"><?php echo $r['address']; ?></p>
                          </div>
                        </div>
                        <div class="one-third">
                          <a href="reservation.php?res_id=<?php echo $r['id']; ?>" class="btn btn-warning" style="width: 100%;margin-top: 20px;">Book</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <?php
                $con = connect();
                $sql = "SELECT * FROM `rc_info` WHERE location = '$area_id' AND `category` = 9 AND isActive='1';";
                $result = $con->query($sql);
                foreach ($result as $r) {
                ?>
                  <div class="traditional menu-restaurant">
                    <div class="menus">
                      <div class="menu-img">
                        <img class="rounded-circle" src="dashboard/user-image/<?php echo $r['logo']; ?>" alt="image" width="100" height="100" style="margin-right: 2em ;">
                      </div>
                      <div class="text d-flex">
                        <div class="row one-half">
                          <div class="col-lg-12">
                            <h3 class="h3-menus"><?php echo $r['rc_name']; ?></h3>
                          </div>
                          <div class="col-lg-12">
                            <p class="p-menus"><?php echo $r['address']; ?></p>
                          </div>
                        </div>
                        <div class="one-third">
                          <a href="reservation.php?res_id=<?php echo $r['id']; ?>" class="btn btn-warning" style="width: 100%;margin-top: 20px;">Book</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <?php
                $con = connect();
                $sql = "SELECT * FROM `rc_info` WHERE location = '$area_id' AND `category` = 10 AND isActive='1';";
                $result = $con->query($sql);
                foreach ($result as $r) {
                ?>
                  <div class="vegetarian menu-restaurant">
                    <div class="menus">
                      <div class="menu-img">
                        <img class="rounded-circle" src="dashboard/user-image/<?php echo $r['logo']; ?>" alt="image" width="100" height="100" style="margin-right: 2em ;">
                      </div>
                      <div class="text d-flex">
                        <div class="row one-half">
                          <div class="col-lg-12">
                            <h3 class="h3-menus"><?php echo $r['rc_name']; ?></h3>
                          </div>
                          <div class="col-lg-12">
                            <p class="p-menus"><?php echo $r['address']; ?></p>
                          </div>
                        </div>
                        <div class="one-third">
                          <a href="reservation.php?res_id=<?php echo $r['id']; ?>" class="btn btn-warning" style="width: 100%;margin-top: 20px;">Book</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <?php include 'template/instagram.php'; ?>

    <?php include 'template/footer.php'; ?>

    <?php include 'template/bootstrap.php'; ?>

    <?php include 'template/script.php'; ?>

    <script>
      (function($) {

        // Menu filter
        $("#menu-filters li a").click(function() {
          $("#menu-filters li a").removeClass('active');
          $(this).addClass('active');

          var selectedFilter = $(this).data("filter");
          //  $("#menu-wrapper").fadeTo(100, 0);

          $(".menu-restaurant").fadeOut();

          setTimeout(function() {
            $(selectedFilter).slideDown();
            //$("#menu-wrapper").fadeTo(300, 1);
          }, 300);
        });

      })(jQuery);
    </script>
  </body>

  </html>
<?php
} else {
}
?>