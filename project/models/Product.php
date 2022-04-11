<?php
namespace Project\Models;
use \Core\Model;
/**
 * [Description Product]
 */
class Product extends Model
{
	/**
	 * @param mixed $id
	 * 
	 * @return array
	 */
	public function getById($id) : array 
	{
		return $this->findOne("SELECT * FROM products WHERE id=$id");
	}
	
	/**
	 * @return array
	 */
	public function getAll() : array
	{
		return $this->findMany("SELECT name, price, quantity, description  FROM products");
	}
}
