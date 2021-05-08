<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = "students";
    public $fillable = [
        "id",
        "name",
        "email",
        "cpf",
        "data_nasc",
        "telefone"
    ];

}
