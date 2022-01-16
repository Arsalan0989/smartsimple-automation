<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id',
        'involve_client',
        'has_childs',
        'heading',
        'slug',
        'icon',
        'description',
        'menu_title',
        'show_in_menu',
        'published',
        'company_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'parent_id' => 'integer',
        'involve_client' => 'integer',
        'has_childs' => 'integer',
        'show_in_menu' => 'integer',
        'published' => 'integer',
        'company_id' => 'integer',
    ];


    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class);
    }

    public function attributes()
    {
        return $this->hasMany(\App\Models\Attribute::class);
    }

    public function formFields()
    {
        return $this->hasMany(\App\Models\FormField::class);
    }
}
