<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
  	Schema::create('postulantes', function (Blueprint $table){
  		$table->bigIncrements('id');
  		$table->string('nombre');
  		$table->string('imagen');
  		$table->string('puesto');
  		$table->timestamps();
  	});
  }

  public function down(): void
  {
    //
  }
};
