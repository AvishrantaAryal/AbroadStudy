<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('title');
            $table->string('image');
            $table->string('altimage');
            $table->string('slug');
            $table->longtext('summary');
            $table->longtext('description');
            $table->longtext('why');
            $table->longtext('education');
            $table->longtext('cost');
            $table->string('status');
            $table->string('seotitle');
            $table->string('keywords');
            $table->longtext('seodescription');
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
        Schema::dropIfExists('studies');
    }
}
