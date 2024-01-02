<?php

namespace App\Http\Controllers;

use App\Models\Tahfidz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TahfidzController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Nurul iman";
        $tahfidz = Tahfidz::all();
        // return Kitab::where('nama_program', 'kitab kuning')->first();

        return View::make('pages.tahfidz', compact('tahfidz','title'));


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
    public function show(Tahfidz $tahfidz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tahfidz $tahfidz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tahfidz $tahfidz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tahfidz $tahfidz)
    {
        //
    }
}
