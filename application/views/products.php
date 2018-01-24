<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="album py-5 bg-light">
<?php $index = 0; foreach($products as $product) : ?>
<?php $product = (object)$product; ?>
<?php if($index % 3 == 0) : ?>
<div class="row">
<?php endif; ?>
	<div class="col-md-4">
		<div class="card mb-4 box-shadow">
			<img class="card-img-top" data-src="<?php echo $product->img ?>" alt="<?php echo $product->name; ?>" style="height: 225px; width: 80%; margin-left:10%; display: block;" src="<?php echo $product->img ?>" data-holder-rendered="true">
			<div class="card-body">
				<p class="card-text"><?php echo $product->name ?></p>
				<div class="d-flex justify-content-between align-items-center">
					<div class="btn-group">
					<?php echo anchor('products/view/'.$product->id, 
						'<button type="button" class="btn btn-sm btn-outline-secondary">View</button>'
					); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $index++; if($index % 3 == 0) : ?>
</div>
<?php endif; ?>
<?php endforeach; ?>
</div>
