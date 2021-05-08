<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = "enrollments";
    public $fillable = [
        "id",
        "id_aluno",
        "curso",
        "status",
        "motivo"
    ];

}
