<?php 

	//Loop in Array
	
	//foreach syntax
	/*
	
		foreach($array as $key=>$value){}
	*/
	
	
	$friends=[
		[
			'name'=>'Mahima'
		
		],
		[
			'name'=>'Priyanka'
		
		],
		[
		
			'name'=>'Chanchal'
			
		],
		[
		
			'name'=>'Ram'
		
		],
		[
		
			'name'=>'Goldi'
		
		],
		[
		
			'name'=>'Aarti'
		
		],
		[
		
			'name'=>'Pooja'
		
		],
		[
		
			'name'=>'Vishakha'
		
		],
		[
		
			'name'=>'Vanshika'
		
		],
		[
		
			'name'=>'Ansh'
		
		]
	
	];
	
	echo '<pre>';
	var_dump ($friends);
	echo '</pre>';
	
	foreach ($friends as $key=>$value){
		//echo $key
		echo ('Hello'.$value['name'].'<br>');
		
	}
	
	/*
		Hello Mahima
		Hello Priyanka
		Hello Chanchal
		Hello Ram
		Hello Goldi
		Hello Aarti
		Hello Pooja
		Hello Vishakha
		Hello Vanshika
		Hello Ansh
	*/
	
	//Loop in array
	
	//foreach syntax
	
	/*
		foreach ($array as $key=>$value){}
	
	*/

	$relations=[
		[
		
			'name'=>'Grand-Father'
		
		],
		[
		
			'name'=>'Grand-Mother'
		
		],
		[
		
			'name'=>'Father'
		
		],
		[
		
			'name'=>'Mother'
		
		],
		[
		
			'name'=>'Uncle'
		
		],
		[
		
			'name'=>'Aunt'
		
		],
		[
		
			'name'=>'Brother'
		
		],
		[
		
			'name'=>'Sister'
		
		],
		[
		
			'name'=>'Child'
		
		]
	
	];
	
	echo '<pre>';
	var_dump ($relations);
	echo '</pre>';
	
	foreach ($relations as $key=>$value){
		
		//echo $key
		echo 'Hello'.$value['name'].'<br>';
		
	}
	
	/*
		Hello Grand-Father
		Hello Grand-Mother
		Hello Father
		Hello Mother
		Hello Uncle
		Hello Aunt
		Hello Brother 
		Hello Sister
		Hello Child

	*/
	





















	

?>