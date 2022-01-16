<div class="uiform-set-field-wrap" id="uiform-set-form-skin">
	<div class="sfdc-row">
		<div class="sfdc-col-md-12">
			<div class="sfdc-form-group">
                <label >Custom width</label>
                <div class="">
                    <div class="sfdc-col-md-3">
                        <input class="switch-field" data-form-msec="skin" data-form-store="form_width-show_st"
                                name="uifm_frm_skin_width_st"
                                id="uifm_frm_skin_width_st"
                                type="checkbox"/>
                    </div>
                    <div class="sfdc-col-md-9">
                        <div class="sfdc-row">
                            <div class="sfdc-col-md-4">
                                <label >Max width</label>
                            </div>
                            <div class="sfdc-col-sm-8">
                                <input class="uifm_frm_form_skin_spinner"
                                            id="uifm_frm_skin_maxwidth"
                                            data-form-msec="skin"
                                            data-form-store="form_width-max"
                                            type="text" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<div class="sfdc-row">
		<div class="sfdc-col-md-12">
			<div class="sfdc-form-group">
                <label ><?php echo __( 'Custom padding' ); ?></label>
                <div class="">
                    <div class="sfdc-col-md-3">
                        <input 
                                class="switch-field"
                                data-form-msec="skin"
                                data-form-store="form_padding-show_st"
                                name="uifm_frm_skin_padd_st "
                                id="uifm_frm_skin_padd_st"
                                type="checkbox"/>
                    </div>
                    <div class="sfdc-col-md-9">
                        <div class="sfdc-row">
                            <div class="sfdc-col-md-4">
                                <label ><?php echo __( 'Padding top' ); ?></label>
                            </div>
                            <div class="sfdc-col-sm-8">
                                            <input  
                                                id="uifm_frm_skin_padd_top"
                                            class="uifm_frm_form_skin_spinner"
                                            data-form-msec="skin"
                                            data-form-store="form_padding-pos_top"
                                            type="text" >
                            </div>
                        </div>
                        <div class="space10"></div>     
                        <div class="sfdc-row">
                            <div class="sfdc-col-md-4">
                                <label ><?php echo __( 'Padding right' ); ?></label>
                            </div>
                            <div class="sfdc-col-sm-8">
                                            <input  
                                            id="uifm_frm_skin_padd_right"    
                                            class="uifm_frm_form_skin_spinner"
                                            data-form-msec="skin"
                                            data-form-store="form_padding-pos_right"
                                            type="text" >
                            </div>
                        </div>
                        <div class="sfdc-row">
                            <div class="sfdc-col-md-4">
                                <label ><?php echo __( 'Padding bottom' ); ?></label>
                            </div>
                            <div class="sfdc-col-sm-8">
                                            <input  
                                                id="uifm_frm_skin_padd_bottom"
                                            class="uifm_frm_form_skin_spinner"
                                            data-form-msec="skin"
                                            data-form-store="form_padding-pos_bottom"
                                            type="text" >
                            </div>
                        </div>
                        <div class="sfdc-row">
                            <div class="sfdc-col-md-4">
                                <label ><?php echo __( 'Padding left' ); ?></label>
                            </div>
                            <div class="sfdc-col-sm-8">
                                            <input  
                                                id="uifm_frm_skin_padd_left"
                                            class="uifm_frm_form_skin_spinner"
                                            data-form-msec="skin"
                                            data-form-store="form_padding-pos_left"
                                            type="text" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<div >
   <div class="space10"></div>      
	<div class="sfdc-row">
		<div class="sfdc-col-md-12">
			<div class="divider2">
			<div class="mask"></div>
			<span><i>Background</i></span>
			</div>
		</div>
	</div>
	<div class="sfdc-row">
		<div class="sfdc-col-md-12">
			<div class="sfdc-form-group">
					<label >Background color</label>
					<div class="">
						<div class="sfdc-col-md-3">
							<input class="switch-field"
								   data-form-msec="skin"
								   data-form-store="form_background-show_st"
								   id="uifm_frm_skin_fmbg_st"
								   type="checkbox"/>
						</div>
						<div class="sfdc-col-md-9">
							 <div class="sfdc-row">
								<div class="sfdc-col-md-3">
								   <label >Type</label>
								</div>
								<div class="sfdc-col-sm-9">
										<div class="sfdc-controls sfdc-form-group">
											<div class="sfdc-btn-group sfdc-btn-group-justified"
												 data-toggle="buttons">
												<label 
													data-form-store="form_background-type"
													data-form-msec="skin"
													data-toggle-enable="sfdc-btn-warning"
													data-toggle-disable="sfdc-btn-warning"
													data-settings-option="group-radiobutton"
													id="uifm_frm_skin_fmbg_type_1"
													class="sfdc-btn sfdc-btn-warning uifm-fmskin-setoption-btn" >
												<input type="radio"  value="1"> Solid
												</label>
												<label 
													data-form-store="form_background-type"
													data-form-msec="skin"
													data-toggle-enable="sfdc-btn-warning"
													data-toggle-disable="sfdc-btn-warning"
													data-settings-option="group-radiobutton"
													id="uifm_frm_skin_fmbg_type_2"
													class="sfdc-btn sfdc-btn-warning uifm-fmskin-setoption-btn" >
												<input type="radio"  value="2" checked> Gradient
												</label>
											</div>
										</div>
									</div>
							</div>
							<div id="uifm_frm_skin_fmbg_type_opts1">
									<div class="sfdc-row">
										<div class="sfdc-col-md-3">
										   <label >Color</label>
										</div>
										<div class="sfdc-col-sm-9">
												<div class="sfdc-form-group">
													<div data-form-store="form_background-solid_color"
														 data-form-msec="skin"
														 class="sfdc-input-group uifm-custom-color">
														<span class="sfdc-input-group-addon"><i></i></span>
														<input  placeholder="Pick the color"
																id="uifm_frm_skin_fmbg_color_1"
																type="text" 
																value="" 
																name="" 
																class="sfdc-form-control" />
													</div>
												</div>
											</div>
									</div>
							</div>
							<div id="uifm_frm_skin_fmbg_type_opts2">
									<div class="sfdc-row">
										<div class="sfdc-col-md-3">
										   <label >Start color</label>
										</div>
										<div class="sfdc-col-sm-9">
												<div class="sfdc-form-group">
													<div 
														data-form-store="form_background-start_color"
														data-form-msec="skin"
														class="sfdc-input-group uifm-custom-color">
														<span class="sfdc-input-group-addon"><i></i></span>
														<input  placeholder="Pick the color"
																type="text" value=""
																id="uifm_frm_skin_fmbg_color_2"
																name="" class="sfdc-form-control" />
													</div>
												</div>
											</div>
									</div>
									<div class="sfdc-row">
										<div class="sfdc-col-md-3">
										   <label >End color</label>
										</div>
										<div class="sfdc-col-sm-9">
												<div class="sfdc-form-group">
													<div 
														data-form-store="form_background-end_color"
														data-form-msec="skin"
														class="sfdc-input-group uifm-custom-color">
														<span class="sfdc-input-group-addon"><i></i></span>
														<input  placeholder="Pick the color" 
																id="uifm_frm_skin_fmbg_color_3"
																type="text" value="" name="" class="sfdc-form-control" />
													</div>
												</div>
											</div>
									</div>
							</div>
							
							
							 <div class="sfdc-row">
								<div class="sfdc-col-md-4">
								   <label >Background image</label>
								</div>
								<div class="sfdc-col-sm-8">
										<div class="sfdc-form-group">
											<div class="uifm_frm_skin_bg_thumbnail" id="uifm_frm_skin_bg_srcimg_wrap">
												
											</div>
											<input 
												name="uifm_frm_skin_bg_imgurl" 
												id="uifm_frm_skin_bg_imgurl" 
												value=""                                                
												type="hidden">
												<input id="uifm_frm_skin_bg_btnadd" 
													value="Update Image" 
													class="button-secondary" 
													type="button">
												<a href="javascript:void(0);"
												   onclick="javascript:rocketform.loadForm_tab_skin_delbgimg();"
												   class="sfdc-btn sfdc-btn-default"
												   >
													<i class="fa fa-trash-o"></i>
												</a>
	
										</div>
									</div>
							</div>
							
							
						</div>
					</div>
				</div>
			
		</div>
	</div>
	</div>
	<div >
	<div class="sfdc-row">
		<div class="sfdc-col-md-12">
			<div class="divider2">
			<div class="mask"></div>
			<span><i>Border</i></span>
			</div>
		</div>
	</div>
	<div class="sfdc-row">
		<div class="sfdc-col-md-12">
			<div class="sfdc-form-group">
					<label >Border radius</label>
					<div class="">
						<div class="sfdc-col-md-3">
							<input 
								   data-form-store="form_border_radius-show_st"
								   data-form-msec="skin"
								   class="switch-field"
								   name="uifm_frm_skin_fmbora_st"
								   id="uifm_frm_skin_fmbora_st"
								   type="checkbox"/>
						</div>
						<div class="sfdc-col-md-9">
							<input type="text" style="width:100%;"
								   data-form-store="form_border_radius-size"
								   data-form-msec="skin"
								   data-slider-value="14"
								   data-slider-step="1"
								   data-slider-max="60"
								   data-slider-min="0" 
								   data-slider-id="" 
								   id="uifm_frm_skin_fmbora_size" 
								   class="uiform-opt-slider">
						</div>
					</div>
				</div>
		</div>
	</div>
	<div class="space10"></div>
	<div class="sfdc-row">
		<div class="sfdc-col-md-12">
			<div class="sfdc-form-group">
					<label >Border</label>
					<div class="">
						<div class="sfdc-col-md-3">
							<input 
								   data-form-store="form_border-show_st"
								   data-form-msec="skin"
								   class="switch-field"
								   name="uifm_frm_skin_fmbor_st"
								   id="uifm_frm_skin_fmbor_st"
								   type="checkbox"/>
						</div>
						<div class="sfdc-col-md-9">
							<div class="sfdc-row">
								<div class="sfdc-col-md-3">
								   <label >Color</label>
								</div>
								<div class="sfdc-col-sm-9">
										<div class="sfdc-form-group">
											<div data-form-store="form_border-color"
												 data-form-msec="skin"
												 class="sfdc-input-group uifm-custom-color">
												<span class="sfdc-input-group-addon"><i></i></span>
												<input  placeholder="Pick the color" 
														type="text" 
														value="" 
														name="uifm_frm_skin_fmbor_color"
														id="uifm_frm_skin_fmbor_color"
														class="sfdc-form-control" />
											</div>
										</div>
									</div>
							</div>
							
							<div class="sfdc-row">
								<div class="sfdc-col-md-3">
								   <label >border style</label>
								</div>
								<div class="sfdc-col-sm-9">
										<div class="sfdc-controls sfdc-form-group">
											<div class="sfdc-btn-group sfdc-btn-group-justified" data-toggle="buttons">
												<label 
													data-form-store="form_border-style"
													data-form-msec="skin"
													data-toggle-enable="sfdc-btn-warning"
													data-toggle-disable="sfdc-btn-warning"
													data-settings-option="group-radiobutton"
													id="uifm_frm_skin_fmbor_style_1"
													class="sfdc-btn sfdc-btn-warning uifm-fmskin-setoption-btn" >
												<input type="radio"  value="1" checked>Solid
												</label>
												<label 
													data-form-store="form_border-style"
													data-form-msec="skin"
													data-toggle-enable="sfdc-btn-warning"
													data-toggle-disable="sfdc-btn-warning"
													data-settings-option="group-radiobutton"
													id="uifm_frm_skin_fmbor_style_2"
													class="sfdc-btn sfdc-btn-warning uifm-fmskin-setoption-btn" >
												<input type="radio"  value="2">  Dotted
												</label>
											</div>
										</div>
									</div>
							</div>
							<div class="sfdc-row">
								<div class="sfdc-col-md-3">
								   <label >Border width</label>
								</div>
								<div class="sfdc-col-sm-9">
									  <input 
										data-form-store="form_border-width"
										data-form-msec="skin"
										type="text" style="width:100%;"
										data-slider-value="14"
										data-slider-step="1"
										data-slider-max="20"
										data-slider-min="0"
										data-slider-id="" 
										id="uifm_frm_skin_fmbor_width"
										class="uiform-opt-slider">
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
			<div class="sfdc-form-group">
					<label >Box Shadow</label>
					<div class="">
						<div class="sfdc-col-md-3">
							<input class="switch-field"
								   data-form-store="form_shadow-show_st"
								   data-form-msec="skin"
								   id="uifm_frm_skin_sha_st"
								   name="uifm_frm_skin_sha_st"
								   type="checkbox"/>
						</div>
						<div class="sfdc-col-md-9">
							<div class="sfdc-row">
								<div class="sfdc-col-md-3">
								   <label >Color</label>
								</div>
								<div class="sfdc-col-sm-9">
										<div class="sfdc-form-group">
											<div  data-form-store="form_shadow-color"
												  data-form-msec="skin"
												  class="sfdc-input-group uifm-custom-color">
												<span class="sfdc-input-group-addon"><i></i></span>
												<input  placeholder="Pick the color"
														type="text"
														value=""
														id="uifm_frm_skin_sha_co"
														name="uifm_frm_skin_sha_co"
														class="sfdc-form-control" />
											</div>
											
										</div>
									</div>
							</div>
							<div class="space20"></div>
						   <div class="sfdc-row">
								<div class="sfdc-col-md-3">
								   <label >horizontal</label>
								</div>
								<div class="sfdc-col-sm-9">
									  <input type="text"
											 data-form-store="form_shadow-h_shadow"
											 data-form-msec="skin"
										id="uifm_frm_skin_sha_x"
									   name="uifm_frm_skin_sha_x"      
										data-slider-step="1"
										data-slider-max="30"
										data-slider-min="0"
										data-slider-id="" class="uiform-opt-slider">
									</div>
							</div>
						  <div class="space20"></div>
							<div class="sfdc-row">
								<div class="sfdc-col-md-3">
								   <label >vertical</label>
								</div>
								<div class="sfdc-col-sm-9">
									  <input type="text"
										   data-form-store="form_shadow-v_shadow"
										   data-form-msec="skin"
											 style="width:100%;"
										id="uifm_frm_skin_sha_y"
										name="uifm_frm_skin_sha_y"
										
										data-slider-step="1"
										data-slider-max="30"
										data-slider-min="0" data-slider-id="" class="uiform-opt-slider">
									</div>
							</div>
							<div class="space20"></div>
							<div class="sfdc-row">
								<div class="sfdc-col-md-3">
								   <label >blur</label>
								</div>
								<div class="sfdc-col-sm-9">
									  <input type="text"
										data-form-store="form_shadow-blur"
										data-form-msec="skin"
											 style="width:100%;"
										id="uifm_frm_skin_sha_blur"
										name="uifm_frm_skin_sha_blur"
										
										data-slider-step="1"
										data-slider-max="30"
										data-slider-min="0" data-slider-id="" class="uiform-opt-slider">
									</div>
							</div>
							
						</div>
					</div>
				</div>
			
		</div>
	</div>
</div>
