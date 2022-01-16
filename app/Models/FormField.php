<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id',
        'form_id',
        'field_id',
        'fieldset_id',
        'entity_id',
        'tabindex',
        'validations',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_id' => 'integer',
        'form_id' => 'integer',
        'field_id' => 'integer',
        'fieldset_id' => 'integer',
        'entity_id' => 'integer',
    ];


    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class);
    }

    public function form()
    {
        return $this->belongsTo(\App\Models\Form::class);
    }

    public function field()
    {
        return $this->belongsTo(\App\Models\Field::class);
    }

    public function fieldset()
    {
        return $this->belongsTo(\App\Models\Fieldset::class);
    }

    public function entity()
    {
        return $this->belongsTo(\App\Models\Entity::class);
    }
}
