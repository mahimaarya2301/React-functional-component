<?php
	//Class declaration
	class A
	{
		//1.Property
		 
		//2.Constructor
		 
		//3.Method
	 function a1()
		{
		echo 'Hello';//Statement 1
		}
	}		
	//Creating an object of class
	 $obj=new A();
	 //Acess the member of the class
	 $obj->a1();//access the member using -> operator
	 
	 //Class Declaration
	 class B
	 {
		//1.Property
		 
		//2.Constructor
		
		//3.Method
		function b1()
		{
			echo 'Hello from b1 method';//statement2
		}
	 }
	 //Creating an object of class
	 $obj1=new B();
	 //Access the member of class
	 $obj1->b1();//acess the member using arrow operator
	 //Class Declaration
	 class C
	 {
		//1.Property
		
		//2.Constructor
		
		//3.Method
		function c1()
		{
			echo 'My name is Mahima';//Statement3
			echo '<br>';//break line
		}
		
	 }
     //Creating an object of the class
	 $obj2=new C();
	 //Access the member of class
	 $obj2->c1();//access the member using arrow operator
	 //Class Declaration
	 class D
	 {
		 //1.Property
		 //2.Constructor
		 //3.Method
		 function d1($a,$b)//formal arguement
		 {
			 echo 'add';//statement4
			 echo '<br>';//break line
			 echo $a+$b;//add the value substituted
			 
		 }
	 }
	 //Creating an object of the class
	 $obj3=new D();
	 //Access the member of class
	 $obj3->d1(10,20);//acess the member using -> operator and passing actual arguement
	 //Class Declaration
	 
	 
?>