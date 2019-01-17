<?php

namespace App\Http\Controllers;
use App\Genre;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function index()
    {
        return response()->json(Genre::all(), 201);
    }

    public function store(Request $request)
    {
        $genre = Genre::create($request->all());
        return response()->json($genre, 201);
    }

    public function delete($id)
    {   
        $item = Genre::findOrFail($id);
        $item->delete();
        
        return response()->json(null, 204);
    }
}
