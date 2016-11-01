/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function fillAdmin(){
    var x=['Add Product','View/Update products','View/Update Orders','View Complaints','View Customer details'];
    var result="<ul class='main-menu'>";
    var pages=['forms/ProductForm.html','reports/ProductReport.php'
    ,'reports/OrderReport.php','reports/Complaint.php','reports/CustomerInfo.php'];
    for(var p in x){
        result+="<li><a href='"+pages[p]+"' target='workspace'>"
                +x[p]+"</a></li>"; 
        
    }
    result+="</ul>";
    $('#category-menu-head').text("Admin Operations");
    $('#category-menu-body').html(result);
}