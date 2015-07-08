<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomFieldsThreadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('threads', function(Blueprint $table)
		{

            $table->boolean('public')->after('subject')->default(0);
            $table->boolean('status')->after('public')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

        Schema::table('threads', function(Blueprint $table)
        {
            $table->removeColumn('public');
            $table->removeColumn('status');
        });
	}

}
