<?php

class User extends DB{
	const TABLE = 'users';

	public $result = false;

	public function registration($data) {
		$insert = $this->db->prepare('insert into ' . self::TABLE . ' (email, login, pass) values (:email, :login, :pass)');
		$insert->bindParam(':email', $data['email']);
		$insert->bindParam(':login', $data['login']);
		$insert->bindParam(':pass', $data['pass']);

		try{
			$insert->execute();
			$this->result = 'Hello ' . $data['login'];
		} catch(Exception $e) {
			$this->result = $e->getMessage();
		}
	}

	public function profile($id) {
		$select = $this->db->prepare('SELECT * FROM ' . self::TABLE . ' WHERE id=:id');
		$select->bindParam(':id', $id);

		try{
			$select->execute();
			return $select->fetch(PDO::FETCH_ASSOC);
			
		} catch(Exception $e) {
			$this->result = $e->getMessage();
		}
	}

	public function auth($email, $pass) {
		
	}

}

?>