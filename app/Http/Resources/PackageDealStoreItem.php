<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PackageDealStoreItem extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'package_deals_package_id' => $this->package_deals_package_id,
            'store_item_item_id' => $this->store_item_item_id
        ];
    }
}
