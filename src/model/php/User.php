<?php
// include_once 'Database.php';
Class User{

	private $username = "";
	private $password = "";
	private $resultset = "";

	public function __construct($username,$password){
		$this->username = $username;
		$this->password = $password;
	}

	public function addNewUser(){
		$connection = new ProfileDB();
		$mysqli = $connection->mysqliConnectDB();

		$sql_string = "INSERT INTO user (name,password) VALUES ('$this->name', '$this->password')";

		if($mysqli->query($sql_string)){
			echo "<br>Success, new user created!";
		}else{
			echo "<br>There was a problem creating a new user --> ". $mysqli->errno;
		}
				$mysqli->close();
	}

	public function setUser(){
		$pdo = new PDO("mysql:host=localhost;dbname=PORTFOLIO", "root", "root");
		$stmt = $pdo->prepare("SELECT username FROM USER WHERE username=? AND password=?");
		$stmt->execute([$this->username, $this->password]);
		$this->resultset = $stmt->fetch(PDO::FETCH_ASSOC);
		return $this->resultset;
	}

	public function getUser(){
		return $this->resultset;
	}

}
