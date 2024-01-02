<?php

namespace App\Http\Controllers;

use App\Models\Ekstra;
use App\Models\gambarEkstra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class EkstraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Nurul iman";
        $ekstra = Ekstra::all();
        $gambar_ekstra = gambarEkstra::with('ekstra')->get();
        // return Kitab::where('nama_program', 'kitab kuning')->first();

        return View::make('pages.ekstra', compact('ekstra','title','gambar_ekstra'));
        // return View::make('pages.ekstra')->with('title', $title);
    }
    public function test()
    {
        return gambarEkstra::with('ekstra')->get();
        // $title = "Nurul iman";
        // return View::make('pages.ekstra')->with('title', $title);
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
    public function show(Ekstra $ekstra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ekstra $ekstra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ekstra $ekstra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ekstra $ekstra)
    {
        //
    }
}
