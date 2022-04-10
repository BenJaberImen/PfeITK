<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable = [
        'libelle',
        'description',
        'image',

    ];
    public function article() 
    { 
        return $this->hasMany(Article::class); 
    }
}
