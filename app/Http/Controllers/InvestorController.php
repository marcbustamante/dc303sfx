<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investor;

class InvestorController extends Controller
{
    public function index() {
        $investors = Investor::orderBy('last_name', 'asc')->paginate(10);
        return inertia('Investor/Index', ['investors' => $investors]);
    }

    public function create() {
        return inertia('Investor/Create');
    }

    public function store(\Illuminate\Http\Request $request) {
        $validated = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'investment_type' => 'required|in:micro,sponsor,benefactor',
        ]);

        Investor::create($validated);

        return redirect()->route('investors.index')->with('success', 'Investor added successfully.');
    }
}