<?php
class InternalMigrateAccount extends ZN\Database\Migration
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
			'Name' => [DB::varchar(20),DB::null()],
			'User' => [DB::varchar(30),DB::null()],
            'Active' => [DB::tinyInt(),DB::null(),DB::defaultValue('1')]
		]);
	}

	# Down
	public function down()
	{
		# Default Query
		return $this->dropTable();
	}
}