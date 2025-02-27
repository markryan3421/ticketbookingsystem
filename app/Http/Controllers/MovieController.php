<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function showSingleMovie(Movie $movie) {
        return view('single-movie', compact('movie'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-movie-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'release_date' => 'required',
        ]);

        $incomingFields['movie_slug'] = Str::slug($incomingFields['title']);

        $newMovie = Movie::create($incomingFields);

        return redirect("/single-movie/{$newMovie->movie_slug}");
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return view('edit-movie', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'release_date' => 'required',
        ]);

        $incomingFields['movie_slug'] = Str::slug($incomingFields['title']);


        $movie->update($incomingFields);

        return redirect("/single-movie/{$movie->movie_slug}")->with('success', 'Movie successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect('/homepage')->with('success', 'Movie successfully deleted.');
    }
}
