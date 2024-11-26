<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Vite;

class AboutUsController extends Controller
{
    public $team = [];

    public function __construct() {
        $this->team = [
            [
                "id" => 1,
                "name" => "Giovanni",
                "surname" => "Rossi",
                "role" => "Fondatore e CEO",
                "description" => "Giovanni è il fondatore dell'azienda e il motore creativo dietro ogni progetto. Con oltre 20 anni di esperienza nel settore, si occupa della supervisione generale e delle relazioni con i clienti, garantendo sempre la massima qualità.",
                "img" => Vite::asset('resources/img/leader.jpg'),
            ],
            [
                "id" => 2,
                "name" => "Maria",
                "surname" => "Rossi",
                "role" => "Braccio destro del CEO",
                "description" => "Maria, figlia di Giovanni, è il braccio destro del CEO. Con una formazione in design e gestione aziendale, coordina i progetti e contribuisce con idee innovative per la personalizzazione degli oggetti.",
                "img" => Vite::asset('resources/img/operaia.jpg'),
            ],
            [
                "id" => 3,
                "name" => "Luca",
                "surname" => "Bianchi",
                "role" => "Esperto di Laser",
                "description" => "Luca, marito di Maria, è l'esperto di tecnologie laser dell'azienda. Con una passione per l'innovazione e un occhio per i dettagli, gestisce tutte le operazioni tecniche legate al taglio e all'incisione laser.",
                "img" => Vite::asset('resources/img/operaio.jpg'),
            ],
        ];
    }

    public function aboutUs() {
        $title = 'Chi Siamo';
        return view('chi-siamo', ['titolo' => $title, 'team' => $this->team]);
    }

    public function details($id) {
        $title = 'Scopri di più su ';
        foreach($this->team as $member) {
            if($id == $member['id']) {
                return view('/scopri-di-piu-aboutUs', ['member' => $member, 'titolo' => $title]);
            }
        }
    }
}

