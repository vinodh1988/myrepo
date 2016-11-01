<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function storeProduct($p){
    try{
  $connection= getConnection();
  $statement = $connection->prepare("insert into product(product_name,description,unit_price,product_sub_type)"
          . "values(:x,:y,:z,:q)");
  
  $statement->bindParam(':x', $p->getProduct_name()); 
  $statement->bindParam(':y', $p->getDescription());
  $statement->bindParam(':z', $p->getUnit_price());
  $statement->bindParam(':q', $p->getProduct_sub_type()); 
 
  $statement->execute();
  return 1;
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
        return 0;
    } 
}


function getProducts(){
     try{
  $connection= getConnection();
  $statement = $connection->query('select * from product join product_sub_type where product_sub_type=sub_type_id');
  
 $statement->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,"product");
 $send=array();
 while($row=$statement->fetch()) {
     array_push($send,$row);
 }
    return $send;

    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
        return null;
    } 
   
}




