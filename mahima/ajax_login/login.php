<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap 4 Example</title>
		<meta charset"utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		  
	</head>
	<body>

		<div class="container">
			<form class="myForm">
				<div class="form-group">
					<label for="email">Username</label>
					<input type="text" name="username" class="form-control" placeholder="Enter email" id="username">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" name="password" class="form-control" placeholder="Enter password" id="password">
				</div>
				<div class="form-group form-check">
					<label class="form-check-label">
					<input class="form-check-input" type="checkbox"> Remember me
					</label>
				</div>
				<button type="submit" class="btn btn-danger">Submit</button>
			</form>

		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script>
			(function(){
				//alert('ok');
				//$(selector).action();
				$('.myForm').submit(function(){
					//e.preventDefault();
					var d = $(this).serialize();
					alert('submit button clicked');
					$.ajax({
						//p:v
						//function
						url:'http://localhost/mahima/ajax_login/ajaxRequest.php',
						data:d,
						success:
						
						
						
						
						
						
					});
				});
			})(jQuery);
		
		
		</script>
	</body>
</html>











