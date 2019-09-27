<?php namespace App\Controllers;

class Flight extends BaseController
{
    public function index($from,$destination,$date)
    {
        return view('dashboard');

    }

    public function home()
    {
        return view('dashboard');
    }

    //--------------------------------------------------------------------

}
