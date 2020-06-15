<?php

class Database {
	private $hostdb = "localhost";
	private $userdb = "root";
	private $passdb = "";
	private $namedb = "db_lr";
	public $link;
	public $error;

	
	public function __construct(){
	// 	if(!isset($this->pdo)){
	// 		try{
	// 			// $this->pdo = new PDO("mysql:host=127.0.0.1;dbname=login","root","")
	// 			$link = new PDO("mysql:host=".$this->hostdb.";dbname=".$this->namedb, $this->userdb, $this->passdb);
	// 			$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 			$link->exec("SET CHARACTER SET utf8");
	// 			$this->pdo = $link;

	// 		}catch(PDOException $e){
	// 			die("Failed to connect with Database".$e->getMessage());

	// 		}
	// 	}
	// }
		$this->connectDB();

	}
	private function connectDB(){
 $this->link = new mysqli($this->hostdb, $this->userdb, $this->passdb, $this->namedb);
 if(!$this->link){
   $this->error ="Connection fail".$this->link->connect_error;
  return false;
 }
 }




	











}




















?>