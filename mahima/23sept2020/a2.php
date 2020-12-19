<?php
    //Class Declaration
	class A{ //A is Parent/Base/Super class
		//1.Property
		
		//2.Constructor
		
		public function __construct($a){ //$a is formal arg
			echo "Hello $a from constructor"; //Statement
     		echo '<br>'; //break line
            $this->a1(); //$this is an internal object 			
		}
		//3.Method
		
		public function a1(){
			
			echo 'Hello from a1 method'; //Statement
			echo '<br>'; //break line
		}
		
	}
	
	//Class Declaration
	class B extends A{ //B is Child/Derived/Sub class
		//1.Property
		public $x=10; //Declaration and Initialization
		//2.Constructor
		public function __construct(){
			parent:: __construct('family');//family is actual arg and :: is scope resolution operator
			echo 'Hello Dad'; //Statement
			echo '<br>'; //break line
			
		}
		//3.Method
		public function b1($y){ //$y is a formal arg
			
			echo 'Add<br>'; //Statement
			echo $this->x+$y; //Substitue the value
			echo '<br>'; //break line
		}
		
		
	}
    //Create an object of the class
	$m = new B(); //$m is an external object
    //Access the member by -> operator
    $m->b1(20); //Actual arg
	
	//Class Declaration
	class C extends B{ //C is Chid/Derived/Sub class of B 
		//1.Property
		
		//2.Constructor
		public function __construct(){
			echo 'Hello Mom<br>';//Statement
			
		}
		//3.Method
		public function c1(){
			echo 'Hello from c1 method<br>'; //Statement
		}
	}
    //Create an object of the class
	//$n = new C();//$n is an external object
	

    //Class Declaration
	class D extends C{ //D is Chid/Derived/Sub class of C 
		//1.Property
		
		//2.Constructor
		public function __construct($x){ //$x is formal arg
			echo "Hello $x<br>";//
			
		}
		//3.Method
		public function d1(){
			echo 'Hello from d1 method<br>'; //Statement
		}
	}
    
    //Class Declaration
	class E extends D{ //E is Chid/Derived/Sub class of D 
		//1.Property
		
		//2.Constructor
		public function __construct(){
			parent::__construct('sister'); //sister is actual arg and :: is scope resolutin operator
			echo 'Hello brother<br>';//Statement
			echo $this->e1();//$this is an internal object
		}
		//3.Method
		public function e1(){
			echo 'Hello from e1 method<br>'; //Statement
		}
	}
    //Create an object of the class
	$n = new E();//$n is an external object
    //Class Declaration
	class F extends E{ //C is Chid/Derived/Sub class of B 
		//1.Property
		
		//2.Constructor
		public function __construct(){
			echo 'Hello uncle<br>';//Statement
			echo $this->f1();//$this is an internal object
		}
		//3.Method
		public function f1(){
			echo 'Hello from f1 method<br>'; //Statement
		}
	}
    //Create an object of the class
	$o = new F();//$o is an external object

    //Class Declaration
	class G extends F{ //C is Chid/Derived/Sub class of B 
		//1.Property
		public $x=55;//Declaration and Initialization
		public $y=80; //Declaration and Initialization
		//2.Constructor
		public function __construct(){
			echo 'Hello aunt<br>';//Statement
			
		}
		//3.Method
		public function g1(){
			echo 'Hello from g1 method<br>'; //Statement
		}
	}
    //Create an object of the class
	//$n = new G();//$n is an external object
    //Class Declaration
	class H extends G{ //C is Chid/Derived/Sub class of B 
		//1.Property
		
		//2.Constructor
		public function __construct(){
			echo 'Hello nephew<br>';//Statement
			
		}
		//3.Method
		public function h1(){
			echo 'Hello from h1 method<br>'; //Statement
		}
	}
    //Create an object of the class
	//$n = new H();//$n is an external object

?>