<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Season;
use App\Models\Series;
use Illuminate\Http\Request;

class SeasonsController extends Controller
{
    public function index(Series $series)
    {

        $seasons = Season::query()->with('episodes')->get();

        return view('seasons.index')->with('seasons', $seasons)->with('series', $series);
    }
}
