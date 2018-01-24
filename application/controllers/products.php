<?php
defined('BASEPATH') OR exit('No direct script access allowed');

define("app_id", "1795623014075486");
define("app_secret", "a96ced6d1db82bf2add3eb2b36db996d");

class Products extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('ProductsModel','Products');
    }

	public function index()
	{
		$data = array();
		$this->layout->set('title', 'Products');

		$data['products'] = $this->Products->getAll('name','asc');

		$this->layout->load('default', 'contents' , 'products', $data);
	}

	public function view($productId){
		$product = $this->Products->GetById($productId);
		if($product != false && $product != null){
			$product = (object)$product;
			$data = array();
			$this->layout->set('title', $product->name);

			$data['product'] = $product;

			$this->layout->load('default', 'contents' , 'productDetail', $data);
		} else {
			show_404();
		}
	}
}
