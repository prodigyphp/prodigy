<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('prodigy_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('prodigy_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->integer('order')->nullable();
            $table->json('content')->nullable();
            $table->json('meta')->nullable();
            $table->timestamps();
        });

        Schema::create('prodigy_block_page', function (Blueprint $table) {
            $table->id();
            $table->integer('block_id');
            $table->integer('page_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prodigy_pages');
        Schema::dropIfExists('prodigy_blocks');
    }
};
