<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// utilizzo il modello train
use App\Models\Train;

class PageController extends Controller
{
    public function index() {
        // richiamo la tabella del DB
        $trains = Train::all();
        // dd($trains);
        return view('trains.index', compact('trains'));
    }
}
