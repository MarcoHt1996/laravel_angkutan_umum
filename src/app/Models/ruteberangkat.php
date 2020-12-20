<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruteberangkat extends Model
{
    use HasFactory;

protected $table = "tblruteberangkat";
protected $fillable = [
    "id_rute_berangkat","jalur_berangkat"
];
}
