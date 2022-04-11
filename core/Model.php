<?php
	namespace Core;
	
	class Model
	{
		private static $link;
		const DB_HOST = 'localhost';
		const DB_USER = 'root';
		const DB_PASS = 'root';
		const DB_NAME = 'homework';
		public function __construct()
		{
			if (!self::$link) {
				self::$link = mysqli_connect(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);
				mysqli_query(self::$link, "SET NAMES 'utf8'");
			}
		}
		
		protected function findOne($query)
		{
			$result = mysqli_query(self::$link, $query) or die(mysqli_error(self::$link));
			return mysqli_fetch_assoc($result);
		}
		
		protected function findMany($query)
		{
			$result = mysqli_query(self::$link, $query) or die(mysqli_error(self::$link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			
			return $data;
		}
	}
