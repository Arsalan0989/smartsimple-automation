<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAddress extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id',
        'address_label',
        'address_line_1',
        'contact_value',
        'country',
        'state',
        'city',
        'zipcode',
        'lat',
        'lng',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_id' => 'integer',
    ];


    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class);
    }
}
