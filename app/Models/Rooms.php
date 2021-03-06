<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Rooms extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['room_id',
       'room_number' ,
    'status',
    'tenant_id',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenants::class, 'tenant_id');
    }
}





