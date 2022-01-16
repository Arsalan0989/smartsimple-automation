@extends('layouts.app-ui')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Add new ') . $entity->heading }}</div>
                <div class="card-body">
                    <form class="frmMain" method="post"
                        action="{{ route('save.entity.records', ['entityid' => $entity->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            @php
                                $autoCompleteVars = [];
                            @endphp
                            @foreach ($entity->attributes as $attribute)
                                @php
                                    $fieldAttributes = [];
                                    foreach ($attribute->attributeValues as $attributeValue) {
                                        $fieldAttributes[$attributeValue->key] = $attributeValue->value;
                                        if ($attributeValue->key == 'excel_file') {
                                            $filepath = DOC_ROOT . $attributeValue->value;
                                            if (file_exists($filepath)) {
                                                $excel = \Importer::make('Excel');
                                                $excel->load($filepath);
                                                $collection = $excel->getCollection()->toArray();
                                                $fieldAttributes['options'] = $collection;
                                            }
                                        }
                                    }
                                    $renderingFieldData = $helperModel->renderFormField([
                                        'field' => FIELD_TYPES_INDEX[$attribute->attribute_type],
                                        'attributes' => $fieldAttributes,
                                    ]);
                                    $renderDivClass = FIELD_TYPES_INDEX[$attribute->attribute_type] == 'textarea' || FIELD_TYPES_INDEX[$attribute->attribute_type] == 'htmleditor' ? 'col-md-12' : 'col-md-4';
                                    if(!empty($renderingFieldData['autocompleteClass'])) {
                                        $autoCompleteVars[] = [
                                            'selector' => $renderingFieldData['autocompleteClass'],
                                            'url' => $renderingFieldData['autocompleteUrl'],
                                        ];
                                    }
                                @endphp
                                <div class="{{ $renderDivClass }}">
                                    @if($renderingFieldData['render'] == 'single')
                                    <div class="form-group">
                                        {!! $renderingFieldData['fields'] !!}
                                    </div>
                                    @elseif($renderingFieldData['render'] == 'double')
                                    <div class="form-group">
                                        {!! $renderingFieldData['label'] !!} (start)
                                        {!! $renderingFieldData['min'] !!}
                                    </div>
                                    <div class="form-group">
                                        {!! $renderingFieldData['label'] !!} (end)
                                        {!! $renderingFieldData['max'] !!}
                                    </div>
                                    @else
                                    @foreach ($renderingFieldData['fields'] as $fld)
                                    <div class="form-group">
                                        {!! $fld !!}
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-success btn-sm"><i class="fa fas fa-save"></i> Save
                                    {{ $entity->heading }}</button>
                                <a href="{{ route('list.entity.records', ['entityid' => $entity->id]) }}"
                                    class="btn btn-danger btn-sm"><i class="fa fas fa-times"></i> Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jscode')
@if(!empty($autoCompleteVars) && is_array($autoCompleteVars) && sizeof($autoCompleteVars) > 0)
    @foreach ($autoCompleteVars as $autoCompleteVar)
    <script>
        $(".{{ $autoCompleteVar['selector'] }}").select2({
            minimumInputLength: 2,
            tags: [],
            ajax: {
                url: "{{ route('external.api.data') . '?url='.$autoCompleteVar['url'] }}",
                dataType: 'json',
                type: "GET",
                quietMillis: 50,
                data: function (term) {
                    return {
                        term: term
                    };
                },
                processResults: function (response) {
                    console.log('DATA: ', response);
                    return {
                        results: response
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
    </script>
        
    @endforeach
@endif
@endsection
