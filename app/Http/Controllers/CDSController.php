<?php

namespace App\Http\Controllers;
use App\CdArchives;
use Illuminate\Http\Request;

class CDSController extends Controller
{
    public function index()
    {
        return response()->json(CDS::all(), 201);
    }

    public function store(Request $request)
    {
        $cd = CDS::create($request->all());
        return response()->json($cd, 201);
    }

    public function delete($id)
    {   
        $item = CDS::findOrFail($id);
        $item->delete();
        
        return response()->json(null, 204);
    }
}
