<?php

namespace App\Http\Controllers;

use App\Models\
{
    User,
    Rarity,
    Nft
};
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function nft()
    {
        $raridades  = Rarity::all();
        $nfts       = Nft::orderBy('id', 'desc')->get();
        return view('site.index',compact('nfts', 'raridades'));
    }

    public function show(Request $request, $id)
    {
        $nft = Nft::find($id);
        return view('site.sales',compact('nft'));
    }
}
