<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pqrs extends Model
{
    use HasFactory;
    protected $table = 'pqrss';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected function casts(): array
    {
        return[
            'id_cliente'=>'string'
    ];
    }
}
