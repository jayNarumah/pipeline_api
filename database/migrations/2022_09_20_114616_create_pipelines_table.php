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
        Schema::create('pipelines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pipeline_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->decimal('size', 10, 2);
            $table->decimal('start_lat', 20, 10);
            $table->decimal('start_long', 20, 10);
            $table->decimal('end_lat', 20, 10);
            $table->decimal('end_long', 20, 10);
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('pipelines');
    }
};