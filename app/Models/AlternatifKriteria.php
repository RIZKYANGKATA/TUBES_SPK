<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternatifKriteria extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_alternatif',
        'id_kriteria',
        'value',
    ];
}
