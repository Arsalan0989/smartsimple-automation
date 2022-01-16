<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormModel extends Model
{
    use HasFactory;

    protected $connection ='mysql2';
    protected $table = 'fbcf_uiform_form';
}
