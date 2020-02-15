<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreItemsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'store_items';

    /**
     * Run the migrations.
     * @table store_items
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('item_id');
            $table->unsignedInteger('collection_id');
            $table->string('item_name', 60);
            $table->string('item_desc')->nullable();
            $table->string('item_color', 60)->nullable();
            $table->string('item_sizes', 60)->nullable();
            $table->unsignedInteger('item_inventory');
            $table->float('item_price');
            $table->string('item_man_link', 200)->nullable();

            $table->primary('item_id');
            $table->index(["collection_id"], 'fk_store_items_item_collections1_idx');


            $table->foreign('collection_id', 'fk_store_items_item_collections1_idx')
                ->references('collection_id')->on('item_collections')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
