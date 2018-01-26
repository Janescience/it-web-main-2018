<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php include('header.php')?>
</head>

<body>

  <?php include('navbar.php')?>

<div class="loader"><div class="page-loader"></div></div>

<!-- Floating Shards -->
<img src="images/demo/bird.png" alt="Shard" class="shard">

<!-- Welcome Section -->
<div class="welcome d-flex justify-content-center flex-column">
    <div class="inner-wrapper mt-auto mb-auto">
        <h2 class="slide-in">เทคโนโลยีสารสนเทศ</h2>
        <h6 class="slide-in">มหาวิทยาลัยเทคโนโลยีสุรนารี</h6>
    </div>
</div>

<!-- Page Content -->
<div class="page-content">



  <!-- Image Header Slide -->
  <div id="cards" class="container mb-2 " style="padding-bottom: 1px">
    <div class="col-lg-12 col-md-12 col-sm-12  ml-auto mr-auto">
      <div class="card ">

        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">

          <ol class="carousel-indicators ">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol>

          <div id="imageHeaderSlide" class="carousel-inner card-img-top card-img-bottom">

          </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>

      </div>
    </div>
  </div>

  <br><br>

<div id="documentation" class="bg-light">
  <div class="section-title container ml-auto mr-auto py-5">
    <div class="col-lg-8 col-md-10 ml-auto mr-auto py-5">
      <h1 class="mb-2 text-center">💡</h1>
      <h3 class="mb-4 text-center">เกี่ยวกับสาขาวิชา</h3>
      <p class="text-center text-muted">ปรัชญาและวัตุประสงค์</p>

      <a class="d-table ml-auto mr-auto" id="detailAbout" href="javascript:void(0)">
        <button class="btn btn-pill btn-outline-primary"><i class="fa fa-book mr-1"></i> รายละเอียด</button>
      </a>


    </div>
  </div>
</div>

<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">💡 เกี่ยวกับสาขาวิชา</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <h5 class="text-center">ปริญญาตรี</h5>
        <h6 >ปรัชญา</h6>
        <p id="philosophyBachelor"></p>

        <h6>วัตถุประสงค์</h6>
        <p id="purposeBachelor"></p>
        <h5 class="text-center">มหาบัณฑิตและดุษฎีบัณฑิต</h5>
        <h6>ปรัชญา</h6>
        <p id="philosophyMasterAndDoctor"></p>
        <h6>วัตถุประสงค์</h6>
        <p id="purposeMasterAndDoctor"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Nope</button>
      </div>
    </div>
  </div>
</div>

<br><br>
  <!-- Education Card -->
  <div id="cards" class="container mb-2" style="padding-bottom: 1px">
    <div class="example col-md-12 ml-auto mr-auto">

      <div class="section-title col-lg- col-md-10 ml-auto mr-auto">
        <h3 class="mb-4 text-center"> 🎓 ระดับการศึกษา</h3><br>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6 col-sm-12 ">
          <div class="card">

            <img class="card-img-top" id="imgBachelor" src="images/demo/load.gif" alt="Card image cap">

            <div class="card-body text-center">
              <h4 class="card-title">ระดับปริญญาตรี</h4>
              <a href="#" class="btn btn-primary">อ่านรายละเอียด</a>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 sm-hidden">
          <div class="card">

            <img class="card-img-top" id="imgMaster" src="images/demo/load.gif" alt="Card image cap">

            <div class="card-body text-center">
              <h4 class="card-title ">ระดับปริญญาโท</h4>
              <a href="#" class="btn btn-primary">อ่านรายละเอียด</a>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 sm-hidden">
          <div class="card">

            <img class="card-img-top" id="imgDoctor" src="images/demo/load.gif" alt="Card image cap">

            <div class="card-body text-center">
              <h4 class="card-title text-center">ระดับปริญญาเอก</h4>
              <a href="#" class="btn btn-primary">อ่านรายละเอียด</a>
            </div>

          </div>
        </div>


      </div>
    </div>
  </div>

