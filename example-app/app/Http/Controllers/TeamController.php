<?php


namespace App\Http\Controllers;


class TeamController
{
    public function listeTeam()
    {
        return view('equipe');
    }

    public function team($prenom)
    {
        return view('cv.allCV',['monPrenom' => $prenom]);
    }
}
