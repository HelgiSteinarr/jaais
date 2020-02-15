<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PackageDeal extends JsonResource
{
    /**
     *  Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'package_id' => $this->package_id,
            'package_desc' => $this->package_desc,
            'package_includes_text' => $this->package_includes_text,
            'package_price' => $this->package_price,
            'included_items' => array($this->storeItems)
        ];
    }

}
