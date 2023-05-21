<?php
class Database{
	
	//private $host  = '127.0.0.1';
	private $host  = '89.117.169.1';
    private $user  = 'u762373433_NuSB3';
    private $password   = "Test@2023###";
    private $database  = "u762373433_xXIGV"; 
    
    public function getConnection(){	
		
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
		
			return $conn;
		}

		
    }
}
?>