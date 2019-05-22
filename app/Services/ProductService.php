<?php

namespace App\Services;

use App\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductService {

	public function __construct(ProductRepository $post) {
		$this->post = $post ;
	}

	public function index() {
		return $this->post->all();
	}

	public function create(Request $request) {
		$attributes = $request->all();
		return $this->post->create($attributes);
	}
}