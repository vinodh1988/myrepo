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
            class Stationary
            {
                private $name="default"; //property
                private $brand="default brand";
                private static $count;
                private $countx;
                public function __construct($name,$brand) {
                        $this->name=$name;
                        $this->brand=$brand;
                        Stationary::$count++;               
                        $this->countx++;
                }
                
                /*public function __construct(){
                    
                }*/
                public static function getCount(){
                    return Stationary::$count;     
                }
                public  function getCountx(){
                    return $this->countx;     
                }
                public function setName($name){
                    $this->name=$name;
       
                }  //functionality
                
                /*public function setName(){
                    
                }*/
                public function showStationary(){
                    echo "Stationary name::". $this->name .""
                            . "Brand::".$this->brand."<br>";
                    
                }
            }
            
            $pencil =new Stationary("Pencil","Nataraj");
            $marker=new Stationary("Marker","Reynolds");  //Object
            $pen=new Stationary();
            
            //$pen->setName();
            
            $pencil->showStationary();
            $marker->showStationary();
            $pen->showStationary();
            
            echo "number of Stationaries available::" 
            . Stationary::getCount() ."<br>";
            
             echo $pen->getCountx(). '<br>'; 
             echo $pencil->getCountx(). "<br>";
             echo $marker->getCount() ."<br>";
            ?>
        
    </body>

</html>
