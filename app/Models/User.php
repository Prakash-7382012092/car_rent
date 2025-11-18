<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table="users";
    protected $fillable = [
        'name',
        'email',
        'pass',
        'password',
        'slot',
        'supplier_name',
        'type',
        'location',
        'price',
        'image',
        'status',
        'created_at',
        'updated_at'
    ];
}
