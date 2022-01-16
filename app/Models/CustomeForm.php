<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomeForm extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function attributes()
    {
        return $this->hasMany(\App\Models\Attribute::class);
    }

    public function formFields()
    {
        return $this->hasMany(\App\Models\FormField::class);
    }
}