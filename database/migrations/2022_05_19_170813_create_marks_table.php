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
            $table->string('a_takamol')->default('0');
            $table->string('b_takamol')->default('0');
            $table->string('c_takamol')->default('0');
            $table->string('d_takamol')->default('0');
            $table->string('a_seyaghah')->default('0');
            $table->string('b_seyaghah')->default('0');
            $table->string('c_seyaghah')->default('0');
            $table->string('d_seyaghah')->default('0');
            $table->string('a_wodoh')->default('0');
            $table->string('b_wodoh')->default('0');
            $table->string('c_wodoh')->default('0');
            $table->string('d_wodoh')->default('0');
            $table->string('a_shareh')->default('0');
            $table->string('b_shareh')->default('0');
            $table->string('c_shareh')->default('0');
            $table->string('d_shareh')->default('0');
            $table->string('a_ekhraj')->default('0');
            $table->string('b_ekhraj')->default('0');
            $table->string('c_ekhraj')->default('0');
            $table->string('d_ekhraj')->default('0');
            $table->string('a_holol')->default('0');
            $table->string('b_holol')->default('0');
            $table->string('c_holol')->default('0');
            $table->string('d_holol')->default('0');
            $table->string('a_ettelah')->default('0');
            $table->string('b_ettelah')->default('0');
            $table->string('c_ettelah')->default('0');
            $table->string('d_ettelah')->default('0');
            $table->string('a_johod')->default('0');
            $table->string('b_johod')->default('0');
            $table->string('c_johod')->default('0');
            $table->string('d_johod')->default('0');
            $table->string('a_ebdah')->default('0');
            $table->string('b_ebdah')->default('0');
            $table->string('c_ebdah')->default('0');
            $table->string('d_ebdah')->default('0');
            $table->string('a_sohola')->default('0');
            $table->string('b_sohola')->default('0');
            $table->string('c_sohola')->default('0');
            $table->string('d_sohola')->default('0');
            $table->string('a_tasalsol')->default('0');
            $table->string('b_tasalsol')->default('0');
            $table->string('c_tasalsol')->default('0');
            $table->string('d_tasalsol')->default('0');
            $table->string('a_eltezam')->default('0');
            $table->string('b_eltezam')->default('0');
            $table->string('c_eltezam')->default('0');
            $table->string('d_eltezam')->default('0');
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
