<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'entity_id',
        'slug',
        'attribute_type',
        'has_options',
        'options_source',
        'options_source_file',
        'options_source_json',
        'options_source_api',
        'options_source_key',
        'options_source_value',
        'options_entity_id',
        'validation_json',
        'published',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'entity_id' => 'integer',
        'attribute_type' => 'integer',
        'has_options' => 'integer',
        'options_source' => 'integer',
        'options_entity_id' => 'integer',
        'published' => 'integer',
    ];


    public function entity()
    {
        return $this->belongsTo(\App\Models\Entity::class);
    }

    public function attributeValues()
    {
        return $this->hasMany(\App\Models\AttributeValue::class);
    }

    public function entityDataValues()
    {
        return $this->hasMany(\App\Models\EntityDataValue::class);
    }
}
