<?php echo $header; ?>


<div class="logo"><img src="../../../dino/views/assets/pages/img/logo-big.png" alt="" style="height: 70px;"/></div>

<div class="content text-center" style="padding-bottom: 45px; width: 660px; position: relative;">
	
	<span class="progress" style="display: block;">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
	</span>
	
	<h1 style="color: #fff; margin-bottom: 40px;">Site Meta Data</h1>
	
	<p>
		Almost there... let's personalise your Dino CMS.
	</p>
	
	<div class="portlet-body form">
	
		<form method="post" action="<?php echo uri_to('metadata'); ?>" autocomplete="off" roll="form">

			<?php if( $messages != "" ): ?>
				<div class="note note-info dark">
	                <h4 class="block">Information</h4>
	                <p> <?php echo $messages; ?> </p>
	            </div>
	        <?php endif; ?>

			<div class="form-body">
				
				<div class="form-group">
					<div class="row">
		                <label class="col-xs-4 control-label" style="padding-top:4px">Site Name</label>
		                <div class="col-xs-8">
							<div class="input-icon">
                            	<i class="fa fa-rocket font-blue"></i>
								<input type="text" class="form-control" id="site_name" name="site_name"
								value="<?php echo Input::previous('site_name', 'My Dino CMS'); ?>">
                            </div>
		                </div>
					</div>
	            </div>
				
				<div class="form-group">
					<div class="row">
		                <label class="col-xs-4 control-label" style="padding-top:4px">Site Description</label>
		                <div class="col-xs-8">
							<textarea type="text" class="form-control" id="site_description" name="site_description"><?php echo Input::previous('site_description', 'A description of the site your new Dino CMS will power.'); ?></textarea>
		                </div>
					</div>
	            </div>
	            
				<div class="form-group">
					<div class="row">
		                <label class="col-xs-4 control-label" style="padding-top:4px">Site Path</label>
		                <div class="col-xs-8">
							<div class="input-icon">
                            	<i class="fa fa-folder-open font-blue"></i>
								<input type="text" class="form-control" id="site_path" name="site_path"
								value="<?php echo Input::previous('site_path', $site_path); ?>">
                            </div>
		                </div>
					</div>
	            </div>
	            
	            <?php if(count($themes) > 1): ?>
	            
	            	<div class="form-group">
						<div class="row">
			                <label class="col-xs-4 control-label" style="padding-top:4px">Theme</label>
			                <div class="col-xs-8">
								<select id="theme" class="form-control input-medium" name="theme">
									<?php foreach($themes as $dir => $theme): ?>
										<option value="<?php echo $dir; ?>"><?php echo $theme['name']; ?> by <?php echo $theme['author']; ?></option>
									<?php endforeach; ?>
								</select>
			                </div>
						</div>
		            </div>
		            
				<?php else: $theme = key($themes); ?>
				
					<input name="theme" type="hidden" value="<?php echo $theme; ?>">
	            
	            <?php endif; ?>
	            
	            <div class="form-group">
					<div class="row">
		                <label class="col-xs-4 control-label" style="padding-top:4px">Clean URL's</label>
		                <div class="col-xs-8">
                            <?php if(mod_rewrite()): ?>

								<p>Looks like you are running apache with <code>mod_rewrite</code> enabled.<br>
								The installer will create the .htaccess for you.</p>
				
							<?php elseif(is_apache()): ?>
				
								<p>Looks like you are running apache, but <code>mod_rewrite</code> is not enabled.</p>
				
								<p><input id="rewrite" name="rewrite" type="checkbox" value="1">
								Create the .htaccess file for me anyway.</p>
				
							<?php elseif(is_cgi()): ?>
				
								<p>Looks like you are running <code>PHP</code> as a fastcgi process.<br>
								You will have to setup your own url rewriting.</p>
				
							<?php endif; ?>
		                </div>
					</div>
	            </div>
				
				<div class="form-actions">
					<div class="row">
						<a href="<?php echo uri_to('database'); ?>" class="btn default btn-outline">&laquo; Back</a>
						<button type="submit" class="btn default btn-outline">Next Step &raquo;</button>
					</div>
				</div>
	            
			</div>
				
		</form>

	</div>
	
</div>
<?php echo $footer; ?>