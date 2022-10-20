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
        Schema::create('pipeline_routes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pipeline_id')->constrained()->onDelete('cascade');
            $table->decimal('lat', 20, 10);
            $table->decimal('long', 20, 10);
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
        Schema::dropIfExists('pipeline_routes');
    }
};