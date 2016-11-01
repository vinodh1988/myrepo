<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../../SharedModel/Connection.php';
require_once '../Model/productType.php';
require_once '../Model/productTypeDAO.php';

$send=getProductType();

echo json_encode($send);