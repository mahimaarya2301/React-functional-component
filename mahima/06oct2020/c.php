<?php

	//Class Declaration
	class Database{
		//1.Property
		public $con;//Property Declaration
		public $sql;//Property Declaration
		public $result;//Property Declaration
		//2.Constructor
		public function __construct($h,$u,$p,$db){ //Formal args
			//1.DB Connection Open
			$this->con=mysqli_connect($h,$u,$p,$db);
		} 
		//3.Method     every method always return a value
		public function query($query){ //$query is formal arg
			//2.Build the query
			$this->sql=$query;
			//3.Execute the query
			$this->result=mysqli_query($this->con,$this->sql);
			
			$data=[];//empty array
			//4.Display the query
			while($row=mysqli_fetch_assoc($this->result)){
				$data[]=$row;
			}
			//5.DB Connection Close
			mysqli_close($this->con);
			
			return $data;
		}
		
	}
   	/* Associative array
	//1.
	$configuration=array(
							'hostname'=>'',
							'mysql_user'=>'',
							'mysql_pass'=>'',
							'dbname'=>''
	                    );
						
	//2.$config=[
					'hostname'=>'',
					'mysql_user'=>'',
					'mysql_pass'=>'',
					'dbname'=>''
	            
				];
				
	//3.$configuration['hostname']='localhost';
		$configuration['mysql_user']='root';
		$configuration['mysql_pass']='';
		$configuration['dbname']='c_db';
	*/
	include 'configuration.php';
	
	include 'config.php';
	
		$configuration['hostname']='localhost';
		$configuration['mysql_user']='root';
		$configuration['mysql_pass']='';
		$configuration['dbname']='c_db';
	
	//Create an external object of the class
	$dbObj=new Database($configuration['hostname'],$configuration['mysql_user'],$configuration['mysql_pass'],$configuration['dbname']);//Actual args
	//Access the method using -> member selection operator
	$data=$dbObj->query('SELECT * FROM flower');//Actual arg
?>
<!doctype html>
<html>
	<head>
	<title>WELCOME</title>
	</head>
	<body>
		<ol>
		<?php
			foreach($data as $key=>$value){
				//echo '<pre>';
				//var_dump($data);
				//echo '</pre>';
				
				echo '<li>'.$value['name'].''.$value['quantity'].'</li>';
				
			}
			
		?>
		</ol>
	</body>
</html>





