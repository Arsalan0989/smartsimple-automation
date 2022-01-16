@extends('layouts.app-ui')

@section('csscode')
    @include('sources');
@endsection
@section('content')
<script type="text/javascript"  src="{{ asset('') }}assets/common/js/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
	var $uifm=jQuery.noConflict();
	</script>
    <div class="">
        <div class="uiform-editing-dashboard">
            <div class="uiformc-menu-wrap">
                <ul class="sfdc-nav sfdc-nav-tabs">
                    <li class="sfdc-active">
                        <a data-toggle="sfdc-tab" href="#uiformc-menu-sec1">Form editor</a>
                    </li>
                    <li>
                        <a data-toggle="sfdc-tab" class="uiform-settings-email" data-intro="email section. you can set mail options. e.g. the recipient mail"
                        href="#uiformc-menu-sec2">Email Settings</a>
                    </li>
                    
                    <li>
                        <a data-toggle="sfdc-tab"
                        class="uiform-settings-subm"
                        data-intro="submission section. you can modify the success message and other messages"
                        href="#uiformc-menu-sec3">On Submission</a>
                    </li>
                    <li><a data-toggle="sfdc-tab"
                        class="uiform-settings-main"
                        data-intro="main settings"
                        href="#uiformc-menu-sec5">Global settings</a></li> 
                    <?php if ( isset( $addons_actions['back_exttab_block'])) { ?>
                        <li><a data-toggle="sfdc-tab"
                            class="uiform-settings-extensions"
                            data-intro="<?php echo __( 'Extensions' ); ?>"
                            href="#uiformc-menu-sec7"><?php echo __( 'Extensions' ); ?></a>
                        </li> 
                    <?php } ?>
                </ul>
            </div>

            <div class="sfdc-tab-content">
                <div id="uiformc-menu-sec1" class="sfdc-tab-pane sfdc-in sfdc-active">
                    @include('forms.create_form_main')
                </div>
                <div id="uiformc-menu-sec2" class="sfdc-tab-pane ">
                    <div class="uiformc-tab-content-inner">
                        @include('forms.settings_form_email')
                    </div>
                </div>
                <div id="uiformc-menu-sec3" class="sfdc-tab-pane ">
                    <div class="uiformc-tab-content-inner">
                    @include('forms.settings_form_submission')
                    </div>
                </div>
                
                <div id="uiformc-menu-sec5" class="sfdc-tab-pane ">
                    <div class="uiformc-tab-content-inner2">
                     
                        <ul class="sfdc-nav sfdc-nav-tabs zgfm-nav-tabs-settings" role="tablist">
                        <li  class="sfdc-active"><a href="#zgfm-menu-main-tab-1"  role="tab" data-toggle="sfdc-tab"><?php echo __( 'Main' ); ?></a></li>
                        <li ><a href="#zgfm-menu-main-tab-2"  role="tab" data-toggle="sfdc-tab"><?php echo __( 'Import' ); ?></a></li>
                        <li ><a href="#zgfm-menu-main-tab-4"  class="zgfm_gsettings_additional" role="tab" data-toggle="sfdc-tab"><?php echo __( 'Additional' ); ?></a></li>
                        <li ><a href="#zgfm-menu-main-tab-5"  role="tab" data-toggle="sfdc-tab"><?php echo __( 'PDF' ); ?></a></li>
                        <li ><a href="#zgfm-menu-main-tab-6"  role="tab" data-toggle="sfdc-tab"><?php echo __( 'Email' ); ?></a></li>
                        <li ><a href="#zgfm-menu-main-tab-7"  role="tab" data-toggle="sfdc-tab"><?php echo __( 'Records' ); ?></a></li>
                        </ul>
                        
                        <div class="sfdc-tab-content">
                            <div  class="sfdc-tab-pane sfdc-in sfdc-active" id="zgfm-menu-main-tab-1">
                                <div class="uiformc-tab-content-inner3">
                                    @include('forms.settings_form_main')
                                </div>
                            </div>
                            <div  class="sfdc-tab-pane" id="zgfm-menu-main-tab-2">
                                <div class="uiformc-tab-content-inner3">
                                    @include('forms.settings_form_main_imp')
                                </div>
                            </div>
                            <div  class="sfdc-tab-pane" id="zgfm-menu-main-tab-4">
                                <div class="uiformc-tab-content-inner3">
                                    @include('forms.settings_form_main_add')
                                </div>
                            </div>
                            <div  class="sfdc-tab-pane" id="zgfm-menu-main-tab-5">
                                <div class="uiformc-tab-content-inner3">
                                    @include('forms.settings_form_main_pdf')
                                </div>
                            </div>
                                <div  class="sfdc-tab-pane" id="zgfm-menu-main-tab-6">
                                <div class="uiformc-tab-content-inner3">
                                    @include('forms.settings_form_main_email')
                                </div>
                            </div>
                            <div  class="sfdc-tab-pane" id="zgfm-menu-main-tab-7">
                                <div class="uiformc-tab-content-inner3">
                                    @include('forms.settings_form_main_record')
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <?php if ( isset( $addons_actions['back_exttab_block'] ) ) { ?>
                <div id="uiformc-menu-sec7" class="sfdc-tab-pane ">
                    <div class="uiformc-tab-content-inner2 sfdc-clearfix">
                    
                        <?php
                        if ( ! empty( $modules_tab_extension ) ) {
                            $count = 1;
                                ?>
                            <div class="sfdc-col-xs-3">
                                <ul class="sfdc-nav sfdc-nav-tabs tabs-left">
                                    <?php
                                    foreach ( $modules_tab_extension as $key => $value ) {
                                        ?>
                                    <li class="<?php echo ( $count === 1 ) ? 'sfdc-active' : ''; ?>">
                                        <a data-toggle="sfdc-tab" href="#zgfm-extaddn-tabcont-<?php echo $key; ?>">
                                        <?php echo $value['tab_link']['name']; ?>
                                        </a>    
                                    </li>
                                        <?php
                                        $count++;
                                    }
                                    ?>
                                </ul>    
                            </div> 
                            
                            <div class="sfdc-col-xs-9">
                                <div class="sfdc-tab-content">
                                    
                                    <?php
                                    $count = 1;
                                    foreach ( $modules_tab_extension as $key => $value ) {
                                        ?>
                                    <div id="zgfm-extaddn-tabcont-<?php echo $key; ?>" class="sfdc-tab-pane <?php echo ( $count === 1 ) ? 'sfdc-active' : ''; ?>">
                                        <div class="zgfm-extaddn-tab-content-inner3">
                                            <?php echo $value['tab_content']; ?>
                                        </div>
                                    </div>
                                        <?php
                                        $count++;
                                    }
                                    ?>
                                </div>
                            </div> 
                        <?php
                        }
                        ?>
                 
                    </div>
                </div>
                <?php } ?>
            </div>
            <div id="uiform-editing-mbuttons">
                <div class="zgfm-mbuttons-single">
                    <div class="sfdc-dropdown">
                        <button class="sfdc-btn sfdc-btn-primary sfdc-dropdown-toggle" type="button" id="about-us" data-toggle="sfdc-dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo __( 'Dev Options' ); ?> 
                        <span class="sfdc-caret"></span>
                        </button>
                        <ul class="sfdc-dropdown-menu" aria-labelledby="about-us">
                        <li><a onclick="javascript:rocketform.testing_summbox();"
                        href="javascript:void(0);"><?php echo __( 'test' ); ?> </a></li>
                        <li><a onclick="javascript:rocketform.printmaindata();"
                            href="javascript:void(0);"><?php echo __( 'Show data' ); ?> </a></li>
                        <li><a onclick="javascript:zgfm_back_fld_options.generate_field_htmldata();"
                            href="javascript:void(0);"><?php echo __( 'Generate field static data' ); ?> </a></li>
                        <li><a onclick="javascript:zgfm_back_fld_options.generate_dbChecker();"
                            href="javascript:void(0);"> Generate DB checker </a></li>
                        </ul>
                        </div>
                </div>
                <div class="zgfm-mbuttons-single">
                        <div class="sfdc-dropdown">
                            <button class="sfdc-btn sfdc-btn-primary sfdc-dropdown-toggle" type="button" id="about-us" data-toggle="sfdc-dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo __( 'Options' ); ?> 
                            <span class="sfdc-caret"></span>
                            </button>
                            <ul class="sfdc-dropdown-menu" aria-labelledby="about-us">
                                <li>
                                    <a onclick="javascript:rocketform.rollback_openModal();"
                                        href="javascript:void(0);"><i class="fa fa-retweet" aria-hidden="true"></i> <?php echo __( 'Rollback' ); ?></a></li>
                                <li>
                                    <a onclick="javascript:rocketform.variables_openModal();"
                                        href="javascript:void(0);"><i class="fa fa-table" aria-hidden="true"></i> <?php echo __( 'Variables' ); ?></a></li>
                                
                                <li><a onclick="javascript:rocketform.refreshPreviewSection();"
                                href="javascript:void(0);"><span class="fa fa-refresh"></span> <?php echo __( 'Refresh & Clean Form' ); ?></a></li>
                            </ul>
                        </div>
                </div>
                <div class="zgfm-mbuttons-single">
                    <a 
                        class="sfdc-btn sfdc-btn-primary"
                        onclick="javascript:rocketform.previewform_showForm(1);"
                        href="javascript:void(0);">
                    <span class="fa fa-desktop"></span> <?php echo __( 'preview' ); ?>
                    </a> 
                </div>
                <div class="zgfm-mbuttons-single">
                    <a 
                        class="sfdc-btn sfdc-btn-success"
                        id="uiform-set-button-save"
                        onclick="javascript:rocketform.saveForm();"
                        href="javascript:void(0);">
                        <i class="fa fa-floppy-o"></i> <?php echo __( 'Save form' ); ?> 
                    </a> 
                </div>
            </div>
        </div>    
    </div>

    <!--templates -->    
    @include('forms.templates_fields')
    <!--\end templates -->
    <!-- modals -->    
    @include('forms.create_form_modals')
    <!--\ modals -->
   
@endsection