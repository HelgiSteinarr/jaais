<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreItem extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'item_id' => $this->item_id,
            'item_collection_collection_id' => $this->item_collection_collection_id,
            'item_name' => $this->item_name,
            'item_desc' => $this->item_desc,
            'item_color' => $this->item_color, 
            'item_sizes' => $this->item_sizes,
            'item_inventory' => $this->item_inventory,
            'item_price' => $this->item_price,
            'item_man_link' => url($this->item_man_link)
        ];
    }
}
