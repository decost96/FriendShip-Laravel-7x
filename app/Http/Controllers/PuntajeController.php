<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuntajeController extends Controller
{
  public function juegoVista()
  {
      return view('puntaje');
  }
}
