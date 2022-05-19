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
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->string('a_takamol')->nullable();
            $table->string('b_takamol')->nullable();
            $table->string('c_takamol')->nullable();
            $table->string('d_takamol')->nullable();
            $table->string('a_seyaghah')->nullable();
            $table->string('b_seyaghah')->nullable();
            $table->string('c_seyaghah')->nullable();
            $table->string('d_seyaghah')->nullable();
            $table->string('a_wodoh')->nullable();
            $table->string('b_wodoh')->nullable();
            $table->string('c_wodoh')->nullable();
            $table->string('d_wodoh')->nullable();
            $table->string('a_shareh')->nullable();
            $table->string('b_shareh')->nullable();
            $table->string('c_shareh')->nullable();
            $table->string('d_shareh')->nullable();
            $table->string('a_ekhraj')->nullable();
            $table->string('b_ekhraj')->nullable();
            $table->string('c_ekhraj')->nullable();
            $table->string('d_ekhraj')->nullable();
            $table->string('a_holol')->nullable();
            $table->string('b_holol')->nullable();
            $table->string('c_holol')->nullable();
            $table->string('d_holol')->nullable();
            $table->string('a_ettelah')->nullable();
            $table->string('b_ettelah')->nullable();
            $table->string('c_ettelah')->nullable();
            $table->string('d_ettelah')->nullable();
            $table->string('a_johod')->nullable();
            $table->string('b_johod')->nullable();
            $table->string('c_johod')->nullable();
            $table->string('d_johod')->nullable();
            $table->string('a_ebdah')->nullable();
            $table->string('b_ebdah')->nullable();
            $table->string('c_ebdah')->nullable();
            $table->string('d_ebdah')->nullable();
            $table->string('a_sohola')->nullable();
            $table->string('b_sohola')->nullable();
            $table->string('c_sohola')->nullable();
            $table->string('d_sohola')->nullable();
            $table->string('a_tasalsol')->nullable();
            $table->string('b_tasalsol')->nullable();
            $table->string('c_tasalsol')->nullable();
            $table->string('d_tasalsol')->nullable();
            $table->string('a_eltezam')->nullable();
            $table->string('b_eltezam')->nullable();
            $table->string('c_eltezam')->nullable();
            $table->string('d_eltezam')->nullable();
            $table->enum('monakasha',['yes','no'])->nullable();
            $table->enum('k_jawayez',['yes','no'])->nullable();
            $table->enum('j_jawayez',['yes','no'])->nullable();
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
        Schema::dropIfExists('marks');
    }
};
