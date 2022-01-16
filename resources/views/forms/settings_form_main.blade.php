<div class="uiform-set-field-wrap " >
  <div class="space20"></div>
	  
	<div class="sfdc-row">
		 <div class="sfdc-col-md-12">
			<div class="sfdc-col-sm-4">
			<label for=""><?php echo __( 'REFRESH AND CLEAN FORM' ); ?></label>
			</div>
			<div class="sfdc-col-sm-8">
				<a href="javascript:void(0);"
				   onclick="javascript:rocketform.refreshPreviewSection();"
				   class="sfdc-btn sfdc-btn-success"
				   ><?php echo __( 'Refresh' ); ?></a>
				<a href="javascript:void(0);"
						   data-toggle="tooltip" data-placement="top" 
						   data-original-title="<?php echo __( 'this is used in order to fix if something is not showing fine on the preview editor panel' ); ?>"
						   ><span class="fa fa-question-circle"></span></a>
			</div>
		</div>
		<div class="space10 zgfm-opt-divider-stl1"></div>
		<div class="sfdc-col-md-12">
			<div class="sfdc-col-sm-4">
			<label for=""><?php echo __( 'REFRESH FORM FROM DATA' ); ?></label>
			</div>
			<div class="sfdc-col-sm-8">
				<a href="javascript:void(0);"
				   onclick="javascript:rocketform.refreshPreviewSectionFromData();"
				   class="sfdc-btn sfdc-btn-success"
				   ><?php echo __( 'Refresh From Data' ); ?></a>
				<a href="javascript:void(0);"
						   data-toggle="tooltip" data-placement="top" 
						   data-original-title="<?php echo __( 'this is used in order to fix if something is not showing fine on the preview editor panel' ); ?>"
						   ><span class="fa fa-question-circle"></span></a>
			</div>
		</div>
		<!--<div class="space10 zgfm-opt-divider-stl1"></div>
		<div class="sfdc-col-md-12">
			<div class="sfdc-col-sm-4">
			<label for=""><?php echo __( 'REFRESH AND MIGRATE TO VERSION 3' ); ?></label>
			<p class="help-block"><?php echo __( 'Use only if you upgraded from version 2.x to 3' ); ?></p>
			</div>
			<div class="sfdc-col-sm-8">
				<a href="javascript:void(0);"
				   onclick="javascript:rocketform.migrateToVersion3();"
				   class="sfdc-btn sfdc-btn-success"
				   ><?php echo __( 'Refresh and migrate' ); ?></a>
				<a href="javascript:void(0);"
						   data-toggle="tooltip" data-placement="top" 
						   data-original-title="<?php echo __( 'this is used in order to fix if something is not showing fine on the preview editor panel' ); ?>"
						   ><span class="fa fa-question-circle"></span></a>
			</div>
		</div>  -->
		<div class="space10 zgfm-opt-divider-stl1"></div>
		<div class="sfdc-col-md-12">
			<div class="sfdc-form-group">
				 <div class="sfdc-col-sm-4">
					 <label for=""><?php echo __( 'AUTOSCROLL AFTER LOADING FORM' ); ?></label>
				 </div>
				<div class="sfdc-col-sm-8">
					<input class="switch-field"
								   id="uifm_frm_main_onload_scroll"
								   name="uifm_frm_main_onload_scroll"
								   type="checkbox"/>
					 <a href="javascript:void(0);"
					   data-toggle="tooltip" data-placement="right" 
					   data-original-title="<?php echo __( 'if you want to stop the autoscroll when the form is loaded' ); ?>"
					   ><span class="fa fa-question-circle"></span></a>
				</div>
			</div>
		</div>
 
	</div>
  <!--  <div class="space10 zgfm-opt-divider-stl1"></div>
	<div class="sfdc-row">
		<div class="sfdc-col-md-12">
			<div class="sfdc-form-group">
				 <div class="sfdc-col-sm-4">
					<label for=""><?php echo __( 'ENABLE NO CONFLICT OPTION' ); ?></label>    
				 </div>
				 <div class="sfdc-col-sm-8">
					<input class="switch-field"
								   id="uifm_frm_main_preload_noconflict"
								   name="uifm_frm_main_preload_noconflict"
								   type="checkbox"/>
					 <a href="javascript:void(0);"
					   data-toggle="tooltip" data-placement="right" 
					   data-original-title="<?php echo __( 'if you see something weird when the form is loaded, maybe there is a conflict with your site, just enable this option' ); ?>"
					   ><span class="fa fa-question-circle"></span></a>
				 </div>   
					  
			</div>
		</div>
		
	</div> -->
	
</div>
