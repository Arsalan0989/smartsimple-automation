<?php
const YES = 1;
const NO = 0;
const FIELD_ATTRIB = 3;

const DIR_SEP = '/';
const DOC_ROOT = '/Applications/MAMP/htdocs/smartsimple/public/';
const YESNO = ['0' => 'No', '1' => 'Yes'];
const PUBLISHED = ['0' => 'Not Published', '1' => 'Published'];
const UPLOADS_DIR = 'uploads';
const DOWNLOADS_DIR = 'downloads';
const ENTITY_DIR = 'entity';
const SELECT_EXCELS = 'select-excels';

const ALLOWED_IMAGE_EXT = ['jpg', 'jpeg', 'png', 'gif', 'svg', 'JPG', 'JPEG', 'PNG', 'GIF', 'SVG'];
const ALLOWED_EXCELS_EXT = ['xls', 'xlsx', 'XLS', 'XLSX'];
const ALLOWED_FILE_FORMATS_EXT = ['pdf', 'PDF', 'zip', 'ZIP', 'sql', 'SQL'];
const ALL_FILES_FORMATS = ['jpg', 'jpeg', 'png', 'gif', 'svg', 'JPG', 'JPEG', 'PNG', 'GIF', 'SVG','xls', 'xlsx', 'XLS', 'XLSX','pdf', 'PDF', 'zip', 'ZIP', 'sql', 'SQL'];
const FIELD_TYPES = [
    'textinput' => 'Text Input',
    'numberinput' => 'Number Input',
    'urlinput' => 'URL Input',
    'emailinput' => 'Email Input',
    'fileinput' => 'File Upload',
    'dateinput' => 'Date Input',
    'daterangeinput' => 'Date Range',
    'timeinput' => 'Time Input',
    'timerangeinput' => 'Time Range',
    'datetimeinput' => 'Date Time',
    'datetimerangeinput' => 'Date Time Range',
    'hiddeninput' => 'Hidden',
    'textarea' => 'Paragraph Input',
    'htmleditor' => 'HTML Editor',
    'select' => 'Dropdown',
    'yesnoselect' => 'Yes / No Dropdown',
    'yesnoradio' => 'Yes / No Radio',
    'radiogroup' => 'Radio Group',
    'checkboxgroup' => 'Checkbox Group',
    'autocompletesingle' => 'Autocomplete',
    'autocompletemultiple' => 'Autocomplete (Multiple)',
];
const FIELD_TYPES_INDEX = [
    'textinput',
    'numberinput',
    'urlinput',
    'emailinput',
    'fileinput',
    'dateinput',
    'daterangeinput',
    'datetimeinput',
    'datetimerangeinput',
    'hiddeninput',
    'textarea',
    'htmleditor',
    'select',
    'yesnoselect',
    'yesnoradio',
    'radiogroup',
    'checkboxgroup',
    'autocompletesingle',
    'autocompletemultiple',
];

const TEXT_INPUT_VALIDATIONS = [
    'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
    'textformat' => ['label' => 'Text Format', 'type' => 'select', 'values' => ['0' => 'Any', 'alpha' => 'Alphabets Only', 'alpha_dash' => 'Alphabets with Dash', 'alpha_num' => 'Alpha Numeric', 'plaintext' => 'Plain Text', 'html' => 'HTML']],
    'min' => ['label' => 'Min. Length', 'type' => 'number'],
    'max' => ['label' => 'Max. Length', 'type' => 'number'],
];

const FIELD_VALIDATIONS = [
    'textinput' => TEXT_INPUT_VALIDATIONS,
    'urlinput' => TEXT_INPUT_VALIDATIONS,
    'emailinput' => TEXT_INPUT_VALIDATIONS,
    'numberinput' => [
        'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
        'min' => ['label' => 'Min. Length', 'type' => 'number'],
        'max' => ['label' => 'Max. Length', 'type' => 'number'],
    ],
    'fileinput' => [
        'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
        'allowed_files' => ['label' => 'Allowed Formats', 'type' => 'checkbox', 'values' => ALL_FILES_FORMATS],
        'min_weight' => ['label' => 'Min. Weight', 'type' => 'number'],
        'max_weight' => ['label' => 'Min. Weight', 'type' => 'number'],
        'width' => ['label' => 'Width', 'type' => 'number'],
        'height' => ['label' => 'Height', 'type' => 'number'],
    ],
    'dateinput' => [
        'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
        'min_date' => ['label' => 'Min. Date', 'type' => 'date'],
        'max_date' => ['label' => 'Max. Date', 'type' => 'date'],
    ],
    'daterangeinput' => [
        'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
        'min_date' => ['label' => 'Min. Date', 'type' => 'date'],
        'max_date' => ['label' => 'Max. Date', 'type' => 'date'],
    ],
    'datetimeinput' => [
        'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
        'min_datetime' => ['label' => 'Min. Datetime', 'type' => 'datetime-local'],
        'max_datetime' => ['label' => 'Max. Datetime', 'type' => 'datetime-local'],
    ],
    'datetimerangeinput' => [
        'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
        'min_datetime' => ['label' => 'Min. Datetime', 'type' => 'datetime-local'],
        'max_datetime' => ['label' => 'Max. Datetime', 'type' => 'datetime-local'],
    ],
    'textarea' => [
        'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
        'min' => ['label' => 'Min. Length', 'type' => 'number'],
        'max' => ['label' => 'Max. Length', 'type' => 'number'],
    ],
    'htmleditor' => [
        'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
        'min' => ['label' => 'Min. Length', 'type' => 'number'],
        'max' => ['label' => 'Max. Length', 'type' => 'number'],
    ],
    'timeinput' => [
        'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
    ],
    'select' => [
        'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
    ],
    'autocompletesingle' => [
        'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
    ],
    'autocompletemultiple' => [
        'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
    ],
    'yesnoselect' => [
        'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
    ],
    'yesnoradio' => [
        'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
    ],
    'radiogroup' => [
        'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
    ],
    'checkboxgroup' => [
        'required' => ['label' => 'Required', 'type' => 'checkbox', 'value' => '1'],
    ],
];

const FIELD_ATTRIBUTES = [
    'textinput' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
        'readonly',
        'disabled',
    ],
    'urlinput' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
        'readonly',
        'disabled',
    ],
    'emailinput' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
        'readonly',
        'disabled',
    ],
    'numberinput' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
        'min',
        'max',
        'step',
        'readonly',
        'disabled',
    ],
    'fileinput' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
        'readonly',
        'disabled',
    ],
    'dateinput' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
    ],
    'daterangeinput' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
    ],
    'datetimeinput' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
    ],
    'datetimerangeinput' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
    ],
    'hiddeninput' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
    ],
    'textarea' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
        'rows',
        'cols',
        'readonly',
        'disabled',
    ],
    'htmleditor' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
        'height',
        'width',
    ],
    'select' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
        'empty_option_key',
        'empty_option_value',
        'is_multiple',
        'json_data',
        'excel_file',
    ],
    'autocompletesingle' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
        'autocomplete_url',
        'autocomplete_option_key',
        'autocomplete_option_value',
    ],
    'autocompletemultiple' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
        'autocomplete_url',
        'autocomplete_option_key',
        'autocomplete_option_value',
    ],
    'yesnoselect' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
        'empty_option_key',
        'empty_option_value',
    ],
    'yesnoradio' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
    ],
    'radiogroup' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
        'json_data',
        'excel_file',
    ],
    'checkboxgroup' => [
        'label',
        'label_class',
        'name',
        'id',
        'class',
        'placeholder',
        'json_data',
        'excel_file',
    ],
];
