<?php


namespace App\Http\Controllers;


class bieresController
{
    public function beers($beer)
    {
        return view('bières',['glouglou' => $beer]);
    }
}
