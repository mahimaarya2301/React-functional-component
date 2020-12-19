<?php
	//Types of Array
	
	//1.Index/Numeric Array
	
	//2.Associative Array key=>value
	
	//3.Multi dimensional Array

	//1.Index/Numeric Array
	
	//Array Declaration
	
	$names=array();//Built in function
	
	//Initialzation
	$names[0]='Mahima';//0 is index no.
	$names[1]='Priyanka';//1 is index no.
	$names[2]='Chanchal';//2 is index no.
	$names[3]='Aarti';//3 is index no.
	$names[4]='Pooja';//4 is index no.
	
	
	echo $names[0];
	echo '<br>';//break line
	echo $names[1];
	echo '<br>';//break line
	echo $names[3];
	echo '<br>';//break line
	
	//Array Declaration and Initialzation
	$z=[30,45];
	echo $z[0];//Substitute the value
	echo '<br>';//break line
	echo $z[1];//Substitute the value
	echo '<br>';//break line 
	echo $z[0]+$z[1];//Substitute the value
	echo '<br>';//break line
	
	//Array Declaration
	$flowers=array();//Built in function
	//Initialzation
	$flowers[]='Rose';//Rose is at index no.0
	$flowers[]='Lotus';//Lotus is at index mo.1
	$flowers[]='Jasmine';//Jasmine is at index no.2
	$flowers[]='Canna';//Canna is at index no.3
	$flowers[]='Daisy';//Daisy is at index no.4
	$flowers[]='Buttercup';//Buttercup is at index no.5
	
	echo $flowers[1];
	echo '<br>';//break line
	echo $flowers[3];
	echo '<br>';//break line
	echo $flowers[5];
	echo '<br>';//break line
	
	//2.Associative Array key=>value
	
	$friend=array(
		'name'=>'Mahima',
		'address'=>'Neemuch',
		'contact_no'=>8269328599,
		'hobby'=>['Dancing','Singing']
	
	);
	
	echo '<pre>';
	var_dump($friend);
	echo '</pre>';
	
	echo '<pre>';
	var_dump($friend['name']);
	echo '</pre>';
	
	
	












?>