<?php 
    class db{
        private $dbHost='localhost';
        private $dbUser='root';
        private $dbPass='';
        private $dbName='apiRest';
        //conexion
        public function conectDB(){
            $mysqlConnect="mysql:dbhost=  $this->dbHost;dbname=$this->dbName";
            $dbConection=new PDO($mysqlConnect,$this->dbUser,$this->dbPass);
            $dbConection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            return $dbConection;
        }
    }

?>
