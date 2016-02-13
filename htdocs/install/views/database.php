<?php echo $header; ?>

<div class="logo"><img src="../../../anchor/views/assets/pages/img/logo-big.png" alt="" style="height: 70px;"/></div>

<div class="content text-center" style="padding-bottom: 45px; width: 660px; position: relative;">
	
	<span class="progress" style="display: block;">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
	</span>
	
	<h1 style="color: #fff; margin-bottom: 40px;">Your database details</h1>
	
	<p>
		Firstly, Dino will need a place to store all of it's information. Please ensure you have created a database first; then provide the software with your connection details and database name.
	</p>
	
	<div class="portlet-body form">
	
		<form method="post" action="<?php echo uri_to('database'); ?>" autocomplete="off" roll="form">

			<?php echo $messages; ?>
		
				<div class="form-body">
					<div class="form-group">
						<div class="row">
			                <label class="col-xs-4 control-label" style="padding-top:4px">Database Host</label>
			                <div class="col-xs-8">
								<div class="input-icon">
                                	<i class="fa fa-database font-blue"></i>
									<input type="text" class="form-control" id="host" name="host"
									value="<?php echo Input::previous('host', '127.0.0.1'); ?>">
                                </div>
			                </div>
						</div>
		            </div>
		            
					<div class="form-group">
						<div class="row">
			                <label class="col-xs-4 control-label" style="padding-top:4px">Database Port</label>
			                <div class="col-xs-8">
								<div class="input-icon">
                                	<i class="fa fa-plug font-blue"></i>
									<input type="text" class="form-control" id="port" name="port"
									value="<?php echo Input::previous('port', '3306'); ?>">
                                </div>
			                </div>
						</div>
		            </div>
		            
					<div class="form-group">
						<div class="row">
			                <label class="col-xs-4 control-label" style="padding-top:4px">Database User</label>
			                <div class="col-xs-8">
								<div class="input-icon">
                                	<i class="fa fa-user font-blue"></i>
									<input type="text" class="form-control" id="user" name="user"
									value="<?php echo Input::previous('user', 'Database User'); ?>">
                                </div>
			                </div>
						</div>
		            </div>
		            
					<div class="form-group">
						<div class="row">
			                <label class="col-xs-4 control-label" style="padding-top:4px">Database Password</label>
			                <div class="col-xs-8">
								<div class="input-icon">
                                	<i class="fa fa-lock font-blue"></i>
									<input type="password" class="form-control" id="pass" name="pass"
									value="<?php echo Input::previous('pass'); ?>">
                                </div>
			                </div>
						</div>
		            </div>
		            
					<div class="form-group">
						<div class="row">
			                <label class="col-xs-4 control-label" style="padding-top:4px">Database Name</label>
			                <div class="col-xs-8">
								<div class="input-icon">
                                	<i class="fa fa-database font-blue"></i>
									<input type="text" class="form-control" id="name" name="name"
									value="<?php echo Input::previous('name', 'dino_cms'); ?>">
                                </div>
			                </div>
						</div>
		            </div>
		            
					<div class="form-group">
						<div class="row">
			                <label class="col-xs-4 control-label" style="padding-top:4px">Database Prefix</label>
			                <div class="col-xs-8">
								<div class="input-icon">
                                	<i class="fa fa-terminal font-blue"></i>
									<input type="text" class="form-control" id="prefix" name="prefix"
									value="<?php echo Input::previous('prefix', 'dino_'); ?>">
                                </div>
			                </div>
						</div>
		            </div>
		            
					<div class="form-group">
						<div class="row">
			                <label class="col-xs-4 control-label" style="padding-top:4px">Database Collation</label>
			                <div class="col-xs-8">
								<select id="collation" class="form-control input-medium" name="collation">
									<?php foreach($collations as $code => $collation): ?>
									<?php $selected = ($code == Input::previous('collation', 'utf8_bin')) ? ' selected' : ''; ?>
										<option value="<?php echo $code; ?>" <?php echo $selected; ?>>
											<?php echo $code; ?>
										</option>
									<?php endforeach; ?>
								</select>
			                </div>
						</div>
		            </div>
				
					<div class="form-actions">
						<div class="row">
							<a href="<?php echo uri_to('start'); ?>" class="btn dark btn-outline">&laquo; Back</a>
							<button type="submit" class="btn default btn-outline">Next Step &raquo;</button>
						</div>
					</div>
		            
				</div>
				
		</form>
		
	</div>
	
</div>



<!--
<section class="content">
	<article>
		<h1>Your database details</h1>

		<p>Firstly, we’ll need a database. Anchor needs them to store all of your blog’s information, so it’s vital you fill these in correctly. If you don’t know what these are, you’ll need to contact your webhost.</p>
	</article>

	<form method="post" action="<?php echo uri_to('database'); ?>" autocomplete="off">
		<?php echo $messages; ?>

		<fieldset>
			<p>
				<label for="host">Database Host</label>
				<input id="host" name="host" value="<?php echo Input::previous('host', '127.0.0.1'); ?>">

				<i>Most likely <b>localhost</b> or <b>127.0.0.1</b>.</i>
			</p>

			<p>
				<label for="port">Port</label>
				<input id="port" name="port" value="<?php echo Input::previous('port', '3306'); ?>">

				<i>Usually <b>3306</b>.</i>
			</p>

			<p>
				<label for="user">Username</label>
				<input id="user" name="user" value="<?php echo Input::previous('user', 'root'); ?>">

				<i>The database user, usually <b>root</b>.</i>
			</p>

			<p>
				<label for="pass">Password</label>
				<input id="pass" name="pass" type="password" value="<?php echo Input::previous('pass'); ?>" class="db-password-field">
				<i>Leave blank for empty password.</i>
			</p>

			<p>
				<label for="show-hide">Show or hide password</label>
				<input name="show-hide" type="checkbox" value="Show/Hide password" class="show-hide-password">
				<i>Check the box to show the password.</i>
			</p>
			<br>

			<p>
				<label for="name">Database Name</label>
				<input id="name" name="name" value="<?php echo Input::previous('name', 'anchor'); ?>">
				<i>Your database’s name.</i>
			</p>

			<p>
				<label for="prefix">Table Prefix</label>
				<input id="prefix" name="prefix" value="<?php echo Input::previous('prefix', 'anchor_'); ?>">

				<i>Database table name prefix.</i>
			</p>

			<p>
				<label for="collation">Collation</label>
				<select id="collation" class="chosen-select" name="collation">
					<?php foreach($collations as $code => $collation): ?>
					<?php $selected = ($code == Input::previous('collation', 'utf8_unicode_ci')) ? ' selected' : ''; ?>
					<option value="<?php echo $code; ?>" <?php echo $selected; ?>>
						<?php echo $code; ?>
					</option>
					<?php endforeach; ?>
				</select>

				<i>Change if <b>utf8_general_ci</b> doesn’t work.</i>
			</p>
		</fieldset>

		<section class="options">
			<a href="<?php echo uri_to('start'); ?>" class="btn quiet">&laquo; Back</a>
			<button type="submit" class="btn">Next Step &raquo;</button>
		</section>
	</form>
</section>
-->

<?php echo $footer; ?>
