<!doctype html>
<html class="no-js" lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
.w3-third img:hover{opacity: 1}
</style>

<head>
  <?php include('header.php')?>
</head>


<body>

  <?php include('navbar.php')?>



<div class="loader"><div class="page-loader"></div></div>

<img src="images/demo/bird-log.png" alt="Shard" class="shard">

<div class="welcome d-flex justify-content-center flex-column">
    <div class="inner-wrapper mt-auto mb-auto">
        <h2 class="slide-in">เทคโนโลยีสารสนเทศ</h2>
        <h5 class="slide-in">มหาวิทยาลัยเทคโนโลยีสุรนารี</h5>
    </div>
</div>
<!-- Page Content -->
<div class="page-content mt-5">
<div id="cards" class="container mb-2" style="padding-bottom: 1px">
  <div class="example col-md-12 ml-auto mr-auto">

    <div class="section-title col-lg-12 col-md-12 ml-auto mr-auto">
      <h2 class="mb-4 text-center"><i class="fa fa-file-image-o" aria-hidden="true"></i> ภาพกิจกรรมนักศึกษา </h2>
      <center><p>ภาพกิจกรรมและบรรยากาศของ สาขาวิชาเทคโนโลยีสารสนเทศ มหาวิทยาลัยเทคโนโลยีสุรนารี</p></center>
    </div>



  </div>
</div>


<br>


<div class="py-5">
    <!-- Icon Packs -->


    <!-- !PAGE CONTENT! -->
    <div>


      <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto">
          <h3 class="mb-4">ภาพกิจกรรมที่ 1 </h3>
          <p>รายละเอียดกิจกรรม</p>
      </div>

      <!-- Photo grid -->
      <div class="w3-row">
        <div class="w3-third">
          <img src="images/stock-photos/2.jpg" style="width:100%" onclick="onClick(this)" alt="ครบรอบ 20 ปี สาขาวิชาเทคโนโลยีสารสนเทศ">
          <img src="images/stock-photos/master.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful scenery this sunset">
          <img src="images/stock-photos/3.jpg" style="width:100%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful">
        </div>

        <div class="w3-third">
          <img src="images/stock-photos/master.jpg" style="width:100%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful">
          <img src="images/stock-photos/2.jpg" style="width:100%" onclick="onClick(this)" alt="Waiting for the bus in the desert">
          <img src="images/stock-photos/bachelor.jpg" style="width:100%" onclick="onClick(this)" alt="Nature again.. At its finest!">
        </div>

        <div class="w3-third">
          <img src="images/stock-photos/bachelor.jpg" style="width:100%" onclick="onClick(this)" alt="Canoeing again">
          <img src="images/stock-photos/master.jpg" style="width:100%" onclick="onClick(this)" alt="A girl, and a train passing">
          <img src="images/stock-photos/2.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful day!">
        </div>
      </div>



      <!-- Modal for full size images on click-->
      <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
        <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
          <img id="img01" class="w3-image">
          <p id="caption"></p>
        </div>
      </div>





        </div>


</div>

<div class="py-5">
    <!-- Icon Packs -->


    <!-- !PAGE CONTENT! -->
    <div>


      <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto">
          <h3 class="mb-4">ภาพกิจกรรมที่ 2 </h3>
          <p>รายละเอียดกิจกรรม</p>
      </div>

      <!-- Photo grid -->
      <div class="w3-row">
        <div class="w3-third">
          <img src="images/stock-photos/2.jpg" style="width:100%" onclick="onClick(this)" alt="ครบรอบ 20 ปี สาขาวิชาเทคโนโลยีสารสนเทศ">
          <img src="images/stock-photos/master.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful scenery this sunset">
          <img src="images/stock-photos/3.jpg" style="width:100%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful">
        </div>

        <div class="w3-third">
          <img src="images/stock-photos/master.jpg" style="width:100%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful">
          <img src="images/stock-photos/2.jpg" style="width:100%" onclick="onClick(this)" alt="Waiting for the bus in the desert">
          <img src="images/stock-photos/bachelor.jpg" style="width:100%" onclick="onClick(this)" alt="Nature again.. At its finest!">
        </div>

        <div class="w3-third">
          <img src="images/stock-photos/bachelor.jpg" style="width:100%" onclick="onClick(this)" alt="Canoeing again">
          <img src="images/stock-photos/master.jpg" style="width:100%" onclick="onClick(this)" alt="A girl, and a train passing">
          <img src="images/stock-photos/2.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful day!">
        </div>
      </div>



      <!-- Modal for full size images on click-->
      <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
        <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
          <img id="img01" class="w3-image">
          <p id="caption"></p>
        </div>
      </div>





        </div>


</div>



  <?php include('footer.php')?>

</div>

  <?php include('import-javascript.php')?>
  <script src="js/bachelor.js"></script>

  <script>
  // Script to open and close sidebar
  function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
  }

  function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
  }

  // Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
  }

  </script>

</body>
</html>
