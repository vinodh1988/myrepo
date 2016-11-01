/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function fillCategory(){
    var x=['Pulses','Nuts','Spices', 'Soaps', 'Detergent Powders','Plastic items','Stationaries','Oil','Other home supplies'];
    var result="<ul class='main-menu'>";
    for(var p in x){
        result+="<li>"+x[p]+"</li>"; 
        
    }
    result+="</ul>";
    $('#category-menu-body').html(result);
}