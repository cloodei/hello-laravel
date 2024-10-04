<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();
            $table->integer('season_number');
            $table->string('title');
            $table->text('description')->nullable();
            $table->foreignId('content_id')->constrained('content')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seasons');
    }
};
