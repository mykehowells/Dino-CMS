<?php echo $header; ?>

	<div class="logo"><img src="../../../dino/views/assets/pages/img/logo-big.png" alt="" style="height: 70px;"/></div>

	<div class="content text-center" style="padding-bottom: 45px; width: 660px; position: relative;">
		
		<span class="progress" style="display: block;">
			<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%"></div>
		</span>
					    
	    <h1 style="color: #fff; margin-bottom: 40px;">Woops!</h1>
	
			<?php if(count($errors) > 1): ?>
				
					<?php foreach($errors as $error): ?>
                        <div class="note note-danger text-left" style='color:#333;'>
                            <h4 class="block" style='color:#333;margin: 0;'>We need to have a look at this before continuing...</h4>
                            <p style='color:#333;'> <?php echo $error; ?>  </p>
                        </div>
					<?php endforeach; ?>
				
			<?php else: ?>
			
				<p><?php echo current($errors); ?></p>
			
			<?php endif; ?>
	
			<p class="options">
				<a class="btn default btn-outline" href="<?php echo uri_to('start'); ?>">Let&apos;s try that again.</a>
			</p>
	    
	</div>

<?php echo $footer; ?>