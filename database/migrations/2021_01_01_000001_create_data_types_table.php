<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTypesTable extends Migration
{
    public function up()
    {
        Schema::create('data_types', function (Blueprint $table) {
            $table->id();
            $table->string('type_name')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_types');
    }
}
