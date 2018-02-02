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
      <h3 class="mb-4 text-center"><i class="fa fa-graduation-cap"></i> หลักสูตรวิทยาการสารสนเทศบัณฑิต (หลักสูตรปี พ.ศ.2555) </h3><br>
      <p><i class="fa fa-angle-right" aria-hidden="true"></i>  สาขาวิชาเทคโนโลยีสารสนเทศ เปิดสอนระดับปริญญาตรี หลักสูตรวิทยาการสารสนเทศบัณฑิต (หลักสูตรใหม่ปรุงปรับปี 2555) หน่วยกิตตลอดหลักสูตร 177 หน่วยกิต และ หลักสูตรวิทยาการสารสนเทศบัณฑิตแบบก้าวหน้า หน่วยกิตตลอดหลักสูตร 179 หน่วยกิต เน้นการประยุกต์ใช้เทคโนโลยีสารสนเทศและการสื่อสาร แบ่งเป็น 4 กลุ่มวิชา</p>
    </div>

    <div class="row" id="Suggestion_work">

    </div>
  </div>
</div>

<!-- Course -->
  <div class="our-services section py-4">
    <h3 class="section-title text-center my-5"><i class="fa fa-book"></i> แผนการศึกษา และ วิชาที่เปิดสอน</h3>

        <div class="features py-4 mb-4">
          <div class="container">
            <div class="row">

              <div class="feature py-4 col-md-6 d-flex">
                <div class="icon text-primary mr-3"><i class="fa fa-map-o"></i></div>
                <div class="px-4">
                    <h5>แผนการศึกษา หลักสูตรวิทยาการสารสนเทศบัณฑิต</h5>
                    <a href="#" id="studyplan"><button type="button" class="btn btn-warning btn-pill"><i class="fa fa-angle-right mr-1"></i> รายวิชาที่เปิดสอน</button></a>
                </div>
              </div>

              <div class="feature py-4 col-md-6 d-flex">
                <div class="icon text-primary mr-3"><i class="fa fa-file-text-o"></i></div>
                <div class="px-4">
                    <h5>วิชาที่เปิดสอน ระดับปริญญาตรี</h5>
                    <a href="#" id="openCourses"><button type="button" class="btn btn-warning btn-pill"><i class="fa fa-angle-right mr-1"></i> รายวิชาที่เปิดสอน</button></a>

                </div>
              </div>

            </div>


          </div>
        </div>

  </div>

  <br>

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


                                    <div id="typography" class="container mb-5"><div class="section-title col-lg-8 col-md-10 ml-auto mr-auto"><h3 class="mb-4"><i class="fa fa-cloud-download" aria-hidden="true"></i> ดาวน์โหลด เอกสารเพิ่มเติม</h3>

                                    </div>
                                    <div class="example col-md-10 ml-auto mr-auto">
                                      <table class="table table-striped table-responsive">
                                        <thead>
                                          <tr>
                                            <th><h5 class="modal-title">หัวข้อการดาวน์โหลด</h5></th>
                                            <th></th>

                                          </tr>
                                        </thead>
                                        <tbody id="Download_work">

                                        </tbody>
                                      </table>
                                    </div>
                                  </div>

  <?php include('footer.php')?>

</div>

  <?php include('import-javascript.php')?>
  <script src="js/bachelor2555.js"></script>

</body>
</html>
