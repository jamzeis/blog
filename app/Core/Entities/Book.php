<?php

namespace App\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    protected $table ='books';
    protected $filiable=['title','description','picture','category_id'];

    //Para que los queries se realicen en cascada de uno a muchos
    public function category(){
        return $this->belongTo(Category::class,'category_id');
    }

}

