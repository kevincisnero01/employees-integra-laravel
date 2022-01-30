<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{
    use HasFactory;

    protected $guarded = []; //deshabilitar proteccion



    public function scopeLastname($query, $search){

    	if($search)
    		return $query->orWhere('last_name', 'LIKE', "%$search%");

    }

    public function scopeEmail($query, $search){

    	if($search)
    		return $query->orWhere('email', 'LIKE', "%$search%");

    }

    public function getPhoneAttribute($value)
    {   
        //+58 416 12345678
        $value = sprintf("(%s) %s-%s", 
            substr($value, 1, 2),
            substr($value, 3, 3),
            substr($value, 6)
        );

        return $value;
    }

    public function getContratedAttribute($value)
    {
        $date = date_create($value);
        return date_format($date, "m / d / Y"); 
    }
    
}
