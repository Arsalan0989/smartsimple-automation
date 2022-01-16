<div class="uiform-editing-main" data-uiform-page="form_edit">
    <div class="uifm-edit-panel-left uifm-edit-panel">
        <div class="uiform-builder-fields">
            <div data-intro="Fields section. Drag and Drop or just click to add to the preview section" class="uiform-sidebar-fields">
                @include('forms.fields_available')
            </div>
        </div>
        <div id="uifm-panel-arrow-left" style="" 
            class="uifm-panel-toggler uifm-panel-toggler-west uifm-layout-toggler-open"
            title="Close">
            <span class="uifm-arrow uifm-arrow-open" style="display: block; margin-top: 17px;">
                <i class="fa fa-caret-left"></i>
            </span>
            <span class="uifm-arrow uifm-arrow-closed" style="display: none; margin-top: 17px;">
                <i class="fa fa-caret-right"></i>
            </span>
        </div>
    </div>
    <div id="zgpb-editor-container" class="uifm-edit-panel-center uifm-edit-panel">
        <div class="uiform-builder-preview">
            <div 
                data-intro="preview section. you can view how the fields will look like and you can change the settings on live mode "
                class="uiform-preview-base">
                <div class="uiform-main-form">
                    <div class="uiform-step-list uiform-wiztheme0" style="display:none;">
                        <ul class="uiform-steps">
                            <li class="uifm-current">
                                <a data-tab-nro="0" href="#uifm-step-tab-0">
                                    <span class="uifm-number">1</span>
                                    <span class="uifm-title">Tab title</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="uiform-step-content" style="min-height:100px;">
                        <div data-uifm-step="0" id="uifm-step-tab-0" class="uiform-step-pane">
                            <div id="" class="uiform-items-container uiform-tab-container">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="uifm-edit-panel-right uifm-edit-panel">
        <div class="uiform-builder-data">
            <!-- Nav tabs -->
            <div class="uiformc-menu-wrap-2">
                <ul class="sfdc-nav sfdc-nav-tabs">
                    <li class="sfdc-active"><a href="#uiform-build-form-tab" data-toggle="sfdc-tab">Form</a></li>
                    <li class="uifm-tab-selectedfield"  style="display:none;"><a href="#uiform-build-field-tab"  data-toggle="sfdc-tab" >Selected Field </a><i id="uifm-close-setting-tab" class="sfdc-glyphicon sfdc-glyphicon-remove"></i></li>
                </ul> 
            </div>
            
            <div class="sfdc-tab-content" id="zgfm-panel-right-field-tabopt">
                <div class="sfdc-tab-pane sfdc-in sfdc-active" id="uiform-build-form-tab">
                    <div data-intro="Form settings. you can set all options related to the form" class="uiform-builder-maintab-container">
                        <div class="uiform-set-panel-header">
                            <div class="uiform-set-panel-header-inner">
                                <div class="sfdc-row">
                                    <div class="sfdc-col-md-12">
                                        <div class="uiform-set-panel-header-fldnme">
                                            <label for="">Form name 
                                                <a data-original-title="This is important to identify the form on backend" 
                                                    data-placement="right" 
                                                    data-toggle="tooltip" 
                                                    href="javascript:void(0);"><span class="fa fa-question-circle"></span></a>
                                            </label>
                                            <input type="text" placeholder="Type form name" class="" id="uifm_frm_main_title" name="uifm_frm_main_title" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uiform-set-panel-container">
                            <!-- first panel -->
                            <div class="uiform-set-panel-1 ">
                                <!-- Nav tabs -->
                                <ul class="sfdc-nav sfdc-nav-tabs">
                                    <li  class="sfdc-active">
                                        <a  class="uiform-settings-skin"
                                            data-intro="skin section. you can change skin options of your form"
                                            href="#uiform-settings-tab3-2" data-toggle="sfdc-tab" >Skin
                                        </a>
                                    </li>
                                    <li>
                                        <a  class="uiform-settings-wizard" data-intro="wizard section. you can enable the wizard form and add many forms"
                                            href="#uiform-settings-tab3-3" data-toggle="sfdc-tab" >Wizard
                                        </a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="sfdc-tab-content  ">
                                    <div class="sfdc-tab-pane sfdc-in sfdc-active" id="uiform-settings-tab3-2">
                                        <div class="uiform-tab-content  scroll-pane-arrows">
                                            <div class="uiform-tab-content-inner">
                                                <!--container -->
                                                @include('forms.settings_form_skin')
                                            <!--\end container -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sfdc-tab-pane" id="uiform-settings-tab3-3">
                                        <div class="uiform-tab-content  scroll-pane-arrows">
                                            <div class="uiform-tab-content-inner">
                                                <!--container -->
                                                @include('forms.settings_form_wizard')
                                                <!--\end container -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--\ End Tab panes --> 
                            </div>	
                        </div>
                    </div>
                </div>
                <div class="sfdc-tab-pane" id="uiform-build-field-tab" >
                    <div class="uiform-builder-maintab-container">
                        <img src="{{ asset('') }}assets/backend/image/ajax-loader-black.gif"></a>
                    </div>
                </div>
            </div>
            <!--\ End Tab panes --> 
        
        </div>
        <div id="uifm-panel-arrow-right" style="" 
                class="uifm-panel-toggler uifm-panel-toggler-west uifm-layout-toggler-open"
                title="Close">
            <span class="uifm-arrow uifm-arrow-open" style="display: block; margin-top: 17px;">
                <i class="fa fa-caret-right"></i>
            </span>
            <span class="uifm-arrow uifm-arrow-closed" style="display: none; margin-top: 17px;">
                <i class="fa fa-caret-left"></i>
            </span>
        </div>
    </div>
</div>

<script>
    window.onload = function () {
    rocketform.loadForm_globalSettings();
    <?php
    if ( isset( $form_id ) && intval( $form_id ) > 0 ) {
        ?>
    rocketform.loadFormSaved(<?php echo $form_id; ?>);
        <?php
    } else {
        ?>
    
    rocketform.loadNewForm();
        <?php if ( isset( $_GET['opt'] ) && Uiform_Form_Helper::sanitizeInput( $_GET['opt'] ) === 'import' ) { ?>
        rocketform.importForm_openModal(); 
    <?php } else { ?>
        rocketform.formsetting_setFieldName(); 
    <?php } ?>    
        <?php
    }

    ?>
            rocketform.loadForm_globalSettings_end();
};
</script>

<?php
if ( isset( $form_id ) && intval( $form_id ) > 0 ) {
    ?>
<input type="hidden" id="uifm_frm_main_id" value="<?php echo $form_id; ?>" >
    <?php
} else {
    ?>
<input type="hidden" id="uifm_frm_main_id" value="0" >
    <?php
}
?>

<input type="hidden" id="uifm_frm_main_isnewform" value="0" >
<input type="hidden" id="uifm_frm_preview_msg_notsaved" value="<?php echo __( 'You need to save the form before seeing the preview'); ?>">
<input type="hidden" id="uifm_frm_preview_msg_desktop_title" value="<?php echo __( 'Preview for desktops'); ?>">
<input type="hidden" id="uifm_frm_preview_msg_tablet_title" value="<?php echo __( 'Preview for tablets'); ?>">
<input type="hidden" id="uifm_frm_preview_msg_phone_title" value="<?php echo __( 'Preview for smartphone'); ?>">
<input type="hidden" id="uifm_frm_preview_import_title" value="<?php echo __( 'Import form'); ?>">
<input type="hidden" id="uifm_frm_preview_import_onfail" value="<?php echo __( 'The import has failed. press the accept button'); ?>">