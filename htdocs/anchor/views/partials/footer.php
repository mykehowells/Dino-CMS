		<div class="page-prefooter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 text-left footer-block">
                        <p><?php echo __('global.powered_by_dino', VERSION); ?></p>
                    </div>
                    <div class="col-xs-6 text-right footer-block">
                        <p><?php echo __('global.powering_websites'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        
		<?php if(Auth::user()): ?>
			<script>
				// Confirm any deletions
				$('.delete').on('click', function() {return confirm('<?php echo __('global.confirm_delete'); ?>');});
			</script>
		<?php endif; ?>
		
		<!--[if lt IE 9]>
		<script src="<?php echo asset('anchor/views/assets/global/plugins/respond.min.js');?>"></script>
		<script src="<?php echo asset('anchor/views/assets/global/plugins/excanvas.min.js');?>"></script> 
		<![endif]-->
		
		<script src="<?php echo asset('anchor/views/assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('anchor/views/assets/global/plugins/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('anchor/views/assets/global/plugins/js.cookie.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('anchor/views/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('anchor/views/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('anchor/views/assets/global/plugins/jquery.blockui.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('anchor/views/assets/global/plugins/uniform/jquery.uniform.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('anchor/views/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js');?>" type="text/javascript"></script>
        
        <script src="<?php echo asset('anchor/views/assets/global/scripts/app.min.js');?>" type="text/javascript"></script>
        
        <script src="<?php echo asset('anchor/views/assets/global/plugins/jquery-validation/js/jquery.validate.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('anchor/views/assets/global/plugins/jquery-validation/js/additional-methods.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('anchor/views/assets/global/plugins/select2/js/select2.full.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('anchor/views/assets/global/plugins/backstretch/jquery.backstretch.min.js');?>" type="text/javascript"></script>
        
        <script src="<?php echo asset('anchor/views/assets/layouts/layout3/scripts/layout.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('anchor/views/assets/layouts/layout3/scripts/demo.min.js');?>" type="text/javascript"></script>
	</body>
</html>