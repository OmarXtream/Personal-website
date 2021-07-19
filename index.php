<?php include 'inc/header.php'; ?>
    <div id="totop" class="text-center d-none">
      <i class="fas fa-chevron-up"></i>
    </div>
    <!-- Wrapper & Container -->
    <div class="wrapper container" id="top">
      <!-- Row to cut the page to 2 parts -->
      <div class="row">
        <!-- Profile Part -->
        <div class="col-lg-3" id="profile">
          <div class="profile text-center">
            <div class="container-fluid">
              <div class="close float-left">
                <i class="fas fa-times"></i>
              </div>
              <div class="clearfix"></div>

              <figure class="figure">
                <img src="imgs/user.jpg" class="figure-img img-fluid" alt="Hassan Sh. Img">
              </figure>

            <div class="title">
              <h3>حسن الشمري</h3>
              <h5>إدارة / مطور مواقع</h5>
            </div>

            <ul class="info text-left">
              <li></li>
              <li><p><span> <i class="fas fa-arrow-left"></i> &nbsp; الإسم:</span> حسن ش. الشمري </p></li>
              <li><p><span> <i class="fas fa-arrow-left"></i> &nbsp; الميلاد</span> الكويت، 08-03-02 </p></li>
              <li><p><span> <i class="fas fa-arrow-left"></i> &nbsp; العمل</span> مطور مواقع ، مدير </p></li>
              <li><p><span> <i class="fas fa-arrow-left"></i> &nbsp; البريد:</span> <a href="mailto:hassan@masafat.co?subject=feedback">Hassan@MASAFAT.Co</a> </p></li>
            </ul>

            <a href="mailto:hassan@masafat.co?subject=feedback"><button type="button" class="btn" ><i class="fas fa-reply"></i> &nbsp; تواصل معي</button></a>
          </div>
          </div>
        </div>

        <!-- Page's Content & Navbar part -->
        <div class="col-lg-9" id="content">
          <div class="row">
            <!-- Navbar -->
            <div class="col-md-12">
              <!-- pages -->
              <nav class="navbar navbar-expand-md navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active" data-class="home">
                      <a class="nav-link">الرئيسية<span class="sr-only">(الحالي)</span></a>
                    </li>

                    <li class="nav-item" data-class="resume">
                      <a class="nav-link">السيرة الذاتية</a>
                    </li>

                    <li class="nav-item" data-class="gallary">
                      <a class="nav-link">معرض الصور</a>
                    </li>

                    <li class="nav-item" data-class="sarahah">
                      <a class="nav-link">صراحة</a>
                    </li>

                    <li class="nav-item" data-class="contactme">
                      <a class="nav-link">تواصل معي</a>
                    </li>
                  </ul>

                  <ul class="social text-right d-none d-lg-block">
                    <li> <a href="https://t.me/Katyusha_MASAFAT" target="_blank"> <i class="fab fa-telegram-plane"></i> </a> </li>
                    <li> <a href="https://twitter.com/ItsKatyusha" target="_blank"> <i class="fab fa-twitter"></i> </a> </li>
                    <!-- <li> <a href="#"> <i class="fab fa-youtube"></i> </a> </li> -->
                    <li> <a href="https://www.instagram.com/alshammari.h22/" target="_blank"> <i class="fab fa-instagram"></i> </a> </li>
                  </ul>
                </div>
              </nav>
            </div>

            <!-- content -->
            <div class="col-md-12">
              <div class="content">
                <?php
                  include 'sections/home.php';
                  include 'sections/resume.php';
                  include 'sections/gallary.php';
                  include 'sections/sarahah.php';
                  include 'sections/contactme.php';
                ?>
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
      new TypeIt('#soonResume', {
        strings: '<strong>قريباً</strong>',
        speed: 100,
        loop: true,
        loopDelay: 2500,
        waitUntilVisible: true
      }).go();

      Swal.fire({
        title: 'نعتذر',
        text: 'يرجى العلم بأن الموقع لا يزال تحت التطوير، شكراً لتفهمكم..',
        type: 'info',
        confirmButtonText: 'حسناً'
      });
    </script>

    <?php
      include 'inc/footer.php';
     ?>
