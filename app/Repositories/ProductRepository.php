<?php

namespace App\Repositories;

use App\Product;

class ProductRepository  {
  
    protected $post;

    public function __construct(Product $product) {
      $this->product = $product;
    }

    public function create($attributes) {
    return $this->product->create($attributes);
    }
  
    public function all() {
    return $this->product->all();
    }
}