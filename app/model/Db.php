<?php
class DB{	 
	public $dbname = 'vk';

	public $db = false;
	
 	public function __construct() {
		$this->db = new PDO('mysql:host=' . App::getConfig('db_host') . ';dbname=' . $this->dbname . ';charset=utf8',
            App::getConfig('db_user'),
            App::getConfig('db_pass')
        );
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
}
?>