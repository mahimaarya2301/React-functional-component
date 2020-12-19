<?php
	///Class Declaration
	class A{
		//1.Property
		public $con;//Property Declaration
		public $sql;//Property Declaration
		public $result;//Property Declaration
		//2.Constructor
		public function __construct($h,$u,$p,$db){ //Formal args
			//1.DB Connection Open
			$this->con=mysqli_connect($h,$u,$p,$db);//$this is an internal object
		}
		//3.Method
		public function get($tb_name){ //$tb_name is formal arg
			//2.Build the query
			$this->sql="SELECT * FROM $tb_name";
			//3.Execute the query
			$this->result=mysqli_query($this->con,$this->sql);
			
			$data=[];//Empty array
			//4.Display the query
			while($row=mysqli_fetch_assoc($this->result)){
				$data[]=$row;
			}
			
			
			//5.DB Connection Close
			mysqli_close($this->con);
			
			
			return $data;
		}
		
	}
	//Create an external object
	
	/*
		//1.
		$config = array(
							'hostname'=>'',
							'mysql_user'=>'',
							'mysql_pass'=>'',
							'dbname'=>''
						);
		//2.
		$config =   [
						'hostname'=>'',
						'mysql_user'=>'',
						'mysql_pass'=>'',
						'dbname'=>''
					];
					
		//3.
		$config['hostname'] = 'localhost'; //Create Associative Array
		$config['mysql_user'] = 'root'; 
		$config['mysql_pass'] = ''; 
		$config['dbname'] = 'aa_db';
	*/
	
	include 'config.php'; 
	
	//die($config['hostname']);
	
	$obj = new A($config['hostname'],$config['mysql_user'],$config['mysql_pass'],$config['dbname']);//Actual args
	//Access the member using -> member selection operator
	include 'object.php';
?>
<!doctype html>
<html> 
	<head>
		<title>Hello</title>
	
	</head>
	<body>
		
			<?php
				echo '<ol>';
				foreach($data as $key=>$value){
					//echo '<pre>';
					var_dump($data);
					//echo '</pre>';
					echo '<li>'.$value['name'].'</li>';
				}
				echo '</ol>';
			
			?>
		
	</body>

</html>