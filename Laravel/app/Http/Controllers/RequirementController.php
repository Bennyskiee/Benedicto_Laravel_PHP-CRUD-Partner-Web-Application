<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequirementController extends Controller
{
    public function index()
    {
        $results = 10;
        $number_of_result = DB::table('requirements')->count();
        $number_of_page = ceil($number_of_result / $results);

        $page = request()->query('page', 1);
        $page_first = ($page - 1) * $results;

        $requirements = DB::table('requirements')
            ->select('requirements.requirements_id', 'requirements.customer_id', 'requirements.requirement')
            ->orderBy('requirements.requirements_id', 'ASC')
            ->skip($page_first)
            ->take($results)
            ->get();

        return view('requirement', compact('requirements'));
    }
    public function create()
    {
        return view('requirements_add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_id' => 'required|numeric',
            'requirement' => 'required|numeric',
        ]);

        DB::table('requirements')->insert($validatedData);

        return redirect()->route('requirements.index')->with('success', 'Requirement added successfully.');
    }
    public function edit($id)
    {
        $requirements = DB::table('requirements')->where('requirements_id', $id)->first();
    
        return view('requirements_edit', compact('requirements'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'customer_id' => 'required',
            'requirement' => 'required',
        ]);
    
        DB::table('requirements')->where('requirements_id', $id)->update($validatedData);
    
        return redirect()->route('requirements.index')->with('success', 'Requirement updated successfully.');
    }
    public function destroy($requirements_id)
    {
        DB::table('requirements')->where('requirements_id', $requirements_id)->delete();
        return redirect()->route('requirements.index')->with('success', 'Requirement deleted successfully.');
    }
}
