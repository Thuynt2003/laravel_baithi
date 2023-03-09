<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "book";

    protected $fillable = [
        "author_id",
        "title",
        "ISBN",
        "pub_year",
        "available",
    ];

    public function Author(){
        return $this->hasOne(Author::class);
    }
    public function scopeSearch($query,$search){
        if($search && $search != ""){
            return $query->where("name","like","%$search%");
        }
        return $query;
    }
}
