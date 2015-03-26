<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('blog', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('id_user');
            $table->string('name')->unique();
            $table->string('title');
            $table->longText('text');
            $table->boolean('active');
            $table->rememberToken();
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
        Schema::drop('blog');
	}

}
