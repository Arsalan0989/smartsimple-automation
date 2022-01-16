<div class="uiform-set-field-wrap" id="uiform-set-form-wizard">
	<div class="sfdc-row">
		<div class="sfdc-col-sm-12">
			<div class="sfdc-form-group">
				<div style="cursor: pointer;" onclick="javascript:rocketform.showFeatureLocked(this);" data-blocked-feature="Wizard form">
		            <label for="uifm_frm_wiz_st">Enable wizard forms <span class="rkfm-express-lock-wrap"
					   data-toggle="tooltip" data-placement="right" 
					   data-original-title="feature locked"
					   ><i class="fa fa-lock"></i></span></label>
					 <input class="uifm_frm_wiz_st_event switch-field"
								   id="uifm_frm_wiz_st"
								   disabled="disabled"
								   name="uifm_frm_wiz_st"
								   type="checkbox"/>
				</div>
						<?php $message = 'Wizard form' ?>
						@include('settings/blocked_getmessage');
				
		
		   {{-- <label for="uifm_frm_wiz_st">Enable wizard forms</label>
					 <input class="uifm_frm_wiz_st_event switch-field"
								   id="uifm_frm_wiz_st"
								   name="uifm_frm_wiz_st"
								   type="checkbox"/> --}}
			
		
					
			</div>
		</div>
	</div>
	<div class="uiform_frm_wiz_main_content" style="display:none;">
	 <div class="sfdc-row">
			<div class="sfdc-col-sm-12">
				<div class="sfdc-form-group">
				<label class="sfdc-control-label col-sm-12" for="">
					<div class="uifm_frm_skin_tabs_options">
						<div class="sfdc-row">
							<div class="sfdc-col-sm-6 no-padding-left">
								Tabs management
							</div>
							<div class="sfdc-col-sm-6">
								<div class="sfdc-btn-group  ">
									<button href="#" 
													onclick="javascript:rocketform.wizardtab_cleanTabs();"
													class="sfdc-btn sfdc-btn-sm sfdc-btn-primary">
													Clean Tabs</button>
											<button href="#" 
													onclick="javascript:rocketform.wizardtab_addNewTab();"
													class="sfdc-btn sfdc-btn-sm sfdc-btn-success">
												<i class="fa fa-plus"></i> Add new</button>
										</div>
							</div>
						</div>
					</div>
				</label>
					<div class="clear"></div>
				<div class="controls">
				   <div id="uifm_frm_skin_tabs_box">
					   <div data-tab-nro="0" class="uifm_frm_skin_tab_content">
						   <div class="sfdc-row">
							   <div class="sfdc-col-sm-8">
								   <div class="sfdc-form-group">
											<label >Tab <span>1</span>: </label>
											<input type="text" 
													id="uifm_frm_skin_tab0_title"
													class="sfdc-form-control uifm_frm_skin_tab_title_evt"
													onfocus="rocketform.wizardtab_tabManualEvt(this,true);"
													placeholder="Type tab title"  class="sfdc-form-control">   
									</div>
							   </div>
							   <div class="sfdc-col-sm-4">
								   <div class="sfdc-btn-group  ">
										<button onclick="javascript:rocketform.wizardtab_deleteTab(this);"
												class="sfdc-btn sfdc-btn-sm sfdc-btn-danger"
												><i class="fa fa-trash-o"></i>Delete</button>
									</div>
							   </div>
						   </div>
					   </div>
				   </div>
				</div>
								   
				</div>
			</div>
	</div>
	<div class="space20"></div>
	<div class="sfdc-row">
		<div class="sfdc-col-md-12">
			<div class="divider2">
			<div class="mask"></div>
			<span><i>Skin tab</i></span>
			</div>
		</div>
	</div>
	<div class="sfdc-row">
		<div class="sfdc-col-md-12">
			<div class="sfdc-form-group">
				<select id="uifm_frm_wiz_theme_typ"
						class="sfdc-form-control">
					<option value="0">Theme 1</option>
					<option value="1">Theme 2</option>
				</select>
			</div>
		</div> 
	</div>
	<div class="sfdc-row" id="uifm_frm_wiz_tab_inactive_wrap">
		<div class="sfdc-col-md-12">
			<div class="sfdc-form-group">
					<label >Inactive mode</label>
					<div class="">
						<div class="sfdc-col-md-1">
							
						</div>
						<div class="sfdc-col-md-11">
							 <div class="sfdc-row" id="uifm_frm_wiz_tab_inactive_bgcolor_wrap">
								<div class="sfdc-col-md-5">
								   <label >Background color</label>
								</div>
								<div class="sfdc-col-sm-7">
									 <div class="sfdc-input-group uifm-custom-color">
									   <span class="sfdc-input-group-addon"><i></i></span>
										 <input 
											type="text" 
											value="" 
											id="uifm_frm_wiz_tab_inactive_bgcolor" 
											name="uifm_frm_wiz_tab_inactive_bgcolor"
											class="sfdc-form-control" />
									</div>
								</div>
							</div>
						   <div class="sfdc-row" id="uifm_frm_wiz_tab_inactive_txtcolor_wrap">
							   <div class="space10"></div>
								<div class="sfdc-col-md-5">
								   <label >Text color</label>
								</div>
								<div class="sfdc-col-sm-7">
									 <div class="sfdc-input-group uifm-custom-color">
										 <span class="sfdc-input-group-addon"><i></i></span>
										 <input 
											type="text" 
											value="" 
											id="uifm_frm_wiz_tab_inactive_txtcolor" 
											name="uifm_frm_wiz_tab_inactive_txtcolor"
											class="sfdc-form-control" />
										
									</div>
								</div>
							</div>
							
						   <div class="sfdc-row" id="uifm_frm_wiz_tab_inactive_numtxtcolor_wrap">
								<div class="space10"></div>
								<div class="sfdc-col-md-5">
								   <label >Number text color</label>
								</div>
								<div class="sfdc-col-sm-7">
									 <div class="sfdc-input-group uifm-custom-color">
										 <span class="sfdc-input-group-addon"><i></i></span>
										 <input 
											type="text" 
											value="" 
											id="uifm_frm_wiz_tab_inactive_numtxtcolor" 
											name="uifm_frm_wiz_tab_inactive_numtxtcolor"
											class="sfdc-form-control" />
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
		</div>
	</div>
	<div class="sfdc-row" id="uifm_frm_wiz_tab_active_wrap">
		<div class="sfdc-col-md-12">
			<div class="sfdc-form-group">
					<label >Active Mode</label>
					<div class="">
						<div class="sfdc-col-md-1">
							
						</div>
						<div class="sfdc-col-md-11">
							 <div class="sfdc-row" id="uifm_frm_wiz_tab_active_bgcolor_wrap">
								<div class="sfdc-col-md-5">
								   <label >Background color</label>
								</div>
								<div class="sfdc-col-sm-7">
									 <div class="sfdc-input-group uifm-custom-color">
									   <span class="sfdc-input-group-addon"><i></i></span>
										 <input 
											type="text" 
											value="" 
											id="uifm_frm_wiz_tab_active_bgcolor" 
											name="uifm_frm_wiz_tab_active_bgcolor"
											class="sfdc-form-control" />
									</div>
								</div>
							</div>
						   <div class="sfdc-row" id="uifm_frm_wiz_tab_active_txtcolor_wrap">
							   <div class="space10"></div>
								<div class="sfdc-col-md-5">
								   <label >Title color</label>
								</div>
								<div class="sfdc-col-sm-7">
									 <div class="sfdc-input-group uifm-custom-color">
										 <span class="sfdc-input-group-addon"><i></i></span>
										 <input 
											type="text" 
											
											id="uifm_frm_wiz_tab_active_txtcolor" 
											name="uifm_frm_wiz_tab_active_txtcolor"
											class="sfdc-form-control" />
										
									</div>
								</div>
							</div>
						   <div class="sfdc-row" id="uifm_frm_wiz_tab_active_numtxtcolor_wrap">
							   <div class="space10"></div>
								<div class="sfdc-col-md-5">
								   <label >Number text color</label>
								</div>
								<div class="sfdc-col-sm-7">
									 <div class="sfdc-input-group uifm-custom-color">
										 <span class="sfdc-input-group-addon"><i></i></span>
										 <input 
											type="text" 
											value="" 
											id="uifm_frm_wiz_tab_active_numtxtcolor" 
											name="uifm_frm_wiz_tab_active_numtxtcolor"
											class="sfdc-form-control" />
										
									</div>
								</div>
							</div>
							<div class="sfdc-row" id="uifm_frm_wiz_tab_active_bg_numtxt_wrap">
							   <div class="space10"></div>
								<div class="sfdc-col-md-5">
								   <label ><?php echo __( 'Background for number container' ); ?></label>
								</div>
								<div class="sfdc-col-sm-7">
									 <div class="sfdc-input-group uifm-custom-color">
										 <span class="sfdc-input-group-addon"><i></i></span>
										 <input 
											type="text" 
											value="" 
											id="uifm_frm_wiz_tab_active_bg_numtxt" 
											name="uifm_frm_wiz_tab_active_bg_numtxt"
											class="sfdc-form-control" />
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
		</div>
	</div>
	<div class="sfdc-row" id="uifm_frm_wiz_tab_done_wrap">
		<div class="sfdc-col-md-12">
			<div class="sfdc-form-group">
					<label ><?php echo __( 'Done mode' ); ?>
					<a href="javascript:void(0);"
					   data-toggle="tooltip" data-placement="right" 
					   data-original-title="<?php echo __( 'this when the tab is completed. this will be shown on frontend' ); ?>"
					   ><span class="fa fa-question-circle"></span></a>
					</label>
					<div class="">
						<div class="sfdc-col-md-1">
							
						</div>
						<div class="sfdc-col-md-11">
							 <div class="sfdc-row" id="uifm_frm_wiz_tab_done_bgcolor_wrap">
								<div class="sfdc-col-md-5">
								   <label ><?php echo __( 'Background color' ); ?></label>
								</div>
								<div class="sfdc-col-sm-7">
									 <div class="sfdc-input-group uifm-custom-color">
									   <span class="sfdc-input-group-addon"><i></i></span>
										 <input 
											type="text" 
											value="" 
											id="uifm_frm_wiz_tab_done_bgcolor" 
											name="uifm_frm_wiz_tab_done_bgcolor"
											class="sfdc-form-control" />
									</div>
								</div>
							</div>
						   <div class="sfdc-row" id="uifm_frm_wiz_tab_done_txtcolor_wrap">
							   <div class="space10"></div>
								<div class="sfdc-col-md-5">
								   <label ><?php echo __( 'Title color' ); ?></label>
								</div>
								<div class="sfdc-col-sm-7">
									 <div class="sfdc-input-group uifm-custom-color">
										 <span class="sfdc-input-group-addon"><i></i></span>
										 <input 
											type="text" 
											
											id="uifm_frm_wiz_tab_done_txtcolor" 
											name="uifm_frm_wiz_tab_done_txtcolor"
											class="sfdc-form-control" />
										
									</div>
								</div>
							</div>
						   <div class="sfdc-row" id="uifm_frm_wiz_tab_done_numtxtcolor_wrap">
							   <div class="space10"></div>
								<div class="sfdc-col-md-5">
								   <label ><?php echo __( 'Number text color' ); ?></label>
								</div>
								<div class="sfdc-col-sm-7">
									 <div class="sfdc-input-group uifm-custom-color">
										 <span class="sfdc-input-group-addon"><i></i></span>
										 <input 
											type="text" 
											value="" 
											id="uifm_frm_wiz_tab_done_numtxtcolor" 
											name="uifm_frm_wiz_tab_done_numtxtcolor"
											class="sfdc-form-control" />
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
		</div>
	</div>
	<div class="sfdc-row" id="uifm_frm_wiz_tab_cont_wrap">
		<div class="sfdc-col-md-12">
			<div class="sfdc-form-group">
					<label ><?php echo __( 'Tab container ' ); ?></label>
					<div class="">
						<div class="sfdc-col-md-1">
							
						</div>
						<div class="sfdc-col-md-11">
							 <div class="sfdc-row" id="uifm_frm_wiz_tab_cont_bgcolor_wrap">
								<div class="sfdc-col-md-5">
								   <label ><?php echo __( 'Background color' ); ?></label>
								</div>
								<div class="sfdc-col-sm-7">
									 <div class="sfdc-input-group uifm-custom-color">
									   <span class="sfdc-input-group-addon"><i></i></span>
										 <input 
											type="text" 
											value="" 
											id="uifm_frm_wiz_tab_cont_bgcolor" 
											name="uifm_frm_wiz_tab_cont_bgcolor"
											class="sfdc-form-control" />
										
									</div>
								</div>
							</div>
							
						   <div class="sfdc-row" id="uifm_frm_wiz_tab_cont_borcol_wrap">
							   <div class="space10"></div>
								<div class="sfdc-col-md-5">
								   <label ><?php echo __( 'Text color' ); ?></label>
								</div>
								<div class="sfdc-col-sm-7">
									 <div class="sfdc-input-group uifm-custom-color">
										 <span class="sfdc-input-group-addon"><i></i></span>
										 <input 
											type="text" 
											value="" 
											id="uifm_frm_wiz_tab_cont_borcol" 
											name="uifm_frm_wiz_tab_cont_borcol"
											class="sfdc-form-control" />
										
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
 <script type="text/html" id="tmpl-zgfm-frm-wiz-templates">
	<div data-tab-nro="" class="uifm_frm_skin_tab_content">
						   <div class="sfdc-row">
						       <div class="sfdc-col-sm-1">
						        <div class="uifm-wz-opt-sort">
									<i class="fa fa-sort"></i>
						        </div>
						       </div>
							   <div class="sfdc-col-sm-7">
								   <div class="sfdc-form-group">
											<label ><?php echo __( 'Tab' ); ?> <span>0</span> : </label>
											<input type="text" 
													id="uifm_frm_skin_tab0_title"
													class="sfdc-form-control uifm_frm_skin_tab_title_evt"
													onfocus="rocketform.wizardtab_tabManualEvt(this,true);"
													placeholder="<?php echo __( 'Type tab title' ); ?>"  class="sfdc-form-control">   
									</div>
							   </div>
							   <div class="sfdc-col-sm-4">
								   <div class="sfdc-btn-group  ">
										<button onclick="javascript:rocketform.wizardtab_deleteTab(this);"
												class="sfdc-btn sfdc-btn-sm sfdc-btn-danger"
												><i class="fa fa-trash-o"></i> <?php echo __( 'Delete' ); ?></button>
										<button onclick="javascript:rocketform.wizardtab_duplicateTab(this);"
												class="sfdc-btn sfdc-btn-sm sfdc-btn-warning uifm-back-wz-dup-btn"
												><i class="fa fa-trash-o"></i> <?php echo __( 'Duplicate' ); ?></button>		
									</div>
							   </div>
						   </div>
					   </div>
</script>
