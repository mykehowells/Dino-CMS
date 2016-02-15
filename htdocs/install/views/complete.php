<?php echo $header; ?>

<div class="logo"><img src="../../../dino/views/assets/pages/img/logo-big.png" alt="" style="height: 70px;"/></div>

<div class="content text-center" style="padding-bottom: 45px; width: 660px; position: relative;">
	
	<span class="progress" style="display: block;">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
	</span>
	
	<h1 style="color: #fff; margin-bottom: 40px;">Install Complete!</h1>
	
	<p>
		You're good to go!
	</p>
	
	<div class="portlet-body">

		<?php if($htaccess): ?>
			
			<p>We could not write the <code>htaccess</code> file for you, copy
			the contents below and create a .htaccess in your Dino root folder.</p>
			<p>
			<textarea id="htaccess" class="form-control" rows="8" disabled="disabled"><?php echo $htaccess; ?></textarea></p>
		
			<script>document.getElementById('htaccess').select();</script>
			
		<?php endif; ?>
		
		<a href="<?php echo $admin_uri; ?>" class="btn default btn-outline">Admin Panel</a>
		<a href="<?php echo $site_uri; ?>" class="btn default btn-outline">Your new website</a>
		
	</div>
	
</div>

<?php echo $footer; ?>