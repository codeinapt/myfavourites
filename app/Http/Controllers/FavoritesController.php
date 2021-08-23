<?php

namespace App\Http\Controllers;

use App\Models\favorites;
use Illuminate\Http\Request;
use App\Models\User;


class FavoritesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $datosList = request()->except('_token');
        favorites::insert($datosList);
         return response()->json($datosList);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\favorites  $favorites
     * @return \Illuminate\Http\Response
     */
    public function show(favorites $favorites)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\favorites  $favorites
     * @return \Illuminate\Http\Response
     */
    public function edit(favorites $favorites)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\favorites  $favorites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, favorites $favorites)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\favorites  $favorites
     * @return \Illuminate\Http\Response
     */
    public function destroy(favorites $favorites)
    {
        //
    }
}
