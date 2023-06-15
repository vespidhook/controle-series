<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Series;
use Illuminate\Http\Request;

class SeasonsController extends Controller
{
    public function index(Series $series)
    {
//        dd($series);
        $seasons = $series->seasons;

        return view('seasons.index')->with('seasons', $seasons);
    }
}
