<?php
    //Function Declaration
	function a(){
		echo 'hello';//statement 1
		echo '<br>';//break line
		echo 'mahima';//statement2
	}
?>
<?php
   //Function calling
   a();
   //Function Declaration
   function b($x)//formal arguement
   {
	   echo 'How are you?';//statement 3
	   echo '<br>';//break line
	   echo " I am $x "; //statement 4 
 	   echo'<br>';//break line
   }
   //Function Calling
   b('fine');//actual arguement
   //Function Declaration
   function c($x,$y) //formal arguement
   {
	   echo 'add';//statement 5
	   echo '<br>';//break line	   
       echo  $x+$y;//add the value substituted
	   echo '<br>';//break line
   }
   //Function calling
   c(10,20);//actual arguement
   //Function Declaration
   function d($a,$b)//formal arguement
   {
	   
	   echo 'subtract';//statement6
	   echo '<br>';//break line
	   echo $a-$b;//subtract the value substituted
	   echo '<br>';//break line
   }
   //Function Calling
   d(80,20);//actual arguement
   
   //Function Declaration
   function e($k,$m)//formal arguement
   {
	echo 'multiply';//statement 7
	echo '<br>';//break line
	echo $k*$m;//multiply the value substituted
	echo '<br>';//break line
   }
   //Function Calling
     e(15,20);//actual arguemnt
   	 

?>