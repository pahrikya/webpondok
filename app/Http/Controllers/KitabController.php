<?php

namespace App\Http\Controllers;

use App\Models\Kitab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class KitabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Nurul iman";
        $kitab = Kitab::all();
        // return Kitab::where('nama_program', 'kitab kuning')->first();

        return View::make('pages.kitab', compact('kitab','title'));
    }
    public function admin()
    {
        $title = "Nurul iman";
        return View::make('pages.admin.kitab.index')->with('title', $title);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kitab $kitab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kitab $kitab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kitab $kitab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kitab $kitab)
    {
        //
    }
}