<!-- Course -->
  <div class="our-services section py-4">
    <h3 class="section-title text-center my-5"> 📘 หลักสูตร</h3>

        <div class="features py-4 mb-4">
          <div class="container">
            <div class="row">

              <div class="feature py-4 col-md-6 d-flex">
                <div class="icon text-primary mr-3"><i class="fa fa-laptop"></i></div>
                <div class="px-4">
                    <h5>Enterprise Software</h5>
                    <p>กระบวนการในการวิเคราะห์ ออกแบบ และพัฒนาซอฟต์แวร์ ด้วยภาษาการโปรแกรมรูปแบบต่าง ๆ ทั้งที่เป็นโปรแกรมประยุกต์บนเว็บ และบนอุปกรณ์เคลื่อนที่</p>
                </div>
              </div>

              <div class="feature py-4 col-md-6 d-flex">
                <div class="icon text-primary mr-3"><i class="fa fa-line-chart"></i></div>
                <div class="px-4">
                    <h5>Business Intelligence and Data Analytics</h5>
                    <p>กระบวนการในการวิเคราะห์ข้อมูลทางธุรกิจด้วยเทคนิคและโปรแกรมคอมพิวเตอร์ เพื่อใช้ประกอบการดำเนินกิจการ และเพิ่มประสิทธิภาพให้องค์การ</p>
                </div>
              </div>

            </div>

            <div class="row">

              <div class="feature py-4 col-md-6 d-flex">
                <div class="icon text-primary mr-3" ><i class="fa fa-file-video-o"></i></div>
                <div class="px-4">
                    <h5>Digital Media</h5>
                    <p>การคิดสร้างสรรค์ผลงานทางนิเทศศาสตร์แขนงต่าง ๆ ได้แก่ งานโฆษณาการประชาสัมพันธ์ออนไลน์ สื่อกราฟิก สื่อสิ่งพิมพ์ดิจิทัล เว็บไซต์ มัลติมีเดีย แอนิเมชัน สื่อกระจายเสียงดิจิทัล ภาพยนตร์ดิจิทัล โปรแกรมประยุกต์ และสื่อปฏิสัมพันธ์สมัยใหม่</p>
                </div>
              </div>

              <div class="feature py-4 col-md-6 d-flex">
                <div class="icon text-primary mr-3"><i class="fa fa-book"></i></div>
                <div class="px-4">
                    <h5>Information Studies</h5>
                    <p>การจัดการทรัพยากรสารสนเทศ การกำหนด การสร้าง การคัดเลือก การจัดหา การวิเคราะห์  การจัดเก็บ  การบริการ การเผยแพร่และนำส่งสารสนเทศ  โดยคำนึงถึงความต้องการและลักษณะของผู้ใช้เป็นสำคัญ</p>
                </div>
              </div>

            </div>
          </div>
        </div>

  </div>

  <br>

  <div id="typography" class="container mb-5">

    <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto">
      <h3 class="mb-4 text-center">📰 ข่าวสาร</h3><br>
   </div>

    <div class="row">

      <div class="example col-md-6 ml-auto mr-auto">
        <table class="table table-responsive" border="0">
          <thead>
            <tr>
              <td colspan="2"  class="text-center"><h4 class="text-muted">ปริญญาตรี</h4></td>
            </tr>
         </thead>
          <tbody id="">
            <tr>
              <td><img style="border-radius:10px; width:20vh; " src="images/demo/info2.jpg" ></td>
              <td><h6>เกณฑ์การเลือกหลักสูตร IT(HP) 3/57</h6><button type="button" class="btn btn-pill btn-primary btn-sm"><i class="fa fa-chevron-right mr-1"></i> รายละเอียด</button></td>
            </tr>
          </tbody>
       </table>
      </div>

      <div class="example col-md-6 ml-auto mr-auto">
        <table class="table table-responsive" border="0">
          <thead>
            <tr>
              <td colspan="2" class="text-center text-muted"><h4  class="text-muted">บัณฑิตศึกษา</h4></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><img style="border-radius:10px; width:20vh; "src="images/demo/info1.jpg" ></td>
              <td><h6>เกณฑ์การเลือกหลักสูตร IT รุ่นปี 55 1/58</h6><button type="button" class="btn btn-pill btn-primary btn-sm"><i class="fa fa-chevron-right mr-1"></i> รายละเอียด</button></td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>

  <?php include('footer.php')?>

</div>

  <?php include('import-javascript.php')?>
  <script src="js/index.js"></script>

</body>
</html>
