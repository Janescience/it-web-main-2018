
<!--==================================== Office Hour ====================================================-->

<div class="modal fade" id="officeHourModal" role="dialog" aria-labelledby="Message" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" >_เวลาที่สามารถเข้าพบได้</h4>
      </div>
      <div class="modal-body">
        <div class="card-block">
        <div class="card">
          <div class="card-block">
            <div class="table-responsive">
              <table class="table table-bordered text-center" >
              <thead >
                <th ><h6>Date / Time</h6></th>
                <th ><h6>08:30-09:00</h6></th>
                <th><h6>09:00-10:00</h6></th>
                <th><h6>10:00-11:00</h6></th>
                <th><h6>11:00-12:00</h6></th>
                <th><h6>13:00-14:00</h6></th>
                <th><h6>14:00-15:00</h6></th>
                <th><h6>15:00-16:00</h6></th>
                <th><h6>16:00-16:30</h6></th>
                </thead>
              <tbody id="list_day" disabled="true">

              <tbody>
            </table>
          </div>
        </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button id="btClose" class="btn btn-danger" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>

<!--===========================================================================================================-->

<!--==================================== Google Map ====================================================-->

<div class="modal fade" id="mapModal" role="dialog" aria-labelledby="Message" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="messagePassModal">ตำแหน่งปัจจุบัน</h4>
      </div>
      <div class="modal-body">
        <center>
            <div>
              <div id="map" style="width: 600px; height: 400px; "></div>
            </div>
            <br>
            <p class="text-muted " id="mapTimeUpdateShow"></p>
          </center>
      </div>
      <div class="modal-footer">
        <button id="btClose" class="btn btn-danger" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>

<!--===========================================================================================================-->

<!--==================================== Not Show Google Map ====================================================-->

<div class="modal fade" id="notShowModal" role="dialog" aria-labelledby="Message" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" >การแจ้งเตือน</h4>
      </div>
      <div class="modal-body">
        <center>
            <h6>ไม่สามารถดูตำแหน่งปัจจุบันได้ เนื่องจากคณาจารย์ท่านนี้ได้ปิดระบบการแสดงตำแหน่งปัจจุบัน</h6>
            <h1><i class="fa fa-eye-slash"></i></h1>
            <br><br><br>
            <p class="text-muted " id="mapTimeUpdateNotShow"></p>

          </center>

      </div>
      <div class="modal-footer">
        <button id="btClose" class="btn btn-danger" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>

<!--===========================================================================================================-->


<!--====================================  History and Work ====================================================-->

<div class="modal fade" id="hisandworkModal" role="dialog" aria-labelledby="Message" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="nameTeacherHeader">ประวัติและผลงาน <button id="printAll" class="btn btn-info btn-lg" ><i class="fa fa-print"></i></button></h4>
      </div>
      <div class="modal-body">

          <ul class="nav nav-tabs" role="tablist">
            <li  class="nav-item "><a class="nav-link active" href="#personalexp"   data-toggle="tab"> <h5>ประวัติการศึกษา</h5></a></li>
            <li  class="nav-item"><a class="nav-link" href="#worpexp"   data-toggle="tab"><h5>ประวัติการทำงาน</h5></a></li>
            <li  class="nav-item"><a class="nav-link" href="#papers"  r data-toggle="tab"><h5>ผลงานวิชาการ</h5></a></li>
          </ul>
          <div class="tab-content" style="text-align:left;">
            <div  class="container tab-pane active" id="personalexp"><br>
              <button id="printHisEducation" class="btn btn-ligth btn-md" ><i class="fa fa-print"></i></button>
            <p><strong><u><h5>ประวัติการศึกษา</h5></u></strong></p>
            <ul id="hisEdu">

            </ul>
            <p><strong><u><h5>ความเชื่ยวชาญ</h5></u></strong></p>
            <ul id="expert">

            </ul>

            </div>
            <div  class="container tab-pane" id="worpexp"><br>
              <button id="printHisWork" class="btn btn-ligth btn-md " ><i class="fa fa-print"></i></button>

              <p><strong><u><h5>ประวัติการทำงาน</h5></u></strong></p>
              <ul id="hisWork">

              </ul>
              <p><strong><u><h5>ประสบการณ์ด้านต่างๆ</h5></u></strong></p>
              <ul id="exp">

              </ul>
            </div>
            <div class="container tab-pane" id="papers"><br>
              <button id="printHisAcademicWork" class="btn btn-ligth btn-md"><i class="fa fa-print"></i></button>

              <p><strong><u><h5>ผลงานวิชาการ</h5></u></strong></p>
              <p><strong><h6>วารสารระดับชาติที่อยู่ในฐานข้อมูลสากล</h6></strong></p>
              <ul id="inter_journal_in_database">

              </ul>
              <p><strong><h6>วารสารระดับชาติที่ไม่อยู่ในฐานข้อมูลสากล</h6></strong></p>
              <ul id="inter_journal_not_database">

              </ul>
              <p><strong><h6>วารสารระดับชาติ</h6></strong></p>
              <ul id="nation_journal">

              </ul>
              <p><strong><h6>การประชุมระดับนานาชาติ</h6></strong></p>
              <ul id="inter_conference">

              </ul>
              <p><strong><h6>การประชุมระดับชาติ</h6></strong></p>
              <ul id="nation_conference">

              </ul>
              <p><strong><h6>ผลงานที่ได้รับรางวัลระดับนานาชาติ</h6></strong></p>
              <ul id="inter_work">
              </ul>
              <p><strong><h6>ผลงานที่ได้รับรางวัลระดับชาติ</h6></strong></p>
              <ul id="nation_work">

              </ul>
            </div>
            <div id="print"></div>
      </div>
    </div>
      <div class="modal-footer">
        <button id="btClose" class="btn btn-danger" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>

<!--===========================================================================================================-->


<!--====================================  Subject ====================================================-->
<div class="modal fade" id="subjectModal" role="dialog" aria-labelledby="Message" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="messagePassModal">รายวิชาที่สอน</h4>
      </div>
      <div class="modal-body">
        <table class="table">
          <thead>
            <tr>
              <th class="text-center">ภาคการศึกษา</th>
              <th class="text-center">รหัสวิชา</th>
              <th class="text-center">ชื่อวิชา</th>
              <th class="text-center">หน่วยกิต</th>
              <tr>
          </thead>
          <tbody id="list_subject">
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button id="btClose" class="btn btn-danger" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>

<!--===========================================================================================================-->
