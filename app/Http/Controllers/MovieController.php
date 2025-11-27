<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        return Movie::all();
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'synopsis' => 'required',
            'image' => 'required',
            'year' => 'required|integer',
            'trailer_url' => 'nullable|url'
        ]);
        return Movie::create($request->all());
    }
    public function show($id) {
        return Movie::find($id);
    }
    public function update(Request $request, $id) {
        $movie = Movie::find($id);
        $movie->update($request->all());
        return $movie;
    }
    public function destroy($id) {
        return Movie::destroy($id);
    }
}
