<?php  
    //Function Declaration
	//Function Returning Value 
	function add($a,$b){ //$a and $b are formal arg
		return; //non-returning value
		$a+$b;//Statement 	
	}
	//Function Calling
	add(10,20); //Actual arg
	
	//Function Declaration
	//Function Returning Value
	
	function b1($x,$y){ //$x,$y are formal arg
		echo $x-$y;//Statement
		$z = $x-$y;//Statement
		return $z; //returning value
		
	}
	//Function Calling
	$result = b1(80,55);//Actual arg
	echo $result;
	
	//Function Declaration
	//Function Returning Value
	function c($x,$y){ //$x,$y are formal arg
		$z=$x*$y;//Statement
		echo '<br>'; //break line
	    return $z; //returning value
	}
    //Function Calling
	$result = c(60,60);//Actual Arg
	echo $result;

    //Class Declaration
	class A{
		//1.Property
		
		//2.Constructor
		
		//3.Method
		public function a1($a,$b){ //$a,$b are formal arg
			$c=$a+$b; //Statement
			echo '<br>';//break line
			return $c;//returning value
			echo '<>br';//break line
		}
	}
    //Create an object
	$obj = new A();
	//Access the member using ->member selection operator
	$m=$obj->a1(50,20);//Actual Arg
	echo $m;
    //Class Declaration
	class B{
		//1.Property
		public $x=22;//Declaration and Initialization
		public $y=55;//Declaration and Initialization
		
		//2.Constructor
		public function __construct(){
			echo 'Hello from constructor B';//Statement
			echo '<br>';//break line
		}
		
		//3.Method
		public function c2($a,$b){ //$a,$b are formal arg
	    	echo $this->x+$a;//$this is an internal object
			echo '<br>';//break line
		    echo $this->y-$b;//$this is an internal object
			echo '<br>';//break line
			return ;//returning value
	
		}
		
	}

    //Create an object
	$n = new B();
    //Access the member using -> member selection operator
    $n->c2(80,29);//Actual arg
	
	//Class Declaration
	class C{
		
		//1.Property
		public $x=3.14;//Declaration and Initialization
		
		//2.Constructor
		public function __construct($name){ //$name is formal arg
			echo "Hello $name ";//Statement
			echo '<br>';//break line
		}
		//3.Method
		public function c1($r){ //$r is formal arg
			echo 'circle area';//Statement
			echo '<br>';//break line
			return $this->x*$r*$r;//$this is an internal object and returning value
			echo '<br>';//break line
			
		}
	}
    //Create an object
	$obj1= new C('Mahima');//mahima is actual arg
	//Access the member using -> member selection operator
	echo $result=$obj1->c1(5.8);//Actual arg
	

?>