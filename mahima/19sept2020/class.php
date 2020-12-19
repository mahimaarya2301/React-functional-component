<?php  
   //Class Declaration
   class A{
	   //1.Property
	     
		 
	   //2.Constructor
        function a(){     //constructor
			echo 'Hello from constructor'; //statement 1
			
		}	
		//3.Method
	    function a1(){
			
		}
		
     }	
	   //Create an abject of the class
	   $obj=new A();
	   
	   //Class Declaration
	   class B{
		   //1.Property
		   public $a=25; //declaratin and initialization
		   
		   //2.Constructor
		   function __construct($name,$x){ //$name and $x are formal arg constuctor 
			   echo "hello $name from constructor";
			   echo $this->a+$x;
		   }
		   //3.Method
		   function b1(){
			   
			   echo 'This '.'is'.'a'.'function';//statement 2 using concatination
			   
		   }
		   
	   }
	   
	   //Create an object of the class
	   $m=new B('mahima',55);
	   //Access the member by arrow operator
       $m->b1();	   
	   
	   //Class Declaration
	   
	   
	   
	   
	   
	   
	   
   
?>


























