<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDemoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('demo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('id_chip');
			$table->string('nombre');
			$table->string('apellido');
			$table->integer('nro_afiliado');
			$table->integer('nro_protesis');
			$table->text('descripcion');
			$table->date('fecha');
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
		Schema::drop('demo');
	}

}
