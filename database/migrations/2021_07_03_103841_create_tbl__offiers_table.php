<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblOffiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl__offiers', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->string('name');
            $table->string('mobile');
            $table->string('joindate');
            $table->string('enddate');
            $table->string('image');
            $table->string('address');
            $table->string('office_address');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            
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
        Schema::dropIfExists('tbl__offiers');
    }
}
