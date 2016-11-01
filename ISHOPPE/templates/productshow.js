/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function productshow(){
    var code=$('#prod').html();
    alert(code);
    var productlist=[
        {pid:'p101',url:'../images/swadtoor.jpg',ptext:'Toor daal 500g'},
        {pid:'p102',url:'../images/coconut.png',ptext:'Coconut oil 200ml'},
        {pid:'p103',url:'../images/colgate.png',ptext:'Colgate 100g'},
        {pid:'p104',url:'../images/pepsi.jpg',ptext:'Pepsi 500ml'},
        {pid:'p105',url:'../images/ricebag.jpg',ptext:'Rice bag 500g'}
        
    ];
    
    for(var x in productlist){
      var final=Handlebars.compile (code);  
      $('#central-right').append(final(productlist[x]));
    }
  
}