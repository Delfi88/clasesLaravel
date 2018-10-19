<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class ActorsController extends Controller
{
    public function index(){
      return view('actors.index'); //hace falta el .blade.php???????
    }
    public function allActors(){
      return view ('actors.index')-> with $actors = App\Actor::all();
    }
}
