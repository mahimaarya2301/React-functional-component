<?php
	class Database{
		//1.Property
		public $con;//Property Declaration
		public $sql;//Property Declaration
		public $result;//Property Declaration
		
		//2.Constructor
		public function __construct($hostname,$mysql_user,$mysql_pass,$dbname){ //Formal args
			//1.DB Connection Open
			$this->con =  mysqli_connect($hostname,$mysql_user,$mysql_pass,$dbname);
		}
		//3.Method
		public function getMyColours(){ //Camel case
			//2.Build the query
			$this->sql = "SELECT * FROM colour";
			
			//3.Execute the query
			$this->result = mysqli_query($this->con,$this->sql);
			echo '<pre>';
			var_dump($this->result);
			echo '</pre>';
			
			echo '<ol>';
			while($row=mysqli_fetch_assoc($this->result)){
				//4.Display the query
				//echo '<pre>';
				//var_dump($row);
				//echo '</pre>';
				
				echo '<li>'.$row['name'].'</li>';
			}
			echo '</ol>';
			
			//5.DB Connection Close
			mysqli_close($this->con);
		}
		
	}

	//Create an external object of the class
	$dbObject=new Database('localhost','root','','colours');
	//Access the member using ->member selection operator
	$dbObject->getMyColours();
	
	
?>