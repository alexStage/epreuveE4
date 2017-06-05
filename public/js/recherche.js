//$.ajaxSetup({
//    headers:{
//        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content');
//    }
//});
$(document).ready(function(){
   $("#recherche").keyup(function(){

       var recherche = $(this).val();
       var data = 'motclef='+ recherche;
       var resultat = document.getElementById("resultat");

       if(recherche.length>2){

           $.ajax({
              type : "GET",
              url : url,
              data : data,
              success : function(data){
//                for(var i=0; i<data.length; i++) {
//                    var ventes = data.valueOf(i);
//                    $('#resultat').append('<div>'+ ventes.valueOf("id") +'</div>');
//                    
//                }
                  $.each(data){
                      echo tamer
                  }
              }
            })

       }
   });
});

