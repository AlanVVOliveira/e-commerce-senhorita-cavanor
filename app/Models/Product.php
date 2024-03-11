<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Indicar o nome da tabela
    protected $table = 'products';

    // Indicar quais colunas podem ser cadastrada
    protected $fillable = [
        'name',
        'color',
        'size',
        'height',
        'width',
        'description',
        'price'
    ];
}
