/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    
    $('#sign').click(function(){
        $('#login').toggle();
    });
    
    
    $('#cb').click(function(){
        $('#login').toggle();
    });
    
    $('#lb').click(function(){
        $('#login').toggle();
        fillAdmin();
        $('#central-right').html(
       "<iframe  name='workspace'></frame>");
    });
    
    /* Dynamic Category  */
    
    fillCategory();
    productshow();
});

