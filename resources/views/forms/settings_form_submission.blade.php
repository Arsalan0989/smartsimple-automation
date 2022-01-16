<div class="rockfm-alert rockfm-alert-success" role="alert"><?php echo __( 'Success! Form was sent successfully.' ); ?></div>
<?php
$default_template = ob_get_clean();
?>
<div class="uiform-set-field-wrap" id="uiform-set-form-submission">
   <div class="sfdc-row">
			<div class="sfdc-col-sm-12">
				<div class="sfdc-form-group">
					<label class="sfdc-control-label" for="">
						<?php echo __( 'Success Message' ); ?>
					</label>
					<div class="sfdc-controls sfdc-form-group">
						<?php
						/*pending add this tinymce*/
						$settings = array(
							'media_buttons' => true,
							'textarea_rows' => 5,
						);
						   // wp_editor($default_template, 'uifm_frm_subm_msg',$settings );

						?>
						 <textarea 
							class="uifm_tinymce_obj"
							name="uifm_frm_subm_msg"
							id="uifm_frm_subm_msg"><?php echo $default_template; ?></textarea>
					</div>               
				</div>
			</div>
	</div>
	<div class="sfdc-row">
		<div class="sfdc-col-md-12">
			<div class="divider2">
			<div class="mask"></div>
			<span><i><?php echo __( 'Background' ); ?></i></span>
			</div>
		</div>
	</div>
	<div class="sfdc-row">
		<div class="sfdc-col-md-12">
			<div class="sfdc-form-group">
					<label ><?php echo __( 'Background color' ); ?></label>
					<div class="">
						<div class="sfdc-col-md-2">
							<input class="switch-field"
								   id="uifm_frm_subm_bgst"
								   name="uifm_frm_subm_bgst"
								   type="checkbox"/>
						</div>
						<div class="sfdc-col-md-7">
							 <div class="sfdc-row">
								<div class="sfdc-col-md-2">
								   <label ><?php echo __( 'Type' ); ?></label>
								</div>
								<div class="sfdc-col-sm-9">
										<div class="sfdc-controls sfdc-form-group">
											<div class="sfdc-btn-group sfdc-btn-group-justified"
												 id="uifm_frm_subm_bgst_handle"
												 data-toggle="buttons">
												<label 
													data-toggle-enable="sfdc-btn-warning"
													data-toggle-disable="sfdc-btn-warning"
													data-settings-option="group-radiobutton"
													onclick="javascript:rocketform.loadForm_tab_subm_msgbg1();"
													id="uifm_frm_subm_bgst_typ1"
													class="sfdc-btn sfdc-btn-warning active" >
												<input type="radio"  value="1" checked>  <?php echo __( 'Solid' ); ?>
												</label>
												<label 
													onclick="javascript:rocketform.loadForm_tab_subm_msgbg2();"
													data-toggle-enable="sfdc-btn-warning"
													data-toggle-disable="sfdc-btn-warning"
													data-settings-option="group-radiobutton"
													id="uifm_frm_subm_bgst_typ2"
													class="sfdc-btn sfdc-btn-warning" >
												<input type="radio"  value="2" > <?php echo __( 'Gradient' ); ?>
												</label>
											</div>
										</div>
									</div>
							</div>
							<div id="uifm_frm_subm_bgst_typ1_handle" class="sfdc-row">
								<div class="sfdc-col-md-2">
								   <label ><?php echo __( 'Color' ); ?></label>
								</div>
								<div class="sfdc-col-sm-9">
										<div class="sfdc-form-group">
											<div class="sfdc-input-group uifm-custom-color">
												<span class="sfdc-input-group-addon"><i></i></span>
												<input  placeholder="<?php echo __( 'Pick the color' ); ?>"
														id="uifm_frm_subm_bgst_typ1_col"
														type="text" 
														value="" 
														name="uifm_frm_subm_bgst_typ1_col"
														class="sfdc-form-control" />
											</div>
										</div>
									</div>
							</div>
							<div id="uifm_frm_subm_bgst_typ2_handle">
								<div class="sfdc-row">
									<div class="sfdc-col-md-2">
									<label ><?php echo __( 'Start color' ); ?></label>
									</div>
									<div class="sfdc-col-sm-9">
											<div class="sfdc-form-group">
												<div class="sfdc-input-group uifm-custom-color">
													<span class="sfdc-input-group-addon"><i></i></span>
													<input  placeholder="<?php echo __( 'Pick the color' ); ?>"
															type="text" value=""
															id="uifm_frm_subm_bgst_typ2_col1"
															name="uifm_frm_subm_bgst_typ2_col1"
															class="sfdc-form-control" />
												</div>
											</div>
										</div>
								</div>
								<div class="sfdc-row">
									<div class="sfdc-col-md-2">
									<label ><?php echo __( 'End color' ); ?></label>
									</div>
									<div class="sfdc-col-sm-9">
											<div class="sfdc-form-group">
												<div 
													class="sfdc-input-group uifm-custom-color">
													<span class="sfdc-input-group-addon"><i></i></span>
													<input  placeholder="<?php echo __( 'Pick the color' ); ?>" 
															id="uifm_frm_subm_bgst_typ2_col2"
															name="uifm_frm_subm_bgst_typ2_col2"
															type="text" value="" class="sfdc-form-control" />
												</div>
											</div>
										</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			
		</div>
	</div>
	<div class="sfdc-row">
		<div class="sfdc-col-md-12">
			<div class="divider2">
			<div class="mask"></div>
			<span><i><?php echo __( 'Url Redirection' ); ?></i></span>
			</div>
		</div>
	</div>
	<div class="space10"></div>
	<div class="sfdc-row">
		<div class="sfdc-col-md-6">
			<label ><?php echo __( 'Enable Page redirection' ); ?></label>
			 <input class="switch-field"
								   id="uifm_frm_subm_redirect_st"
								   name="uifm_frm_subm_redirect_st"
								   type="checkbox"/>
		</div>
		<div class="sfdc-col-md-6">
			
					<label for=""><?php echo __( 'Url after submitting form ' ); ?>   
					</label>
					 <input id="uifm_frm_subm_redirect_url" 
							value="" 
							name="uifm_frm_subm_redirect_url" 
							class="sfdc-form-control" type="text">  
					  <div class="space20"></div>
					 <span class="sfdc-alert sfdc-alert-warning"><?php echo __( 'you need to enable page redirection first and add http or https at the beginning of the url' ); ?></span>
			
		</div>
	</div>
</div>
<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function () {
	
	rocketform.loadForm_tab_subm();
});
//]]>
</script>
