<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function getProductType(){
   
    try{
  $connection= getConnection();
  $statement = $connection->query('SELECT * FROM product_type');
  
 $result=$statement->fetchAll(PDO::FETCH_ASSOC);
 $send=array();
 foreach($result as $row) {
     $p=new productType();
     $p->setType_id($row['type_id']);
     $p->setType_name($row['type_name']);
     array_push($send,$p);
}
          return $send;

    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
        return null;
    } 
   
}

