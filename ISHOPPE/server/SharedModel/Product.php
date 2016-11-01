<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class product implements JsonSerializable
{
  private $product_id;
  private $product_name;
  private $description;
  private $unit_price;
  private $product_sub_type;
  
  function __construct($product_id, $product_name, $description, $unit_price, $product_sub_type) {
      $this->product_id = $product_id;
      $this->product_name = $product_name;
      $this->description = $description;
      $this->unit_price = $unit_price;
      $this->product_sub_type = $product_sub_type;
  }

    function getProduct_id() {
      return $this->product_id;
  }

  function getProduct_name() {
      return $this->product_name;
  }

  function getDescription() {
      return $this->description;
  }

  function getUnit_price() {
      return $this->unit_price;
  }

  function getProduct_sub_type() {
      return $this->product_sub_type;
  }

  function setProduct_id($product_id) {
      $this->product_id = $product_id;
  }

  function setProduct_name($product_name) {
      $this->product_name = $product_name;
  }

  function setDescription($description) {
      $this->description = $description;
  }

  function setUnit_price($unit_price) {
      $this->unit_price = $unit_price;
  }

  function setProduct_sub_type($product_sub_type) {
      $this->product_sub_type = $product_sub_type;
  }

  
    public function jsonSerialize() {
         $vars = get_object_vars($this);
                     return $vars;
    }

}