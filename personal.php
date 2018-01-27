<html class="no-js" lang="en">
<head>
  <?php include('header.php')?>
  <link href="css/hover-teacher.css" rel="stylesheet">
  <link href="css/hover-staff.css" rel="stylesheet">
</head>
<body>
  <?php include('navbar.php')?>

  <div class="page-content">
    <div class="container mt-5">
    <div class="row">
      <div class="section-title col-lg-12 col-md-10 mt-5 ml-auto mr-auto">
        <h1 class="mb-4">คณาจารย์</h1><br>
      </div>
    </div>
<div class="row" id="list_teacher">
  <div id="load"></div>
</div>

<div class="row">
  <div class="section-title col-lg-12 col-md-10 mt-5 ml-auto mr-auto">
    <h1 class="mb-4">เจ้าหน้าที่บริหารงานทั่วไป</h1><br>
  </div>
</div>

<div class="row" id="list_admin">
</div>

<div class="row">
  <div class="section-title col-lg-12 col-md-10 mt-5 ml-auto mr-auto">
    <h1 class="mb-4">ผู้ช่วยสอนและวิจัย</h1><br>
  </div>
</div>

<div class="row" id="list_ta">
</div>


</div>
  <?php include('footer.php')?>
</div>
</body>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8Mg5Fex-2rEgnmve3DCccIAokXhcqmpA" type="text/javascript"></script>
  <?php include('modal-personal.php')?>
  <?php include('import-javascript.php')?>
  <script src="js/personal.js"></script>
</html>
