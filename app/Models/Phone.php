<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phone';
    protected $fillable = ['telefone','celular'];
    public $timestamps = false;

    public function phone()
    {
        return $this->morphTo();
    }
}
