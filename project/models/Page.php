<?php
namespace Project\Models;
use \Core\Model;
/**
 * [Description Page]
 */
class Page extends Model
{
	/**
	 * @param int $id
	 * 
	 * @return array
	 */
	public function getById(int $id) : array
	{
		return $this->findOne("SELECT * FROM pages WHERE id=$id");
	}
	/**
	 * @param int $from
	 * @param int $to
	 * 
	 * @return array
	 */
	public function getByRange(int $from, int $to) : array
	{
		return $this->findMany("SELECT * FROM pages WHERE id>=$from AND id<=$to");
	}
	/**
	 * @return array
	 */
	public function getAll() : array
	{
		return $this->findMany("SELECT id, article FROM pages");
	}
}