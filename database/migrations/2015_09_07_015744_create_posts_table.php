<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('idpengguna');
			$table->string('judul');
			$table->string('isi');
			$table->string('tag');
			//$table->integer('hapus');  di nonaktifkan
			$table->string('slug');
			$table->string('sampul');
			$table->timestamps();
			$table->softDeletes(); //tambahan
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
