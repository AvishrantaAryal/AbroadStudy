<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->string('image');
            $table->string('altimage');
            $table->longtext('summary');
            $table->longtext('description');
            $table->string('courselayouttitle1')->nullable();
            $table->string('courselayouttitle2')->nullable();
            $table->string('courselayouttitle3')->nullable();
            $table->longtext('courselayoutdes1')->nullable();
            $table->longtext('courselayoutdes2')->nullable();
            $table->longtext('courselayoutdes3')->nullable();
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
        Schema::dropIfExists('classes');
    }
}
