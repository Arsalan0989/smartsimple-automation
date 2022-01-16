<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldsetField extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fieldset_id',
        'field_id',
        'tabindex',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fieldset_id' => 'integer',
        'field_id' => 'integer',
    ];


    public function fieldset()
    {
        return $this->belongsTo(\App\Models\Fieldset::class);
    }

    public function field()
    {
        return $this->belongsTo(\App\Models\Field::class);
    }
}
