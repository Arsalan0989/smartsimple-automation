<div class="row mt-2">
    <div class="col-md-2 border-right h80-auto">
        <h5 class="text-primary">Assign new property</h5>
        <form method="post" action="{{ route('entity.alot.attribute') }}" class="frm-alot-property" onsubmit="return processTheChildForm(this)">
            @csrf
            <input type="hidden" name="entityId" value="{{ $entity->id }}">
            <div class="form-group">
                <label for="propertyName">Property name</label>
                <input type="text" class="form-control" id="propertyName" name="propertyName">
            </div>
            <div class="form-group">
                <label for="propertyType">Property type</label>
                <select name="propertyType" id="propertyType" class="form-control">
                    <option value="">Select type</option>
                    @foreach(FIELD_TYPES as $k => $v)
                    <option value="{{ $k }}">{{ $v }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group text-center">
                <button  class="btn btn-info btn-md add-new-property">Assign Property</button>
            </div>
        </form>
    </div>
    <div class="col-md-10 h80-auto">
        <h5 class="text-primary">Alloted properties</h5>
        <span class="text-danger">Enter the property name and select the property type on left to alot new property to entity: <strong>{{ $entity->heading}} </strong></span>
        <div class="row attribListings">
            @if($entity->attributes->count() > 0)
                @foreach($entity->attributes as $attribute)
                <form method="post" class="update-entity-attribute{{ $attribute->id }}" action="{{ route('entity.update.attribute') }}" enctype="multipart/form-data"  onsubmit="return processTheChildForm(this);">
                    @csrf
                    <div class="col-md-12 mb-3 attributeTypeHolder attributeTypeHolder{{ $entity->id }}_{{ $attribute->id }}">
                        <div class="card">
                            <div class="card-header">{{ $attribute->slug }} 
                                <span class="text-info float-right mx-2 viewPanelBtn{{ $attribute->id }}" onclick="$('.fieldPanel{{ $attribute->id }}').toggleClass('d-none');$('.viewPanelBtn{{ $attribute->id }}').toggleClass('d-none');$('.hidePanelBtn{{ $attribute->id }}').toggleClass('d-none');"><i class="fa fas fa-eye"></i> View</span>
                                <span class="text-danger float-right mx-2 d-none hidePanelBtn{{ $attribute->id }}" onclick="$('.fieldPanel{{ $attribute->id }}').toggleClass('d-none');$('.viewPanelBtn{{ $attribute->id }}').toggleClass('d-none');$('.hidePanelBtn{{ $attribute->id }}').toggleClass('d-none');"><i class="fa fas fa-eye-slash"></i> Hide</span>
                                <span class="text-danger float-right mx-2">{{ FIELD_TYPES[FIELD_TYPES_INDEX[$attribute->attribute_type]] }}</span>
                                <span class="text-primary float-right mx-2">
                                    <strong>Shortcode: </strong>
                                    @php
                                        echo htmlspecialchars('<EAV key="'. $entity->id . '--' . $attribute->id . '">');
                                    @endphp
                                </span>
                            </div>
                            <div class="card-body d-none fieldPanel{{ $attribute->id }}">
                                <div class="row">
                                    <input type="hidden" name="attribute_id" class="attribute_id attribute_id{{ $attribute->id }}" value="{{ $attribute->id }}"/>
                                    <input type="hidden" name="entity_id" class="entity_id entity_id{{ $entity->id }}" value="{{ $entity->id }}"/>
                                    @foreach($attribute->attributeValues as $atVal)
                                        @if($atVal->key != 'validation_rules')
                                            <div class="col-md-3">
                                                {!! $helperModel->renderPropertyAttribute(['attribute' => $atVal->key, 'entityId' => $entity->id, 'val' => $atVal->value]) !!}
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12 text-right">
                                        @php
                                            $oldValuesData = $attribute->attributeValues->where('key', 'validation_rules')->first();
                                            if(empty($oldValuesData)) {
                                                $oldValues = [];
                                            } else {
                                                $oldValues = json_decode($oldValuesData->value, true);
                                            }

                                            $propertyType = FIELD_TYPES_INDEX[$attribute->attribute_type];
                                            $validationFieldsHtml = '<h5>Validations</h5><hr/><div class="row">';
                                            $validationFldArr = $helperModel->drawEntityValidations(['field' => $propertyType, 'oldValues' => $oldValues]);
                                            foreach($validationFldArr as $validationFld) {
                                                $validationFieldsHtml.='
                                                    <div class="col-md-3">
                                                        <div class="form-group">'.$validationFld.'</div>
                                                    </div>
                                                ';
                                            }
                                            $validationFieldsHtml.='</div>';
                                        @endphp
                                        {!!
                                            $validationFieldsHtml
                                        !!}
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary btn-sm">
                                            <i class="fa fas fa-save"></i> Assign Property
                                        </button>
                                        <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="removeProperty('{{ $entity->id }}', '{{ $attribute->id }}', '{{ $entity->id }}_{{ $attribute->id }}')">
                                            <i class="fa fas fa-trash"></i> Remove Property
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @endforeach
            @endif
        </div>
    </div>
</div>