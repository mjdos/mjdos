<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandasEntregues extends Model
{
    use HasFactory;

    protected $table = 'demandas';

    protected $fillable = [
        'id',
        'id_colaborador',
        'id_demanda'
    ];
}
