<?php

	class accesoDatos
	{
		public $objPDO;
		public static $objAcceso;

		public function __construct()
		{
			try
			{
				$this->objPDO = new PDO('mysql:host=localhost; dbname=carniceria;charset=utf8', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				$this->objPDO->exec("SET CHARACTER SET utf8");	



				 
			}
			catch(PDOException $e)
			{
				print "Error!" . $e->getMessage();
				die();
			}			
		}

		public function dameAcceso()
		{
			if(!isset(self::$objAcceso))
			{
				self::$objAcceso = new accesoDatos();
			}
			return self::$objAcceso;
		}

		public function retornarConsulta($sql)
		{
			return $this->objPDO->prepare($sql);		
		}

		public function RetornarUltimoIdInsertado()
	    { 
	        return $this->objPDO->lastInsertId(); 
	    }

	}




?>