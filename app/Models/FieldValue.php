<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldValue extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'field_id',
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
        'field_id' => 'integer',
        'key' => 'integer',
        'value' => 'integer',
        'is_default' => 'integer',
    ];


    public function field()
    {
        return $this->belongsTo(\App\Models\Field::class);
    }
}
