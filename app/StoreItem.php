<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreItem extends Model
{
    //
    protected $primaryKey = 'item_id';

    public function packageDeals()
    {
        return $this->belongsToMany(PackageDeal::class);
    }
    public function itemCollection()
    {
        return $this->hasOne(ItemCollection::class);
    }

}
