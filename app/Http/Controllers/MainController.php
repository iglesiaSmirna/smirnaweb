<?php namespace App\Http\Controllers;

class MainController extends Controller {


    public function index()
    {
        return view('inicio');
    }

    public function devocionales()
    {
        return view('home');
    }

}
