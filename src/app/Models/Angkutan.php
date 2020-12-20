<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkutan extends Model
{
    use HasFactory;

    protected $table = "tblangkutan";
    protected $fillable = [
        "id_angkutan","nopol_angkutan","jurusan_angkutan","tarif"
    ];
}
