<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">الرئيسية</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-gallary-tab" data-toggle="pill" href="#pills-gallary" role="tab" aria-controls="pills-gallary" aria-selected="false">معرض الصور</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-sarahah-tab" data-toggle="pill" href="#pills-sarahah" role="tab" aria-controls="pills-sarahah" aria-selected="false">صراحة</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="pills-contactme-tab" data-toggle="pill" href="#pills-contactme" role="tab" aria-controls="pills-contactme" aria-selected="false">تواصل معي</a>
  </li>
</ul>

<div class="tab-content" id="pills-tabContent">
  <?php
    include 'staff/sections/home.php';
    include 'staff/sections/gallary.php';
    include 'staff/sections/sarahah.php';
    include 'staff/sections/contactme.php';
  ?>
</div>
