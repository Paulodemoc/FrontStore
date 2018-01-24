<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php if($product):?>
<section class="jumbotron text-center">
<div class="container">
	<h1 class="jumbotron-heading"><?php echo $product->name ?></h1>
</div>
</section>
<div class="album py-5 bg-light">
<div class="row">
	<div class="col-md-4">
		<div class="card mb-4 box-shadow">
			<img class="card-img-top" data-src="<?php echo $product->img ?>" alt="<?php echo $product->name; ?>" style="height: 225px; width: 80%; margin-left:10%; display: block;" src="<?php echo $product->img ?>" data-holder-rendered="true">
			<div class="card-body">
				<p class="card-text"><?php echo $product->name ?></p>
				<div class="d-flex justify-content-between align-items-center">
					<div class="btn-group">
					<div class="fb-share-button" data-href="<?php echo current_url(); ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<?php echo $product->info; ?>
	</div>
</div>
<div class="row">
	<div class="col-md-8">
		<div class="fb-comments" data-href="<?php echo current_url(); ?>" data-numposts="5"></div>
	</div>
</div>
</div>
<?php endif; ?>
