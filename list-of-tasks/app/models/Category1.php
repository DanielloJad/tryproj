<?php

class Category1 extends Model
{
  public function validate($data)
  {
    $this->errors = [];

    if (empty($data['product_name'])) {

      $this->errors['product_name'] = 'Product name is requred';
    }

    if (empty($data['inventory'])) {

      $this->errors['inventory'] = 'inventory is required';
    }

    if (count($this->errors) == 0) {
      return true;
    }
    return false;
  }
}