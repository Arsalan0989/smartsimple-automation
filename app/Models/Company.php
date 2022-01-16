<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'logo',
        'about',
        'services',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
    ];


    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function entities()
    {
        return $this->hasMany(\App\Models\Entity::class);
    }

    public function forms()
    {
        return $this->hasMany(\App\Models\Form::class);
    }

    public function fields()
    {
        return $this->hasMany(\App\Models\Field::class);
    }

    public function formFields()
    {
        return $this->hasMany(\App\Models\FormField::class);
    }

    public function companyContacts()
    {
        return $this->hasMany(\App\Models\CompanyContact::class);
    }

    public function companyAddresses()
    {
        return $this->hasMany(\App\Models\CompanyAddress::class);
    }

    public function entityDatas()
    {
        return $this->hasMany(\App\Models\EntityData::class);
    }
}
