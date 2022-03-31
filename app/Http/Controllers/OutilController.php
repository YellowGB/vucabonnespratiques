<?php

namespace App\Http\Controllers;

use App\Models\Outil;
use Illuminate\Http\Request;

class OutilController extends Controller
{
    public function index()
    {
        $outils = Outil::all();

        return view('outils', compact('outils'));
    }
}
