<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;
    protected $primaryKey = 'matricula_auto';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'matricula_auto','num_bastidor','marca','model','color',
        'places','portes','gran_maleter','combustible'
    ];
}
