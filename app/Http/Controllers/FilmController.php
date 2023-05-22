<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FilmModel;
use App\Models\NewFilmModel;
class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = FilmModel::all();
        return view('films.index', compact('films'))->render();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $film = new NewFilmModel();
        $film->title = $request->title;
        $film->language_id = $request->language_id;
        $film->original_language_id = $request->original_language_id;
        $film->description = $request->description;
        $film->release_year = $request->release_year;
        $film->length = $request->length;
        $film->special_features = $request->special_features;

        $film->save();
        return redirect('/film');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = FilmModel::find($id);
        return view('films.show', compact('film'))->render();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
