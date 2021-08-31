<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Prefecture;
use App\Models\Genre;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        foreach ($shops as $shop) {
            $prefecture =  Prefecture::where('id', $shop->prefecture_id)->first();
            $genre = Genre::where('id', $shop->genre_id)->first();
            $shop->prefecture = $prefecture->name;
            $shop->genre = $genre->name;
        }
        return response()->json([
            'data' => $shops
        ], 200);
    }
    public function show($shopId)
    {
        $shop = Shop::where('id', $shopId)->first();
        return response()->json([
            'data' => $shop
        ], 200);
    }
}
