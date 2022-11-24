<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Produto extends Model
{
    use HasFactory;

    protected $dates = ['data_fabricacao', 'data_vencimento'];

    protected $guarded = [];

    public function orcamento() {
        return $this->hasMany('App\Models\Orcamento');
    }
}
