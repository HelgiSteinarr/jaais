<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemCollection extends Model
{
    protected $primaryKey = 'collection_id';
    
    public function storeItems()
    {
        return $this->hasMany(StoreItem::class);
    }
}
