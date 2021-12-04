<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        return view('table');
    }

    public function datatable()
    {
        return view('datatables');
    }
}
