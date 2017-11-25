<?php  include_once 'DatabaseConfig.php';
Class Person{

	private $name;
	private $last;
	private $email;

	public function __construct($name, $last, $email){
		$this->name = $name;
		$this->last = $last;
		$this->email = $email;
	}

	public function addNewUser(){
		$connection = new DatabaseConfig();
		$mysqli = $connection->mysqliConnectDB();

		$sql_string = "INSERT INTO user (name, last, email) VALUES ('$this->name', '$this->last', '$this->email')";

		if($mysqli->query($sql_string)){
			echo "<br>Success, new user created!";
		}else{
			echo "<br>There was a problem creating a new user --> ". $mysqli->errno;
		}
				$mysqli->close();
	}



}
