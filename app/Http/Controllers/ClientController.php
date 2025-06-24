<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function accueil()
    {

        return view('client.index');
    }

    public function a_propos()
    {

        return view('client.about');
    }

    public function services()
    {

        return view('client.service');
    }

    public function formations()
    {

        return view('client.formation');
    }

    public function events()
    {

        return view('client.event');
    }

    public function contact()
    {

        return view('client.contact');
    }
}
