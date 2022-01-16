<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'heading',
        'slug',
        'description',
        'form_scope',
        'form_start_date',
        'has_end_date',
        'form_end_date',
        'form_ip_access',
        'published',
        'company_id',
        'client_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'form_scope' => 'integer',
        'form_start_date' => 'date',
        'has_end_date' => 'integer',
        'form_end_date' => 'date',
        'published' => 'integer',
        'company_id' => 'integer',
        'client_id' => 'integer',
    ];


    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class);
    }

    public function client()
    {
        return $this->belongsTo(\App\Models\Client::class);
    }

    public function formFields()
    {
        return $this->hasMany(\App\Models\FormField::class);
    }
}