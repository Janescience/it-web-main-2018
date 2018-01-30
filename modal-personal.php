
<!--==================================== Office Hour ====================================================-->

<div class="modal fade" id="officeHourModal" role="dialog" aria-labelledby="Message" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" >Office Hour</h4>
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
        <button id="btClose" class="btn btn-danger" data-dismiss="modal">Close</button>
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
        <h4 class="modal-title" id="messagePassModal">Location</h4>
      </div>
      <div class="modal-body">
        <center>
            <div>
              <div id="map" style="width: 600px; height: 400px; "></div>
            </div>
          </center>
      </div>
      <div class="modal-footer">
        <button id="btClose" class="btn btn-danger" data-dismiss="modal">Close</button>
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
        <h4 class="modal-title" id="nameTeacherHeader"></h4>
      </div>
      <div class="modal-body">

          <ul class="nav nav-tabs" role="tablist">
            <li  class="nav-item active"><a class="nav-link" href="#personalexp"   data-toggle="tab"><i class="fa fa-graduation-cap" aria-hidden="true"></i> ประวัติการศึกษา</a></li>
            <li  class="nav-item"><a class="nav-link" href="#worpexp"   data-toggle="tab"><i class="fa fa-briefcase" aria-hidden="true"></i> ประวัติการทำงาน</a></li>
            <li  class="nav-item"><a class="nav-link" href="#papers"  r data-toggle="tab"><i class="fa fa-trophy" aria-hidden="true"></i> ผลงานวิชาการ</a></li>
          </ul>
          <div class="tab-content" style="text-align:left;">
            <div  class="container tab-pane active" id="personalexp">
            <p> </p>
            <p><strong><u>ประวัติการศึกษา</u></strong></p>
            <ul id="hisEdu">

            </ul>
            <p><strong><u>ความเชื่ยวชาญ</u></strong></p>
            <ul id="expert">

            </ul>
            </div>
            <div  class="container tab-pane" id="worpexp">
              <p>&nbsp;</p>
              <p><strong><u>ประวัติการทำงาน</u></strong></p>
              <ul id="hisWork">

              </ul>
              <p><strong><u>ประสบการณ์ด้านต่างๆ</u></strong></p>
              <ul id="exp">

              </ul>
            </div>
            <div class="container tab-pane" id="papers">
              <p>&nbsp;</p>
              <p><strong><u>ผลงานวิชาการ</u></strong></p>
              <ul id="working">

              </ul>
              <p><strong><u>งานวิจัย</u></strong></p>
              <ul id="research">

              </ul>


            </div>
      </div>
    </div>
      <div class="modal-footer">
        <button id="btClose" class="btn btn-danger" data-dismiss="modal">Close</button>
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
        <h4 class="modal-title" id="messagePassModal">Location</h4>
      </div>
      <div class="modal-body">
        <table>
          <thead>
            <tr>
              <th>ชื่อวิชา</th>
              <th>รหัสวิชา</th>
              <th>หน่วยกิต</th>
              <tr>
          </thead>
          <tbody id="list_subject">
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button id="btClose" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--===========================================================================================================-->
