<?php

	//Types of Variable
	
	//1.Global Variable
	
	//2.Local Variable
	//Accessing global var locally
	//Function Declaration
	
	$x=10; //Declaration and Initalization of global var
	
	//Function Defination
	function a($x){ //$x is formal arg
		echo $y=20;//$y is local var
		echo '<br>'; //break line
		echo $x; //we can access the global var locally
		echo '<br>';//break line
	}
	//Function Calling
	
	a($x); //$x is actual arg

    //Function Declaration
	$a=30; //Declaration and Initalization of global var
	
	//Accessing global var using global keyword
	//Function Defination
	function a1(){
	    $b=40;//$b is local var
		echo $b;//access local var locally
		echo '<br>';//break line
		global $a;//access the global var using global keyword
		echo $a;//$a is global var
		echo '<br>';//break line
	}
	  
	//Function Calling
	a1();

	//Accessing global var globally
	//Function Declaration
	$m=23;//Declaration and Initalization of global var
	//Function Defination
	function a2(){
		$n=21;//$n is local var
		echo $n;//access local var locally
		echo '<br>';//break line
	}
    echo $m;//we can access global var globally
	//Function Calling
	a2();
	
	//Accessing local var locally
	
	//Function Declaration
	
	$s=45;//Declaration and Initalization of global var
	
	//Function Defination
	
	function a3(){
		$t=54;//$t is local var
		echo $t;//we can access the local var locally
		echo '<br>';//break line
		
	}
    //Function Calling
	a3();
	echo $s;//we can access the global var globally
	
	//Accessing the local var globally
	
	//Function Declaration
	$g=59;//Declaration and Initalization of global var
	
	//Function Defination
	function a4(){
	    global $g;//access global var using global keyword
		echo '<br>';//break line
		echo $g;//Statement
		$h=69;//$h is local var
		
	}
	//Function Calling
	a4();
    echo $h;//we can not access local var globally
	
	//Accessing local var locally and globally
	
	//Function Declaration
	
	$c=20;//Declaration and Initalization of Global var
	
	//Function Defination
	function a5(){
		$d=50;//$d is local var
		$e=45;//$e is local var
		echo $d;//access local var locally
		echo '<br>';//break line
		global $c;//access local var globally
		echo $c;//Statement
		echo '<br>';//break line
		return $e;//access local var globally
	}
	echo $e;
	//Function Calling
	a5();





?>