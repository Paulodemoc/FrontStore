<html>
<head>
    <title><?php echo $title ?></title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
<header id="header">
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		        </button>
		        <a class="brand" href="/"Front Store</a>
		        <div class="nav-collapse collapse">
		        	<ul class="nav">
		        		<li class="active"><a href="/">Home</a></li>
		        		<li><a href="#">Link2</a></li>
		        		<li><a href="#">Link3</a></li>
		        		<li><a href="#">Link4</a></li>
		        		<li><a href="#">Link5</a></li>
		        	</ul>
		        </div>
			</div>
		</div>
	</div>
</header>
<div style="padding-top:45px;height:540px">
    <div id="contents" style ="width:510px;float:left;border:1px solid green;"><?php echo $contents ?></div>
</body>
</html>