<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $table = "fornecedores"; //mds

    public function orcamento() {
        return $this->hasMany('App\Models\Orcamento');
    }
}
