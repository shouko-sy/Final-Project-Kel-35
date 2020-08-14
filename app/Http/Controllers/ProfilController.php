<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilController extends Controller
{
    public function showProfil(){
        $profil = User::all();
        return view('profil.profil', compact('profil'));
    }
}
