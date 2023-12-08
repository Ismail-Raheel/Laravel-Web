<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id('Cart_Id');
            $table->unsignedBigInteger('Product_Id');
            $table->string('Product_Name');
            $table->integer('Product_Price');
            $table->integer('Product_Qty');
            $table->string('Product_code');
            $table->unsignedBigInteger('User_Id');
            $table->foreign('User_Id')->references('User_Id')->on('users')->onUpdate('cascade')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
