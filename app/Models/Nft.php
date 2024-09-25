<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nft extends Model
{
    use HasFactory;

    protected $table = 'nft';

    protected $fillable = [
        
        'autor_id',
        'nome',
        'description',
        'rarity_id',
        'qtd_mx_mint',
        'value',
        'imagem',
    ];

    public function autor()
    {
        return $this->belongsTo(User::class, 'autor_id');
    }
    public function raridade()
    {
        return $this->belongsTo(Rarity::class, 'rarity_id');
    }
}
