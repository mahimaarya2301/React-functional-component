<!doctype html>
<html>
	<head>
		<title>Welcome to my page</title>
	</head>
	<body>
		<?php
			//1.DB Connection Open
			//Syntax
			//mysql_connect('hostname','mysql_user','mysql_pass','db_name');
			$con=mysqli_connect('localhost','root','','chanchal');
			//2.Build the sql query
			$sql="SELECT * FROM students";
			//3.Execute the query
			$result=mysqli_query($con,$sql);
			
			echo '<ol>';
			while($row=mysqli_fetch_assoc($result) ){
				
				echo '<li>'.$row['name'].'</li>';
				//echo '<pre>';
				//var_dump($row);
				//echo '</pre>;
				
			}
			echo '</ol>';
			//4.Display the result
				echo '<pre>';
				var_dump($result);
				echo '</pre>';
			//5.DB Connection close 
			mysqli_close($con);//$con is actual arg
			
		?>
	</body>
	
</html>

