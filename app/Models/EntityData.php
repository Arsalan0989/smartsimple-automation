<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntityData extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id',
        'entity_id',
        'client_id',
        'user_id',
        'ip',
        'device',
        'recordjson',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_id' => 'integer',
        'entity_id' => 'integer',
        'client_id' => 'integer',
        'user_id' => 'integer',
    ];


    public function entity()
    {
        return $this->belongsTo(\App\Models\Entity::class);
    }

    public function client()
    {
        return $this->belongsTo(\App\Models\Client::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class);
    }

    public function entityDataValues()
    {
        return $this->hasMany(\App\Models\EntityDataValue::class);
    }
}
