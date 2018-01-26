$(document).ready(function(){
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyA4WVo9ZjdTKHW1ALNRwbuoqx5uxP8gsWM",
    authDomain: "itms-management-system.firebaseapp.com",
    databaseURL: "https://itms-management-system.firebaseio.com",
    projectId: "itms-management-system",
    storageBucket: "itms-management-system.appspot.com",
    messagingSenderId: "131587290108"
  };
  firebase.initializeApp(config);
  var usersRef = firebase.database().ref('users');
  var latitude,longitude;


  var rootRefUser = usersRef;


  $.LoadingOverlay("show");

rootRefUser.on("child_added",snap => {

  var image = snap.child("image").val();
  var name = snap.child("name").val();
  var telephone = snap.child("telephone").val();
  var email = snap.child("email").val();
  var office = snap.child("office").val();
  var level = snap.child("level").val();
  var status;

  if(office == "border:8px solid #00ff00;"){
  status="สามารถเข้าพบได้";
}else if(office == "border:8px solid #0099ff;"){
    status="ไม่อยู่";
  }else if(office == "border:8px solid #ffcc00;"){
    status="กรุณารอสักครู่";
  }else if(office == "border:8px solid #ff3300;"){
    status="ห้ามรบกวน";
  }

  if(level == "คณาจารย์และบุคลากร"){

  $('#list_teacher').append("<div class='"+'col-lg-4 text-center'+"'><div class='"+'hovereffect'+"'><img src='"+image+"' class='"+'avatar'+"' style='"+office+"'>"+
                            "<div class='"+'overlay'+"'><div class='"+'rotate'+"'><p id='"+snap.key+"' class='"+'group1'+"'><a class='"+'googleMap'+"' href='"+'javascript:void(0)'+"'><i class='"+'fa fa-map-marker'+"'></i></a><a class='"+'graduationCap'+"' href='"+'javascript:void(0)'+"'><i class='"+'fa fa-graduation-cap'+"'></i></a></p>"+
                            "<p class='"+'group2'+"' id='"+snap.key+"'><a href='"+'#'+"'><i class='"+'fa fa-user'+"'></i></a><a class='"+'officeHour'+"'href='"+'javascript:void(0)'+"'><i class='"+'fa fa-calendar'+"'></i></a></p></div></div></div>"+
                            "<h6><span class='"+'text-muted'+"'> - "+status+" - </span></h6><br><h4><span>"+name+"</span></h4>"+
                            "<p><i class='"+'fa fa-envelope-o'+"' aria-hidden='"+'true'+"'></i> "+email+"<br>"+
                            "<i class='"+'fa fa-phone'+"' aria-hidden='"+'true'+"'></i> "+telephone+"</p></div>");
  }
    $.LoadingOverlay("hide");
});

$('#list_teacher').on('click','.graduationCap',function(){
  var id = $(this).closest('p').attr('id');

  $('#hisEdu').empty();
  $('#expert').empty();
  $('#hisWork').empty();
  $('#exp').empty();

  var rootRefEducation = usersRef.child(id).child('education').child('his_education');
  rootRefEducation.on("child_added",snap => {
    var degree = snap.child("degree").val();
    var faculty = snap.child("faculty").val();
    var status = snap.child("status").val();
    var university = snap.child("university").val();
    var year = snap.child("year").val();

    if(status == "checked"){
      $('#hisEdu').append("<li>"+degree+" , "+faculty+" , "+university+" , "+year+"</li>");
    }
    
  });

  var rootRefExpert = usersRef.child(id).child('education').child('expertise');
  rootRefExpert.on("child_added",snap => {
    var detail = snap.child("detail").val();
    $('#expert').append("<li>"+detail+"</li>");
  });

  var rootRefWork = usersRef.child(id).child('work').child('his_work');
  rootRefWork.on("child_added",snap => {
    var address = snap.child("address").val();
    var finish_time = snap.child("finish_time").val();
    var start_time = snap.child("start_time").val();
    var work = snap.child("work").val();
    $('#hisWork').append("<li>"+start_time+" - "+finish_time+" , "+work+" , "+address+"</li>");
  });

  var rootRefExp = usersRef.child(id).child('work').child('experience');
  rootRefExp.on("child_added",snap => {
    var detail = snap.child("detail").val();
    var exp = snap.child("exp").val();
    var finish_time = snap.child("finish_time").val();
    var start_time = snap.child("start_time").val();
    $('#exp').append("<li>"+exp+" , "+detail+" , "+start_time+" - "+finish_time+"</li>");
  });


  $('#hisandworkModal').modal('show');
});

$('#list_teacher').on('click','.googleMap',function(){

  var id = $(this).closest('p').attr('id');
  var dblatitude = firebase.database().ref('users').child(id).child('latitude');
  dblatitude.on('value',snap =>{
    latitude=snap.val();
  });
  var dblongitude = firebase.database().ref('users').child(id).child('longitude');
  dblongitude.on('value',snap =>{
    longitude=snap.val();
  });


$('#mapModal').modal('show');
showPosition();

});

function showPosition(){
  var lat = parseFloat(latitude);
  var long = parseFloat(longitude);
   var geocoder = new google.maps.Geocoder();
   var latLng = new google.maps.LatLng(lat,long);

   var initMap = function() {
       var map = new google.maps.Map(document.getElementById('map'), {
           center: { lat: lat, lng: long},
           scrollwheel: false,
           zoom: 20
       });
       var geocoder = new google.maps.Geocoder;
       var infowindow = new google.maps.InfoWindow;
       geocodeLatLng(geocoder, map, infowindow);

   }

   var geocodeLatLng = function(geocoder, map, infowindow) {
     var input = ""+lat+","+long+"";
     var latlngStr = input.split(',', 2);
     var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
     geocoder.geocode({'location': latlng}, function(results, status) {
       if (status === 'OK') {
         if (results[0]) {
           map.setZoom(17);
           var marker = new google.maps.Marker({
             position: latlng,
             map: map
           });
           infowindow.setContent(results[0].formatted_address);
           infowindow.open(map, marker);
         } else {
           window.alert('No results found');
         }
       } else {
         window.alert('Geocoder failed due to: ' + status);
       }
     });
   }
   initMap();
} //showPositi

$('#list_teacher').on('click','.officeHour',function(){
  var id = $(this).closest('p').attr('id');
    $('#list_day').empty();
  $('#officeHourModal').modal('show');
  var dbDay = firebase.database().ref('users').child(id).child('office_hour');
dbDay.on('child_added',snap =>{
  var day = snap.child('day').val();

  var h1 = snap.child('hour_1').val();
  var h2 = snap.child('hour_2').val();
  var h3 = snap.child('hour_3').val();
  var h4 = snap.child('hour_4').val();
  var h5 = snap.child('hour_5').val();
  var h6 = snap.child('hour_6').val();
  var h7 = snap.child('hour_7').val();
  var h8 = snap.child('hour_8').val();

  $('#list_day').append("<tr id='"+snap.key+"'><td >"+day+"</td><td width='"+'120px'+"' id='"+'h1'+"' bgcolor='"+h1+"'></td><td id='"+'h2'+"' width='"+'120px'+"' bgcolor='"+h2+"'></td><td id='"+'h3'+"' width='"+'120px'+"' bgcolor='"+h3+"'>"+
                                           "</td><td id='"+'h4'+"' width='"+'120px'+"' bgcolor='"+h4+"' ></td>"+
                                           "<td id='"+'h5'+"' width='"+'120px'+"' bgcolor='"+h5+"'></td><td id='"+'h6'+"' width='"+'120px'+"' bgcolor='"+h6+"'></td><td id='"+'h7'+"' width='"+'120px'+"' bgcolor='"+h7+"'></td>"+
                                           "<td id='"+'h8'+"' width='"+'120px'+"' bgcolor='"+h8+"'></td></tr>");
});
})

rootRefUser.on("child_added",snap => {

  var image = snap.child("image").val();
  var name = snap.child("name").val();
  var telephone = snap.child("telephone").val();
  var email = snap.child("email").val();
  var office = snap.child("office").val();
  var level = snap.child("level").val();
  var status;

  if(office == "border:8px solid #00ff00;"){
  status="สามารถเข้าพบได้";
}else if(office == "border:8px solid #0099ff;"){
    status="ไม่อยู่";
  }else if(office == "border:8px solid #ffcc00;"){
    status="กรุณารอสักครู่";
  }else if(office == "border:8px solid #ff3300;"){
    status="ห้ามรบกวน";
  }


  if(level == "เจ้าหน้าที่บริหารงานทั่วไป"){

  $('#list_admin').append("<div class='"+'col-lg-4 text-center'+"'><div class='"+'hovereffect-staff'+"' id='"+'hoverProfile'+"'><img src='"+image+"' class='"+'avatar'+"' style='"+office+"'><div class='"+'overlay'+"' id='"+snap.key+"'>"+
                            "<a class='"+'info'+"' id='"+'changePictureProfile'+"' href='"+'javascript:void(0)'+"'><i class='"+'fa fa-user'+"'></i> ประวัติและผลงาน</a></div></div>"+
                            "<h6><span class='"+'text-muted'+"'> - "+status+" - </span></h6><br><h4><span>"+name+"</span></h4>"+
                            "<p><i class='"+'fa fa-envelope-o'+"' aria-hidden='"+'true'+"'></i> "+email+"<br>"+
                            "<i class='"+'fa fa-phone'+"' aria-hidden='"+'true'+"'></i> "+telephone+"</p></div></div>");
  }
    $('#listAdmin').hide();
});

$('#list_admin').on('click','.info',function(){
  var id = $(this).closest('div').attr('id');

  $('#hisEdu').empty();
  $('#expert').empty();
  $('#hisWork').empty();
  $('#exp').empty();

  var rootRefEducation = usersRef.child(id).child('education').child('his_education');
  rootRefEducation.on("child_added",snap => {
    var degree = snap.child("degree").val();
    var faculty = snap.child("faculty").val();
    var university = snap.child("university").val();
    var year = snap.child("year").val();
    $('#hisEdu').append("<li>"+degree+" , "+faculty+" , "+university+" , "+year+"</li>");
  });

  var rootRefExpert = usersRef.child(id).child('education').child('expertise');
  rootRefExpert.on("child_added",snap => {
    var detail = snap.child("detail").val();
    $('#expert').append("<li>"+detail+"</li>");
  });

  var rootRefWork = usersRef.child(id).child('work').child('his_work');
  rootRefWork.on("child_added",snap => {
    var address = snap.child("address").val();
    var finish_time = snap.child("finish_time").val();
    var start_time = snap.child("start_time").val();
    var work = snap.child("work").val();
    $('#hisWork').append("<li>"+start_time+" - "+finish_time+" , "+work+" , "+address+"</li>");
  });

  var rootRefExp = usersRef.child(id).child('work').child('experience');
  rootRefExp.on("child_added",snap => {
    var detail = snap.child("detail").val();
    var exp = snap.child("exp").val();
    var finish_time = snap.child("finish_time").val();
    var start_time = snap.child("start_time").val();
    $('#exp').append("<li>"+exp+" , "+detail+" , "+start_time+" - "+finish_time+"</li>");
  });


  $('#hisandworkModal').modal('show');
});

rootRefUser.on("child_added",snap => {

  var image = snap.child("image").val();
  var name = snap.child("name").val();
  var telephone = snap.child("telephone").val();
  var email = snap.child("email").val();
  var office = snap.child("office").val();
  var level = snap.child("level").val();
  var status;

  if(office == "border:8px solid #00ff00;"){
  status="สามารถเข้าพบได้";
}else if(office == "border:8px solid #0099ff;"){
    status="ไม่อยู่";
  }else if(office == "border:8px solid #ffcc00;"){
    status="กรุณารอสักครู่";
  }else if(office == "border:8px solid #ff3300;"){
    status="ห้ามรบกวน";
  }

  if(level == "ผู้ช่วยสอนและวิจัย"){

  $('#list_ta').append("<div class='"+'col-lg-4 text-center'+"'><div class='"+'hovereffect-staff'+"' id='"+'hoverProfile'+"'><img src='"+image+"' class='"+'avatar'+"' style='"+office+"'><div class='"+'overlay'+"' id='"+snap.key+"'>"+
                            "<a class='"+'info'+"' id='"+'changePictureProfile'+"' href='"+'javascript:void(0)'+"'><i class='"+'fa fa-user'+"'></i> ประวัติและผลงาน</a></div></div>"+
                            "<h6><span class='"+'text-muted'+"'> - "+status+" - </span></h6><br><h4><span>"+name+"</span></h4>"+
                            "<p><i class='"+'fa fa-envelope-o'+"' aria-hidden='"+'true'+"'></i> "+email+"<br>"+
                            "<i class='"+'fa fa-phone'+"' aria-hidden='"+'true'+"'></i> "+telephone+"</p></div></div>");
  }
    $('#listTa').hide();
});

$('#list_ta').on('click','.info',function(){
  var id = $(this).closest('div').attr('id');

  $('#hisEdu').empty();
  $('#expert').empty();
  $('#hisWork').empty();
  $('#exp').empty();

  var rootRefEducation = usersRef.child(id).child('education').child('his_education');
  rootRefEducation.on("child_added",snap => {
    var degree = snap.child("degree").val();
    var faculty = snap.child("faculty").val();
    var university = snap.child("university").val();
    var year = snap.child("year").val();
    $('#hisEdu').append("<li>"+degree+" , "+faculty+" , "+university+" , "+year+"</li>");
  });

  var rootRefExpert = usersRef.child(id).child('education').child('expertise');
  rootRefExpert.on("child_added",snap => {
    var detail = snap.child("detail").val();
    $('#expert').append("<li>"+detail+"</li>");
  });

  var rootRefWork = usersRef.child(id).child('work').child('his_work');
  rootRefWork.on("child_added",snap => {
    var address = snap.child("address").val();
    var finish_time = snap.child("finish_time").val();
    var start_time = snap.child("start_time").val();
    var work = snap.child("work").val();
    $('#hisWork').append("<li>"+start_time+" - "+finish_time+" , "+work+" , "+address+"</li>");
  });

  var rootRefExp = usersRef.child(id).child('work').child('experience');
  rootRefExp.on("child_added",snap => {
    var detail = snap.child("detail").val();
    var exp = snap.child("exp").val();
    var finish_time = snap.child("finish_time").val();
    var start_time = snap.child("start_time").val();
    $('#exp').append("<li>"+exp+" , "+detail+" , "+start_time+" - "+finish_time+"</li>");
  });


  $('#hisandworkModal').modal('show');
});

});
