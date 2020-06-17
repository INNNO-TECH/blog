<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
		<h2 class="text-center my-4">Laravel with MVC</h2>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form method="POST" action="<?php echo $post->id; ?>">
					{{csrf_field()}}
					<input type="text" name="name" placeholder="Enter Book Name" class="form-control" value="<?php echo $post->name; ?>"><br>
					<input type="text" name="author" placeholder="Enter Author Name" class="form-control" value="<?php echo $post->author; ?>"><br>
					<button class="btn btn-info">UPDATE</button>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>		
	</div>
</body>
</html>