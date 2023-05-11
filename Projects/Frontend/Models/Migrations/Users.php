<?php
class InternalMigrateUsers extends ZN\Database\Migration
{
	# Class/Table Name
	const table = __CLASS__;

	# Up
	public function up()
	{
		# Default Query
		return $this->createTable
		([
			'id' => [DB::int(11), DB::primaryKey(), DB::autoIncrement()]
		]);
	}

	# Down
	public function down()
	{
		# Default Query
		return $this->dropTable();
	}
}