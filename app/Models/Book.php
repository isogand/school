<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo_id',
        'about',

        'user_id',
    ];


    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }


    public function photo(){


        return $this->hasOne('App\Models\Photo','id','photo_id');


    }

}

