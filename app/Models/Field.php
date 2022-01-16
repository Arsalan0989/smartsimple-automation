<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id',
        'heading',
        'slug',
        'description',
        'field_type',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_id' => 'integer',
        'field_type' => 'integer',
    ];


    public function fieldValues()
    {
        return $this->hasMany(\App\Models\FieldValue::class);
    }

    public function formFields()
    {
        return $this->hasMany(\App\Models\FormField::class);
    }

    public function fieldsetFields()
    {
        return $this->hasMany(\App\Models\FieldsetField::class);
    }
}
