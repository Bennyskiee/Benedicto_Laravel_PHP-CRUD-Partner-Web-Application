<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    {
        $results = 15;
        $number_of_result = DB::table('customer')->count();
        $number_of_page = ceil($number_of_result / $results);

        $page = request()->input('page', 1);
        $page_first = ($page - 1) * $results;

        $customers = DB::table('customer')
            ->orderBy('lastname', 'ASC')
            ->skip($page_first)
            ->take($results)
            ->get();

        return view('client', [
            'customers' => $customers,
            'number_of_page' => $number_of_page
        ]);
    }
    public function create()
    {
        return view('client_create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $address = $request->input('address');
        $contact = $request->input('contact');

        DB::table('customer')->insert([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'address' => $address,
            'contact' => $contact,
        ]);

        return redirect()->route('client.index')->with('success', 'Customer created successfully.');
    }
    public function edit($id)
    {
        $customer = DB::table('customer')->where('customer_id', $id)->first();

        if ($customer) {
            return view('client_edit', compact('customer'));
        }

        return redirect()->route('client.index')->with('error', 'Customer not found.');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $address = $request->input('address');
        $contact = $request->input('contact');

        DB::table('customer')
            ->where('customer_id', $id)
            ->update([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'address' => $address,
                'contact' => $contact,
            ]);

        return redirect()->route('client.index')->with('success', 'Customer updated successfully.');
    }
    public function delete($id)
    {
        DB::table('customer')->where('customer_id', $id)->delete();

        return redirect()->route('client.index')->with('success', 'Customer deleted successfully.');
    }

}
