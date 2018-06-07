<?php

namespace Luba\Commands;

use Luba\Framework\Migrator;
use SQL;

class migrate extends Migrator
{
	protected static $description = "\tCreate or destroy database tables.";

	/**
	 * Build your tables
	 * @return void
	 */
	public function build()
	{
		SQL::createBasic('testtable', function($table){
			$table->string('huhu');
		});
	}

	/**
	 * Destroy your tables
	 * @return void
	 */
	public function destroy()
	{
		SQL::drop('testtable');
	}
}