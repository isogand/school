<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'photo_id',
        'is_active',
        'role_id',
        'gender' ,
        'date_of_birth',
        'last_mark',
    ];


    public function role(){

        return $this->belongsTo('App\Models\Role');


    }
    public function photo(){


        return $this->hasOne('App\Models\Photo','id','photo_id');


    }


    public function photoPlaceholder(){


        return "http://placehold.it/700x200";

    }




}
