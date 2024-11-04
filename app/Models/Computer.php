<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Computer extends Model
{
    use HasFactory;
    
    protected function model(): Attribute 
    {
        return Attribute::make(
            set: function (string $value){
                return strtolower($value);
            },
            //AQUI PUEDE IR EL GET
            get: function (string $value){
                return strtoupper($value);
            } 
        );

        
         
    } 
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime', //se establece que devolverá DATETIME
            'is_active' => 'boolean' //se establece que devolverá BOOLEAN
        ];
    }  
}

