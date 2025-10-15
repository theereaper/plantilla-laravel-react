<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            // ID como UUID
            $table->uuid('id')->primary();

            // Identificadores
            $table->string('barcode');
            $table->string('sku');

            // Desciptores
            $table->string('name');
            $table->string('description');
            $table->string('price');
            $table->integer('quantity');
            $table->string('brand');
            $table->string('model');

            $table->string('status');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
};
