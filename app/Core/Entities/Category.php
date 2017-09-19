<?php

namespace App\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $table = 'categories';
    //protected $table = 'mysql';
    protected $fillable=['name','description'];

    public function books(){
        return $this->hasMany(Book::class,'category_id');
    }
}
