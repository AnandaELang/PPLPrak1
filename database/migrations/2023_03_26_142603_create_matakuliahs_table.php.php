<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatakuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('mata_kuliahs', function (Blueprint $table) {
            $table->id();
            $table->string('matakuliah_kodemk');
            $table->string('matakuliah_nama');
            $table->boolean('matakuliah_bk1')->default(false);
            $table->boolean('matakuliah_bk2')->default(false);
            $table->boolean('matakuliah_bk3')->default(false);
            $table->boolean('matakuliah_bk4')->default(false);
            $table->boolean('matakuliah_bk5')->default(false);
            $table->boolean('matakuliah_bk6')->default(false);
            $table->boolean('matakuliah_bk7')->default(false);
            $table->boolean('matakuliah_bk8')->default(false);
            $table->boolean('matakuliah_bk9')->default(false);
            $table->boolean('matakuliah_bk10')->default(false);
            $table->boolean('matakuliah_bk11')->default(false);
            $table->boolean('matakuliah_bk12')->default(false);
            $table->boolean('matakuliah_bk13')->default(false);
            $table->boolean('matakuliah_bk14')->default(false);
            $table->boolean('matakuliah_bk15')->default(false);
            $table->boolean('matakuliah_bk16')->default(false);
            $table->boolean('matakuliah_bk17')->default(false);
            $table->boolean('matakuliah_bk18')->default(false);
            $table->boolean('matakuliah_bk19')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matakuliah');
    }
}

