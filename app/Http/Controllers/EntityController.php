<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntityStoreRequest;
use App\Http\Requests\EntityUpdateRequest;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Entity;
use App\Models\CustomeForm;
use App\Models\EntityData;
use App\Models\EntityDataValue;
use App\Models\HelperModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;

class EntityController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $entities = Entity::where('company_id', $request->user()->company_id)->paginate();

        return view('entity.index', compact('entities'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Entity $entity)
    {
        return view('entity.create', compact('entity'));
    }

    protected function getCompanyDir(Request $request, $dir = 'test')
    {
        $companyId = $request->user()->company_id;
        $companyDir = DOC_ROOT . UPLOADS_DIR . DIR_SEP . $companyId;
        if(!is_dir($companyDir)) {
            mkdir($companyDir, 0777, true);
        }
        if(!is_dir($companyDir . DIR_SEP . $dir)) {
            mkdir($companyDir . DIR_SEP . $dir, 0777, true);
        }

        return $companyDir . DIR_SEP . $dir;
    }

    /**
     * @param \App\Http\Requests\EntityStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntityStoreRequest $request)
    {
        
        
        $uploadResult = HelperModel::uploadFile($request, [
            'fieldName' => 'icon',
            'allowedExtensions' => ALLOWED_IMAGE_EXT,
            'uploadPath' => $this->getCompanyDir($request, ENTITY_DIR),
        ]);

        if(!$uploadResult['result']) {
            $output = [
                'status' => false,
                'info' => $uploadResult['error'],
            ];
        } else {
            $entity = new Entity();
            $entity->parent_id = $request->parent_id;
            $entity->has_childs = $request->has_childs;
            $entity->icon = $uploadResult['fileData'];
            $entity->heading = $request->heading;
            $entity->slug = Str::slug($request->heading);
            $entity->description = $request->description;
            $entity->menu_title = $request->menu_title;
            $entity->show_in_menu = $request->show_in_menu;
            $entity->published = $request->published;
            $entity->company_id = $request->user()->company_id;
            $entity->save();
    
            $output = [
                'status' => true,
                'info' => 'Entity added successful!',
                'nexturl' => route('entity.index')
            ];
        }

        return response()->json($output);

    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Entity $entity
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Entity $entity)
    {
        return view('entity.show', compact('entity'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Entity $entity
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Entity $entity)
    {
        return view('entity.edit', compact('entity'));
    }

    /**
     * @param \App\Http\Requests\EntityUpdateRequest $request
     * @param \App\Models\Entity $entity
     * @return \Illuminate\Http\Response
     */
    public function update(EntityUpdateRequest $request, Entity $entity)
    {
        $companyId = $request->user()->company_id;
        if(!empty($_FILES['icon']['tmp_name'])) {
            $companyDir = DOC_ROOT . UPLOADS_DIR . DIR_SEP . $companyId;
        
            $uploadResult = HelperModel::uploadFile($request, [
                'fieldName' => 'icon',
                'allowedExtensions' => ALLOWED_IMAGE_EXT,
                'uploadPath' => $companyDir . DIR_SEP . 'entity',
            ]);
            $icon = $uploadResult['fileData'];
        } else {
            $icon = $entity->icon;
        }

        $entity->parent_id = $request->parent_id;
        $entity->has_childs = $request->has_childs;
        $entity->icon = $icon;
        $entity->heading = $request->heading;
        $entity->slug = Str::slug($request->heading);
        $entity->description = $request->description;
        $entity->menu_title = $request->menu_title;
        $entity->show_in_menu = $request->show_in_menu;
        $entity->published = $request->published;
        $entity->company_id = $request->user()->company_id;
        $entity->save();

        $output = [
            'status' => true,
            'info' => 'Entity updated successful!',
            'nexturl' => route('entity.index')
        ];

        return response()->json($output);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Entity $entity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Entity $entity)
    {
        $entity->delete();

        return redirect()->route('entity.index');
    }

    public function updateAttributeField(Request $request)
    {
        if(empty($request->entity_id)) {
            $output = [
                'status' => false,
                'info' => 'Invalid attempt!',
            ];
            return response()->json($output);
        }

        $validEntity = Entity::where('id', $request->entity_id)->where('company_id', $request->user()->company_id)->first();
        if(!$validEntity) {
            $output = [
                'status' => false,
                'info' => 'Invalid entity provided!',
            ];
            return response()->json($output);
        }

        $attribute = Attribute::where('entity_id', $validEntity->id)->where('id', (int)$request->attribute_id)->first();
        if(!$attribute) {
            $output = [
                'status' => false,
                'info' => 'Invalid attribute opted!',
            ];
            return response()->json($output);
        }

        $data = $request->except('_token', 'entity_id', 'attribute_id', 'validation_rules');
        if($request->hasFile('excel_file')) {
            $uploadResult = HelperModel::uploadFile($request, [
                'fieldName' => 'excel_file',
                'allowedExtensions' => ALLOWED_EXCELS_EXT,
                'uploadPath' => $this->getCompanyDir($request, SELECT_EXCELS),
            ]);
        }
        $filepathImport = '';
        foreach($data as $k => $v) {
            $attributeValue = AttributeValue::where('entity_id', $validEntity->id)->where('attribute_id', $attribute->id)->where('key', $k)->first();
            if(empty($attributeValue)) {
                $attributeValue = new AttributeValue();
            }
            $attributeValue->entity_id = $validEntity->id;
            $attributeValue->attribute_id = $attribute->id;
            if($attributeValue->key == 'excel_file' && !empty($uploadResult['fileData'])) {
                $attributeValue->key = $k;
                $attributeValue->value = $uploadResult['fileData'];
                // set options data as json
                $filepathImport = DOC_ROOT . $attributeValue->value;
                // set options data as json
            } else {
                $attributeValue->key = $k;
                $attributeValue->value = $v;
            }
            $attributeValue->is_default = !empty($request->is_default) ? $request->is_default : FIELD_ATTRIB;
            $attributeValue->save();
        }

        // save the validation rules for the attribute
        $attributeValue = AttributeValue::where('entity_id', $validEntity->id)->where('attribute_id', $attribute->id)->where('key', 'validation_rules')->first();
        if(empty($attributeValue)) {
            $attributeValue = new AttributeValue();
        }
        $validationRules = json_encode($request->validation_rules);
        $attributeValue->entity_id = $validEntity->id;
        $attributeValue->attribute_id = $attribute->id;
        $attributeValue->key = 'validation_rules';
        $attributeValue->value = $validationRules;
        $attributeValue->is_default = !empty($request->is_default) ? $request->is_default : FIELD_ATTRIB;
        $attributeValue->save();
        // save the validation rules for the attribute

        if(!empty($filepathImport)) {
            if(file_exists($filepathImport)) {
                $excel = \Importer::make('Excel');
                $excel->load($filepathImport);
                $collection = $excel->getCollection()->toArray();
                $attributeValue = AttributeValue::where('entity_id', $validEntity->id)->where('attribute_id', $attribute->id)->where('key', 'json_data')->first();
                if(!empty($attributeValue)) {
                    $attributeValue->value = $collection;
                    $attributeValue->save();
                    
                }
            }
        }

        $output = [
            'status' => true,
            'info' => 'Proerty updated!',
        ];

        return response()->json($output);
    }

    public function alotAttributeField(Request $request)
    {
        $fieldTypes = array_keys(FIELD_TYPES);
        $errors = [];
        if(empty($request->propertyName)) {
            $errors[] = 'Please enter property name!';
        }
        if(empty($request->propertyType)) {
            $errors[] = 'Please select property type!';
        } elseif(!in_array($request->propertyType, $fieldTypes)) {
            $errors[] = 'Invalid property type!';
        }
        // if(empty($request->entityId)) {
        //     $errors[] = 'No entity selected!';
        // } else {
            // $entity = Entity::where('id', $request->entityId)->where('company_id', $request->user()->company_id)->first();
            $entity = CustomeForm::where('id', $request->entityId)->first();
            if(empty($entity)) {
                // $errors[] = 'Invalid entity selected!';
                $entity = CustomeForm::create([
                    'user_id' => Auth::user()->id,
                    'name' => $request->name,
                    'visibility' => $request->visibility,
                ]);
            }
        // }
        
        if(sizeof($errors) > 0) {
            $output = [
                'status' => false,
                'info' => @implode('<br>', $errors)
            ];
        } else {
            $propertyName = $request->propertyName;
            $propertyType = $request->propertyType;
            $entityId = $request->entityId;
            $attribute = Attribute::whereHas('entity', function($q) use($entity, $request){
                $q->where('company_id', $request->user()->company_id)->where('id', $entity->id);
            })->where('entity_id', $entity->id)->where('slug', $propertyName)->first();
            if(!empty($attribute)) {
                $output = [
                    'status' => false,
                    'info' => 'Property already exists!'
                ];
            } else {
                $validationFieldsHtml = '<h5>Validations</h5><hr/><div class="row">';
                $validationFldArr = HelperModel::drawEntityValidations(['field' => $propertyType]);
                foreach($validationFldArr as $validationFld) {
                    $validationFieldsHtml.='
                        <div class="col-md-3">
                            <div class="form-group">'.$validationFld.'</div>
                        </div>
                    ';
                }
                $validationFieldsHtml.='</div>';

                $attributeVar = new Attribute();
                $attributeVar->entity_id = $entityId;
                $attributeVar->slug = $propertyName;
                $attributeVar->attribute_type = array_search($propertyType, FIELD_TYPES_INDEX);
                $attributeVar->has_options = !empty($request->hasOptions) ? $request->hasOptions : NO;
                $attributeVar->options_source = !empty($request->options_source) ? $request->options_source : NO;
                $attributeVar->options_source_file = !empty($request->options_source_file) ? $request->options_source_file : NO;
                $attributeVar->options_source_api = !empty($request->options_source_api) ? $request->options_source_api : NO;
                $attributeVar->options_source_json = !empty($request->options_source_json) ? $request->options_source_json : NO;
                $attributeVar->options_source_key = !empty($request->options_source_key) ? $request->options_source_key : NO;
                $attributeVar->options_source_value = !empty($request->options_source_value) ? $request->options_source_value : NO;
                $attributeVar->options_entity_id = !empty($request->options_entity_id) ? $request->options_entity_id : NO;
                $attributeVar->published = !empty($request->published) ? $request->published : NO;
                $attributeVar->save();

                $fldAttribs = FIELD_ATTRIBUTES[$propertyType];
                $fieldProps = [];
                $fieldProps[] = '<input type="hidden" name="attribute_id" class="attribute_id attribute_id'.$attributeVar->id.'" value="'.$attributeVar->id.'"/>';
                $fieldProps[] = '<input type="hidden" name="entity_id" class="entity_id entity_id'.$attributeVar->id.'" value="'.$entity->id.'"/>';
                foreach($fldAttribs as $attVar) {
                    if($attPropHtml = $this->renderPropertyAttribute($attVar, $entity->id)) {
                        $fieldProps[] = $attPropHtml;
                        $attributeValue = new AttributeValue();
                        $attributeValue->entity_id = $entity->id;
                        $attributeValue->attribute_id = $attributeVar->id;
                        $attributeValue->key = $attVar;
                        $attributeValue->value = NO;
                        $attributeValue->is_default = FIELD_ATTRIB;
                        $attributeValue->save();
                    }
                }

                
                $output = [
                    'status' => true,
                    'entityId' => $entity->id,
                    'attributeId' => $attributeVar->id,
                    'info' => 'Property alloted!',
                    'fieldProps' => $fieldProps,
                    'postAction' => 'alot-property',
                    'validationFields' => $validationFieldsHtml
                ];
            }
        }
        
        return response()->json($output);
    }
    
    protected function renderPropertyAttribute($attribute, $entityId = 0, $val = '')
    {
        return HelperModel::renderPropertyAttribute([
            'attribute' => $attribute,
            'entityId' => $entityId,
            'val' => $val,
        ]);
    }

    protected function getEntityInfo(Request $request, $entityid)
    {
        return Entity::with('attributes')->where('id', $entityid)->where('company_id', $request->user()->company_id)->first();
    }

    public function addEntityRecords(Request $request, $entityid)
    {
        $entity = $this->getEntityInfo($request, $entityid);

        return view('entity.entity-rec-add', compact('entity'));
    }

    public function saveEntityRecords(Request $request, $entityid)
    {
        $entity = $this->getEntityInfo($request, $entityid);

        $entityData = new EntityData();
        $entityData->company_id = $request->user()->company_id;
        $entityData->entity_id = $entityid;
        $entityData->user_id = $request->user()->id;
        $entityData->device = $request->server('HTTP_USER_AGENT');;
        $entityData->ip = $request->server('REMOTE_ADDR');;
        $entityData->client_id = empty($request->client_id) ? NO : $request->client_id;
        $entityData->save();
        $data = $request->except('_token');
        foreach($data as $k => $v) {
            $attributeValue = HelperModel::entityAttributeFieldId($k);
            $entityDataValue = new EntityDataValue();
            $entityDataValue->entity_data_id = $entityData->id;
            $entityDataValue->attribute_id = $attributeValue->attribute_id;
            $entityDataValue->attribute_value_id = $attributeValue->id;
            $entityDataValue->attribute_entity_value = $v;
            $entityDataValue->save();
        }

        $output = [
            'status' => true,
            'info' => $entity->heading . ' saved!',
            'nexturl' => route('list.entity.records', ['entityid' => $entity->id])
        ];

        return response()->json($output);
    }

    public function listEntityRecords(Request $request, $entityid)
    {
        $entity = $this->getEntityInfo($request, $entityid);
        if(!$entity) {
            Session::flash('error', 'Access violation!');
            return redirect(route('home'));
        }
        $records = EntityData::with('entityDataValues')->where('entity_id', $entity->id)->paginate();
        return view('entity.entityrecs')->with([
            'entity' => $entity,
            'records' => $records,
        ]);
    }

}
