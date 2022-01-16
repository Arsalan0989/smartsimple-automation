<div class="uiform-set-field-wrap"  >
  <div class="space20"></div>
	
	   <div class="sfdc-row ">
		
			<div class="sfdc-form-group">
				<div class="sfdc-col-md-4">
					<label for=""><?php echo __( 'CONTROL WHOLE HTML CONTENT OF MAIL NOTIFICATION' ); ?></label>
				</div>
				<div class="sfdc-col-md-8">
					
					<input class="switch-field"
						   id="uifm_frm_main_email_htmlfullpage"
						   name="uifm_frm_main_email_htmlfullpage"
						   type="checkbox"/>
					 <a href="javascript:void(0);"
					   data-toggle="tooltip" data-placement="right" 
					   data-original-title="<?php echo __( 'Enable control whole html content' ); ?>"
					   ><span class="fa fa-question-circle"></span></a>
					   <p class="sfdc-help-block">
						   <div class="sfdc-alert sfdc-alert-info">
							   <?php echo __( 'When you active this option, you have to add html, head, and body tag in the message because it allows you to have whole control of html content in the mail notifications. remember this is only for all mail notification of zigaform' ); ?>
					</div>
							
							
						 </p>
				</div>    
					  
			</div>
		
	</div>
	<div class="space10 zgfm-opt-divider-stl1"></div>
  <div class="sfdc-row">
		<div class="sfdc-col-md-12">
			<div class="sfdc-form-group">
				 <div class="sfdc-col-sm-4">
					 <label for=""><?php echo __( 'Disable email submission' ); ?></label>
				 </div>
				<div class="sfdc-col-sm-8">
					<input class="switch-field"
								   id="uifm_frm_main_email_dissubm"
								   name="uifm_frm_main_email_dissubm"
								   type="checkbox"/>
					 <a href="javascript:void(0);"
					   data-toggle="tooltip" data-placement="right" 
					   data-original-title="<?php echo __( 'Disable email submission for this form' ); ?>"
					   ><span class="fa fa-question-circle"></span></a>
				</div>
			</div>
		</div>
   </div>   
</div>
