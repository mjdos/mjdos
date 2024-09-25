<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadosEsp32 extends Model
{
    use HasFactory;

    // Define a tabela associada ao modelo
    protected $table = 'dados_esp32';

    // Define os campos que podem ser preenchidos
    protected $fillable = [
        'n_equipamento',
        'temperatura',
        'umidade',
        'luz',
        'movimento',
        'ip',
    ];
        
}
