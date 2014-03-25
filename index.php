<?php include('config/setup.php'); ?>
<?php include('includes/layout/header.php'); ?>
			<h1><?php echo $page['page_header']; ?></h1>
			<div class="jumbotron">
				<h1>Jumbotron heading</h1>
					<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
					<p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
			</div>
			<div class="row marketing">
				<div class="col-lg-6">
					<h4>Subheading</h4>
						<p><?php echo $page['page_body']; ?></p>	
				</div>
				<div class="col-lg-6">
					<h4>Subheading</h4>
						<p><?php echo $page['page_body']; ?></p>
				</div>
			</div>
<?php include('includes/layout/footer.php'); ?>
		