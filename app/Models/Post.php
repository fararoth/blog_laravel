<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //relacion muchos a muchos

    public function tags(){
        return $this->BelongsToMany(Tag::class);
    }

    //Relacion uno a uno polimofica

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

}
