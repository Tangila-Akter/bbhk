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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->string("vacancy")->nullable();
            $table->string("type")->nullable();
            $table->string("requirement")->nullable();
            $table->string("salary")->nullable();
            $table->string("time")->nullable();
            $table->string("holiday")->nullable();
            $table->string("deadline")->nullable();
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
        Schema::dropIfExists('jobs');
    }
};
