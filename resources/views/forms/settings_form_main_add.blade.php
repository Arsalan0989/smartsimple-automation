<div class="uiform-set-field-wrap" >	
	<div class="space10"></div>
	<div class="sfdc-row">
			<div class="sfdc-col-sm-12">
				<div class="sfdc-form-group">
					<div class="sfdc-col-sm-4">
						<label for=""><?php echo __( 'ADDITIONAL CSS' ); ?> <a href="javascript:void(0);"
					   data-toggle="tooltip" data-placement="right" 
					   data-original-title="<?php echo __( 'This is not required. You can add extra css to your form. this will be added to css file ' ); ?>"
					   ><span class="fa fa-question-circle"></span></a></label>
					</div>
					<div class="sfdc-col-sm-8">
						 <textarea 
							   id="uifm_frm_main_addcss"
							   name="uifm_frm_main_addcss"
							   
							   style="width:100%;"
							   class="sfdc-form-control autogrow"></textarea> 
							   <p class="help-block"><?php echo __( 'Just put the selectors. e.g. #id_form .control-label {color:red} ' ); ?></p> 
					</div>
					
					
							
					
				</div>
			</div>
	</div>
	<div class="space10 zgfm-opt-divider-stl1"></div>
	 <div class="sfdc-row">
			<div class="sfdc-col-sm-12">
				<div class="sfdc-form-group">
					<div class="sfdc-col-sm-4">
					   <label for=""><?php echo __( 'ADDITIONAL JAVASCRIPT' ); ?></label>
					<a href="javascript:void(0);"
					   data-toggle="tooltip" data-placement="right" 
					   data-original-title="<?php echo __( 'This is not required. You can add extra javascript code or some script to your form.' ); ?>"
					   ><span class="fa fa-question-circle"></span></a> 
					</div>
					<div class="sfdc-col-sm-8">
						   <textarea 
							   id="uifm_frm_main_addjs"
							   name="uifm_frm_main_addjs"
							  rows="6"
							   style="width:100%;"
							   class="sfdc-form-control autogrow"></textarea>
						 <p class="help-block"><?php echo __( 'proceed with caution. if you put a wrong javascript code, the form will not work properly e.g. ' ); ?>
							 <br>
						 <code>
							 <?php ob_start(); ?>
						
							 (function ($) {
								document.body.style.backgroundColor = "red";
								alert("Added red to background");
							})($uifm);
						
							<?php
							$cntACmp = ob_get_contents();
							ob_end_clean();
							echo htmlentities( $cntACmp );
							?>
						 </code>
							  
							 or 
							 <br>
							<code>
							 <?php ob_start(); ?>
						
					   $uifm( document ).ready(function($) {
						  $('body').css('background','red');
						  alert('Added red to background');
					   });
							<?php
							$cntACmp = ob_get_contents();
							ob_end_clean();
							echo htmlentities( $cntACmp );
							?>
						 </code>   
						 </p> 
					</div>
				</div>
			</div>
	</div>
	  
</div>
