<?php

namespace App\Http\Controllers\Api;

use App\Models\WishList;
use App\Http\Controllers\Controller;
use App\Transformers\ItemTransformer;

class WishListItemsController extends Controller
{
    public function index(WishList $list)
    {
        $items = $list->items;
        $items = fractal()->collection($items, new ItemTransformer())->toArray();

        return response()->json($items);
    }
}
