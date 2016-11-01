/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function prodvalidate(){
    var flag=true;
    $('#pn').text("");
    $('#pd').text("");
    $('#pr').text("");
    $('#pt').text("");
    $('#ps').text("");
   if($('#pname').val().length===0){
       $('#pn').text("Please give product name");
       flag=false;
   }
   
   if($('#pdesc').val().length===0){
       $('#pd').text("Please give product Description");
       flag=false;
   }
   if($('#ptype').val().length===0){
       $('#pt').text("Please select Product type");
       flag=false;
   
   }
   if($('#pstype').val().length===0){
       $('#ps').text("Please select Product subtype");
       flag=false;
   
    }
      if($('#price').val().length===0){
       $('#pr').text("Please fill price");
       flag=false;
    }
    if(isNaN($('#price').val())){
       $('#pr').text("Please Enter only numbers");
       flag=false;
   }

   if($('#price').val()<0){
        $('#pr').text("Price should be a positive value");
       flag=false;
    }
   
    if(flag){
        document.forms[0].submit();
    }
}
