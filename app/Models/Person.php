<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'name',
        'session',
        'language',
        'class',
        'section ',
        'father',
        'gender',
        'address',

    ];


    public function role()
    {

        return $this->belongsTo('App\Models\Role');


    }

    public function photo()
    {


        return $this->hasOne('App\Models\Photo', 'id', 'photo_id');


    }


    public function photoPlaceholder()
    {


        return "http://placehold.it/700x200";

    }


}
