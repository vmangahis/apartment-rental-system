<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    use HasFactory;
    public $table = 'landlord_table';
    public $timestamps = false;

    protected $fillable = ['id', 'surname', 'firstname', 'middlename',
        'age', 'zip_code', 'address_1', 'address_2', 'city', 'state', 'image'
    ];
}
