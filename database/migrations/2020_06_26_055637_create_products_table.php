<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->timestamps();
            $table->string("title", 255)->nullable();
            $table->decimal("regular_price", 6, 2);
            $table->decimal("flate_price", 6, 2);
            $table->text("shortdes")->nullable();
            $table->text("product_info")->nullable();
            $table->integer("cat_id")->nullable();
            $table->decimal("price", 8, 2);
            $table->string('tag')->nullable();
            $table->string('feature_image')->nullable();
            $table->string('home_section')->nullable();
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
