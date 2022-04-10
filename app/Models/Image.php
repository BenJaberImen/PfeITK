<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable = [

        'image',
        'article_id'

    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
    
    public function supplement()
    {
        return $this->belongsTo(Supplement::class);
    }
}
