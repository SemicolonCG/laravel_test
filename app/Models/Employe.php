<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable=[
        'lastname',
        'firstname',
        'middle_name',
        'department_id',
        'city_id',
        'state_id',
        'country_id',
        'zip',
        'birth_date',
        'date_hired',

    ];
}
