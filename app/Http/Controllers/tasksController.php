<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tasksController extends Controller
{
    public function index()
    {
        return view('tasks.index');
    }


    public function create()
    {
        return view('tasks.add');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function edit()
    {
        return view('tasks.edit');
    }
}
