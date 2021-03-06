<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistrationOptionsTable extends Migration {

	public function up()
	{
		Schema::create('registration_options', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->string('label');
			$table->boolean('active')->default(false);
			$table->integer('order')->default(0)->nullable();
			$table->string('details')->nullable();
			$table->boolean('cost')->default(false);
			$table->boolean('slots')->default(false);
			$table->boolean('required')->default(false);
			$table->integer('option_type_id')->unsigned()->index();
			$table->integer('form_id')->unsigned()->index();
		});
	}

	public function down()
	{
		Schema::drop('registration_options');
	}
}