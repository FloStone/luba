<?php

namespace Luba\Commands;

use Luba\Framework\Migrator;
use Flo\MySQL\MySQL;
use SQL;

class migrate extends Migrator
{
	/**
	 * Build your tables
	 * @return void
	 */
	public function build()
	{
		#...
	}

	/**
	 * Destroy your tables
	 * @return void
	 */
	public function destroy()
	{
		#...
	}
}