<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function index()
    {
        $expenses = DB::table('expenses')->get();
        $totalexpenses = 0.00;
        $totalpayments = 0.00;
        foreach($expenses as $ex)
        {
            $totalexpenses+=$ex->amount;
        }
        $payments = DB::table('payments')->get();

        foreach($payments as $pay)
        {
            $totalpayments+=$pay->amount_paid;
        }

        $tenantcount = count(DB::table('tenants')->where('rental_status', 'ACTIVE')->get());
        $vacantcount = count(DB::table('rooms')->where('status', 'VACANT')->get());
        return view('dashboard.index', compact('totalexpenses','totalpayments','tenantcount', 'vacantcount'));
    }
}
