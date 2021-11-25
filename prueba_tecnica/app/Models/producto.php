<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    protected $table = 'producto';

    protected $oprimaryKey = 'id';
    protected $fillable = [
        'id',
        'nombre',
        'sku',
        'descripcion',
        'valor',
        'tienda',
        'imagen'
    ];

    public $timestamps = false;
    
    public $incrementing = false;
}
