<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntityDataValue extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'entity_data_id',
        'entity_id',
        'attribute_id',
        'attribute_value_id',
        'attribute_entity_value',
        'attribute_string_value',
        'attribute_int_value',
        'attribute_min_int_value',
        'attribute_max_int_value',
        'attribute_float_value',
        'attribute_min_float_value',
        'attribute_max_float_value',
        'attribute_text_value',
        'attribute_date_value',
        'attribute_time_value',
        'attribute_datetime_value',
        'attribute_min_date_value',
        'attribute_max_date_value',
        'attribute_min_datetime_value',
        'attribute_max_datetime_value',
        'attribute_min_time_value',
        'attribute_max_time_value',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'entity_data_id' => 'integer',
        'entity_id' => 'integer',
        'attribute_id' => 'integer',
        'attribute_value_id' => 'integer',
        'attribute_float_value' => 'decimal:2',
        'attribute_min_float_value' => 'decimal:2',
        'attribute_max_float_value' => 'decimal:2',
        'attribute_date_value' => 'date',
        'attribute_datetime_value' => 'datetime',
        'attribute_min_date_value' => 'date',
        'attribute_max_date_value' => 'date',
        'attribute_min_datetime_value' => 'date',
        'attribute_max_datetime_value' => 'date',
    ];


    public function entityData()
    {
        return $this->belongsTo(\App\Models\EntityData::class);
    }

    public function attributeValue()
    {
        return $this->belongsTo(\App\Models\AttributeValue::class);
    }
}
