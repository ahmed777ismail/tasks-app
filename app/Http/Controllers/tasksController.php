<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tasksController extends Controller
{
    public function index()
    {
        return view('tasks.index');
    }
}