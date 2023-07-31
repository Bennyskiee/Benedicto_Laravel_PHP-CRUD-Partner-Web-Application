<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    public function index()
    {
        $results = 10;
        $number_of_result = DB::table('vehicle')->count();
        $number_of_page = ceil($number_of_result / $results);

        $page = request()->input('page', 1);
        $page_first = ($page - 1) * $results;

        $vehicles = DB::table('vehicle')
            ->orderBy('vehicle_id', 'asc')
            ->skip($page_first)
            ->take($results)
            ->get();

        return view('vehicle', compact('vehicles', 'number_of_page'));
    }
    public function create()
    {
        return view('vehicle_create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'vehicle_model' => 'required',
            'vehicle_type' => 'required',
            'color' => 'required',
            'plate' => 'required',
            'vehicle_status' => 'required',
        ]);

        DB::table('vehicle')->insert($validatedData);

        return redirect()->route('vehicles.index')->with('success', 'Vehicle added successfully.');
    }
    public function edit($id)
    {
        $vehicle = DB::table('vehicle')->where('vehicle_id', $id)->first();

        return view('vehicle_edit', compact('vehicle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'vehicle_id' => 'required',
            'vehicle_model' => 'required',
            'vehicle_type' => 'required',
            'color' => 'required',
            'plate' => 'required',
            'vehicle_status' => 'required',
        ]);

        DB::table('vehicle')
            ->where('vehicle_id', $id)
            ->update($validatedData);

        return redirect()->route('vehicles.index')->with('success', 'Vehicle updated successfully.');
    }
    public function destroy($id)
    {
        DB::table('vehicle')->where('vehicle_id', $id)->delete();

        return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted successfully.');
    }
}
