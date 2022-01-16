<script>
    const FIELD_TYPES = jQuery.parseJSON('{!! json_encode(FIELD_TYPES) !!}');
    function convertToSlug(Text) {
    return Text.toLowerCase()
                .replace(/ /g, '-')
                .replace(/[^\w-]+/g, '');
    }

    $(".slugSource").keyup(function(){
        var src = $(this).val();
        if($.trim(src)) {
            var slug = convertToSlug(src);
            $('.slugDestination').val(slug);
        }
    });

    $('.frmMain').submit(function(event) {
        event.preventDefault();
        $('.errorFld').remove();
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            dataType: "JSON",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(data, status) {
                console.log(data);
                if (data.status == false) {
                    toastr.error(data.info);
                } else {
                    toastr.success(data.info);
                    if (typeof(data.nexturl) != 'undefined') {
                        setTimeout(window.location.href = data.nexturl, 3000);
                    }
                }
            },
            error: function(err) {
                if (err.status == 422) { // when status code is 422, it's a validation issue
                    console.log(err.responseJSON);
                    var errorMsg = '';
                    errorMsg += '<strong>' + err.responseJSON.message + '</strong><br>';
                    toastr.error(errorMsg);

                    // you can loop through the errors object and show it to the user
                    console.warn(err.responseJSON.errors);
                    // display errors on each form field
                    $.each(err.responseJSON.errors, function(i, error) {
                        var el = $(document).find('[name="' + i + '"]');
                        el.after($('<span class="text-danger errorFld">' + error[0] + '</span>'));
                        errorMsg += error[0] + '<br>';
                    });
                }
            }
        });
        return false;
    });

    function processTheChildForm(frm) {
        $.ajax({
            url: $(frm).attr("action"),
            type: $(frm).attr("method"),
            dataType: "JSON",
            data: new FormData(frm),
            processData: false,
            contentType: false,
            success: function(data, status) {
                if (data.status == false) {
                    toastr.error(data.info);
                } else {
                    toastr.success(data.info);
                    if(typeof(data.postAction) != 'undefined') {
                        switch(data.postAction) {
                            case 'alot-property':
                                if(typeof(data.fieldProps) != 'undefined') {
                                    var attribsList = '';
                                    for(var i = 0; i < data.fieldProps.length; i++) {
                                        if(data.fieldProps[i].indexOf('<input type="hidden"') != -1) {
                                            attribsList+= data.fieldProps[i];
                                        } else {
                                            attribsList+= '<div class="col-md-3">' + data.fieldProps[i] + "</div>";
                                        }
                                    }
                                    var entityId = data.entityId;
                                    var attributeId = data.attributeId;
                                    var idKey = ''+entityId+'_'+attributeId+''
                                    var htmlSTR = '\
                                                <form method="post" class="update-entity-attribute'+attributeId+'" action="{{ route('entity.update.attribute') }}" enctype="multipart/form-data" onsubmit="return processTheChildForm(this);">\
                                                    <input type="hidden" name="_token" value="'+frm._token.value+'"/>\
                                                    <div class="col-md-12 mb-3 attributeTypeHolder attributeTypeHolder'+idKey+'">\
                                                        <div class="card">\
                                                            <div class="card-header"> ' + frm.propertyName.value + '\
                                                            <span class="text-info float-right mx-2 viewPanelBtn'+attributeId+'" onclick="$(\'.fieldPanel'+attributeId+'\').toggleClass(\'d-none\');$(\'.viewPanelBtn'+attributeId+'\').toggleClass(\'d-none\');$(\'.hidePanelBtn'+attributeId+'\').toggleClass(\'d-none\');"><i class="fa fas fa-eye"></i> View</span><span class="text-danger float-right mx-2">' + FIELD_TYPES[frm.propertyType.value] + '</span>\
                                                            <span class="text-danger d-none float-right mx-2 hidePanelBtn'+attributeId+'" onclick="$(\'.fieldPanel'+attributeId+'\').toggleClass(\'d-none\');$(\'.viewPanelBtn'+attributeId+'\').toggleClass(\'d-none\');$(\'.hidePanelBtn'+attributeId+'\').toggleClass(\'d-none\');"><i class="fa fas fa-eye-slash"></i> Hide</span>\
                                                        </div>\
                                                            <div class="card-body d-none fieldPanel'+attributeId+'">\
                                                                <div class="row">\
                                                                ' + attribsList + '\
                                                                </div>\
                                                                <div class="row mt-3">\
                                                                    <div class="col-md-12">\
                                                                    '+data.validationFields+'\
                                                                    </div>\
                                                                </div>\
                                                                <div class="row mt-3">\
                                                                    <div class="col-md-12 text-right">\
                                                                        <button class="btn btn-primary btn-sm">\
                                                                            <i class="fa fas fa-save"></i> Assign Property\
                                                                        </button>\
                                                                        <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="removeProperty(\'' + entityId + '\', \'' + attributeId + '\', \'' + idKey + '\')">\
                                                                            <i class="fa fas fa-trash"></i> Remove Property\
                                                                        </a>\
                                                                    </div>\
                                                                </div>\
                                                            </div>\
                                                        </div>\
                                                    </div>\
                                                </form>\
                                                ';
                                    $(".attribListings").append(htmlSTR);
                                } else {
                                    toastr.info('No properties returned!');
                                    return false;
                                }
                                break;
                        }
                    }
                }
            },
            error: function(err) {
                if (err.status == 422) { // when status code is 422, it's a validation issue
                    console.log(err.responseJSON);
                    var errorMsg = '';
                    errorMsg += '<strong>' + err.responseJSON.message + '</strong><br>';
                    toastr.error(errorMsg);

                    // you can loop through the errors object and show it to the user
                    console.warn(err.responseJSON.errors);
                    // display errors on each form field
                    $.each(err.responseJSON.errors, function(i, error) {
                        var el = $(document).find('[name="' + i + '"]');
                        el.after($('<span class="text-danger errorFld">' + error[0] + '</span>'));
                        errorMsg += error[0] + '<br>';
                    });
                } else {
                    toastr.error('Something went wrong, Please try again later!')
                }
            }
        });
        return false;
    }

    function removeProperty(e,a,k) {
        var ans = confirm("Are you sure you want to remove this property?\n The process will remove the property and its data and cannot be reverted back.\nPress OK to delete.\nPress Cancel to abort removal!");
        if(ans == true) {
            $(".attributeTypeHolder"+k).remove();
        }
    }
