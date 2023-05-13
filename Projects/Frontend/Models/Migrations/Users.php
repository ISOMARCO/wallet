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
			'Id' => [DB::int(11),DB::primaryKey(), DB::autoIncrement(),DB::notNull()],
            'Uid' => [DB::varchar(20),DB::unique(),DB::notNull()],
			'Username' => [DB::varchar(20),DB::unique(),DB::null()],
			'Name' => [DB::varchar(20),DB::null()]
		]);
	}

	# Down
	public function down()
	{
		# Default Query
		return $this->dropTable();
	}
}