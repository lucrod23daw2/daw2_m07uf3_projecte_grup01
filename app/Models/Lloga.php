<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lloga extends Model
{
    use HasFactory;
    protected $primaryKey = 'matricula_auto';
    public $incrementing = false;
    protected $fillable = [
        'dni_client','matricula_auto','data_prestec','data_devolucio',
        'lloc_devolucio','preu_per_dia','retorn_deposit_ple','asseguranca'
    ];
}
