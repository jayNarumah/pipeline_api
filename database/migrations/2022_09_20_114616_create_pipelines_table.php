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
            $table->foreignId('pipeline_type_id')->constrained();
            $table->foreignId('company_id')->constrained();
            $table->string('name');
            $table->decimal('size', 10, 2);
            $table->decimal('start_lat', 10, 2);
            $table->decimal('start_long', 10, 2);
            $table->decimal('end_lat', 10, 2);
            $table->decimal('end_long', 10, 2);

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
