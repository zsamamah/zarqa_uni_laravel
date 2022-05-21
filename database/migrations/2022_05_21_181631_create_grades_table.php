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
        Schema::create('grades', function (Blueprint $table) {
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
            $table->string('a_tasalsol')->default('0');
            $table->string('b_tasalsol')->default('0');
            $table->string('c_tasalsol')->default('0');
            $table->string('d_tasalsol')->default('0');
            $table->string('a_fekra')->default('0');
            $table->string('b_fekra')->default('0');
            $table->string('c_fekra')->default('0');
            $table->string('d_fekra')->default('0');
            $table->string('a_mahara')->default('0');
            $table->string('b_mahara')->default('0');
            $table->string('c_mahara')->default('0');
            $table->string('d_mahara')->default('0');
            $table->string('a_code')->default('0');
            $table->string('b_code')->default('0');
            $table->string('c_code')->default('0');
            $table->string('d_code')->default('0');
            $table->string('a_ejaba')->default('0');
            $table->string('b_ejaba')->default('0');
            $table->string('c_ejaba')->default('0');
            $table->string('d_ejaba')->default('0');
            $table->string('a_entebaa')->default('0');
            $table->string('b_entebaa')->default('0');
            $table->string('c_entebaa')->default('0');
            $table->string('d_entebaa')->default('0');
            $table->enum('mostawa',['excellent','vgood','good','mid','low']);
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
        Schema::dropIfExists('grades');
    }
};
