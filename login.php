<?php include 'inc/header.php'; ?>
    <!-- toTop Button -->
    <div id="totop" class="text-center d-none">
      <i class="fas fa-chevron-up"></i>
    </div>

    <div class="container">
      <?php
        include 'staff/login.php';
       ?>
    </div>

    <?php
      include 'inc/scripts.php';
    ?>
    <script>
      new TypeIt('#login', {
        strings: 'تسجيل الدخول',
        speed: 100,
        loop: true,
        loopDelay: 2500,
        waitUntilVisible: true
      }).go();
    </script>
    <?php
      include 'inc/footer.php';
     ?>
