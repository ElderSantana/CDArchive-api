<?php

namespace App\Http\Controllers;
use App\CdArchives;
use Illuminate\Http\Request;

class CdArchivesController extends Controller
{
    public function index()
    {
        return response()->json(CdArchives::all(), 201);
    }

    public function store(Request $request)
    {
        $cd = CdArchives::create($request->all());
        return response()->json($cd, 201);
    }

    public function delete($id)
    {   
        $item = CdArchives::findOrFail($id);
        $item->delete();
        
        return response()->json(null, 204);
    }
}
