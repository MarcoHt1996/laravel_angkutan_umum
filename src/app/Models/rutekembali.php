<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rutekembali extends Model
{
    use HasFactory;
    protected $table = "tblrutekembali";
    protected $fillable = [
    "id_rute_kembali","jalur_kembali"
];
}
