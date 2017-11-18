<?php

namespace App\Http\Controllers;

use App\Models\WishList;

class WishListsController extends Controller
{
    public function index()
    {
        return view('wish-lists.index');
    }

    public function show(WishList $list)
    {
        return view('wish-lists.show')->with('wishList', $list);
    }
}
