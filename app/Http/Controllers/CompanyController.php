<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return view("Company.index", compact("companies"));
    }

    public function create(Request $request)
    {
        return view("Company.create");
    }

    public function store(Request $request)
    {
        $company = $request->all();
        $company['password'] = bcrypt($request->password);
        $company = Company::create($company);

        Auth::guard('admin')->login($company);


        return redirect()->route('companies.dashboard');
    }

    public function dashboard()
    {
        $companies = Company::all();

        return view('Company.dashboard', compact('companies'));
    }
}
