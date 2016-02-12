<?php echo $header; ?>


	<div class="logo">
	    <a href="index.html"> <img src="<?php echo asset('anchor/views/assets/pages/img/logo-big.png'); ?>" alt="" style="height: 160px;"/> </a>
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content text-center" style="padding-bottom: 45px;">
	    
	    <h1>Woops!</h1>
	
			<?php if(count($errors) > 1): ?>
			<ul>
				<?php foreach($errors as $error): ?>
				<li><?php echo $error; ?></li>
				<?php endforeach; ?>
			</ul>
			<?php else: ?>
			<p><?php echo current($errors); ?></p>
			<?php endif; ?>
	
			<p class="options">
				<a class="btn" href="<?php echo uri_to('start'); ?>">Let&apos;s try that again.</a>
			</p>
	    
	</div>

<!--








<section class="content">
	<article>
		<h1>Woops!</h1>

		<?php if(count($errors) > 1): ?>
		<ul>
			<?php foreach($errors as $error): ?>
			<li><?php echo $error; ?></li>
			<?php endforeach; ?>
		</ul>
		<?php else: ?>
		<p><?php echo current($errors); ?></p>
		<?php endif; ?>

		<p class="options">
			<a class="btn" href="<?php echo uri_to('start'); ?>">Let&apos;s try that again.</a>
		</p>
	</article>
</section>
-->

<?php echo $footer; ?>