<?php 
	class ConnectDB{
		private $bd;

		 function __construct(){
			$this->bd = new PDO(DRIVER.":host=".HOST.";dbname=".DBNAME,USER,PASSWORD);
		}
		public function prepare($string,$option = null){
			return $this->bd->prepare($string);
		}
		public function exec($string){
			return $this->bd->exec($string);
		}

	}
 ?>