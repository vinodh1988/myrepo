<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class productSubType implements JsonSerializable
{
    private $sub_type_id;
    private $type_id;
    private $type_name;
    
    function __construct($sub_type_id, $type_id, $type_name) {
        $this->sub_type_id = $sub_type_id;
        $this->type_id = $type_id;
        $this->type_name = $type_name;
    }
    function getSub_type_id() {
        return $this->sub_type_id;
    }

    function getType_id() {
        return $this->type_id;
    }

    function getType_name() {
        return $this->sub_type_name;
    }

    function setSub_type_id($sub_type_id) {
        $this->sub_type_id = $sub_type_id;
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



