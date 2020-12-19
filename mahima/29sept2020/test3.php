<?php

	//We can write HTML content inside a PHP block

?>

	<!-- We can write HTML content outside a PHP block -->

<!doctype html>
<html>
	<head>
		<title>Welcome to my first web page</title>
	</head>
	<body>
		<ul>
			<li>
				
				Mahima
			
			</li>
			<li>
			
				Priyanka
			
			</li>
			<li>
			
				Aayushi
			
			</li>
		
		
		</ul>
	
	
	</body>


</html>

<?php

   	echo '<!doctype html>
		<html>
			<head>
				<title>
				Welcome to my first web page
			
				</title>
				
			</head>

			<body>
				<ul>
					<li>
						
						Hello Mahima
					
					</li>
					<li>
					
						Hello Priyanka
					
					</li>
					<li>
					
						Hello Aayushi
					
					</li>
					<li>
					
						Hello Pooja 
					
					</li>
					<li>
					
						Hello Aakansha
					
					</>
				
				
				</ul>
			
			
			</body>


		</html>';

?>

<?php

	//Class Declaration
	class A{
		
		//1.Property
		
		public $x='Happy';//Declaration and Initialization
		public $y='Joyful';//Declaration and Initialization
		
		//2.Constructor
		
		public function __construct(){
			
			echo $this->x;//$this is an internal object
			echo '<br>';//break line
			echo $this->y;//$this is an internal object
			echo '<br>';//break line 
			
		}
		
		//3.Method
		public function a1(){
			
			echo 'Hello from a1 method';//Statement
			echo '<br>';//break line
		}
		public function a2($a,$b){ //$a,$b is formal arg
			
			echo $a+$b;//Statement
			echo '<br>';//break line
			
		}
	}
	
?>
<!doctype html>
<html>
	<head>
	
		<title></title>
	
	</head>
	<body>
		<?php
			//Create an object of the class
			$obj=new A();
			//Access the member using -> member selection operator
			$obj->a1();
			$obj->a2(10,20);//Actual arg
		?>
	
	</body>

</html>





