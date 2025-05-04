<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    public function index()
    {
        return view('pages.informations.index');
    }

    public function show($id)
    {
        return view('pages.informations.show');
    }
}