<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageDeal extends Model
{
    protected $primaryKey = 'package_id';

    public function storeItems()
    {
        return $this->belongsToMany(StoreItem::class);
    }
}
