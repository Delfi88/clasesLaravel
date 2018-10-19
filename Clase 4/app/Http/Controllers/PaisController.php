<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
  public function show ($pais){
    switch ($pais) {
    case "Argentina":
        return "La capital es Buenos Aires";
        break;
    case "Uruguay":
        echo "La capital es Montevideo";
        break;
    case "Peru":
        echo "La capital es Lima";
        break;
      }
}
}
