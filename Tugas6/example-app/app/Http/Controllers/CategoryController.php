<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('category.tambah');
    }

    public function store(Request $request)
    {
        $request->validata([
            'name' => ['required', 'min:5'],
            'description' => ['required'],
        ]);
    }
}
