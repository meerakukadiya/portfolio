<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;

class indexController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function downloadResume()
    {
        $resume = public_path('resume/'.'kukadiya_meera.pdf');
        return response()->download($resume);
       // return Response::download($resume);
    }
}
