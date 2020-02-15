<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageDealStoreItemTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'package_deal_store_item';

    /**
     * Run the migrations.
     * @table package_deals_has_store_items
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('package_deal_package_id');
            $table->unsignedInteger('store_item_item_id');

            $table->index(["store_item_item_id"], 'fk_package_deal_store_item_store_item1_idx');

            $table->index(["package_deal_package_id"], 'fk_package_deal_store_item_package_deal1_idx');


            $table->foreign('package_deal_package_id', 'fk_package_deal_store_item_package_deal1_idx')
                ->references('package_id')->on('package_deals')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('store_item_item_id', 'fk_package_deal_store_item_store_item1_idx')
                ->references('item_id')->on('store_items')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
