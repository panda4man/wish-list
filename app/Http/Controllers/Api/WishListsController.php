<?php

namespace App\Http\Controllers\Api;

use App\Models\WishList;
use App\Http\Controllers\Controller;
use App\Transformers\WishListTransformer;

class WishListsController extends Controller
{
    public function index()
    {
        $lists = WishList::all();
        $lists = fractal()->collection($lists, new WishListTransformer())->toArray();

        return response()->json($lists);
    }

    public function show(WishList $list)
    {
        $list = fractal()->item($list, new WishListTransformer())->toArray();

        return response()->json($list);
    }
}
