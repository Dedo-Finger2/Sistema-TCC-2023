<?php

namespace App\Http\Controllers;

use App\Interfaces\ICriacaoParalela;
use Illuminate\Http\Request;

class FeedbackController extends Controller implements ICriacaoParalela
{
    public function create()
    {
        return view("Usuario.feedback");
    }

    public function store(Request $request)
    {
        # code...
        var_dump($request->all());
    }

    public function parallelStore(array $data)
    {
        # code...
    }
}
