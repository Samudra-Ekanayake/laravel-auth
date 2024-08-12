<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "creation_date",
    ];

     //Tutti i Project avranno un metodo che restituisce il tipo a cui appartengono
     public function type()
     {
         return $this->belongsTo(Type::class);
     }
}
