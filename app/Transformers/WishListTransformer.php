<?php

namespace App\Transformers;

use App\Models\WishList;
use League\Fractal\TransformerAbstract;

class WishListTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['items'];

    /**
     * A Fractal transformer.
     *
     * @param WishList $list
     * @return array
     */
    public function transform(WishList $list)
    {
        return [
            'id'   => $list->id,
            'name' => $list->name,
        ];
    }

    public function includeItems(WishList $list)
    {
        if(!$list->relationLoaded('items')) {
            $list->load('items');
        }

        $items = $list->items;

        return $this->collection($items, new ItemTransformer());
    }
}
