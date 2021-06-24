<?php


namespace App\Http\Controllers;


class TeamController
{
    public function listeTeam()
    {
        $products = DB::select('select * from products');
        return view('equipe',['monPrenom' => $prenom]);
    }

    public function team($prenom)
    {
        return view('cv.allCV',['monPrenom' => $prenom]);
    }
}
