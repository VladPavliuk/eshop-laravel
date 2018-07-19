<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
			$table->integer('category_id')->unsigned();
			$table->integer('size_id')->unsigned()->nullable();
			$table->integer('color_id')->unsigned()->nullable();
            $table->string('image_path_on_product_page')->nullable();
            $table->string('image_path_on_category_page')->nullable();
            $table->boolean('is_consider_discount')->default(true);
            $table->integer('order_in_shopping_cart')->unsigned()->unique();
            $table->integer('in_store')->default(0)->unsigned();
			$table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();

			$table->foreign('category_id')->references('id')->on('products_categories');
			$table->foreign('size_id')->references('id')->on('products_sizes');
			$table->foreign('color_id')->references('id')->on('products_colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
