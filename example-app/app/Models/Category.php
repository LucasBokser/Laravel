<?php


namespace App\Models;


class Category extends \Illuminate\Database\Eloquent\Model
{

    public function products()
    {

        return $this->hasMany(Product::class);
    }

}
