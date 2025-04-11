<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->foreignId('seller_id')->constrained('users')->onDelete('cascade');
            $table->string('bland_name');
            $table->integer('price')->nullable(false);
            $table->integer('good_count');
            $table->integer('comment_count');
            $table->text('explanation');
            $table->foreignId('category_id')->constrained('category')->onDelete('cascade');
            $table->foreignId('item_state_id')->constrained('item_state')->onDelete('cascade');
            $table->foreignId('payment_method_id')->constrained('payment_method')->onDelete('cascade');
            $table->boolean('is_good');
            $table->boolean('is_purchased');
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
        Schema::dropIfExists('item');
    }
}
