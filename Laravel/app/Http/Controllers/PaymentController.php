<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {
        $results = 15;
        $number_of_result = DB::table('payment')->count();
        $number_of_page = ceil($number_of_result / $results);

        $page = request()->query('page', 1);
        $page_first_ = ($page - 1) * $results;
        
        $payments = DB::table('payment')
            ->orderBy('payment_id', 'ASC')
            ->skip($page_first_)
            ->take($results)
            ->get();

        return view('payment', compact('payments', 'number_of_page'));
    }
    public function create()
    {
        return view('payment_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rent_id' => 'required|numeric',
            'mode_payment' => 'required',
            'balance' => 'required',
        ]);

        $rent_id = $request->input('rent_id');
        $mode_payment = $request->input('mode_payment');
        $balance = $request->input('balance');

        DB::table('payment')->insert([
            'rent_id' => $rent_id,
            'mode_payment' => $mode_payment,
            'balance' => $balance,
        ]);

        return redirect()->route('payments.index')->with('success', 'Payment added successfully.');
    }
    public function edit($id)
    {
        $payment = DB::table('payment')->where('payment_id', $id)->first();

        return view('payment_edit', compact('payment'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'rent_id' => 'required|numeric',
            'mode_payment' => 'required',
            'balance' => 'required',
        ]);

        $rent_id = $request->input('rent_id');
        $mode_payment = $request->input('mode_payment');
        $balance = $request->input('balance');

        DB::table('payment')
            ->where('payment_id', $id)
            ->update([
                'rent_id' => $rent_id,
                'mode_payment' => $mode_payment,
                'balance' => $balance,
            ]);

        return redirect()->route('payments.index')->with('success', 'Payment updated successfully.');
    }
    public function destroy($payment_id)
    {
        DB::table('payment')->where('payment_id', $payment_id)->delete();

        return redirect()->route('payments.index')->with('success', 'Payment deleted successfully.');
    }
}
