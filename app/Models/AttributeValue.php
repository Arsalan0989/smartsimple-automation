<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'entity_id',
        'attribute_id',
        'key',
        'value',
        'is_default',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'entity_id' => 'integer',
        'attribute_id' => 'integer',
        'is_default' => 'integer',
    ];


    public function entity()
    {
        return $this->belongsTo(\App\Models\Entity::class);
    }

    public function attribute()
    {
        return $this->belongsTo(\App\Models\Attribute::class);
    }

    public function entityDataValues()
    {
        return $this->hasMany(\App\Models\EntityDataValue::class);
    }
}
