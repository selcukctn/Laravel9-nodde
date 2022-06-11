<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table='categories';
    #one to many

    public function noddes()
    {
        return $this->hasMany(Noddes::class);

    }


    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }
    public function children(){
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function category(){

        return $this->hasMany(Noddes::class);

    }
}
