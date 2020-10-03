<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'organization';
    protected $fillable = [
        'no_organization',
        'razao_social',
        'no_representante',
        'website',
        'email',
        'password',
        'cnpj',
        'causa_soc',
        'ds_atividades',
        'dt_fundacao'
    ];

    public function address()
    {
        return $this->morphOne('App\Models\Address', 'address');
    }

    public function phone()
    {
        return $this->morphMany('App\Models\Phone', 'phone');
    }
}
