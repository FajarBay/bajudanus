<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aplicant extends Model
{
    public $table = "aplicants";

    protected $fillable = [
        'nama', 'alamat', 'status',
    ];

}
