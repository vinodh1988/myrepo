<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function getProductSubType(){
   
    try{
  $connection= getConnection();
  $statement = $connection->query('select * from product_sub_type');
  
 $statement->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,"productSubType");
 $send=array();
 while($row=$statement->fetch()) {
     array_push($send,$row);
 }
    return $send;

    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    } 
   
}



