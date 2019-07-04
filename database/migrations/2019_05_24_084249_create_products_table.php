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
            $table->engine = 'InnoDB';

            $table->bigIncrements('id')->unsigned();
            $table->tinyInteger('category_id')->unsigned();
            $table->tinyInteger('brand_id')->unsigned();
            $table->string('title',255);
            $table->string('alias',255)->unique();
            $table->text('content')->nullable();
            $table->float('price')->default(0);
            $table->float('old_price')->default(0)->nullable();
            $table->enum('status',['0','1'])->default(1);
            $table->string('keywords',255)->default(NULL)->nullable();
            $table->string('description',255)->default(NULL)->nullable();
            $table->string('img',255)->nullable();
            $table->enum('hit',['0','1'])->default(0)->index();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['category_id','brand_id']);
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
