<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // prendo solo le righe in cui il valore di 'orario_di_partenza' è uguale alla data odierna
        $trains = Train::select('azienda','stazione_di_partenza','stazione_di_arrivo','orario_di_partenza')->get();
                        // ->whereDate('orario_di_partenza', '>=', today() )->get();

        return view('home', compact('trains'));
    }
}
