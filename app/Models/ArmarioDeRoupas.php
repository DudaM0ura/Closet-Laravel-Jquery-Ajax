<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArmarioDeRoupas extends Model
{
    use HasFactory;
    protected $table = 'armario_de_roupas';
    protected $fillable = ['peca','marca','cor','tamanho'];
}
