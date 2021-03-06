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
            $table->IntlIterator('Id_products');
            $table->string('name',255);
            $table->string('image');
            $table->decimal('price',8,2);
            $table->string('categorys',255);
            $table->IntlIterator('Id_categorys');
            $table->IntlIterator('Id_admin');
            
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
