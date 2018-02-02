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

  var idBody;
  var Auth = firebase.auth();
  var dbRef = firebase.database();
  var topicRef = dbRef.ref('website')
  var i=0;

   /*------------------------  edit course (2555) -----------------------------------*/

  var rootRefExpert = topicRef.child("course").child('bachelor').child('year2555').child('body');
  rootRefExpert.on("child_added",snap => {
   var snapkey = snap.key;
   var img = snap.child('file').val();
   var topic = snap.child('topic').val();
   var topic2 = snap.child('topic2').val();
   var detail = snap.child('detail').val();
   var detail2 = snap.child('detail2').val();
   var j=0;
   j = j+1;

   if(j == 1){
          j = "one";
   }else if (j == 2) {
          j = "two";
   }else if (j == 3) {
     j = "three";
   }else if (j == 4) { 
     j = "four";
   }

if(j = "four"){
    $('#Suggestion_work').append(
        "<div class='"+'col-lg-3 col-md-6 col-sm-12'+"' id='"+snap.key+"'>"+
            "<div class='"+'card'+"'>"+
                "<img class='"+'card-img-top'+"' src='"+ img +"' alt='"+'Card image cap'+"'>"+
                "<div class='"+'card-body text-center'+"'>"+
                    "<h6 class='"+'card-title topic1'+"'>"+ topic +"</h6>"+
                    "<h4 hidden class='"+'card-title topic2'+"'>"+ topic2 +"</h4>"+
                    "<h4 hidden class='"+'card-title detail'+"'>"+ detail +"</h4>"+
                    "<h4 hidden class='"+'card-title detail2'+"'>"+ detail2 +"</h4>"+
                      "<a href='"+'#'+"' class='"+'btn-edit-expert btn btn btn-outline-info'+"'><i class='"+'fa fa-angle-right'+"'></i> อ่านรายละเอียด</a>"+
                "</div>"+
            "</div>"+
          "</div>"
      );
    }else if (j = "three") {
      $('#Suggestion_work').append(
          "<div class='"+'col-lg-4 col-md-6 col-sm-12'+"' id='"+snap.key+"'>"+
              "<div class='"+'card'+"'>"+
                  "<img class='"+'card-img-top'+"' src='"+ img +"' alt='"+'Card image cap'+"'>"+
                  "<div class='"+'card-body text-center'+"'>"+
                      "<h6 class='"+'card-title topic1'+"'>"+ topic +"</h6>"+
                      "<h4 hidden class='"+'card-title topic2'+"'>"+ topic2 +"</h4>"+
                      "<h4 hidden class='"+'card-title detail'+"'>"+ detail +"</h4>"+
                      "<h4 hidden class='"+'card-title detail2'+"'>"+ detail2 +"</h4>"+
                        "<a href='"+'#'+"' class='"+'btn-edit-expert btn btn btn-outline-info'+"'><i class='"+'fa fa-angle-right'+"'></i> อ่านรายละเอียด</a>"+
                  "</div>"+
              "</div>"+
            "</div>"
        );

    }else if (j = "two") {
      $('#Suggestion_work').append(
          "<div class='"+'col-lg-6 col-md-6 col-sm-12'+"' id='"+snap.key+"'>"+
              "<div class='"+'card'+"'>"+
                  "<img class='"+'card-img-top'+"' src='"+ img +"' alt='"+'Card image cap'+"'>"+
                  "<div class='"+'card-body text-center'+"'>"+
                      "<h6 class='"+'card-title topic1'+"'>"+ topic +"</h6>"+
                      "<h4 hidden class='"+'card-title topic2'+"'>"+ topic2 +"</h4>"+
                      "<h4 hidden class='"+'card-title detail'+"'>"+ detail +"</h4>"+
                      "<h4 hidden class='"+'card-title detail2'+"'>"+ detail2 +"</h4>"+
                        "<a href='"+'#'+"' class='"+'btn-edit-expert btn btn btn-outline-info'+"'><i class='"+'fa fa-angle-right'+"'></i> อ่านรายละเอียด</a>"+
                  "</div>"+
              "</div>"+
            "</div>"
        );

    }else if (j = "one") {
      $('#Suggestion_work').append(
          "<div class='"+'col-lg-12 col-md-6 col-sm-12'+"' id='"+snap.key+"'>"+
              "<div class='"+'card'+"'>"+
                  "<img class='"+'card-img-top'+"' src='"+ img +"' alt='"+'Card image cap'+"'>"+
                  "<div class='"+'card-body text-center'+"'>"+
                      "<h6 class='"+'card-title topic1'+"'>"+ topic +"</h6>"+
                      "<h4 hidden class='"+'card-title topic2'+"'>"+ topic2 +"</h4>"+
                      "<h4 hidden class='"+'card-title detail'+"'>"+ detail +"</h4>"+
                      "<h4 hidden class='"+'card-title detail2'+"'>"+ detail2 +"</h4>"+
                        "<a href='"+'#'+"' class='"+'btn-edit-expert btn btn btn-outline-info'+"'><i class='"+'fa fa-angle-right'+"'></i> อ่านรายละเอียด</a>"+
                  "</div>"+
              "</div>"+
            "</div>"
        );
    }

    });


    $('#Suggestion_work').on('click','.btn-edit-expert',function(){

   var bg = $(this).closest('div').find(".card-img-top").attr("src");
   var topic =  $(this).closest('div').find(".topic1").text();
   var topic2 =  $(this).closest('div').find(".topic2").text();
   var detail = $(this).closest('div').find('.detail').text();
   var detail2 = $(this).closest('div').find('.detail2').text();
   $('#bgHeaderEdit').attr("src",bg);
   $('#TopicExpert').text(topic);
   $('#TopicExpert2').text(topic2);
   $('#detailExpert').text(detail);
   $('#detailExpert2').text(detail2);
   $('#editExpertModal').modal('show');
 });

 $('#btClose').on('click',function(e){
      e.preventDefault();
        $('#editExpertModal').modal('hide');
    });

    /*------------------------ end edit course (2555) -----------------------------------*/

    /*------------------------  edit openCourses and edit studyplan (2555) -----------------------------------*/


    $('#studyplan').on('click',function(e){
         studyplan2();
       });

       function studyplan2(){
         var open = topicRef.child("course").child('bachelor').child('year2555').child('filePDF').child('studyplan').child('file');
           window.location.href = open;

           }



    $('#openCourses').on('click',function(e){
         openCourses2();
       });

       function openCourses2(){
         var open = topicRef.child("course").child('bachelor').child('year2555').child('filePDF').child('openCourses').child('file');
           window.location.href = open;

           }



    /*------------------------  end edit openCourses (2555) -----------------------------------*/

    /*------------------------  edit Dowload (2555) -----------------------------------*/
    var Download = topicRef.child("course").child('bachelor').child('year2555').child('filePDF').child('Download');

 Download.on("child_added",snap => {
   var snapkey = snap.key;
   var detail = snap.child('topic').val();
   var file = snap.child('file').val();

   $('#Download_work').append("<tr id='"+snap.key+"'>"+
   "<td class='"+'txtdetail'+"'>"+
   "<h6 class='"+'modal-subtitle'+"'>"+
   detail +
   "</h6>"+
   "</td>"+
   "<td>"+
   "<a href='"+ file +"'><button type='"+'button'+"' class='"+'btn btn-pill btn-outline-info'+"'><i class='"+'fa fa-download mr-1'+"'></i> ดาวน์โหลด</button></a>"+
   "</tr>");

 });
    /*------------------------ end edit Dowload (2555) -----------------------------------*/


});
