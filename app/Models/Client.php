<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'dni_client';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'dni_client','nom_cognoms','edat','telefon','adreca',
        'ciutat','pais','email','num_permis_conduccio',
        'punts_permis_conduccio','tipus_targeta','num_targeta'
    ];
}
