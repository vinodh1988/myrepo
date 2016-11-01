<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class productType implements JsonSerializable{
    private $type_id;
    private $type_name;
    
    function __construct($type_id, $type_name) {
        $this->type_id = $type_id;
        $this->type_name = $type_name;
    }
    function getType_id() {
        return $this->type_id;
    }

    function getType_name() {
        return $this->type_name;
    }

    function setType_id($type_id) {
        $this->type_id = $type_id;
    }

    function setType_name($type_name) {
        $this->type_name = $type_name;
    }

            public function jsonSerialize() {
        $vars = get_object_vars($this);
                     return $vars;
    }

}

