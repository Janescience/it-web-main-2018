<!doctype html>
<html class="no-js" lang="en">

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
      <h3 class="mb-4 text-center"><i class="fa fa-graduation-cap"></i> ระดับปริญญาตรี </h3><br>
      <center><p><i class="fa fa-angle-right" aria-hidden="true"></i>  สาขาวิชาเทคโนโลยีสารสนเทศ เปิดสอนระดับปริญญาตรี ในหลักสูตรวิทยาการสารสนเทศบัณฑิต ซึ่งมีด้วยกันสองหลักสูตร</p></center>
    </div>

<div id="cards" class="container mb-2" style="padding-bottom: 1px">

  <div class="example col-md-12 ml-auto mr-auto"><div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 mb-4"><div class="card">
      <img class="card-img-top ll-image" data-img-src="images/stock-photos/bachelor.jpg" alt="Card image cap" src="images/stock-photos/bachelor.jpg">
      <div class="card-body">
        <h4 class="card-title">หลักสูตรวิทยาการสารสนเทศบัณฑิต (หลักสูตรปี พ.ศ.2555) </h4>
        <p class="card-text">สาขาวิชาเทคโนโลยีสารสนเทศ เปิดสอนระดับปริญญาตรี หลักสูตรวิทยาการสารสนเทศบัณฑิต (หลักสูตรใหม่ปรุงปรับปี 2555) หน่วยกิตตลอดหลักสูตร 177 หน่วยกิต แบ่งเป็น 4 กลุ่มวิชา</p>
        <a href="bachelor2555.php" class="btn btn-outline-info"><i class="fa fa-angle-right" aria-hidden="true"></i> รายละเอียดเพิ่มเติม</a>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 mb-4 sm-hidden">
    <div class="card">
      <img class="card-img-top ll-image" data-img-src="images/stock-photos/master.jpg" alt="Card image cap" src="images/stock-photos/master.jpg">
      <div class="card-body">
        <h4 class="card-title">หลักสูตรวิทยาการสารสนเทศบัณฑิต (หลักสูตรปรับปรุง พ.ศ.2560)</h4>
        <p class="card-text">สาขาวิชาเทคโนโลยีสารสนเทศ เปิดสอนระดับปริญญาตรี หลักสูตรวิทยาการสารสนเทศบัณฑิต (หลักสูตรปรับปรุง พ.ศ. 2560) หน่วยกิตตลอดหลักสูตร 177 หน่วยกิต แบ่งเป็น 4 กลุ่มวิชา คือ</p>
        <a href="#" class="btn btn-outline-info"><i class="fa fa-angle-right" aria-hidden="true"></i> รายละเอียดเพิ่มเติม</a>
      </div>
    </div>
  </div>

</div>
</div>
</div>


  </div>
</div>



                      <!-- Modal edit Suggestion -->

                                    <div class="modal fade" id="editExpertModal" role="dialog" aria-labelledby="Message" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title"><i class="fa fa-graduation-cap"></i> รายละเอียดเพิ่มเติม</h4>
                                          </div>
                                          <div class="modal-body">


                                            <img style="border-radius:10px; width:20vh; id="bgHeaderEdit" "src="images/demo/info1.jpg" >


                                            <div id="textSuggestion" class="form-group">
                                              <h6 class="modal-title"><i class="fa fa-circle" aria-hidden="true"></i> ชื่อหลักสูตร</h6>
                                                  <div class="input-group">
                                                    <h6 class="modal-title" id="TopicExpert"></h6>
                                                </div>
                                            </div>

                                            <div id="textSuggestion" class="form-group">
                                              <h6 class="modal-title"><i class="fa fa-circle" aria-hidden="true"></i> ชื่อปริญญา</h6>
                                                  <div class="input-group">
                                                  <h6 class="modal-title" id="TopicExpert2"></h6>
                                                </div>
                                            </div>

                                            <div id="textSuggestion" class="form-group">
                                                <h6 class="modal-title"><i class="fa fa-circle" aria-hidden="true"></i> ลักษณะวิชาชีพ</h6>
                                                  <div class="input-group">
                                                    <h6 class="modal-title" id="detailExpert"></h6>
                                                </div>
                                            </div>

                                            <div id="textSuggestion" class="form-group">
                                              <h6 class="modal-title"><i class="fa fa-circle" aria-hidden="true"></i> ลักษณะวิชาที่ศึกษา</h6>
                                                  <div class="input-group">
                                                    <h6 class="modal-title" id="detailExpert2"></h6>
                                                </div>
                                            </div>

                                          </div>
                                          <div class="modal-footer">
                                            <button id="btClose" type="button" class="btn btn-outline-success "><i class="fa fa-check"></i> ตกลง</button>

                                          </div>
                                        </div>
                                      </div>
                                    </div>




  <?php include('footer.php')?>

</div>

  <?php include('import-javascript.php')?>
  <script src="js/bachelor.js"></script>

</body>
</html>
