<?php

namespace App\Http\Controllers;

use App\Models\WishList;
use App\Transformers\WishListTransformer;

class WishListsController extends Controller
{
    public function index()
    {
        $wishLists = WishList::with('items')->orderBy('name')->get();

        return view('wish-lists.index')->with('wishLists', $wishLists);
    }

    public function show(WishList $list)
    {
        $wishListJson = fractal()
            ->item($list, new WishListTransformer)
            ->includeItems()
            ->toArray();

        return view('wish-lists.show')->with([
            'wishList' => $list,
            'json'     => [
                'wishList' => $wishListJson
            ]
        ]);
    }
}
