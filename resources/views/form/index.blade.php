@extends('layouts.app-ui')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Forms Listing') }} 
                    <span style="float: right">
                        <a href="{{ route('form.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New Form</a>
                    </span>
                </div>
                <div class="card-body">
                    @if($forms->count() > 0)
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Name Form</th>
                            <th>Shortcode</th>
                            <th>Created</th>
                            <th>Status</th>
                            <th>Options</th>
                        </thead>
                        <tbody>
                            @foreach ($forms as $form)
                                <tr>
                                    <td>{{ $form->fmb_name }}</td>
                                    <td>
                                        <button class="btn btn-warning">Get shortcode</button>
                                    </td>
                                    <td>{{ $form->created_date }}</td>
                                    <td>
                                        @if($form->flag_status==1)
                                            <span class="badge badge-success">Active</span>
                                        @else 
                                            <span class="badge badge-danger">In-Active</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Move to Trash</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="alert alert-info">No client added yet. <a href="{{ route('client.create') }}"><i class="fa fas fa-plus"></i> Add new client.</a></div>
                    @endif

                    {{-- <div id="uiform-container" data-uiform-page="form_list" class="sfdc-wrap uiform-wrap">
                        <div class="space20"></div>
                        <div class="sfdc-row">
                            <div class="col-lg-12"> 
                            <div class="widget widget-padding span12">
                                <div class="widget-header">
                                    <i class="fa fa-list-alt"></i>
                                    <h5>
                                     List Forms
                                    </h5>
                                    <div class="widget-buttons"></div>
                                </div>  
                                <div class="widget-body">
                                    <div id="uiform-listform-options">
                                        <div class="uiform-listform-options-col">
                                               <a class="sfdc-btn sfdc-btn-sm sfdc-btn-primary" 
                                           href="{{ url('formbuilder/forms/create_uiform') }}">
                                            <i class="fa fa-plus">
                                            </i>
                                            Add new form
                                            </a>
                                        </div>
                                        <div class="uiform-listform-options-col">
                                             <a class="sfdc-btn sfdc-btn-sm sfdc-btn-warning uiform-confirmation-func-action" 
                                                data-dialog-title="Disable Form"
                                                data-dialog-callback="rocketform.listform_updateStatus(2);"
                                            href="javascript:void(0);">
                                               
                                            Disable
                                            </a>
                                        </div>
                                        <div class="uiform-listform-options-col">
                                             <a class="sfdc-btn sfdc-btn-sm sfdc-btn-info uiform-confirmation-func-action" 
                                                data-dialog-title="Enable Form"
                                                data-dialog-callback="rocketform.listform_updateStatus(1);" href="javascript:void(0);">
                                                
                                                Enable
                                            </a>
                                        </div>
                                        <div class="uiform-listform-options-col">
                                            <a class="sfdc-btn sfdc-btn-sm sfdc-btn-danger uiform-confirmation-func-action" 
                                               data-dialog-title="Move to trash"
                                               data-dialog-callback="rocketform.listform_updateStatus(0);"
                                            href="javascript:void(0);">
                                                <i class="fa fa-trash-o"></i>
                                                Move to trash
                                            </a>
                                        </div>
                                        
                                        <div class="uiform-listform-options-col">
                                            
                                            <a class="sfdc-btn sfdc-btn-sm sfdc-btn-success" 
                                               onclick="javascript:rocketform.showFeatureLocked(this);"
                                                data-blocked-feature="Duplicate Form"
                                                 href="javascript:void(0);">
                                             <i class="fa fa-files-o"></i>   
                                                        Duplicate <span class="rkfm-express-lock-wrap" 
                                             ><i class="fa fa-lock"></i></span>
                                            </a>
                                            
                                            
                                        </div>
                                        <div class="uiform-listform-options-col">
                                            <a class="sfdc-btn sfdc-btn-sm sfdc-btn-primary" 
                                               data-target="#zgfm-listform-filter-panel"
                                               data-toggle="sfdc-collapse"
                                            href="javascript:void(0);">
                                                <span class="sfdc-glyphicon sfdc-glyphicon-cog"></span>
                                                Advanced Search
                                            </a>
                                        </div>
                                    </div>
                                    <div class="zgfm-listform-searchbox-container">
                                         <div id="zgfm-listform-filter-panel" class="sfdc-collapse filter-panel">
                                            <div class="sfdc-panel sfdc-panel-default">
                                                <div class="sfdc-panel-body">
                                                    <form id="zgfm-listform-filter-panel-form" class="sfdc-form-inline" role="form">
                                                        <div class="sfdc-form-group">
                                                            @php $per_page = $data2['per_page']; @endphp 
                                                            <label class="sfdc-filter-col" style="margin-right:0;" for="zgfm-listform-pref-perpage">Rows per page:</label>
                                                            <select id="zgfm-listform-pref-perpage" name="zgfm-listform-pref-perpage" class="sfdc-form-control">
                                                                <option value="2" <?php echo ( $per_page === 2 ) ? 'selected' : ''; ?> >2</option>
                                                                <option value="3" <?php echo ( $per_page === 3 ) ? 'selected' : ''; ?> >3</option>
                                                                <option value="4" <?php echo ( $per_page === 4 ) ? 'selected' : ''; ?> >4</option>
                                                                <option value="5" <?php echo ( $per_page === 5 ) ? 'selected' : ''; ?> >5</option>
                                                                <option value="6" <?php echo ( $per_page === 6 ) ? 'selected' : ''; ?> >6</option>
                                                                <option value="7" <?php echo ( $per_page === 7 ) ? 'selected' : ''; ?> >7</option>
                                                                <option value="8" <?php echo ( $per_page === 8 ) ? 'selected' : ''; ?> >8</option>
                                                                <option value="9" <?php echo ( $per_page === 9 ) ? 'selected' : ''; ?> >9</option>
                                                                <option value="10" <?php echo ( $per_page === 10 ) ? 'selected' : ''; ?> >10</option>
                                                                <option value="15" <?php echo ( $per_page === 15 ) ? 'selected' : ''; ?> >15</option>
                                                                <option value="20" <?php echo ( $per_page === 20 ) ? 'selected' : ''; ?> >20</option>
                                                                <option value="30" <?php echo ( $per_page === 30 ) ? 'selected' : ''; ?> >30</option>
                                                                <option value="40" <?php echo ( $per_page === 40 ) ? 'selected' : ''; ?> >40</option>
                                                                <option value="50" <?php echo ( $per_page === 50 ) ? 'selected' : ''; ?> >50</option>
                                                                <option value="100" <?php echo ( $per_page === 100 ) ? 'selected' : ''; ?> >100</option>
                                                                <option value="200" <?php echo ( $per_page === 200 ) ? 'selected' : ''; ?> >200</option>
                                                                <option value="300" <?php echo ( $per_page === 300 ) ? 'selected' : ''; ?> >300</option>
                                                                <option value="400" <?php echo ( $per_page === 400 ) ? 'selected' : ''; ?> >400</option>
                                                                <option value="500" <?php echo ( $per_page === 500 ) ? 'selected' : ''; ?> >500</option>
                                                                <option value="1000" <?php echo ( $per_page === 1000 ) ? 'selected' : ''; ?> >1000</option>
                                                                <option value="" <?php echo ( $per_page === 0 ) ? 'selected' : ''; ?> >All</option>
                                                            </select>                                
                                                        </div>
                                                        
                                                        <div class="sfdc-form-group">
                                                            <label class="sfdc-filter-col" style="margin-right:0;" for="zgfm-listform-pref-search">Search:</label>
                                                            <div class="sfdc-input-group">
                                                                <input type="text" class="sfdc-form-control sfdc-input-sm" value="<?php echo 0; ?>" id="zgfm-listform-pref-search" name="zgfm-listform-pref-search">
                                                                <span class="sfdc-input-group-btn">
                                                                    <button class="sfdc-btn sfdc-btn-default sfdc-btn-sm" type="button"><span class="sfdc-glyphicon sfdc-glyphicon-search"></span></button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="sfdc-form-group">
                                                            @php $orderby = $data2['orderby'] @endphp 
                                                            <label class="sfdc-filter-col" style="margin-right:0;" for="zgfm-listform-pref-orderby">Order by:</label>
                                                            <select id="zgfm-listform-pref-orderby" name="zgfm-listform-pref-orderby" class="sfdc-form-control">
                                                                <option value="desc" <?php echo ( $orderby == 'desc' ) ? 'selected' : ''; ?> >Descendent</option>
                                                                <option value="asc" <?php echo ( $orderby == 'asc' ) ? 'selected' : ''; ?> >Ascendent</option>
                                                            </select>                                
                                                        </div> 
                                                        
                                                        <div class="sfdc-form-group">  
                                                            <a href="javascript:void(0);" onclick="javascript:zgfm_back_general.formslist_search_refresh_save();" class="sfdc-btn sfdc-btn-default sfdc-filter-col">
                                                                <span class="sfdc-glyphicon sfdc-glyphicon-record"></span> Save Settings
                                                            </a>  
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>   
                                        
                                    </div>
                                    <div id="zgfm-back-listform-maintable-container" class="sfdc-clearfix"></div>
                                </div> 
                            </div> 
                        </div>
                        </div>
                    </div>
                    
                    
                    
                    <div style="display:none;">
                        @php $offset = $data2['offset'] @endphp
                        <input type="hidden" id="uifm_listform_popup_title" value="List form information" >
                        <input type="hidden" id="uifm_listform_offset_val" value="<?php echo $offset; ?>" >
                        <input type="hidden" id="uifm_listform_popup_notforms" value="there is no forms selected. select one at least" >
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jscode')
    <script>
        jQuery(document).ready(function ($) {
            $('#zgfm-listform-filter-panel').on('shown.bs.collapse', function (e) {
                /* Get clicked element that initiated the collapse...*/
                var $clickedBtn = $(e.target).data('bs.collapse').$trigger;
                /*add active to button*/
                $clickedBtn.addClass('sfdc-active');
            });
            $('#zgfm-listform-filter-panel').on('hidden.bs.collapse', function (e) {
                /* Get clicked element that initiated the collapse...*/
                var $clickedBtn = $(e.target).data('bs.collapse').$trigger;
                /*remove active to button*/
                $clickedBtn.removeClass('sfdc-active');
            });
            
            /*list form refresh params*/
            /*event filter */
            $(document).on( "keyup change","#zgfm-listform-pref-perpage,#zgfm-listform-pref-search,#zgfm-listform-pref-orderby" , function(e) {
                zgfm_back_general.formslist_search_refresh();
            });
            
            /*trigger filter */
            zgfm_back_general.formslist_search_refresh();
            
        });
    </script>
@endsection
