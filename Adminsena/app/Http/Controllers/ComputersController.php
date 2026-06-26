<?php

namespace App\Http\Controllers;

use App\Models\Computer;

use Illuminate\Http\Request;

class ComputersController extends Controller
{
    //
     public function create()
    {
        return view('computer.create');
    }
    public function store(Request $request)
    {
        $computer = new Computer();
        $computer->number = $request->number;
        $computer->brand = $request->brand;
        $computer->save();

        return $computer;
    }
}
