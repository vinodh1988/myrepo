<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function getConnection(){
    try{
$connection = new PDO('mysql:host=localhost;dbname=vinodh;charset=utf8', 'root', 'pass');

return $connection;
    }
 catch (PDOException $e){
     echo 'Exception occured';
 }
}

