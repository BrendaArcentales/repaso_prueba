<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=['name','lastname','document'];

    public function user(){
        return $this->belongTo('App\Models\User');
    }


}
