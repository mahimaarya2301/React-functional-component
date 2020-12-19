<?php
	//Class Declaration
	class A{
		//1.Property
		public $con;//Property Declaration
		public $sql;//Property Declaration
		public $result;//Property Declaration
		
		//2.Constructor
		public function __construct($hostname,$mysqli_user,$mysqli_pass,$dbname){ //Fomal args
			//DB Connection Open
			$this->con=mysqli_connect($hostname,$mysqli_user,$mysqli_pass,$dbname);
		}
		//3.Method
		public function getMyFruits(){
			//2.Build the query
			$this->sql='SELECT * FROM fruit';
			//3.Execute the query
			$this->result=mysqli_query($this->con,$this->sql);
			
			echo '<pre>';
			var_dump($this->result);
			echo '</pre>';
			
			echo '<ul>';
			//4.Display the query
			while($row=mysqli_fetch_assoc($this->result)){
				echo '<li>'.$row['name'].'</li>';
				
			}
			echo '</ul>';
			//5.DB Connection Close
			mysqli_close($this->con);
		}
		
		
	}
	//Create an external object
	$dbObject = new A('localhost','root','','A');
	//Access the member using -> member selection operator
	$dbObject->getMyFruits();


?>