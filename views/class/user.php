<?php

 class Users {
	 public $username = null;
	 public $password = null;
	 public $firstname = null;
	public $lastname = null;
	 public $email = null;
	 public $salt = "Zo4rU5Z1YyKJAASY0PT6EUg7BBYdlEhPaNLuxAwU8lqu1ElzHv0Ri7EM6irpx5w";
	 
	 public function __construct( $data = array() ) {
		 if( isset( $data['username'] ) ) $this->username = stripslashes( strip_tags( $data['username'] ) );
		 if( isset( $data['password'] ) ) $this->password = stripslashes( strip_tags( $data['password'] ) );
		 if( isset( $data['firstname'] ) ) $this->firstname = stripslashes( strip_tags( $data['firstname'] ) );
		if( isset( $data['lastname'] ) ) $this->lastname = stripslashes( strip_tags( $data['lastname'] ) );
		 if( isset( $data['email'] ) ) $this->email = stripslashes( strip_tags( $data['email'] ) );
	 }
	 
	 public function storeFormValues( $params ) {
		//store the parameters
		$this->__construct( $params ); 
	 }
	 
		public function userLogin() {
			$success = false;
			try{
			$con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
			$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$sql = "SELECT * FROM users WHERE username = :username AND password = :password LIMIT 1";


			$stmt = $con->prepare( $sql );
			$salted = ($this->password . $this->salt);
			$stmt->bindValue( "username", $this->username, PDO::PARAM_STR );
			$stmt->bindValue( "password", hash("sha256", $salted), PDO::PARAM_STR );
			$stmt->execute();

			$valid = $stmt->fetchColumn();

			if( $valid ) {
			session_start();
			$_SESSION["login"] = ($this->username);
			$success = true;
			}
			
			$con = null;
			return $success;
			}catch (PDOException $e) {
			echo $e->getMessage();
			return $success;
			}
		}
	 
	public function register() {
			$correct = false;
				try {
					$con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
					$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
					$sql = "INSERT INTO users(username, password, Firstname, Lastname, NumOfAdsSub, NumOfAdsAns, Admin, Funds, email) VALUES(:username, :password, :firstname, :lastname, 0, 0, 'n', 0, :email)";
					
					$stmt = $con->prepare( $sql );
					$stmt->bindValue( "username", $this->username, PDO::PARAM_STR );
					$stmt->bindValue( "password", hash("sha256", $this->password . $this->salt), PDO::PARAM_STR );
					$stmt->bindValue( "firstname", $this->firstname, PDO::PARAM_STR );
					$stmt->bindValue( "lastname", $this->lastname, PDO::PARAM_STR );
					$stmt->bindValue( "email", $this->email, PDO::PARAM_STR );

					$stmt->execute();
					return "Registration Successful <br/> <a href='../home.php'>Login Now</a>";
				}catch( PDOException $e ) {
					return $e->getMessage();
				}
		 }
		 
		 
		
	 
 }
 
?>