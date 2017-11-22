<?php

namespace App\Http\Controllers;

use App\Models\WishList;

class WishListsController extends Controller
{
    public function index()
    {
        $wishLists = WishList::orderBy('name')->get();

        return view('wish-lists.index')->with('wishLists', $wishLists);
    }

    public function show(WishList $list)
    {
        return view('wish-lists.show')->with('wishList', $list);
    }
}
