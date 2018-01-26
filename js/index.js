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
  var i=0;

  $('#detailAbout').on('click',function(){
    $('#about').modal('show');
  });

  var dbImgHeaderSlide = firebase.database().ref('website/index/header');
  dbImgHeaderSlide.on('child_added',snap=>{

    var bg = snap.child('bg').val();
    var topic = snap.child('topic').val();
    var detail = snap.child('detail').val();
    var link = snap.child('link').val();
    var txt_bt = snap.child('txt_bt').val();

    i=i+1;

    if(i==1){
      $('#imageHeaderSlide').append("<div class='"+'carousel-item active'+"'><img class='"+'d-block w-100'+"' src='"+bg+"'><div class='"+'carousel-caption d-none d-md-block'+"'>"+
                                "<h2>"+topic+"</h2><p>"+detail+"</p><a href='"+link+"'><button type='"+'button'+"' class='"+'btn btn-primary btn-pill btn-md d-table ml-auto mr-auto'+"'>✋ "+txt_bt+"</button></a></div></div>");
    }else{
      $('#imageHeaderSlide').append("<div class='"+'carousel-item'+"'><img class='"+'d-block w-100'+"' src='"+bg+"'><div class='"+'carousel-caption d-none d-md-block'+"'>"+
                                "<h2>"+topic+"</h2><p>"+detail+"</p><a href='"+link+"'><button type='"+'button'+"' class='"+'btn btn-primary btn-pill btn-md d-table ml-auto mr-auto'+"'>✋ "+txt_bt+"</button></a></div></div>");
    }
  });


  var dbImgBachelor = firebase.database().ref('website/index/courseoffered').child('imageBachelor');
  dbImgBachelor.on('value',snap => {
    $('#imgBachelor').attr("src",snap.val());
  });

var dbImageMaster = firebase.database().ref('website/index/courseoffered').child('imageMaster');
  dbImageMaster.on('value',snap => {
    $('#imgMaster').attr("src",snap.val());
  });

var dbImageDoctor = firebase.database().ref('website/index/courseoffered').child('imageDoctor');
  dbImageDoctor.on('value',snap => {
    $('#imgDoctor').attr("src",snap.val());
  });



  var dbPhilosophyBachelor = firebase.database().ref('website/about/bachelor').child('philosophy');
  dbPhilosophyBachelor.on('value',snap => {
    $('#philosophyBachelor').text(snap.val());
  });

var dbPurposeBachelor = firebase.database().ref('website/about/bachelor').child('purpose');
  dbPurposeBachelor.on('value',snap => {
    $('#purposeBachelor').text(snap.val());
  });

var dbPhilosophyMasterAndDoctor = firebase.database().ref('website/about/master').child('philosophy');
  dbPhilosophyMasterAndDoctor.on('value',snap => {
    $('#philosophyMasterAndDoctor').text(snap.val());
  });

  var dbPurposeMasterAndDoctor = firebase.database().ref('website/about/master').child('purpose');
    dbPurposeMasterAndDoctor.on('value',snap => {
      $('#purposeMasterAndDoctor').text(snap.val());
    });

});
