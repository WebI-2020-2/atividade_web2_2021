<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContatoFornecedor extends Model
{
    use HasFactory;
    protected $table="contato_fornecedors";
    protected $guarded = [];
}
