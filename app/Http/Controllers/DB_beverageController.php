<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beverage;

class DB_beverageController extends Controller
{

    public function getDrink(){

      $values = Beverage::all();
      $color = 'lightblue';
      $min = Beverage::all()->min('prezzo');
      $max = Beverage::all()->max('prezzo');
      $avg = Beverage::all()->avg('prezzo');

      return view('drink_box', compact('values', 'color', 'min', 'max', 'avg'));
    }
}
