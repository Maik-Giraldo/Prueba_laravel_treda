<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tienda extends Model
{
    use HasFactory;

    protected $table = 'producto';

    protected $oprimaryKey = 'id';
    protected $fillable = [
        'id', 
        'nombre',
        'fecha_apertura'
    ];

    public $timestamps = false;
    
    public $incrementing = false;
}
