<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php include('header.php')?>
</head>

<body>

  <?php include('navbar.php')?>

<div class="loader"><div class="page-loader"></div></div>

<!-- Floating Shards -->




<!-- Page Content -->
<div class="page-content">




  <div id="headSuggestion" class="card-block bg-info">

                                    <h4 class="text-white card-title">รายละเอียดหลักสูตร</h4>
                                      <div class="message-box contact-box">
                                          <h2 class="add-ct-btn">
                                            <button type="button" id="btOpenModalSuggestion" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button>
                                          </h2>
                                      </div>
                                    </div>
                                    <form class="form-horizontal form-material ">
                                      <div class="table-responsive">
                                          <table id="tableSuggestion" class="table text-center color-bordered-table success-bordered-table">
                                              <thead >
                                                  <tr >
                                                      <th class="text-center">รูป</th>
                                                      <th class="text-center">ชื่อหัวข้อ</th>
                                                      <th class="text-center">ชื่อปริญญา</th>
                                                      <th class="text-center">ลักษณะวิชาชีพ</th>
                                                      <th class="text-center">ลักษณะวิชาที่ศึกษา</th>
                                                      <th class="text-center">แก้ไข</th>

                                                  </tr>

                                              
                                              </thead>
                                              <tbody id="Suggestion_work">

                                              </tbody>
                                          </table>
                                      </div>
                                    </form>








  <?php include('footer.php')?>

</div>

  <?php include('import-javascript.php')?>
  <script src="js/test.js"></script>

</body>
</html>