</script>

<script>
    $(document).ready(function() {
        $('.selectChoice').select2();
        $(".selectAutocomplete").select2({
            minimumInputLength: 2,
            tags: [],
            ajax: {
                url: $(this).attr('data-url'),
                dataType: 'json',
                type: "GET",
                quietMillis: 50,
                data: function (term) {
                    return {
                        term: term
                    };
                },
                results: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.completeName,
                                slug: item.slug,
                                id: item.id
                            }
                        })
                    };
                }
            }
        });

        $(".add-new-property").click(function(){
            let fieldprop = $("#fieldprop").val();
            let fieldtype = $("#fieldtype").val();
        });
    });
    

    function populateAttribute(fieldprop, fieldtype) {
        if(!fieldprop) {
            toastr.error('Please enter the property name!');
            return false;
        }
        switch(fieldtype) {
            default:
                toastr.error('Invalid ')
                break;
        }
    }
</script>

<script>
    $(document).ready(function() {
        $('.htmlInput').summernote({
            height: 300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    sendFile(files[0], editor, welEditable);
                }
            }
        });

        function sendFile(file, editor, welEditable) {
            data = new FormData();
            data.append("file", file);
            $.ajax({
                data: data,
                type: "POST",
                url: "{{ route('tempuploads') }}",
                cache: false,
                contentType: false,
                processData: false,
                success: function(result) {
                    var response = jQuery.parseJSON(result);
                    console.log(response);
                    if(response.status == false) {
                        toastr.error(response.info);
                        return false;
                    } else {
                        $('.rtfEditor').summernote('editor.insertImage', '/uploads/tempUploads/' + response.info);
                    }
                }
            });
        }
    });
</script>
