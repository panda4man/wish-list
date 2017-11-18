<?php

namespace App\Transformers;

use App\Models\Item;
use League\Fractal\TransformerAbstract;

class ItemTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @param Item $item
     * @return array
     */
    public function transform(Item $item)
    {
        return [
            'id'   => $item->id,
            'name' => $item->name,
        ];
    }
}
