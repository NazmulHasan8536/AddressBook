<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'f_name','l_name','email'  
];





public function phone()
    {
        return $this->belongsTo(Phone::class); 
    }

public function user()
    {
        return $this->belongsTo(Address::class);
    }


    
}





    