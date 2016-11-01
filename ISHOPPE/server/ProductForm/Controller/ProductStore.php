<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../SharedModel/Product.php';
require_once '../../SharedModel/Connection.php';
require_once '../Model/ProductDAO.php';

$p=new product();

$p->setProduct_name($_POST['pname']);
$p->setDescription($_POST['pdesc']);
$p->setProduct_sub_type($_POST['pstype']);
$p->setUnit_price($_POST['price']);

$result=storeProduct($p);

if($result===1){
    echo 'inserted successfully';
}
else
{   
    echo 'insertion error';
}



