<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index()
    {
    }
    public function store(Request $request)
    {
        $like = Like::create($request->all());
        return response()->json([
            'data' => $like
        ], 201);
    }
}
