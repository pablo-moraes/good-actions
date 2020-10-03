<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    protected $fillable = [
        'ds_cep',
        'ds_cidade',
        'ds_cidade',
        'ds_bairro',
        'ds_UF'
    ];

    public function address()
    {
        return $this->morphTo();
    }

    public $timestamps = false;
}
