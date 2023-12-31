<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;


     //relacion muchos a muchos

     public function post(){
        return $this->BelongsToMany(Post::class);
    }
}
