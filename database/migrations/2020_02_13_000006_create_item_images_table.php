<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemImagesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'item_images';

    /**
     * Run the migrations.
     * @table item_images
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('image_id');
            $table->string('image_name');
            $table->string('image_location');
            $table->unsignedInteger('store_items-item_id');

            $table->index(["store_items-item_id"], 'fk_item_images_store_items_idx');

            $table->unique(["image_id"], 'image_id_UNIQUE');


            $table->foreign('store_items-item_id', 'fk_item_images_store_items_idx')
                ->references('item_id')->on('store_items')
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
