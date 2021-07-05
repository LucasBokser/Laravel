<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    //protected $products = ["name","price","weight","quantity","available","category_id"];
    const UPDATED_AT=NULL;
    const CREATED_AT=NULL;


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

}
