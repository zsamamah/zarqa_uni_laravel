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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->unsignedBigInteger('owner_dr');
            $table->foreign('owner_dr')->references('id')->on('users');
            $table->unsignedBigInteger('presenter_id')->nullable();
            $table->foreign('presenter_id')->references('id')->on('users');
            $table->string('students')->default('0');
            $table->string('date')->nullable();
            $table->string('link')->nullable();
            $table->string('short_des');
            $table->string('langs');
            $table->text('full_des');
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
        Schema::dropIfExists('projects');
    }
};
