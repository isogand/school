<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'gender',
        'class',
        'photo_id',
        'session',


    ];



    public function photo(){


        return $this->hasOne('App\Models\Photo','id','photo_id');


    }




}

