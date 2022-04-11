<?php
namespace Project\Controllers;
use \Core\Controller;
/**
 * [Description NumController]
 */
class NumController extends Controller
{
	/**
	 * @param array $nums
	 * 
	 * @return string
	 */
	public function sum(array $nums) : string {
		echo array_sum($nums);
		return "";
	}
}