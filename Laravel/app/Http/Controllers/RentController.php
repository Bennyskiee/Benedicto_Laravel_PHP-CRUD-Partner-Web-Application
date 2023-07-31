<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RentController extends Controller
{
    public function index()
    {
        $results = 10;
        $number_of_result = DB::table('rent')->count();
        $number_of_page = ceil($number_of_result / $results);

        $page = request()->input('page', 1);
        $page_first_ = ($page - 1) * $results;

        $rents = DB::table('rent')
            ->orderBy('rent_id', 'ASC')
            ->skip($page_first_)
            ->take($results)
            ->get();

        return view('rent', compact('rents', 'number_of_page'));
    }
    public function create()
    {
        return view('rent_create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_id' => 'required|numeric',
            'vehicle_id' => 'required|numeric',
            'rent_start' => 'required|date',
            'rent_end' => 'required|date',
        ]);

        DB::table('rent')->insert($validatedData);

        return redirect()->route('rents.index')->with('success', 'Rented vehicle added successfully.');
    }
    public function edit($id)
    {
        $rent = DB::table('rent')->where('rent_id', $id)->first();


        return view('rent_edit', compact('rent'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'vehicle_id' => 'required',
            'customer_id' => 'required',
            'rent_start' => 'required|date',
            'rent_end' => 'required|date',
        ]);
    
        DB::table('rent')->where('rent_id', $id)->update($validatedData);
    
        return redirect()->route('rents.index')->with('success', 'Rented vehicle updated successfully.');
    }
    public function destroy($rent_id)
    {
        DB::table('rent')->where('rent_id', $rent_id)->delete();
        return redirect()->route('rents.index')->with('success', 'Rented vehicle deleted successfully.');
    }
}
