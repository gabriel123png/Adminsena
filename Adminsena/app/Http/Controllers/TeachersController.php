<?php

namespace App\Http\Controllers; 

use App\Models\teacher;
use App\Models\Area;
use App\Models\Trainig_Center;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    
     Public function create ()
    {
        $areas = Area::all();
        $centers = Trainig_Center::all();
        return view('teacher.create', compact('areas', 'centers'));
    }

    public function store(Request $request)
    {
        $teacher = new teacher();

        $teacher->name = $request->input ('name');
        $teacher->email = $request->input ('email');
        $teacher->area_id = $request->input ('area_id');
        $teacher->trainig_center_id = $request->input ('training_center_id');
        $teacher->save();

        return $teacher;
    }
    
}
