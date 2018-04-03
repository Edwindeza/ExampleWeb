$(document).ready(function(){
   alert('adsad');
});

$(function(){
  alert('asdas');
});


$(document).ready(function(){
   $(document).on('scroll',function(){
     var medida1 = $(document).scrollTop();            
            // if(medida1 > 150){;
            //   $('#ini-sect1-servicios').addClass("animacionDer");
            //   $('#ini-img-redondo1').addClass("animacionImg");

            // }
            if(medida1 > 350){
              $('#rectangulo').addClass("rectangulo");
        
            }  
   });
});
