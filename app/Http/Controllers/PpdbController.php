<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Nurul iman";
        return View::make('pages.ppdb')->with('title', $title);
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
    public function show(Ppdb $ppdb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ppdb $ppdb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ppdb $ppdb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ppdb $ppdb)
    {
        //
    }
}
