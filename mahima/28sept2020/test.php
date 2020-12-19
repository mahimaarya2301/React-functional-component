<?php
	//Class Declaration
	
	class A{
		
		//1.Property
		
		public $x=25;//Declaration and Initialization
		public $z='Mahima';//Declaration and Initialization
		//2.Constructor
		
		public function __construct($y){ //$y is formal arg
			
			echo 'Hello from constructor A';
			echo '<br>';//break line
			echo 'add';//Statement
			echo '<br>';//break line
			echo $this->x+$y;//$this is an internal object
			echo '<br>';//break line
		}
		//3.Method
		public function a1(){
			echo 'Hello';//Statement
			echo $this->z;//$this is an internal object
			echo '<br>';//break line
			
		}
		
		//Local Associative Array
		
		public function a2(){
			
			$colours=[
				[
					'name'=>'Black'
				
				
				],
				[
				
					'name'=>'White'
				
				],
				[
				
					'name'=>'Blue'
				
				
				]
				
		
			];
			
			return $colours;
		}//Method End
		
	}//Class End
		
	//Create an object of the class
	$obj = new A(24);//Actual arg
		
	//Access the member using member selection operator 
	$obj->a1();
	$n=$obj->a2();
	echo $n[2]['name'];
	
			
?>