<?php


namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Category extends \Illuminate\Database\Eloquent\Model
{

    public function products()
    {

        return $this->hasMany(Product::class);
    }

}
