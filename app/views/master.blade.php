<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">MySite</a>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="/">Home</a></li>
					<li><a href="add">Add Post</a></li>
					<li><a href="edit">Edit Post</a></li>
					<li><a href="remove">Remove Post</a></li>
				</ul>
			</div>
		</nav>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				@yield('container')
			</div>
		</div>
	</div>
</body>
</html>