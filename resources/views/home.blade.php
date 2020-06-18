<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div class="container">
		<h2 class="text-center my-4">Laravel with MVC</h2>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form method="POST" action="./store">
					{{csrf_field()}}
					<input type="text" name="name" placeholder="Enter Book Name" class="form-control"><br>
					<input type="text" name="author" placeholder="Enter Author Name" class="form-control"><br>
					<button class="btn btn-info">INSERT</button>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row mt-4">
			<div class="col-md-12">
				<table class="table">
					<tr>
						<th>ID</th>
						<th>Post Name</th>
						<th>Author</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php
					foreach ($posts as $key => $value) {
						?>
					<tr>
						<td><?php echo $value->id; ?></td>
						<td><?php echo $value->name; ?></td>
						<td><?php echo $value->author; ?></td>
						<td><a href="edit/<?php echo $value->id; ?>" class="btn btn-info">Edit</a></td>
						<td><a href="delete/<?php echo $value->id; ?>" class="btn btn-danger">Delete</a></td>
					</tr>
					<?php } ?>

				</table>
			</div>
		</div>
	</div>
</body>
</html>