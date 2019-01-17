<?php

namespace App\Http\Controllers;
use App\Timer;
use Illuminate\Http\Request;

class TimerController extends Controller
{
    public function index()
    {
        return response()->json(Timer::all(), 201);
    }

    public function store(Request $request)
    {
        $timer = Timer::create($request->all());
        return response()->json($timer, 201);
    }

    public function delete($id)
    {   
        $item = Timer::findOrFail($id);
        $item->delete();
        
        return response()->json(null, 204);
    }
}
