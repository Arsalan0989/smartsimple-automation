<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelperModel extends Model
{
    use HasFactory;

    public static function uploadFile($request, $params = [])
    {
        $output = ['result' => false, 'fileUploaded' => '', 'error' => ''];
        $fieldName = $params['fieldName'];
        $allowedExtensions = $params['allowedExtensions'];
        $uploadPath = $params['uploadPath'];
        $file = $request->file($fieldName);
        $fileExtension = strtolower($file->getClientOriginalExtension());
        $fileName = md5(uniqid()).'.'.$fileExtension;
        if(!in_array($fileExtension, $allowedExtensions)) {
            $output = ['result' => false, 'fileUploaded' => '', 'error' => 'Only following types of files are allowed to upload: '.@implode(",", $allowedExtensions)];
        } else {
            //Move Uploaded File
            $destinationPath = $uploadPath;
            $file->move($destinationPath,$fileName);
            $output = [
                'result' => true, 
                'fileUploaded' => $uploadPath . $fileName, 
                'fileData' => str_replace(DOC_ROOT, '', $uploadPath) . DIR_SEP . $fileName, 
                'error' => ''
            ];
        }
        return $output;
    }

    public static function attribTextField($params = []) {
        return '<div class="form-group"><label>' . $params['label'] . (!empty($params['yesnotip']) ? '<span class="text-danger">(0 = No, 1 = Yes)</span>' : '') . '</label><input class="form-control ' . $params['key'] . 'Fld labelFld'.$params['entity'].'" type="'.(empty($params['type']) ? 'text' : $params['type']).'" name="' . $params['name'] . '" value="'.$params['val'].'"/></div>';
    }

    public static function attribFileField($params = []) {
        $downloadLink = '';
        if(file_exists(DOC_ROOT . DOWNLOADS_DIR . DIR_SEP . $params['name'].'.xlsx')) {
            $downloadLink = asset(DOWNLOADS_DIR . DIR_SEP . $params['name'].'.xlsx');
        }
        return '<div class="form-group"><label>' . $params['label'] . (!empty($params['yesnotip']) ? '<span class="text-danger">(0 = No, 1 = Yes)</span>' : '') . '</label><input class="form-control ' . $params['key'] . 'Fld labelFld'.$params['entity'].'" type="'.(empty($params['type']) ? 'file' : $params['type']).'" name="' . $params['name'] . '"/>'.(!empty($downloadLink) ? '<a href="'.$downloadLink.'" class="d-block" target="_blank"><i class="fa fas fa-download"></i> Download sample</a>' : '').'</div>';
    }

    public static function attribTextArea($params = []) {
        return '<div class="form-group"><label>' . $params['label'] . (!empty($params['yesnotip']) ? '<span class="text-danger">(0 = No, 1 = Yes)</span>' : '') . '</label><textarea class="form-control ' . $params['key'] . 'Fld labelFld'.$params['entity'].'"  name="' . $params['name'] . '">'.$params['val'].'</textarea></div>';
    }

    public static function renderPropertyAttribute($params = []) {
        $attribute = $params['attribute'];
        $entityId = $params['entityId'];
        $val = $params['val'];
        switch($attribute)
        {
            default:
            case 'label':
            case 'label_class':
            case 'step':
            case 'name':
            case 'id':
            case 'class':
            case 'placeholder':
                return self::attribTextField([
                    'label' => ucwords(str_replace('_',' ',$attribute)),
                    'key' => $attribute,
                    'entity' => $entityId,
                    'name' => $attribute,
                    'val' => $val,
                    'type' => 'text',
                ]);
                break;
            case 'readonly':
            case 'disabled':
            case 'is_multiple':
                return self::attribTextField([
                    'label' => ucwords(str_replace('_',' ',$attribute)),
                    'key' => $attribute,
                    'entity' => $entityId,
                    'name' => $attribute,
                    'val' => $val,
                    'type' => 'number',
                    'yesnotip' => true,
                ]);
                break;
            case 'rows':
            case 'max':
            case 'min':
            case 'rows':
            case 'cols':
            case 'height':
            case 'width':
            case 'has_autocomplete':
                return self::attribTextField([
                    'label' => ucwords(str_replace('_',' ',$attribute)),
                    'key' => $attribute,
                    'entity' => $entityId,
                    'name' => $attribute,
                    'val' => $val,
                    'type' => 'number',
                ]);
                break;
            case 'json_data':
                return self::attribTextArea([
                    'label' => ucwords(str_replace('_',' ',$attribute)),
                    'key' => $attribute,
                    'entity' => $entityId,
                    'name' => $attribute,
                    'val' => $val,
                ]);
                break;
            case 'excel_file':
                return self::attribFileField([
                    'label' => ucwords(str_replace('_',' ',$attribute)),
                    'key' => $attribute,
                    'entity' => $entityId,
                    'name' => $attribute,
                    'val' => $val,
                ]);
                break;
            case 'autocomplete_url1':
                return self::attribTextField([
                    'label' => ucwords(str_replace('_',' ',$attribute)),
                    'key' => $attribute,
                    'entity' => $entityId,
                    'name' => $attribute,
                    'val' => $val,
                    'type' => 'url',
                ]);
                break;
        }
    }

    public static function renderFormField($params = [])
    {
        $field = $params['field'];
        $value = empty($params['fieldValue']) ? '' : $params['fieldValue'];
        $attributes = $params['attributes'];
        $fldId = empty($attributes['id']) ? 'fld'.rand(100,20000) : $attributes['id'];
        $cls = empty($attributes['class']) ? 'cls'.rand(100,20000) : $attributes['class'];
        $name = empty($attributes['name']) ? 'name'.rand(100,20000) : $attributes['name'];
        $placeholder = empty($attributes['placeholder']) ? '' : $attributes['placeholder'];
        $readonly = empty($attributes['readonly']) ? '' : 'readonly';
        $disabled = empty($attributes['disabled']) ? '' : 'disabled';
        $labelClass = empty($attributes['labelClass']) ? '' : $attributes['labelClass'];
        $min = empty($attributes['min']) ? '' : 'min="'.$attributes['min'].'" ';
        $max = empty($attributes['max']) ? '' : 'max="'.$attributes['max'].'" ';
        $rows = empty($attributes['rows']) ? '' : 'max="'.$attributes['rows'].'" ';
        $cols = empty($attributes['cols']) ? '' : 'max="'.$attributes['cols'].'" ';
        $options = empty($attributes['options']) ? '' : $attributes['options'];
        $isMultiple = empty($attributes['is_multiple']) ? '' : $attributes['is_multiple'];
        $hasAutoComplete = empty($attributes['has_autocomplete']) ? null : $attributes['has_autocomplete'];
        $autocompleteUrl = empty($attributes['autocomplete_url']) ? '' : $attributes['autocomplete_url'];
        $emptyOptionKey = empty($attributes['empty_option_key']) ? null : $attributes['empty_option_key'];
        $emptyOptionValue = empty($attributes['empty_option_value']) ? null : $attributes['empty_option_value'];
        $label = empty($attributes['label']) ? '' : '<label class="'.$labelClass.'" for="'.$fldId.'">'.$attributes['label'].'</label>';
        
        $html = '';
        switch($field) {
            case 'textinput':
                $html = [
                    'render' => 'single',
                    'fields' => $label.'<input type="text" class="textInput '.$cls.'" name="'.$name.'" id="'.$fldId.'" value="'.$value.'" placeholder="'.$placeholder.'" '.$readonly.' '.$disabled.'/>',
                ];
                break;
            case 'numberinput':
                $html = [
                    'render' => 'single',
                    'fields' => $label.'<input type="number" class="numberInput '.$cls.'" name="'.$name.'" id="'.$fldId.'" value="'.$value.'" placeholder="'.$placeholder.'" '.$readonly.' '.$disabled.' '.$min.' ' . $max . '/>',
                ];
                break;
            case 'urlinput':
                $html = [
                    'render' => 'single',
                    'fields' => $label.'<input type="url" class="urlInput '.$cls.'" name="'.$name.'" id="'.$fldId.'" value="'.$value.'" placeholder="'.$placeholder.'" '.$readonly.' '.$disabled.' '.$min.' ' . $max . '/>',
                ];
                break;
            case 'emailinput':
                $html = [
                    'render' => 'single',
                    'fields' => $label.'<input type="email" class="emailInput '.$cls.'" name="'.$name.'" id="'.$fldId.'" value="'.$value.'" placeholder="'.$placeholder.'" '.$readonly.' '.$disabled.' '.$min.' ' . $max . '/>',
                ];
                break;
            case 'fileinput':
                $html = [
                    'render' => 'single',
                    'fields' => $label.'<input type="file" class="fileInput '.$cls.'" name="'.$name.'" id="'.$fldId.'" value="'.$value.'" '.$readonly.' '.$disabled.' '.$min.' ' . $max . '/>',
                ];
                break;
            case 'dateinput':
                $html = [
                    'render' => 'single',
                    'fields' => $label.'<input type="date" class="dateInput '.$cls.'" name="'.$name.'" id="'.$fldId.'" value="'.$value.'" placeholder="'.$placeholder.'" '.$readonly.' '.$disabled.' '.$min.' ' . $max . '/>',
                ];
                break;
            case 'daterangeinput':
                $html = [
                    'render' => 'double',
                    'label' => $label,
                    'min' => '<input type="date" class="dateInput dateInputMin '.$cls.'" name="'.$name.'_min" id="'.$fldId.'" value="'.$value.'" placeholder="'.$placeholder.'" '.$readonly.' '.$disabled.' '.$min.' ' . $max . '/>',
                    'max' => '<input type="date" class="dateInput dateInputMax '.$cls.'" name="'.$name.'_max" id="'.$fldId.'" value="'.$value.'" placeholder="'.$placeholder.'" '.$readonly.' '.$disabled.' '.$min.' ' . $max . '/>',
                ];
                break;
            case 'timeinput':
                $html = [
                    'render' => 'single',
                    'fields' => $label.'<input type="time" class="dateInput '.$cls.'" name="'.$name.'" id="'.$fldId.'" value="'.$value.'" placeholder="'.$placeholder.'" '.$readonly.' '.$disabled.' '.$min.' ' . $max . '/>',
                ];
                break;
            case 'timerangeinput':
                $html = [
                    'render' => 'double',
                    'label' => $label,
                    'min' => '<input type="time" class="timeInput timeInputMin '.$cls.'" name="'.$name.'_min" id="'.$fldId.'" value="'.$value.'" placeholder="'.$placeholder.'" '.$readonly.' '.$disabled.' '.$min.' ' . $max . '/>',
                    'max' => '<input type="time" class="timeInput timeInputMax '.$cls.'" name="'.$name.'_max" id="'.$fldId.'" value="'.$value.'" placeholder="'.$placeholder.'" '.$readonly.' '.$disabled.' '.$min.' ' . $max . '/>',
                ];
                break;
            case 'datetimeinput':
                $html = [
                    'render' => 'single',
                    'fields' => $label.'<input type="datetime-local" class="dateTimeInput '.$cls.'" name="'.$name.'" id="'.$fldId.'" value="'.$value.'" placeholder="'.$placeholder.'" '.$readonly.' '.$disabled.' '.$min.' ' . $max . '/>',
                ];
                break;
            case 'datetimerangeinput':
                $html = [
                    'render' => 'double',
                    'label' => $label,
                    'min' => '<input type="datetime-local" class="datetimeInput datetimeInputMin '.$cls.'" name="'.$name.'_min" id="'.$fldId.'" value="'.$value.'" placeholder="'.$placeholder.'" '.$readonly.' '.$disabled.' '.$min.' ' . $max . '/>',
                    'max' => '<input type="datetime-local" class="datetimeInput datetimeInputMax '.$cls.'" name="'.$name.'_max" id="'.$fldId.'" value="'.$value.'" placeholder="'.$placeholder.'" '.$readonly.' '.$disabled.' '.$min.' ' . $max . '/>',
                ];
                break;
            case 'hiddeninput':
                $html = [
                    'render' => 'hidden',
                    'fields' => '<input type="hidden" class=" '.$cls.'" name="'.$name.'" id="'.$fldId.'" value="'.$value.'" '.$readonly.' '.$disabled.' '.$min.' ' . $max . '/>',
                ];
                break;
            case 'textarea':
                $html = [
                    'render' => 'single',
                    'fields' => $label.'<textarea class="paraInput '.$cls.'" name="'.$name.'" id="'.$fldId.'" placeholder="'.$placeholder.'" '.$readonly.' '.$disabled.' '.$min.' ' . $max . ' '.$rows.' ' . $cols . '>' . $value . '</textarea>',
                ];
                break;
            case 'htmleditor':
                $html = [
                    'render' => 'single',
                    'fields' => $label.'<textarea class="htmlInput '.$cls.'" name="'.$name.'" id="'.$fldId.'" '.$readonly.' '.$disabled.' '.$min.' ' . $max . '>' . $value . '</textarea>',
                ];
                break;
            case 'select':
            case 'yesnoselect':
                $fieldHtml = $label;
                $fieldHtml.= '<select class="selectDropdown '.$cls.' selectChoice" name="'.($isMultiple == '' ? $name : $name.'[]').'" id="'.$fldId.'" '.$readonly.' '.$disabled.' data-placeholder="'.$placeholder.'" ' . ($isMultiple == '' ? '' : 'multiple') . ' data-url="'.$autocompleteUrl.'">';
                if(!is_null($emptyOptionKey)) {
                    $fieldHtml.='<option value="'.$emptyOptionKey.'">'.$emptyOptionValue.'</option>';
                }
                if($field == 'yesnoselect') {
                    foreach(YESNO as $k => $v) {
                        $fieldHtml.='<option value="'.$k.'" '.($value == $k ? 'selected' : '').'>'.$v.'</option>';
                    }
                } elseif(!empty($options) && is_array($options)) {
                    foreach($options as $k => $v) {
                        if($k > 0)
                        $fieldHtml.='<option value="'.$v[0].'" '.(!empty($v[2]) ? 'selected' : '').'>'.$v[1].'</option>';
                    }
                }
                $fieldHtml.= '</select>';
                $html = [
                    'render' => 'single',
                    'fields' => $fieldHtml,
                ];
                break;
            case 'yesnoradio':
                $html = [
                    'render' => 'multi',
                    'fields' => []
                ];
                foreach(YESNO as $k => $v) {
                    $html['fields'][] = '<label class="'.$labelClass.'" for="'.$fldId.'"><input type="radio" name="'.$name.'" id="'.$fldId.'" value="'.$k.'" '.($value == $k ? 'selected' : '').'/> '.$attributes['label'].'</label>';
                }
                break;
            case 'radiogroup':
                $html = [
                    'render' => 'multi',
                    'fields' => []
                ];
                if(!empty($options) && is_array($options)) {
                    foreach($options as $k => $v) {
                        if($k > 0)
                        $html['fields'][] = '<label class="'.$labelClass.'" for="'.$fldId.'"><input type="radio" name="'.$name.'" id="'.$fldId.'" value="'.$v[0].'" '.(!empty($v[2]) ? 'checked' : '').'/> '.$v[1].'</label>';
                    }
                }
                break;
            case 'checkboxgroup':
                $html = [
                    'render' => 'multi',
                    'fields' => []
                ];
                if(!empty($options) && is_array($options)) {
                    foreach($options as $k => $v) {
                        if($k > 0)
                        $html['fields'][] = '<label class="'.$labelClass.'" for="'.$fldId.'"><input type="checkbox" name="'.$name.'[]" id="'.$fldId.'" value="'.$v[0].'" '.(!empty($v[2]) ? 'checked' : '').'/> '.$attributes['label'].'</label>';
                    }
                }
                break;
            case 'autocompletesingle':
                $cls2 = 'selectAutocompleteFld'.rand(5000, 10000).'';
                $fieldHtml = $label;
                $fieldHtml.= '<select class="selectDropdown '.$cls.' '.$cls2.'" name="'.$name.'" id="'.$fldId.'" '.$readonly.' '.$disabled.' data-placeholder="'.$placeholder.'" data-url="'.$autocompleteUrl.'">';
                $fieldHtml.= '</select>';
                $html = [
                    'render' => 'single',
                    'fields' => $fieldHtml,
                    'autocompleteClass' => $cls2,
                    'autocompleteUrl' => $autocompleteUrl,
                ];
                break;
            case 'autocompletemultiple':
                $cls2 = 'selectAutocompleteFldM'.rand(5000, 10000).'';
                $fieldHtml = $label;
                $fieldHtml.= '<select class="selectDropdown '.$cls.' '.$cls2.'" name="'.$name.'[]'.'" id="'.$fldId.'" '.$readonly.' '.$disabled.' data-placeholder="'.$placeholder.'" multiple  data-url="'.$autocompleteUrl.'">';
                $fieldHtml.= '</select>';
                $html = [
                    'render' => 'single',
                    'fields' => $fieldHtml,
                    'autocompleteClass' => $cls2,
                    'autocompleteUrl' => $autocompleteUrl,
                ];
                break;
        }

        return $html;
    }

    public static function drawEntityValidations($params = [])
    {
        $html = [];
        $field = empty($params['field']) ? 'textinput' : $params['field'];
        if(!in_array($field,FIELD_TYPES_INDEX)) {
            $field = 'textinput';
        }


        $oldValues = empty($params['oldValues']['validation_rules']) ? [] : json_decode($params['oldValues']['validation_rules'], true);
        $validationArrays = FIELD_VALIDATIONS[$field];
        foreach($validationArrays as $validationKey => $validationArray) {
            $validationName = 'validation_rules['.$validationKey.']';
            $validationId = 'validation_rules_'.$validationKey.'';
            $validationFieldType = $validationArray['type'];
            $validationVal = empty($validationArray['value']) ? '0' : $validationArray['value'];
            $oldValues = empty($params['oldValues']) ? [] : $params['oldValues'];
            switch($validationFieldType) {
                case 'checkbox':
                    if(isset($validationArray['values']) && is_array($validationArray['values'])) {
                        $vals = $validationArray['values'];
                        foreach($vals as $k => $v) {
                            $checked = !empty($oldValues[$validationKey][$k]) ? 'checked' : '';
                            $html[] = ($k == 0 ? '<h5>'.$validationArray['label'].'</h5>' : '').'<label>
                                    <input type="'.$validationFieldType.'" name="'.$validationName.'[]" id="'.$validationId.'" value="'.$v.'" '.$checked.'/> 
                                    '.$v.'
                                    </label>';
                        }
                    } else {
                        $checked = !empty($oldValues[$validationKey][0]) ? 'checked' : '';
                        
                        $html[] = '<label><input type="'.$validationFieldType.'" name="'.$validationName.'[]" id="'.$validationId.'" value="'.$validationVal.'" '.$checked.'/> '.$validationArray['label'].'</label>';
                    }
                    break;
                case 'select':
                    $htmlStr = '
                        <label>'.$validationArray['label'].'</label>
                        <select name="'.$validationName.'" id="'.$validationId.'" class="form-control">';
                        foreach($validationArray['values'] as $optKey => $optVal) {
                            $selected = !empty($oldValues[$validationKey]) && $oldValues[$validationKey] == $optKey ? 'selected' : ''; 
                            $htmlStr.=' <option value="'.$optKey.'" '.$selected.'>'.$optVal.'</option>';
                        }
                    $htmlStr.='</select>';
                    $html[] = $htmlStr;
                    break;
                default:
                case 'date':
                case 'datetime-local':
                case 'number':
                    $prevValidationVal = !empty($oldValues[$validationKey]) ? $oldValues[$validationKey] : $validationVal; 
                    $html[] = '
                        <label for="'.$validationId.'">'.$validationArray['label'].'</label>
                        <input type="'.$validationFieldType.'" name="'.$validationName.'" id="'.$validationId.'" value="'.$prevValidationVal.'" class="form-control"/>
                    ';
                    break;
    
            }
        }
        return $html;
    }

    public static function entityAttributeFieldId($field = '')
    {
        $attributeValue = AttributeValue::where('key', 'name')->where('value', $field)->first();
        return !empty($attributeValue) ? $attributeValue : 0;
    }

    public static function entityAttributeSubmittedDataId($attribute)
    {  
        return $attribute->attributeValues->where('key', 'name')->pluck('id')[0];
    }

}
