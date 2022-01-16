<div class="uiform-set-field-wrap"  >
	<div class="space20"></div>
	<div class="sfdc-row">
		<div class="sfdc-col-sm-4">
			<label for=""><?php echo __( 'IMPORT FORM'); ?></label>
		</div>
		<div class="sfdc-col-sm-8">
			
			
	
		   <a href="javascript:void(0);"
			   onclick="javascript:rocketform.importForm_openModal();"
			   class="sfdc-btn sfdc-btn-warning"
			   ><?php echo __( 'Import form'); ?></a>
				
			<a href="javascript:void(0);"
					   data-toggle="tooltip" data-placement="right" 
					   data-original-title="<?php echo __( 'Import the backuped form'); ?>"
					   ><span class="fa fa-question-circle"></span></a>
		
			
		  
		</div>
	</div>
		<div id="zgfm-blocked-feature-pdf-box">
			<?php $message = __( 'IMPORT FORM'); ?>
				@include('settings/blocked_getmessage')
			</div>		
	<div class="space10"></div>
</div>  