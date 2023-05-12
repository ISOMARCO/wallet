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
			'Id' => [DB::primaryKey(), DB::autoIncrement(),DB::notNull()],
            'Uid' => [DB::varchar(20),DB::unique(),DB::notNull()]
		]);
	}

	# Down
	public function down()
	{
		# Default Query
		return $this->dropTable();
	}
}