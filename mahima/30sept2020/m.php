<?php

	//We can write html code inside php block using quotes '',""
	
	echo '<h1>Hello</h1>';
	echo "<h1>Mahima</h1>";
?>
<!-- We can write html code outside php block -->
<!doctype html>
<html>
	<head>
		<title>
		This is my first web page
		</title>
	</head>
	<body>
		<?php
			//Class Declaration
			class A{ //A is Parent/Base/Sub Class
				
				//1.Property
				
				public $x=10;//Property Declaration & Initialization
				public $y;//Property Declaration
				
				//2.Constructor
				
				public function __construct($m='Sunil'){ //$m is formal arg //Default Argument
					
					echo 'Hello '.$m.' from A constructor';//Statement
					echo '<br>';//break line
				} 
				//3.Method
				public function a1($a){ //$a is formal arg 
					$this->y=$a;//$this is an internal object
					echo $this->x+$this->y;//$this is an internal object
					echo '<br>';//break line
					 
				}
			}
		
		?>
			<ul>
				<li>AA</li>
				<li>BB</li>
				<li>CC</li>
			
			</ul>
	</body>
</html>
<?php
	//Create an external object of the class
	$obj=new A();
	//Access the member by ->member selection operator
	$obj->a1(24);//Actual arg
?>
<?php
	//Class Declaration
	class B extends A{ //B is Child/Derived/Super Class of A 
		//1.Property
		public $colours=['Black','White','Blue','Brown','Grey'];//Property Declaration & Initialization
		//2.Constructor
		
		public function __construct($n){ //$n is formal arg
			parent:: __construct('Mahima');//Mahima is an actual arg //:: is scope resolution operator
			echo "Hello $n from B Constructor";//Statement
			echo '<br>';//break line
		}
		//3.Method
		
		public function b1(){ //Function always return some value
			echo 'Hello from b1 method<br>';//Statement with break line
			return $this->colours;//return value using $this(Internal Object)
		}
		
	}

	//Create an object of the class
	$t=new B('Priyanka');
	//Access the member using ->member selection operator
	$s=$t->b1();
	
	echo '<pre>';
	var_dump ($s);
	echo '</pre>';
	
	//foreach syntax
	
		foreach($s as $key=>$value){
			
			echo ''.$value.'<br>';
		}
		echo '<ol>';
			foreach($s as $key=>$value){
				echo '<li>'.$value.'</li>';	
			}
		echo '</ol>';
?>