<?php

namespace App\Http\Controllers;
use App\Models\Trainig_center;
use Illuminate\Http\Request;

class TrainingCentersController extends Controller
{


    public function create()
    {
        return view('TrainingCenters.create');
    }
    public function store(Request $request)
    {
        $trainigCenter = new Trainig_center();
        $trainigCenter->name = $request->name;
        $trainigCenter->location = $request->location;
        $trainigCenter->save();

        return $trainigCenter;
    }


}
