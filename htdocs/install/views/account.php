<?php echo $header; ?>

<div class="logo"><img src="../../../dino/views/assets/pages/img/logo-big.png" alt="" style="height: 70px;"/></div>

<div class="content text-center" style="padding-bottom: 45px; width: 660px; position: relative;">
	
	<span class="progress" style="display: block;">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
	</span>
	
	<h1 style="color: #fff; margin-bottom: 40px;">Your Dinoccount</h1>
	
	<p>
		Last step; let's create a Dinoccount for your new Dino CMS installation.
	</p>
	
	<div class="portlet-body form">
	
		<form method="post" action="<?php echo uri_to('account'); ?>" autocomplete="off" roll="form">

			<?php if( $messages != "" ): ?>
				<div class="note note-info dark">
	                <h4 class="block">Information</h4>
	                <p> <?php echo $messages; ?> </p>
	            </div>
	        <?php endif; ?>

			<div class="form-body">
			
				<div class="form-group">
					<div class="row">
		                <label class="col-xs-4 control-label" style="padding-top:4px">Username</label>
		                <div class="col-xs-8">
							<div class="input-icon">
                            	<i class="fa fa-user font-blue"></i>
								<input type="text" class="form-control" id="username" name="username"
								value="<?php echo Input::previous('username', 'admin'); ?>">
                            </div>
		                </div>
					</div>
	            </div>
			
				<div class="form-group">
					<div class="row">
		                <label class="col-xs-4 control-label" style="padding-top:4px">Password</label>
		                <div class="col-xs-8">
							<div class="input-icon">
                            	<i class="fa fa-lock font-blue"></i>
								<input type="password" class="form-control" id="password" name="password"
								value="<?php echo Input::previous('password'); ?>">
                            </div>
		                </div>
					</div>
	            </div>
			
				<div class="form-group">
					<div class="row">
		                <label class="col-xs-4 control-label" style="padding-top:4px">Email</label>
		                <div class="col-xs-8">
							<div class="input-icon">
                            	<i class="fa fa-envelope font-blue"></i>
								<input type="text" class="form-control" id="email" name="email"
								value="<?php echo Input::previous('email', 'you@domain.com'); ?>">
                            </div>
		                </div>
					</div>
	            </div>
			
				<div class="form-actions">
					<div class="row">
						<a href="<?php echo uri_to('metadata'); ?>" class="btn default btn-outline">&laquo; Back</a>
						<button type="submit" class="btn default btn-outline">Finish!</button>
					</div>
				</div>
	            
			</div>
				
		</form>
		
	</div>
	
</div>

<?php echo $footer; ?>