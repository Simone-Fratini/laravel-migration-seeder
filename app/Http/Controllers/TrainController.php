<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        // prendi tutti i treni ordinati per orario di partenza (ascendente)
        $trains = Train::orderBy('departure_time', 'asc')->get();

        // passa i treni alla view
        return view('index', compact('trains'));
    }
}
