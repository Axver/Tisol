<?php namespace App\Controllers;

class Flight extends BaseController
{
    public function index($from,$destination,$date)
    {

//           echo $from;
//           echo $destination;
//           echo $date;

        return view('dashboard');

    }

    //--------------------------------------------------------------------

}
