<?php
	//Function Decleration
    function a($name){//$name is formal Argument
		echo 'Hello'.$name;
	}
	//Function Calling
	a('Anil'); //Actual Arg

   //function decleration
   function b($name){//$name is formal Argument
        echo 'hello'.$name;
	   
    }
	//function calling
	
	b('xyz');//Actual 
	
    //function decleration
	function c($x,$y) //formal argument
	{
		echo 'add';
		echo '<br>'; //break line
		echo $x+$y; //add the value
		echo '<br>'; //break line
	}
	
	//function calling
	c(10,20); //actual argument
	
	//function decleration
	function d($a,$b) //formal argument 
	{
		echo 'subtract'; 
		echo '<br>'; //break line
		echo $a-$b; //subtract the value
		echo '<br>'; //break line 
	}
    //function calling  
    d(50,42); //actual argument 
    
    //function decleration 
    function e($a,$b,$c) //formal argument	
	{ $x = $a+$b; 
	  $y = $b+$c; 
      echo $x+$y;	  
	}
     //function calling 
     e(12,22,20);

    function f($a,$b,$c) //formal argument	
	{ $x = $a+$b;  
      echo $x,$c;	  
	}
	echo '<br>';
     //function calling 
     f(12,22,'subrtarct');
	 
	 
  
	 
	
?>