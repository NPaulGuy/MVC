<?php
namespace Project\Controllers;
use \Core\Controller;
use \Project\Models\Product;
/**
 * [Description ProductController]
 */
class ProductController extends Controller
{
	/**
	 * @param mixed $params
	 * 
	 * @return \Core\Page
	 */
	public function show($params) : \Core\Page
	{
		$product = new Product;
		$num = $params['n'];
		$data = $product->getById($num);
		return $this->render('product/show', [
			'product' => $data,
		]);
	}
	/**
	 * @return \Core\Page
	 */
	public function all() : \Core\Page
	{
		$product = new Product;
		$data = $product->getAll();
		return $this->render('product/all', [
			'products' => $data,
		]);
	}
}
