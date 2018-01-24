<html>
<head>
    <title><?php echo $title ?></title>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link href="<?php echo base_url();?>css/app.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark top">
			<?php echo anchor('home','Front Store',array('class'=>'navbar-brand')); ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <?php echo anchor('products','Products',array('class'=>'nav-link')); ?>
          </li>
		    </ul>
      <?php if(!$this->session->has_userdata('fb_access_token')): ?>
        <form class="form-inline my-2 my-lg-0">	
          <?php echo anchor('home/login', 
            img('img/facebookBtn.png', 
              FALSE,
              array('alt' => 'Login with Facebook',
              'width' => '250')
            )
          ); ?>
        </form>
      <?php endif; ?>
      <?php if($this->session->has_userdata('loggedUser')): ?>
        <div class="nav-item dropdown my-2 my-lg-0" style="color:white;">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('loggedUser'); ?></a>
          <div class="dropdown-menu" aria-labelledby="dropdownUser">
              <?php echo anchor('home/logout','Sign Out',array('class'=>'dropdown-item')); ?>
          </div>
        </div>
      <?php endif; ?>
      </div>
    </nav>

    <main role="main" class="container">
		<?php echo $contents ?>
	</main><!-- /.container -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="<?php echo base_url();?>js/popper.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : 'your-app-id',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.11'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
  </body>
</html>
