<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="styles/home.css" rel="stylesheet"/>
    </head>
    <body>
        <?php
          function test(){
              echo "function running <br>";
          }
          function test2($p){
              echo "function running with parameter $p <br>";
          }
          function test3($x){
              return "Hi " . $x;
          }
          
          test();//function call
          test2(100);
          echo  test3("Rajeev");
        ?>
        
    </body>
</html>
