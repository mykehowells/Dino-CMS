<?php echo $header; ?>
        
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>Dino CMS Login</h1>
                </div>
            </div>
        </div>
        <div class="page-content" style="min-height: 525px;">
            <div class="container">
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Login</span>
                    </li>
                </ul>
                <div class="page-content-inner">
                    
                    <div class="portlet-body form">
		
						<form method="post" action="<?php echo Uri::to('admin/login'); ?>" role="form">
				
							<input name="token" type="hidden" value="<?php echo $token; ?>">
							
							<?php echo $messages; ?>
							<?php $user = filter_var(Input::previous('user'), FILTER_SANITIZE_STRING); ?>
							
							<div class="form-body">
							
								<div class="form-group">
									<div class="row">
						                <label class="col-xs-4 control-label" style="padding-top:4px"><?php echo __('users.username'); ?></label>
						                <div class="col-xs-8">
											<div class="input-icon">
					                        	<i class="fa fa-user font-blue"></i>
					                        	<?php echo Form::text('user', $user, array(
													'id' => 'label-user',
													'autocapitalize' => 'off',
													'autofocus' => 'true',
													'placeholder' => __('users.username')
												)); ?>
					                        </div>
						                </div>
									</div>
					            </div>
					            
								<div class="form-group">
									<div class="row">
						                <label class="col-xs-4 control-label" style="padding-top:4px"><?php echo __('users.password'); ?></label>
						                <div class="col-xs-8">
											<div class="input-icon">
					                        	<i class="fa fa-lock font-blue"></i>
					                        	<?php echo Form::password('pass', array(
													'id' => 'pass',
													'placeholder' => __('users.password'),
													'autocomplete' => 'off'
												)); ?>
					                        </div>
						                </div>
									</div>
					            </div>
								
								<div class="form-actions">
									
									<a href="<?php echo Uri::to('admin/amnesia'); ?>" class="btn blue btn-outline"><?php echo __('users.forgotten_password'); ?></a>
									<button type="submit" class="btn dark btn-outline"><?php echo __('global.login'); ?></button>
						
								</div>
								
							</div>
						
						</form>
						
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $footer; ?>
