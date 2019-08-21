$(document).ready(function(){   
    var DIRPAGE = "http://"+document.location.hostname+"/";    
   $('#FormListar').submit(function(event){
      event.preventDefault();
      var Dados=$(this).serialize();
      
      $.ajax({
          
         url:'http://localhost/MVC-app/pesquisa/selecionar',
         method:'post',
         dataType: 'html',
         data: Dados,
         success:function(Dados){
             $('.resultado').html(Dados);
         }
      });
      
   });
   
   $(document).on('click','#ImageEdit',function(){
   var imgRel=$(this).attr('rel');
   $.ajax({         
         url:'http://localhost/MVC-app/pesquisa/buscarDB/'+imgRel,
         method:'post',
         dataType: 'html',
         data: {'Id':imgRel},
         success:function(data){
             $('.ResultadoFormulario ').html(data);
         }
   });
});
});
