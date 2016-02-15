<?php echo $header; ?>

<div class="logo"><img src="../../../dino/views/assets/pages/img/logo-big.png" alt="" style="height: 70px;"/></div>

<div class="content text-center" style="padding-bottom: 45px; width: 660px; position: relative;">
	
	<span class="progress" style="display: block;">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
	</span>
	
	<h1 style="color: #fff; margin-bottom: 40px;">Hello, Willkommen, 您好, Bonjour</h1>
	
	<p>If you were looking for a lightweight, easily manageable and infinitely extendable CMS... you&rsquo;ve come to the right place.</p>
	
	<p>Welcome to Dino.</p>
	
	<div class="portlet-body form">
	
		<form method="post" action="<?php echo uri_to('start'); ?>" autocomplete="off" roll="form">
			
			<?php if( $messages != "" ): ?>
				<div class="note note-info dark">
	                <h4 class="block">Information</h4>
	                <p> <?php echo $messages; ?> </p>
	            </div>
	        <?php endif; ?>
	
			<div class="form-body">
				<div class="form-group">
					<div class="row">
		                <label class="col-xs-6 control-label">Dino&rsquo;s Language</label>
		                <div class="col-xs-6">
							<select id="lang" class="form-control input-medium" name="language">
								<?php foreach($languages as $lang): ?>
									<?php $selected = in_array($lang, $prefered_languages) ? ' selected' : ''; ?>
									<option<?php echo $selected; ?>><?php echo $lang; ?></option>
								<?php endforeach; ?>
							</select>
		                </div>
					</div>
	            </div>
	                
				<div class="form-group">
					<div class="row">
		                <label class="col-xs-6 control-label">Dino&rsquo;s Timezone</label>
		                <div class="col-xs-6">
							<select id="timezone" class="form-control input-medium" name="timezone">
								<?php $set = false; ?>
								<?php foreach($timezones as $zone): ?>
									<?php $selected = ($set === false and $current_timezone == $zone['offset']) ? ' selected' : ''; ?>
										<option value="<?php echo $zone['timezone_id']; ?>"<?php echo $selected; ?>>
											<?php echo $zone['label']; ?>
										</option>
									<?php if($selected) $set = true; ?>
								<?php endforeach; ?>
							</select>
		                </div>
					</div>
	            </div>
				
				<div class="form-actions">
					<div class="row">
						<button type="submit" class="btn default btn-outline">Next Step &raquo;</button>
					</div>
				</div>
				
			</div>
			
		</form>	
	
	</div>
	
</div>

<?php echo $footer; ?>