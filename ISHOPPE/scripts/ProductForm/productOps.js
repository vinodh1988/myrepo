/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var ptypes;
var psubtypes;
var products;

$(document).ready(
  function(){
      $.get("../../server/ProductForm/Controller/productTypeProvider.php", function(data, status){
        alert(data);
          ptypes=JSON.parse(data);
        if($('#ptype')){
        result="<option></option>";
        
        for(var x in ptypes){
            result+="<option value='"+ptypes[x].type_id+"'>"
                    +ptypes[x].type_name+"</option>";
            
        }
       $('#ptype').html(result);
        }
    }); 
    
       $.get("../../server/ProductForm/Controller/subTypeProvider.php", function(data, status){
        psubtypes=JSON.parse(data);
        if($('#pstype'))
        $('#pstype').html("<option> please select product type</option>");
        
    }); 
    
    $('#ptype').change(function(){
        var result="<option></option>";
        var temp=$('#ptype').val();
    
        for(var x in psubtypes){
            if(temp===psubtypes[x].type_id)
            result+="<option value='"+psubtypes[x].sub_type_id+"'>"
                    +psubtypes[x].type_name+"</option>";
            
        }
        
       $('#pstype').html(result); 
   });
       $('#sub').click(
           function(){
               prodvalidate();
           }
      );
      
       $.get("../../server/ProductForm/Controller/ProductProvider.php", function(data, status){
        alert(data);
          products=JSON.parse(data);
        if($('#preport')){
        result="";
        
        for(var x in products){
            result+="<tr>";
            result+="<td>"+products[x].product_name+"</td>";
            result+="<td>"+products[x].description+"</td>";
            result+="<td>"+products[x].unit_price+"</td>";
            result+="<td>"+products[x].type_name+"</td>";            
            result+="</tr>";
        }
       $('#preport tbody').html(result);
        }
    });
   
  }        
);

