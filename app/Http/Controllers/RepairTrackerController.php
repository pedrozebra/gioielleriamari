<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Illuminate\Http\Request;

class RepairTrackerController extends Controller
{
    public function index(Request $request)
    {
        $repair = null;
        $searchedCode = $request->input('code');

        if ($searchedCode) {
            $repair = Repair::where('customer_code', $searchedCode)->first();
        }

        return view('repair-tracker', [
            'repair' => $repair,
            'searchedCode' => $searchedCode
        ]);
    }
}
