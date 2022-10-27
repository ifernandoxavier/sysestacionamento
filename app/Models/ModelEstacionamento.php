<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelEstacionamento extends Model
{
    protected $table='carros';
    protected $fillable=['placa', 'id_user', 'modelo', 'date', 'time'];
    // protected $dates = [
    //     'date'
    // ];
    // protected $dateFormat = 'd-m-Y H:i:s';

    public function relUsers()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }


}



