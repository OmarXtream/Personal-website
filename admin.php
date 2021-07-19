<?php include 'inc/header.php'; ?>
    <!-- toTop Button -->
    <div id="totop" class="text-center d-none">
      <i class="fas fa-chevron-up"></i>
    </div>

    <!-- Wrapper & Container -->
    <div class="wrapper container" id="top">
      <!-- Row to cut the page to 2 parts -->
      <div class="row">
        <!-- Profile Part -->
        <!-- Page's Content & Navbar part -->
        <div class="col-lg-12" id="content">
          <div class="row">
            <!-- content -->
            <div class="col-md-12">
              <div class="content">
                <div class="admin" id="admin">
                  <div class="section">
                    <h4 id="adminWelcome" class="text-center"></h4>
                    <?php
                      include 'staff/admin.php';
                    ?>
                  </div>
                </div>
              </div>
            </div>

            <!-- footer -->
            <div class="col-md-12">
              <footer class="footer text-center">
                Designed & Programmed with <span style="color: red;"><i class="fas fa-heart"></i></span> By <a href="http://MASAFAT.Co" target="_blank">MASAFAT.Co  <img src="imgs/icon.png" alt="MASAFAT Logo"></a>
              </footer>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
      include 'inc/scripts.php';
    ?>
    <script>
      new TypeIt('#adminWelcome', {
        strings: "مرحباً بك في لوحة تحكم المسؤول! <a style='color: red; font-size: 14px; text-decoration: underline' onclick='hideAdminWelcome()'>إغلاق</a>",
        speed: 100,
        loop: true,
        loopDelay: 2500,
        waitUntilVisible: true
      }).go();

      function hideAdminWelcome() {$("#adminWelcome").addClass("d-none")}
    </script>
    <?php
      include 'inc/footer.php';
     ?>
