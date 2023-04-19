<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_sidebar1()
    {
        return view('admin.sidebar1');
    }

    public function show_sidebar2()
    {
        return view('admin.sidebar2');
    }

    public function show_sidebar3()
    {
        return view('admin.sidebar3');
    }

    public function show_sidebar4()
    {
        return view('admin.sidebar4');
    }

    public function show_sidebar5()
    {
        return view('admin.sidebar5');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
