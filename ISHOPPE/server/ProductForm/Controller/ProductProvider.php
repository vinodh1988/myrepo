<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../SharedModel/Product.php';
require_once '../../SharedModel/Connection.php';
require_once '../Model/ProductDAO.php';

$products= getProducts();

echo json_encode($products);


