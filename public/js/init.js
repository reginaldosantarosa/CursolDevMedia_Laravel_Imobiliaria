 $(document).ready(function(){
    $('.sidenav').sidenav();
    $('.slider').slider({full_width: true});
    //$('select').material_select();
    //$("#selectedTest").formSelect();

  });
      
document.addEventListener('DOMContentLoaded', function() {
   var elems = document.querySelectorAll('select');
   var options = document.querySelectorAll('option');
   var instances = M.FormSelect.init(elems, options); })


 function sliderPrev(){
 	$('.slider').slider('pause');
 	$('.slider').slider('prev');

 }


 function sliderNext(){
	$('.slider').slider('pause');
 	$('.slider').slider('next');
 	
 } 